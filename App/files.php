<?php
    try{
        if(isset($_POST["submit"]))
        $uploadFolder = "uploads/";

    //alapvető információ
    $fileName = basename($_FILES["kep"]["name"]);
    $tempFileName = $_FILES["kep"]["tmp_name"];
    $fileSize = $_FILES["kep"]["size"];
    $error = $_FILES["kep"]["error"];
    $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    $targetFile = $uploadFolder . $fileName;

    //ellenőrzések

    //1. Hiba a feltöltött file-val
    if($error)
    {
        throw new Exception("Hiba történt a fájl feltöltése során: $error");
    }
    //2. Feltöltési mappa létezése vagy írása
    if(!is_dir($uploadFolder) || !is_writable($uploadFolder))
    {
        throw new Exception("A feltöltési mappa nem létezik, vagy nincs írási joga.");
    }
    //3. már létező fájl
    if(file_exists($targetFile))
    {
        throw new Exception("A fájl már létezik.");
    }
    //4. fájl mérete
    if($fileSize > 5000000)
    {
        throw new Exception("A fájl mérete túl nagy. Maximum 5MB engedélyezett.");
    }
    //5. fájl típusa
    if(!in_array($fileType, ['jpg', 'jpeg', 'png', 'gif']))
    {
        throw new Exception("Csak JPG, JPEG, PNG és GIF fájlok engedélyezettek.");
    }
    // fájl áthelyezése temp helyről a cél helyre
    if(move_uploaded_file($tempFileName, $targetFile))
    {
        echo "A fájl sikeresen feltöltve: $targetFile";
    }
    else
    {
        throw new Exception("Hiba történt a fájl feltöltése során.");
    }
}
    catch(Exception $ex)
    {
        echo "Hiba történt: {$ex->getMessage()}";
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fileupload</title>
</head>
<body>
    <h2>Fájl feltöltése</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="kép">Válassz egy képet a feltöltéshez</label>
        <input type="file" name="kep" id="kep">
        <button type="submit" name="submit">Feltöltés</button>
    </form>
</body>
</html>
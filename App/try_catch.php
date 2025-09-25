<?php
    $dataFile = "data.txt";
    $logFile = "log.txt";
    $message = "";
    $error = "";
    $currentContent = "";

    try {
        if(file_exists($dataFile)) {
            $currentContent = file_get_contents($dataFile);
        } else {
            throw new Exception("A fájl nem létezik");
        }

        if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["new_content"])) {
            $newContent = $_POST["new_content"];
            if (file_put_contents($dataFile, $newContent) !== false) {
                $message = "Sikeresen módosult a $dataFile fájl tartalma";

                // naplózás
                $currentTime = date("Y-m-d H:i:s");
                $logEntry = "[$currentTime] Módosítás: $dataFile fájl tartalma módosítva lett.\n";
                if(file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX) == false) {
                    throw new Exception("Nem sikerült naplózni a módosítást");
                }
                
            }
            else
            {
                throw new Exception("Nem sikerült módosítani a fájlt");
            }

            // Frissítsük a megjelenített tartalmat
            $currentContent = $newContent;
        }

    } catch(Exception $ex) {
        $error = "Hiba történt: " . $ex->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>try-catch</title>
</head>
<body>
    <h2>A data.txt tartalma:</h2>
    <?php if(!empty($error)): ?>
        <p style="color:red"><?= $error ?></p>
    <?php endif; ?>

    <?php if(!empty($message)): ?>
        <p style="color:green"><?= $message ?></p>
    <?php endif; ?>

    <?php if(isset($currentContent)): ?>
        <pre><?= htmlspecialchars($currentContent) ?></pre>
    <?php endif; ?>

    <h2>Módosítás</h2>
    <form action="" method="post">
        <label for="new_content">Új tartalom:</label><br>
        <textarea name="new_content" id="new_content" rows="2" cols="15"><?= htmlspecialchars($currentContent) ?></textarea><br>
        <button type="submit">Mentés</button>
    </form>
</body>
</html>
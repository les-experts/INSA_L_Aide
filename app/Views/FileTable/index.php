
<!DOCTYPE html5>
<html>
    <head>
        <?= view("FileTable/head.php") ?>
    </head>
    <body>
        <?= view("FileTable/fileTable.php", array("files" => $files)) ?>
    </body>
</html>

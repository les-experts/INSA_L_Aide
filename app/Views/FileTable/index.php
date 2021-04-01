
<!DOCTYPE html5>
<html>
    <head>
        <?php 
            
            use App\Controllers\Head;
            $head = new Head();
            echo $head->getCss();

        //view("FileTable/head.php") ?>
    </head>
    <body>
        <?= view("FileTable/fileTable.php", array("files" => $files)) ?>
    </body>
</html>

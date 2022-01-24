<?php
    define('DIRECTORY', '../images/uploads');

    $content = file_get_contents($_POST['file']);
    file_put_contents(DIRECTORY.'/temp.jpg', $content);
    
    echo $_POST['file'];
?>
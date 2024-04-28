<!DOCTYPE html>
<html>
<head>
    <title>Upload Excel File</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select Excel File:
        <input type="file" name="excel" id="excel" accept=".xls,.xlsx,.ods">
        <br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>
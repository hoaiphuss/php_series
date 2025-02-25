# $_FILES
- Xử lý upload file

- Dùng để tải lên file thông qua form HTML.
    - Upload file
    ```php
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Chọn file: <input type="file" name="fileToUpload">
        <input type="submit" value="Upload">
    </form>
    ```
    - Xử lý file

    ```php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "File " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " đã tải lên thành công.";
    } else {
        echo "Lỗi upload file!";
    }
    ```
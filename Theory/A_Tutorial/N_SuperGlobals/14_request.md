# $_REQUEST
- Nhận dữ liệu từ form GET và POST
    - $_REQUEST lấy dữ liệu từ cả $_GET và $_POST

- Form
    ```php
    <form method="post" action="welcome.php">
        Name: <input type="text" name="name">
        <input type="submit">
    </form>
    ```

- Xử lý dữ liệu gửi đi
    ```php
    echo "Xin chào, " . $_REQUEST["name"];
    ```
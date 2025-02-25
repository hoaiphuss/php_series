# $_GET
- $_GET là một mảng chứa các biến được gửi qua phương thức HTTP GET.

- Có hai cách chính để gửi biến bằng phương thức GET:
    - Chuỗi truy vấn (Query String) trong URL.

    - Biểu mẫu HTML (HTML Forms)

```php
// URL: example.com/welcome.php?name=John&age=25

echo "Tên: " . $_GET["name"]; // John
echo "Tuổi: " . $_GET["age"]; // 25
```

## Chuỗi truy vấn trong URL
- Một query string (chuỗi truy vấn) là dữ liệu được thêm vào cuối URL sau dấu ?.

    ```html
    <a href="demo_phpfile.php?subject=PHP&web=W3schools.com">Test $GET</a>
    ```

- Phần sau dấu ? là query string, bao gồm hai cặp key/value:
    - subject=PHP

    - web=W3schools.com

- Ở trang PHP demo_phpfile.php:
    - Ta có thể lấy giá trị của các biến bằng $_GET:

    ```php
    <?php
        echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
    ?>
    ```

- Output:

    ```
    Study PHP at W3schools.com
    ```

## Sử dụng $_GET trong Biểu mẫu HTML
- Nếu một biểu mẫu HTML sử dụng phương thức "GET"
    - Dữ liệu nhập vào sẽ được gửi đi dưới dạng query string.

```html
<html>
<body>

<form action="welcome_get.php" method="GET">
    Name: <input type="text" name="name">
    E-mail: <input type="text" name="email">
    <input type="submit">
</form>

</body>
</html>
```

- Khi người dùng nhập thông tin và nhấn Submit:
    - dữ liệu sẽ được gửi đến welcome_get.php dưới dạng query string:

```
welcome_get.php?name=John&email=john@example.com
```

- Trong tệp welcome_get.php, ta có thể lấy dữ liệu bằng $_GET:

```php
<html>
    <body>

    Welcome <?php echo $_GET["name"]; ?><br>
    Your email address is: <?php echo $_GET["email"]; ?>

    </body>
</html>
```

## Lưu ý về bảo mật khi sử dụng $_GET
- Không có kiểm tra dữ liệu:
    - Nếu người dùng nhập dữ liệu không hợp lệ hoặc độc hại, hệ thống có thể bị tấn công.

- Dữ liệu hiển thị trên URL:
    - Vì dữ liệu gửi qua GET hiển thị trong URL, không nên dùng cho thông tin nhạy cảm như mật khẩu.

- Nên kiểm tra và xác thực dữ liệu trước khi xử lý để tránh các cuộc tấn công như SQL Injection hoặc XSS.

-  Giải pháp:
    - Sử dụng htmlspecialchars() để tránh lỗi XSS.

    - Dùng phương thức POST thay vì GET nếu dữ liệu nhạy cảm.

    - Kiểm tra dữ liệu trước khi xử lý.
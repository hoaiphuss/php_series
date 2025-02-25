# $_POST
- $_POST là một biến siêu toàn cục (super global) trong PHP

- Chứa dữ liệu gửi từ client đến server qua phương thức HTTP POST.

- Dữ liệu gửi bằng POST thường dùng khi:
    - Gửi form có dữ liệu quan trọng (đăng nhập, đăng ký,...)

    - Gửi dữ liệu ẩn (password, token, API request,...)

    - Bảo mật hơn $_GET vì dữ liệu không hiển thị trên URL


## Gửi dữ liệu bằng POST
```html
<form method="POST" action="process.php">
    Name: <input type="text" name="fname">
    <input type="submit" value="Submit">
</form>
```

- Nhấn Submit, dữ liệu sẽ gửi đến process.php thông qua POST:

- name="fname" giúp PHP nhận dữ liệu từ input

- Xử lý dữ liệu bằng process.php

```php
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['fname'];
        echo "Tên của bạn là: " . $name;
    }
?>
```

- $_POST['fname']: Nhận dữ liệu từ form.

- $_SERVER["REQUEST_METHOD"] == "POST": Kiểm tra có phải request POST không.

- Kết quả output:

```
Tên của bạn là: John
```

- Có thể đặt PHP và HTML cùng một file

## Gửi dữ liệu bằng POST qua JS (AJAX)
- Có thể gửi dữ liệu bằng JavaScript thay vì HTML form.

- file index.html
    ```php
    <html>
        <script>
            function sendData() {
                const xhttp = new XMLHttpRequest();

                xhttp.open("POST", "process_ajax.php", true);

                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                
                xhttp.onload = function() {
                    document.getElementById("result").innerHTML = this.responseText;
                }

                xhttp.send("fname=Mary");
            }
        </script>
        
        <body>

            <button onclick="sendData()">Gửi dữ liệu</button>
            <h1 id="result"></h1>

        </body>
    </html>
    ```

    - Giải thích:
        - Khi bấm "Gửi dữ liệu", hàm sendData() sẽ chạy.

        - Gửi request POST đến process_ajax.php với dữ liệu fname=Mary.

        - Nhận phản hồi và hiển thị nó trong <h1 id="result">.

- file process_ajax.php

    ```php
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['fname'];
            echo "Tên được gửi: " . $name;
        }
    ?>
    ```

    - Output:
    ```
    Tên được gửi: Mary
    ```

## Bảo Mật Khi Xử Lý Dữ Liệu POST
- Lỗi bảo mật thường gặp:
    - SQL Injection: Nếu không kiểm tra dữ liệu nhập.

    - XSS (Cross-site Scripting): Nếu không xử lý dữ liệu trước khi hiển thị.

- Cách bảo mật tốt hơn:
    ```php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars(strip_tags($_POST['fname'])); // Chặn XSS
        $name = trim($name); // Xóa khoảng trắng dư thừa
        if (empty($name)) {
            echo "Vui lòng nhập tên!";
        } else {
            echo "Tên của bạn là: " . $name;
        }
    }
    ```
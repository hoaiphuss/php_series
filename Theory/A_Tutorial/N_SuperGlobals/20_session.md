# $_SESSION
- Lưu dữ liệu phiên (session)

- Ứng dụng:
    - Lưu trạng thái đăng nhập, giỏ hàng, thông tin người dùng.

- Bắt đầu session và gán giá trị:
    ```php
    session_start();
    $_SESSION["username"] = "John";
    ```

- Truy cập session ở trang khác:
    ```php
    session_start();
    echo $_SESSION["username"]; // John
    ```

- Xóa session:
    ```php
    session_unset();
    session_destroy();
    ```
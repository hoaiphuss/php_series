# $_COOKIE
- Lưu dữ liệu trên trình duyệt người dùng

- Dữ liệu lưu trên máy client để sử dụng sau.

- Tạo cookie
    ```php
    setcookie("user", "John", time() + 3600); // Cookie sống trong 1 giờ
    ```

- Lấy cookie
    ```php
    echo $_COOKIE["user"]; // John
    ```

- Xóa cookie:
    ```php
    setcookie("user", "", time() - 3600); // Hết hạn
    ```
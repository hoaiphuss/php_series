# Khớp chuỗi
- Để thực hiện so khớp Pattern, ta sử dụng hàm `preg_match()`

- Có 5 tham số đầu vào, bây giờ ta chỉ tìm hiểu 3 tham số

```
preg_match($pattern, $subject, $matches);
```

- Trong đó:
    - $pattern: required - biểu thức so khớp (pattern)
    
    - $subject: required - chuỗi cần khớp

    - $matches: optional - tham biến dùng để lấy kết quả so khớp
        - Chính là chuỗi được khớp với biểu thức

        - Chỉ nhận kết quả khi so khớp thành công

        - Trả về một mảng

    - Trả về 1 nếu kết quả so khớp chính xác, ngược lại sẽ trả về 0.

```php
<?php
    $phone = '0977172577'; // Chuỗi cần khớp

    $pattern = '/^0[0-9]{9}$/'; // Khuôn mẫu

    $pattern1 = '/^0([0-9]){9}$/'; // Lấy ra những kí tự sau số không. Đây là caturing group

    // Dấu phân cách khác, khớp đầu chuỗi
    $pattern2 = '#^0[0-9]{9}#';

    $check = preg_match($pattern1, $phone, $matches);

    var_dump($check);

    echo '<pre>';
    print_r($matches);
    echo '</pre>';
?>
```
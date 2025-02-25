# Thay thế
## Thay thế cơ bản
- Là kỹ thuật thay thế biểu thức Regex thành chuỗi cố định (Có thể có đối sánh chuỗi hoặc không)

- Để thay thế chuỗi trong Regex, chúng ta cần sử dụng hàm preg_replace()

- Cú pháp
```
$result = preg_replace($pattern, $replace, $subject);

Trong đó:
    - $pattern: Biểu thức Regex cần tìm kiếm để thay thế
    - $replace: Chuỗi cần thay thế
    - $subject: Chuỗi cần tìm kiếm
```

- Lưu ý:
    - Hàm này sẽ trả về chuỗi sau khi đã thay thế

    - Hàm này sẽ thay thế tất cả kết quả tìm được.

    - Nếu muốn giới hạn, thêm số lượng làm tham số thứ 4

## Đối sánh chuỗi trong Regex
- Đối sánh chuỗi là kỹ thuật được áp dụng trong việc thay thế và có sử dụng Capturing Group

- Đối sánh chuỗi sẽ giữ nguyên giá trị của biểu thức tìm được sang chuỗi cần thay thế (Tham số $replace)

- Để áp dụng, chúng ta cần sử dụng các ký hiệu $1, $2, $3 tương ứng với Capturing Group bên $pattern

- Có thể áp dụng để rewrite url, cách tạo bộ định tuyến route,...

- Ví dụ:
```php
// Tìm các số điện thoại, thay thế số điện thoại đó bằng một link để khi bấm vô thì người dùng gọi luôn
$content = preg_replace('/(0\d{9})/', '<a href="tel:$1">$1$<a/>', $content);
```

- Toàn bộ nội dung $pattern sẽ được đối sánh qua tham số $replace để thêm thẻ HTML <a>
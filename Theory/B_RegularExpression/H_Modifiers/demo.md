# Modifier trong Regex
## Giới thiệu
- Là thông số cấu hình cho chuỗi pattern

- Mỗi Modifier có những tác dụng nhất định

- Có thể kết hợp nhiều modifier trong 1 pattern

- Modifier được đặt phía sau dấu phân cách

- Các modifier được biểu diễn bởi các ký tự

- Regex có rất nhiều modifier, trong phạm vi bài học ta chỉ dùng những modifier phổ biến

- Cú pháp:
```php
$pattern = '/pattern string/modifier';
```

- Danh sách modifier thường gặp:
    - i: Không phân biệt chữ hoa, thường (thường sử dụng kiểm tra url, html,...)

    - u: Hỗ trợ pattern tiếng việt

    - m: Tìm kiếm đầu chuỗi `^` và cuối chuỗi `$` trên một dòng (multi line)

    - s: Tìm kiếm cả chuỗi xuống dòng (`single line`)
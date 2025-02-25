# Ký hiệu phủ định và hoặc trong Regex
## Ký hiệu phủ định
- Khi làm việc với Regex, nếu muốn phủ định một biểu thức, ta bổ sung ký tự `^` vào trước biểu thức.

- Khác với khớp đầu chuỗi:
    - Khớp đầu chuỗi: `^` được đặt trước, nằm ngoài cặp `[]`

    - Phủ định: `^`được đặt trước biểu thức vào nằm trong `[]`

- Giúp đơn giản hóa biểu thức đi trong một số trường hợp

```php
$pattern = '/[^0-9]+/'; // Không phải là số

$pattern = '/[^A-Z0-9a-z]/'; // Không phải chữ hoa hoặc thường hoặc số

$pattern = '/^[^0-9][0-9]{3}/'; // 4 chữ số, bắt đầu không phải là một số.
```

## Ký hiệu hoặc
- Trong nhiều trường hợp, nếu muốn kiểm tra nhiều trường hợp, ta sử dụng ký hiệu `|`

```php
$pattern = '/php|backend/';
```

- Khi kết hợp với biểu thức khác cần gom nhóm trong dấu ngoặc `()` để cho kết quả chính xác

```php
$pattern = '/(php|backend)[0-9]+/';
```

- Lưu ý:
    - Nó sẽ tìm từ trái sang phải

    - Ví dụ:
        - Nếu tìm thấy 'php', thì khớp chuỗi php.

        - Nếu không tìm thấy 'php', tìm tiếp 'backend', nếu thấy thì khớp,

        - ...

- Áp dụng nhiều trong các trường hợp như:
    - Các chuỗi có nhiều TH xảy ra:
        - Đường link có http và https

        - Chữ hoa chữ thường
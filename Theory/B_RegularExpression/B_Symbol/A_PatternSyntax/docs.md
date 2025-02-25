# Các ký hiệu cơ bản Regular Expression
## Cú pháp pattern Regex

```
$pattern = '/pattern string/modifier';
```

- Trong đó:
    - Dấu phân cách - Delimiter
        - Dấu phân cách mặc định là `/`

        - Giúp phân biệt phần pattern string với các thành phần khác.
        
        - Có thể được thay thế bởi các ký tự khác: `@, #, ~, !, ...`.
        
        - Bắt buộc ký tự đóng và mở phải giống nhau.

    - Chuỗi mẫu - Pattern String
        - Là phần chính của Regex, chứa các ký tự và quy tắc tìm kiếm.

        - Có thể bao gồm các ký tự đặc biệt mà ta sẽ tìm hiểu sau

    - Bộ sửa đổi - Modifier
        - Các ký tự tùy chọn để điều chỉnh cách hoạt động của biểu thức chính quy. Ta sẽ tìm hiểu sau cùng
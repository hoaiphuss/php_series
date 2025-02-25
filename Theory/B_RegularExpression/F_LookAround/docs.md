# Look Around trong Regex
- Hiểu đơn giản là một nhóm kỹ thuật xử lý Regex nâng cao và hữu ích khi xử lý chuỗi phức tạp

- Look around là nhóm không chiếm giữ (non capturing group) dùng để so khớp dựa vào những gì nó tìm thấy trước (look ahead) và sau (look behind) một mẫu

- Look Around bao gồm:
    - Positive Lookahead: `Cú pháp: ?=ABC` dựa vào để kiểm tra phía sau

    - Negative Lookahead: `Cú pháp: ?!ABC` ngược lại

    - Positive Lookbehind: `Cú pháp: ?<=ABC` dựa vào để kiểm tra phía trước

    - Negative Lookbehind: `Cú pháp: ?<!ABC` ngược lại

- Ứng dụng:
    - Kiểm tra chuỗi: độ mạnh yếu của mật khẩu

    - Có 1 biểu thức phức tạp, ta có yêu cầu tổng độ dài của chuỗi ta cần kiểm tra lớn hơn bao nhiêu

    - ...
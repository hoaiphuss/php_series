<!-- Ví dụ về hàm preg_matches() -->
<?php
    $phone = '0977172577'; // Chuỗi cần khớp

    $pattern = '/^0[0-9]{9}$/'; // Khuôn mẫu

    $pattern1 = '/^0([0-9]){9}$/'; // Lấy ra những kí tự sau số không. Đây là caturing group

    // Dấu phân cách khác, khớp đầu chuỗi
    // '!^0[0-9]{9}!' = '~^0[0-9]{9}~'
    $pattern2 = '#^0[0-9]{9}#';

    $check = preg_match($pattern2, $phone, $matches);

    var_dump($check);

    echo '<pre>';
    print_r($matches);
    echo '</pre>';
?>
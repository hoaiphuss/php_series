<?php
    // Chuỗi cần so khớp
    $phone = '0977172577';

    /*
        Khuôn mẫu pattern:
        - Khớp đầu khớp cuối
        - Bắt đầu là số 0
        - Gồm 10 chữ số
    */
    $pattern = '/^0[0-9]{9}$/';

    /*
        preg_match(<khuôn mẫu để so khớp>, <chuỗi cần so khớp>)
        - Khớp thành công trả về true
        - Ngược lại trả về false
    */
    $check = preg_match($pattern, $phone);

    // Kiểm tra kết quả
    var_dump($check);

    if (!empty($check)) {
        echo $phone . " là một số điện thoại";
    } else {
        echo $phone . " không phải là một số điện thoại";
    }
?>
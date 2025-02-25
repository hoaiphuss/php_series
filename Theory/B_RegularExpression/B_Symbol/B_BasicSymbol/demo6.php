<?php
    $subject = 'ABCDEEhello123';

    // Kiểm tra xem chuỗi có 3 đến 5 chữ thường liên tiếp không
    $pattern = '/[a-z]{3,5}/';
    var_dump(preg_match($pattern, $subject));

    // Kiểm tra xem chuỗi phải có ít nhất 2 chữ số liên tiếp không
    $pattern1 = '/[0-9]{2,}/';
    var_dump(preg_match($pattern1, $subject));

    // Kiểm tra xem chuỗi có 3 chữ số liên tiếp không
    $pattern2 = '/[0-9]{3}/';
    var_dump(preg_match($pattern2, $subject));

    // So khớp chuỗi tối đa 5 kí tự chữ hoa liên tiếp
    $pattern3 = '/[A-Z]{1,5}/';
    var_dump(preg_match($pattern3, $subject));
?>
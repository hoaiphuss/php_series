<!-- Check chuỗi [min-max] -->
<?php
    $subject1 = 'abcAB1C@gmail.com';

    // Check thử xem có chữ cái nào từ a đến z không
    $pattern3 = '/[a-z]/';
    $check3 = preg_match($pattern3, $subject1);
    var_dump($check3); // output: int(1)

    echo '<br>';

    // Kết hợp so khớp [min-max] và chuỗi cố định
    // Check xem có 2 ký tự liên tiếp nào ký tự đầu từ 0 - 9; ký tự sau từ A - Z không
    $pattern9 = '/[0-9][A-Z]/'; 
    $check9 = preg_match($pattern9, $subject1);
    var_dump($check9); // output: int(1)
?>
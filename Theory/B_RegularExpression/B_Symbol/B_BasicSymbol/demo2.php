<!-- Các ký tự muốn tìm (Chấp nhận cả ký tự đặc biệt) - [list_char] -->
<?php
    $subject1 = 'abcAB1C@gmail.com';

    // Check thử xem có chữ cái nào từ a đến z hoặc A đến Z không
    $pattern4 = '/[a-zA-Z]/';
    $check4 = preg_match($pattern4, $subject1);
    var_dump($check4); // output: int(1)

    echo '<br>';

    // Check thử xem có chữ cái nào từ a đến z hoặc A đến Z hoặc 0 - 9 không
    $pattern5 = '/[a-zA-Z0-9]/';
    $check5 = preg_match($pattern5, $subject1);
    var_dump($check5); // output: int(1)

    echo '<br>';

    // Check thử xem có chữ cái nào từ a đến z hoặc A đến Z hoặc 0 - 9 hoặc dấu gạch dưới không
    $pattern6 = '/[a-zA-Z0-9_]/';
    $check6 = preg_match($pattern6, $subject1);
    var_dump($check6); // output: int(1)

    echo '<br>';

    // Check thử xem có ký tự @ hoặc _ nào không
    $pattern7 = '/[@_]/';
    $check7 = preg_match($pattern7, $subject1);
    var_dump($check7); // output: int(1)
?>
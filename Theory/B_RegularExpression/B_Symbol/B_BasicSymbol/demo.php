<!-- Check chuỗi cố định, ta cũng có thể dùng regex -->
<?php
    $subject = 'hoaiphu.web_@gmail.com';

    // So khớp xem trong chuỗi có chuỗi con 'hoaiphu' không
    $pattern = '/hoaiphu/';
    $check = preg_match($pattern, $subject); // So khớp thành công
    var_dump($check); // output: int(1)
    
    echo '<br>';
    
    // So khớp xem trong chuỗi có chuỗi con 'Hoaiphu' không
    $pattern1 = '/Hoaiphu/';
    $check1 = preg_match($pattern1, $subject); // So khớp thất bại
    var_dump($check1); // output: int(0)

    echo '<br>';

    // So khớp xem trong chuỗi có chuỗi con '_@' không
    $pattern8 = '/_@/';
    $check8 = preg_match($pattern8, $subject); // So khớp thất bại
    var_dump($check8); // output: int(1)
    
    echo '<br>';

    // So khớp xem trong chuỗi có chuỗi con 'a-z' không
    $pattern2 = '/a-z/'; // Khớp chuỗi cố định 'a-z'
    $check2 = preg_match($pattern2, $subject1);
    var_dump($check2); // output: int(0)
?>
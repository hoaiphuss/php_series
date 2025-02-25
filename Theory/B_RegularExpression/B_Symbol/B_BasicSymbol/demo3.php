<!-- So khớp đầu chuỗi -->
<?php
    $subject = 'NguyenHoaiPhu';

    // Check xem có chữ hoa ở đầu chuỗi không
    $pattern = '/^[A-Z]/';
    var_dump(preg_match($pattern, $subject)); // int(1)
    
    echo '<br>';
    
    // Check xem có chữ thường ở đầu chuỗi không
    $pattern1 = '/^[a-z]/';
    var_dump(preg_match($pattern1, $subject)); // int(0)

    echo '<br>';

    $subject1 = 'Ng9uyenHoaiPhu';

    // Check xem chuỗi có bắt đầu từ chữ hoa rồi đữ chữ thường rồi đến số không
    $pattern2 = '/^[A-Z][a-z][0-9]/';
    var_dump(preg_match($pattern2, $subject1)); // int(1)

    echo '<br>';

    $pattern3 = '/^[A-Z][0-9][a-z]/';
    var_dump(preg_match($pattern3, $subject1)); // int(0)
?>
<!-- So khớp cuỗi chuỗi -->
<?php
    $subject = 'NguyenHoaiPhu_9';

    // Check xem có số ở cuối chuỗi không
    $pattern = '/[0-9]$/';
    var_dump(preg_match($pattern, $subject)); // int(1)
    
    echo '<br>';
    
    // Check xem có chữ thường ở cuối chuỗi không
    $pattern1 = '/[a-z]$/';
    var_dump(preg_match($pattern1, $subject)); // int(0)

    echo '<br>';

    // Check xem chuỗi có kết thúc từ chữ thường đến gạch dưới rồi đến số không
    $pattern2 = '/[a-z]_[0-9]$/';
    var_dump(preg_match($pattern2, $subject)); // int(1)

    echo '<br>';

    $pattern3 = '/[A-Z][0-9][a-z]$/';
    var_dump(preg_match($pattern3, $subject)); // int(0)
?>
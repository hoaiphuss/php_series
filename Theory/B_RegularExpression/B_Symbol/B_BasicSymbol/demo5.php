<?php
    $subject = 'aAbBcC123';
    $subject1 = '12';
    $subject2 = '2';

    // Kiểm tra xem chuỗi có một kí tự số hay không
    $pattern = '/^[0-9]$/';
    var_dump(preg_match($pattern, $subject)); echo '<br>';
    var_dump(preg_match($pattern, $subject1)); echo '<br>';
    var_dump(preg_match($pattern, $subject2)); echo '<br>';

    // Kiểm tra mk có hợp lệ hay không:
    /**
     * Bắt đầu bằng chữ cái thường
     * Độ dài >= 6
     * Kết thúc bằng số
     */
    $subject3 = 'cAbc132';
    
    $pattern1 = '/^[a-z]/';

    $pattern2 = '/[0-9]$/';

    if (
           preg_match($pattern1, $subject3)
        && strlen($subject3) >= 6
        && preg_match($pattern2, $subject3)
    ) {
        echo "Hop le";
    } else {
        echo "Khong hop le";
    }
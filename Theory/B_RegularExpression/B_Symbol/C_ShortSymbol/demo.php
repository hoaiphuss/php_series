<?php
    $subject = '1hoaiphu.w@eb'; // user name

    /**
     * Kiểm tra username có hợp lệ không ?
     * - Chỉ chứa: chữ thường hoặc số hoặc ký tự hoặc gạch dưới hoặc gạch ngang hoặc dấu chấm hoặc...
     * - Bắt đầu bằng chữ cái thường
     */
    // Viết đầy đủ
    $pattern = '/^[a-z]{1,}[a-z0-9_-]{0,}$/';
    var_dump(preg_match($pattern, $subject));

    // VIết tắt
    $pattern1 = '/^[a-z]+[a-z0-9_-]*$/';
    var_dump(preg_match($pattern1, $subject));

    $subject1 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

    // So khớp tất cả văn bản
    $pattern2 = '/.+/';
    $pattern3 = '/.{1,}/';
    preg_match($pattern2, $subject1, $matches);

    echo "<pre>";
    print_r($matches);
    echo "</pre>";

    /**
     * Kiểm tra số điện thoại hợp lệ
     * - Bắt đầu bằng só 0
     * - Có 10 chữ số
     */
    $subject4 = '097717257';

    $pattern4 = '/^\d{9}$/'; // $pattern4 = '/^0[0-9]{9}$/';

    preg_match($pattern4, $subject4, $matches);
    
    echo "<pre>";
    print_r($matches);
    echo "</pre>";
?>
<?php
    $subject = 'hoaiphu.web';

    // Ví dụ ký tự `.`
    $pattern = '/./';
    preg_match($pattern, $subject, $matches);
    echo '<pre>';
    print_r($matches);
    echo '</pre>';
    
    $pattern1 = '/\./';
    preg_match($pattern1, $subject, $matches1);
    echo '<pre>';
    print_r($matches1);
    echo '</pre>';

    // Kiểm tra một url
    $subject2 = 'https://unicode.vn';
    $pattern2 = '/https:\/\/[a-z]+\.[a-z]{2,}/';
    
    preg_match($pattern2, $subject2, $matches2);
    
    echo '<pre>';
    print_r($matches2);
    echo '</pre>';

    // Kiểm tra một email
    /**
     * Cấu trúc email: <username>@<domain>.<ext>
     * 
     * username
     * - Chứa: chữ thường, gạch ngang, gạch dưới, dấu chấm, chữ số
     * - Bắt đầu bằng chữ cái thường
     * - Độ dài >= 3
     * 
     * domain
     * - Chứa: chữ thường, gạch ngang, gạch dưới, dấu chấm, chữ số
     * - Bắt đầu bằng chữ cái thường
     * - Độ dài >= 1
     * 
     * ext
     * - Chứa: chữ thường
     * - Độ dài >= 2
     */
    $email = 'hoaiphu123_-@gmail.com';
    $pattern3 = '/^[a-z][a-z0-9_\.-]{2,}@[a-z][a-z_\.-]*\.[a-z]{2,}/';
    
    preg_match($pattern3, $email, $matches3);
    
    echo '<pre>';
    print_r($matches3);
    echo '</pre>';
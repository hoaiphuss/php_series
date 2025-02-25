<?php
    $content = 'unicode academy academy unicode';

    // Tình huống 1: Lấy chữ academy mà có chữ academy đứng sau
    $pattern = '/academy(?=\sacademy)/';

    preg_match($pattern, $content, $matches);

    echo '<pre>';
    print_r($matches);
    echo '</pre>';

    // Tình huống 2: Lấy chữ academy mà không có chữ academy đứng sau
    $pattern1 = '/academy(?!\sacademy)/';

    preg_match($pattern1, $content, $matches1);

    echo '<pre>';
    print_r($matches1);
    echo '</pre>';

    // Tình huống 3: Lấy chữ academy mà có chữ unicode đứng trước
    $pattern3 = '/(?<=unicode\s)academy/';

    preg_match($pattern3, $content, $matches3);

    echo '<pre>';
    print_r($matches3);
    echo '</pre>';

    // Tình huống 3: Lấy chữ academy mà không có chữ unicode đứng trước
    $pattern4 = '/(?<!unicode\s)academy/';

    preg_match($pattern4, $content, $matches4);

    echo '<pre>';
    print_r($matches4);
    echo '</pre>';
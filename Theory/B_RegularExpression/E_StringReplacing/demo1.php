<?php
    // Không sử dùng capturing group
    $replace = '$1';
    $replace1 = '<a href="tel:$1">$1</a>';
    $replace2 = '<a href="mailto:$1" title="Email: $2">$1</a>';

    $content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    Lorem Ipsum has been the industry's 0977172577 standard dummy text ever since the 1500s,
    when an unknown printer took a galley of type 0912345678 and scrambled it to make a type specimen book.
    It has survived not only five centuries, but also the leap into electronic typesetting,
    remaining essentially unchanged. It was popularised in 0977172577 the 1960s with the release of Letraset
    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
    Aldus PageMaker including 0977172577 versions of Lorem Ipsum.";

    $pattern = '~0[0-9]{9}~';
    $content = preg_replace($pattern, $replace2, $content);
    echo $content . '<hr/>';
    
    // Sử dùng capturing group
    $content1 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    Lorem Ipsum has been the industry's 0977172577 standard dummy text ever since the 1500s,
    when an unknown printer took a galley of type 0912345678 and scrambled it to make a type specimen book.
    It has contact@unicode.vn survived not only five centuries, but also the leap into electronic typesetting,
    remaining essentially unchanged. It was popularised in 0977172577 the 1960s with the release of Letraset
    sheets containing Lorem Ipsum passages, hoaiphu@gmail.com and more recently with desktop publishing software like
    Aldus PageMaker including 0977172577 versions of Lorem Ipsum.";

    $pattern1 = '~(0[0-9]{9})~';
    $pattern2 = '~([a-z][a-z0-9_\.-]{2,}@([a-z][a-z_\.-]*\.[a-z]{2,}))~';
    $content1 = preg_replace($pattern1, $replace1, $content1);
    $content1 = preg_replace($pattern2, $replace2, $content1);
    echo $content1 . '<hr/>';
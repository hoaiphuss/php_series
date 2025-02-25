<?php
    $subject = 'https://unicode.com.vn/khoa-hoc/pages/1';

    $pattern = '~\d+$~';

    // Xóa - Thay thế bằng một khoảng trắng
    $result = preg_replace($pattern, '', $subject);

    echo $result . '<hr/>';

    // Thay thế bằng từ unicode
    $result = preg_replace($pattern, 'unicode', $subject);

    echo $result . '<hr/>';

    // Thay thế các số điện thoại trong chuỗi bằng dấu *
    $content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    Lorem Ipsum has been the industry's 0977172577 standard dummy text ever since the 1500s,
    when an unknown printer took a galley of type 0912345678 and scrambled it to make a type specimen book.
    It has survived not only five centuries, but also the leap into electronic typesetting,
    remaining essentially unchanged. It was popularised in 0977172577 the 1960s with the release of Letraset
    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
    Aldus PageMaker including 0977172577 versions of Lorem Ipsum.";

    $pattern = '~0[0-9]{9}~';

    $result = preg_replace($pattern, '**********', $content);

    echo $result . '<hr/>';

    // Thay thế chuỗi bằng thẻ html
    $result = preg_replace($pattern, '<a href="https://unicode.com.vn/login">Đăng nhập để lấy số đth<a/>', $content);

    echo $result . '<hr/>';

    // Tham số thứ 4
    $result = preg_replace($pattern, '<a href="https://unicode.com.vn/login">Đăng nhập để lấy số đth<a/>', $content, 2);

    echo $result . '<hr/>';
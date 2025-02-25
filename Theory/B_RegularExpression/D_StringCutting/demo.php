<?php
    // Lấy số điện thoại trong một đoạn văn bản

    $subject = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    Lorem Ipsum has been the industry's 0977172577 standard dummy text ever since the 1500s,
    when an unknown printer took a galley of type 0912345678 and scrambled it to make a type specimen book.
    It has survived not only five centuries, but also the leap into electronic typesetting,
    remaining essentially unchanged. It was popularised in 0977172577 the 1960s with the release of Letraset
    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
    Aldus PageMaker including 0977172577 versions of Lorem Ipsum.";

    $pattern = '/0\d{9}/'; // $pattern = '/0[0-9]{9}/';
    
    preg_match($pattern, $subject, $matches);
    
    echo '<pre>';
    print_r($matches);
    echo '</pre>';

    if (!empty($matches[0])) {
        echo "Số điện thoại tìm được: " . $matches[0];
    } else {
        echo "Không tìm được số điện thoại";
    }

    echo '<hr>';

    preg_match_all($pattern, $subject, $matches);
    
    echo '<pre>';
    print_r($matches);
    echo '</pre>';

    if (!empty($matches[0])) {
        echo "Số điện thoại tìm được: <br/>";
        foreach ($matches[0] as $item) {
            echo '- ' . $item . '<br/>';
        }
    } else {
        echo "Không tìm được số điện thoại";
    }

    // Lấy link ảnh trong thẻ <img>
    /**
     * Ta sẽ so khớp hình ảnh trước, nó sẽ trả về cả thẻ img
     * Tiếp theo ta mới dùng capturing group để cắt phần link ra
     */

    $subject1 = '<img height="100px" width="200px" src="https://unicode.vn/images/anh.jpg" alt="alo" title="cute"/>';
    $pattern1 = '<img(\s+[a-z-]+\s*=\s*"[^"]*")*\ssrc="([^"]+)"(\s+[a-z-]+\s*=\s*"[^"]*")*\s*/*>';
    
    preg_match($pattern1, $subject1, $matches1);
    
    echo '<pre>';
    print_r($matches1);
    echo '</pre>';

    if (!empty($matches1[2])) {
        echo 'Link: ' . $matches1[2];
    } else {
        echo 'Không tìm thấy';
    }
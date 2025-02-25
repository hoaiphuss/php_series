<?php
    // Kiểm tra url
    $string = 'https://unicode.com.vn/page/1';

    $pattern = '~Https://[a-z]+[a-z0-9_\.-]*\.[a-z]{2,}~i';

    $pattern1 = '~Https://[a-z]+[a-z0-9_\.-]*\.[a-z]{2,}~';

    preg_match($pattern, $string, $matches);

    echo '<pre>';
    print_r($matches);
    echo '</pre>';

    echo '<hr/>';
    
    // Kiểm tra nếu chuỗi có tiếng việt
    $string2 = 'Quận Nam Từ Liêm';

    $pattern2 = '/(Quận)/u';

    $pattern3 = '/(quận)/iu';

    $string2 = preg_replace($pattern2, '', $string2);

    echo '<pre>';
    print_r($string2);
    echo '</pre>';

    echo '<hr/>';

    // Bóc tách dữ liệu
    $html = '<div class="post-lists">' . "\n" . '
        <h3>Bài viết 1</h3>' . "\n" . '
        <div class="description">Mô tả bài viết</div>' . "\n" . '
    </div>';

    $html1 = "\n<div class=\"post-lists\">\n
        <h3>Bài viết 1</h3>\n
        <div class=\"description\">Mô tả bài viết</div>\n
    </div>";

    $pattern = '~<div class="post-lists">(.+)</div>~siu';

    preg_match($pattern, $html1, $matches);

    if (!empty($matches[1])) {
        $htmlInner = $matches[1];
        preg_match('~<h3.*>(.+)</h3>~siu', $htmlInner, $matches);

        if (!empty($matches[1])) {
            $title = trim($matches[1]);

            echo 'Tiêu để: ' . $title;
        }
    }

    echo '<hr/>';

// 
$html2 = "<ul class=\"list\">\n
<li>0988237573</li>\n
<li>0987275473</li>\n
<li>0344537573</li>\n
<li>034452443</li>\n
</ul>";

$pattern4 = '~^<li>(0\d{9})</li>$~im';

preg_match_all($pattern4, $html2, $matches);

if (!empty($matches[1])) {
    echo 'Danh sach: <br>';

    foreach($matches[1] as $phone)
        echo '- ' . $phone . '<br>';
}
?>
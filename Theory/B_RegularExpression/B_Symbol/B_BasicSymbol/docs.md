# Các ký hiệu cơ bản trong Regex
## 0. So khớp chuỗi cố định
```php
<?php
    $subject = 'hoaiphu.web_@gmail.com';

    $pattern = '/hoaiphu/';
    $check = preg_match($pattern, $subject); // So khớp thành công
    var_dump($check); // output: int(1)
    
    echo '<br>';
    
    $pattern1 = '/Hoaiphu/';
    $check1 = preg_match($pattern1, $subject); // So khớp thất bại
    var_dump($check1); // output: int(0)

    echo '<br>';

    $pattern8 = '/_@/';
    $check8 = preg_match($pattern8, $subject); // So khớp thất bại
    var_dump($check8); // output: int(1)
    
    echo '<br>';

    $pattern2 = '/a-z/'; // Khớp chuỗi cố định 'a-z'
    $check2 = preg_match($pattern2, $subject1);
    var_dump($check2); // output: int(0)
?>
```

## 1. So khớp đầu và cuối chuỗi - `^` và `$`
- `^`
    - Dùng để so khớp ở đầu chuỗi

    - Khi dùng, chuỗi sẽ được so khớp từ đầu trở về sau, và phải theo thứ tự từ trước về sau

```php
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
```

- `$`:
    - Dùng để so khớp ở cuối chuỗi

    - Khi dùng, chuỗi sẽ được so khớp từ cuối trở về trước, và phải theo thứ tự từ sau tới trước

```php
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
```

- Trong một số trường hợp, ta dùng cả hai để so khớp toàn chuỗi

```php
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
```

## 2. `[min-max]` - (VD: A - Z; a - z; 0 - 9;...)
- Chỉ dùng bảng chữ cái tiếng anh

- Viết trong dấu `[]` sẽ là `điều kiện hoặc`

- Chỉ cần xuất hiện kí tự thỏa mãn là được, không yêu cầu số lượng cụ thể, hay thứ tự

```php
<?php
    $subject1 = 'abcAB1C@gmail.com';

    // Check thử xem có chữ cái nào từ a đến z không
    $pattern3 = '/[a-z]/';
    $check3 = preg_match($pattern3, $subject1);
    var_dump($check3); // output: int(1)

    echo '<br>';

    // Kết hợp so khớp [min-max] và chuỗi cố định
    // Check xem có 2 ký tự liên tiếp nào ký tự đầu từ 0 - 9; ký tự sau từ A - Z không
    $pattern9 = '/[0-9][A-Z]/'; 
    $check9 = preg_match($pattern9, $subject1);
    var_dump($check9); // output: int(1)
?>
```

## 3. Các ký tự muốn tìm (Chấp nhận cả ký tự đặc biệt) - [list_char]
- Chỉ dùng bảng chữ cái tiếng anh

- Viết trong dấu `[]` sẽ là `điều kiện hoặc`

- Có thể chèn thêm liên tiếp các kí tự đặc biệt:
    - VD: `[_!]`: chỉ cần chuỗi xuất hiện `_` hoặc `!` là thỏa mãn

- Chỉ cần xuất hiện kí tự thỏa mãn là được, không yêu cầu số lượng cụ thể, hay thứ tự

```php
<?php
    $subject1 = 'abcAB1C@gmail.com';

    // Check thử xem có chữ cái nào từ a đến z hoặc A đến Z không
    $pattern4 = '/[a-zA-Z]/';
    $check4 = preg_match($pattern4, $subject1);
    var_dump($check4); // output: int(1)

    echo '<br>';

    // Check thử xem có chữ cái nào từ a đến z hoặc A đến Z hoặc 0 - 9 không
    $pattern5 = '/[a-zA-Z0-9]/';
    $check5 = preg_match($pattern5, $subject1);
    var_dump($check5); // output: int(1)

    echo '<br>';

    // Check thử xem có chữ cái nào từ a đến z hoặc A đến Z hoặc 0 - 9 hoặc dấu gạch dưới không
    $pattern6 = '/[a-zA-Z0-9_]/';
    $check6 = preg_match($pattern6, $subject1);
    var_dump($check6); // output: int(1)

    echo '<br>';

    // Check thử xem có ký tự @ hoặc _ nào không
    $pattern7 = '/[@_]/';
    $check7 = preg_match($pattern7, $subject1);
    var_dump($check7); // output: int(1)
?>
```

# Khớp độ dài
- Khi sử dụng biểu thức chính quy để viết các biểu thức, mặc định nó sẽ duyệt từ trái sang phải và chỉ tìm với 1 ký tự.

- Ta có thể thay đổi lượng ký tự đó.

## 4. Độ dài từ min đến max - {min, max}
- Ví dụ: ta muốn kiểm tra một chuỗi có 3 - 5 ký tự chữ thường liên tiếp. Duyệt từ trái sang phải, nếu không có chuỗi nào có từ 3 - 5 kí tự. Khớp thất bại.
```php
$subject = 'hello123';

// Kiểm tra xem chuỗi có 3 đến 5 chữ thường không
$pattern = '/[a-z]{3,5}/';
var_dump(preg_match($pattern, $subject));
```

## 5. Độ dài lớn hơn hoặc bằng min - {min,}
- Ví dụ: ta muốn kiểm tra một chuỗi có ít nhất 2 chữ số liên tiếp
```php
$subject = 'hello123';

// Kiểm tra xem chuỗi phải có ít nhất 2 chữ số liên tiếp
$pattern1 = '/[0-9]{2,}/';
var_dump(preg_match($pattern1, $subject));
```

## 6. Độ dài cố định bằng max - {max}
- Ví dụ: ta muốn kiểm tra một cuỗi có 3 chữ số liên tiếp
```php
$subject = 'hello123';

// Kiểm tra xem chuỗi có 3 chữ số liên tiếp không
$pattern1 = '/[0-9]{3}/';
var_dump(preg_match($pattern1, $subject));
```

## 7. Độ dài nhỏ hơn hoặc bằng max - {1, max}
- Khi ta thay 1 bằng 0. Ta có thể trả về null

- Ví dụ: So khớp xem thử chuỗi có tối đa 5 kí tự chữ hoa liên tiếp không.
```php
// So khớp chuỗi tối đa 5 kí tự chữ hoa liên tiếp
$pattern3 = '/[A-Z]{1,5}/';
var_dump(preg_match($pattern3, $subject));
```
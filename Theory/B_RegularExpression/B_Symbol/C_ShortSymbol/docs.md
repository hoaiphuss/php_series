# Các ký hiệu viết tắt trong Regex

- Ký hiệu viết tắt giúp biểu diễn các mẫu biểu thức chính quy (Regex) một cách ngắn gọn, dễ đọc hơn so với khi viết đầy đủ.

- Có thể dùng trong việc lấy mã HTML hoặc lấy các thuộc tính, các thẻ,...

## 1. Những ký hiệu liên quan đến độ dài

### `*` - `{0,}` (Lặp lại từ 0 lần trở lên)
- Kiểm tra chuỗi có hoặc không có ký tự. Nếu có thì có thể xuất hiện không giới hạn số lần.
- Ví dụ:
  ```php
  $pattern = '/a*/'; // Chuỗi có thể chứa hoặc không chứa 'a', nếu có thì có thể có nhiều ký tự 'a'
  var_dump(preg_match($pattern, 'aaa')); // Kết quả: 1
  var_dump(preg_match($pattern, 'bbb')); // Kết quả: 1 (khớp với chuỗi rỗng)
  ```

### `+` - `{1,}` (Lặp lại từ 1 lần trở lên)
- Phải có ít nhất 1 ký tự.
- Ví dụ:
  ```php
  $pattern = '/a+/'; // Chuỗi phải có ít nhất một ký tự 'a'
  var_dump(preg_match($pattern, 'aaa')); // Kết quả: 1
  var_dump(preg_match($pattern, 'bbb')); // Kết quả: 0
  ```

### `?` - `{0,1}` (Lặp lại từ 0 đến 1 lần)
- Có 1 ký tự hoặc không có ký tự nào.
- Ví dụ:
  ```php
  $pattern = '/a?/'; // Chuỗi có thể có hoặc không có 'a'
  var_dump(preg_match($pattern, 'a')); // Kết quả: 1
  var_dump(preg_match($pattern, 'b')); // Kết quả: 1 (khớp với chuỗi rỗng)
  ```

## 2. Những ký tự viết tắt khác

### `.` - Đại diện cho tất cả ký tự (trừ ký tự xuống dòng `\n`)
- Ví dụ:
  ```php
  $pattern = '/./'; // Khớp với bất kỳ ký tự nào
  var_dump(preg_match($pattern, 'a')); // Kết quả: 1
  var_dump(preg_match($pattern, ' ')); // Kết quả: 1
  ```

### `\d` - Chữ số bất kỳ ~ `[0-9]`
- Ví dụ:
  ```php
  $pattern = '/\d/'; // Khớp với bất kỳ chữ số nào
  var_dump(preg_match($pattern, '123')); // Kết quả: 1
  var_dump(preg_match($pattern, 'abc')); // Kết quả: 0
  ```

### `\D` - Ký tự bất kỳ không phải chữ số ~ `[^0-9]`
- Ví dụ:
  ```php
  $pattern = '/\D/'; // Khớp với bất kỳ ký tự nào không phải chữ số
  var_dump(preg_match($pattern, 'abc')); // Kết quả: 1
  var_dump(preg_match($pattern, '123')); // Kết quả: 0
  ```

### `\w` - Ký tự chữ cái, chữ số hoặc dấu gạch dưới ~ `[a-zA-Z0-9_]`
- Ví dụ:
  ```php
  $pattern = '/\w/'; // Khớp với bất kỳ chữ cái, số hoặc dấu gạch dưới
  var_dump(preg_match($pattern, '_abc123')); // Kết quả: 1
  var_dump(preg_match($pattern, '!@#')); // Kết quả: 0
  ```

### `\W` - Ngược lại với `\w`, ký tự không phải chữ cái, chữ số hoặc dấu gạch dưới ~ `[^a-zA-Z0-9_]`
- Ví dụ:
  ```php
  $pattern = '/\W/'; // Khớp với bất kỳ ký tự nào không thuộc nhóm \w
  var_dump(preg_match($pattern, '!@#')); // Kết quả: 1
  var_dump(preg_match($pattern, 'abc123_')); // Kết quả: 0
  ```

### `\s` - Khoảng trắng (bao gồm dấu cách, tab, xuống dòng,...)
- Ví dụ:
  ```php
  $pattern = '/\s/'; // Khớp với khoảng trắng
  var_dump(preg_match($pattern, ' ')); // Kết quả: 1
  var_dump(preg_match($pattern, 'abc')); // Kết quả: 0
  ```

### `\S` - Ký tự bất kỳ không phải khoảng trắng ~ `[^\s]`
- Ví dụ:
  ```php
  $pattern = '/\S/'; // Khớp với bất kỳ ký tự nào không phải khoảng trắng
  var_dump(preg_match($pattern, 'a')); // Kết quả: 1
  var_dump(preg_match($pattern, ' ')); // Kết quả: 0
  ```

## 3. Ví dụ:
### Ví dụ kiểm tra Username hợp lệ

```php
$subject = '1hoaiphu.w@eb'; // user name

/**
 * Kiểm tra username có hợp lệ không?
 * - Chỉ chứa: chữ thường hoặc số hoặc ký tự gạch dưới hoặc gạch ngang hoặc dấu chấm.
 * - Bắt đầu bằng chữ cái thường.
 */
// Viết đầy đủ
$pattern = '/^[a-z]{1,}[a-z0-9_-]{0,}$/';
var_dump(preg_match($pattern, $subject));

// Viết tắt
$pattern1 = '/^[a-z]+[a-z0-9_-]*$/';
var_dump(preg_match($pattern1, $subject));
```

### Ví dụ kiểm tra số điện thoại hợp lệ
```php
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
```

## 4. Nguyên tắc xử lý ký hiệu đặc biệt trong Regex
- Khi ta viết các pattern, nhưng trong chuỗi pattern của ta có các ký tự trùng với các ký hiệu trong Regex.
  - VD: Ta muốn viết pattern có ký tự `.`. Nhưng `.` là một ký hiệu trong Regex.

- Cách khắc phục: thêm ký tự escape (\) vào trước ký hiệu của Regex. Tương tự như trong chuỗi cơ bản.

```php
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
```
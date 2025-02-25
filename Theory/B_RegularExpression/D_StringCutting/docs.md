# Cắt chuỗi
## Cắt chuỗi cơ bản
- Để cắt chuỗi trong Regex, ta sử dụng 2 hàm sau đây cùng với tham biến:
    - `preg_match()`
    ```php
    preg_match($pattern, $subject, $matches)
    echo '<pre>';
    print_r($matches);
    echo '</pre>';
    ```
    - `preg_match_all()`
    ```php
    preg_match_all($pattern, $subject, $matches)
    echo '<pre>';
    print_r($matches);
    echo '</pre>';
    ```

- Tham biến `$matches` trả về một mảng tương ứng với giá trị match được

- Các hàm tương đối giống nhau về tham số đầu vào, nhưng tham biến `$matches` được trả về có giá trị khác nhau.
    - Hàm `preg_match()` sẽ khớp giá trị đầu tiên

- Lưu ý: Nếu muốn cắt nội dung nào thì chỉ viết biểu thức liên quan đến nội dung đó

## Caturing Group trong Regex
- Là kỹ thuật cắt các biểu thức con (Được nhóm trong cặp ngoặc `()`)

- Kết quả của biểu thức này sẽ được đưa vào tham biến `$matches`

- Thứ tự Capturing Group được tính từ trái qua phải

- VD: Lấy link ảnh trong thẻ HTML
```php
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
```

- Lưu ý:
    - Trong trường hợp có nhiều dấu ngoặc.
        - Các dấu ngoặc (tương ứng với các group) sẽ được tính từ trái sang phải

        - Nếu mỗi group match được với nhiều chuỗi, ta sẽ lấy chuỗi cuối cùng match được (Nhưng phải tuân theo thứ tự).

        - nếu có trường hợp lồng nhau, dấu ngoặc ngoài cùng sẽ là group trước tiên, rồi mới tính tới bên trong. Có nghĩa là thứ tự group 1, 2, 3,... tương ứng với từ ngoài vào trong, từ trái sang phải

## Greedy trong Regex
- Trong những trường hợp thực tế, ta sẽ không biết nội dung bên trong chuỗi cần cắt là gì, vậy nên khi cắt, ta sẽ sử dụng `.` để lấy hết các kí tự. Nhưng khi đó sẽ xảy ra tình trạng Greedy. Vậy nên ta phải biết cách để khắc phục nó.

- Là tình trạng tham lam khi sử dụng dấu `.` để đại diện cho các ký tự

- Để khắc phục tình trạng greedy, chỉ cần thêm ký tự `?` vào sau độ dài của dấu `.`

```php
$subject1 = '<img height="100px" width="200px" src="https://unicode.vn/images/anh.jpg" alt="alo" title="cute"/>';
$pattern1 = '~<img.*src="(.+?)".*/*>~';

preg_match($pattern1, $subject1, $matches1);

echo '<pre>';
print_r($matches1);
echo '</pre>';
```

- Giải thích:
    - Theo pattern, Tính từ `src="`, mở dấu nháy `"` đầu tiên, ứng với pattern là `(.+)`. Bởi vì dấu `.` tương ứng với mọi kí tự, nên nó sẽ bỏ qua tất cả `"` tiếp theo đến trước `"` cuối cùng. Cho nên nó sẽ lấy hết từ mở đầu link đến tất cả thuộc tính.

    - Ta sử dụng `?` để ngắt và chỉ lấy link: `(.+?)`
        - Dấu `?`
            - Nếu đứng sau một biểu thức: nó tượng trưng cho độ dài của biểu thức

            - Nếu đứng sau độ dài của biểu thức: nó tượng trưng `ngắt`

## None Capturing Group trong Regex
- Ngược lại với Capturing Group, có nghĩa là ta sẽ không cắt nội dung trong ngoặc đơn vào tham biến `$matches`

- Trong nhiều tình huống, ta bắt buộc phải sử dụng `()`, nhưng ta không muốn nội dung của nó được đưa vào tham biến `$matches`

- Ít được sử dụng nhiều, tuy nhiên vẫn cần thiết trong nhiều trường hợp và tránh bị rối khi debug tham biến `$matches`. Nhiều người viết không cẩn thận dẫn đến sai thứ tự ở phần tử mảng khi ta muốn lấy, dẫn đến kết quả không như mong muốn.

- Cú pháp: Trong cặp `()`, biểu thức nào ta không muốn nó được cắt ra, ta thêm `?:`:
```
$pattern = '/(?:pattern_string)/';
```


# Regular Expression - Regex
## Giới thiệu
- Regular Expression (Biểu thức chính quy) được dùng để xử lý chuỗi nâng cao thông qua các `biểu thức` riêng của nó.

- Các biểu thức này thường được gọi là Pattern:
    - Có quy tắc rất nghiêm ngặt

    - Lập trình viên cần tuân thủ mới có thể hoạt động được

- Nguyên tắc hoạt động:
    - So khớp dựa vào các Pattern (Khuôn mẫu)
        - Ví dụ:
            - Khuôn mẫu kiểm tra một số kí hiệu bằng gì ?
            - Không phải so sánh từ kí tự

    - Không còn so sánh dựa vào chuỗi cố định như các phần xử lý chuỗi trước đây (So sánh 2 chuỗi với nhau, tìm chuỗi con trong chuỗi cha,...)

- Pattern trong các ngôn ngữ lập trình cơ bản là giống nhau (Ngoại trừ Modifiers, dấu phân cách,...)

- Regex trong PHP được xử lý thông qua 3 hàm chính với tiền tố preg
    - preg_match()

    - preg_match_all()

    - preg_replace()

    - Ngoài ra còn nhiều hàm nữa, sẽ tìm hiểu sau

## Regex làm được những gì ?
- Tác dụng chính là xử lý chuỗi, mảng, ...

- Dựa vào các quy tắc của Pattern mà ta có thể làm được rất nhiều việc, tuy nhiên ta cần nắm được 3 tác dụng chính:
    - So khớp
        - Giống so sánh 2 chuỗi

        - Không phải so sánh chính xác hay dựa vào các chuỗi cố định

        - Dựa vào kí hiệu đại diện

        - Khớp chuỗi thỏa mãn điều kiện của Pattern

        - Ví dụ: Ta muốn kiểm tra một chuỗi có phải là email hay không ?
            - Ta cần hiểu định dạng email có dạng pattern nào
                - Trong một email có: username, @, tên miền,...

            - Không phải là một email cụ thể mà chỉ là các kí tự đại diện

    - Cắt chuỗi
        - Lấy ra nội dung chuỗi theo pattern

        - Ví dụ: Ta có một đoạn văn dài và ta muốn tìm tất cả các số điện thoại có trong đó.

    - Thay thế
        - Thay thế chuỗi theo pattern

        - Ví dụ: Một số website bất động sản, nếu như người dùng chưa đăng nhập, ta tiến hành thay tất cả số điện thoại liên hệ trên trang web bằng `******`. Sau khi người dùng đăng nhập, mới trả lại thành số điện thoại.

## Lưu ý khi học Regex
- Học kĩ các quy tắc viết Pattern

- Học cách sử dụng các hàm tương ứng với ngôn ngữ lập trình đang sử dụng

- Luyện tập các casestudy để cải thiện phân tích

## Các kiến thức cần nắm
- Kiến thức cơ bản
    - Khái niệm, ý nghĩa của Regex đối với lập trình

    - Kí hiệu cơ bản của Regex

    - Ký hiệu viết tắt, đại diện của Regex

    - Gom nhóm Regex

    - Ứng dụng Regex để so khớp, lấy và thay thế chuỗi

    - Các hàm áp dụng Regex trong PHP

- Kỹ thuật nâng cao
    - Caturing Group trong Regex

    - Greedy trong Regex

    - None Caturing Group trong Regex

    - Positive Lookbehind trong Regex

    - Negative Lookbehind trong Regex

    - Positive Lookahead trong Regex

    - Negative Lookahead trong Regex

    - Đối sánh chuỗi trong Regex

    - Ứng dụng Modifiers trong Regex

## Thực hành
- Validate, Replace, Match, ...

- Định tuyến Request (Route), Rewrite URL,...

- Template Engine

- Bóc tách dữ liệu từ website khác (Crawler Data)

## Ví dụ demo
- Khớp đầu khớp cuối, bắt đầu là số 0, gồm 10 chữ số.
- Kiểm tra email
- Kiểm tra địa chỉ IP
- Kiểm tra định dạng ngày tháng năm

- Ta có thể sử dụng mảng kí tự và vòng lặp để kiểm tra. Nhưng lúc đó chương trình rất phức tạp.

- Sử dụng Regular Expression:

```php
<?php
    // Chuỗi cần so khớp
    $phone = '0977172577';

    // Khuôn mẫu pattern:
    $pattern = '/^0[0-9]{9}$/';

    /*
        preg_match(<khuôn mẫu để so khớp>, <chuỗi cần so khớp>)
        - Khớp thành công trả về true
        - Ngược lại trả về false
    */
    $check = preg_match($pattern, $phone);

    // Kiểm tra kết quả
    var_dump($check);

    if (!empty($check)) {
        echo "Đây là một số điện thoại";
    } else {
        echo "Đây không phải là một số điện thoại";
    }
?>
```
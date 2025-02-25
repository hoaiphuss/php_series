# Cập Nhật Phần Tử Trong Mảng PHP
### Cập nhật phần tử trong mảng
- Có thể cập nhật giá trị phần tử trong mảng bằng:
    - Chỉ mục (index) cho mảng chỉ mục
        ```php
        $cars = array("Volvo", "BMW", "Toyota");

        // Cập nhật phần tử thứ hai (chỉ mục 1)
        $cars[1] = "Ford";

        var_dump($cars); 
        // Kết quả: array(3) { [0]=> "Volvo", [1]=> "Ford", [2]=> "Toyota" }
        ```
        
    - Tên khóa (key) cho mảng kết hợp
        ```php
        $cars = array(
            "brand" => "Ford",
            "model" => "Mustang",
            "year" => 1964
        );

        // Cập nhật giá trị của key "year"
        $cars["year"] = 2024;

        var_dump($cars);
        // Kết quả: array(3) { ["brand"]=> "Ford", ["model"]=> "Mustang", ["year"]=> 2024 }
        ```

### Có thể sử dụng foreach để cập nhật tất cả phần tử trong mảng.
- Có nhiều cách cập nhật giá trị trong vòng lặp foreach

- Cập nhật tất cả giá trị thành "Ford" bằng tham chiếu (&):

- Đảm bảo mọi thay đổi được thực hiện với mảng bên trong vòng lặp sẽ được thực hiện cho mảng gốc

- Lưu ý:
    - Dùng unset($x); sau vòng lặp để xóa tham chiếu, tránh lỗi khi thay đổi $x sau vòng lặp.

```php
$cars = array("Volvo", "BMW", "Toyota");

foreach ($cars as &$x) {
    $x = "Ford";
}

unset($x); // Xóa tham chiếu tránh lỗi sau này

var_dump($cars);
// Kết quả: array(3) { [0]=> "Ford", [1]=> "Ford", [2]=> "Ford" }
```

### Hậu quả khi quên unset($x);
- Nếu không dùng unset($x);
    - Biến $x vẫn giữ tham chiếu đến phần tử cuối cùng của mảng, dẫn đến lỗi không mong muốn.
        ```php
        $cars = array("Volvo", "BMW", "Toyota");

        foreach ($cars as &$x) {
            $x = "Ford";
        }

        // Không có unset($x), nên $x vẫn trỏ đến phần tử cuối cùng của mảng
        $x = "ice cream";

        var_dump($cars);
        // Kết quả sai: array(3) { [0]=> "Ford", [1]=> "Ford", [2]=> "ice cream" }
        ```
    
    - Giải pháp:
        - Luôn dùng unset($x); sau khi dùng tham chiếu trong foreach.
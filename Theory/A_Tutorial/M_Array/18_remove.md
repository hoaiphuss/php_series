# Xóa Phần Tử Trong Mảng PHP
### Xóa phần tử bằng array_splice()
- Hàm array_splice() giúp xóa phần tử bằng cách chỉ định chỉ mục bắt đầu và số phần tử cần xóa.

```php
$cars = array("Volvo", "BMW", "Toyota");

// Xóa phần tử tại index 1 (BMW)
array_splice($cars, 1, 1);

// Xóa 3 phần tử, bắt đầu từ index 1
array_splice($cars, 1, 3);

print_r($cars);
```

- Sau khi xóa, mảng sẽ tự động đánh lại chỉ mục.

### Xóa phần tử bằng unset()
- Có số lượng đối số không giới hạn

- Trong mảng index
    - Hàm unset() giúp xóa các phần tử được chỉ định

    - Nhưng không sắp xếp lại chỉ mục.

    ```php
    $cars = array("Volvo", "BMW", "Toyota");

    // Xóa phần tử tại index 1 (BMW)
    unset($cars[1]);

    print_r($cars);

    // Xóa phần tử tại index 0 và 2
    unset($cars[0], $cars[2]);

    print_r($cars);
    ```

- Trong mảng kết hợp
    ```php
    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);

    // Xóa phần tử có key "model"
    unset($cars["model"]);

    print_r($cars);
    /*
    Kết quả:
    Array ( [brand] => Ford [year] => 1964 )
    */
    ```

- Mảng bị "khuyết"

### Xóa phần tử bằng array_diff()
- Hàm array_diff() giúp tạo một mảng mới không chứa các giá trị bị loại bỏ.

```php
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);

// Tạo một mảng mới không chứa "Mustang" và 1964
$newarray = array_diff($cars, ["Mustang", 1964]);

print_r($newarray);
/*
Kết quả:
Array ( [brand] => Ford )
*/
```

- array_diff() chỉ xóa theo giá trị, không xóa theo khóa.

### Xóa phần từ cuối cùng bằng array_pop()
- array_pop() giúp xóa phần tử cuối cùng trong mảng.

```php
$cars = array("Volvo", "BMW", "Toyota");

// Xóa phần tử cuối cùng
array_pop($cars);

print_r($cars);
/*
Kết quả:
Array ( [0] => Volvo [1] => BMW )
*/
```

### Xóa phần từ đầu tiên bằng array_shift()
- array_shift() giúp xóa phần tử đầu tiên trong mảng.

```php
$cars = array("Volvo", "BMW", "Toyota");

// Xóa phần tử đầu tiên
array_shift($cars);

print_r($cars);
/*
Kết quả:
Array ( [0] => BMW [1] => Toyota )
*/
```
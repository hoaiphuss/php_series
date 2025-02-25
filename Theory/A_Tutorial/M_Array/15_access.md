# Truy Cập Mảng trong PHP
### Có thể truy cập phần tử trong mảng bằng chỉ mục (index) và tên khóa
- Phần tử của mảng chỉ mục được truy cập thông qua chỉ số index.
```php
// Mảng chỉ mục
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[2]; // Kết quả: Toyota
```

- Có thể truy cập phần tử bằng cách sử dụng tên khóa.
```php
// Mảng kết hợp
$cars = array(
    "brand" => "Ford",
    "model" => "Mustang",
    "year" => 1964
);

echo $cars["year"]; // Kết quả: 1964
```

### Có thể dùng cả dấu nháy đơn và nháy đôi khi truy cập mảng.
```php
echo $cars["model"]; // Mustang
echo $cars['model']; // Mustang
```

### Mảng trong PHP có thể chứa hàm (function) như một phần tử.
- Để gọi hàm trong mảng, chỉ cần thêm () vào sau phần tử đó.
```php
// Mảng chỉ mục
function myFunction() {
    echo "I come from a function!";
}

$myArr = array("Volvo", 15, myFunction);

$myArr[2](); // Kết quả: I come from a function!

// Mảng kết hợp
function myFunction() {
    echo "I come from a function!";
}

$myArr = array(
    "car" => "Volvo",
    "age" => 15,
    "message" => myFunction
);

$myArr["message"](); // Kết quả: I come from a function!
```
### Duyệt qua mảng bằng vòng lặp foreach
- Indexed Array
```php
// Indexed Array
$cars = array("Volvo", "BMW", "Toyota");

foreach ($cars as $x) {
    echo "$x <br>";
}
```

- Associative Array
```php
// Associative Array
$car = array(
    "brand" => "Ford",
    "model" => "Mustang",
    "year" => 1964
);

foreach ($car as $key => $value) {
    echo "$key: $value <br>";
}
```

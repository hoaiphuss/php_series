# Tạo mảng trong PHP
- Có thể tạo mảng bằng 2 cách:
    - Dùng hàm array()

    - Dùng dấu [] (cú pháp ngắn hơn)

```php
// Cách 1: Dùng array()
$cars = array("Volvo", "BMW", "Toyota");

// Cách 2: Dùng dấu []
$cars = ["Volvo", "BMW", "Toyota"];
```

### Mảng có thể khai báo trên nhiều dòng
```php
$cars = [
    "Volvo",
    "BMW",
    "Toyota"
];
```

### PHP cho phép dấu phẩy , ở cuối dòng, giúp dễ dàng thêm phần tử mới sau này.
```php
$cars = [
    "Volvo",
    "BMW",
    "Toyota",
];
```

### Chỉ mục key trong mảng
- Mảng chỉ mục (Indexed Array) có key là số tự động tăng từ 0
```php
$cars = [
    "Volvo", // 0
    "BMW", // 1
    "Toyota", // 2
];
```

- Có thể tự định nghĩa chỉ mục số
```php
$cars = [
    0 => "Volvo",
    1 => "BMW",
    2 => "Toyota"
];
```

- Mảng kết hợp (Associative Array) có key là chuỗi
```php
$myCar = [
  "brand" => "Ford",
  "model" => "Mustang",
  "year" => 1964
];
```

### Có thể tạo một mảng rỗng trước, rồi thêm phần tử vào sau.
```php
// Mảng chỉ mục:
$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

// Mảng kết hợp:
$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = 1964;
```

### Có thể có cả key số và key chuỗi trong cùng một mảng.
```php
$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";
```
# Mảng chỉ mục trong PHP
- Là mảng mà mỗi phần tử được gán một số nguyên làm chỉ mục (index).

- Chỉ mục mặc định bắt đầu từ 0 cho phần tử đầu tiên

```php
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
```

# Thao tác với mảng chỉ mục
### Khi thêm phần tử mới bằng array_push(), phần tử mới sẽ nhận chỉ mục cao hơn chỉ mục lớn nhất hiện có.
```php
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

array_push($cars, "Ford"); 
var_dump($cars);
```

### Nếu các chỉ mục trong mảng không liên tục, chỉ mục được thêm vào sẽ lớn hơn chỉ mục cao nhất 1 đơn vị.
```php
$cars[5] = "Volvo";
$cars[7] = "BMW";
$cars[14] = "Toyota";

array_push($cars, "Ford"); // Chỉ mục 15
var_dump($cars);
```
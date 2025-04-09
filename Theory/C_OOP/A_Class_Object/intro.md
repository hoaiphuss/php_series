# Class và Object - OOP PHP
- Lớp (Class) là một khuôn mẫu (template) để tạo ra đối tượng (object).

- Đối tượng (Object) là một thể hiện (instance) của lớp.

- Ví dụ:
    - Trái cây (Class) - Trái chuối, trái táo (Object)

    - Xe 2 bánh (Class) - Xe future, xe ga, xe côn (Object)

# Khai báo lớp
- Được khai báo bằng từ khóa `class`

- Theo sau tên lớp là cặp `{}`

- Bên trong lớp, ta có thể khai báo:
    - Thuộc tính (properties): là các biến trong lớp

    - Phương thức (method): là các hàm trong lớp

```php
class Fruit {
    // Code sẽ được viết ở đây...
}
```

```php
<?php
    class Fruit {
        // Thuộc tính
        public $name;
        public $color;

        // Phương thức
        function set_name($name) {
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        }
    }
?>
```

# Tạo đối tượng từ lớp
- Lớp chỉ là một khuôn mẫu, cần tạo đối tượng để sử dụng nó.

- Sử dụng từ khóa new để tạo đối tượng.

```php
$apple = new Fruit();
$banana = new Fruit();

$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
```
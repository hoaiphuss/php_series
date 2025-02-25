# Thêm Phần Tử Vào Mảng Trong PHP
- Có thể thêm phần tử vào mảng theo nhiều cách khác nhau tùy thuộc vào loại mảng (mảng chỉ mục hoặc mảng kết hợp).

### Thêm một phần tử vào mảng chỉ mục
- Có thể sử dụng cú pháp [] để thêm phần tử vào cuối mảng.
    ```php
    $fruits = array("Apple", "Banana", "Cherry");

    // Thêm phần tử "Orange" vào cuối mảng
    $fruits[] = "Orange";

    print_r($fruits);
    /*
        Kết quả:
        Array ( [0] => Apple [1] => Banana [2] => Cherry [3] => Orange )
    */
    ```

### Thêm một phần tử vào mảng kết hợp
- Cần chỉ định tên khóa khi thêm phần tử mới.
    ```php
    $cars = array("brand" => "Ford", "model" => "Mustang");

    // Thêm một phần tử mới với key "color"
    $cars["color"] = "Red";

    print_r($cars);
    /*
        Kết quả:
        Array ( [brand] => Ford [model] => Mustang [color] => Red )
    */
    ```

### Thêm nhiều phần tử vào mảng chỉ mục
- Có thể sử dụng hàm array_push() để thêm nhiều phần tử cùng lúc.

- array_push($array, $item1, $item2, ...) giúp thêm nhiều phần tử vào cuối mảng.
    ```php
    $fruits = array("Apple", "Banana", "Cherry");

    // Thêm nhiều phần tử mới vào cuối mảng
    array_push($fruits, "Orange", "Kiwi", "Lemon");

    print_r($fruits);
    /*
    Kết quả:
    Array ( [0] => Apple [1] => Banana [2] => Cherry [3] => Orange [4] => Kiwi [5] => Lemon )
    */
    ```

### Thêm nhiều phần tử vào mảng kết hợp
- Bạn có thể sử dụng toán tử += để thêm nhiều phần tử vào một mảng kết hợp.
    ```php
    $cars = array("brand" => "Ford", "model" => "Mustang");

    // Thêm nhiều phần tử mới vào mảng
    $cars += ["color" => "Red", "year" => 1964];

    print_r($cars);
    /*
    Kết quả:
    Array ( [brand] => Ford [model] => Mustang [color] => Red [year] => 1964 )
    */
    ```
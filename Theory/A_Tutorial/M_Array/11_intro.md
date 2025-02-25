# PHP Array
- Là một biến đặc biệt

- Có thể lưu trữ nhiều giá trị dưới cùng một tên.
    ```php
    $cars = array("Volvo", "BMW", "Toyota");
    ```

- Có thể truy cập các giá trị này thông qua chỉ số (index) hoặc khóa (key).

# Các loại mảng PHP
- `Mảng chỉ mục (Indexed Array)`: Các phần tử được lưu trữ với chỉ mục là số nguyên bắt đầu từ 0.

- `Mảng kết hợp (Associative Array)`: Các phần tử được lưu trữ với khóa là chuỗi (string).

- `Mảng đa chiều (Multidimensional Array)`: Một mảng có thể chứa nhiều mảng bên trong nó.

# Các phần tử trong mảng
- Có thể thuộc bất kỳ kiểu dữ liệu nào, phổ biến là:
    - Chuỗi

    - Số nguyên

    - Số thực

    - Mảng bên trong một mảng khác

    - Hàm

    - . . .

- Có thể có nhiều giá trị khác kiểu dữ liệu trong một mảng:
    ```php
    $myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);
    ```

# Thao tác với mảng:
- Tạo mảng

- Truy cập phần tử mảng

- Cập nhật giá trị mảng

- Thêm phần tử vào mảng

- Xóa phần tử khỏi mảng

- Sắp xếp mảng
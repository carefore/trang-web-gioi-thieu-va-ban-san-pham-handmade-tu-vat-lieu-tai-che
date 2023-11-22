<?php
// Kết nối tới cơ sở dữ liệu (DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME cần được thay thế)
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối tới cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ POST request
$productName = $_POST['productName'];
$productDescription = $_POST['productDescription'];
$productPrice = $_POST['productPrice'];

// SQL query để lưu thông tin sản phẩm vào cơ sở dữ liệu
$sql = "INSERT INTO products (productName, productDescription, productPrice) VALUES ('$productName', '$productDescription', '$productPrice')";

if ($conn->query($sql) === TRUE) {
    echo "Sản phẩm đã được thêm thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

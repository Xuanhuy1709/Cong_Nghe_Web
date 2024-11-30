<?php
$dsn = 'mysql:host=localhost;dbname=flower_management;charset=utf8';
$username = 'root'; // Thay bằng user của bạn
$password = ''; // Thay bằng mật khẩu của bạn

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage());
}

// Lấy danh sách hoa
function getFlowers($pdo) {
    $stmt = $pdo->query("SELECT * FROM flowers");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

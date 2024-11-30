<?php
include 'header.php';
include 'flowers.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $fileName = basename($_FILES['image']['name']);
        $targetPath = $uploadDir . $fileName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
            $stmt = $pdo->prepare("INSERT INTO flowers (name, description, image) VALUES (?, ?, ?)");
            $stmt->execute([$name, $description, $targetPath]);
            header('Location: admin.php');
            exit;
        } else {
            echo "Lỗi khi tải ảnh lên.";
        }
    }
}
?>

<main>
    <h1>Thêm hoa mới</h1>
    <form action="create.php" method="post" enctype="multipart/form-data">
        <label>Tên hoa:</label>
        <input type="text" name="name" required><br>
        <label>Mô tả:</label>
        <textarea name="description" required></textarea><br>
        <label>Hình ảnh:</label>
        <input type="file" name="image" accept="image/*" required><br>
        <button type="submit">Thêm</button>
    </form>
</main>

<?php include 'footer.php'; ?>

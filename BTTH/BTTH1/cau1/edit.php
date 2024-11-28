<?php
include 'header.php';
include 'flowers.php';

$index = $_GET['index'];
$flower = $_SESSION['flowers'][$index];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];

    // Xử lý ảnh mới
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $fileName = basename($_FILES['image']['name']);
        $targetPath = $uploadDir . $fileName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
            $flower['image'] = $targetPath;
        } else {
            echo "Lỗi khi tải ảnh lên.";
        }
    }

    // Cập nhật thông tin
    $flower['name'] = $name;
    $flower['description'] = $description;

    $_SESSION['flowers'][$index] = $flower;

    // Chuyển hướng về trang admin
    header('Location: admin.php');
    exit;
}
?>

<main>
    <h1>Sửa hoa</h1>
    <form action="edit.php?index=<?= $index; ?>" method="post" enctype="multipart/form-data">
        <label>Tên hoa:</label>
        <input type="text" name="name" value="<?= htmlspecialchars($flower['name']); ?>" required><br>
        <label>Mô tả:</label>
        <textarea name="description" required><?= htmlspecialchars($flower['description']); ?></textarea><br>
        <label>Hình ảnh (Tải ảnh mới nếu muốn thay đổi):</label>
        <input type="file" name="image" accept="image/*"><br>
        <button type="submit">Cập nhật</button>
    </form>
</main>

<?php include 'footer.php'; ?>

<?php
include 'header.php';
include 'flowers.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM flowers WHERE id = ?");
$stmt->execute([$id]);
$flower = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $fileName = basename($_FILES['image']['name']);
        $targetPath = $uploadDir . $fileName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
            $stmt = $pdo->prepare("UPDATE flowers SET name = ?, description = ?, image = ? WHERE id = ?");
            $stmt->execute([$name, $description, $targetPath, $id]);
        }
    } else {
        $stmt = $pdo->prepare("UPDATE flowers SET name = ?, description = ? WHERE id = ?");
        $stmt->execute([$name, $description, $id]);
    }

    header('Location: admin.php');
    exit;
}
?>

<main>
    <h1>Sửa hoa</h1>
    <form action="edit.php?id=<?= $id; ?>" method="post" enctype="multipart/form-data">
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

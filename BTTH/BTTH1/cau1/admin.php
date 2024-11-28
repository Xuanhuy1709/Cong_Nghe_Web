<?php include 'header.php'; ?>
<?php include 'flowers.php'; ?>

<main>
    <h1>Quản lý danh sách hoa</h1>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên hoa</th>
                    <th>Mô tả</th>
                    <th>Hình ảnh</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($_SESSION['flowers'])): ?>
                    <?php foreach ($_SESSION['flowers'] as $index => $flower): ?>
                        <tr>
                            <td><?= $index + 1; ?></td>
                            <td><?= htmlspecialchars($flower['name']); ?></td>
                            <td><?= htmlspecialchars($flower['description']); ?></td>
                            <td><img src="<?= htmlspecialchars($flower['image']); ?>" alt="<?= htmlspecialchars($flower['name']); ?>" style="width: 100px;"></td>
                            <td>
                                <a href="edit.php?index=<?= $index; ?>"><i class="fas fa-edit"></i></a>
                                <a href="delete.php?index=<?= $index; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">Không có hoa nào.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <a href="create.php">Thêm hoa mới</a>
    </div>
</main>

<?php include 'footer.php'; ?>

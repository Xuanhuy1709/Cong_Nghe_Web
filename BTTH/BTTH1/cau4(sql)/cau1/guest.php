<?php
include 'header.php';
include 'flowers.php';

$flowers = getFlowers($pdo);
?>

<main>
    <h1>13 loại hoa tuyệt đẹp thích hợp trồng để khoe hương sắc dịp xuân hè</h1>
    <div class="container">
        <?php if (!empty($flowers)): ?>
            <?php foreach ($flowers as $flower): ?>
                <div class="flower">
                    <h2><?= htmlspecialchars($flower['name']); ?></h2>
                    <p><?= htmlspecialchars($flower['description']); ?></p>
                    <img src="<?= htmlspecialchars($flower['image']); ?>" alt="<?= htmlspecialchars($flower['name']); ?>">
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Không có hoa nào.</p>
        <?php endif; ?>
    </div>
</main>

<?php include 'footer.php'; ?>

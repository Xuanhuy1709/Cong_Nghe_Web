<?php include 'header.php'; ?>
<?php include 'products.php'; ?>

<main>
    <button class="btn-add"><?php echo "Thêm mới"; ?></button>
    <table>
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Giá thành</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($products as $product) {
                echo "<tr>
                        <td>{$product['name']}</td>
                        <td>{$product['price']}</td>
                        <td><button class='btn-edit'>✏️</button></td>
                        <td><button class='btn-delete'>🗑️</button></td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</main>

<style>
    main {
        padding: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    table th, table td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }
    table th {
        background-color: #f2f2f2;
    }
    table tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .btn-add {
        margin-bottom: 20px;
        padding: 10px 15px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }
    .btn-add:hover {
        background-color: #0056b3;
    }
    .btn-edit, .btn-delete {
        padding: 5px 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    .btn-edit {
        background-color: #ffc107;
        color: white;
    }
    .btn-edit:hover {
        background-color: #e0a800;
    }
    .btn-delete {
        background-color: #dc3545;
        color: white;
    }
    .btn-delete:hover {
        background-color: #c82333;
    }
</style>

<?php include 'footer.php'; ?>

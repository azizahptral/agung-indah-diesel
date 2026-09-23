<?php

require_once 'products.php';
require_once 'functions.php';

$totalNilaiStok = hitungTotalNilaiStok($products);

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agung Indah Diesel</title>

    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 40px;
        background-color: #f5f5f5;
    }

    h1 {
        color: #1f2937;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: white;
    }

    th, td {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: left;
    }

    th {
        background-color: #2f4f4f;
        color: white;
    }

    .stok-kritis {
        background-color: #ffcccc;
    }
</style>
</head>

<body>

    <h1>Agung Indah Diesel</h1>
    <p>Product Information System</p>

    <h2>Daftar Produk</h2>
    <p>
    <strong>Total Nilai Seluruh Stok:</strong>
    Rp<?= number_format($totalNilaiStok, 0, ',', '.') ?>
    </p>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
        </tr>

        <?php foreach ($products as $product): ?>

            <?php if ($product['stock'] < 3): ?>
                <tr style="background-color: #ffcccc;">
            <?php else: ?>
                <tr>
            <?php endif; ?>

                <td><?= $product['id'] ?></td>
                <td><?= $product['name'] ?></td>
                <td><?= $product['category'] ?></td>
                <td>Rp<?= number_format($product['price'], 0, ',', '.') ?></td>
                <td><?= $product['stock'] ?></td>
                <td><?= $product['description'] ?></td>

            </tr>

        <?php endforeach; ?>

    </table>

</body>

</html>
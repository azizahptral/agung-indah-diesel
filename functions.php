<?php

function hitungTotalNilaiStok($products)
{
    $total = 0;

    foreach ($products as $product) {
        $total += $product['price'] * $product['stock'];
    }

    return $total;
}
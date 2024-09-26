<?php

return [
'name' => 'Ürün Fiyatları',
'warning_prices' => 'Bu fiyatlar ürünün orijinal maliyetlerini temsil eder ve flaş satışlar, promosyonlar ve daha fazlası gibi faktörler nedeniyle değişebilen nihai fiyatları yansıtmayabilir.',

'import' => [
    'name' => 'Ürün Fiyatlarını Güncelle',
    'description' => 'Bir CSV/Excel dosyası yükleyerek ürün fiyatlarını toplu olarak güncelleyin.',
    'done_message' => 'Güncellendi :count ürün(ler) başarıyla.',
    'rules' => [
    'id' => 'Kimlik alanı zorunludur ve ürünler tablosunda bulunmalıdır.',
    'name' => 'Ad alanı zorunludur ve bir dize olmalıdır.',
    'sku' => 'SKU alanı bir dize olmalıdır.',
    'cost_per_item' => 'Ürün başına maliyet alanı sayısal bir değer olmalıdır.',
    'price' => 'Fiyat alanı zorunludur ve sayısal bir değer olmalıdır.',
    'sale_price' => 'Satış fiyatı alanı sayısal bir değer olmalıdır.',
    ],
],

    'export' => [
    'description' => 'Ürün fiyatlarını bir CSV/Excel dosyasına aktar.',
    ],
];

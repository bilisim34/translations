<?php

return [
    'name' => 'Ürün Envanteri',
    'storehouse_management' => 'Depo Yönetimi',

    'import' => [
        'name' => 'Ürün Envanterini Güncelle',
        'description' => 'Bir CSV/Excel dosyası yükleyerek ürün envanterini toplu olarak güncelleyin',
        'done_message' => 'Güncellendi :count ürün(ler) başarıyla.',
        'rules' => [
            'id' => 'ID alanı zorunludur ve products tablosunda bulunmalıdır.',
            'name' => 'Name alanı zorunludur ve bir string olmalıdır.',
            'sku' => 'SKU alanı bir dize olmalıdır.',
            'with_storehouse_management' => 'Depo yönetimi ile alanı "Evet" veya "Hayır" olmalıdır',
            'quantity' => 'Depo yönetimi ile "Evet" olduğunda miktar alanı zorunludur',
            'stock_status' => 'Depo yönetimi "Hayır" olduğunda stok durumu alanı zorunludur ve aşağıdaki değerlerden biri olmalıdır: :statuses',
        ],
    ],

    'export' => [
        'description' => 'Ürün envanterini bir CSV/Excel dosyasına aktarın',
    ],
];
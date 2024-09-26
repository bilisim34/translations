<?php

return [
    'name' => 'Lokasyonlar',
    'all_states' => 'Tüm İller',
    'abbreviation' => 'Kısaltma',
    'abbreviation_placeholder' => 'Örn: CA',
    'enums' => [
        'import_type' => [
            'country' => 'Ülke',
            'state' => 'İller',
            'city' => 'İlçeler',
        ],
    ],
    'export' => [
        'total' => 'Toplam Lokasyonlar',
        'total_countries' => 'Toplam Ülkeler',
        'total_states' => 'Toplam İller',
        'total_cities' => 'Toplam İlçeler',
        'description' => 'Ülkeler, İller ve İlçeler gibi konum verilerinizi dışa aktarın',
    ],
    'import' => [
        'description' => 'Konum verilerini mevcut verilerden veya bir CSV/Excel dosyası yükleyerek kolayca içe aktarın',
        'rules' => [
            'name' => 'Konumun adı zorunludur ve 120 karakteri geçmemelidir',
            'slug' => 'Konumun slug\'ı, eğer sağlanmışsa, 120 karakteri geçmemelidir',
            'import_type' => 'İçe aktarma türü zorunludur ve önceden tanımlanmış değerlerden biri olmalıdır',
            'order' => 'Konumun sırası, eğer sağlanmışsa, 0 ile 127 arasında pozitif bir tamsayı olmalıdır',
            'abbreviation' => 'Konumun kısaltması, eğer sağlanmışsa, 10 karakteri geçmemelidir',
            'status' => 'Konumun durumu zorunludur ve önceden tanımlanmış değerlerden biri olmalıdır',
            'country' => 'İçe aktarma türü eyalet veya şehir ise ülke alanı zorunludur',
            'state' => 'İçe aktarma türü şehir ise eyalet alanı zorunludur',
            'nationality' => 'Konumun milliyeti, eğer sağlanmışsa, 120 karakteri geçmemelidir',
        ],
    ],
];

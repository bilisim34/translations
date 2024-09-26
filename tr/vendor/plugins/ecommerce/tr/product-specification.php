<?php

return [
    'specification_groups' => [
        'title' => 'Spesifikasyon Grupları',

        'create' => [
            'title' => 'Spesifikasyon Grubu Oluştur',
        ],

        'edit' => [
            'title' => 'Spesifikasyon Grubunu Düzenle “:name”',
        ],
    ],

    'specification_attributes' => [
        'title' => 'Spesifikasyon Nitelikleri',

        'grup' => 'İlişkili Grup',
        'group_placeholder' => 'Herhangi bir Grup Seçin',
        'type' => 'Alan Tipi',
        'default_value' => 'Varsayılan Değer',
        'options' => [
            'title' => 'Seçenekler',

            'add' => [
                'label' => 'Yeni seçenek ekle',
            ],
        ],

        'create' => [
            'title' => 'Spesifikasyon Özniteliği Oluştur',
        ],

        'edit' => [
            'title' => 'Spesifikasyon Özniteliğini Düzenle “:name”',
        ],
    ],

    'specification_tables' => [
        'type' => 'Spesifikasyon Tabloları',

        'create' => [
            'title' => 'Spesifikasyon Tablosu Oluştur',
        ],

        'edit' => [
            'title' => 'Spesifikasyon Tablosunu Düzenle “:name”',
        ],

        'fields' => [
            'groups' => 'Bu tabloda görüntülenecek grupları seçin',
            'name' => 'Grup ismi',
            'assigned_groups' => 'Atanmış Gruplar',
            'sorting' => 'Sıralama',
        ],
    ],

    'product' => [
        'specification_table' => [
            'options' => 'Seçenekler',
            'title' => 'Şartname Tablosu',
            'select_none' => 'Yok',
            'description' => 'Bu üründe görüntülenecek spesifikasyon tablosunu seçin',
            'group' => 'Grup',
            'attribute' => 'Öznitelik',
            'value' => 'Öznitelik değeri',
            'hide' => 'Gizle',
            'sorting' => 'Sıralama',
        ],
    ],

    'enums' => [
        'field_types' => [
            'text' => 'Metin',
            'textarea' => 'Textarea',
            'select' => 'Select',
            'checkbox' => 'Checkbox',
            'radio' => 'Radio',
        ],
    ],
];
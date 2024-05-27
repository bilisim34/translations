<?php

return [
    'name' => 'Duyurular',
    'enums' => [
        'announce_placement' => [
            'top' => 'Üst',
            'bottom' => 'Altta sabit',
            'popup' => 'Popup',
            'theme' => 'Theme built-in',
        ],
        'text_alignment' => [
            'start' => 'Başlangıç',
            'center' => 'Merkez',
        ],
    ],
    'validation' => [
        'font_size' => 'Yazı tipi boyutu geçerli bir CSS yazı tipi boyutu değeri olmalıdır',
        'text_color' => 'Metin rengi geçerli bir hex renk değeri olmalıdır',
    ],
    'create' => 'Yeni duyuru oluştur',
    'add_new' => 'Yeni ekle',
    'settings' => [
        'name' => 'Duyuru',
        'description' => 'Duyuru ayarlarını yönet',
    ],
    'background_color' => 'Arka plan rengi',
    'font_size' => 'Yazı tipi boyutu',
    'font_size_help' => 'Varsayılanı kullanmak için boş bırakın. Örnek: 1rem, 1em, 12px, ...',
    'text_color' => 'Metin rengi',
    'start_date' => 'Başlangıç tarihi',
    'end_date' => 'Bitiş tarihi',
    'has_action' => 'Eylem var mı?',
    'action_label' => 'Eylem etiketi',
    'action_url' => 'Eylem URL\'si',
    'action_open_new_tab' => 'Yeni sekmede aç?',
    'dismissible_label' => 'Kullanıcının duyuruyu kapatmasına izin ver?',
    'placement' => 'Yerleşim',
    'text_alignment' => 'Metin hizalama',
    'is_active' => 'Aktif mi?',
    'is_available' => 'Kullanılabilir',
    'max_width' => 'Maksimum genişlik',
    'max_width_help' => 'Varsayılan değeri kullanmak için boş bırakın. Örnek: 100%, 500px, ...',
    'max_width_unit' => 'Maksimum genişlik birimi',
    'font_size_unit' => 'Yazı tipi boyutu birimi',
    'autoplay_label' => 'Autoplay?',
    'autoplay_delay_label' => 'Otomatik oynatma gecikmesi',
    'autoplay_delay_help' => 'Her duyuru arasındaki milisaniye cinsinden gecikme. Varsayılan değeri (5000) kullanmak için boş bırakın.',
];

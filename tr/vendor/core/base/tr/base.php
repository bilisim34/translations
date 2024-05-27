<?php

return [
    'yes' => 'Evet',
    'no' => 'Hayır',
    'is_default' => 'Varsayılan mı?',
    'proc_close_disabled_error' => 'İşlev proc_close() devre dışı bırakıldı. Etkinleştirmek için lütfen barındırma sağlayıcınızla iletişime geçin.
    o. Ya da bu özelliği devre dışı bırakmak için .env: Bu özelliği devre dışı bırakmak için CAN_EXECUTE_COMMAND=false.',
    'email_template' => [
        'header' => 'E-posta şablonu başlığı',
        'footer' => 'E-posta şablonu altbilgisi',
        'site_title' => 'Site başlığı',
        'site_url' => 'Site URL\'si',
        'site_logo' => 'Site Logosu',
        'date_time' => 'Geçerli tarih saati',
        'date_year' => 'İçinde bulunulan yıl',
        'site_admin_email' => 'Site yönetici e-postası',
        'twig' => [
            'etiket' => [
                'apply' => 'apply etiketi Twig filtrelerini uygulamanızı sağlar',
                'for' => 'Bir dizideki her öğe üzerinde döngü',
                'if' => 'Twig\'deki if deyimi PHP\'nin if deyimleri ile karşılaştırılabilir',
            ],
        ],
    ],
    'change_image' => 'Resmi değiştir',
    'delete_image' => 'Resmi sil',
    'preview_image' => 'Önizleme görüntüsü',
    'image' => 'Image',
    'using_button' => 'Düğmeyi kullan',
    'select_image' => 'Resim seç',
    'click_here' => 'Buraya tıklayın',
    'to_add_more_image' => 'daha fazla resim eklemek için',
    'add_image' => 'Resim ekle',
    'tools' => 'Araçlar',
    'close' => 'Close',
    'panel' => [
        'others' => 'Diğerleri',
        'system' => 'Sistem',
        'manage_description' => 'Manage :name',
    ],
    'global_search' => [
        'title' => 'Arama',
        'search' => 'Ara',
        'clear' => 'Temizle',
        'no_result' => 'Sonuç bulunamadı',
        'to_select' => 'seçmek için',
        'to_navigate' => 'gezinmek için',
        'to_close' => 'kapatmak için',
    ],
    'validation' => [
        'email_in_blacklist' => ':attribute kara listede. Lütfen başka bir e-posta adresi kullanın.',
        'domain' => 'Bu :attribute geçerli bir domain olmalıdır,',
    ],
    'showing_records' => 'Gösterilen :from ile :to arasında :total kayıtlar',
    'modules' => 'Modüller',
];
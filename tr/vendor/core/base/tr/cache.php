<?php

return [
    'cache_management' => 'Önbellek Yönetimi',
    'cache_management_description' => 'Sitenizi güncel hale getirmek için önbelleği temizleyin',
    'cache_commands' => 'Önbellek komutlarını temizle',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Tüm CMS önbelleğini temizle',
            'description' => 'CMS önbelleğini temizle: veritabanı önbelleği, statik bloklar... Verileri güncelledikten sonra değişiklikleri göremediğinizde bu komutu çalıştırın',
            'success_msg' => 'Önbellek temizlendi',
        ],
        'refresh_compiled_views' => [
            'title' => 'Derlenmiş görünümleri yenile',
            'description' => 'Görünümleri güncel hale getirmek için derlenmiş görünümleri temizle',
            'success_msg' => 'Önbellek görünümü yenilendi',
        ],
        'clear_config_cache' => [
            'title' => 'Yapılandırma önbelleğini temizle',
            'description' => 'Üretim ortamında bir şey değiştirdiğinizde yapılandırma önbelleğini yenilemeniz gerekebilir',
            'success_msg' => 'Yapılandırma önbelleği temizlendi',
        ],
        'clear_route_cache' => [
            'title' => 'Rota önbelleğini temizle',
            'description' => 'Önbellek yönlendirmesini temizle.',
            'success_msg' => 'Rota önbelleği temizlendi',
        ],
        'clear_log' => [
            'title' => 'Günlüğü temizle',
            'description' => 'Sistem günlük dosyalarını temizle',
            'success_msg' => 'Sistem günlüğü temizlendi',
        ],
    ],
];

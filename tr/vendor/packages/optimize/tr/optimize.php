<?php

return [
    'settings' => [
        'title' => 'Optimize Et',
        'description' => 'HTML çıktısını küçült, satır içi CSS, yorumları kaldır...',
        'enable' => 'Sayfa hızını optimize etmeyi etkinleştir?',
    ],
    'collapse_white_space' => 'Beyaz alanı daralt',
    'collapse_white_space_description' => 'Bu filtre gereksiz boşlukları kaldırarak bir HTML dosyasında aktarılan baytları azaltır',
    'elide_attributes' => 'Elide attributes',
    'elide_attributes_description' => 'Bu filtre, belirtilen değer o nitelik için varsayılan değere eşit olduğunda etiketlerden nitelikleri kaldırarak HTML dosyalarının aktarım boyutunu azaltır. Bu, az sayıda bayt tasarrufu sağlayabilir ve etkilenen etiketleri kanonikleştirerek belgeyi daha sıkıştırılabilir hale getirebilir.',
    'inline_css' => 'Satır İçi CSS',
    'inline_css_description' => 'Bu filtre, CSS\'yi başlığa taşıyarak etiketlerin satır içi "stil" niteliğini sınıflara dönüştürür',
    'insert_dns_prefetch' => 'DNS prefetch ekle',
    'insert_dns_prefetch_description' => 'Bu filtre, tarayıcının DNS ön-getirmesi yapmasını sağlamak için HEAD\'e etiketler enjekte eder',
    'remove_comments' => 'Yorumları kaldır',
    'remove_comments_description' => 'Bu filtre HTML, JS ve CSS yorumlarını ortadan kaldırır. Filtre, yorumları kaldırarak HTML dosyalarının aktarım boyutunu azaltır. HTML dosyasına bağlı olarak, bu filtre ağ üzerinde aktarılan bayt sayısını önemli ölçüde azaltabilir.',
    'remove_quotes' => 'Tırnak işaretlerini kaldır',
    'remove_quotes_description' => 'Bu filtre HTML özniteliklerindeki gereksiz tırnak işaretlerini kaldırır. Çeşitli HTML belirtimleri tarafından gerekli kılınsa da, tarayıcılar bir özniteliğin değeri belirli bir karakter alt kümesinden (alfanümerik ve bazı noktalama karakterleri) oluştuğunda bunların çıkarılmasına izin verir',
    'defer_javascript' => 'Defer javascript',
    'defer_javascript_description' => 'HTML\'de javascript\'in yürütülmesini erteliyor. Bazı betiklerde ertelemeyi iptal etmek gerekirse, ertelemeyi iptal etmek için betik özniteliği olarak data-pagespeed-no-defer kullanın.',
];

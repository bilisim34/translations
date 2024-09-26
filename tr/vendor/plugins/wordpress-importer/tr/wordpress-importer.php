<?php

return [
    'name' => 'WordPress Importer',
    'description' => 'Bu araç, yazılar, etiketler, kullanıcılar ve kategoriler gibi WordPress blog verilerinin sisteminize aktarılmasını kolaylaştırır. WooCommerce verilerini içe aktarmanız gerekiyorsa, lütfen talimatlar için aşağıdaki bölüme bakın',
    'copy_images' => 'Resimleri Kopyala',
    'copy_images_description' => 'Gönderiler ve sayfalar için öne çıkan görseller depolama alanınıza kopyalanacaktır. “Hayır” seçeneğini seçerseniz resim referansları aynı kalır ve hiçbir resim kopyalanmaz',
    'copy_categories' => 'Kategorileri Kopyala',
    'copy_categories_description' => 'Yazılar için kategoriler kopyalanacaktır. İşareti kaldırırsanız, içe aktarılan tüm gönderiler için varsayılan kategori seçebilirsiniz',
    'options' => 'Seçenekler',
    'select_default_category' => 'Varsayılan kategoriyi seçin',
    'loading' => 'Yükleniyor...',
    'upload_xml' => 'WordPress XML dışa aktarma dosyanızı aşağıya yükleyin ve İçe Aktar\'a tıklayın',
    'timeout_description' => 'Sitenizdeki yazıları ve resimleri kopyalarken çok fazla veriniz varsa biraz zaman alabilir, betiğin zaman aşımına uğramasını önlemek için bunu istediğiniz kadar yüksek bir değere ayarlayın',
    'max_timeout' => 'Saniye cinsinden Maksimum Zaman Aşımı',
    'wp_xml_file' => 'WordPress XML dosyası',
    'wp_xml_file_description' => 'WordPress Yöneticinizin içinde Araçlar->Dışa Aktar\'ı ziyaret ederek verileri dışa aktarmayı seçebilirsiniz',
    'import' => 'İçe aktar',
    'xml_file_required' => 'Lütfen yüklemek istediğiniz bir WordPress XML dosyası belirtin',
    'invalid_xml_file' => 'Geçersiz dosya türü. Lütfen bir WordPress XML dışa aktarma dosyası yüklediğinizden emin olun.',
    'import_success' => 'Imported :posts posts, :pages pages, :categories categories, :tags tags, and :users users successfully!',
    'load_seo_meta' => 'SEO Meta Yükle',
    'load_seo_meta_description' => 'WordPress Yoast SEO eklentisinden SEO Meta (Yazı ve Sayfa için) yükle',
    'load_more' => 'Daha fazlasını yükle',

    'data_synchronize' => [
        'import_products' => [
            'name' => 'WooCommerce Products',
            'description' => 'WooCommerce Ürünleri verilerini CSV dosyasından içe aktarın',
            'export_instruction' => 'WooCommerce Ürünleri CSV dosyanızı almak için WordPress yönetici panosuna gidin, ardından Ürünler -> Tüm Ürünler\'e gidin. Sol üst köşede bulunan “Dışa Aktar” düğmesine tıklayın. Dışa aktarmak istediğiniz ürün verilerini seçin ve uygun dosya biçimini (CSV) seçin. Son olarak, dışa aktarılan dosyayı indirmek için “CSV Oluştur” düğmesine tıklayın',
        ],
    ],
];
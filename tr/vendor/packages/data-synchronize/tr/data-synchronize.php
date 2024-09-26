<?php

return [
    'tools' => [
        'export_import_data' => 'Verileri Dışa/İçe Aktar',
    ],

    'import' => [
        'name' => 'İçe Aktar',
        'heading' => 'İçe aktar :label',
        'failed_to_read_file' => 'Dosya geçersiz veya bozuk ya da okunamayacak kadar büyük',

        'form' => [
            'quick_export_message' => 'Eğer :label verilerini dışa aktarmak istiyorsanız, :export_csv_link veya :export_excel_link\'e tıklayarak bunu hızlı bir şekilde yapabilirsiniz',
            'quick_export_button' => ':format\'a aktar',
            'dropzone_message' => 'Dosyayı buraya sürükleyip bırakın veya yüklemek için tıklayın',
            'allowed_extensions' => 'Aşağıdaki uzantılara sahip bir dosya seçin: :extensions.',
            'import_button' => ' İçe Aktar',
            'chunk_size' => 'Yığın boyutu',
            'chunk_size_helper' => 'Bir seferde içe aktarılacak satır sayısı yığın boyutu ile tanımlanır. Büyük bir dosyanız varsa ve veriler çok hızlı içe aktarılıyorsa bu değeri artırın. Verileri içe aktarırken bellek sınırları veya ağ geçidi zaman aşımı sorunlarıyla karşılaşırsanız bu değeri azaltın',
        ],

        'failures' => [
            'title' => 'Başarısızlıklar',
            'attribute' => 'Nitelik',
            'errors' => 'Hatalar',
        ],

        'example' => [
            'title' => 'Örnek',
            'download' => ' Örnek :type dosya türünü indir',
        ],

        'rules' => [
            'title' => 'Kurallar',
            'column' => 'Sütun',
        ],

        'uploading_message' => 'Dosya yüklenmeye başlıyor...',
        'uploaded_message' => 'Dosya :file başarıyla yüklendi. Verileri doğrulamaya başlayın...',
        'validating_message' => ':from\'dan :to \'ya doğrulanıyor...',
        'importing_message' => ' :from \'dan :to \'ya aktarılıyor...',
        'done_message' => ' İçe aktarıldı :count :label başarıyla',
        'validating_failed_message' => 'Doğrulama başarısız oldu. Lütfen aşağıdaki hataları kontrol edin.',
        'no_data_message' => 'Verileriniz zaten güncel veya içe aktarılacak veri yok',
    ],

    'export' => [
        'name' => 'Dışa Aktar',
        'title' => ' Dışa Aktar :label',

        'form' => [
            'all_columns_disabled' => 'Aşağıdaki sütunlar dışa aktarılacaktır:  :columns.',
            'columns' => 'Sütunlar',
            'format' => 'Format',
            'export_button' => 'Export',
        ],

        'success_message' => 'Başarıyla dışa aktarıldı.',
        'error_message' => 'Dışa aktarma başarısız oldu.',

        'empty_state' => [
            'title' => 'Dışa aktarılacak veri yok',
            'description' => 'Dışa aktarılacak veri yok gibi görünüyor',
            'back' => ' :page sayfasına geri dön',
        ],
    ],
];
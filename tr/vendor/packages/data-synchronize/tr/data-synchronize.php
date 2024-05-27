<?php

return [
    'tools' => [
        'export_import_data' => 'Verileri Dışa/İçe Aktar',
    ],

    'import' => [
        'name' => 'Import',
        'heading' => 'Import :label',
        'failed_to_read_file' => 'Dosya geçersiz veya bozuk ya da okunamayacak kadar büyük',

        'form' => [
            'quick_export_message' => 'Eğer :label verilerini dışa aktarmak istiyorsanız, :export_csv_link veya :export_excel_link\'e tıklayarak bunu hızlı bir şekilde yapabilirsiniz',
            'quick_export_button' => 'Export to :format',
            'dropzone_message' => 'Dosyayı buraya sürükleyip bırakın veya yüklemek için tıklayın',
            'allowed_extensions' => 'Aşağıdaki uzantılara sahip bir dosya seçin: :extensions.',
            'import_button' => 'Import',
        ],

        'example' => [
            'title' => 'Örnek',
            'download' => 'Download example :type file',
        ],

        'rules' => [
            'title' => 'Kurallar',
            'column' => 'Sütun',
        ],

        'uploading_message' => 'Dosya yüklenmeye başlıyor...',
        'uploaded_message' => 'Dosya :dosya başarıyla yüklendi. Verileri doğrulamaya başlayın...',
        'validating_message' => 'Validating from :from to :to...',
        'importing_message' => 'Importing from :from to :to...',
        'done_message' => 'Imported :count :label successfully.',
        'validating_failed_message' => 'Doğrulama başarısız oldu. Lütfen aşağıdaki hataları kontrol edin.',
        'no_data_message' => 'Verileriniz zaten güncel veya içe aktarılacak veri yok',
    ],

    'export' => [
        'name' => 'Export',
        'heading' => 'Export :label',

        'form' => [
            'all_columns_disabled' => 'Aşağıdaki sütunlar dışa aktarılacaktır: :columns.',
            'columns' => 'Sütunlar',
            'format' => 'Format',
            'export_button' => 'Export',
        ],

        'success_message' => 'Başarıyla dışa aktarıldı.',
        'error_message' => 'Dışa aktarma başarısız oldu.',

        'empty_state' => [
            'title' => 'Dışa aktarılacak veri yok',
            'description' => 'Dışa aktarılacak veri yok gibi görünüyor',
            'back' => 'Geri :page git',
        ],
    ],
];
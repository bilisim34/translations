<?php

return [
    'filter' => 'Filtrele',
    'everything' => 'Her şey',
    'image' => 'Resim',
    'video' => 'Video',
    'document' => 'Döküman',
    'view_in' => 'Görüntüle',
    'all_media' => 'Tüm medyalar',
    'trash' => 'Çöp',
    'recent' => 'Son',
    'favorites' => 'Favoriler',
    'upload' => 'Yükle',
    'create_folder' => 'Dosya oluştur',
    'refresh' => 'Yenile',
    'empty_trash' => 'Çöpü boşalt',
    'search_file_and_folder' => 'Mevcut dosyada ara',
    'sort' => 'Sırala',
    'file_name_asc' => 'Dosya adı - artan',
    'file_name_desc' => 'Dosya adı - azalan',
    'uploaded_date_asc' => 'Yükleme tarihi - artan',
    'uploaded_date_desc' => 'Yükleme tarihi - azalan',
    'size_asc' => 'Boyut - artan',
    'size_desc' => 'Boyut - azalan',
    'actions' => 'Eylemler',
    'nothing_is_selected' => 'Hiçbir şey seçilmedi',
    'insert' => 'Ekle',
    'folder_name' => 'Dosya adı',
    'create' => 'Oluştur',
    'rename' => 'Yeniden adlandır',
    'crop' => 'Crop',                
    'close' => 'Kapat',
    'save_changes' => 'Değişiklikleri kaydet',
    'move_to_trash' => 'Çöpe taşı',
    'confirm_trash' => 'Bu öğeleri çöp kutusuna taşımak istediğinizden emin misiniz??',
    'confirm' => 'Onayla',
    'confirm_delete' => 'Öğe(leri) Sil',
    'confirm_delete_description' => 'İsteğiniz geri alınamaz. Bu öğeleri silmek istediğinizden emin misiniz??',
    'empty_trash_title' => 'Çöpü boşalt',
    'empty_trash_description' => 'İsteğiniz geri alınamaz. Çöp kutusundaki tüm öğeleri kaldırmak istediğinizden emin misiniz?',
    'up_level' => 'Bir seviye yukarı',
    'upload_progress' => 'Yükleme ilerlemesi',
    'alt_text' => 'Alt text',                        

    'folder_created' => 'Dosya başarıyla oluşturuldu!',
    'gallery' => 'Medya galeri',

    'trash_error' => 'Error when delete selected item(s)',
    'trash_success' => 'Moved selected item(s) to trash successfully!',
    'restore_error' => 'Error when restore selected item(s)',
    'restore_success' => 'Restore selected item(s) successfully!',
    'copy_success' => 'Copied selected item(s) successfully!',
    'delete_success' => 'Deleted selected item(s) successfully!',
    'favorite_success' => 'Favorite selected item(s) successfully!',
    'remove_favorite_success' => 'Remove selected item(s) from favorites successfully!',
    'rename_error' => 'Error when rename item(s)',
    'rename_success' => 'Rename selected item(s) successfully!',
    'crop_success' => 'Crop image successfully!',                                            
    'empty_trash_success' => 'Empty trash successfully!',
    'invalid_action' => 'Invalid action!',
    'file_not_exists' => 'File is not exists!',
    'download_file_error' => 'Error when downloading files!',
    'missing_zip_archive_extension' => 'Please enable ZipArchive extension to download file!',
    'can_not_download_file' => 'Can not download this file!',
    'invalid_request' => 'Invalid request!',
    'add_success' => 'Add item successfully!',
    'file_too_big' => 'File too big. Max file upload is :size bytes',
    'file_too_big_readable_size' => 'File too big. Max file upload is :size.',                                                                        
    'can_not_detect_file_type' => 'File type is not allowed or can not detect file type!',
    'upload_failed' => 'The file is NOT uploaded completely. The server allows max upload file size is :size . Please check your file size OR try to upload again in case of having network errors',
    'failed_to_crop_image' => 'The file cropping must be image type',                                                                
    'menu_name' => 'Media',
    'add' => 'Add media',

    'javascript' => [
        'name' => 'Name',
        'url' => 'URL',
        'full_url' => 'Full URL',
        'alt' => 'Alt text',                    
        'size' => 'Size',
        'mime_type' => 'Type',
        'created_at' => 'Uploaded at',
        'updated_at' => 'Modified at',
        'nothing_selected' => 'Nothing is selected',
        'visit_link' => 'Open link',

        'no_item' => [
            'all_media' => [
                'icon' => 'fas fa-cloud-upload-alt',
                'title' => 'Drop files and folders here',
                'message' => 'Or use the upload button above',
            ],
            'trash' => [
                'icon' => 'fas fa-trash-alt',
                'title' => 'There is nothing in your trash currently',
                'message' => 'Delete files to move them to trash automatically. Delete files from trash to remove them permanently',
            ],
            'favorites' => [
                'icon' => 'fas fa-star',
                'title' => 'You have not added anything to your favorites yet',
                'message' => 'Add files to favorites to easily find them later',
            ],
            'recent' => [
                'icon' => 'far fa-clock',
                'title' => 'You did not opened anything yet',
                'message' => 'All recent files that you opened will be appeared here',
            ],
            'default' => [
                'icon' => 'fas fa-sync',
                'title' => 'No items',
                'message' => 'This directory has no item',
            ],
        ],

        'clipboard' => [
            'success' => 'These file links has been copied to clipboard',
        ],

        'message' => [
            'error_header' => 'Error',
            'success_header' => 'Success',
        ],

        'download' => [
            'error' => 'No files selected or cannot download these files',
        ],

        'actions_list' => [
            'basic' => [
                'preview' => 'Preview',
                'crop' => 'Crop',                
            ],
            'file' => [
                'copy_link' => 'Copy link',
                'rename' => 'Rename',
                'make_copy' => 'Make a copy',
                'alt_text' => 'ALT text',                        
            ],
            'user' => [
                'favorite' => 'Add to favorite',
                'remove_favorite' => 'Remove favorite',
            ],
            'other' => [
                'download' => 'Download',
                'trash' => 'Move to trash',
                'delete' => 'Delete permanently',
                'restore' => 'Restore',
            ],
        ],
        'change_image' => 'Change image',
        'delete_image' => 'Delete image',
        'choose_image' => 'Choose image',
        'preview_image' => 'Preview image',                                                                
    ],
    'name_invalid' => 'The folder name has invalid character(s).',
    'url_invalid' => 'Please provide a valid URL',
    'path_invalid' => 'Please provide a valid path',
    'download_link' => 'Download',
    'url' => 'URL',
    'download_explain' => 'Enter one URL per line.',
    'downloading' => 'Downloading...',
    'prepare_file_to_download' => 'Preparing file to download...',
    'update_alt_text_success' => 'Update alt text successfully!',

    'cropper' => [
        'height' => 'Height',
        'width' => 'Width',
        'aspect_ratio' => 'Aspect ratio?',
    ],
    'unable_to_write' => 'Unable to write file. Please chmod folder ":folder" to make it writeable!',
];
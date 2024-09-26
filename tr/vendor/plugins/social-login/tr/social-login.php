<?php

return [
    'settings' => [
    'title' => 'Sosyal Giriş ayarları',
    'description' => 'Sosyal giriş seçeneklerini yapılandır',
    'facebook' => [
        'enable' => 'Facebook girişini etkinleştir',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
        'helper' => 'Lütfen yeni uygulama oluşturmak için https://developers.facebook.com adresine gidin ve Uygulama Kimliğini, Uygulama Sırrını güncelleyin. Geri arama URL\'si :callback',
        'data_deletion_request_callback_url' => 'Kullanıcıların verilerinin silinmesini talep etmelerine izin vermek için Facebook uygulama ayarlarınızda Veri Silme İsteği URL\'si olarak bu URL\'yi :url olarak ayarlayın.',
        ],
    'google' => [
        'enable' => 'Google oturum açmayı etkinleştir',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
        'helper' => 'Lütfen yeni uygulama oluşturmak için https://console.developers.google.com/apis/dashboard adresine gidin ve Uygulama Kimliğini, Uygulama Sırrını güncelleyin. Geri arama URL\'si :callback',
    ],
    'github' => [
        'enable' => 'GitHub oturum açmayı etkinleştir',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
        'helper' => 'Yeni uygulama güncellemesi Uygulama Kimliği, Uygulama Sırrı oluşturmak için lütfen https://github.com/settings/developers adresine gidin. Geri arama URL\'si :callback',
    ],
    'linkedin' => [
        'enable' => 'Linkedin oturum açmayı etkinleştir',
        'app_id' => 'App ID',
        'app_secret' => 'App Secret',
        'helper' => 'Yeni uygulama güncellemesi Uygulama Kimliği, Uygulama Sırrı oluşturmak için lütfen https://www.linkedin.com/developers/apps/new adresine gidin. Geri arama URL\'si :callback',
    ],
    'linkedin-openid' => [
        'enable' => 'OpenID Connect oturum açmayı kullanarak Linkedin\'i etkinleştir',
        'app_id' => 'App ID',
        'app_secret' => 'App Secret',
        'helper' => 'Yeni uygulama oluşturmak için lütfen https://www.linkedin.com/developers/apps/new adresine gidin ve Uygulama Kimliğini, Uygulama Sırrını güncelleyin. Geri arama URL\'si :callback',
    ],
    'enable' => 'Sosyal oturum açma etkinleştirilsin mi?',
    'style' => 'Stil',
    'minimal' => 'Minimal',
    'default' => 'Varsayılan',
    'basic' => 'Temel',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Bağlantısı',
    ],
    'menu' => 'Sosyal Oturum Açma',
    'description' => 'Sosyal oturum açma ayarlarınızı görüntüleyin ve güncelleyin',
    'sign_in_with' => 'Şununla oturum açın :sağlayıcı',
];

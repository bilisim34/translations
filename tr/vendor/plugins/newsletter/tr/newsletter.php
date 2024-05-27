<?php

return [
    'name' => 'Bültenler',
    'description' => 'Bülten abonelerini görüntüleyin ve silin',
	'newsletter_form' => 'Haber bültenleri formu',														  
    'settings' => [
        'email' => [
            'templates' => [
                'title' => "Bülten",
                'description' => 'Bülten e-posta şablonlarını yapılandır',
                'to_admin' => [
                    'title' => 'Yöneticiye e-posta gönder',
                    'description' => 'Yöneticiye e-posta göndermek için şablon',
                ],
                'to_user' => [
                    'title' => 'Kullanıcıya e-posta gönder',
                    'description' => 'Aboneye e-posta göndermek için şablon',
                ],
            ],
        ],
        'title' => 'Bülten',
        'panel_description' => 'Bülten ayarlarını görüntüleyin ve güncelleyin',
        'description' => 'Haber bülteni için ayarlar (birisi web sitesinde haber bültenine kaydolduğunda SendGrid, Mailchimp...\'e otomatik haber bülteni e-postası gönder)',
        'mailchimp_api_key' => 'Mailchimp API Anahtarı',
        'mailchimp_list_id' => 'Mailchimp Liste Kimliği',
        'mailchimp_list' => 'Mailchimp Listesi',
        'sendgrid_api_key' => 'Sendgrid API Anahtarı',
        'sendgrid_list_id' => 'Sendgrid Liste Kimliği',
        'sendgrid_list' => 'Sendgrid Listesi',
        'enable_newsletter_contacts_list_api' => 'Haber bülteni kişi listesi API\'sini etkinleştir?',
    ],
'statuses' => [
        'subscribed' => 'Abone olundu',
        'unsubscribed' => 'Abonelikten çıkıldı',
    ],
];
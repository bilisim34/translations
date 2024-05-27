<?php

return [
    'name' => 'Para Çekme',
    'edit' => 'Para çekme işlemini düzenle',
    'statuses' => [
        'pending' => 'Beklemede',
        'processing' => 'Processing',
        'completed' => 'Tamamlandı',
        'canceled' => 'İptal edildi',
        'refused' => 'Reddedildi',
    ],
    'amount' => 'Tutar',
    'customer' => 'Müşteri',
    'vendor' => 'Satıcı',
    'currency' => 'Para Birimi',
    'forms' => [
        'amount' => 'Tutar',
        'amount_placeholder' => 'Çekmek istediğiniz tutar',
        'fee' => 'Fee',
        'fee_helper' => 'Para çekerken bir ücret ödemek zorundasınız: :fee',
        'pending_status_helper' => 'Para çekme işlemini tamamlamak için lütfen durumu işlem tamamlandı olarak güncelleyin',
        'payment_channel' => 'Ödeme Kanalı',
        'payment_channel_placeholder' => 'Ödeme Kanalı',
        'transaction_id' => 'İşlem Kimliği',
        'transaction_id_placeholder' => 'İşlem Kimliği',
        'amount_with_balance' => 'Tutar (bakiye: :balance)',
    ],
    'new_withdrawal_request_notifications' => [
        'new_withdrawal_request' => 'Yeni para çekme talebi',
        'view' => 'Görüntüle',
        'description' => ':customer para çekme talebinde bulunmuştur',
    ],
];

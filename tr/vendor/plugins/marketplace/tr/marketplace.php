<?php

return [
    'name' => 'Pazaryeri',
    'email' => [
        'store_new_order_title' => 'Yeni sipariş hakkında bildirim',
        'store_new_order_description' => 'Bir sipariş verildiğinde mağaza sahibine e-posta gönder',
        'verify_vendor_title' => 'Satıcıyı doğrula',
        'verify_vendor_description' => 'Bir satıcı kaydolduğunda yöneticiye e-posta gönder',
        'pending_product_approval_title' => 'Bekleyen ürün onayı',
        'pending_product_approval_description' => 'Bir satıcı ürünlerini gönderdiğinde yöneticiye e-posta gönder',
        'vendor_account_approved_title' => 'Satıcı hesabı onaylandı',
        'vendor_account_approved_description' => 'Hesapları onaylandığında satıcıya e-posta gönder',
        'product_approved_title' => 'Ürün onaylandı',
        'product_approved_description' => 'Ürünleri onaylandığında satıcıya e-posta gönder',
        'withdrawal_approved_title' => 'Para çekme onaylandı',
        'withdrawal_approved_description' => 'Para çekme talebi onaylandığında satıcıya e-posta gönder',
    ],
    'current_balance' => 'Mevcut bakiye',
    'settings' => [
        'title' => 'Pazar yeri için ayarlar',
        'description' => 'Kurulum komisyon ücreti',
        'fee_per_order' => 'Ücret başına ücret (%), öner: 2 veya 3',
        'default_commission_fee' => 'Varsayılan komisyon ücreti (%), öner: 2 veya 3',
        'enable_commission_fee_for_each_category' => 'Her kategori için komisyon ücreti etkinleştirilsin mi?',
        'categories' => 'Kategoriler',
        'select_categories' => 'Kategorileri seçin...',
        'commission_fee' => 'Komisyon ücreti (%)',
        'commission_fee_by_category' => 'Kategoriye göre komisyon ücreti (%)',
        'fee_withdrawal' => 'Ücret çekme (Sabit tutar)',
        'check_valid_signature' => 'Satıcının kazançlarında geçerli imzayı kontrol et',
        'verify_vendor' => 'Satıcı doğrulaması (Satıcı doğrulandıktan sonra ürün listesini yayınlayabilir)',
        'enable_product_approval' => 'Ürün onayını etkinleştir',
        'enable_product_approval_description' => 'Etkinleştirilirse, yönetici ürünü yayınlanmadan önce onaylamalıdır',
        'hide_store_phone_number' => 'Mağaza telefon numarasını gizle?',
        'hide_store_email' => 'Mağaza e-postasını gizle?',
        'hide_store_address' => 'Mağaza adresini gizle?',
        'hide_store_social_links' => 'Mağaza sosyal bağlantılarını gizle?',
        'allow_vendor_manage_shipping' => 'Satıcının kargoyu yönetmesine izin ver?',
        'commission_fee_each_category_fee_name' => 'Komisyon ayarının komisyon ücreti :key',
        'commission_fee_each_category_name' => 'Komisyon ayarı kategorileri :key',
        'add_new' => 'Yeni ekle',
        'payout_methods' => 'Ödeme yöntemleri',
        'max_upload_filesize' => 'Maksimum yükleme dosya boyutu (MB)',
        'max_upload_filesize_placeholder' => 'Varsayılan: 10',
        'max_product_images_upload_by_vendor' => 'Her ürün için maksimum resim sayısı',
        'enable_vendor_registration' => 'Satıcı kaydını etkinleştir',
        'minimum_withdrawal_amount' => 'Minimum para çekme miktarı (Sabit)',
        'minimum_withdrawal_amount_helper' => 'Bir satıcının çekebileceği minimum miktarı belirtin. Varsayılan değer 0\'dır.',
        'allow_vendor_delete_their_orders' => 'Satıcıların siparişlerini silmelerine izin ver',
        'allow_vendor_delete_their_orders_description' => 'Etkinleştirildiğinde, satıcılar istenmeyen girişleri kaldırarak sipariş listelerini yönetebilirler. Silinen siparişler işlem kayıtlarını etkileyebileceğinden dikkatli kullanın',
    ],
    'theme_options' => [
        'name' => 'Pazaryeri',
        'description' => 'Marketplace için tema seçenekleri',
        'logo_vendor_dashboard' => 'Satıcı kontrol panelindeki logo (Varsayılan ana logodur)',
    ],
    'store_name' => 'Mağaza adı',
    'store_email' => 'Mağaza e-postası',
    'store_phone' => 'Mağaza telefonu',
    'store_address' => 'Mağaza adresi',
    'store_url' => 'Mağaza URL\'si',
    'product_name' => 'Ürün adı',
    'product_url' => 'Ürün URL\'si',
    'withdrawal_amount' => 'Para çekme miktarı',
    'helpers' => [
        'customer_status' => 'Durumu “:status” dışında değiştirirseniz, bu satıcının mağazası da ":store" olarak değişecektir',
        'store_status' => 'Durumu “:status” dışında değiştirirseniz, bu mağazanın hesabı da ":customer" olarak değişecektir',
    ],
    'tables' => [
        'earnings' => 'Kazançlar',
        'products_count' => 'Ürün Sayısı',
    ],
    'vendors' => 'Satıcılar',
    'payout_payment_methods' => [
        'banka_transfer' => 'Banka Transferi',
        'paypal' => 'PayPal',
    ],
    'reports' => [
        'name' => 'Raporlar',
        'total_fee_earnings' => 'Toplam ücret kazancı: :value',
        'total_fee' => 'Toplam ücret',
        'total_amount' => 'Toplam tutar',
        'store_revenues' => 'Mağaza gelirleri',
        'sale_commissions' => 'Satış komisyonları',
        'fee' => 'Fee (:symbol)',
        'amount' => 'Amount (:symbol)',
    ],
    'vendor' => 'Satıcı',
    'vendor_name' => 'Satıcı adı',
];
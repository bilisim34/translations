<?php

return [
    'statuses' => [
        'pending' => 'Ожидается',
        'processing' => 'Обработка',
        'completed' => 'Завершено',
        'canceled' => 'Отменено',
    ],
    'menu' => 'Заказы',
    'create' => 'Создать заказ',
    'cancel_error' => 'Заказ доставлен или выполнен',
    'cancel_success' => 'Вы отменяете заказ',
    'incomplete_order' => 'Незавершенные заказы',
    'order_id' => 'Заказ ID',
    'product_id' => 'Продукт ID',
    'customer_label' => 'Клиент',
    'tax_amount' => 'Сумма налога',
    'shipping_amount' => 'Сумма доставки',
    'payment_method' => 'Способ оплаты',
    'payment_status_label' => 'Статус платежа',
    'manage_orders' => 'Управление заказами',
    'order_intro_description' => 'Как только в вашем магазине появятся заказы, именно здесь вы будете обрабатывать и отслеживать эти заказы.',
    'create_new_order' => 'Создание нового заказа',
    'manage_incomplete_orders' => 'Управление незаконченным заказом',
    'incomplete_orders_intro_description' => 'Незавершенный заказ - это заказ, созданный, когда клиент добавляет товар в корзину, продолжает заполнять информацию о покупке, но не завершает процесс оформления заказа.',
    'invoice_for_order' => 'Счет-фактура для заказа',
    'created' => 'Созданный',
    'invoice' => 'Счет-фактура',
    'return' => 'Возврат',
    'total_refund_amount' => 'Общая сумма возврата',
    'total_amount_can_be_refunded' => 'Вся сумма может быть возвращена',
    'refund_reason' => 'Причина возврата (необязательно)',
    'products' => 'продукт(ы)',
    'default' => 'По умолчанию',
    'system' => 'Система',
    'new_order_from' => 'Новый заказ :order_id с сайта :customer',
    'confirmation_email_was_sent_to_customer' => 'Подтверждение по электронной почте было отправлено клиенту',
    'address_name_required' => 'Поле имени является обязательным.',
    'address_phone_required' => 'Поле телефона обязательно для заполнения.',
    'address_email_required' => 'Поле электронной почты является обязательным.',
    'address_email_unique' => 'Клиент с таким email существует, пожалуйста, выберите другой email или войдите в систему с этим email!',
    'address_state_required' => 'Поле регион является обязательным.',
    'address_city_required' => 'Поле "Город" является обязательным.',
    'address_country_required' => 'Поле "Страна" является обязательным.',
    'address_address_required' => 'Поле адреса является обязательным.',
    'create_order_from_payment_page' => 'Заказ был создан со страницы оформления заказа',
    'order_was_verified_by' => 'Заказ был подтвержден %user_name%',
    'new_order' => 'Новый заказ :order_id',
    'payment_was_confirmed_by' => 'Платеж был подтвержден (сумма :money) от %user_name%',
    'edit_order' => 'Порядок редактирования :code',
    'confirm_order_success' => 'Успешное подтверждение заказа!',
    'error_when_sending_email' => 'Ошибка при отправке электронной почты',
    'sent_confirmation_email_success' => 'Письмо с подтверждением успешно отправлено!',
    'order_was_sent_to_shipping_team' => 'Заказ был отправлен в службу доставки',
    'by_username' => 'от %user_name%',
    'shipping_was_created_from' => 'Отгрузка была создана из заказа %order_id%',
    'shipping_was_canceled_success' => 'Отправка была успешно отменена!',
    'shipping_was_canceled_by' => 'Доставка была отменена %user_name%',
    'update_shipping_address_success' => 'Обновление адреса доставки прошло успешно!',
    'order_was_canceled_by' => 'Заказ был отменен %user_name%',
    'confirm_payment_success' => 'Подтверждение платежа выполнено успешно!',
    'refund_amount_invalid' => 'Сумма возмещения должна быть меньше или равна :price',
    'number_of_products_invalid' => 'Возврат количества товаров недействителен!',
    'cannot_found_payment_for_this_order' => 'Не удалось найти оплату для этого заказа!',
    'refund_success_with_price' => 'Успешное возмещение :price',
    'refund_success' => 'Возврат средств прошел успешно!',
    'order_is_not_existed' => 'Счет отсутствует!',
    'reorder' => 'Повторный заказ',
    'sent_email_incomplete_order_success' => 'Отправлено письмо с напоминанием о незавершенном заказе!',
    'applied_coupon_success' => 'Успешное применение купона ":code" ',
    'new_order_notice' => 'У вас есть <span class="bold">:count</span> Новый заказ(ы)',
    'view_all' => 'Посмотреть все',
    'cancel_order' => 'Отменить заказ',
    'order_canceled' => 'Заказ отменен',
    'order_was_canceled_at' => 'Заказ был отменен в',
    'completed' => 'Завершено',
    'uncompleted' => 'Незавершенные',
    'sku' => 'Артикул',
    'warehouse' => 'Склад',
    'sub_amount' => 'Сумма',
    'coupon_code' => 'Код купона: ":code"',
    'shipping_fee' => 'Стоимость доставки',
    'tax' => 'Налог',
    'refunded_amount' => 'Возвращенная сумма',
    'amount_received' => 'Фактически полученная сумма',
    'download_invoice' => 'Скачать счет-фактуру',
    'print_invoice' => 'Печать счета-фактуры',
    'add_note' => 'Добавить заметку...',
    'order_was_confirmed' => 'Заказ был подтвержден',
    'confirm_order' => 'Подтвердить заказ',
    'confirm' => 'Подтвердить',
    'order_was_canceled' => 'Заказ был отменен',
    'pending_payment' => 'Ожидание платежа',
    'payment_was_accepted' => 'Оплата :money была принята',
    'payment_was_refunded' => 'Оплата была возвращена',
    'confirm_payment' => 'Подтвердить оплату',
    'refund' => 'Возврат',
    'all_products_are_not_delivered' => 'Все не доставленные товары',
    'delivery' => 'Доставка',
    'history' => 'История',
    'order_number' => 'Номер заказа',
    'from' => 'с сайта',
    'status' => 'Статус',
    'successfully' => 'Успешно',
    'transaction_type' => 'Тип транзакции',
    'staff' => 'Персонал',
    'refund_date' => 'Дата возврата',
    'n_a' => 'Н\\Д',
    'payment_date' => 'Дата платежа',
    'payment_gateway' => 'Платежный шлюз',
    'transaction_amount' => 'Сумма сделки',
    'resend' => 'Отправить повторно',
    'default_store' => 'Магазин по умолчанию',
    'update_address' => 'Обновить адрес',
    'have_an_account_already' => 'Уже есть аккаунт',
    'dont_have_an_account_yet' => 'У вас еще нет аккаунта',
    'mark_payment_as_confirmed' => 'Отметить <span>:method</span> как подтвержденный',
    'resend_order_confirmation' => 'Повторно отправить подтверждение заказа',
    'resend_order_confirmation_description' => 'Подтверждающее письмо будет отправлено по адресу <strong>:email</strong>?',
    'send' => 'Отправить',
    'update' => 'Обновление',
    'cancel_shipping_confirmation' => 'Отменить подтверждение отправки?',
    'cancel_shipping_confirmation_description' => 'Отменить подтверждение доставки?',
    'cancel_order_confirmation' => 'Отменить подтверждение заказа?',
    'cancel_order_confirmation_description' => 'Вы уверены, что хотите отменить этот заказ? Это действие не может быть отменено',
    'confirm_payment_confirmation_description' => 'Обработано <strong>:method</strong>. Получали ли вы оплату за пределами системы? Этот платеж не будет сохранен в системе и не может быть возвращен.',
    'save_note' => 'Сохранить заметку',
    'order_note' => 'Примечание к заказу',
    'order_note_placeholder' => 'Примечание о заказе, например: время или инструкция по доставке.',
    'order_amount' => 'Сумма заказа',
    'additional_information' => 'Дополнительная информация',
    'notice_about_incomplete_order' => 'Уведомление о неполном заказе',
    'notice_about_incomplete_order_description' => 'Напоминание о незавершенном заказе будет отправлено на адрес электронной почты <strong>:email</strong>?',
    'incomplete_order_description_1' => 'Незавершенный заказ - это когда потенциальный покупатель кладет товары в корзину, доходит до страницы оплаты, но не завершает сделку.',
    'incomplete_order_description_2' => 'Если вы связались с покупателями и они хотят продолжить покупку, вы можете помочь им завершить заказ, перейдя по ссылке:',
    'send_an_email_to_recover_this_order' => 'Отправьте электронное письмо клиенту, чтобы восстановить этот заказ',
    'see_maps' => 'Посмотреть карты',
    'one_or_more_products_dont_have_enough_quantity' => 'Один или несколько продуктов не имеют достаточного количества!',
    'cannot_send_order_recover_to_mail' => 'Электронная почта не была найдена, поэтому не может отправить клиенту письмо с восстановлением.',
    'payment_info' => 'Информация об оплате',
    'payment_method_refund_automatic' => 'Возврат средств вашему клиенту будет произведен с помощью :method автоматически.',
    'order' => 'Заказ',
    'order_information' => 'Информация о заказе',
    'create_a_new_product' => 'Создайте новый товар',
    'out_of_stock' => 'Нет в наличии',
    'products_available' => 'доступный(ые) продукт(ы)',
    'no_products_found' => 'Продукты не найдены!',
    'note' => 'Примечание',
    'note_for_order' => 'Примечание к заказу...',
    'amount' => 'Сумма',
    'add_discount' => 'Добавить скидку',
    'discount' => 'Скидка',
    'add_shipping_fee' => 'Добавить стоимость доставки',
    'shipping' => 'Доставка',
    'total_amount' => 'Общая сумма',
    'confirm_payment_and_create_order' => 'Подтвердить оплату и создать заказ',
    'paid' => 'Оплачено',
    'pay_later' => 'Оплатить позже',
    'customer_information' => 'Информация для клиентов',
    'create_new_customer' => 'Создание нового клиента',
    'no_customer_found' => 'Клиент не найден!',
    'customer' => 'Клиент',
    'orders' => 'заказ(ы)',
    'shipping_address' => 'Адрес доставки',
    'see_on_maps' => 'См. на картах',
    'name' => 'Название',
    'price' => 'Цена',
    'sku_optional' => 'Артикул (необязательно)',
    'with_storehouse_management' => 'С управлением складом?',
    'quantity' => 'Количество',
    'allow_customer_checkout_when_this_product_out_of_stock' => 'Разрешить клиенту выходить из магазина, когда этого товара нет в наличии?',
    'address' => 'Адрес',
    'phone' => 'Телефон',
    'country' => 'Страна',
    'state' => 'Регион',
    'city' => 'Город',
    'zip_code' => 'Почтовый индекс',
    'discount_based_on' => 'Скидка на основании',
    'or_coupon_code' => 'Или код купона',
    'description' => 'Описание',
    'how_to_select_configured_shipping' => 'Как выбрать настроенную доставку?',
    'please_add_customer_information_with_the_complete_shipping_address_to_see_the_configured_shipping_rates' => 'Пожалуйста, добавьте информацию о клиенте с полным адресом доставки, чтобы увидеть настроенные тарифы доставки',
    'free_shipping' => 'Бесплатная доставка',
    'custom' => 'Пользовательский',
    'email' => 'Email',
    'create_order' => 'Создать заказ',
    'close' => 'Закрыть',
    'confirm_payment_is_paid_for_this_order' => 'Подтвердите оплату этого заказа',
    'payment_status_of_the_order_is_paid_once_the_order_has_been_created_you_cannot_change_the_payment_method_or_status' => 'Статус оплаты заказа - Оплачен. После создания заказа вы не можете изменить способ оплаты или статус',
    'select_payment_method' => 'Выберите способ оплаты',
    'cash_on_delivery_cod' => 'Наложенным платежом (НП)',
    'bank_transfer' => 'Банковский перевод',
    'paid_amount' => 'Оплаченная сумма',
    'confirm_that_payment_for_this_order_will_be_paid_later' => 'Подтвердите, что оплата за этот заказ будет произведена позже',
    'payment_status_of_the_order_is_pending_once_the_order_has_been_created_you_cannot_change_the_payment_method_or_status' => 'Статус оплаты заказа - Отложен. После создания заказа вы не можете изменить способ оплаты или статус',
    'pending_amount' => 'Сумма к оплате',
    'update_email' => 'Обновить электронную почту',
    'save' => 'Сохранить',
    'cancel' => 'Отмена',
    'create_a_new_order' => 'Создать новый заказ',
    'search_or_create_new_product' => 'Поиск или создание нового продукта',
    'search_or_create_new_customer' => 'Поиск или создание нового клиента',
    'discount_description' => 'Описание дисконта',
    'cant_select_out_of_stock_product' => 'Невозможно выбрать товар, отсутствующий на складе!',
    'referral' => 'Реферальная информация',
    'referral_data' => [
        'ip' => 'IP',
        'landing_domain' => 'Целевой домен',
        'landing_page' => 'Целевая страница',
        'landing_params' => 'Параметры приземления',
        'gclid' => 'Gclid',
        'fclid' => 'Fclid',
        'utm_source' => 'UTM source',
        'utm_campaign' => 'UTM campaign',
        'utm_medium' => 'UTM medium',
        'utm_term' => 'UTM term',
        'utm_content' => 'UTM content',
        'referral' => 'Referral',
        'referrer_url' => 'Referral URL',
        'referrer_domain' => 'Referral domain',
    ],
    'billing_address' => 'Адрес для выставления счета',
    'is_return' => 'Завершено',
    'notices' => [
        'update_return_order_status_error' => 'Невозможно обновить статус заказа на возврат! Возможно, статус заказа на возврат недействителен.',
        'update_return_order_status_success' => 'Обновите статус заказа на возврат',
    ],
    'order_address_types' => [
        'billing_address' => 'Адрес выставления счета',
        'shipping_address' => 'Адрес доставки',
    ],
    'order_return' => 'Возврат заказа',
    'order_return_items_count' => 'Товар (ы)',
    'order_return_reasons' => [
        'arrived_late' => 'Прибыл с опозданием',
        'damaged' => 'Поврежденный товар',
        'defective' => 'Брак, не комплект.',
        'incorrect_item' => 'Доставлен не тот товар',
        'other' => 'Другое',
        'no_longer_want' => 'Больше не хочу',
        'not_as_described' => 'Не соответствует описанию',
    ],
    'order_returned' => 'Заказ возвращен',
    'order_was_returned' => 'Заказ был возвращен',
    'order_was_returned_at' => 'Заказ был возвращен в',
    'order_was_returned_by' => 'Заказ возвращен пользователем %user_name%',
    'return_error' => 'Заказ доставляется или не выполнен',
    'return_order' => 'Заказ на возврат',
    'return_order_confirmation' => 'Подтверждение заказа на возврат?',
    'return_order_confirmation_description' => 'Вы уверены, что хотите вернуть этот заказ? Это действие не может быть отменено',
    'return_order_unique' => 'Такой же атрибут :attribute уже существует в предыдущем запросе на возврат.',
    'return_reason' => 'Причина возврата',
    'return_success' => 'Requested product(s) return successfully!',
    'total_return_amount' => 'Общая сумма возврата',
    'change_return_order_status' => 'Изменить статус заказа на возврат',
];

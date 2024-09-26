<?php

return [
    'payments' => 'Платежі',
    'checkout_success' => 'Оформлення покупки успішно!',
    'view_payment' => 'Переглянути платіж #',
    'charge_id' => 'ID оплати',
    'amount' => 'Сума',
    'currency' => 'Валюта',
    'user' => 'Користувач',
    'stripe' => 'смужка',
    'paypal' => 'PayPal',
    'action' => 'Дія',
    'payment_via_card' => 'Оплата карткою',
    'card_number' => 'Номер картки',
    'full_name' => 'Повне ім\'я',
    'payment_via_paypal' => 'Швидка та безпечна онлайн-оплата через PayPal.',
    'mm_yy' => 'ММ/РР',
    'cvc' => 'CVC',
    'details' => 'Деталі',
    'payer_name' => 'Ім\'я платника',
    'email' => 'Електронна пошта',
    'phone' => 'Телефон',
    'country' => 'Країна',
    'shipping_address' => 'Адреса доставки',
    'payment_details' => 'Деталі платежу',
    'card' => 'Картка',
    'address' => 'Адреса',
    'could_not_get_stripe_token' => 'Не вдалося отримати токен Stripe для здійснення оплати.',
    'payment_id' => 'ID платежу',
    'payment_methods' => 'Методи оплати',
    'transactions' => 'Транзакції',
    'payment_methods_description' => 'Налаштування методів оплати для сайту',
    'paypal_description' => 'Клієнт може придбати товар і оплатити безпосередньо через PayPal',
    'use' => 'Використовувати',
    'stripe_description' => 'Клієнт може придбати товар і оплатити безпосередньо за допомогою Visa, кредитної картки через Stripe',
    'edit' => 'Редагувати',
    'settings' => 'Налаштування',
    'activate' => 'Активувати',
    'deactivate' => 'Деактивувати',
    'update' => 'Оновити',
    'configuration_instruction' => 'Інструкція з налаштування для :name',
    'configuration_requirement' => 'Щоб використовувати :name, вам потрібно',
    'service_registration' => 'Зареєструватися в :name',
    'after_service_registration_msg' => 'Після реєстрації в :name, ви отримаєте Client ID, Client Secret',
    'enter_client_id_and_secret' => 'Введіть Client ID та Secret у відповідні поля',
    'method_name' => 'Назва методу',
    'method_logo' => 'Логотип методу',
    'please_provide_information' => 'Будь ласка, надайте інформацію',
    'client_id' => 'ID клієнта',
    'client_secret' => 'Секрет клієнта',
    'secret' => 'Секрет',
    'stripe_key' => 'Публічний ключ Stripe',
    'stripe_secret' => 'Приватний ключ Stripe',
    'stripe_after_service_registration_msg' => 'Після реєстрації в :name, ви отримаєте публічний та приватний ключі',
    'stripe_enter_client_id_and_secret' => 'Введіть публічний та приватний ключі у відповідні поля',
    'pay_online_via' => 'Оплатити онлайн через :name',
    'sandbox_mode' => 'Режим тестування',
    'live_mode' => 'Режим роботи',
    'deactivate_payment_method' => 'Деактивувати метод оплати',
    'deactivate_payment_method_description' => 'Ви дійсно хочете деактивувати цей метод оплати?',
    'agree' => 'Погоджуюсь',
    'name' => 'Платежі',
    'create' => 'Новий платіж',
    'go_back' => 'Повернутися',
    'information' => 'Інформація',
    'methods' => [
        'paypal' => 'PayPal',
        'cod' => 'Оплата при доставці (COD)',
        'bank_transfer' => 'Банківський переказ',
    ],
    'statuses' => [
        'pending' => 'Очікує',
        'completed' => 'Завершено',
        'refunding' => 'Повернення',
        'refunded' => 'Повернуто',
        'fraud' => 'Шахрайство',
        'failed' => 'Не вдалося',
    ],
    'payment_methods_instruction' => 'Дайте змогу клієнтам оплачувати безпосередньо. Ви можете вибрати оплату при доставці або банківський переказ',
    'payment_method_description' => 'Посібник з оплати - (Відображається на повідомленні про успішну покупку та на сторінці оплати)',
    'payment_via_cod' => 'Оплата при доставці (COD)',
    'payment_via_bank_transfer' => 'Банківський переказ',
    'payment_pending' => 'Оформлення покупки успішно. Ваша оплата очікує перевірки нашими співробітниками.',
    'created_at' => 'Створено',
    'payment_channel' => 'Канал оплати',
    'total' => 'Всього',
    'status' => 'Статус',
    'default_payment_method' => 'Метод оплати за замовчуванням',
    'available_countries' => 'Доступні країни',
    'available_countries_help' => 'Виберіть країни, де цей метод оплати доступний.',
    'all_countries_checkbox' => 'Всі',
    'turn_off_success' => 'Метод оплати успішно вимкнуто!',
    'saved_payment_settings_success' => 'Налаштування платежів успішно збережено!',
    'payment_name' => 'Назва',
    'payment_not_found' => 'Платіж не знайдено!',
    'refunds' => [
        'title' => 'Повернення',
        'id' => 'ID',
        'breakdowns' => 'Розбивки',
        'gross_amount' => 'Загальна сума',
        'paypal_fee' => 'Комісія PayPal',
        'net_amount' => 'Чиста сума',
        'total_refunded_amount' => 'Загальна сума повернення',
        'create_time' => 'Час створення',
        'update_time' => 'Час оновлення',
        'status' => 'Статус',
        'description' => 'Опис',
        'refunded_at' => 'Повернено',
        'error_message' => 'Повідомлення про помилку',
    ],
    'view_response_source' => 'Переглянути джерело відповіді',
    'status_is_not_completed' => 'Статус не COMPLETED',
    'cannot_found_capture_id' => 'Не вдалося знайти capture id з деталями платежу',
    'amount_refunded' => 'Сума повернення',
    'amount_remaining' => 'Залишкова сума',
    'paid_at' => 'Оплачено',
    'invalid_settings' => 'Налаштування для :name недійсні!',
    'view_transaction' => 'Транзакція ":charge_id"',
    'payment_description' => 'Оплатіть ваше замовлення #:order_id на :site_url',
    'payment_log' => [
        'name' => 'Журнали платежів',
        'view' => 'Переглянути журнал платежів #:id',
        'ip_address' => 'IP-адреса',
        'type' => 'Тип',
        'request' => 'запит',
        'response' => 'Відповідь',
    ],
];
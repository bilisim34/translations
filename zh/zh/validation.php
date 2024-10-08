<?php

return [
    'accepted' => '您必须接受 :attribute。',
    'accepted_if' => '当 :other 为 :value 时，必须接受 :attribute。',
    'active_url' => '不是有效的網址。',
    'after' => ':attribute 必须要晚于 :date。',
    'after_or_equal' => ':attribute 必须要等于 :date 或更晚。',
    'alpha' => ':attribute 只能由字母组成。',
    'alpha_dash' => ':attribute 只能由字母、数字、短划线(-)和下划线(_)组成。',
    'alpha_num' => ':attribute 只能由字母和数字组成。',
    'array' => ':attribute 必须是一个数组。',
    'ascii' => '屬性欄位只能包含單字節字母數字字元和符號。',
    'before' => ':attribute 必须要早于 :date。',
    'before_or_equal' => ':attribute 必须要等于 :date 或更早。',
    'between' => [
        'array' => ':attribute 必须只有 :min - :max 个单元。',
        'file' => ':attribute 必须介于 :min - :max KB 之间。',
        'numeric' => ':attribute 必须介于 :min - :max 之间。',
        'string' => ':attribute 必须介于 :min - :max 个字符之间。',
    ],
    'boolean' => '欄位必須為 true 或 false。',
    'can' => '欄位包含未授權的值。',
    'confirmed' => ':attribute 两次输入不一致。',
    'current_password' => '密码错误。',
    'date' => ':attribute 不是一个有效的日期。',
    'date_equals' => ':attribute 必须要等于 :date。',
    'date_format' => ':attribute 的格式必须为 :format。',
    'decimal' => '欄位必須有'."\n"
        .'位小數。',
    'declined' => ':attribute 必须是拒绝的。',
    'declined_if' => '当 :other 为 :value 时字段 :attribute 必须是拒绝的。',
    'different' => ':attribute 和 :other 必须不同。',
    'digits' => ':attribute 必须是 :digits 位数字。',
    'digits_between' => ':attribute 必须是介于 :min 和 :max 位的数字。',
    'dimensions' => ':attribute 的圖像尺寸無效。',
    'distinct' => ':attribute 欄位具有重複值。',
    'doesnt_end_with' => ':attribute 欄位不得以下列之一結尾： :values。',
    'doesnt_start_with' => ':attribute 不能以下列之一開頭： :values。',
    'email' => ':屬性必須是有效的Email地址。',
    'ends_with' => ':attribute 必須以下列之一結尾： :values。',
    'enum' => '所選的:屬性無效。',
    'exists' => '所選的:屬性無效。',
    'extensions' => ':attribute 欄位必須具有以下副檔名之一：:values。',
    'file' => ':attribute 必須是一個檔案。',
    'filled' => ':attribute 欄位必須有一個值。',
    'gt' => [
        'array' => ':attribute 必須包含多個 :value 項。',
        'file' => ':attribute 必須大於 :value 千位元組。',
        'numeric' => ':attribute 必須大於:value。',
        'string' => ':attribute 必須大於:value 字元。',
    ],
    'gte' => [
        'array' => ':attribute 必須具有 :value 項或更多項。',
        'file' => ':attribute 必須大於或等於 :value 千位元組。',
        'numeric' => ':attribute 必須大於或等於:value。',
        'string' => ':attribute 必須大於或等於:value 字元。',
    ],
    'hex_color' => ':attribute 欄位必須是有效的十六進位顏色。',
    'image' => ':attribute 必須是圖像。',
    'in' => '所選的:屬性無效。',
    'in_array' => ':other 中不存在 :attribute 欄位。',
    'integer' => ':attribute 必须是整数。',
    'ip' => ':attribute 必須是有效的 IP 位址。',
    'ipv4' => ':attribute 必須是有效的 IPv4 位址。',
    'ipv6' => ':attribute 必須是有效的 IPv6 位址。',
    'json' => ':attribute 必須是有效的 JSON 字串。',
    'lowercase' => ':attribute 欄位必須為小寫。',
    'lt' => [
        'array' => ':attribute 必須少於 :value 項。',
        'file' => ':attribute 必須小於 :value 千位元組。',
        'numeric' => ':attribute 必须小于 :value。',
        'string' => ':attribute 必須少於 :value 個字元。',
    ],
    'lte' => [
        'array' => ':attribute 不得超過 :value 項。',
        'file' => ':attribute 必須小於或等於 :value 千位元組。',
        'numeric' => ':attribute 必須小於或等於:value。',
        'string' => ':attribute 必須小於或等於:value 字元。',
    ],
    'mac_address' => ':attribute 必須是有效的 MAC 位址。',
    'max' => [
        'array' => ':attribute 的項數不得超過 :max。',
        'file' => ':attribute 不得大於:max KB。',
        'numeric' => ':attribute 不得大於:max。',
        'string' => ':attribute 不得大於 :max 個字元。',
    ],
    'max_digits' => ':attribute 欄位的位數不得超過 :max。',
    'mimes' => ':attribute 必須是類型為: :values 的檔案。',
    'mimetypes' => ':attribute 必須是類型為: :values 的檔案。',
    'min' => [
        'array' => ':attribute 必須至少有 :min 個項目。',
        'file' => ':attribute 大小不能小于 :min KB。',
        'numeric' => ':attribute 必須至少為 :min。',
        'string' => ':attribute 必須至少包含 :min 個字元。',
    ],
    'min_digits' => ':attribute 欄位必須至少有 :min 個數字。',
    'missing' => ':attribute 欄位必須缺失。',
    'missing_if' => '當 :other 為 :value 時，必須缺少 :attribute 欄位。',
    'missing_unless' => ':attribute 欄位必須缺失，除非 :other 是 :value。',
    'missing_with' => '當 :values 存在時，:attribute 欄位必須缺失。',
    'missing_with_all' => '當 :values 存在時，:attribute 欄位必須缺失。',
    'multiple_of' => ':attribute 必須是 :value 的倍數。',
    'not_in' => '所選的:屬性無效。',
    'not_regex' => ':attribute 格式無效。',
    'numeric' => ':attribute 必須是數字。',
    'password' => [
        'mixed' => ':attribute 必須至少包含一個大寫字母和一個小寫字母。',
        'numbers' => ':attribute 必須至少包含一個數字。',
        'symbols' => ':attribute 必須至少包含一個符號。',
        'uncompromised' => '給定的 :attribute 出現在資料外洩中。請選擇不同的 :attribute。',
        'letters' => ':attribute 必須至少包含一個字母。',
    ],
    'present' => ':attribute 欄位必須存在。',
    'present_if' => '當 :other 為 :value 時，:attribute 欄位必須存在。',
    'present_unless' => ':attribute 欄位必須存在，除非 :other 是 :value。',
    'present_with' => '當 :values 存在時，:attribute 欄位必須存在。',
    'present_with_all' => '當 :values 存在時，:attribute 欄位必須存在。',
    'prohibited' => ':attribute 欄位是禁止的。',
    'prohibited_if' => '當:other 為:value 時，禁止使用:attribute 欄位。',
    'prohibited_unless' => '除非 :other 位於 :values 中，否則禁止使用 :attribute 欄位。',
    'prohibits' => ':attribute 欄位禁止 :other 出現。',
    'regex' => ':attribute 格式無效。',
    'required' => ':attribute 欄位是必需的。',
    'required_array_keys' => ':attribute 欄位必須包含以下條目： :values。',
    'required_if' => '當 :other 為 :value 時，:attribute 欄位是必需的',
    'required_if_accepted' => '當 :other 被接受時，:attribute 欄位是必需的。',
    'required_unless' => ':attribute 欄位是必要的，除非 :other 位於 :values 中。',
    'required_with' => '當 :values 存在時，:attribute 欄位是必需的。',
    'required_with_all' => '當 :values 存在時，:attribute 欄位是必需的。',
    'required_without' => '當 :values 不存在時，:attribute 欄位是必需的。',
    'required_without_all' => '當 :values 都不存在時，:attribute 欄位是必需的。',
    'same' => ':attribute 和 :other 必須匹配。',
    'size' => [
        'array' => ':attribute 必須包含:size 項。',
        'file' => ':attribute 必須是 :size 千字節。',
        'numeric' => ':屬性必須是:size。',
        'string' => 'attribute 必須是 :size 字元。',
    ],
    'starts_with' => 'attribute 必須以下列之一開頭： :values。',
    'string' => ':attribute 必須是字串。',
    'timezone' => 'attribute 必須是有效的時區。',
    'unique' => '已經被佔用。',
    'uploaded' => '上傳失敗。',
    'uppercase' => 'attribute 欄位必須為大寫。',
    'url' => 'attribute 必須是有效的 URL。',
    'ulid' => 'attribute 欄位必須是有效的 ULID。',
    'uuid' => 'attribute 必須是有效的 UUID。',
    'custom' => [
        'attribute-name' => [
            'rule-name' => '自訂訊息',
        ],
    ],
    'attributes' => [],
];

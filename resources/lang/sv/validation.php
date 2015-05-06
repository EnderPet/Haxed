<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    "accepted"             => ":attribute måste vara accepterat.",
    "active_url"           => ":attribute är inte en giltig URL.",
    "after"                => ":attribute måste vara ett datum efter :date.",
    "alpha"                => ":attribute får endast innehålla bokstäver.",
    "alpha_dash"           => ":attribute får endast innehålla bokstaver, siffror, och bindessträck.",
    "alpha_num"            => ":attribute får endast innehålla bokstäver och siffror.",
    "array"                => ":attribute måste var en matris.",
    "before"               => ":attribute måste vara ett datum innan :date.",
    "between"              => [
        "numeric" => ":attribute måste vara mellan :min och :max.",
        "file"    => ":attribute måste vara mellan :min och :max kilobytes.",
        "string"  => ":attribute måste vara mellan :min och :max tecken.",
        "array"   => ":attribute måste vara mellan :min och :max objekt.",
    ],
    "boolean"              => ":attribute måste vara sant eller falskt.",
    "confirmed"            => ":attributeen matchar inte.",
    "date"                 => ":attribute är inte ett giltigt datum.",
    "date_format"          => ":attribute matchar inte formatet :format.",
    "different"            => ":attribute och :other måste vara olika.",
    "digits"               => ":attribute måste vara :digits siffror.",
    "digits_between"       => ":attribute måste vara mellan :min och :max siffror.",
    "email"                => ":attribute måste vara en giltig email adress.",
    "filled"               => ":attribute fältet är ett krav.",
    "exists"               => "Valda :attribute är ogiltiga.",
    "image"                => ":attribute måste vara en bild.",
    "in"                   => "Den valda :attribute är ogiltig.",
    "integer"              => ":attribute måste vara en siffra.",
    "ip"                   => ":attribute måste vara en giltig IP adress.",
    "max"                  => [
        "numeric" => ":attribute får inte vara större än :max.",
        "file"    => ":attribute får inte vara större :max kilobytes.",
        "string"  => ":attribute får inte vara större :max tecken.",
        "array"   => ":attribute får inte ha mer än :max objekt.",
    ],
    "mimes"                => ":attribute måste vara en fil av typen: :values.",
    "min"                  => [
        "numeric" => ":attribute måste vara minst :min.",
        "file"    => ":attribute måste vara åtminstone :min kilobytes.",
        "string"  => ":attribute måste vara minst :min tecken.",
        "array"   => ":attribute måste ha minst :min objekt.",
    ],
    "not_in"               => "Den valda :attribute är ogiltig.",
    "numeric"              => ":attribute måste vara en siffra.",
    "regex"                => ":attribute formatet är ogiltigt.",
    "required"             => "Fältet :attribute är inte korrekt.",
    "required_if"          => "Fältet :attribute är ett krav när :other är :value.",
    "required_with"        => "Fältet :attribute är ett krav när :values är närvarande.",
    "required_with_all"    => "Fältet :attribute är ett krav när :values är närvarande.",
    "required_without"     => "Fältet :attribute är ett krav när :values inte är närvarande.",
    "required_without_all" => "Fältet :attribute är ett krav när ingen av :values är närvarande.",
    "same"                 => ":attribute och :other måste matcha.",
    "size"                 => [
        "numeric" => ":attribute måste vara :size.",
        "file"    => ":attribute måste vara :size kilobytes.",
        "string"  => ":attribute måste vara :size tecken.",
        "array"   => ":attribute måste innehålla :size objekt.",
    ],
    "unique"               => ":attribute finns redan registrerad.",
    "url"                  => ":attribute format är ogiltig.",
    "timezone"             => ":attribute måste vara en giltig zon.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'email' => 'E-postadress',
        'password' => 'Lösenord',
        'confpassword' => 'Bekräfta Lösenord',
        'name' => 'Användarnamn',
        'rememberme' => 'Kom ihåg',
        'login' => 'Logga in',
        'logout' => 'Logga ut',
        'forgotpassword' => 'Glömt lösenord',
        'register' => 'Registrera',
        'inputproblems' => 'Det uppstod några problem i din inmatning.',
    ]

];

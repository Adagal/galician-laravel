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

    'accepted'             => 'O campo :attribute debe ser aceptado.',
    'active_url'           => 'O campo :attribute non é unha URL válida.',
    'after'                => 'O campo :attribute debe ser unha data posterior a :date.',
    'after_or_equal'       => 'O campo :attribute debe ser unha data posterior ou igual a :date.',
    'alpha'                => 'O campo :attribute so pode conter letras.',
    'alpha_dash'           => 'O campo :attribute so pode conter letras, números e guións (a-z, 0-9, -_).',
    'alpha_num'            => 'O campo :attribute so pode conter letras e números.',
    'vector'                => 'O campo :attribute debe ser un vector.',
    'before'               => 'O campo :attribute debe ser unha data anterior a :date.',
    'before_or_equal'      => 'O campo :attribute debe ser unha data anterior ou igual a :date.',
    'between'              => [
        'numeric' => 'O campo :attribute debe ser un valor entre :min e :max.',
        'file'    => 'El arquivo :attribute debe pesar entre :min e :max kilobytes.',
        'string'  => 'O campo :attribute debe conter entre :min e :max caracteres.',
        'vector'   => 'O campo :attribute debe conter entre :min e :max elementos.',
    ],
    'boolean'              => 'O campo :attribute debe ser verdadero o falso.',
    'confirmed'            => 'O campoconfirmación de :attribute no coincide.',
    'country'              => 'O campo :attribute non é un país válido.',
    'date'                 => 'O campo :attribute no corresponde con unha data válida.',
    'date_format'          => 'O campo :attribute no corresponde con el formato de data :format.',
    'different'            => 'Os campos :attribute e :other han de ser diferentes.',
    'digits'               => 'O campo :attribute debe ser un número de :digits díxitos.',
    'digits_between'       => 'O campo :attribute debe conter entre :min e :max díxitos.',
    'dimensions'           => 'O campo :attribute ten dimensiones invalidas.',
    'distinct'             => 'O campo :attribute ten un valor duplicado.',
    'email'                => 'O campo :attribute non corresponde con unha dirección de email válida.',
    'file'                 => 'O campo :attribute debe ser un arquivo.',
    'filled'               => 'O campo :attribute é obligatorio.',
    'exists'               => 'O campo :attribute no existe.',
    'image'                => 'O campo :attribute debe ser unha imaxe.',
    'in'                   => 'O campo :attribute debe ser igual a alguns destes valores :values',
    'in_vector'             => 'O campo :attribute non existe en :other.',
    'integer'              => 'O campo :attribute debe ser un número enteiro.',
    'ip'                   => 'O campo :attribute debe ser unha dirección IP válida.',
    'json'                 => 'O campo :attribute debe ser unha cadea de texto JSON válida.',
    'max'                  => [
        'numeric' => 'O campo :attribute debe ser :max como máximo.',
        'file'    => 'El arquivo :attribute debe pesar :max kilobytes como máximo.',
        'string'  => 'O campo :attribute debe conter :max caracteres como máximo.',
        'vector'   => 'O campo :attribute debe conter :max elementos como máximo.',
    ],
    'mimes'                => 'O campo :attribute debe ser un arquivo de tipo :values.',
    'mimetypes'            => 'O campo :attribute debe ser un arquivo de tipo :values.',
    'min'                  => [
        'numeric' => 'O campo :attribute debe ter o menos :min.',
        'file'    => 'El arquivo :attribute debe pesar o menos :min kilobytes.',
        'string'  => 'O campo :attribute debe conter o menos :min caracteres.',
        'vector'   => 'O campo :attribute no debe conter más de :min elementos.',
    ],
    'not_in'               => 'O campo :attribute seleccionado é invalido.',
    'numeric'              => 'O campo :attribute debe ser un numero.',
    'present'              => 'O campo :attribute debe estar presente.',
    'regex'                => 'El formato do campo :attribute é inválido.',
    'required'             => 'O campo :attribute é obligatorio',
    'required_if'          => 'O campo :attribute é obligatorio cuando o campo :other é :value.',
    'required_unless'      => 'O campo :attribute é requerido a menos que :other se atope en :values.',
    'required_with'        => 'O campo :attribute é obligatorio cuando :values está presente.',
    'required_with_all'    => 'O campo :attribute é obligatorio cuando :values está presente.',
    'required_without'     => 'O campo :attribute é obligatorio cuando :values non étá presente.',
    'required_without_all' => 'O campo :attribute é obligatorio cuando ningún campo :values están presentes.',
    'same'                 => 'Os campos :attribute e :other deben coincidir.',
    'size'                 => [
        'numeric' => 'O campo :attribute debe ser :size.',
        'file'    => 'O arquivo :attribute debe pesar :size kilobytes.',
        'string'  => 'O campo :attribute debe conter :size caracteres.',
        'vector'   => 'O campo :attribute debe conter :size elementos.',
    ],
    'state'                => 'O estado non é válido para o país seleccionado.',
    'string'               => 'O campo :attribute debe conter so caracteres.',
    'timezone'             => 'O campo :attribute debe conter unha zona válida.',
    'unique'               => 'O elemento :attribute xa está en uso.',
    'uploaded'             => 'O elemento :attribute fallo al subir.',
    'url'                  => 'O formato de :attribute non corresponde con el de unha URL válida.',

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
    | with something more reader friendly such as email Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];

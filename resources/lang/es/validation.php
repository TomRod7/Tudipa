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

    'accepted'             => 'El :attribute debe ser correcto.',
    'active_url'           => 'El :attribute no es una URL valida.',
    'after'                => 'La :attribute debe ser una fecha posterior a :date.',
    'after_or_equal'       => ':attribute debe ser una fecha posterior o igual a :date.',
    'alpha'                => ':attribute solo debe contener letras.',
    'alpha_dash'           => ':attribute solo puede contener letras, números y guiónes.',
    'alpha_num'            => ':attribute solo puede contener letras y números.',
    'array'                => ':attribute debe ser un array.',
    'before'               => ':attribute debe ser una fecha anterior a :date.',
    'before_or_equal'      => ':attribute debe ser una fecha anterior o igual :date.',
    'between'              => [
        'numeric' => ':attribute debe estar entre :min y :max.',
        'file'    => ':attribute debe estar entre :min y :max kilobytes.',
        'string'  => ':attribute debe estar entre :min y :max carácteres.',
        'array'   => ':attribute debe tener entre :min y :max items.',
    ],
    'boolean'              => ':attribute el campo debe ser veradero o falso.',
    'confirmed'            => ':attribute confirmation does not match.',
    'date'                 => ':attribute no es una fecha válida.',
    'date_format'          => ':attribute no coincide con el formato :format.',
    'different'            => ':attribute y :other deden ser diferentes.',
    'digits'               => ':attribute debe ser :digits digitos.',
    'digits_between'       => ':attribute debe estar entre :min y :max digitos.',
    'dimensions'           => ':attribute el tamaño de la imagen es inválido.',
    'distinct'             => ':attribute field has a duplicate value.',
    'email'                => ':attribute debe ser una dirección de mail válida.',
    'exists'               => 'El :attribute seleccionado es inválido.',
    'file'                 => ':attribute debe ser un archivo.',
    'filled'               => ':attribute el campo debe tener un valor.',
    'image'                => ':attribute debe ser una imagen.',
    'in'                   => 'selected :attribute is invalid.',
    'in_array'             => ':attribute field does not exist in :other.',
    'integer'              => ':attribute debe ser un entero.',
    'ip'                   => ':attribute must be a valid IP address.',
    'ipv4'                 => ':attribute must be a valid IPv4 address.',
    'ipv6'                 => ':attribute must be a valid IPv6 address.',
    'json'                 => ':attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => ':attribute no debe ser mayor a :max.',
        'file'    => ':attribute no debe ser mayor a :max kilobytes.',
        'string'  => ':attribute no debe ser mayor a :max carácteres.',
        'array'   => ':attribute may not have more than :max items.',
    ],
    'mimes'                => ':attribute must be a file of type: :values.',
    'mimetypes'            => ':attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => ':attribute debe ser al menos :min.',
        'file'    => ':attribute debe ser al menos :min kilobytes.',
        'string'  => ':attribute debe ser al menos :min carácteres.',
        'array'   => ':attribute debe tener al menos :min items.',
    ],
    'not_in'               => 'selected :attribute is invalid.',
    'numeric'              => ':attribute debe ser un número.',
    'present'              => ':attribute field must be present.',
    'regex'                => ':attribute formato inválido.',
    'required'             => ':attribute campo requerido.',
    'required_if'          => ':attribute campo requerido cuando :other es :value.',
    'required_unless'      => ':attribute field is required unless :other is in :values.',
    'required_with'        => ':attribute field is required when :values is present.',
    'required_with_all'    => ':attribute field is required when :values is present.',
    'required_without'     => ':attribute field is required when :values is not present.',
    'required_without_all' => ':attribute field is required when none of :values are present.',
    'same'                 => ':attribute and :other must match.',
    'size'                 => [
        'numeric' => ':attribute debe tener :size.',
        'file'    => ':attribute debe tener :size kilobytes.',
        'string'  => ':attribute debe tener :size carácteres.',
        'array'   => ':attribute debe contener :size items.',
    ],
    'string'               => ':attribute must be a string.',
    'timezone'             => ':attribute must be a valid zone.',
    'unique'               => 'El :attribute ya ha sido utilizado.',
    'uploaded'             => ':attribute failed to upload.',
    'url'                  => ':attribute format is invalid.',

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
    | following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];

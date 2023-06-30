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

    'accepted' => 'Laukam :attribute ir jābūt apstiprinātam.',
    'accepted_if' => 'Laukam :attribute ir jābūt apstiprinātam, ja :other ir :value.',
    'active_url' => 'Laukā :attribute ir jābūt derīgai URL adresei.',
    'after' => 'Laukam :attribute ir jābūt datumam pēc :date.',
    'after_or_equal' => 'Laukam :attribute ir jābūt datumam pēc vai vienādam ar :date.',
    'alpha' => 'Lauks :attribute var saturēt tikai burtus.',
    'alpha_dash' => 'Lauks :attribute var saturēt tikai burtus, ciparus, domuzīmes un pasvītras.',
    'alpha_num' => 'Lauks :attribute var saturēt tikai burtus un ciparus.',
    'array' => 'Laukam :attribute ir jābūt masīvam.',
    'before' => 'Laukam :attribute ir jābūt datumam pirms :date.',
    'before_or_equal' => 'Laukam :attribute ir jābūt datumam pirms vai vienādam ar :date.',
    'between' => [
        'numeric' => 'Laukam :attribute ir jābūt starp :min un :max.',
        'file' => 'Laukam :attribute ir jābūt starp :min un :max kilobaitiem.',
        'string' => 'Laukam :attribute ir jābūt starp :min un :max rakstzīmēm.',
        'array' => 'Laukam :attribute ir jābūt starp :min un :max vienumiem.',
    ],
    'boolean' => 'Laukam :attribute ir jābūt patiesam vai nepatiesam.',
    'confirmed' => 'Lauka :attribute apstiprinājums neatbilst.',
    'current_password' => 'Nepareiza parole.',
    'date' => 'Laukā :attribute ir jābūt derīgam datumam.',
    'date_equals' => 'Laukam :attribute ir jābūt datumam, kas ir vienāds ar :date.',
    'date_format' => 'Lauks :attribute neatbilst formātam :format.',
    'declined' => 'Laukam :attribute ir jābūt noraidītam.',
    'declined_if' => 'Laukam :attribute ir jābūt noraidītam, ja :other ir :value.',
    'different' => 'Lauka :attribute un :other vērtībām jābūt atšķirīgām.',
    'digits' => 'Laukam :attribute ir jābūt :digits ciparam.',
    'digits_between' => 'Laukam :attribute ir jābūt starp :min un :max cipariem.',
    'dimensions' => 'Laukam :attribute ir nederīgi attēla izmēri.',
    'distinct' => 'Lauka :attribute laukam ir dublēta vērtība.',
    'email' => 'Laukam :attribute ir jābūt derīgai e-pasta adresei.',
    'ends_with' => 'Laukam :attribute ir jābeidzas ar vienu no sekojošiem: :values.',
    'enum' => 'Izvēlētā :attribute ir nederīga.',
    'exists' => 'Izvēlētais :attribute ir nederīgs.',
    'file' => 'Laukam :attribute ir jābūt failam.',
    'filled' => 'Laukam :attribute ir jābūt aizpildītam.',
    'gt' => [
        'numeric' => 'Laukam :attribute ir jābūt lielākam par :value.',
        'file' => 'Laukam :attribute ir jābūt lielākam par :value kilobaitiem.',
        'string' => 'Laukam :attribute ir jābūt lielākam par :value rakstzīmēm.',
        'array' => 'Laukam :attribute ir jābūt ar vairāk kā :value vienumiem.',
    ],
    'gte' => [
        'numeric' => 'Laukam :attribute ir jābūt lielākam vai vienādam ar :value.',
        'file' => 'Laukam :attribute ir jābūt lielākam vai vienādam ar :value kilobaitiem.',
        'string' => 'Laukam :attribute ir jābūt lielākam vai vienādam ar :value rakstzīmēm.',
        'array' => 'Laukam :attribute ir jābūt :value vienumiem vai vairāk.',
    ],
    'image' => 'Laukam :attribute ir jābūt attēlam.',
    'in' => 'Izvēlētais :attribute ir nederīgs.',
    'in_array' => 'Laukam :attribute lauks neeksistē :other.',
    'integer' => 'Laukam :attribute ir jābūt veselam skaitlim.',
    'ip' => 'Laukam :attribute ir jābūt derīgai IP adresei.',
    'ipv4' => 'Laukam :attribute ir jābūt derīgai IPv4 adresei.',
    'ipv6' => 'Laukam :attribute ir jābūt derīgai IPv6 adresei.',
    'json' => 'Laukam :attribute ir jābūt derīgai JSON virknei.',
    'lt' => [
        'numeric' => 'Laukam :attribute ir jābūt mazākam par :value.',
        'file' => 'Laukam :attribute ir jābūt mazākam par :value kilobaitiem.',
        'string' => 'Laukam :attribute ir jābūt mazākam par :value rakstzīmēm.',
        'array' => 'Laukam :attribute ir jābūt mazākam par :value vienumiem.',
    ],
    'lte' => [
        'numeric' => 'Laukam :attribute ir jābūt mazākam vai vienādam ar :value.',
        'file' => 'Laukam :attribute ir jābūt mazākam vai vienādam ar :value kilobaitiem.',
        'string' => 'Laukam :attribute ir jābūt mazākam vai vienādam ar :value rakstzīmēm.',
        'array' => 'Laukam :attribute nedrīkst būt vairāk kā :value vienumi.',
    ],
    'mac_address' => 'Laukam :attribute ir jābūt derīgai MAC adresei.',
    'max' => [
        'numeric' => 'Laukam :attribute nedrīkst būt lielākam par :max.',
        'file' => 'Laukam :attribute nedrīkst būt lielākam par :max kilobaitiem.',
        'string' => 'Laukam :attribute nedrīkst būt garākam par :max rakstzīmēm.',
        'array' => 'Laukam :attribute nedrīkst būt vairāk kā :max vienumi.',
    ],
    'mimes' => 'Laukam :attribute ir jābūt failam no sekojošām tipām: :values.',
    'mimetypes' => 'Laukam :attribute ir jābūt failam no sekojošām tipām: :values.',
    'min' => [
        'numeric' => 'Laukam :attribute ir jābūt vismaz :min.',
        'file' => 'Laukam :attribute ir jābūt vismaz :min kilobaitiem.',
        'string' => 'Laukam :attribute ir jābūt vismaz :min rakstzīmēm.',
        'array' => 'Laukam :attribute ir jābūt vismaz :min vienumiem.',
    ],
    'multiple_of' => 'Laukam :attribute ir jābūt :value daudzkārtā.',
    'not_in' => 'Izvēlētais :attribute ir nederīgs.',
    'not_regex' => 'Lauka :attribute formāts ir nederīgs.',
    'numeric' => 'Laukam :attribute ir jābūt skaitlim.',
    'password' => 'Parole ir nepareiza.',
    'present' => 'Laukam :attribute ir jābūt klāt.',
    'prohibited' => 'Laukam :attribute laukam ir aizliegta vērtība.',
    'prohibited_if' => 'Laukam :attribute laukam ir aizliegta vērtība, ja :other ir :value.',
    'prohibited_unless' => 'Laukam :attribute laukam ir aizliegta vērtība, ja tikai :other ir :values.',
    'regex' => 'Lauka :attribute formāts ir nederīgs.',
    'relatable' => 'Lauks :attribute šai resursam var nebūt saistīts.',
    'required' => 'Lauks :attribute ir obligāts.',
    'required_if' => 'Lauks :attribute ir obligāts, ja :other ir :value.',
    'required_unless' => 'Lauks :attribute ir obligāts, ja tikai :other ir :values.',
    'required_with' => 'Lauks :attribute ir obligāts, ja ir klāt :values.',
    'required_with_all' => 'Lauks :attribute ir obligāts, ja ir klāt visi :values.',
    'required_without' => 'Lauks :attribute ir obligāts, ja nav klāt :values.',
    'required_without_all' => 'Lauks :attribute ir obligāts, ja nav klāt neviens no :values.',
    'same' => 'Lauka :attribute un :other vērtībām ir jābūt vienādām.',
    'size' => [
        'numeric' => 'Laukam :attribute ir jābūt :size.',
        'file' => 'Laukam :attribute ir jābūt :size kilobaitiem.',
        'string' => 'Laukam :attribute ir jābūt :size rakstzīmēm.',
        'array' => 'Laukam :attribute ir jāsatur :size vienumi.',
    ],
    'starts_with' => 'Laukam :attribute ir jāsākas ar vienu no sekojošiem: :values.',
    'string' => 'Laukam :attribute ir jābūt virknei.',
    'timezone' => 'Laukam :attribute ir jābūt derīgai laika joslai.',
    'unique' => 'Laukam :attribute jau ir aizņemts.',
    'uploaded' => 'Neizdevās augšupielādēt :attribute.',
    'url' => 'Laukam :attribute formāts ir nederīgs.',
    'uuid' => 'Laukam :attribute ir jābūt derīgam UUID identifikatoram.',

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

    'attributes' => [],

];

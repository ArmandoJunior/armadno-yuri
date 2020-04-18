<?php
$data = !empty($_POST) ? $_POST : false;


if (!$data) {
    header('Location: /');
}

$filable = ['name', 'lastname', 'city', 'state', 'phone', 'email', 'cpf'];

$rule = [
    'name'      => 'required|min:3|max:150',
    'lastname'  => 'required|min:3|max:150',
    'city'      => 'required|min:3|max:50',
    'state'     => 'required|min:3|max:50',
    'phone'     => '',
    'email'     => '',
    'cpf'       => 'required|int|min:11|max:11'
];

$validatedData = [];

foreach ($data as $index => $value) {
    if (!in_array($index, $filable) || $value == '') {
        continue;
    }

    switch ($value) {
        case 'name':
            break;
        case 'lastname':
            break;
        case 'city':
            break;
        case 'state':
            break;
        case 'phone':
            break;
        case 'email':
            $validatedData[$index] = filter_var($value, FILTER_VALIDATE_EMAIL);
            break;
        case 'cpf':
            break;
    }
}

//echo "<pre>" . var_dump($data)->die();

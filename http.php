<?php
require_once 'Field.php';
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

$field = new Field();
foreach ($data as $index => $value) {
    if (!in_array($index, $filable) || $value == '') {
        continue;
    }

    $validatedData[$index] = $field->validate($index, $value);
    var_dump( $validatedData[$index]);
    exit;

}

//echo "<pre>" . var_dump($data)->die();

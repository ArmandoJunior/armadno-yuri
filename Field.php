<?php

require_once 'Traits/StringValidation.php';

class Field
{
    use StringValidation;
    private $atributes = [];
    private $name;

    public function __construct()
    {

    }

    public function validate($index, $field)
    {
        $method = $index . 'Validation';
        return $this->$method($field);
    }

    private function nameValidation($field)
    {
        $field = $this->stringSanitize($field);
        if (!$this->maxSize($field, 150)){
            return[
                'status' => false,
                'message' => 'Too long'
            ];
        }

        if (!$this->minSize($field, 3)){
            return[
                'status' => false,
                'message' => 'Too short'
            ];
        }

        return[
            'status' => true,
            'message' => '',
            'field' => $field,
        ];
    }

    private function lastnameValidation($field){}

    private function cityValidation($field){}

    private function stateValidation($field){}

    private function phoneValidation($field){}

    private function emailValidation($field){}

    private function cpfValidation($field){}

}
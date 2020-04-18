<?php

trait StringValidation
{
    protected function maxSize($value, $max): bool
    {
        if (strlen($value) > $max){
            return false;
        }
        return true;
    }

    protected function minSize($value, $min): bool
    {
        if (strlen($value) < $min){
            return false;
        }
        return true;

    }

    protected function stringSanitize($value): string
    {
        $var = preg_match("[^A-Za-z0-9.]", trim($value));
//        $var = filter_var(trim($value),FILTER_SANITIZE_);
        $var = filter_var($value, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK);
//        var_dump($var);exit;

        return  $var;
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: ebon
 * Date: 04/06/14
 * Time: 10:53
 */

namespace DepotWarehouse\Home\ContactForm\Validators;

use \Validator;

class MailValidator implements BaseValidator {


    public static function validate(array $attributes)
    {
        $rules = array(
            'from' => 'required|email',
            'name' => 'required|alpha',
            'message' => 'required'
        );

        $v = Validator::make($attributes, $rules);

        if ($v->fails()) {
            throw new ValidationException($v);
        }

        return true;
    }
}
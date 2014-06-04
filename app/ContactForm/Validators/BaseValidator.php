<?php
/**
 * Created by PhpStorm.
 * User: ebon
 * Date: 04/06/14
 * Time: 10:54
 */

namespace DepotWarehouse\Home\ContactForm\Validators;


interface BaseValidator {
    public static function validate(array $attributes);
} 
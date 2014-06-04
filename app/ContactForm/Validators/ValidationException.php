<?php
/**
 * Created by PhpStorm.
 * User: ebon
 * Date: 04/06/14
 * Time: 10:58
 */

namespace DepotWarehouse\Home\ContactForm\Validators;


use Illuminate\Validation\Validator;

class ValidationException extends \Exception {

    /** @var \Illuminate\Support\MessageBag */
    private $errors;

    public function __construct($container) {
        $this->errors = ($container instanceof Validator) ? $container->errors() : $container;
        parent::__construct(null);
    }

    /**
     * @return \Illuminate\Support\MessageBag
     */
    public function get() {
        return $this->errors;
    }
} 
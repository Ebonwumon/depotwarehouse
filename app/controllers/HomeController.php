<?php

namespace DepotWarehouse\Home\Controllers;

use DepotWarehouse\Home\ContactForm\Validators\MailValidator;
use DepotWarehouse\Home\ContactForm\Validators\ValidationException;

class HomeController extends \BaseController {

	public function index()
	{
		return \View::make('index');
	}

    public function mail() {
        try {
           MailValidator::validate(Input::all());
        } catch (ValidationException $ex) {
            return Redirect::route('home.index')->withErrors($ex->get());
        }
    }

    public function success() {
        return View::make('success');
    }
}

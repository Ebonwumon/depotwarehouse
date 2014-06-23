<?php

namespace DepotWarehouse\Home\Controllers;

use DepotWarehouse\Home\ContactForm\Mailer\Mailer;
use DepotWarehouse\Home\ContactForm\Validators\MailValidator;
use DepotWarehouse\Home\ContactForm\Validators\ValidationException;
use \Input;
use \Redirect;
use \View;

class HomeController extends \BaseController {

	public function index()
	{

		return \View::make('index');
	}

    public function mail() {
        try {
           MailValidator::validate(Input::all());
        } catch (ValidationException $ex) {
            return \Redirect::route('home.index')->withErrors($ex->get())->withInput();
        }

        Mailer::sendMail(Input::get('from'), Input::get('name'), Input::get('message'));

        $notifications = [ 'success' => "Email sent successfully. We will respond as soon as possible" ];
        return \Redirect::route('home.index')->with('notifications', $notifications);
    }

    public function success() {
        return View::make('success');
    }
}

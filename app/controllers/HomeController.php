<?php

namespace DepotWarehouse\Home\Controllers;

class HomeController extends \BaseController {

	public function index()
	{
		return \View::make('index');
	}
}

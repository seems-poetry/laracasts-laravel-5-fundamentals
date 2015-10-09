<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

	public function index()
	{
		return view('index');
	}
    
	public function about()
	{

		$data = [];
		$data ['first']	= '<span style="color:red;">Robert</span>';
		$data ['last'] 	=  '<span style="color:blue;">Cimpoesu</span>';

		return view('pages.about', $data);

	}


	public function contact()
	{

		$people = [
			'Lorem ipsum dolor.', 'Lorem ipsum.', 'Lorem ipsum dolor sit.'
		];

		return view('pages.contact', compact('people'));

	}


}

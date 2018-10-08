<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Check;

class CheckController extends Controller {
	public function store(Request $request)
	{
		$check            = new Check;
		$check->user_id   = 1;
		$check->report_id = 1;
		$check->save();
	}

	public function destroy($id)
	{
	    //
	}
}

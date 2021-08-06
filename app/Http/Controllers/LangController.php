<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    //
    public function postLang(Request $request)
    {
        Session::put('locale', $request->locale);
        return redirect()->back();
    }
}

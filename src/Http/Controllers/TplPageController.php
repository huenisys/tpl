<?php

namespace Huenisys\Tpl\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class TplPageController extends Controller
{

    public function getDashboard()
    {
      return view('tpl::dashboard');
    }

    public function getWelcome()
    {
      return view('tpl::welcome');
    }

    public function getContact()
    {
      return view('tpl::contact');
    }

    public function getFeatures()
    {
      return view('tpl::features');
    }

    public function getLogout()
    {
      return \Auth::logout();
    }

    public function getLegal()
    {
      return view('tpl::legal');
    }
    
}

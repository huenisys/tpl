<?php

namespace Huenisys\Tpl\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Huenisys\Tpl\Faqs;

class TplPageController extends Controller
{
    public function getWelcome()
    {
      return view('tpl::welcome');
    }

    public function getDashboard()
    {
      return view('tpl::dashboard');
    }

    public function getFaqs()
    {
      $faqs = Faqs::all();

      return view('tpl::faqs')->with([
        'faqs'=>$faqs
        ]);
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

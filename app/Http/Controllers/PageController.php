<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

class PageController extends Controller
{

    /**
     * Show home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('pages.home');
		}

    /**
     * Show different default pages.
     *
     * @return \Illuminate\Http\Response
     */
    public function defaultpage()
    {
			$routename = Route::currentRouteName();
      return view('pages.default')->with('routename', $routename);
		}

}

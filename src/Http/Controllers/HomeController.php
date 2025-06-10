<?php

namespace Bishopm\Learningchurch\Http\Controllers;

class HomeController extends Controller
{

    public function home()
    {
        $data=[];
        return view('learningchurch::web.home',$data);
    }

}

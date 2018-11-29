<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function dashboard(){
        $view                   = view('pages.index');
        return $view;

    }
    
    public function adduser(){
        $view                   = view('pages.adduser');
        return $view;

    }

    public function viewuser(){
        $view                   = view('pages.viewuser');
        return $view;

    }
    public function viewinfo(){
        $view                   = view('pages.viewinfo');
        return $view;
    }

    public function informationfield(){
        $view                   = view('pages.informationfield');
        return $view;
    }

    public function resetuser(){
        $view                   = view('pages.resetuser');
        return $view;
    }

}

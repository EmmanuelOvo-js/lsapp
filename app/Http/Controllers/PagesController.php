<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   //  public function index(){
   //     return view('pages.index');
   //  }

    public function index(){
       $title = 'Welcome Jordan';
      //  return view('pages.index', compact('title'));
       return view('pages.index')->with('title', $title);
    }

    public function about(){
       return view('pages.about');
    }

     public function services(){
        $data = [
            'title' => 'Services',
            'services' => ['web design', 'programming', 'SEO']
        ];
       return view('pages.services')->with($data);
    }

  
}

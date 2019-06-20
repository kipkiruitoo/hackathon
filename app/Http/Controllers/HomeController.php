<?php

namespace App\Http\Controllers;

use App\Category;
use jazmy\FormBuilder\Models\Form;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()


    {
        $categories = Form::orderBy('id', 'desc')->paginate(10);

        return view('home')->withCategories($categories);
    }

    public function aftercategories(Request $request){

        $options = $request->options;

               
               
      
            

            

                  
        

        

      

      
      return view('test')->with('options', $options);
    }
}

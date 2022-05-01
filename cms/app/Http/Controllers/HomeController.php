<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sku_master;
use App\Models\Store;
use Auth;
use Validator;



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
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $query = Sku_master::query();
        
        if (!empty($keyword)) {
            $query->where('sku_name', 'LIKE', "%{$keyword}%")
                ->orWhere('sku_subcategory', 'LIKE', "%{$keyword}%");
        }
 
 
        $sku_masters = $query->get();
 
        return view('index', compact('sku_masters', 'keyword'));
    }
    
    
    
    // public function index()
    // {
    //     return view('home');
    // }
}

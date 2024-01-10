<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\daftarbuku;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index(){
            
        $data = daftarbuku::all();
        return view('index', compact(['data']));
    }

}

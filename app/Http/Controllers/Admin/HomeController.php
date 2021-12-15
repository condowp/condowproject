<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Repositories\Interface\PrivatePropertiesRepositoryInterface;

use App\PrivateProperties;

class HomeController extends Controller
{
    // public $private_properties;
    public function __construct(PrivateProperties $private_properties)
    {
        $this->private_properties = $private_properties;
    }

    public function index(){
        $data = PrivateProperties::orderBy('id','desc')->take(10)->get();
        return view('admin.home.filter1',compact('data', $data));
    }

    public function smallestCondowsByUnits(){
        $data = PrivateProperties::orderBy('units_count','asc')->take(10)->get();
        return view('admin.home.filter2',compact('data', $data));
    }
}

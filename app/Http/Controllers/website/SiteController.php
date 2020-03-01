<?php

namespace App\Http\Controllers\website;
use App\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('website.index');
    }

    public function nzRegionData(Request $request){
        $data = Member::where('region', "=", "nz")->get();
        if($data){
            return response()->json($data);
        }else{
            return response()->json('not found');
        }
    }

    public function overseasRegionData(Request $request){
        $data = Member::where('region', "!=", "nz")->get();
        if($data){
            return response()->json($data);
        }else{
            return response()->json('not found');
        }
    }
}

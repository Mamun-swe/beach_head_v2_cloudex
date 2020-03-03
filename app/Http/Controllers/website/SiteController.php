<?php

namespace App\Http\Controllers\website;
use App\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class SiteController extends Controller
{
    public function index(){
        return view('website.index');
    }

    public function nzRegionData(Request $request){
        // $data = Member::where('region', "=", "nz")->get();
        $datax = Member::where('region', "=", "nz")->get();
        $collection = collect($datax);
        $data = $collection->unique('city');
        $data->values()->all();

        if($data){
            return response()->json($data);
        }else{
            return response()->json('not found');
        }
    }

    public function overseasRegionData(Request $request){
        $datay = Member::where('region', "!=", "nz")->get();
        $collection = collect($datay);
        $data = $collection->unique('region', 'city');
        $data->values()->all();
        if($data){
            return response()->json($data);
        }else{
            return response()->json('not found');
        }
    }
}

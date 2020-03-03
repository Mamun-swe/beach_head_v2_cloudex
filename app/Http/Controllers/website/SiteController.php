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

    public function nzRegionCity(Request $request){
        // $data = Member::where('region', "=", "nz")->get();
        $datax = Member::select('city')
                ->where('region', "=", "nz")->get();
        $collection = collect($datax);
        $data = $collection->unique('city');
        $data->values()->all();

        if($data){
            return response()->json($data);
        }else{
            return response()->json('not found');
        }
    }

    public function nzRegionExpData(){
        $exp = Member::select(
                'advisory_exp_1',
                'advisory_exp_2',
                'advisory_exp_3',
                'mrkets_1',
                'mrkets_2',
                'mrkets_3',
                'sector_1',
                'sector_2',
                'sector_3'
                )->get();
        $collection = collect($exp);
        $data = $collection->unique(
                'advisory_exp_1',
                'advisory_exp_2',
                'advisory_exp_3',
                'mrkets_1',
                'mrkets_2',
                'mrkets_3',
                'sector_1',
                'sector_2',
                'sector_3'
        );
        $data->values()->all();
        if($data){
            return response()->json($data);
        }else{
            return response()->json('not found');
        }
    }

    public function overseasRegionData(Request $request){
        $datay = Member::select('region')->where('region', "!=", "nz")->get();
        $collection = collect($datay);
        $data = $collection->unique('region');
        $data->values()->all();
        if($data){
            return response()->json($data);
        }else{
            return response()->json('not found');
        }
    }

    public function overseasCity(Request $request){
        $city = Member::select('city')
                ->where('region', "=", $request->region)
                ->get();
        $collection = collect($city);
        $data = $collection->unique('city');
        $data->values()->all();
        if($data){
            return response()->json($data);
        }else{
            return response()->json('not found');
        }
    }

    public function overseasRegionExp(){
        $exp = Member::select(
            'advisory_exp_1',
            'advisory_exp_2',
            'advisory_exp_3',
            'mrkets_1',
            'mrkets_2',
            'mrkets_3',
            'sector_1',
            'sector_2',
            'sector_3'
            )->get();
        $collection = collect($exp);
        $data = $collection->unique(
                'advisory_exp_1',
                'advisory_exp_2',
                'advisory_exp_3',
                'mrkets_1',
                'mrkets_2',
                'mrkets_3',
                'sector_1',
                'sector_2',
                'sector_3'
        );
        $data->values()->all();
        if($data){
            return response()->json($data);
        }else{
            return response()->json('not found');
        }
    }
}

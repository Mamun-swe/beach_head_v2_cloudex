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
        
        if($request->advisor == 'nz'){
            $datax = Member::select('city')
                ->where('region', "=", "nz")->get();
            $collection = collect($datax);
            $data = $collection->unique('city');
            $data->values()->all();
            if($data){
                $x = 'nz';
                return response()->json(array($data, $x));
            }else{
                return response()->json('not found');
            }
        }

        if($request->advisor == 'overseas'){
            $datax = Member::select('region')
                ->where('region', "!=", "nz")->get();
            $collection = collect($datax);
            $data = $collection->unique('region');
            $data->values()->all();
            if($data){
                $x = 'overseas';
                return response()->json(array($data, $x));
            }else{
                return response()->json('not found');
            }
        }
    }




    // Advertise Exp or Overseas City
    public function exp1OrOverseasCity(Request $request){
        if($request->advisor == 'nz'){
            $datax = Member::select(
                    'advisory_exp_1',
                    'advisory_exp_2',
                    'advisory_exp_3',
                    'mrkets_1',
                    'mrkets_2',
                    'mrkets_3',
                    'sector_1',
                    'sector_2',
                    'sector_3',
                    'years_of_experience'
                )
                ->where('region', '=', 'nz')
                ->where('city', $request->city)
                ->get();
            $collection = collect($datax);
            $data = $collection->unique([
                    'advisory_exp_1',
                    'advisory_exp_2',
                    'advisory_exp_3',
                    'mrkets_1',
                    'mrkets_2',
                    'mrkets_3',
                    'sector_1',
                    'sector_2',
                    'sector_3',
                    'years_of_experience'
            ]);
            $data->values()->all();
            if($data){
                return response()->json($data);
            }else{
                return response()->json('not found');
            }
        }else{
            $datay = Member::select('city')
                ->where('region', $request->region)
                ->get();
            $collection = collect($datay);
            $data = $collection->unique('city');
            $data->values()->all();
            if($data){
                return response()->json($data);
            }else{
                return response()->json('not found');
            }
        }
    }


    public function onlyOverseasData(Request $request){
        $ovData = Member::select(
            'advisory_exp_1',
            'advisory_exp_2',
            'advisory_exp_3',
            'mrkets_1',
            'mrkets_2',
            'mrkets_3',
            'sector_1',
            'sector_2',
            'sector_3',
            'years_of_experience'
            )
            ->where('region', $request->region)
            ->where('city', $request->city)
            ->get();
            $collection = collect($ovData);
            $data = $collection->unique([
                'advisory_exp_1',
                'advisory_exp_2',
                'advisory_exp_3',
                'mrkets_1',
                'mrkets_2',
                'mrkets_3',
                'sector_1',
                'sector_2',
                'sector_3',
                'years_of_experience'
            ]);
            $data->values()->all();
            if($data){
                return response()->json($data);
            }else{
                return response()->json('not found');
            }
    }






}

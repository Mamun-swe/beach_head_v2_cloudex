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
                return response()->json($data);
            }else{
                return response()->json('not found');
            }
        }

        if($request->advisor == 'overseas'){
            $datax = Member::select('city')
                ->where('region', "!=", "nz")->get();
            $collection = collect($datax);
            $data = $collection->unique('city');
            $data->values()->all();
            if($data){
                return response()->json($data);
            }else{
                return response()->json('not found');
            }
        }
    }

    // NZ Adv Exp
    public function nzAdvExp1(Request $request){
        $exp = Member::select('advisory_exp_1')
                ->where('region', 'nz')
                ->where('city', $request->city)
                ->get();
        $collection = collect($exp);
        $data = $collection->unique('advisory_exp_1');
        $data->values()->all();
        if($data){
            return response()->json($data);
        }else{
            return response()->json('not found');
        }
    }

    public function nzAdvExp2(Request $request){
        $exp = Member::select('advisory_exp_2')
                ->where('region', 'nz')
                ->where('city', $request->city)
                ->where('advisory_exp_1', $request->advExp1)
                ->get();
        $collection = collect($exp);
        $data = $collection->unique('advisory_exp_2');
        $data->values()->all();
        if($data){
            return response()->json($data);
        }else{
            return response()->json('not found');
        }
    }

    public function nzAdvExp3(Request $request){
        $exp = Member::select('advisory_exp_3')
                ->where('region', 'nz')
                ->where('city', $request->city)
                ->where('advisory_exp_1', $request->advExp1)
                ->where('advisory_exp_2', $request->advExp2)
                ->get();
        $collection = collect($exp);
        $data = $collection->unique('advisory_exp_3');
        $data->values()->all();
        if($data){
            return response()->json($data);
        }else{
            return response()->json('not found');
        }
    }

    // NZ Market Exp 
    public function nzMarketExp1(Request $request){
        $exp = Member::select('mrkets_1')
                ->where('region', 'nz')
                ->where('city', $request->city)
                ->where('advisory_exp_1', $request->advExp1)
                ->where('advisory_exp_2', $request->advExp2)
                ->where('advisory_exp_3', $request->advExp3)
                ->get();
        $collection = collect($exp);
        $data = $collection->unique('mrkets_1');
        $data->values()->all();
        if($data){
            return response()->json($data);
        }else{
            return response()->json('not found');
        }
    }

    public function nzMarketExp2(Request $request){
        $exp = Member::select('mrkets_2')
                ->where('region', 'nz')
                ->where('city', $request->city)
                ->where('advisory_exp_1', $request->advExp1)
                ->where('advisory_exp_2', $request->advExp2)
                ->where('advisory_exp_3', $request->advExp3)
                ->where('mrkets_1', $request->mrktExp1)
                ->get();
        $collection = collect($exp);
        $data = $collection->unique('mrkets_2');
        $data->values()->all();
        if($data){
            return response()->json($data);
        }else{
            return response()->json('not found');
        }
    }

    public function nzMarketExp3(Request $request){
        $exp = Member::select('mrkets_3')
                ->where('region', 'nz')
                ->where('city', $request->city)
                ->where('advisory_exp_1', $request->advExp1)
                ->where('advisory_exp_2', $request->advExp2)
                ->where('advisory_exp_3', $request->advExp3)
                ->where('mrkets_1', $request->mrktExp1)
                ->where('mrkets_2', $request->mrktExp2)
                ->get();
        $collection = collect($exp);
        $data = $collection->unique('mrkets_3');
        $data->values()->all();
        if($data){
            return response()->json($data);
        }else{
            return response()->json('not found');
        }
    }

    // NZ Sector Exp 
    public function nzSectorExp1(Request $request){
        $exp = Member::select('sector_1')
                ->where('region', 'nz')
                ->where('city', $request->city)
                ->where('advisory_exp_1', $request->advExp1)
                ->where('advisory_exp_2', $request->advExp2)
                ->where('advisory_exp_3', $request->advExp3)
                ->where('mrkets_1', $request->mrktExp1)
                ->where('mrkets_2', $request->mrktExp2)
                ->where('mrkets_3', $request->mrktExp3)
                ->get();
        $collection = collect($exp);
        $data = $collection->unique('sector_1');
        $data->values()->all();
        if($data){
            return response()->json($data);
        }else{
            return response()->json('not found');
        }
    }

    public function nzSectorExp2(Request $request){
        $exp = Member::select('sector_2')
                ->where('region', 'nz')
                ->where('city', $request->city)
                ->where('advisory_exp_1', $request->advExp1)
                ->where('advisory_exp_2', $request->advExp2)
                ->where('advisory_exp_3', $request->advExp3)
                ->where('mrkets_1', $request->mrktExp1)
                ->where('mrkets_2', $request->mrktExp2)
                ->where('mrkets_3', $request->mrktExp3)
                ->where('sector_1', $request->secExp1)
                ->get();
        $collection = collect($exp);
        $data = $collection->unique('sector_2');
        $data->values()->all();
        if($data){
            return response()->json($data);
        }else{
            return response()->json('not found');
        }
    }

    public function nzSectorExp3(Request $request){
        $exp = Member::select('sector_3')
                ->where('region', 'nz')
                ->where('city', $request->city)
                ->where('advisory_exp_1', $request->advExp1)
                ->where('advisory_exp_2', $request->advExp2)
                ->where('advisory_exp_3', $request->advExp3)
                ->where('mrkets_1', $request->mrktExp1)
                ->where('mrkets_2', $request->mrktExp2)
                ->where('mrkets_3', $request->mrktExp3)
                ->where('sector_1', $request->secExp1)
                ->where('sector_2', $request->secExp2)
                ->get();
        $collection = collect($exp);
        $data = $collection->unique('sector_3');
        $data->values()->all();
        if($data){
            return response()->json($data);
        }else{
            return response()->json('not found');
        }
    }
    
    // NZ Exp year
    public function nzExpYear(Request $request){
        $exp = Member::select('years_of_experience')
                ->where('region', 'nz')
                ->where('city', $request->city)
                ->where('advisory_exp_1', $request->advExp1)
                ->where('advisory_exp_2', $request->advExp2)
                ->where('advisory_exp_3', $request->advExp3)
                ->where('mrkets_1', $request->mrktExp1)
                ->where('mrkets_2', $request->mrktExp2)
                ->where('mrkets_3', $request->mrktExp3)
                ->where('sector_1', $request->secExp1)
                ->where('sector_2', $request->secExp2)
                ->where('sector_3', $request->secExp3)
                ->get();
        $collection = collect($exp);
        $data = $collection->unique('years_of_experience');
        $data->values()->all();
        if($data){
            return response()->json($data);
        }else{
            return response()->json('not found');
        }
    }


    // Overseas Region
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

    // Overseas City
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
    
    // OV Adv Exp
    public function ovAdvExp1(Request $request){
        $exp = Member::select('advisory_exp_1')
                ->where('region', $request->region)
                ->where('city', $request->city)
                ->get();
        $collection = collect($exp);
        $data = $collection->unique('advisory_exp_1');
        $data->values()->all();
        if($data){
            return response()->json($data);
        }else{
            return response()->json('not found');
        }
    }

    public function ovAdvExp2(Request $request){
        $exp = Member::select('advisory_exp_2')
                ->where('region', $request->region)
                ->where('city', $request->city)
                ->where('advisory_exp_1', $request->exp1)
                ->get();
        $collection = collect($exp);
        $data = $collection->unique('advisory_exp_2');
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

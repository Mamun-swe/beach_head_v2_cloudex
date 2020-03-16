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
            $data = $collection->unique(
                'mrkets_1',
                'mrkets_2',
                'mrkets_3',
                'years_of_experience'
            );
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
        $ovAdvExp1 = Member::select('advisory_exp_1')
            ->where('region', $request->region)
            ->where('city', $request->city)
            ->get();
        $collection = collect($ovAdvExp1);
        $data_exp_1 = $collection->unique(['advisory_exp_1']);
        $data_exp_1->values()->all();

        $ovAdvExp2 = Member::select('advisory_exp_2')
            ->where('region', $request->region)
            ->where('city', $request->city)
            ->get();
        $collection2 = collect($ovAdvExp2);
        $data_exp_2 = $collection2->unique(['advisory_exp_2']);
        $data_exp_2->values()->all();

        $ovAdvExp3 = Member::select('advisory_exp_3')
            ->where('region', $request->region)
            ->where('city', $request->city)
            ->get();
        $collection3 = collect($ovAdvExp3);
        $data_exp_3 = $collection3->unique(['advisory_exp_3']);
        $data_exp_3->values()->all();



        $ovMrktExp1 = Member::select('mrkets_1')
            ->where('region', $request->region)
            ->where('city', $request->city)
            ->get();
        $collection4 = collect($ovMrktExp1);
        $data_mrkt_1 = $collection4->unique(['mrkets_1']);
        $data_mrkt_1->values()->all();

        $ovMrktExp2 = Member::select('mrkets_2')
            ->where('region', $request->region)
            ->where('city', $request->city)
            ->get();
        $collection5 = collect($ovMrktExp2);
        $data_mrkt_2 = $collection5->unique(['mrkets_2']);
        $data_mrkt_2->values()->all();

        $ovMrktExp3 = Member::select('mrkets_3')
            ->where('region', $request->region)
            ->where('city', $request->city)
            ->get();
        $collection6 = collect($ovMrktExp3);
        $data_mrkt_3 = $collection6->unique(['mrkets_3']);
        $data_mrkt_3->values()->all();



        $ovSecExp1 = Member::select('sector_1')
            ->where('region', $request->region)
            ->where('city', $request->city)
            ->get();
        $collection5 = collect($ovSecExp1);
        $data_sec_1 = $collection5->unique(['sector_1']);
        $data_sec_1->values()->all();

        $ovSecExp2 = Member::select('sector_2')
            ->where('region', $request->region)
            ->where('city', $request->city)
            ->get();
        $collection6 = collect($ovSecExp2);
        $data_sec_2 = $collection6->unique(['sector_2']);
        $data_sec_2->values()->all();

        $ovSecExp3 = Member::select('sector_3')
            ->where('region', $request->region)
            ->where('city', $request->city)
            ->get();
        $collection7 = collect($ovSecExp3);
        $data_sec_3 = $collection7->unique(['sector_3']);
        $data_sec_3->values()->all();


        $ovYerExp = Member::select('years_of_experience')
            ->where('region', $request->region)
            ->where('city', $request->city)
            ->get();
        $collection8 = collect($ovYerExp);
        $data_yr_exp = $collection8->unique(['years_of_experience']);
        $data_yr_exp->values()->all();







        $res['adv_exp_1'] = $data_exp_1;
        $res['adv_exp_2'] = $data_exp_2;
        $res['adv_exp_3'] = $data_exp_3;
        $res['mrkt_exp_1'] = $data_mrkt_1;
        $res['mrkt_exp_2'] = $data_mrkt_2;
        $res['mrkt_exp_3'] = $data_mrkt_3;
        $res['sec_exp_1'] = $data_sec_1;
        $res['sec_exp_2'] = $data_sec_2;
        $res['sec_exp_3'] = $data_sec_3;
        $res['year_exp'] = $data_yr_exp;

        return response()->json($res);
    }






}

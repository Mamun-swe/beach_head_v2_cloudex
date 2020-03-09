<?php

namespace App\Http\Controllers\website;
use App\Member;
use App\nps;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function findResult(Request $request){
        // dd($request->all());
        if($request->advisor === 'nz'){
            $data = Member::where('region', '=', 'nz')
                    ->where('city', $request->region)
                    ->where('advisory_exp_1', $request->adv_exp_1)
                    ->where('advisory_exp_2', $request->adv_exp_2)
                    ->where('advisory_exp_3', $request->adv_exp_3)
                    ->where('mrkets_1', $request->market_exp_1)
                    ->where('mrkets_2', $request->market_exp_2)
                    ->where('mrkets_3', $request->market_exp_3)
                    ->where('sector_1', $request->sector_exp_1)
                    ->where('sector_2', $request->sector_exp_2)
                    ->where('sector_3', $request->sector_exp_3)
                    ->where('founder_ceo_exp', $request->ceo)
                    ->where('govt_regulatory_exp', $request->govt_exp)
                    ->where('years_of_experience', $request->exp_year)
                    ->where('nz_working_experience', $request->nz_work_exp)
                    ->take(5)
                    ->get();
            if(count($data) > 0){
                return view('website.result', compact('data'));
            }else{
                $data = Member::where('region', '=', 'nz')
                        ->where('city', $request->region)
                        ->where(function($q) use ($request){
                            $q->orWhere('advisory_exp_1', $request->adv_exp_1);
                            $q->orWhere('advisory_exp_2', $request->adv_exp_2);
                            $q->orWhere('advisory_exp_3', $request->adv_exp_3);
                            $q->orWhere('mrkets_1', $request->market_exp_1);
                            $q->orWhere('mrkets_2', $request->market_exp_2);
                            $q->orWhere('mrkets_3', $request->market_exp_3);
                            $q->orWhere('sector_1', $request->sector_exp_1);
                            $q->orWhere('sector_2', $request->sector_exp_2);
                            $q->orWhere('sector_3', $request->sector_exp_3);
                            $q->orWhere('founder_ceo_exp', $request->ceo);
                            $q->orWhere('govt_regulatory_exp', $request->govt_exp);
                            $q->orWhere('years_of_experience', $request->exp_year);
                            $q->orWhere('nz_working_experience', $request->nz_work_exp);
                        })
                        ->take(5)
                    ->get();
                return view('website.result', compact('data'));
            }
        }


        if($request->advisor === 'overseas'){
         
            $data = Member::where('region', $request->region)
                    ->where('city', $request->ov_city)
                    ->where('advisory_exp_1', $request->adv_exp_1)
                    ->where('advisory_exp_2', $request->adv_exp_2)
                    ->where('advisory_exp_3', $request->adv_exp_3)
                    ->where('mrkets_1', $request->market_exp_1)
                    ->where('mrkets_2', $request->market_exp_2)
                    ->where('mrkets_3', $request->market_exp_3)
                    ->where('sector_1', $request->sector_exp_1)
                    ->where('sector_2', $request->sector_exp_2)
                    ->where('sector_3', $request->sector_exp_3)
                    ->where('founder_ceo_exp', $request->ceo)
                    ->where('govt_regulatory_exp', $request->govt_exp)
                    ->where('years_of_experience', $request->exp_year)
                    ->where('nz_working_experience', $request->nz_work_exp)
                    ->take(5)
                    ->get();
            if(count($data) > 0){
                return view('website.result', compact('data'));
            }else{
                $data = Member::where('region', $request->region)
                    ->where('city', $request->ov_city)
                    ->where(function($q) use ($request){
                        $q->orWhere('advisory_exp_1', $request->adv_exp_1);
                        $q->orWhere('advisory_exp_2', $request->adv_exp_2);
                        $q->orWhere('advisory_exp_3', $request->adv_exp_3);
                        $q->orWhere('mrkets_1', $request->market_exp_1);
                        $q->orWhere('mrkets_2', $request->market_exp_2);
                        $q->orWhere('mrkets_3', $request->market_exp_3);
                        $q->orWhere('sector_1', $request->sector_exp_1);
                        $q->orWhere('sector_2', $request->sector_exp_2);
                        $q->orWhere('sector_3', $request->sector_exp_3);
                        $q->orWhere('founder_ceo_exp', $request->ceo);
                        $q->orWhere('govt_regulatory_exp', $request->govt_exp);
                        $q->orWhere('years_of_experience', $request->exp_year);
                        $q->orWhere('nz_working_experience', $request->nz_work_exp);
                    })
                    ->take(5)
                    ->get();
                return view('website.result', compact('data'));
            }
        }
    }


    // Select NPS
    public function selectNps(Request $request){
        $data = nps::where('col_1', 'LIKE', "%$request->x%")
                    ->orWhere('col_1', 'Europe')->take(2)->get();
        return response()->json($data);
    }
    // NPS date
    public function slectNpsDate(Request $request){
        $data = nps::select('col_2', 'col_3', 'col_4')
                ->where('col_1', 'Net Promoter Score')
                ->take(1)
                ->get();
        return response()->json($data);
    }
}

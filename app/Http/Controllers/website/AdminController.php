<?php

namespace App\Http\Controllers\website;
use App\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Member::orderBy('id', 'DESC')->paginate(2);
        return view('admin.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'region' => 'required',
            'name' => 'required',
            'city' => 'required', 
            'advisory_exp_1' => 'required', 
            'advisory_exp_2' => 'required', 
            'advisory_exp_3' => 'required', 
            'mrkets_1' => 'required', 
            'mrkets_2' => 'required', 
            'mrkets_3' => 'required', 
            'sector_1' => 'required', 
            'sector_2' => 'required', 
            'sector_3' => 'required', 
            'ceo' => 'required', 
            'nz_work_exp' => 'required', 
            'govt_work_exp' => 'required', 
            'exp_year' => 'required',
            'url' => 'required',
        ];
        $this->validate($request,$rules);
        $form_data = array(
            'region'=> $request->region,
            'name'=> $request->name,
            'city'=> $request->city,
            'advisory_exp_1'=> $request->advisory_exp_1,
            'advisory_exp_2'=> $request->advisory_exp_2,
            'advisory_exp_3'=> $request->advisory_exp_3,
            'mrkets_1'=> $request->mrkets_1,
            'mrkets_2'=> $request->mrkets_2,
            'mrkets_3'=> $request->mrkets_3,
            'sector_1'=> $request->sector_1,
            'sector_2'=> $request->sector_2,
            'sector_3'=> $request->sector_3,
            'founder_ceo_exp'=> $request->ceo,
            'govt_regulatory_exp'=> $request->govt_work_exp,
            'years_of_experience'=> $request->exp_year,
            'nz_working_experience'=> $request->nz_work_exp,
            'profile_url' => $request->url
        );

        $data = Member::create($form_data);
        if($data){
            return redirect()->back()->with('success', 'Successfully advisor added .');
        }else{
            return redirect()->back()->with('success', 'Something error !!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Member::find($id);
        if($data){
            return view('admin.show', compact('data'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Member::find($id);
        return view('admin.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'region' => 'required',
            'name' => 'required',
            'city' => 'required', 
            'advisory_exp_1' => 'required', 
            'advisory_exp_2' => 'required', 
            'advisory_exp_3' => 'required', 
            'mrkets_1' => 'required', 
            'mrkets_2' => 'required', 
            'mrkets_3' => 'required', 
            'sector_1' => 'required', 
            'sector_2' => 'required', 
            'sector_3' => 'required', 
            'founder_ceo_exp' => 'required', 
            'nz_working_experience' => 'required', 
            'govt_regulatory_exp' => 'required', 
            'years_of_experience' => 'required', 
            'profile_url' => 'required',
        ];
        $this->validate($request,$rules);
        $record = Member::find($id);
        $record->update($request->all());
        return redirect()->back()->with('success', 'Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Member::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Delete successfully');
    }
}

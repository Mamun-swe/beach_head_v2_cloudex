@extends('layouts.app')
@section('content')

<div class="container create">
    <div class="row">
        <div class="col-12">
            <div class="card border-0">
                <div class="card-header bg-white">
                    <div class="d-flex">
                        <div><h5 class="mb-0">Edit advisor</h5></div>
                        <div class="ml-auto">
                            <a href="{{route('admin.index')}}" class="btn btn-info btn-sm shadow-none px-3 text-white"><b>Back</b></a>
                        </div>
                    </div>
                    @if(Session::has('success'))
                    <p class="text-success">{{Session::get('success')}}</p>
                    @endif
                </div>
                <div class="card-body mt-3">
                    <form method="post" action="{{route('admin.update', $data->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            {{-- Region --}}
                            <div class="col-12 col-lg-6 mb-2">
                                <div class="form-group">
                                    @if ($errors->has('region'))
                                        <small class="text-danger">This field is required.</small>
                                    @endif
                                    <small class="text-muted">Region</small>
                                    <input type="text" class="form-control shadow-none" name="region" value="{{$data->region}}">
                                </div>
                            </div>
                            {{-- Name --}}
                            <div class="col-12 col-lg-6 mb-2">
                                <div class="form-group">
                                    @if ($errors->has('name'))
                                        <small class="text-danger">This field is required.</small>
                                    @endif
                                    <small class="text-muted">Name</small>
                                    <input type="text" class="form-control shadow-none" name="name" value="{{$data->name}}">
                                </div>
                            </div>
                            {{-- City --}}
                            <div class="col-12">
                                <div class="form-group">
                                    @if ($errors->has('city'))
                                        <small class="text-danger">This field is required.</small>
                                    @endif
                                    <small class="text-muted">City</small>
                                    <input type="text" class="form-control shadow-none" name="city" value="{{$data->city}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- advisory_exp_1 --}}
                            <div class="col-12">
                                <small class="text-muted">Type & select Advisory expertise you want (upto 3)</small>
                            </div>
                            <div class="col-12 col-lg-4 mb-2">
                                <div class="form-group">
                                    @if ($errors->has('advisory_exp_1'))
                                        <small class="text-danger">This field is required.</small>
                                    @endif
                                    <small class="text-muted">Advisory experience one</small>
                                    <input type="text" class="form-control shadow-none" name="advisory_exp_1" value="{{$data->advisory_exp_1}}">
                                </div>
                            </div>
                            {{-- advisory_exp_2 --}}
                            <div class="col-12 col-lg-4 mb-2">
                                <div class="form-group">
                                    @if ($errors->has('advisory_exp_2'))
                                        <small class="text-danger">This field is required.</small>
                                    @endif
                                    <small class="text-muted">Advisory experience two</small>
                                    <input type="text" class="form-control shadow-none" name="advisory_exp_2" value="{{$data->advisory_exp_2}}">
                                </div>
                            </div>
                            {{-- advisory_exp_3 --}}
                            <div class="col-12 col-lg-4 mb-2">
                                <div class="form-group">
                                    @if ($errors->has('advisory_exp_3'))
                                        <small class="text-danger">This field is required.</small>
                                    @endif
                                    <small class="text-muted">Advisory experience three</small>
                                    <input type="text" class="form-control shadow-none" name="advisory_exp_3" value="{{$data->advisory_exp_3}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <small class="text-muted">Type & select Market expertise you want (upto 3)</small>
                            </div>
                            {{-- mrkets_1 --}}
                            <div class="col-12 col-lg-4 mb-2">
                                <div class="form-group">
                                    @if ($errors->has('mrkets_1'))
                                        <small class="text-danger">This field is required.</small>
                                    @endif
                                    <small class="text-muted">Market experience one</small>
                                    <input type="text" class="form-control shadow-none" name="mrkets_1" value="{{$data->mrkets_1}}">
                                </div>
                            </div>
                            {{-- mrkets_2 --}}
                            <div class="col-12 col-lg-4 mb-2">
                                <div class="form-group">
                                    @if ($errors->has('mrkets_2'))
                                        <small class="text-danger">This field is required.</small>
                                    @endif
                                    <small class="text-muted">Market experience two</small>
                                    <input type="text" class="form-control shadow-none" name="mrkets_2" value="{{$data->mrkets_2}}">
                                </div>
                            </div>
                            {{-- mrkets_3 --}}
                            <div class="col-12 col-lg-4 mb-2">
                                <div class="form-group">
                                    @if ($errors->has('mrkets_3'))
                                        <small class="text-danger">This field is required.</small>
                                    @endif
                                    <small class="text-muted">Market experience three</small>
                                    <input type="text" class="form-control shadow-none" name="mrkets_3" value="{{$data->mrkets_3}}">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-12">
                                <small class="text-muted">Type & select Sector expertise you want (upto 3)</small>
                            </div>
                            {{-- sector_1 --}}
                            <div class="col-12 col-lg-4 mb-2">
                                <div class="form-group">
                                    @if ($errors->has('sector_1'))
                                        <small class="text-danger">This field is required.</small>
                                    @endif
                                    <small class="text-muted">Sector experience one</small>
                                    <input type="text" class="form-control shadow-none" name="sector_1" value="{{$data->sector_1}}">
                                </div>
                            </div>
                            {{-- sector_2 --}}
                            <div class="col-12 col-lg-4 mb-2">
                                <div class="form-group">
                                    @if ($errors->has('sector_2'))
                                        <small class="text-danger">This field is required.</small>
                                    @endif
                                    <small class="text-muted">Sector experience two</small>
                                    <input type="text" class="form-control shadow-none" name="sector_2" value="{{$data->sector_2}}">
                                </div>
                            </div>
                            {{-- sector_3 --}}
                            <div class="col-12 col-lg-4 mb-2">
                                <div class="form-group">
                                    @if ($errors->has('sector_3'))
                                        <small class="text-danger">This field is required.</small>
                                    @endif
                                    <small class="text-muted">Sector experience three</small>
                                    <input type="text" class="form-control shadow-none" name="sector_3" value="{{$data->sector_3}}">
                                </div>
                            </div>
                        </div>
                        {{-- General Experience --}}
                        <div class="row">
                            <div class="col-12 border-bottom mb-4">
                                <h5 class="mb-2">General Experience</h5>
                            </div>
                            <div class="col-12 col-lg-6 mb-2">
                                <div class="form-group">
                                    <small class="text-muted">CEO/Founder Exp</small>
                                    <select class="form-control shadow-none" name="founder_ceo_exp">
                                        <option value="no" selected>N/A</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mb-2">
                                <div class="form-group">
                                    <small class="text-muted">NZ Working Exp</small>
                                    <select class="form-control shadow-none" name="nz_working_experience">
                                        <option value="no" selected>N/A</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mb-2">
                                <div class="form-group">
                                    <small class="text-muted">Govt/Regulatory Exp</small>
                                    <select class="form-control shadow-none" name="govt_regulatory_exp">
                                        <option value="no" selected>N/A</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mb-2">
                                <div class="form-group">
                                    <small class="text-muted">Years of Exp</small>
                                    <select class="form-control shadow-none" name="years_of_experience">
                                        <option value="no" selected>N/A</option>
                                        <option value="5">5 Years</option>
                                        <option value="10">10 Years</option>
                                        <option value="15">15 Years</option>
                                        <option value="20">20 Years</option>
                                        <option value="25">25 Years</option>
                                        <option value="30">30 Years</option>
                                        <option value="35">35 Years</option>
                                        <option value="40">40 Years</option>
                                        <option value="45">45 Years</option>
                                        <option value="50">50 Years</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <small class="text-muted">Profile URL</small>
                                    @if ($errors->has('url'))
                                        <small class="text-danger">This field is required.</small>
                                    @endif
                                    <input type="text" class="form-control shadow-none" name="profile_url" value="{{$data->profile_url}}">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn shadow-none float-right uniq-btn"><b>Update</b></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
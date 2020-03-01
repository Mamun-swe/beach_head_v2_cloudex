@extends('layouts.app')
@section('content')

<div class="container show">
    <div class="row">
        <div class="col-12">
            <div class="card border-0">
            <div class="card-header bg-white">
                    <div class="d-flex">
                        <div><h5 class="mb-0">Advisor info</h5></div>
                        <div class="ml-auto">
                            <a href="{{route('admin.index')}}" class="btn btn-info btn-sm shadow-none px-3 text-white"><b>Back</b></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered">
                        <tr>
                            <td><b>Region</b></td>
                            <td class="text-capitalize">{{$data->region}}</td>
                        </tr>
                        <tr>
                            <td><b>Name</b></td>
                            <td class="text-capitalize">{{$data->name}}</td>
                        </tr>
                        <tr>
                            <td><b>City</b></td>
                            <td class="text-capitalize">{{$data->city}}</td>
                        </tr>
                        <tr>
                            <td><b>Advisory Exp 1</b></td>
                            <td class="text-capitalize">{{$data->advisory_exp_1}}</td>
                        </tr>
                        <tr>
                            <td><b>Advisory Exp 2</b></td>
                            <td class="text-capitalize">{{$data->advisory_exp_2}}</td>
                        </tr>
                        <tr>
                            <td><b>Advisory Exp 3</b></td>
                            <td class="text-capitalize">{{$data->advisory_exp_3}}</td>
                        </tr>
                        <tr>
                            <td><b>Market Exp 1</b></td>
                            <td class="text-capitalize">{{$data->mrkets_1}}</td>
                        </tr>
                        <tr>
                            <td><b>Market Exp 2</b></td>
                            <td class="text-capitalize">{{$data->mrkets_2}}</td>
                        </tr>
                        <tr>
                            <td><b>Market Exp 3</b></td>
                            <td class="text-capitalize">{{$data->mrkets_3}}</td>
                        </tr>
                        <tr>
                            <td><b>Sector 1</b></td>
                            <td class="text-capitalize">{{$data->sector_1}}</td>
                        </tr>
                        <tr>
                            <td><b>Sector 2</b></td>
                            <td class="text-capitalize">{{$data->sector_2}}</td>
                        </tr>
                        <tr>
                            <td><b>Sector 3</b></td>
                            <td class="text-capitalize">{{$data->sector_3}}</td>
                        </tr>
                        <tr>
                            <td><b>Founder / CEO Exp</b></td>
                            <td class="text-capitalize">{{$data->founder_ceo_exp}}</td>
                        </tr>
                        <tr>
                            <td><b>Govt. regulatory Exp</b></td>
                            <td class="text-capitalize">{{$data->govt_regulatory_exp}}</td>
                        </tr>
                        <tr>
                            <td><b>NZ work Exp</b></td>
                            <td class="text-capitalize">{{$data->nz_working_experience}}</td>
                        </tr>
                        <tr>
                            <td><b>Exp Year</b></td>
                            <td class="text-capitalize">{{$data->years_of_experience}}</td>
                        </tr>
                        <tr>
                            <td><b>Profile link</b></td>
                            <td class="text-lowercase">
                                <a href="{{$data->profile_url}}" target="_blank">{{$data->profile_url}}</a>
                            </td>
                        </tr>
                    </table>
                    <div class="mt-2 text-right">
                        <a href="{{route('admin.edit',$data->id)}}" class="btn btn-info px-4 shadow-none text-white">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
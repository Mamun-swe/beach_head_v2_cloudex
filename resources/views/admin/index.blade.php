@extends('layouts.app')

@section('content')
<div class="container-fluid index">
    <div class="row">
        <div class="col-12">
            <div class="card border-0">
                <div class="card-header bg-white">
                    <div class="d-flex">
                        <div>
                            <h5 class="mb-0">Advisor's</h5>
                        </div>
                        <div class="ml-auto">
                            <a href="{{route('admin.create')}}" class="float-right btn btn-sm btn-info shadow-none text-white">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-bordered">
                        <thead>
                            <tr>
                                <td><b>Region</b></td>
                                <td><b>Name</b></td>
                                <td><b>City</b></td>
                                <td><b>Advisory Exp. 1</b></td>
                                <td><b>Advisory Exp. 2</b></td>
                                <td><b>Advisory Exp. 3</b></td>
                                <td><b>Market Exp. 1</b></td>
                                <td><b>Market Exp. 2</b></td>
                                <td><b>Market Exp. 3</b></td>
                                <td><b>Sector Exp. 1</b></td>
                                <td><b>Sector Exp. 2</b></td>
                                <td><b>Sector Exp. 3</b></td>
                                <td class="text-center"><b>Founder / CEO</b></td>
                                <td class="text-center"><b>Govt. Exp.</b></td>
                                <td class="text-center"><b>Years of Exp.</b></td>
                                <td class="text-center"><b>NZ work Exp.</b></td>
                                <td class="text-center"><b>Action</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->region}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->city}}</td>
                                    <td>{{$item->advisory_exp_1}}</td>
                                    <td>{{$item->advisory_exp_2}}</td>
                                    <td>{{$item->advisory_exp_3}}</td>
                                    <td>{{$item->mrkets_1}}</td>
                                    <td>{{$item->mrkets_2}}</td>
                                    <td>{{$item->mrkets_3}}</td>
                                    <td>{{$item->sector_1}}</td>
                                    <td>{{$item->sector_2}}</td>
                                    <td>{{$item->sector_3}}</td>
                                    <td class="text-center">{{$item->founder_ceo_exp}}</td>
                                    <td class="text-center">{{$item->govt_regulatory_exp}}</td>
                                    <td class="text-center">{{$item->years_of_experience}} Years</td>
                                    <td class="text-center">{{$item->nz_working_experience}}</td>
                                    <td class="text-center">
                                        <a href="{{route('admin.show',$item->id)}}" class="btn btn-light btn-sm text-info shadow-none mb-1"><i class="fas fa-eye"></i></a>
                                        <a href="{{route('admin.edit',$item->id)}}" class="btn btn-light btn-sm text-dark shadow-none mb-1"><i class="fas fa-pen"></i></a>
                                        <form action="{{route('admin.destroy',$item->id)}}" method="post"
                                            onsubmit="return confirm('Are you sure ?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-light rounded-0 shadow-none">
                                                <i class="fas fa-trash text-danger"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-2 text-center">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
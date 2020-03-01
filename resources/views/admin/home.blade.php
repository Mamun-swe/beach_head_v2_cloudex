@extends('layouts.app')

@section('content')
<div class="container admin">
    <div class="row">
        <div class="col-12 col-lg-8 m-auto mt-lg-4">
            <div class="row">
                <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                    <a href="{{route('admin.index')}}">
                        <div class="card border-0">
                            <div class="card-body py-5 text-center">
                                <h4 class="mb-0">Advisor</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-6">
                    <a href="{{route('admin.create')}}">
                        <div class="card border-0">
                            <div class="card-body py-5 text-center">
                                <h4 class="mb-0">Make new advisor</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

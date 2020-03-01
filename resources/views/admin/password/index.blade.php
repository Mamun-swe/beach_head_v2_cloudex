@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 m-auto pt-5">
            <div class="card border-0">
                <div class="card-header py-3 bg-white">
                    <h5 class="mb-0">Update Password</h5>
                    @if(session()->has('notfound'))
                        <p class="text-danger mb-0">{{ session()->get('notfound') }}</p>
                    @endif
                    @if(session()->has('success'))
                        <p class="text-success mb-0">{{ session()->get('success') }}</p>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{route('password.update')}}" method="post">
                        @csrf
                        <div class="form-group mb-4">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <input type="text" class="form-control shadow-none" name="email" placeholder="Enter E-mail">
                        </div>
                        <div class="form-group mb-4">
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <input type="password" class="form-control shadow-none" name="password" placeholder="New password">
                        </div>
                        <button type="submit" class="btn btn-info shadow-none px-4 text-white float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
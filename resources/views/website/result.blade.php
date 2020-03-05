@extends('layouts.website')
@section('content')


<div class="container result py-2">
    <div class="row">
        <div class="col-12 pb-4">
        <a href="{{url('/')}}" class="btn btn-info px-4 shadow-none text-white"><b>HOME</b></a>
        </div>
        <div class="col-12 mb-4">
            @if (count($data) > 0)
            <div class="card shadow border-0" id="printBox">
                <div class="card-body p-4 p-lg-5">
                    <div class="row">

                        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                            <p class="text-muted mb-3">NPS for your Region Beach Head Advisor</p>
                            @foreach ($data as $item)
							@if($item == $data->first())
                                <h5 class="mb-3 border text-capitalize text-center py-2" id="region" data-columns="{{$item->region}}">{{$item->region}}</h5>
                                <h5 class="mb-3 border text-capitalize text-center py-2">{{$item->region}}</h5>
							@endif
							@endforeach
                            
                        </div>

                        <div class="col-12 col-lg-4 mb-4 mb-lg-0 pt-lg-5">
                            <p class="text-muted mb-3">NPS Score for this Region last 3 yrs</p>
                            <p class="text-muted mt-lg-4">Number of times Advisor Used Last 3 yrs</p>
                        </div>

                        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                            <table class="table-one">
                                <thead id="thead">
                                </thead>
                                <tbody id="tbody">
                                </tbody>
                            </table>
                        </div>


                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <p class="text-muted mb-2 mt-4">*Net Promoter Score (NPS) - The higher the better.</p>
                            <p class="text-muted">** NPS for NZ is calculated based on 3 variables of Governance, Fresh thinking and Beachhead Advisory</p>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-12 col-lg-4 mb-0">
                            <p class="text-muted mb-2">Beach Head Advisor Location</p>
                            @foreach ($data as $item)
							@if($item == $data->first())
                                <h5 class="mb-3 border text-capitalize text-center py-2">{{$item->city}}</h5>
							@endif
							@endforeach
                            
                        </div>
                        <div class="col-12 col-lg-4 mb-4">
                            <p class="text-muted mb-2">Beach Head Advisor Region</p>
                            @foreach ($data as $item)
							@if($item == $data->first())
                                <h5 class="mb-3 border text-capitalize text-center py-2">{{$item->region}}</h5>
							@endif
							@endforeach
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-2">
                            <h4 class="text-dark">Top 5</h4>
                        </div>
                        <div class="col-12">
                            <table class="table-two">
                                <thead>
                                    <tr>
                                        <td><h5 class="mb-0 text-dark"><b>Rank</b></h5></td>
                                        <td><h5 class="mb-0 text-dark"><b>Name</b></h5></td>
                                        <td><h5 class="mb-0 text-dark"><b>Look up profile online- Copy and Paste URL below</b></h5></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $item)
                                    <tr>
                                        <td class="td-1 px-2"><p class="mb-0 text-dark">{{$key + 1}}</p></td>
                                        <td class="td-2"><p class="mb-0 text-dark text-capitalize">{{$item->name}}</p></td>
                                        <td class="link-td">
                                        <a id="user_profile_link" target="_blank" href="{{$item->profile_url}}">{{$item->profile_url}}</a>
                                            <button type="button" class="btn btn-info btn-sm copy-text" data-clipboard-target="#user_profile_link">Copy</button>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        @else
            <div class="card border-0">
                <div class="card-body text-center py-4">
                    <h5 class="mb-0 text-danger"><b>Opps ! Result not found .</b></h5>
                </div>
            </div>
        @endif
        </div>
    </div>
</div>


<script>
	$(document).ready(function(){
		$(function(){
			new Clipboard('.copy-text');
		});
        const x = document.querySelector('#region').dataset.columns;
        
        // Region NPS
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': '{{csrf_token()}}'
            },
            type : 'POST',
            url:"{{route('nps')}}",
            data : {x},
            success : function(response) {
                $.each(response, function (index, exp) {
                    $('#tbody').append('<tr>'
                    +'<td>' + exp.col_2 + '</td>'
                    +'<td>' + exp.col_3 + '</td>'
                    +'<td>' + exp.col_4 + '</td>'+
                    '</tr>');
                });
            },
            error: function(err){
                if(err){
                    console.log(err);
                }
            }
        });
        // NPS Date
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': '{{csrf_token()}}'
            },
            type: 'GET',
            url: "{{route('nps.date')}}",
            success: function(response){
                $.each(response, function (index, exp) {
                    $('#thead').append('<tr>'
                    +'<td><h6 class="mb-0 font-weight-bold text-dark">' + exp.col_2 + '</h6></td>'
                    +'<td><h6 class="mb-0 font-weight-bold text-dark">' + exp.col_3 + '</h6></td>'
                    +'<td><h6 class="mb-0 font-weight-bold text-dark">' + exp.col_4 + '</h6></td>' +
                    '</tr>');
                });
            },
            error: function(err){
                if(err){
                    console.log(err);
                }
            }
        })
	});
	
</script>
@endsection
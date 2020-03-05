@extends('layouts.website')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
        <div class="card border-0 shadow-sm mb-3 mb-lg-4">
            <div class="card-body text-center">
                <div class="d-lg-flex">
                    <div class="text-center pr-lg-4 pb-4 pb-lg-0">
                        <img src="{{url('public')}}/static/logo.png" class="img-fluid" style="height: 130px;min-width: 130px;">
                    </div>
                    <div class="ml-auto">
                        <p>New Zealand Trade and Enterprise (NZTE) vetted Beachheads advisors are a network of private sector experts who offer perspective and insights to help customers shape the direction of their business in exports and local knowledge.
                        </p>
                        <p>
                        Located throughout New Zealand and around the world, the Beachheads advisors have experience in running international businesses and can help you with specific challenges and maximise opportunities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8">
        <!-- Search form -->
            <div class="card border-0 shadow pt-4">
            <div class="card-header border-bottom bg-white text-center px-lg-4 pb-4">
            <h4>Browse the global network of Beachheads advisors by filling in your requirements in the search bar.  </h4>
            </div>
                <div class="card-body px-4 py-4 pb-lg-5">
                    <form action="{{route('result')}}" method="post">
                    @csrf
                        <div class="row">
                        <!-- Adviso -->
                            <div class="col-12 col-lg-5 mb-lg-2">
                                <p class="text-dark mb-0">Where do you want your advisor to be based in?</p>
                            </div>
                            <div class="col-12 col-lg-7 mb-lg-2">
                                <div class="form-group">
                                    <select name="advisor" id="advisor" class="form-control shadow-none">
                                        <option value="nz">NZ</option>
                                        <option value="overseas">Overseas</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Region -->
                            <div class="col-12 col-lg-5 mb-lg-2">
                                <p class="text-dark mb-0">Please select City (NZ)/Region (Overseas)</p>
                            </div>
                            <div class="col-12 col-lg-7 mb-lg-2">
                                <div class="form-group">
                                    <select name="region" id="region" class="form-control shadow-none">
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="overseas_city" >
                        <!-- City -->
                            <div class="col-12 col-lg-5 mb-lg-2">
                                <p class="text-dark mb-0">Please select Overseas City Only</p>
                            </div>
                            <div class="col-12 col-lg-7 mb-lg-2">
                                <div class="form-group">
                                    <select name="ov_city" id="ov_city" class="form-control shadow-none">
                                    </select>
                                </div>
                            </div>
                        </div>
                            
                        <div class="row">
                            <!-- Technical Exp -->
                            <div class="col-12 my-3">
                                <h4 class="mb-2">Technical Experience</h4>
                                <div class="border"></div>
                            </div>
                        </div>

                        <div class="row mb-2 mb-lg-3">
                            <!-- Advisory Exp 1 -->
                            <div class="col-12">
                                <p class="text-dark mb-1">Type & select Advisory expertise you want (upto 3)</p>
                            </div>
                            <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                                <select name="adv_exp_1" id="adv_exp_1" class="form-control shadow-none select"></select>
                            </div>
                            <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                                <select name="adv_exp_2" id="adv_exp_2" class="form-control shadow-none select"></select>
                            </div>
                            <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                                <select name="adv_exp_3" id="adv_exp_3" class="form-control shadow-none select"></select>
                            </div>
                        </div>

                        <div class="row mb-2 mb-lg-3">
                            <!-- Market Exp 1 -->
                            <div class="col-12">
                                <p class="text-dark mb-1">Type & select Market expertise you want (upto 3)</p>
                            </div>
                            <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                                <select name="market_exp_1" id="market_exp_1" class="form-control shadow-none select"></select>
                            </div>
                            <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                                <select name="market_exp_2" id="market_exp_2" class="form-control shadow-none select"></select>
                            </div>
                            <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                                <select name="market_exp_3" id="market_exp_3" class="form-control shadow-none select"></select>
                            </div>
                        </div>

                        <div class="row mb-2 mb-lg-3">
                            <!-- Sector Exp 1 -->
                            <div class="col-12">
                                <p class="text-dark mb-1">Type & select Sector expertise you want (upto 3)</p>
                            </div>
                            <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                                <select name="sector_exp_1" id="sector_exp_1" class="form-control shadow-none select"></select>
                            </div>
                            <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                                <select name="sector_exp_2" id="sector_exp_2" class="form-control shadow-none select"></select>
                            </div>
                            <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                                <select name="sector_exp_3" id="sector_exp_3" class="form-control shadow-none select"></select>
                            </div>
                        </div>



                        <div class="row">
                            <!-- General Exp -->
                            <div class="col-12 my-3">
                                <h4 class="mb-2">General Experience</h4>
                                <div class="border"></div>
                            </div>
                        </div>

                    <!-- Founder / CEO -->
                        <div class="row">
                            <div class="col-12 col-lg-5 mb-lg-2">
                                <p class="text-dark mb-1">CEO/Founder Exp</p>
                            </div>
                            <div class="col-12 col-lg-7 mb-lg-2">
                                <div class="form-group">
                                    <select name="ceo" id="ceo" class="form-control shadow-none">
                                        <option value="no" selected>N/A</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- NZ Working Exp -->
                        <div class="row">
                            <div class="col-12 col-lg-5 mb-lg-2">
                                <p class="text-dark mb-1">NZ Working Exp</p>
                            </div>
                            <div class="col-12 col-lg-7 mb-lg-2">
                                <div class="form-group">
                                    <select name="nz_work_exp" id="nz_work_exp" class="form-control shadow-none">
                                        <option value="no" selected>N/A</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Govt/Regulatory Exp -->
                        <div class="row">
                            <div class="col-12 col-lg-5 mb-lg-2">
                                <p class="text-dark mb-1">Govt/Regulatory Exp</p>
                            </div>
                            <div class="col-12 col-lg-7 mb-lg-2">
                                <div class="form-group">
                                    <select name="govt_exp" id="govt_exp" class="form-control shadow-none">
                                        <option value="no" selected>N/A</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Years of Exp -->
                        <div class="row">
                            <div class="col-12 col-lg-5 mb-lg-2">
                                <p class="text-dark mb-1">Years of Exp</p>
                            </div>
                            <div class="col-12 col-lg-7 mb-lg-2">
                                <div class="form-group">
                                    <select name="exp_year" id="exp_year" class="form-control shadow-none">
                                        <option value="no" selected>N/A</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info uniq-btn shadow-none text-white float-right px-5"><b>GET RESULT</b></button>
                    </form>
                </div>
            </div>
        </div>


        <!-- Extra -->
        <div class="col-12 col-lg-4 marketing">
            <div class="card border-0 shadow mb-4 mt-4 mt-lg-0">
                <div class="card-body">
                    <p class="mb-4">Let us help you reach your business goals. Outside your office to reach your customers. We are a Malaysian based company with a global team.</p>
                    <div class="d-flex">
                        <div><img src="{{url('public')}}/static/cropped-Tiger-logo.png" class="img-fluid"></div>
                        <div class="ml-auto pt-5">
                        <a target="_blank" href="" class="btn shadow-none text-white px-2 py-1" style="position:absolute;bottom:20px;right:20px;font-size: 12px;"><b>VISIT US</b></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    <p class="mb-4">Not sure of what online media to allocate your limited budget resources for the biggest impact? Let us help you get the most optimum reach for your budget.</p>
                    <div class="d-flex">
                        <div><img src="{{url('public')}}/static/sspng.png" class="img-fluid"></div>
                        <div class="ml-auto pt-5">
                        <a target="_blank" href="" class="btn shadow-none text-white px-2 py-1" style="position:absolute;bottom:20px;right:20px;font-size: 12px;"><b>VISIT US</b></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card border-0 shadow mb-4 p-0" id="cloudex-card"> 
                <img src="{{url('public')}}/static/web_cloudex.gif" class="card-img w-100 h-100">
                <div class="card-img-overlay p-0">
                    <div class="my-bg p-3">
                        <h5 class="card-title text-white mb-0">Make your website more than faster</h5>
                        <a target="_blank" href="" class="btn shadow-none text-white px-2 py-1" style="position:absolute;bottom:20px;right:20px;font-size: 12px;"><b>VISIT US</b></a>
                    </div>
                </div>
            </div>


            <div class="card border-0 shdow-none mt-lg-5" style="background: none;">
                <p><span class="text-muted">Development By</span>
                    <a target="_blank" href="https://www.webcloudex.com/" style="text-decoration: none;">Web Cloudex</a></p>
            </div>
        </div>
    </div>
</div>


<!-- Widge code -->
<a class="bmc-button" target="_blank" href="https://www.buymeacoffee.com/kurien75"><img src="https://cdn.buymeacoffee.com/buttons/bmc-new-btn-logo.svg" alt="Buy me a coffee"><span style="margin-left:15px;font-size:19px !important;">Buy me a coffee</span></a>





<script>
    $(".select").select2();
    $("#overseas_city").hide();
    var advisor = "nz"; 
   
    $('#advisor').change(function(){
        if($('#advisor').val() == 'overseas'){
            advisor = "overseas";
            $("#overseas_city").show();
            $('#adv_exp_1').empty();
            $('#adv_exp_2').empty();
            $('#adv_exp_3').empty();
            $('#market_exp_1').empty();
            $('#market_exp_2').empty();
            $('#market_exp_3').empty();
            $('#sector_exp_1').empty();
            $('#sector_exp_2').empty();
            $('#sector_exp_3').empty();
        }else{
            advisor = "nz";
            $("#overseas_city").hide(); 
            $('#adv_exp_1').empty();
            $('#adv_exp_2').empty();
            $('#adv_exp_3').empty();
            $('#market_exp_1').empty();
            $('#market_exp_2').empty();
            $('#market_exp_3').empty();
            $('#sector_exp_1').empty();
            $('#sector_exp_2').empty();
            $('#sector_exp_3').empty();
        }
    });

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': '{{csrf_token()}}'
            },
            type : 'POST',
            url:"{{route('region')}}",
            data: {advisor},
            success : function(response) {
                $('#region').empty();
                $('#region').append(' <option selected disabled value="">Select a City</option>');
                $.each(response[0], function (index, value) {
                    $('#region').append('<option value="' + value.city + '">' + value.city + '</option>');
                });
            }
        });
    
    $('#advisor').change(function(){
        var exp = {
            advisor: advisor
        }
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': '{{csrf_token()}}'
            },
            type : 'POST',
            url:"{{route('region')}}",
            data: exp,
            success : function(response) {
                if(response[1] == "overseas"){
                    $('#region').empty();
                    $('#region').append(' <option selected disabled value="">Select a Region</option>');
                    $.each(response[0], function (index, value) {
                        $('#region').append('<option value="' + value.region + '">' + value.region + '</option>');
                    });
                }
                if(response[1] == "nz"){
                    $('#region').empty();
                    $('#region').append(' <option selected disabled value="">Select a City</option>');
                    $.each(response[0], function (index, value) {
                        $('#region').append('<option value="' + value.city + '">' + value.city + '</option>');
                    });
                }
            }
        });
    });





    $('#region').change(function(){
        if(advisor == 'nz'){
            var data = {
                advisor: 'nz',
                city: $('#region').val()
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': '{{csrf_token()}}'
                },
                type : 'POST',
                url:"{{route('exporoverseas')}}",
                data: data,
                success : function(response) {
                    

                    // Adv Exp
                    $('#adv_exp_1').append(' <option selected disabled value="">--Select--</option>');
                    $.each(response, function (index, value) {
                        $('#adv_exp_1').append('<option value="' + value.advisory_exp_1 + '">' + value.advisory_exp_1 + '</option>');
                    });
                    $('#adv_exp_2').append(' <option selected disabled value="">--Select--</option>');
                    $.each(response, function (index, value) {
                        $('#adv_exp_2').append('<option value="' + value.advisory_exp_2 + '">' + value.advisory_exp_2 + '</option>');
                    });
                    $('#adv_exp_3').append(' <option selected disabled value="">--Select--</option>');
                    $.each(response, function (index, value) {
                        $('#adv_exp_3').append('<option value="' + value.advisory_exp_3 + '">' + value.advisory_exp_3 + '</option>');
                    });

                     // Market Exp
                    $('#market_exp_1').append(' <option selected disabled value="">-- Select --</option>');
                    $.each(response, function (index, value) {
                        $('#market_exp_1').append('<option value="' + value.mrkets_1 + '">' + value.mrkets_1 + '</option>');
                    });
                    $('#market_exp_2').append(' <option selected disabled value="">-- Select --</option>');
                    $.each(response, function (index, value) {
                        $('#market_exp_2').append('<option value="' + value.mrkets_2 + '">' + value.mrkets_2 + '</option>');
                    });
                    $('#market_exp_3').append(' <option selected disabled value="">-- Select --</option>');
                    $.each(response, function (index, value) {
                        $('#market_exp_3').append('<option value="' + value.mrkets_3 + '">' + value.mrkets_3 + '</option>');
                    });

                    // Sector Exp
                    $('#sector_exp_1').append(' <option selected disabled value="">-- Select --</option>');
                    $.each(response, function (index, value) {
                        $('#sector_exp_1').append('<option value="' + value.sector_1 + '">' + value.sector_1 + '</option>');
                    });
                    $('#sector_exp_2').append(' <option selected disabled value="">-- Select --</option>');
                    $.each(response, function (index, value) {
                        $('#sector_exp_2').append('<option value="' + value.sector_2 + '">' + value.sector_2 + '</option>');
                    });
                    $('#sector_exp_3').append(' <option selected disabled value="">-- Select --</option>');
                    $.each(response, function (index, value) {
                        $('#sector_exp_3').append('<option value="' + value.sector_3 + '">' + value.sector_3 + '</option>');
                    });
                    // exp_year
                    $.each(response, function (index, value) {
                        $('#exp_year').append('<option value="' + value.years_of_experience + '">' + value.years_of_experience + ' ' + 'Years' + '</option>');
                    });
                }
            });
        }else{
            var data = {
                region: $('#region').val(),
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': '{{csrf_token()}}'
                },
                type : 'POST',
                url:"{{route('exporoverseas')}}",
                data: data,
                success : function(response) {
                    $('#ov_city').empty();
                    $('#ov_city').append(' <option selected disabled value="">--Select--</option>');
                    $.each(response, function (index, value) {
                        $('#ov_city').append('<option value="' + value.city + '">' + value.city + '</option>');
                    });
                }
            });
        }
    });

    $('#ov_city').change(function(){
        var data = {
            region: $('#region').val(),  
            city: $('#ov_city').val()  
        }
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': '{{csrf_token()}}'
            },
            type : 'POST',
            url:"{{route('onlyovdata')}}",
            data: data,
            success : function(response) {
            
                // Adv Exp
                $('#adv_exp_1').append(' <option selected disabled value="">--Select--</option>');
                $.each(response, function (index, value) {
                    $('#adv_exp_1').append('<option value="' + value.advisory_exp_1 + '">' + value.advisory_exp_1 + '</option>');
                });
                $('#adv_exp_2').append(' <option selected disabled value="">--Select--</option>');
                $.each(response, function (index, value) {
                    $('#adv_exp_2').append('<option value="' + value.advisory_exp_2 + '">' + value.advisory_exp_2 + '</option>');
                });
                $('#adv_exp_3').append(' <option selected disabled value="">--Select--</option>');
                $.each(response, function (index, value) {
                    $('#adv_exp_3').append('<option value="' + value.advisory_exp_3 + '">' + value.advisory_exp_3 + '</option>');
                });

                     // Market Exp
                $('#market_exp_1').append(' <option selected disabled value="">-- Select --</option>');
                $.each(response, function (index, value) {
                    $('#market_exp_1').append('<option value="' + value.mrkets_1 + '">' + value.mrkets_1 + '</option>');
                });
                $('#market_exp_2').append(' <option selected disabled value="">-- Select --</option>');
                $.each(response, function (index, value) {
                    $('#market_exp_2').append('<option value="' + value.mrkets_2 + '">' + value.mrkets_2 + '</option>');
                });
                $('#market_exp_3').append(' <option selected disabled value="">-- Select --</option>');
                $.each(response, function (index, value) {
                    $('#market_exp_3').append('<option value="' + value.mrkets_3 + '">' + value.mrkets_3 + '</option>');
                });

                    // Sector Exp
                $('#sector_exp_1').append(' <option selected disabled value="">-- Select --</option>');
                $.each(response, function (index, value) {
                    $('#sector_exp_1').append('<option value="' + value.sector_1 + '">' + value.sector_1 + '</option>');
                });
                $('#sector_exp_2').append(' <option selected disabled value="">-- Select --</option>');
                $.each(response, function (index, value) {
                    $('#sector_exp_2').append('<option value="' + value.sector_2 + '">' + value.sector_2 + '</option>');
                });
                $('#sector_exp_3').append(' <option selected disabled value="">-- Select --</option>');
                $.each(response, function (index, value) {
                    $('#sector_exp_3').append('<option value="' + value.sector_3 + '">' + value.sector_3 + '</option>');
                });
                // exp_year
                $.each(response, function (index, value) {
                    $('#exp_year').append('<option value="' + value.years_of_experience + '">' + value.years_of_experience + ' ' + 'Years' + '</option>');
                });
            }
        });
    })

 
</script>
<script data-name="BMC-Widget" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="kurien75" data-description="Support me on Buy me a coffee!" data-message="Thank you for visiting. You can now buy me a coffee!" data-color="#5F7FFF" data-position="right" data-x_margin="18" data-y_margin="18"></script>
@endsection

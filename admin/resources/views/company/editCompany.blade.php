@extends('layouts.main')
@section('header')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <style>

        table{font-size: 15px}
        .container-fluid  {padding: 15px  5px;}
    </style>
@endsection

@section('content')


    <div class="row">
        <div class="col-lg-12">
            <div class="card" style="margin-left: 10px; border-radius: 10px;">

                <div class="card-body" style="padding: 1%;">
                    <div align="center" style="margin-bottom: 3%;">
                        <h2 style="color: #989898;"><b>Edit Company Information</b></h2>
                    </div>

                    <form name="addProductForm" class="form-horizontal" method="post" action="{{route('company.update',['id'=>$company->companyId])}}">

                        {{csrf_field()}}


                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Company Name<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <input  maxlength="255" placeholder="255 characters maximum" id="inputHorizontalSuccess" type="text" value="{{ $company->companyName }}" name="companyName"  class="form-control form-control-success" required>

                                @if ($errors->has('companyName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('companyName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Status<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <select name="companyStatus" class="form-control form-control-warning" required>
                                    <option selected value="">Select Status</option>
                                    <?php for ($i=0;$i<count(Status);$i++){if (Status[$i]!='Deleted'){?>
                                    <option @if($company->companyStatus== Status[$i]) selected @endif value="<?php echo Status[$i]?>"><?php echo Status[$i]?></option>
                                    <?php }}?>
                                </select>
                            </div>
                        </div>

                        {{--<div class="form-group row">--}}
                            {{--<label class="col-sm-2 form-control-label">Category<span style="color: red" class="required">*</span></label>--}}
                            {{--<div class="col-sm-10">--}}

                                {{--<select name="category" class="form-control form-control-warning" required>--}}

                                    {{--<option value="{{$company->companyId}}">{{$company->category}}</option>--}}
                                    {{--<option value="test1"  @if($company->category=="test1") selected @endif>test1</option>--}}
                                    {{--<option value="test2"  @if($company->category=="test2") selected @endif>test2</option>--}}

                                {{--</select>--}}

                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Category<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <select name="categoryId" class="form-control form-control-warning select" required>
                                    <option>Select Category</option>
                                    @foreach($categoryInfo as $v_category)

                                        <option value="{{$v_category->categoryId}}"
                                                @if($company->categoryId == $v_category->categoryId)selected @endif
                                        >{{$v_category->categoryName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{--<div class="form-group row">--}}
                            {{--<label class="col-sm-2 form-control-label">Category</label>--}}
                            {{--<div class="col-sm-10">--}}
                                {{--<select name="categoryId" class="form-control form-control-warning select">--}}
                                    {{--<option value="">Select Category</option>--}}
                                    {{--@foreach($categoryInfo as $aC)--}}
                                        {{--<option value="{{$aC->categoryId}}" @if(old('categoryId')==$aC->categoryId )selected @endif >{{$aC->categoryName}}</option>--}}
                                    {{--@endforeach--}}
                                {{--</select>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Address<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <input  maxlength="255" placeholder="Address" id="inputHorizontalSuccess" type="text" value="{{ $company->address }}" name="address"  class="form-control form-control-success" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--<div class="form-group row">--}}
                            {{--<label class="col-sm-2 form-control-label">City<span style="color: red" class="required">*</span></label>--}}
                            {{--<div class="col-sm-10">--}}
                                {{--<input  maxlength="255" placeholder="City" id="inputHorizontalSuccess" type="text" value="{{ $company->city }}" name="city"  class="form-control form-control-success" required>--}}

                                {{--@if ($errors->has('city'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('city') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<label class="col-sm-2 form-control-label">City<span style="color: red" class="required">*</span></label>--}}
                            {{--<div class="col-sm-10">--}}

                                {{--<select name="city" class="form-control form-control-warning" required>--}}

                                    {{--<option value="{{$company->companyId}}">{{$company->category}}</option>--}}
                                    {{--<option value="dhaka"  @if($company->city=="dhaka") selected @endif>dhaka</option>--}}
                                    {{--<option value="rajshahi"  @if($company->city=="dhaka") selected @endif>rajshahi</option>--}}

                                {{--</select>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<label class="col-sm-2 form-control-label">US States<span style="color: red" class="required">*</span></label>--}}
                            {{--<div class="col-sm-10">--}}
                                {{--<select name="cityId" class="form-control form-control-warning" required>--}}
                                    {{--<option>Select States</option>--}}
                                    {{--@foreach($cityInfo as $v_city)--}}

                                        {{--<option value="{{$v_city->cityId}}"--}}
                                                {{--@if($company->cityId == $v_city->cityId)selected @endif--}}
                                        {{-->{{$v_city->ID_STATE}}</option>--}}
                                    {{--@endforeach--}}
                                {{--</select>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">US States</label>
                            <div class="col-sm-10">
                                <select name="ID" id="states" class="form-control form-control-warning select" onchange="usState()">
                                    <option value="">Select States</option>
                                    @if($company->ID == 0){
                                    @foreach($stateInfo as $v_state)
                                        <option @if(old('ID')==$v_state->ID )selected @endif value="{{$v_state->ID}}">{{$v_state->STATE_NAME}}</option>
                                    @endforeach
                                    }
                                @else{
                                    @foreach($stateInfo as $v_state)
                                        <option value="{{$v_state->ID}}" @if($company->ID==$v_state->ID )selected @endif >{{$v_state->STATE_NAME}}</option>
                                    @endforeach
                                        }
                                        @endif
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">City<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <select name="cityId" id="city" class="form-control form-control-warning select" required>
                                    @if($company->cityId ==0){
                                    <option>Select City</option>
                                    }@else{
                                    @foreach($cityInfo as $v_city)

                                        <option value="{{$v_city->cityId}}"
                                                @if($company->cityId == $v_city->cityId)selected @endif
                                        >{{$v_city->cityName}}</option>
                                    @endforeach
                                        }
                                        @endif

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Country<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <input  maxlength="255" placeholder="Country" id="inputHorizontalSuccess" type="text" value="{{ $company->country }}" name="country"  class="form-control form-control-success" required>

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Telephone<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <input  maxlength="255" placeholder="Telephone" id="inputHorizontalSuccess" type="text" value="{{ $company->telephone }}" name="telephone"  class="form-control form-control-success" required>

                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Fax</label>
                            <div class="col-sm-10">
                                <input  maxlength="255" placeholder="Fax" id="inputHorizontalSuccess" type="text" value="{{ $company->fax }}" name="fax"  class="form-control form-control-success">

                                @if ($errors->has('fax'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fax') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Email<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <input  maxlength="255" placeholder="Email" id="inputHorizontalSuccess" type="email" value="{{ $company->email }}" name="email"  class="form-control form-control-success">

                                @if ($errors->has('fax'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fax') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Website</label>
                            <div class="col-sm-10">
                                <input  maxlength="255" placeholder="Website" id="inputHorizontalSuccess" type="text" value="{{ $company->website }}" name="website"  class="form-control form-control-success">

                                @if ($errors->has('website'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Facebook Page</label>
                            <div class="col-sm-10">
                                <input  maxlength="255" placeholder="Facebook Page" id="inputHorizontalSuccess" type="text" value="{{ $company->facebookPage }}" name="facebookPage"  class="form-control form-control-success">

                                @if ($errors->has('facebookPage'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('facebookPage') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Phone Number<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <input id="inputHorizontalWarning" type="number"  maxlength="11" onkeypress="return isNumberKey(event)" placeholder="11 characters maximum" value="{{ $company->phone }}" name="phone"  class="form-control form-control-warning" required>
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                                {{--<span style="color: forestgreen">last order number was {{$lastOrderNumber}}</span>--}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-3">
                                <input type="submit" value="Update" class="btn btn-primary">
                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>


    </div>






@endsection
@section('foot-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />



    <SCRIPT language=Javascript>
        <!--
        function isNumberKey(evt)
        {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
        //-->
        $(document).ready(function() {
            $('.select').select2();
        });
    </SCRIPT>

    <script>
        function usState() {
            var x = document.getElementById("states").value;
            $.ajax({
                type: "GET",
                url: '{{url('/get-cities').'/'}}'+x,
                success: function (data) {
//                    data.forEach(function(element) {
//                        console.log(data.length);
//                    });
                    for (i = 0; i < data.length; i++) {
//                        text += cars[i] + "<br>";
//                        console.log(data[i].cityName);
                        $("#city").append("<option value='"+data[i].cityId+"'>"+data[i].cityName+"</option>");
                    }
                },
            });
        }
    </script>



@endsection
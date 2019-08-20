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
                        <h2 style="color: #989898;"><b>Add Comapny Information</b></h2>
                    </div>

                    <form name="addProductForm" class="form-horizontal" method="post" action="{{route('company.insert')}}">

                        {{csrf_field()}}


                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Company Name<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <input  maxlength="255" placeholder="255 characters maximum" id="inputHorizontalSuccess" type="text" value="{{ old('companyName') }}" name="companyName"  class="form-control form-control-success" required>

                                @if ($errors->has('companyName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('companyName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Category<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <select name="category" class="form-control form-control-warning" required>
                                    <option selected value="test1">test1</option>
                                    <option selected value="test2">test2</option>

                                </select>
                            </div>
                        </div>

                        {{--<div class="form-group row">--}}
                            {{--<label class="col-sm-2 form-control-label">Category<span style="color: red" class="required">*</span></label>--}}
                            {{--<div class="col-sm-10">--}}
                                {{--<select name="categoryId" class="form-control form-control-warning" required>--}}
                                    {{--@foreach($categoryInfo as $categoryInfo)--}}
                                        {{--<option value="{{$categoryInfo->categoryId}}">{{$categoryInfo->categoryName}}</option>--}}
                                    {{--@endforeach--}}

                                {{--</select>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Address<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <input  maxlength="255" placeholder="Address" id="inputHorizontalSuccess" type="text" value="{{ old('address') }}" name="address"  class="form-control form-control-success" required>

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
                                {{--<input  maxlength="255" placeholder="City" id="inputHorizontalSuccess" type="text" value="{{ old('city') }}" name="city"  class="form-control form-control-success" required>--}}

                                {{--@if ($errors->has('city'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('city') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">City<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <select name="city" class="form-control form-control-warning" required>
                                    <option selected value="dhaka">dhaka</option>
                                    <option selected value="rajshahi">rajshahi</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Country<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <input  maxlength="255" placeholder="Country" id="inputHorizontalSuccess" type="text" value="{{ old('country') }}" name="country"  class="form-control form-control-success" required>

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
                                <input  maxlength="255" placeholder="Telephone" id="inputHorizontalSuccess" type="text" value="{{ old('telephone') }}" name="telephone"  class="form-control form-control-success" required>

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
                                <input  maxlength="255" placeholder="Fax" id="inputHorizontalSuccess" type="text" value="{{ old('fax') }}" name="fax"  class="form-control form-control-success">

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
                                <input  maxlength="255" placeholder="Email" id="inputHorizontalSuccess" type="email" value="{{ old('email') }}" name="email"  class="form-control form-control-success">

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
                                <input  maxlength="255" placeholder="Website" id="inputHorizontalSuccess" type="text" value="{{ old('website') }}" name="website"  class="form-control form-control-success">

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
                                <input  maxlength="255" placeholder="Facebook Page" id="inputHorizontalSuccess" type="text" value="{{ old('facebookPage') }}" name="facebookPage"  class="form-control form-control-success">

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
                                <input id="inputHorizontalWarning" type="number"  maxlength="11" onkeypress="return isNumberKey(event)" placeholder="11 characters maximum" value="{{ old('phone') }}" name="phone"  class="form-control form-control-warning" required>
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                                {{--<span style="color: forestgreen">last order number was {{$lastOrderNumber}}</span>--}}
                            </div>
                        </div>
                        {{--<div class="form-group row">--}}
                            {{--<label class="col-sm-2 form-control-label">Parent Category</label>--}}
                            {{--<div class="col-sm-10">--}}
                                {{--<select name="parentId" class="form-control form-control-warning select">--}}
                                    {{--<option value="">Select Category</option>--}}
                                    {{--@foreach($allCategory as $aC)--}}
                                        {{--<option @if(old('parentId')==$aC->categoryId )selected @endif value="{{$aC->categoryId}}">{{$aC->categoryName}}</option>--}}
                                    {{--@endforeach--}}
                                {{--</select>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label class="col-sm-2 form-control-label">Order Number<span style="color: red" class="required">*</span></label>--}}
                            {{--<div class="col-sm-10">--}}
                                {{--<input id="inputHorizontalWarning" type="text"  maxlength="11" onkeypress="return isNumberKey(event)" placeholder="11 characters maximum" value="{{ old('orderNumber') }}" name="orderNumber"  class="form-control form-control-warning" required>--}}
                                {{--@if ($errors->has('orderNumber'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('orderNumber') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                                {{--<span style="color: forestgreen">last order number was {{$lastOrderNumber}}</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label class="col-sm-2 form-control-label">Post</label>--}}
                            {{--<div class="col-sm-10">--}}
                                {{--<select name="postId" class="form-control form-control-warning select">--}}
                                    {{--<option value="">Select Post</option>--}}
                                    {{--@foreach($allPost as $aP)--}}
                                        {{--<option @if(old('postId')==$aP->postId )selected @endif value="{{$aP->postId}}">{{$aP->header}}</option>--}}
                                    {{--@endforeach--}}
                                {{--</select>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Status<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <select name="companyStatus" class="form-control form-control-warning" required>
                                    <option selected value="">Select Status</option>
                                    <?php for ($i=0;$i<count(Status);$i++){ if (Status[$i]!='Deleted'){?>
                                    <option @if(old('menuStatus')==Status[$i] )selected @endif  value="<?php echo Status[$i]?>"><?php echo Status[$i]?></option>
                                    <?php }}?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-3">
                                <input type="submit" value="Submit" class="btn btn-primary">
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


        function isNumberKey(evt)
        {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }

        $(document).ready(function() {
            $('.select').select2();
        });

    </SCRIPT>



@endsection
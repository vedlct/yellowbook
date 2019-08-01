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
                        <h2 style="color: #989898;"><b>Add Blog Information</b></h2>
                    </div>

                    <form name="addProductForm" class="form-horizontal" method="post" action="{{route('blog.insert')}}">

                        {{csrf_field()}}


                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Blog Title<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <input  maxlength="255" placeholder="255 characters maximum" id="inputHorizontalSuccess" type="text" value="{{ old('blog_title') }}" name="blog_title"  class="form-control form-control-success" required>

                                @if ($errors->has('blog_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('blog_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Blog Name<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <input  maxlength="255" placeholder="255 characters maximum" id="inputHorizontalSuccess" type="text" value="{{ old('blog_name') }}" name="blog_name"  class="form-control form-control-success" required>

                                @if ($errors->has('blog_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('blog_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Blog Price<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <input  id="inputHorizontalSuccess" type="text" value="{{ old('blog_price') }}" name="blog_price"  class="form-control form-control-success" required>

                                @if ($errors->has('blog_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('blog_price') }}</strong>
                                    </span>
                                @endif
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
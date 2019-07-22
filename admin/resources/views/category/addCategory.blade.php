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
                        <h2 style="color: #989898;"><b>Add Category Information</b></h2>
                    </div>

                    <form name="addProductForm" class="form-horizontal" method="post" action="{{route('category.insert')}}">

                        {{csrf_field()}}


                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Category Name<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <input  maxlength="255" placeholder="255 characters maximum" id="inputHorizontalSuccess" type="text" value="{{ old('categoryName') }}" name="categoryName"  class="form-control form-control-success" required>

                                @if ($errors->has('categoryName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('categoryName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        {{--<div class="form-group row">--}}
                        {{--<label class="col-sm-2 form-control-label">Menu Type</label>--}}
                        {{--<div class="col-sm-10">--}}
                        {{--<select name="menuType" class="form-control form-control-warning">--}}
                        {{--<option value="">Select Type</option>--}}
                        {{--@foreach($sColors as $color)--}}
                        {{--<option @if(old('color')==$color->colorName )selected @endif value="{{$color->colorName}}">{{$color->colorName}}</option>--}}
                        {{--@endforeach--}}
                        {{--</select>--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Parent Category</label>
                            <div class="col-sm-10">
                                <select name="parentId" class="form-control form-control-warning select">
                                    <option value="">Select Category</option>
                                    @foreach($allCategory as $aC)
                                        <option @if(old('parentId')==$aC->categoryId )selected @endif value="{{$aC->categoryId}}">{{$aC->categoryName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Order Number<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <input id="inputHorizontalWarning" type="text"  maxlength="11" onkeypress="return isNumberKey(event)" placeholder="11 characters maximum" value="{{ old('orderNumber') }}" name="orderNumber"  class="form-control form-control-warning" required>
                                @if ($errors->has('orderNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('orderNumber') }}</strong>
                                    </span>
                                @endif
                                <span style="color: forestgreen">last order number was {{$lastOrderNumber}}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Post</label>
                            <div class="col-sm-10">
                                <select name="postId" class="form-control form-control-warning select">
                                    <option value="">Select Post</option>
                                    @foreach($allPost as $aP)
                                        <option @if(old('postId')==$aP->postId )selected @endif value="{{$aP->postId}}">{{$aP->header}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Status<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <select name="categoryStatus" class="form-control form-control-warning" required>
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
@extends('layouts.main')
@section('header')

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
                        <h2 style="color: #989898;"><b>Add Menu Information</b></h2>
                    </div>

                    <form name="addProductForm" class="form-horizontal" method="post" action="{{route('menu.insert',['id'=>$menu->menuId])}}">

                        {{csrf_field()}}


                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Menu Name<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <input  maxlength="255" placeholder="255 characters maximum" id="inputHorizontalSuccess" type="text" value="{{ old('menuName') }}" name="menuName"  class="form-control form-control-success" required>

                                @if ($errors->has('menuName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('menuName') }}</strong>
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
                            <label class="col-sm-2 form-control-label">Parent Menu</label>
                            <div class="col-sm-10">
                                <select name="parentId" class="form-control form-control-warning">
                                    <option value="">Select Menu</option>
                                    @foreach($allMenu as $aM)
                                        <option @if(old('parentId')==$aM->menuId )selected @endif value="{{$aM->menuId}}">{{$aM->menuName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Order Number<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <input id="inputHorizontalWarning" type="text"  maxlength="20" onkeypress="return isNumberKey(event)" placeholder="20 characters maximum" value="{{ old('orderNumber') }}" name="orderNumber"  class="form-control form-control-warning" required>
                                @if ($errors->has('orderNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('orderNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Post</label>
                            <div class="col-sm-10">
                                <select name="postId" class="form-control form-control-warning">
                                    <option value="">Select Post</option>
                                    {{--@foreach($sColors as $color)--}}
                                    {{--<option @if(old('color')==$color->colorName )selected @endif value="{{$color->colorName}}">{{$color->colorName}}</option>--}}
                                    {{--@endforeach--}}
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Status<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <select name="menuStatus" class="form-control form-control-warning" required>
                                    <option selected value="">Select Status</option>
                                    <?php for ($i=0;$i<count(Status);$i++){?>
                                    <option value="<?php echo Status[$i]?>"><?php echo Status[$i]?></option>
                                    <?php }?>
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
    </SCRIPT>



@endsection
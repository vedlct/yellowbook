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
                        <h2 style="color: #989898;"><b>Edit Post Information</b></h2>
                    </div>

                    <form name="addProductForm" class="form-horizontal" method="post" action="{{route('post.update',['id'=>$post->postId])}}">

                        {{csrf_field()}}


                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Post Header<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <input  maxlength="255" placeholder="255 characters maximum" id="inputHorizontalSuccess" type="text" value="{{ $post->header }}" name="header"  class="form-control form-control-success" required>

                                @if ($errors->has('header'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('header') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Category</label>
                            <div class="col-sm-10">
                                <select name="fkcategoryId" class="form-control form-control-warning select">
                                    <option value="">Select Category</option>
                                    @foreach($allCategory as $aC)
                                        <option @if($post->fkcategoryId==$aC->categoryId )selected @endif value="{{$aC->categoryId}}">{{$aC->categoryName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Company </label>
                            <div class="col-sm-10">
                                <select name="fkcompanyId" class="form-control form-control-warning select">
                                    <option value="">Select Company</option>
                                    @foreach($allCompany as $aCom)
                                        <option @if($post->fkcompanyId==$aCom->companyId )selected @endif value="{{$aCom->companyId}}">{{$aCom->companyName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Menu </label>
                            <div class="col-sm-10">
                                <select name="fkmenuId" class="form-control form-control-warning select">
                                    <option value="">Select Menu</option>
                                    @foreach($allMenu as $aM)
                                        <option @if($post->fkmenuId==$aM->menuId )selected @endif value="{{$aM->menuId}}">{{$aM->menuName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Order Number<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <input id="inputHorizontalWarning" type="text"  maxlength="11" onkeypress="return isNumberKey(event)" placeholder="11 characters maximum" value="{{ $post->orderNumber }}" name="orderNumber"  class="form-control form-control-warning" required>
                                @if ($errors->has('orderNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('orderNumber') }}</strong>
                                    </span>
                                @endif
                                <span style="color: forestgreen">last order number was {{$lastOrderNumber}}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Body</label>
                            <div class="col-sm-10">
                                <textarea class="form-control ckeditor" name="body" rows="6" >{{ $post->body }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Status<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <select name="postStatus" class="form-control form-control-warning" required>
                                    <option selected value="">Select Status</option>
                                    <?php for ($i=0;$i<count(Status);$i++){ if (Status[$i]!='Deleted'){?>
                                    <option @if($post->postStatus==Status[$i] )selected @endif  value="<?php echo Status[$i]?>"><?php echo Status[$i]?></option>
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

    <script type="text/javascript" src="{{url('public/ckeditor/ckeditor.js')}}"></script>

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
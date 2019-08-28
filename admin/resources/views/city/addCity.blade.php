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
                        <h2 style="color: #989898;"><b>Add City Information</b></h2>
                    </div>

                    <form name="addProductForm" class="form-horizontal" method="post" action="{{route('city.insert')}}">

                        {{csrf_field()}}



                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Us_States<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <select name="ID_STATE" class="form-control form-control-warning select">
                                    <option value="">Select States</option>
                                    @foreach($stateInfo as $sI)
                                        <option @if(old('ID_STATE')==$sI->ID_STATE )selected @endif value="{{$sI->ID_STATE}}">{{$sI->STATE_NAME}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">City Name<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <input  maxlength="255" placeholder="255 characters maximum" id="inputHorizontalSuccess" type="text" value="{{ old('cityName') }}" name="cityName"  class="form-control form-control-success" required>

                                @if ($errors->has('cityName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cityName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">COUNTY<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <input  maxlength="255" placeholder="COUNTY" id="inputHorizontalSuccess" type="text" value="{{ old('COUNTY') }}" name="COUNTY"  class="form-control form-control-success" required>

                                @if ($errors->has('COUNTY'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('COUNTY') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">LATITUDE</label>
                            <div class="col-sm-10">
                                <input  maxlength="255" placeholder="LATITUDE" id="inputHorizontalSuccess" type="text" value="{{ old('LATITUDE') }}" name="LATITUDE"  class="form-control form-control-success">

                                @if ($errors->has('LATITUDE'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('LATITUDE') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">LONGITUDE</label>
                            <div class="col-sm-10">
                                <input  maxlength="255" placeholder="LONGITUDE" id="inputHorizontalSuccess" type="text" value="{{ old('LONGITUDE') }}" name="LONGITUDE"  class="form-control form-control-success">

                                @if ($errors->has('LONGITUDE'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('LONGITUDE') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Status<span style="color: red" class="required">*</span></label>
                            <div class="col-sm-10">
                                <select name="cityStatus" class="form-control form-control-warning" required>
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

    {{--<script>--}}
        {{--function usState() {--}}
            {{--var x = document.getElementById("states").value;--}}
            {{--$.ajax({--}}
                {{--type: "GET",--}}
                {{--url: '{{url('/get-cities').'/'}}'+x,--}}
                {{--success: function (data) {--}}
{{--//                    data.forEach(function(element) {--}}
{{--//                        console.log(data.length);--}}
{{--//                    });--}}
                    {{--for (i = 0; i < data.length; i++) {--}}
{{--//                        text += cars[i] + "<br>";--}}
{{--//                        console.log(data[i].cityName);--}}
                        {{--$("#city").append("<option value='"+data[i].cityId+"'>"+data[i].cityName+"</option>");--}}
                    {{--}--}}
                {{--},--}}
            {{--});--}}
        {{--}--}}
    {{--</script>--}}



@endsection
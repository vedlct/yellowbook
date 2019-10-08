@extends('main')

@section('content')
    <!-- alphabets -->
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-container .select2-selection--single {
            box-sizing: border-box;
            cursor: pointer;
            display: block;
            height: 42px;
            user-select: none;
            -webkit-user-select: none;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 24px;
            font-size: 18px;
            margin-top: 3%;
        }
    </style>
    {{--<style>--}}
        {{--.select2-container--default .select2-search--dropdown{--}}
            {{--border: 1px solid #aaa;--}}
        {{--}--}}
        {{--.select2-search--dropdown {--}}
            {{--padding: 4px;--}}
            {{--width: 100%;--}}
            {{--height:42px;--}}
            {{--box-sizing: border-box;--}}
        {{--}--}}
        {{--.select2-search--dropdown {--}}
            {{--display: block;--}}
            {{--padding: 4px;--}}
            {{--height: 43px;--}}
        {{--}--}}

    {{--</style>--}}

    <script>
        $(document).ready(function(){
            $("#hide").click(function(){
                $("p").hide();
            });
            $("#show").click(function(){
                $("p").show();
            });
        });
    </script>


    <div id="div-mobile">
        <div class="icon-bar margin-top-40-minus">
            <img src="{{url('public')}}/images/icon_yp_menu_btn.png" alt="Yellow Pages Menu" title="Yellow Pages Menu" id="myBtn" onclick="myFunction1()">
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="padding-top-15 padding-bottom-5 bg-lightsky" style="background-color: #FFB310;">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-2 col-md-offset-0 col-sm-5 col-sm-offset-1 col-xs-10 col-xs-offset-1 border-radius-10 padding-bottom-5 text-center bg-yellow margin-bottom-10" style="background-color: #FFB310;">
                                {{--<a href="yellowpages/index.html"><h4><div class="text-orange padding-top-6"><img src="{{url('public')}}/images/apps_logo.png" alt="YP" title="YP" class="logo2"> Yellow Pages</div></h4></a>--}}
                            <h3>Search Company</h3>
                            </div>

                            {{--<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1 text-center margin-bottom-10">--}}
                                {{--<form action="https://www.bdtradeinfo.com/yellowpages/search.php" method="post" enctype="multipart/form-data" name="form9" id="form9" onSubmit="return searchForm();">--}}
                                    {{--<input name="search" type="text" id="search" class="searchbox" placeholder="Location" value="" required=""/>--}}

                                {{--</form>--}}
                            {{--</div>--}}

                            <script type="text/javascript">
                                function searchForm() {

                                    var errorMsg = "";
                                    var errorMsgLong = "";


                                    //search
                                    if (document.form9.search.value.length <= 2){
                                        errorMsg += "Enter atleast 3 characters !";
                                    }


                                    //If there is aproblem with the form then display an error
                                    if ((errorMsg != "") || (errorMsgLong != "")){
                                        msg = "Please\n";

                                        errorMsg += alert(msg + errorMsg + "\n" + errorMsgLong);
                                        document.form9.search.focus();
                                        return false;
                                    }

                                    return true;
                                }
                            </script>

                            <div class="col-md-8 col-md-offset-0 col-sm-8 col-sm-offset-1 col-xs-10 col-xs-offset-1 margin-bottom-10">
                                <div class="col-md-12">
                                    <form action="https://www.bdtradeinfo.com/yellowpages/search.php" method="post" enctype="multipart/form-data" name="form9" id="form9" onSubmit="return searchForm();">
                                        <div class="col-md-6">
                                        {{--<input name="companyName" type="text" id="search" class="searchbox" placeholder="Location" value="" required=""/>--}}
                                            <div class="col-md-6" style="margin-top: 1%;">

                                                <select class="form-control form-control-warning select"  name="cityId" style="width: 70%;"  required="">
                                                    <option>City</option>
                                                    @foreach($cityInfo as $v_city)
                                                        <option value="{{$v_city->cityId}}">{{$v_city->cityName}}</option>
                                                    @endforeach
                                                </select>

                                                {{--<input name="cityName" type="text" id="tags" class="searchbox" placeholder="Location" value=""   required=""/>--}}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <input name="search" type="text" id="search" class="searchbox" placeholder="Keyword" value="" required=""/>
                                        </div>
                                            <input name="submit" class="btn btn-default" type="submit" style="background-color: #333333;color: white;" value="Go">
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src = "{{url('public')}}/js/sticky_btn_popup.js"></script>
        </div>
    </div>


   <style>
       @media screen and (width: 768px) {
          #search-bar{

               margin-left: 20%;
          }
       }

   </style>

    <style>
        @media screen and (width: 768px) {
            #header{

                margin-left: 13%;
            }
        }

    </style>

    <style>
        @media screen and (width: 768px) {
            #button{

                margin-left: 13%;
            }
        }

    </style>
    <div id="div-desktop">
        <div class="padding-top-15 padding-bottom-5 bg-lightsky" style="background-color: #FFFFFF;">
            <div class="container">
                <div class="row" style="background-color: #FFB310;">

                    <div class="col-md-2 col-md-offset-0 col-sm-5 col-sm-offset-1 col-xs-10 col-xs-offset-1 border-radius-10 padding-bottom-5 text-center bg-yellow margin-bottom-10" id="header" style="background-color: #FFB310;margin-top: 1%;">
                        {{--<a href="yellowpages/index.html"><h4><div class="text-orange padding-top-6"><img src="{{url('public')}}/images/apps_logo.png" alt="YP" title="YP" class="logo2"> Yellow Pages</div></h4></a>--}}
                        <h2 id="header">Search Company</h2>
                    </div>

    {{--<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1 text-center margin-bottom-10">--}}
       {{----}}
    {{--</div>--}}

                    <script type="text/javascript">
                        function searchForm() {

                            var errorMsg = "";
                            var errorMsgLong = "";


                            //search
                            if (document.form9.search.value.length <= 2){
                                errorMsg += "Enter atleast 3 characters !";
                            }


                            //If there is aproblem with the form then display an error
                            if ((errorMsg != "") || (errorMsgLong != "")){
                                msg = "Please\n";

                                errorMsg += alert(msg + errorMsg + "\n" + errorMsgLong);
                                document.form9.search.focus();
                                return false;
                            }

                            return true;
                        }
                    </script>

                    <div class="col-md-9 col-md-offset-0 col-sm-9 col-sm-offset-1 col-xs-10 col-xs-offset-1 margin-bottom-10">

                            <form action="" method="post" enctype="multipart/form-data" name="form9" id="form9" onSubmit="return searchForm();">
                                <div class="col-md-12" id="search-bar" style="margin-top: 1%;">
                                <div class="col-md-5" id="search-bar">

                                            <select class="form-control form-control-warning select" id="city" name="cityId" style="width: 70%;"  required="">
                                                <option>Select City</option>
                                                @foreach($cityInfo as $v_city)
                                                    <option value="{{$v_city->cityId}}">{{$v_city->cityName}}</option>
                                                @endforeach
                                            </select>

                                {{--<input name="cityName" type="text" id="tags" class="searchbox" placeholder="Location" value=""   required=""/>--}}
                                </div>

                                <div class="col-md-5" id="search-bar">
                                    <input name="search"  type="text" id="search" class="searchbox" placeholder="Keyword" value="" style="margin-left: -28%;" required=""/>
                                </div>
                                <input name="submit" class="btn btn-default" type="submit"  style="margin-left: -22%;background-color: #333333; height:45px;width: 80px;font-size: 24px;color: white;"  value="Go">
                                    {{--{{ csrf_field() }}--}}
                                </div>
                            </form>

                    </div>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- alphabets -->

    <div class="container">
        <div class="row margin-bottom-10 margin-top-10">
            <div class="col-md-2">
                <div class="row">

                    <!--ad left-->
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="#" target="_blank"><img src="{{url('public')}}/saimg/4.gif" alt="Call For Add" title="Call For Add" class="img-left-hp1"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="#" target="_blank"><img src="{{url('public')}}/saimg/4.gif" alt="Call For Add" title="Call For Add" class="img-left-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="#" target="_blank"><img src="{{url('public')}}/saimg/4.gif" alt="Call For Add" title="Call For Add" class="img-left-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="#" target="_blank"><img src="{{url('public')}}/saimg/4.gif" alt="Call For Add" title="Call For Add" class="img-left-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="#" target="_blank"><img src="{{url('public')}}/saimg/4.gif" alt="Call For Add" title="Call For Add" class="img-left-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="#" target="_blank"><img src="{{url('public')}}/saimg/4.gif" alt="Call For Add" title="Call For Add" class="img-left-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="#" target="_blank"><img src="{{url('public')}}/saimg/4.gif" alt="Call For Add" title="Call For Add" class="img-left-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="#" target="_blank"><img src="{{url('public')}}/saimg/4.gif" alt="Call For Add" title="Call For Add" class="img-left-hp"></a>
                    </div>

                    <div class="clearfix"></div>
                    <!--ad left-->

                </div>
            </div>

            <div class="col-md-8">
                <div class="row margin-top-10">
                    <!--ad classic & classic mini-->
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 margin-bottom-7">
                        <a href="#" target="_blank"><img src="{{url('public')}}/saimg/1.gif" alt="Call For Add" title="Call For Add" class="img-classic-hp"></a>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-right margin-bottom-7">
                        <a href="#" target="_blank"><img src="{{url('public')}}/saimg/2.gif" alt="Call For Add" title="Call For Add." class="img-classic-hp2"></a>
                    </div>
                    <!--ad classic & classic mini-->
                </div>
                {{--<div class="col-md-7 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1 text-center margin-bottom-10">--}}
                    {{--<div class="alphabet">--}}
                        {{--<a href="yellowpages/alpha_subcat9ba6.html?alphabet_id=A" >A</a>--}}
                        {{--<a href="yellowpages/alpha_subcat4587.html?alphabet_id=B" >B</a>--}}
                        {{--<a href="yellowpages/alpha_subcatb439.html?alphabet_id=C" >C</a>--}}
                        {{--<a href="yellowpages/alpha_subcat82f1.html?alphabet_id=D" >D</a>--}}
                        {{--<a href="yellowpages/alpha_subcat8d59.html?alphabet_id=E" >E</a>--}}
                        {{--<a href="yellowpages/alpha_subcat7dc3.html?alphabet_id=F" >F</a>--}}
                        {{--<a href="yellowpages/alpha_subcat8545.html?alphabet_id=G" >G</a>--}}
                        {{--<a href="yellowpages/alpha_subcat9d44.html?alphabet_id=H" >H</a>--}}
                        {{--<a href="yellowpages/alpha_subcatd243.html?alphabet_id=I" >I</a>--}}
                        {{--<a href="yellowpages/alpha_subcat499b.html?alphabet_id=J" >J</a>--}}
                        {{--<a href="yellowpages/alpha_subcat45ce.html?alphabet_id=K" >K</a>--}}
                        {{--<a href="yellowpages/alpha_subcatb23b.html?alphabet_id=L" >L</a>--}}
                        {{--<a href="yellowpages/alpha_subcat80f0.html?alphabet_id=M" >M</a>--}}
                        {{--<a href="yellowpages/alpha_subcat574f.html?alphabet_id=N" >N</a>--}}
                        {{--<a href="yellowpages/alpha_subcatec63.html?alphabet_id=O" >O</a>--}}
                        {{--<a href="yellowpages/alpha_subcat38fb.html?alphabet_id=P" >P</a>--}}
                        {{--<a href="yellowpages/alpha_subcat0400.html?alphabet_id=Q" >Q</a>--}}
                        {{--<a href="yellowpages/alpha_subcate21b.html?alphabet_id=R" >R</a>--}}
                        {{--<a href="yellowpages/alpha_subcat8920.html?alphabet_id=S" >S</a>--}}
                        {{--<a href="yellowpages/alpha_subcat73dc.html?alphabet_id=T" >T</a>--}}
                        {{--<a href="yellowpages/alpha_subcate629.html?alphabet_id=U" >U</a>--}}
                        {{--<a href="yellowpages/alpha_subcat0f68.html?alphabet_id=V" >V</a>--}}
                        {{--<a href="yellowpages/alpha_subcat6298.html?alphabet_id=W" >W</a>--}}
                        {{--<a href="yellowpages/alpha_subcatee3f.html?alphabet_id=X" >X</a>--}}
                        {{--<a href="yellowpages/alpha_subcatc424.html?alphabet_id=Y" >Y</a>--}}
                        {{--<a href="yellowpages/alpha_subcatcc65.html?alphabet_id=Z" >Z</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="div_style2">
                    <div class="row">
                        <div class="col-md-10 col-sm-12 col-xs-12 div_style3h padding-bottom-5">
                            <div class="col-md-12 col-xs-12 div_style4h">
                                <h1 style="color: #33332B;">Browse Categories</h1>
                            </div>
                            {{--@foreach($artists as $artists)--}}
                            <div class="alphabet">

                                <a href="{{URL::to('/artists/A')}}" style="margin-left:3%;">A</a>
                                <a href="{{URL::to('/artists/B')}}" style="margin-left:3%;">B</a>
                                <a href="{{URL::to('/artists/C')}}" style="margin-left:3%;">C</a>
                                <a href="{{URL::to('/artists/D')}}" style="margin-left:3%;">D</a>
                                <a href="{{URL::to('/artists/E')}}" style="margin-left:3%;">E</a>
                                <a href="{{URL::to('/artists/F')}}" style="margin-left:3%;">F</a>
                                <a href="{{URL::to('/artists/G')}}" style="margin-left:3%;">G</a>
                                <a href="{{URL::to('/artists/H')}}" style="margin-left:3%;">H</a>
                                <a href="{{URL::to('/artists/I')}}" style="margin-left:3%;">I</a>
                                <a href="{{URL::to('/artists/J')}}" style="margin-left:3%;">J</a>
                                <a href="{{URL::to('/artists/K')}}" style="margin-left:3%;">K</a>
                                <a href="{{URL::to('/artists/L')}}" style="margin-left:3%;">L</a>
                                <a href="{{URL::to('/artists/M')}}" style="margin-left:3%;">M</a>
                                <a href="{{URL::to('/artists/N')}}" style="margin-left:4%;">N</a>
                                <a href="{{URL::to('/artists/O')}}" style="margin-left:3%;">O</a>
                                <a href="{{URL::to('/artists/P')}}" style="margin-left:3%;">P</a>
                                <a href="{{URL::to('/artists/Q')}}" style="margin-left:3%;">Q</a>
                                <a href="{{URL::to('/artists/R')}}" style="margin-left:3%;">R</a>
                                <a href="{{URL::to('/artists/S')}}" style="margin-left:3%;">S</a>
                                <a href="{{URL::to('/artists/T')}}" style="margin-left:3%;">T</a>
                                <a href="{{URL::to('/artists/U')}}" style="margin-left:3%;">U</a>
                                <a href="{{URL::to('/artists/V')}}" style="margin-left:3%;">V</a>
                                <a href="{{URL::to('/artists/W')}}" style="margin-left:3%;">W</a>
                                <a href="{{URL::to('/artists/X')}}" style="margin-left:3%;">X</a>
                                <a href="{{URL::to('/artists/Y')}}" style="margin-left:3%;">Y</a>
                                <a href="{{URL::to('/artists/Z')}}" style="margin-left:3%;">Z</a>

                            </div>
                                {{--@endforeach--}}
                        </div>
                        @if(!isset($artists))
                        <div class="col-md-10 col-sm-12 col-xs-12 div_style3h padding-bottom-5">
                            <div class="col-md-12 col-xs-12 div_style4h">
                                <h1 style="color: #33332B;">Top Categories</h1>
                            </div>
                            <!--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">-->
                            @foreach($top_category as $top_category)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 seg2 padding-top-bottom-5">
                                    <img src="{{url('public')}}/images/icon_pest.png" alt="ps" title="ps"> <a href="{{URL::to('/products/'.$top_category->categoryId)}}" class="text-light text-medium">{{$top_category->categoryName}}</a>
                                </div>
                            @endforeach
                        </div>
                        @endif
                        @if(isset($artists))
                        <div class="col-md-10 col-sm-12 col-xs-12 div_style3h padding-bottom-5">
                            <div class="col-md-12 col-xs-12 div_style4h">
                                <h1 style="color: #33332B;">Browse Categories</h1>
                            </div>
                            <!--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">-->
                            @foreach($artists as $artists)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 seg2 padding-top-bottom-5">
                                    <img src="{{url('public')}}/images/icon_pest.png" alt="ps" title="ps"> <a href="{{URL::to('/products/'.$artists->categoryId)}}" class="text-light text-medium">{{$artists->categoryName}}</a>
                                </div>
                            @endforeach
                        </div>
                        @endif

                        {{--<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top: -18%;">--}}
                            {{--<div class="row">--}}

                                {{--<!--ad right-->--}}
                                {{--<div class="col-lg-12 col-md-12 col-sm-2 col-xs-4 text-center margin-top-bottom-10">--}}
                                    {{--<a href="#" target="_blank"><img src="{{url('public')}}/saimg/3.gif" alt="Call For Add" title="Call For Add" class="img-midright-hp"></a>--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-12 col-md-12 col-sm-2 col-xs-4 text-center margin-top-bottom-10">--}}
                                    {{--<a href="#" target="_blank"><img src="{{url('public')}}/saimg/3.gif" alt="Call For Add" title="Call For Add" class="img-midright-hp"></a>--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-12 col-md-12 col-sm-2 col-xs-4 text-center margin-top-bottom-10">--}}
                                    {{--<a href="#" target="_blank"><img src="{{url('public')}}/saimg/3.gif" alt="Call For Add" title="Call For Add" class="img-midright-hp"></a>--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-12 col-md-12 col-sm-2 col-xs-4 text-center margin-top-bottom-10">--}}
                                    {{--<a href="#" target="_blank"><img src="{{url('public')}}/saimg/3.gif" alt="Call For Add" title="Call For Add" class="img-midright-hp"></a>--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-12 col-md-12 col-sm-2 col-xs-4 text-center margin-top-bottom-10">--}}
                                    {{--<a href="#" target="_blank"><img src="{{url('public')}}/saimg/3.gif" alt="Call For Add" title="Call For Add" class="img-midright-hp"></a>--}}
                                {{--</div>--}}
                                {{--<div class="clearfix"></div>--}}
                                {{--<!--ad right-->--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>

                </div>

            </div>

            <div class="col-md-2">
                <div class="row">

                    <!--ad right-->
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="#" target="_blank"><img src="{{url('public')}}/saimg/4.gif" alt="Call For Add" title="Call For Add" class="img-panel2"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="#" target="_blank"><img src="{{url('public')}}/saimg/4.gif" alt="Call For Add" title="Call For Add" class="img-right-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="#" target="_blank"><img src="{{url('public')}}/saimg/4.gif" alt="Call For Add" title="Call For Add" class="img-right-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="#" target="_blank"><img src="{{url('public')}}/saimg/4.gif" alt="Call For Add" title="Call For Add" class="img-right-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="#" target="_blank"><img src="{{url('public')}}/saimg/4.gif" alt="Call For Add" title="Call For Add" class="img-right-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="#" target="_blank"><img src="{{url('public')}}/saimg/4.gif" alt="Call For Add" title="Call For Add" class="img-right-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="#" target="_blank"><img src="{{url('public')}}/saimg/4.gif" alt="Call For Add" title="Call For Add" class="img-right-hp"></a>
                    </div>


                    <div class="clearfix"></div>
                    <!--ad right-->

                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>





    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
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
    <script>

//$('#js-data-example-ajax').select2({
//    selectOnClose: true
//
//});
//$('#e1').select2({
//    ajax: {
//        delay: 250
//    }
//});
{{--$('#js-data-example-ajax').select2({--}}
    {{--ajax :{--}}
        {{--type: "GET",--}}
        {{--url: '{{url('/get-cities').'/'}}'+x,--}}
        {{--success: function (data) {--}}

            {{--for (i = 0; i < data.length; i++) {--}}
                {{--$("#city").append("<option value='"+data[i].cityId+"'>"+data[i].cityName+"</option>");--}}
            {{--}--}}
        {{--},--}}
    {{--}--}}
{{--});--}}
     $.ajax({
    type: "GET",
    url: '{{url('/get-cities').'/'}}'+x,
    success: function (data) {

        for (i = 0; i < data.length; i++) {

            $("#city").append("<option value='"+data[i].cityId+"'>"+data[i].cityName+"</option>");
        }
    },
});
    </script>
@endsection
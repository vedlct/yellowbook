@extends('main')

@section('content')


    <!--top address bar-->
    <div class="margin-bottom-10 padding-top-bottom-10 bg-skyblue" style="background-color: #FFFFFF;"> <!--matri #ff6666   tuition #D8D8FA  Bangladesh  #009900   travel #ffcccc  biz #cccccc  yp  #FFBA53-->
        <div class="container" style="background-color: #FFB310;padding-top: 10px;padding-bottom: 10px;">
            <div class="col-md-2 col-sm-3 border-right title address-bar">Add Company Listing </div>
            <div class="col-md-10 col-sm-9 padding-top-6">
                <a href="../index.html"><i class="glyphicon glyphicon-home"></i></a>
                <span class="text-small">></span>
                Company Listing
                <span class="text-small">></span>
                <a href='services.html'>Services</a> > Classified Listing                </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div class="row margin-bottom-20 margin-top-10">
            <div class="col-md-2">
                <div class="row">
                    <!--ad left-->
                    <div class="clearfix"></div>
                    <!--left category menu-->
                    <div class="col-md-12 leftmenu-grid">
                        <div class="width-100 bg-ash2 padding-6 border-radius-top-5 margin-top-10 text-center left-menu-heading">
                            <h4 style="color: #333333;">General Menu</h4>
                        </div>
                        <div class="width-100 leftnav border-top-dashed" id="myTopnav1">
                            <a href="javascript:void(0);" class="icon margin-top-7-minus" onclick="myFunction1()" style="text-align: center;">General & Service Info &nbsp; <h2>&#9776;</h2></a>


                            <a href="#" target="_blank">About Us</a>
                            <a href="#">Add Your Company Listing</a>
                            <a href="#">Advertise With Us</a>
                            <a href="#">Contact</a>
                            <a href="#">Info</a>
                            <a href="#">Links</a>
                            <a href="#">Forms</a>


                        </div>
                        <script>
                            function myFunction1() {
                                var x = document.getElementById("myTopnav1");
                                if (x.className === "leftnav") {
                                    x.className += " responsive";
                                } else {
                                    x.className = "leftnav";
                                }
                            }
                        </script>
                    </div>

                </div>
            </div>

            <div class="col-md-8">
                <div class="div_style2">
                    <div class="row">
                        <!--ad classic & classic mini-->
                        <div class="ad-classic1 margin-top-10 margin-bottom-10">
                            <a href="../yellowpages/goadurlf825.html?idn=231" target="_blank"><img src="{{url('public')}}/saimg/1.gif" class="img-classic" alt="Call For Add" title="Call For Add"></a>
                        </div>
                        <div class="ad-classic-mini margin-top-10 margin-bottom-10 text-right">
                            <a href="../yellowpages/goadurl764a.html?idn=298" target="_blank"><img src="{{url('public')}}/saimg/2.gif" class="img-classic-mini" alt="Call For Add" title="Call For Add"></a>

                        </div>                        </div>
                    <div class="row" >
                        <div class="col-md-12 col-xs-12 div_style3">
                            @foreach($top_category as $top_category)
                            <div class="col-md-12 col-xs-12 mainbody-grid div_style4">
                                <h1 style="color: #333333;">{{$top_category->categoryName}}</h1>
                            </div>
                            @endforeach

                        </div>
                    </div>


                    <div class="div_style2">
                        <div class="row" >
                            @foreach($companyInfo as $companyInfo )
                            <div class="col-md-12 col-xs-12 div_style3">

                                <div class="width-100 mainbody-grid border-bottom-dashed margin-bottom-15 padding-top-bottom-10">
                                    <div class="row">
                                        <div class="col-md-11 col-xs-11 mainbody-grid">
                                            <h4>
                                                <a class="nav12txt" href="#">{{$companyInfo->companyName}}</a>
                                            </h4>
                                        </div>
                                        <div class="col-md-1 col-xs-1 mainbody-grid text-right">

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8 col-xs-12 mainbody-grid">
                                        <address>
                                            <ul class="location">
                                                <li><span class="glyphicon glyphicon-map-marker"></span></li>
                                                <li>
                                                    {{$companyInfo->STATE_NAME}},{{$companyInfo->cityName}} ,{{$companyInfo->address}}.                                             </li>
                                            </ul>
                                            <div class="clearfix"> </div>
                                            {{--<ul class="location">--}}
                                                {{--<li><span class="glyphicon glyphicon-earphone"></span></li>--}}
                                                {{--<li>--}}
                                                    {{--{{$companyInfo->STATE_NAME}}</li>--}}

                                            {{--</ul>--}}
                                            <ul class="location">
                                                <li><span class="glyphicon glyphicon-envelope"></span></li>

                                                <li>
                                                <li>
                                                    {{$companyInfo->email}}</li>
                                                </li>

                                            </ul>
                                            <ul class="location">
                                                <li><span class="glyphicon glyphicon-earphone"></span></li>
                                                <li>
                                                    {{$companyInfo->telephone}}</li>

                                            </ul>
                                            <div class="clearfix"> </div>
                                            <ul class="location">
                                                <li><span class="glyphicon glyphicon-globe"></span></li>
                                                <li>
                                                    <a href="#" target=_blank class=navtxt_normal>{{$companyInfo->website}}</a></li>

                                            </ul>
                                            <ul class="location">
                                                <li><span class="glyphicon glyphicon-globe"></span></li>
                                                <li>
                                                    <a href="#" target=_blank class=navtxt_normal>{{$companyInfo->facebookPage}}</a></li>

                                            </ul>
                                        </address>
                                    </div>
                                    {{--<div class="col-md-4 col-xs-12 mainbody-grid">--}}
                                        {{--<address>--}}
                                            {{--<ul class="location">--}}
                                                {{--<li><span class="glyphicon glyphicon-envelope"></span></li>--}}

                                                {{--<li>--}}
                                                {{--<li>--}}
                                                    {{--{{$companyInfo->email}}</li>--}}
                                                {{--</li>--}}

                                            {{--</ul>--}}
                                            {{--<div class="clearfix"> </div>--}}
                                            {{--<ul class="location">--}}
                                                {{--<li><span class="glyphicon glyphicon-envelope"></span></li>--}}
                                                {{--<li><a href="send_mailae8f.html?data_id=48357" class="nav7txt" target="_blank"><strong>{{$companyInfo->fax}}</strong></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</address>--}}
                                    {{--</div>--}}
                                </div>

                                {{--<div class="width-100 mainbody-grid text-justify border-top-dashed">--}}
                                    {{--<p>--}}
                                        {{--<img src="../images/icon_keyword.png" alt="Keywords/Description" title="Keywords/Description" height="20" width="20" class="margin-right-15 float-left">--}}
                                        {{--Our Services : Cockroach Control Service, Termite Control Service, Rodent Control Service, Bed bugs Control Service, Industrial Pest Control Service, Fumigation Service, Snake Control Service, Sofa Cleaning Service, Carpet Cleaning Service etc.                                    </p>--}}
                                {{--</div>--}}
                            </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="col-md-8 col-md-offset-2 col-xs-12 col-xs-offset-0 text-center margin-bottom-10">
                    </div>                    </div>
            </div>

            <div class="col-md-2">
                <div class="row">
                    <!--ad right-->
                    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 text-center margin-top-bottom-10">
                        <a href="../yellowpages/goadurld5f8.html?idn=663" target="_blank"><img src="{{url('public')}}/saimg/4.gif" class="img-panel" alt="Clean & Safe Services Ltd." title="Clean & Safe Services Ltd."></a>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 text-center margin-top-bottom-10">
                        <a href="../yellowpages/goadurl328d.html?idn=317" target="_blank"><img src="{{url('public')}}/saimg/4.gif" class="img-panel" alt="Call For Ad" title="Call For Ad"></a>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 text-center margin-top-bottom-10">
                        <a href="../yellowpages/goadurl74d5.html?idn=27" target="_blank"><img src="{{url('public')}}/saimg/4.gif" class="img-panel" alt="Call For Ad" title="Call For Ad"></a>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 text-center margin-top-bottom-10">
                        <a href="../yellowpages/goadurlcdfa.html?idn=288" target="_blank"><img src="{{url('public')}}/saimg/4.gif" class="img-panel" alt="Call For Ad" title="Call For Ad"></a>
                    </div>


                    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 text-center margin-top-bottom-10">
                        <a href="../yellowpages/goadurl31e8.html?idn=" target="_blank"><img src="{{url('public')}}/saimg/4.gif" class="img-panel" alt="Call For Ad" title="Call For Ad"></a>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 text-center margin-top-bottom-10">
                        <a href="../yellowpages/goadurl31e8.html?idn=" target="_blank"><img src="{{url('public')}}/saimg/4.gif" class="img-panel" alt="Call For Ad" title="Call For Ad"></a>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 text-center margin-top-bottom-10">
                        <a href="../yellowpages/goadurl31e8.html?idn=" target="_blank"><img src="{{url('public')}}/saimg/4.gif" class="img-panel" alt="Call For Ad" title="Call For Ad"></a>
                    </div>








                    <!--right panel Google search and Facebook -->
                    <div class="clearfix"></div>
                    {{--<div class="col-md-12 col-lg-12 col-sm-6 col-xs-6 margin-top-15">--}}
                    {{--<div class="text-center bg-ash padding-6 border-radius-top-5">Google Search</div>--}}

                    {{--<div class="cse-branding-bottom text-center bg-ash-light border-radius-5 margin-bottom-20">--}}
                    {{--<div class="cse-branding-form">--}}
                    {{--<form action="https://www.bdtradeinfo.com/yellowpages/google_search.php" id="cse-search-box">--}}
                    {{--<div class="padding-6 text-center">--}}

                    {{--<input type="hidden" name="cx" value="partner-pub-7635777689333223:9555800832" />--}}
                    {{--<input type="hidden" name="cof" value="FORID:10" />--}}
                    {{--<input type="hidden" name="ie" value="UTF-8" />--}}
                    {{--<input type="text" name="q" size="12" class="width-max-100"/>--}}
                    {{--<div class="text-center"><input type="submit" name="sa" value="Search"/></div>--}}

                    {{--</div>--}}
                    {{--</form>--}}
                    {{--<script type="text/javascript" src="http://www.google.com/jsapi"></script>--}}
                    {{--<script type="text/javascript" src="http://www.google.com/cse/t13n?form=cse-search-box&amp;t13n_langs=en"></script>--}}
                    {{--</div>--}}

                    {{--<div class="padding-left-20 margin-bottom-10">--}}
                    {{--<div class="cse-branding-logo margin-bottom-10">--}}
                    {{--<img src="../../www.google.com/images/poweredby_transparent/poweredby_FFFFFF.gif" alt="Google" />--}}
                    {{--</div>--}}
                    {{--<div class="cse-branding-text">--}}
                    {{--Custom Search--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>                            <div class="col-md-12 col-lg-12 col-sm-6 col-xs-6 margin-top-15 col-xs-6">--}}

                    <div class="padding-6"></div>
                </div>                        <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    </div>

    <div class="total-ads main-grid-border">
        <div class="container">
        </div>
    </div>

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
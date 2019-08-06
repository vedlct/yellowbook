@extends('main')

@section('content')



<!--top address bar-->
<div class="margin-bottom-10 padding-top-bottom-10 bg-peace" style="background-color: #F2EBD3;"> <!--matri #ff6666   tuition #D8D8FA  Bangladesh  #009900   travel #ffcccc  biz #cccccc  yp  #FFBA53-->
    <div class="container">
        <div class="col-md-2 col-sm-3 border-right title address-bar">Travel & Tourism </div>
        <div class="col-md-10 col-sm-9 padding-top-6">
            <a href="../index.html"><i class="glyphicon glyphicon-home"></i></a>
            <span class="text-small">></span>
            <a href="index.html">Travel & Tourism</a>
            <span class="text-small">></span>
            Travel Bangladesh                </div>
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
                        <h4 style="color: #FD9F5B;">Basic Travel Info</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">
                        <a href="javascript:void(0);" class="icon margin-top-7-minus" onclick="myFunction1()" style="text-align: center;">Travel & Discover Bangladesh &nbsp; <h2>&#9776;</h2></a>
                        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="#">Travel & Discover Bangladesh</a>

                        <a href="howto_reach.html">How to Reach</a>
                        <a href="howto_travel.html">How to Travel</a>
                        <a href="food.html">Food and Beverage</a>
                        <a href="shopping.html">Shopping</a>
                        <a href="tourist_info.html">Tourist Information</a>
                        <a href="hotel.html">Hotel & Motel</a>
                        <a href="resorts.html">Resorts & Picnic Spots</a>
                        <a href="tour_operator.html">Tour Operator</a>
                        <a href="airways.html">Airways Dhaka Office</a>

                        <a href="#">
                            <div class="width-100 bg-ash2 padding-6 border-radius-top-5 margin-top-15">
                                <h4 style="color: #FD9F5B;">Tourist Attraction</h4>
                            </div>
                        </a>

                        <a href="ta_dhaka.html">Dhaka City & Division</a>
                        <a href="ta_chittagong.html">Chittagong & Hill Districts</a>
                        <a href="ta_coxbazar.html">Cox's Bazar</a>
                        <a href="ta_comilla.html">Comilla</a>
                        <a href="ta_sylhet.html">Sylhet Division</a>
                        <a href="ta_kuakata.html">Kuakata Sea Beach</a>
                        <a href="ta_sundarban.html">Sundarban</a>
                        <a href="ta_barisal.html">Barisal Division</a>
                        <a href="ta_rajshahi.html">Rajshahi Division</a>
                        <a href="ta_khulna.html">Khulna Division</a>
                        <a href="ta_rangpur.html">Rangpur Division</a>
                        <a href="ta_mymensingh.html">Mymensingh Division</a>
                        <!--        <a href="./ta_others.php">Others</a>-->

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
                        <a href="../yellowpages/goadurla2ed.html?idn=316" target="_blank"><img src="{{url('public')}}/saimg/ad_ts_classic.gif" class="img-classic" alt="T-Series Solutions for professional domain, hosting, web and software development" title="T-Series Solutions for professional domain, hosting, web and software development"></a>
                    </div>
                    <div class="ad-classic-mini margin-top-10 margin-bottom-10 text-right">
                        <a href="../yellowpages/goadurl8852.html?idn=641" target="_blank"><img src="{{url('public')}}/saimg/ad_sentratourscm.gif" class="img-classic-mini" alt="Sentra Travel & Tours. " title="Sentra Travel & Tours. "></a>

                    </div>                        </div>
                <div class="row" >
                    <div class="col-md-12 col-xs-12 div_style3">
                        <div class="col-md-12 col-xs-12 mainbody-grid div_style4">
                            <h1 style="color: #459E5B;">Places for Visit</h1>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="box3 text-center">
                                    <a href="ta_coxbazar.html"><img src="{{url('public')}}/images/cox.png" alt="Cox's Bazar" title="Cox's Bazar"></a><br/>
                                    <div  class="padding-top-6">
                                        <a href="ta_coxbazar.html" class="text-light text-medium">Cox's Bazar</a>
                                    </div>
                                </div>
                                <div class="box3 text-center">
                                    <a href="ta_sundarban.html"><img src="{{url('public')}}/images/shundorban.png" alt="Sundarban" title="Sundarban"></a><br/>
                                    <div  class="padding-top-6">
                                        <a href="ta_sundarban.html" class="text-light text-medium">Sundarban</a>
                                    </div>
                                </div>
                                <div class="box3 text-center">
                                    <a href="ta_sylhet.html"><img src="{{url('public')}}/images/sylhet.png" alt="Sylhet" title="Sylhet"></a><br/>
                                    <div  class="padding-top-6">
                                        <a href="ta_sylhet.html" class="text-light text-medium">Sylhet</a>
                                    </div>
                                </div>
                                <div class="box3 text-center">
                                    <a href="ta_chittagong.html"><img src="{{url('public')}}/images/chittangong.png" alt="Chittagong" title="Chittagong"></a><br/>
                                    <div  class="padding-top-6">
                                        <a href="ta_chittagong.html" class="text-light text-medium">Chittagong</a>
                                    </div>
                                </div>
                                <div class="box3 text-center">
                                    <a href="ta_comilla.html"><img src="{{url('public')}}/images/comilla.png" alt="Comilla" title="Comilla"></a><br/>
                                    <div  class="padding-top-6">
                                        <a href="ta_comilla.html" class="text-light text-medium">Comilla</a>
                                    </div>
                                </div>
                                <div class="box3 text-center">
                                    <a href="ta_kuakata.html"><img src="{{url('public')}}/images/kuakata.png" alt="Kuakata" title="Kuakata"></a><br/>
                                    <div  class="padding-top-6">
                                        <a href="ta_kuakata.html" class="text-light text-medium">Kuakata</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-12 col-xs-12 div_style3">
                        <div class="col-md-12 col-xs-12 mainbody-grid div_style4">
                            <h1 style="color: #459E5B;">Information your may Require During Tour Planning</h1>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="box3 text-center">
                                    <a href="tourist_info.html"><img src="{{url('public')}}/images/tourist_info.png" alt="Tourist Information" title="Tourist Information"></a><br/>
                                    <div  class="padding-top-6">
                                        <a href="tourist_info.html" class="text-light text-medium">Tourist Information</a>
                                    </div>
                                </div>
                                <div class="box3 text-center">
                                    <a href="hotel.html"><img src="{{url('public')}}/images/hotel.png" alt="Hotel/Motel" title="Hotel/Motel"></a><br/>
                                    <div  class="padding-top-6">
                                        <a href="hotel.html" class="text-light text-medium">Hotel/Motel</a>
                                    </div>
                                </div>
                                <div class="box3 text-center">
                                    <a href="resorts.html"><img src="{{url('public')}}/images/resorts.png" alt="Resorts & Picnic Spots" title="Resorts & Picnic Spots"></a><br/>
                                    <div  class="padding-top-6">
                                        <a href="resorts.html" class="text-light text-medium">Resorts & Picnic Spots</a>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2 col-xs-12 col-xs-offset-0 text-center margin-bottom-10">
                </div>                    </div>
        </div>

        <div class="col-md-2">
            <div class="row">
                <!--ad right-->
                <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 text-center margin-top-bottom-10">
                    <a href="../yellowpages/goadurlc4d7.html?idn=361" target="_blank"><img src="{{url('public')}}/saimg/ad_desh.jpg" class="img-panel" alt="Love Your Country" title="Love Your Country"></a>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 text-center margin-top-bottom-10">
                    <a href="../yellowpages/goadurl328d.html?idn=317" target="_blank"><img src="{{url('public')}}/saimg/ad_ts_travel.gif" class="img-panel" alt="Travel Bangladesh, Discover Bangladesh" title="Travel Bangladesh, Discover Bangladesh"></a>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 text-center margin-top-bottom-10">
                    <a href="../yellowpages/goadurl74d5.html?idn=27" target="_blank"><img src="{{url('public')}}/saimg/ad_ts_domain.gif" class="img-panel" alt="Domain registration and dot bd domain by T-series Solutions" title="Domain registration and dot bd domain by T-series Solutions"></a>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 text-center margin-top-bottom-10">
                    <a href="../yellowpages/goadurlcdfa.html?idn=288" target="_blank"><img src="{{url('public')}}/saimg/ad_ts_left.gif" class="img-panel" alt="Know Bangladesh - Travel Bangladesh" title="Know Bangladesh - Travel Bangladesh"></a>
                </div>

                <!--right panel Google search and Facebook -->
                <div class="clearfix"></div>
                <div class="col-md-12 col-lg-12 col-sm-6 col-xs-6 margin-top-15">
                    <div class="text-center bg-ash padding-6 border-radius-top-5">Google Search</div>

                    <div class="cse-branding-bottom text-center bg-ash-light border-radius-5 margin-bottom-20">
                        <div class="cse-branding-form">
                            <form action="https://www.bdtradeinfo.com/yellowpages/google_search.php" id="cse-search-box">
                                <div class="padding-6 text-center">

                                    <input type="hidden" name="cx" value="partner-pub-7635777689333223:9555800832" />
                                    <input type="hidden" name="cof" value="FORID:10" />
                                    <input type="hidden" name="ie" value="UTF-8" />
                                    <input type="text" name="q" size="12" class="width-max-100"/>
                                    <div class="text-center"><input type="submit" name="sa" value="Search"/></div>

                                </div>
                            </form>
                            <script type="text/javascript" src="http://www.google.com/jsapi"></script>
                            <script type="text/javascript" src="http://www.google.com/cse/t13n?form=cse-search-box&amp;t13n_langs=en"></script>
                        </div>

                        <div class="padding-left-20 margin-bottom-10">
                            <div class="cse-branding-logo margin-bottom-10">
                                <img src="../../www.google.com/images/poweredby_transparent/poweredby_FFFFFF.gif" alt="Google" />
                            </div>
                            <div class="cse-branding-text">
                                Custom Search
                            </div>
                        </div>
                    </div>
                </div>                            <div class="col-md-12 col-lg-12 col-sm-6 col-xs-6 margin-top-15 col-xs-6">
                    <div class="text-center bg-ash border-radius-top-5 padding-top-bottom-6">Social Plugins</div>

                    <div class="text-center bg-ash-light border-radius-5 margin-bottom-20">
                        <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fbdtradeinfo&amp;width=96&amp;height=300&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=true&amp;header=false" class="ifrm_fb2"></iframe>
                    </div>
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


 @endsection
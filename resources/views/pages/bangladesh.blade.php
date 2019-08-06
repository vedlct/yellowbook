@extends('main')

@section('content')


<!--top address bar-->
<div class="margin-bottom-10 padding-top-bottom-10 bg-green" style="background-color: #F2EBD3;"> <!--matri #ff6666   tuition #D8D8FA  Bangladesh  #009900   travel #ffcccc  biz #cccccc  yp  #FFBA53-->
    <div class="container">
        <div class="col-md-2 col-sm-3 border-right title address-bar">Bangladesh Profile</div>
        <div class="col-md-10 col-sm-9 padding-top-6">
            <a href="../index.html"><i class="glyphicon glyphicon-home"></i></a>
            <span class="text-small">></span>
            <a href="index.html">Bangladesh</a>
            <span class="text-small">></span>
            Introduction                </div>
    </div>
    <div class="clearfix"></div>
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
                        <h4 style="color: #FD9F5B;">Know Bangladesh</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">
                        <a href="javascript:void(0);" class="icon margin-top-7-minus" onclick="myFunction1()" style="text-align: center; background-color: #f2f2f2;">Explore Bangladesh &nbsp; <h2>&#9776;</h2></a>
                        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="#">Explore Bangladesh</a>

                        <a href="index.html">Introduction</a>
                        <a href="bd_basic.html">Basic Information</a>
                        <a href="n_anthem.html">National Anthem</a>
                        <a href="bd_icons.html">National Icons</a>
                        <a href="national_days.html">National Days</a>
                        <a href="bd_history.html">History</a>
                        <a href="bd_geography.html">Geography</a>
                        <a href="bd_economy.html">Economy</a>
                        <a href="bd_gov.html">Government</a>
                        <a href="bd_people.html">People</a>
                        <a href="city_distance.html">Inter City Distance</a>
                        <a href="post_code.html">Post Codes</a>
                        <a href="bd_district.html">District List</a>
                        <a href="bdmap.html">Country Map</a>
                        <a href="dhakamap.html">Dhaka City Map</a>
                        <a href="ctgmap.html">Chittagong Map</a>
                        <a href="khulnamap.html">Khulna Map</a>
                        <a href="rajmap.html">Rajshahi Map</a>
                        <a href="barisalmap.html">Barisal Map</a>
                        <a href="rangpurmap.html">Rangpur Map</a>
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
                            <h1 style="color: #459E5B;">Introduction</h1>
                        </div>
                        <div class="main_content2">
                            <p>
                                <img src="{{url('public')}}/images/map.gif" alt="Bangladesh in World Map" title="Bangladesh in World Map" class="float-right border-gray img-responsive">Bangladesh emerged as an independent and sovereign country in 1971 following a nine month war of liberation. It is one of the largest deltas of the world with a total area of 147,570 sq. km. With a unique communal harmony, Bangladesh has a population of about 152.51 million, making it one of the densely populated countries of the world. The majority (over 88%) of the people are Muslim. Over 98% of the people speak in Bangla. English, however, is widely spoken. The country is covered with a network of rivers and canals forming a maze of interconnecting channels. It is mostly surrounded by Indian Territory except for small strip in the southeast by Myanmar and south by Bay of Bengal. Being an active partner, Bangladesh plays vital role in the international and regional forum, particularly in the UN, Commonwealth and South Asian Association of Regional Cooperation (SAARC).
                            </p>
                            <p>
                                <img src="{{url('public')}}/images/bd_flag.jpg" alt="National Flag of Bangladesh" title="National Flag of Bangladesh" class="float-right border-gray img-responsive">Most of its area is relatively flat lying. The only significant uplands are in the northeast and southeast of the country. Bangladesh has a tropical monsoon climate marked by sweltering temperatures and high humidity.
                            </p>
                            <p>
                                The Union Council is the lowest administrative unit. Each Union comprises about 20,000 inhabitants. Generally 7-10 Union cluster into a Thana (Police Station). Several Thanas form a District. There are about 560 thanas and 64 districts in Bangladesh.
                            </p>
                            <p>
                                Bangladesh has an agrarian economy. Jute and rice are the main cash crops. Other crops are tea, sugarcane, oilseeds, fruits, spices, vegetables, wheat, potatoes, tobacco and cotton. The major industries are jute processing, cotton, garments, steel and pharmaceutical.
                            </p>
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
                <div class="col-md-12 col-lg-12 col-sm-6 col-xs-6 margin-top-15 col-xs-6">
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
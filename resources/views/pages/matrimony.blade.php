@extends('main')

@section('content')


<!--top address bar-->
<div class="margin-bottom-10 padding-top-bottom-10 bg-pink"> <!--matri #ff6666   tuition #D8D8FA  Bangladesh  #009900   travel #ffcccc  biz #cccccc  yp  #FFBA53-->
    <div class="container">
        <div class="col-md-2 col-sm-3 border-right title address-bar">Matrimony Profiles</div>
        <div class="col-md-10 col-sm-9 padding-top-6">
            <a href="../index.html"><i class="glyphicon glyphicon-home"></i></a>
            <span class="text-small">></span>
            <a href="index.html">Matrimony</a>
            <span class="text-small">></span>
            Home                </div>
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
                        <h4>Common Links</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">
                        <a href="javascript:void(0);" class="icon margin-top-7-minus" onclick="myFunction1()" style="text-align: center; background-color: #f2f2f2;">Get Your Life Partner &nbsp; <h2>&#9776;</h2></a>
                        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="#">Get Your Life Partner</a>


                        <a href="index.html">Matrimony Home</a>
                        <a href="featured_profile.html">Featured Profile</a>
                        <a href="view_bride.html">View Bride</a>
                        <a href="view_bridegroom.html">View Bridegroom</a>
                        <a href="add1.html">Submit Profile  <img src="{{url('public')}}/images/free.gif" width="35" height="20" alt="Free" title="Free"></a>
                        <a href="terms.html">Terms & Condition</a>
                        <a href="login.html">Login Here</a>
                        <a href="../yellowpages/des_dataa7ec.html?subcategory_id=506" target="_blank">Community Center</a>
                        <a href="../yellowpages/des_data1ffa.html?subcategory_id=891" target="_blank">Wedding Planner</a>
                        <a href="../yellowpages/des_datab5b5.html?subcategory_id=992" target="_blank">Catering</a>
                        <a href="../yellowpages/des_data64e3.html?subcategory_id=680" target="_blank">Wedding Photography</a>
                        <a href="../yellowpages/des_data30d2.html?subcategory_id=714" target="_blank">Shopping</a>
                        <a href="../yellowpages/des_data67d5.html?subcategory_id=164" target="_blank">Beauty Parlour</a>

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
                        <a href="../yellowpages/goadurl764a.html?idn=298" target="_blank"><img src="{{url('public')}}/saimg/ad-108x60px-single.gif" class="img-classic-mini" alt="T-Series Solutions" title="T-Series Solutions"></a>

                    </div>                        </div>
                <div class="row" >
                    <div class="col-md-12 col-xs-12 div_style3">
                        <div class="col-md-12 col-xs-12 mainbody-grid div_style4">
                            <h1>Welcome to Info Matrimony</h1>
                        </div>

                        <div class="title1 margin-bottom-20"><h4>Quick Search : </h4></div>
                        <form class="form-inline" role="form" name="form1" id="form1" action="https://www.bdtradeinfo.com/matrimony/quick_search.php"method="post" enctype="multipart/form-data">
                            <div class="form-group border-gray border-radius-5 padding-6">
                                <label class="control-label col-md-1" for="l_name">Find</label>
                                <div class="col-md-3">
                                    <select class="form-control" name="bride" id="bride">
                                        <option value="Female" selected>Bride</option>
                                        <option value="Male">Bridegroom</option>

                                    </select><br/>
                                </div>

                                <label class="control-label col-md-1" for="l_name">Age</label>
                                <div class="col-md-1">
                                    <select class="form-control" name="age1" id="age1">
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        <option value="36">36</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                        <option value="45">45</option>
                                        <option value="46">46</option>
                                        <option value="47">47</option>
                                        <option value="48">48</option>
                                        <option value="49">49</option>
                                        <option value="50">50</option>
                                        <option value="51">51</option>
                                        <option value="52">52</option>
                                        <option value="53">53</option>
                                        <option value="54">54</option>
                                        <option value="55">55</option>
                                        <option value="56">56</option>
                                        <option value="57">57</option>
                                        <option value="58">58</option>
                                        <option value="59">59</option>
                                        <option value="60">60</option>
                                    </select><br/>
                                </div>

                                <div class="col-md-2">
                                    <select class="form-control" name="age2" id="age2">
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        <option value="36">36</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                        <option value="45">45</option>
                                        <option value="46">46</option>
                                        <option value="47">47</option>
                                        <option value="48">48</option>
                                        <option value="49">49</option>
                                        <option value="50">50</option>
                                        <option value="51">51</option>
                                        <option value="52">52</option>
                                        <option value="53">53</option>
                                        <option value="54">54</option>
                                        <option value="55">55</option>
                                        <option value="56">56</option>
                                        <option value="57">57</option>
                                        <option value="58">58</option>
                                        <option value="59">59</option>
                                        <option value="60">60</option>
                                    </select><br/>
                                </div>

                                <!--            <label class="control-label col-md-1" for="l_name">Religion</label>-->
                                <div class="col-md-2">
                                    <select class="form-control" name="religion" id="religion">
                                        <option value="Muslim" selected>Muslim</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Christian" >Christian</option>
                                        <option value="Buddhist">Buddhist</option>
                                        <option value="Others" >Others</option>
                                    </select><br/>
                                </div>
                                <div class="col-md-offset-0 col-md-1">
                                    <input type="submit" name="Add4" id="Add4" class="btn btn-info" value="Search">
                                </div>
                            </div>
                        </form>
                        <div class="col-md-12 col-xs-12 text-center border-gray border-radius-5 padding-6 margin-top-20 margin-bottom-20 bg-purple">
                            <strong>Featured Profile</strong>
                        </div>
                        <div class="table1">
                            <table>
                                <tr>
                                    <td>
                                        <a href="detail_profile_member1b225.html?idn=11691" class="nav5txt" >
                                            <img src="300S.jpg" width="85" alt="No Image Found" title="No Image Found" class="matriImg">
                                        </a>
                                    </td>
                                    <td>
                                        <span class="sub_ttl">Profile ID: 11691 &nbsp;</span>&nbsp;&nbsp;&nbsp;  Updated on: <span class="oswald_meroon1">2015-04-08 &nbsp;</span>&nbsp;&nbsp;&nbsp; <A href="detail_profile_member1b225.html?idn=11691" class="nav5txt" >View Details</a>&nbsp;&nbsp;&nbsp;&nbsp;<span class="text_blue">
                                                <!--Profile Viewed--></span><span class="mega_title_blue"> </span><span class="text_blue"> <!--times--></span><br/>
                                        <br/>
                                        <span class="oswald_black1">anisul islam </span>|| <span class="sub_ttl"> Male</span><br/>
                                        27 years, &nbsp; 5 ft 8 in, &nbsp; 48 Kg, &nbsp; 105.6 Lbs <br/>
                                        <br/>
                                        B.Sc., textile engineer <br/>
                                    </td>
                                </tr>
                            </table>
                            <br/>
                        </div>
                        <div class="table1">
                            <table>
                                <tr>
                                    <td>
                                        <a href="detail_profile_member151ba.html?idn=11642" class="nav5txt" >
                                            <img src="300S.jpg" width="85" alt="No Image Found" title="No Image Found" class="matriImg">
                                        </a>
                                    </td>
                                    <td>
                                        <span class="sub_ttl">Profile ID: 11642 &nbsp;</span>&nbsp;&nbsp;&nbsp;  Updated on: <span class="oswald_meroon1">2017-01-12 &nbsp;</span>&nbsp;&nbsp;&nbsp; <A href="detail_profile_member151ba.html?idn=11642" class="nav5txt" >View Details</a>&nbsp;&nbsp;&nbsp;&nbsp;<span class="text_blue">
                                                <!--Profile Viewed--></span><span class="mega_title_blue"> </span><span class="text_blue"> <!--times--></span><br/>
                                        <br/>
                                        <span class="oswald_black1">Rajib Rana </span>|| <span class="sub_ttl"> Male</span><br/>
                                        29 years, &nbsp; 5 ft 4 in, &nbsp; 58 Kg, &nbsp; 127.6 Lbs <br/>
                                        <br/>
                                        MBA, Manager <br/>
                                    </td>
                                </tr>
                            </table>
                            <br/>
                        </div>
                        <div class="table1">
                            <table>
                                <tr>
                                    <td>
                                        <a href="detail_profile_member14376.html?idn=11641" class="nav5txt" >
                                            <img src="{{url('public')}}images/large9180.jpg" width="85" alt="Picture of Ijavil hossain" title="Picture of Ijavil hossain" class="matriImg">
                                        </a>
                                    </td>
                                    <td>
                                        <span class="sub_ttl">Profile ID: 11641 &nbsp;</span>&nbsp;&nbsp;&nbsp;  Updated on: <span class="oswald_meroon1">2017-01-12 &nbsp;</span>&nbsp;&nbsp;&nbsp; <A href="detail_profile_member14376.html?idn=11641" class="nav5txt" >View Details</a>&nbsp;&nbsp;&nbsp;&nbsp;<span class="text_blue">
                                                <!--Profile Viewed--></span><span class="mega_title_blue"> </span><span class="text_blue"> <!--times--></span><br/>
                                        <br/>
                                        <span class="oswald_black1">Ijavil hossain </span>|| <span class="sub_ttl"> Male</span><br/>
                                        27 years, &nbsp; 5 ft 11 in, &nbsp; 75 Kg, &nbsp; 165 Lbs <br/>
                                        <br/>
                                        Graduate, business <br/>
                                    </td>
                                </tr>
                            </table>
                            <br/>
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
                    <a href="../yellowpages/goadurl0660.html?idn=23" target="_blank"><img src="{{url('public')}}/saimg/ad_ts_right.gif" class="img-panel" alt="Promote your products" title="Promote your products"></a>
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

                <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 text-center margin-top-bottom-10">
                    <a href="../yellowpages/goadurl4a37.html?idn=359" target="_blank"><img src="{{url('public')}}/saimg/ad_little_brige.jpg" class="img-panel" alt="Stop Child Marriage" title="Stop Child Marriage"></a>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 text-center margin-top-bottom-10">
                    <a href="../yellowpages/goadurl31e8.html?idn=" target="_blank"><img src="{{url('public')}}/saimg/ad_ts_right.gif" class="img-panel" alt="Advertise with bdtradeinfo.com" title="Advertise with bdtradeinfo.com"></a>
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
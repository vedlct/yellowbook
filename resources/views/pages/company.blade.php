@extends('main')

@section('content')




<!--top address bar-->
<div class="margin-bottom-10 padding-top-bottom-10 bg-skyblue" style="background-color: #FFFFFF;"> <!--matri #ff6666   tuition #D8D8FA  Bangladesh  #009900   travel #ffcccc  biz #cccccc  yp  #FFBA53-->
    <div class="container" style="background-color: #F2EBD3;padding-top: 10px;padding-bottom: 10px;">
        <div class="col-md-2 col-sm-3 border-right title address-bar">General info </div>
        <div class="col-md-10 col-sm-9 padding-top-6">
            <a href="../index.html"><i class="glyphicon glyphicon-home"></i></a>
            <span class="text-small">></span>
            General
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
                        <h4 style="color: #FD9F5B;">General Menu</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">
                        <a href="javascript:void(0);" class="icon margin-top-7-minus" onclick="myFunction1()" style="text-align: center;">General & Service Info &nbsp; <h2>&#9776;</h2></a>
                        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="#">General & Service Info</a>

                        <a href="../tseries/index.html" target="_blank">About Us</a>
                        <a href="services.html">Services</a>
                        <a href="contact.html">Contact Us</a>
                        <a href="feedback.html">Feedback</a>
                        <a href="privacy_policy.html">Privacy Policy</a>
                        <a href="terms_use.html">Terms of use</a>
                        <a href="partners.html">Partner</a>
                        <a href="sitemap.html">Site Map</a>

                        <a href="#">
                            <div class="width-100 bg-ash2 padding-6 border-radius-top-5 margin-top-15 text-center">
                                <h4 style="color: #FD9F5B;">Our Services</h4>
                            </div>
                        </a>

                        <a href="classified.html">Classified Listing</a>
                        <a href="adwithus.html">Advertisement</a>
                        <a href="software.html">Software</a>
                        <a href="web_development.html">Web Development</a>
                        <a href="domain_registration.html">Domain Registration</a>
                        <a href="web_hosting.html">Web Hosting</a>
                        <a href="mobile_app.html">Mobile Apps</a>
                        <a href="google_ad.html">Google Ad & Services</a>
                        <a href="facebook.html">Facebook Boosting</a>
                        <a href="logo_design.html">Logo Design</a>

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
                        <a href="../yellowpages/goadurlf825.html?idn=231" target="_blank"><img src="{{url('public')}}/saimg/ad_psebdC.gif" class="img-classic" alt="Power Solution Engineering" title="Power Solution Engineering"></a>
                    </div>
                    <div class="ad-classic-mini margin-top-10 margin-bottom-10 text-right">
                        <a href="../yellowpages/goadurl764a.html?idn=298" target="_blank"><img src="{{url('public')}}/saimg/ad-108x60px-single.gif" class="img-classic-mini" alt="T-Series Solutions" title="T-Series Solutions"></a>

                    </div>                        </div>
                <div class="row" >
                    <div class="col-md-12 col-xs-12 div_style3">
                        <div class="col-md-12 col-xs-12 mainbody-grid div_style4">
                            <h1 style="color: #459E5B;">Classified Listing  (Silver Member)</h1>
                        </div>
                        <div class="main_content2">
                            <div><span class="sub_ttl_blue">For classified Listing we charge as follows </span><br/><br/>
                                <ol class="oswald_black">
                                    <li>For <span class="oswald_meroon">priority listing</span> under an appropriate Category in fixed position 1-15: <br/><span class="oswald_meroon">Tk 1,500/-</span> per year<br/>&nbsp;</li>
                                    <li>For <span class="oswald_meroon">general listing</span> under an appropriate Category in any position of any page: <br/><span class="oswald_meroon">Tk 1,000/-</span> per year</li>
                                </ol>
                                <span class="oswald_black">
                                            If You are interested, please submit the form with complete information and send money in Cash or by Cheque or Bank Deposite or BKcash or Rocket or Nogod.<br/><br/>
                                        </span>
                            </div>


                            <form class="form-horizontal" name="form2" id="form2" method="post" action="{{route('company.insert')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <table class="table-responsive table-bordered">
                                    <tr>
                                        <td class="text-right">Organization:<span class="sub_ttl_yellow">*</span> </td>
                                        <td class="text-left">
                                            <input class="form-control" type="text" name="companyName" id="organization" value="" required="">
                                            {{--Ex: T-Series Solutions--}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">Category:<span class="sub_ttl_yellow">*</span> </td>
                                        <td class="text-left">
                                            {{--<input class="form-control" type="text" name="category" id="trade_cata" value="" required="">--}}
                                            <select class="form-control" name="category" id="wanted" required="">
                                                <option value="Tutor">Tuition</option>
                                                <option value="Tuition">Tutor</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">Address:<span class="sub_ttl_yellow">*</span> </td>
                                        <td class="text-left">
                                            <input class="form-control" type="text" name="address" id="address" value="" required="">
                                            {{--Ex: Rose View Plaza (7th floor), 185 Elephant Road, Hatirpool--}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">City:<span class="sub_ttl_yellow">*</span> </td>
                                        <td class="text-left">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input class="form-control" type="text" name="city" id="city" value="" required="">
                                                </div>
                                                <div class="col-md-5">Ex: Dhaka-1205</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">Country:<span class="sub_ttl_yellow">*</span> </td>
                                        <td class="text-left">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input class="form-control" type="text" name="country" id="country" value="" required="">
                                                </div>
                                                <div class="col-md-5">Ex: Bangladesh</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">Telephone:<span class="sub_ttl_yellow">*</span> </td>
                                        <td class="text-left">
                                            <input class="form-control" type="text" name="telephone" id="telephone" value="" required="">
                                            {{--Ex: 880-2-9676369, 9667598--}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"> Fax: </td>
                                        <td class="text-left">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input class="form-control" type="text" name="fax" id="fax" value="">
                                                </div>
                                                <div class="col-md-5">Ex: 880-2-9667598</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"> E-mail:<span class="sub_ttl_yellow">*</span> </td>
                                        <td class="text-left">
                                            <input class="form-control" type="email" name="email" id="email" value="" required="">
                                            {{--Ex: info@bdtradeinfo.com--}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">Website: </td>
                                        <td class="text-left">
                                            <input class="form-control" type="url" name="website" id="web_address" value="">
                                            Ex: http://www.bdtradeinfo.com
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">Facebook Page: </td>
                                        <td class="text-left">
                                            <input class="form-control" type="url" name="facebookPage" id="facebook" value="">
                                            Ex: http://www.bdtradeinfo.com
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">Contact person:<span class="sub_ttl_yellow">*</span> </td>
                                        <td class="text-left">
                                            <input class="form-control" type="number" name="phone" id="contact_person" value="" required="">
                                            Ex: Mr. Asim Tarafder
                                        </td>
                                    </tr>
                                    {{--<tr>--}}
                                        {{--<td class="text-right">Key words: </td>--}}
                                        {{--<td class="text-left">--}}

                                            {{--<textarea class="form-control" name="keywords" id="keywords" onKeyDown="textCounter(document.form2.keywords,document.form2.remLen1,255)"--}}
                                                      {{--onKeyUp="textCounter(document.form2.keywords,document.form2.remLen1,255)">                                            </textarea>--}}
                                            {{--<br/>--}}
                                            {{--<div class="col-md-2 col-sm-2 col-xs-5">--}}
                                                {{--<input class="form-control" readonly type="text" name="remLen1" size="3" maxlength="3" value="255">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-md-3 col-sm-3 col-xs-7">--}}
                                                {{--<span class="text_darkgray1">characters left </span>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-md-7 col-sm-7 col-xs-12">--}}
                                                {{--Ex: Website, Software, Web based software, Domain, Hosting, Out Sourcing... <br/>--}}
                                                {{--<span class="text-orange">[NOT OVER 255 CHARECTERS] </span></div> </td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td class="text-right">Security Code :<span class="sub_ttl_yellow">*</span></td>--}}
                                        {{--<td class="text-left">--}}
                                            {{--<div class="col-md-2 col-sm-3 col-xs-5 text-center">--}}
                                                {{--<b>5 + 7 =</b>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-md-2 col-sm-3 col-xs-7">--}}
                                                {{--<input class="form-control" name="ran" type="text" id="ran" size="2" required="">--}}
                                            {{--</div>--}}
                                            {{--[ Example: 6 + 11 = 17 ]<br/>--}}
                                            {{--<em class="text_blue">just write the result of addition of two numbers </em></td>--}}
                                    {{--</tr>--}}
                                    <tr>
                                        <td colspan="2" class="text-center">
                                            {{--<div>--}}
                                                {{--<input name="ran1" type="hidden" id="ran1" value="5">--}}
                                                {{--<input name="ran2" type="hidden" id="ran2" value="7">--}}
                                                {{--<input type="hidden" name="fid" id="fid" value="CL">--}}
                                                <input type="submit" class="btn btn-info" value="SUBMIT">
                                                {{--<input type="reset" class="btn btn-warning" value="Reset" name="B2">--}}
                                            {{--</div>--}}
                                            <div class="text-center"><span class="text1"><br/><em>* Rates may be changed at anytime without prior notice</em></span></div>
                                        </td>
                                    </tr>
                                </table>
                            </form>
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
                    <a href="../yellowpages/goadurld5f8.html?idn=663" target="_blank"><img src="{{url('public')}}/saimg/ad_clean%26safegn.gif" class="img-panel" alt="Clean & Safe Services Ltd." title="Clean & Safe Services Ltd."></a>
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
                    <a href="../yellowpages/goadurl25cc.html?idn=22" target="_blank"><img src="{{url('public')}}/saimg/ad_ts_142x100.jpg" class="img-panel" alt="T-Series Solutions - Website, Software, Domain, Hosting" title="T-Series Solutions - Website, Software, Domain, Hosting"></a>
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
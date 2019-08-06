@extends('main')

@section('content')
    <!-- alphabets -->

    <div id="div-mobile">
        <div class="icon-bar margin-top-40-minus">
            <img src="{{url('public')}}/images/icon_yp_menu_btn.png" alt="Yellow Pages Menu" title="Yellow Pages Menu" id="myBtn" onclick="myFunction1()">
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="padding-top-15 padding-bottom-5 bg-lightsky" style="background-color: #F2EBD3;">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-2 col-md-offset-0 col-sm-5 col-sm-offset-1 col-xs-10 col-xs-offset-1 border-radius-10 padding-bottom-5 text-center bg-yellow margin-bottom-10" style="background-color: #F2EBD3;">
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
                                        <input name="search" type="text" id="search" class="searchbox" placeholder="Location" value="" required=""/>
                                        </div>
                                        <div class="col-md-6">
                                            <input name="search" type="text" id="search" class="searchbox" placeholder="Keyword" value="" required=""/>
                                        </div>
                                            <input name="submit" class="btn btn-info" type="submit" style="background-color: #62AD74;" value="Go">
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
                <div class="row" style="background-color: #F2EBD3;">

                    <div class="col-md-2 col-md-offset-0 col-sm-5 col-sm-offset-1 col-xs-10 col-xs-offset-1 border-radius-10 padding-bottom-5 text-center bg-yellow margin-bottom-10" id="header" style="background-color: #F2EBD3;margin-top: 1%;">
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

                            <form action="https://www.bdtradeinfo.com/yellowpages/search.php" method="post" enctype="multipart/form-data" name="form9" id="form9" onSubmit="return searchForm();">
                                <div class="col-md-12" id="search-bar" style="margin-top: 1%;">
                                <div class="col-md-5">
                                <input name="search" type="text" id="search" class="searchbox" placeholder="Location" value=""  required=""/>
                                </div>
                                <div class="col-md-5" id="search-bar">
                                    <input name="search"  type="text" id="search" class="searchbox" placeholder="Keyword" value="" style="margin-left: -28%;" required=""/>
                                </div>
                                <input name="submit" class="btn btn-info" type="submit"  style="margin-left: -22%;background-color: #62AD74;"  value="Go">
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
                        <a href="yellowpages/goadurl23a3.html?idn=196" target="_blank"><img src="{{url('public')}}/saimg/ad_resgroup.gif" alt="RES Group" title="RES Group" class="img-left-hp1"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="yellowpages/goadurlb33d.html?idn=558" target="_blank"><img src="{{url('public')}}/saimg/ad_allsolution.gif" alt="All Solution" title="All Solution" class="img-left-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="yellowpages/goadurl2381.html?idn=484" target="_blank"><img src="{{url('public')}}/saimg/ad_itts.gif" alt="International Trade Transaction Solution" title="International Trade Transaction Solution" class="img-left-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="yellowpages/goadurl79e4.html?idn=51" target="_blank"><img src="{{url('public')}}/saimg/ad_alam_hp.gif" alt="Alam Fiber Impex" title="Alam Fiber Impex" class="img-left-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="yellowpages/goadurl961c.html?idn=580" target="_blank"><img src="{{url('public')}}/saimg/ad_waogroup.gif" alt="Wao Group" title="Wao Group" class="img-left-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="yellowpages/goadurldc84.html?idn=511" target="_blank"><img src="{{url('public')}}/saimg/ad_astonafa_ac.gif" alt="Astonafa Air Conditioner" title="Astonafa Air Conditioner" class="img-left-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="yellowpages/goadurld46d.html?idn=515" target="_blank"><img src="{{url('public')}}/saimg/ad_beatific.gif" alt="BEATiFiC Brand Management (BBM)" title="BEATiFiC Brand Management (BBM)" class="img-left-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="yellowpages/goadurlfb58.html?idn=250" target="_blank"><img src="{{url('public')}}/saimg/ad_gyangriho.gif" alt="Gyangriha Prokashoni" title="Gyangriha Prokashoni" class="img-left-hp"></a>
                    </div>

                    <div class="clearfix"></div>
                    <!--ad left-->

                </div>
            </div>

            <div class="col-md-8">
                <div class="row margin-top-10">
                    <!--ad classic & classic mini-->
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 margin-bottom-7">
                        <a href="http://www.royalinspectionbd.net/" target="_blank"><img src="{{url('public')}}/saimg/ad_royal.gif" alt="Royal Inspection International Ltd." title="Royal Inspection International Ltd." class="img-classic-hp"></a>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-right margin-bottom-7">
                        <a href="yellowpages/goadurl9070.html?idn=469" target="_blank"><img src="{{url('public')}}/saimg/ad_tigerpestcontrol_homeclassic.gif" alt="Tiger Pest Control Co." title="Tiger Pest Control Co." class="img-classic-hp2"></a>
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
                                <h1 style="color: #48A05D;">Browse Categories</h1>
                            </div>
                            <div class="alphabet">
                                <a href="yellowpages/alpha_subcat9ba6.html?alphabet_id=A" >A</a>
                                <a href="yellowpages/alpha_subcat4587.html?alphabet_id=B" >B</a>
                                <a href="yellowpages/alpha_subcatb439.html?alphabet_id=C" >C</a>
                                <a href="yellowpages/alpha_subcat82f1.html?alphabet_id=D" >D</a>
                                <a href="yellowpages/alpha_subcat8d59.html?alphabet_id=E" >E</a>
                                <a href="yellowpages/alpha_subcat7dc3.html?alphabet_id=F" >F</a>
                                <a href="yellowpages/alpha_subcat8545.html?alphabet_id=G" >G</a>
                                <a href="yellowpages/alpha_subcat9d44.html?alphabet_id=H" >H</a>
                                <a href="yellowpages/alpha_subcatd243.html?alphabet_id=I" >I</a>
                                <a href="yellowpages/alpha_subcat499b.html?alphabet_id=J" >J</a>
                                <a href="yellowpages/alpha_subcat45ce.html?alphabet_id=K" >K</a>
                                <a href="yellowpages/alpha_subcatb23b.html?alphabet_id=L" >L</a>
                                <a href="yellowpages/alpha_subcat80f0.html?alphabet_id=M" >M</a>
                                <a href="yellowpages/alpha_subcat574f.html?alphabet_id=N" >N</a>
                                <a href="yellowpages/alpha_subcatec63.html?alphabet_id=O" >O</a>
                                <a href="yellowpages/alpha_subcat38fb.html?alphabet_id=P" >P</a>
                                <a href="yellowpages/alpha_subcat0400.html?alphabet_id=Q" >Q</a>
                                <a href="yellowpages/alpha_subcate21b.html?alphabet_id=R" >R</a>
                                <a href="yellowpages/alpha_subcat8920.html?alphabet_id=S" >S</a>
                                <a href="yellowpages/alpha_subcat73dc.html?alphabet_id=T" >T</a>
                                <a href="yellowpages/alpha_subcate629.html?alphabet_id=U" >U</a>
                                <a href="yellowpages/alpha_subcat0f68.html?alphabet_id=V" >V</a>
                                <a href="yellowpages/alpha_subcat6298.html?alphabet_id=W" >W</a>
                                <a href="yellowpages/alpha_subcatee3f.html?alphabet_id=X" >X</a>
                                <a href="yellowpages/alpha_subcatc424.html?alphabet_id=Y" >Y</a>
                                <a href="yellowpages/alpha_subcatcc65.html?alphabet_id=Z" >Z</a>
                            </div>
                        </div>

                        <div class="col-md-10 col-sm-12 col-xs-12 div_style3h padding-bottom-5">
                            <div class="col-md-12 col-xs-12 div_style4h">
                                <h1 style="color: #48A05D;">Top Categories</h1>
                            </div>
                            <!--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">-->
                            @foreach($top_category as $top_category)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 seg2 padding-top-bottom-5">
                                <img src="{{url('public')}}/images/icon_pest.png" alt="ps" title="ps"> <a href="yellowpages/des_datab683.html?subcategory_id=497" class="text-light text-medium">{{$top_category->categoryName}}</a>
                            </div>
                            @endforeach
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin-top: -18%;">
                            <div class="row">

                                <!--ad right-->
                                <div class="col-lg-12 col-md-12 col-sm-2 col-xs-4 text-center margin-top-bottom-10">
                                    <a href="yellowpages/goadurl19df.html?idn=544" target="_blank"><img src="{{url('public')}}/saimg/ad_gcnc.gif" alt="Gulshan Clean and Care" title="Gulshan Clean and Care" class="img-midright-hp"></a>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-2 col-xs-4 text-center margin-top-bottom-10">
                                    <a href="yellowpages/goadurlac0c.html?idn=403" target="_blank"><img src="{{url('public')}}/saimg/ad_aquapurebd.gif" alt="Aqua Pure Technology Ltd." title="Aqua Pure Technology Ltd." class="img-midright-hp"></a>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-2 col-xs-4 text-center margin-top-bottom-10">
                                    <a href="yellowpages/goadurlada9.html?idn=514" target="_blank"><img src="{{url('public')}}/saimg/ad_meemwater.gif" alt="Meem Water Technology" title="Meem Water Technology" class="img-midright-hp"></a>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-2 col-xs-4 text-center margin-top-bottom-10">
                                    <a href="yellowpages/goadurlda23.html?idn=440" target="_blank"><img src="{{url('public')}}/saimg/ad_waterworld.gif" alt="Water World Engineering" title="Water World Engineering" class="img-midright-hp"></a>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-2 col-xs-4 text-center margin-top-bottom-10">
                                    <a href="yellowpages/goadurlda23.html?idn=440" target="_blank"><img src="{{url('public')}}/saimg/ad_waterworld.gif" alt="Water World Engineering" title="Water World Engineering" class="img-midright-hp"></a>
                                </div>
                                <div class="clearfix"></div>
                                <!--ad right-->
                            </div>
                        </div>
                    </div>

                    {{--<div class="row" >--}}
                        {{--<div class="col-md-10 col-xs-12 div_style3h padding-bottom-10">--}}
                            {{--<div class="col-md-12 col-xs-12 div_style4h">--}}
                                {{--<h1>Top Business Categories</h1>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">--}}
                                {{--<div class="seg">--}}
                                    {{--<a href="yellowpages/subcat9738.html?category_id=4" class="text-darkblue text-bold">Beauty & Fitness</a><br/>--}}
                                    {{--<a href="yellowpages/des_data67d5.html?subcategory_id=164" class="text-light text-small">Parlour</a>,--}}
                                    {{--<a href="yellowpages/des_data9c79.html?subcategory_id=706" class="text-light text-small">Gym</a>,--}}
                                    {{--<a href="yellowpages/des_dataa6f7.html?subcategory_id=166" class="text-light text-small">Hair Treat</a>,--}}
                                    {{--<a href="yellowpages/des_dataf52f.html?subcategory_id=709" class="text-light text-small">Swimming</a>--}}
                                    {{--<a href="yellowpages/subcat9738.html?category_id=4" class="text-light text-small"> ...</a>--}}
                                {{--</div>--}}
                                {{--<div class="seg">--}}
                                    {{--<a href="yellowpages/subcat4586.html?category_id=20" class="text-darkblue text-bold">Health & Medicine</a><br/>--}}
                                    {{--<a href="yellowpages/des_data45ee.html?subcategory_id=492" class="text-light text-small">Hospital</a>,--}}
                                    {{--<a href="yellowpages/des_data805f.html?subcategory_id=495" class="text-light text-small">Medicine</a>,--}}
                                    {{--<a href="yellowpages/des_data2ab9.html?subcategory_id=471" class="text-light text-small">Dentist</a>,--}}
                                    {{--<a href="yellowpages/des_datac5e7.html?subcategory_id=995" class="text-light text-small">Home Nurse</a>--}}
                                    {{--<a href="yellowpages/subcat4586.html?category_id=20" class="text-light text-small"> ...</a>--}}
                                {{--</div>--}}
                                {{--<div class="seg">--}}
                                    {{--<a href="yellowpages/subcat830e.html?category_id=25" class="text-darkblue text-bold">News & Media</a><br/>--}}
                                    {{--<a href="yellowpages/des_data5e09.html?subcategory_id=848" class="text-light text-small">TV</a>,--}}
                                    {{--<a href="yellowpages/des_data04cf.html?subcategory_id=662" class="text-light text-small">News papers</a>,--}}
                                    {{--<a href="yellowpages/des_data3a3e.html?subcategory_id=658" class="text-light text-small"> News Agency</a>--}}
                                    {{--<a href="yellowpages/subcat3bed.html?category_id=28" class="text-light text-small"> ...</a>--}}
                                {{--</div>--}}
                                {{--<div class="seg">--}}
                                    {{--<a href="yellowpages/subcate9fc.html?category_id=13" class="text-darkblue text-bold">Education & Career</a><br/>--}}
                                    {{--<a href="yellowpages/des_dataef5a.html?subcategory_id=339" class="text-light text-small"> School</a>,--}}
                                    {{--<a href="yellowpages/des_data13a9.html?subcategory_id=329" class="text-light text-small">College</a>,--}}
                                    {{--<a href="yellowpages/des_datab344.html?subcategory_id=333" class="text-light text-small"> Education Service</a>--}}
                                    {{--<a href="yellowpages/subcate9fc.html?category_id=13" class="text-light text-small"> ...</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">--}}
                                {{--<div class="seg">--}}
                                    {{--<a href="yellowpages/subcate475.html?category_id=18" class="text-darkblue text-bold">Garments &amp; Accessories</a><br/>--}}
                                    {{--<a href="yellowpages/des_data0350.html?subcategory_id=420" class="text-light text-small">Garments</a>,--}}
                                    {{--<a href="yellowpages/des_datae115.html?subcategory_id=416" class="text-light text-small">Buying House</a>,--}}
                                    {{--<a href="yellowpages/des_data0723.html?subcategory_id=421" class="text-light text-small"> Knit</a>,--}}
                                    {{--<a href="yellowpages/des_data77ea.html?subcategory_id=429" class="text-light text-small">Sweater</a>--}}
                                    {{--<a href="yellowpages/subcate475.html?category_id=18" class="text-light text-small"> ...</a>--}}
                                {{--</div>--}}
                                {{--<div class="seg">--}}
                                    {{--<a href="yellowpages/subcatc9f0.html?category_id=19" class="text-darkblue text-bold">Hardware & Metal</a><br/>--}}
                                    {{--<a href="yellowpages/des_datacb1a.html?subcategory_id=448" class="text-light text-small">Hardware</a>,--}}
                                    {{--<a href="yellowpages/des_data71ac.html?subcategory_id=924" class="text-light text-small">Steel Pipe</a>,--}}
                                    {{--<a href="yellowpages/des_dataa52b.html?subcategory_id=232" class="text-light text-small">Paint</a>,--}}
                                    {{--<a href="yellowpages/des_datae907.html?subcategory_id=936" class="text-light text-small">RCC Pipe</a>,--}}
                                    {{--<a href="yellowpages/subcatc9f0.html?category_id=19" class="text-light text-small"> ...</a>--}}
                                {{--</div>--}}
                                {{--<div class="seg">--}}
                                    {{--<a href="yellowpages/subcat8e09.html?category_id=9" class="text-darkblue text-bold">Community & Orgs</a><br/>--}}
                                    {{--<a href="yellowpages/des_datad9e7.html?subcategory_id=245" class="text-light text-small">Associations</a>,--}}
                                    {{--<a href="yellowpages/des_datae41f.html?subcategory_id=255" class="text-light text-small">NGO</a>,--}}
                                    {{--<a href="yellowpages/des_data368a.html?subcategory_id=252" class="text-light text-small">Int'l org.</a>,--}}
                                    {{--<a href="yellowpages/des_datac290.html?subcategory_id=247" class="text-light text-small">EPZ Companies</a>--}}
                                    {{--<a href="yellowpages/subcat8e09.html?category_id=9" class="text-light text-small">...</a>--}}
                                {{--</div>--}}
                                {{--<div class="seg padding-top-6">--}}
                                    {{--<a href="yellowpages/index.html" class="text-bold btn-warning padding-6">More Categories >></a><br/>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 margin-top-5 padding-top-6">--}}

                            {{--<div class="row">--}}

                                {{--<!--ad right-->--}}

                                {{--<div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 text-center margin-top-bottom-10">--}}
                                    {{--<a href="yellowpages/goadurl6933.html?idn=601" target="_blank"><img src="{{url('public')}}/saimg/ha1.jpg" alt="House Rental Service" title="House Rental Service" class="img-midright-hp2"></a>--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 text-center margin-top-bottom-10">--}}
                                    {{--<a href="yellowpages/goadurl159d.html?idn=613" target="_blank"><img src="{{url('public')}}/saimg/ad_dhakapower.gif" alt="Dhaka Power & Engineering Ltd." title="Dhaka Power & Engineering Ltd." class="img-midright-hp2"></a>--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 text-center margin-top-bottom-10">--}}
                                    {{--<a href="yellowpages/goadurl1536.html?idn=615" target="_blank"><img src="{{url('public')}}/saimg/ad_asiaclean.gif" alt="Asia Clean & Care" title="Asia Clean & Care" class="img-midright-hp2"></a>--}}
                                {{--</div>--}}

                                {{--<div class="clearfix"></div>--}}
                                {{--<!--ad right-->--}}

                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                </div>
                {{--<div class="row margin-top-bottom-10">--}}
                    {{--<!--bottom-->--}}
                    {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">--}}
                        {{--<a href="yellowpages/goadurl4fa0.html?idn=662" target="_blank"><img src="{{url('public')}}/saimg/ad_banglapower.gif" alt="Bangla Power" title="Bangla Power" class="img-classic-hp"></a>--}}
                        {{--<!--                            <a href="yellowpages/goadurl.php?idn=607" target="_blank"><img src="saimg/ha7.png" alt="Shopping Center / Shopping Mall" width="215" height="60" title="Shopping Center / Shopping Mall" class="img-classic-hp"></a>-->--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">--}}
                        {{--<a href="yellowpages/goadurl5848.html?idn=619" target="_blank"><img src="{{url('public')}}/saimg/ad_farmersagri.gif" alt="Farmers Agri Business Ltd." title="Farmers Agri Business Ltd." class="img-classic-hp"></a>--}}
                    {{--</div>--}}
                    {{--<!--bottom-->--}}
                {{--</div>--}}
                {{--<div class="div_style2">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12 col-xs-12 div_style3h">--}}
                            {{--<div class="col-md-12 col-xs-12 div_style4h">--}}
                                {{--<h1>Quick Search</h1>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 seg2 padding-top-bottom-5">--}}
                                {{--<img src="{{url('public')}}/images/icon_emergencyno.png" alt="eo" title="eo"> <a href="yellowpages/subcatf3ee.html?category_id=42" class="text-light text-medium">Emergency Nos.</a>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 seg2 padding-top-bottom-5">--}}
                                {{--<img src="{{url('public')}}/images/icon_districtinfo.png" alt="di" title="di"> <a href="bangladesh-profile/bd_district.html" class="text-light text-medium">District Info</a>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 seg2 padding-top-bottom-5">--}}
                                {{--<img src="{{url('public')}}/images/icon_foreignmissions.png" alt="fm" title="fm"> <a href="yellowpages/des_data2724.html?subcategory_id=250" class="text-light text-medium">Foreign Mission</a>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 seg2 padding-top-bottom-5">--}}
                                {{--<img src="{{url('public')}}/images/icon_conventioncenter.png" alt="cv" title="cv"> <a href="yellowpages/des_dataa7ec.html?subcategory_id=506" class="text-light text-medium">Convension Hall</a>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 seg2 padding-top-bottom-5">--}}
                                {{--<img src="{{url('public')}}/images/icon_cinemahall.png" alt="ch" title="ch"> <a href="yellowpages/des_data0187.html?subcategory_id=139" class="text-light text-medium">Cinema Theater</a>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 seg2 padding-top-bottom-5">--}}
                                {{--<img src="{{url('public')}}/images/icon_fashionhouse.png" alt="fo" title="fo"> <a href="yellowpages/des_data4513.html?subcategory_id=876" class="text-light text-medium">Fashion House</a>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 seg2 padding-top-bottom-5">--}}
                                {{--<img src="{{url('public')}}/images/icon_resturants.png" alt="rt" title="rt"> <a href="yellowpages/des_data4099.html?subcategory_id=394" class="text-light text-medium">Restaurants</a>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 seg2 padding-top-bottom-5">--}}
                                {{--<img src="{{url('public')}}/images/icon_onlineshopping.png" alt="os" title="os"> <a href="yellowpages/des_data2142.html?subcategory_id=412" class="text-light text-medium">Online Shopping</a>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 seg2 padding-top-bottom-5">--}}
                                {{--<img src="{{url('public')}}/images/icon_library.png" alt="lb" title="lb"> <a href="yellowpages/des_datab463.html?subcategory_id=176" class="text-light text-medium">Library</a>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 seg2 padding-top-bottom-5">--}}
                                {{--<img src="{{url('public')}}/images/icon_onlinenewsportal.png" alt="on" title="on"> <a href="yellowpages/des_data890d.html?subcategory_id=890" class="text-light text-medium">News Portal</a>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 seg2 padding-top-bottom-5">--}}
                                {{--<img src="{{url('public')}}/images/icon_shopping.png" alt="sp" title="sp"> <a href="yellowpages/des_data30d2.html?subcategory_id=714" class="text-light text-medium">Shopping Center</a>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 seg2 padding-top-bottom-5">--}}
                                {{--<img src="{{url('public')}}/images/icon_eventmanagement.png" alt="am" title="am"> <a href="yellowpages/des_dataebd8.html?subcategory_id=868" class="text-light text-medium">Event Manage</a>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 seg2 padding-top-bottom-5">--}}
                                {{--<img src="{{url('public')}}/images/icon_adfirms.png" alt="ad" title="ad"> <a href="yellowpages/des_data0b63.html?subcategory_id=190" class="text-light text-medium">Ad Firms</a>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 seg2 padding-top-bottom-5">--}}
                                {{--<img src="{{url('public')}}/images/icon_drugrehab.png" alt="dr" title="dr"> <a href="yellowpages/des_dataf874.html?subcategory_id=847" class="text-light text-medium">Drug Rehab</a>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 seg2 padding-top-bottom-5">--}}
                                {{--<img src="{{url('public')}}/images/icon_export.png" alt="ex" title="ex"> <a href="yellowpages/des_datacb1b.html?subcategory_id=200" class="text-light text-medium">Exporters</a>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 seg2 padding-top-bottom-5">--}}
                                {{--<img src="{{url('public')}}/images/icon_liftcompany.png" alt="on" title="on"> <a href="yellowpages/des_dataae27.html?subcategory_id=601" class="text-light text-medium">Lift Company</a>--}}
                            {{--</div>--}}
                            {{--<!--</div>-->--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>

            <div class="col-md-2">
                <div class="row">

                    <!--ad right-->
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="yellowpages/goadurl6e0d.html?idn=300" target="_blank"><img src="{{url('public')}}/saimg/ad_rifats.gif" alt="Rifat's Dental & Prognos Centre" title="Rifat's Dental & Prognos Centre" class="img-panel2"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="yellowpages/goadurl1af0.html?idn=489" target="_blank"><img src="{{url('public')}}/saimg/ad_cleanheart_hp.gif" alt="Clean Heart" title="Clean Heart" class="img-right-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="yellowpages/goadurle979.html?idn=395" target="_blank"><img src="{{url('public')}}/saimg/ad-108x60px-single.gif" alt="Website, Software, Domain, Hosting and other IT services in Bangladesh" title="Website, Software, Domain, Hosting and other IT services in Bangladesh" class="img-right-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="yellowpages/goadurl1a6a.html?idn=371" target="_blank"><img src="{{url('public')}}/aimg/ad_rmet.gif" alt="R M Engineering & Technology" title="R M Engineering & Technology" class="img-right-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="yellowpages/goadurl2296.html?idn=626" target="_blank"><img src="{{url('public')}}/saimg/ad_cleantech1.gif" alt="CleanTech Engineering" title="CleanTech Engineering" class="img-right-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="yellowpages/goadurlfa45.html?idn=443" target="_blank"><img src="{{url('public')}}/saimg/ad_astonafa.gif" alt="Astonafa Engineering Ltd." title="Astonafa Engineering Ltd." class="img-right-hp"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                        <a href="yellowpages/goadurlaeb4.html?idn=608" target="_blank"><img src="{{url('public')}}/saimg/ad_firetrade.gif" alt="Fire Trade" title="Fire Trade" class="img-right-hp"></a>
                    </div>


                    <div class="clearfix"></div>
                    <!--ad right-->

                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>

 @endsection
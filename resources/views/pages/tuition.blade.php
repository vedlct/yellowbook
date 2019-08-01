@extends('main')

@section('content')


<!--top address bar-->
<div class="margin-bottom-10 padding-top-bottom-10 bg-purple"> <!--matri #ff6666   tuition #D8D8FA  Bangladesh  #009900   travel #ffcccc  biz #cccccc  yp  #FFBA53-->
    <div class="container">
        <div class="col-md-2 col-sm-3 border-right title address-bar">Tuition & Tutor</div>
        <div class="col-md-10 col-sm-9 padding-top-6">
            <a href="../index.html"><i class="glyphicon glyphicon-home"></i></a>
            <span class="text-small">></span>
            <a href="index.html">Tuition</a>
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
                <script type="text/javascript">
                    function goto1(str)
                    {
                        //alert(str);
                        window.open (str,'Registration','status=1,toolbar=no,scrollbars=no,menubar=yes' );
                    }
                </script>
                <div class="col-md-12 leftmenu-grid text-center">
                    <script>
                        function myFunction2() {
                            var x = document.getElementById("myTopnav2");
                            if (x.className === "leftnav") {
                                x.className += " responsive";
                            } else {
                                x.className = "leftnav";
                            }
                        }
                    </script>
                </div>

                <div class="col-md-12 leftmenu-grid text-center">
                    <div class="width-100 bg-ash2 padding-6 border-radius-top-5 margin-top-10 text-center left-menu-heading">
                        <h4>Common Links</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">
                        <a href="javascript:void(0);" class="icon margin-top-7-minus" onclick="myFunction1()" style="text-align: center; background-color: #f2f2f2;">Find Tuition & Tutor &nbsp; <h2>&#9776;</h2></a>
                        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="#">Find Tuition & Tutor</a>

                        <a href="index.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Tuition Home</a>
                        <a href="reg1.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Place your Ad <img src="{{url('public')}}/images/free.gif" width="35" height="20" alt="Free" title="Free"></a>
                        <a href="login.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Login Here</a>
                        <a href="../yellowpages/des_dataef5a.html?subcategory_id=339" target="_blank"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>School</a>
                        <a href="../yellowpages/des_data13a9.html?subcategory_id=329" target="_blank"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>College</a>
                        <a href="../yellowpages/des_datac513.html?subcategory_id=342" target="_blank"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>University</a>
                        <a href="../yellowpages/des_datacd22.html?subcategory_id=328" target="_blank"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Coaching Center</a>
                        <a href="../yellowpages/des_data79c6.html?subcategory_id=170" target="_blank"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Book Shop</a>
                        <a href="../yellowpages/des_datab463.html?subcategory_id=176" target="_blank"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Library</a>
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
                            <h1>Tuition / Tutor Ads</h1>
                        </div>

                        <div class="col-md-12 col-xs-12 div_style3 padding-top-10">
                            <div class="title1 margin-bottom-10 border-bottom-dashed padding-bottom-5"><h4>Quick Search : </h4></div>

                            <form class="form-horizontal" name="autoform" method="post" action="https://www.bdtradeinfo.com/tuition/search_tuition.php" id="autoform"  enctype="multipart/form-data" role="form">
                                <div class="col-md-4 form-group">
                                    <label class="control-label col-md-1" for="wanted">Wanted </label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <select class="form-control" name="wanted" id="wanted" required="">
                                            <option value="Tutor">Tuition</option>
                                            <option value="Tuition">Tutor</option>
                                        </select><br/>
                                    </div>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label class="control-label col-md-1" for="medium">Medium</label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <select class="form-control" name="medium" id="medium" required="">
                                            <option value="" selected>Select</option>
                                            <option value="Bengali">Bengali</option>
                                            <option value="English">English</option>
                                            <!--                    <option value="English & Bengali">English & Bengali</option>-->
                                        </select><br/>
                                    </div>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label class="control-label col-md-1" for="level">Level</label>
                                    <div class="col-md-8 col-md-offset-2">
                                        <select class="form-control" name="level" id="level">
                                            <option value="" selected>Select</option>
                                            <option value="Primary">Primary</option>
                                            <!--                    <option value="Primary & Secondary">Primary & Secondary</option>-->
                                            <option value="Secondary">Secondary</option>
                                            <!--                    <option value="Secondary & Higher Secondary">Secondary & Higher Secondary</option>-->
                                            <option value="Higher Secondary">Higher Secondary</option>
                                            <!--                    <option value="Primary, Secondary & Higher Secondary">Primary, Secondary & Higher Secondary</option>-->
                                            <!--                    <option value="Higher Secondary & Graduation">Higher Secondary & Graduation</option>-->
                                            <option value="Graduation">Graduation</option>
                                            <option value="O level/A level">O level/A level</option>
                                            <option value="IELTS">IELTS</option>
                                        </select><br/>
                                    </div>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label class="control-label col-md-4" for="subject">Subject</label>
                                    <div class="col-md-8">
                                        <input type="text" name="subject" class="form-control" id="subject" value="">
                                    </div>
                                </div>
                                <div class="col-md-5 form-group">
                                    <label class="control-label col-md-3" for="area">Area</label>
                                    <div class="col-md-6">
                                        <input type="text" name="area" class="form-control" id="area" value="">
                                    </div>
                                </div>

                                <div class="col-md-3 form-group">
                                    <input type="submit" name="btn" class="btn btn-info btn-block" value="Search">
                                </div>
                            </form>
                        </div>


                        <div class="clearfix"></div>


                        <div class="title1 padding-6 margin-bottom-10 text-center">Total 2398 records</div>
                        <table class="table-striped table-bordered margin-bottom-10">
                            <tr>
                                <!--<th class="title">Submitted on</th>-->
                                <th class="title">Title of ads &nbsp;&nbsp;&nbsp;( please click on any title to view it's details )</th>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail58e2.html?idn=51511" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>23</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                04/07/2019</span>]

                                    <br/>
                                    9 to 12 Class<span class=text_gray> || </span>Accounting                                             </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detailf85d.html?idn=51494" class="nav4txt">
                                        Want Tuition                                                English & Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>290</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                13/01/2019</span>]

                                    <br/>
                                    3 -10 Class<span class=text_gray> || </span>Math, Science, problematic subjects                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detailfc87.html?idn=51486" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>401</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                16/11/2018</span>]

                                    <br/>
                                    6-10 Class<span class=text_gray> || </span>English, Math, Accounting                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail5889.html?idn=51483" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>362</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                09/10/2018</span>]

                                    <br/>
                                    1-10 Class<span class=text_gray> || </span>English                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detailf1c1.html?idn=51480" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>452</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                14/09/2018</span>]

                                    <br/>
                                    1-10 Class<span class=text_gray> || </span>All Subject                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail494e.html?idn=51479" class="nav4txt">
                                        Want Tuition                                                English & Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>452</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                27/08/2018</span>]

                                    <br/>
                                    Class1-12 Class<span class=text_gray> || </span>English, Math & Economics                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detailc1e9.html?idn=51478" class="nav4txt">
                                        Want Tuition                                                English & Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>458</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                27/08/2018</span>]

                                    <br/>
                                    Class1-12 Class<span class=text_gray> || </span>Accountings, Math & Economics                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail278e.html?idn=51477" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>441</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                17/08/2018</span>]

                                    <br/>
                                    class -3   to class- 8 Class<span class=text_gray> || </span>all subjects                                             </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail5027.html?idn=51475" class="nav4txt">
                                        Want Tuition                                                English & Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>516</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                24/07/2018</span>]

                                    <br/>
                                    1-10 Class<span class=text_gray> || </span>Science & Math                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail10c8.html?idn=51415" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>497</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                08/07/2018</span>]

                                    <br/>
                                    3-8 Class<span class=text_gray> || </span>Math & Science                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail9f62.html?idn=51304" class="nav4txt">
                                        Want Tutor                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>617</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                26/06/2018</span>]

                                    <br/>
                                    Class 7 & Class 9 Class<span class=text_gray> || </span>Math, English & Science.                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail6fae.html?idn=51302" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>542</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                19/06/2018</span>]

                                    <br/>
                                    1 to 12 Class<span class=text_gray> || </span>All Subject (without English)                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail5517.html?idn=51301" class="nav4txt">
                                        Want Tuition                                                English & Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>531</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                18/06/2018</span>]

                                    <br/>
                                    3-10 Class<span class=text_gray> || </span>English                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail8950.html?idn=51299" class="nav4txt">
                                        Want Tuition                                                English & Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>496</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                11/06/2018</span>]

                                    <br/>
                                    Class Three to Graduation  Class<span class=text_gray> || </span>All subjects                                             </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail60c7.html?idn=51295" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>579</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                03/06/2018</span>]

                                    <br/>
                                    2-8 Class<span class=text_gray> || </span>All Subject                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detailaf92.html?idn=51294" class="nav4txt">
                                        Want Tutor                                                English & Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>603</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                02/06/2018</span>]

                                    <br/>
                                    standard 9 Class<span class=text_gray> || </span>English & Bangla                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detaildc2b.html?idn=51293" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>612</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                09/05/2018</span>]

                                    <br/>
                                    5-10 Class<span class=text_gray> || </span>Mathematics, accounting                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detailf2c9.html?idn=51291" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>701</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                16/04/2018</span>]

                                    <br/>
                                    9, 10, 11, 12, Class<span class=text_gray> || </span>General Math and Accounting                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail01c2.html?idn=51289" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>680</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                06/04/2018</span>]

                                    <br/>
                                    9, 10, 11 & 12 Class<span class=text_gray> || </span>Physics, Chemistry & Math                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail2ba4.html?idn=51286" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>673</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                22/03/2018</span>]

                                    <br/>
                                    2-9 Class<span class=text_gray> || </span>English, Math, Chemistry, Physic, Biology                                             </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail19e7.html?idn=51279" class="nav4txt">
                                        Want Tuition                                                English Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>657</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                24/02/2018</span>]

                                    <br/>
                                    1-7 Class<span class=text_gray> || </span>All Subject                                             </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail0878.html?idn=51275" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>618</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                19/01/2018</span>]

                                    <br/>
                                    Class 1-12 Class<span class=text_gray> || </span>1-5 (all subject) 9-12 (commerce)                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail98db.html?idn=51273" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>711</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                06/12/2017</span>]

                                    <br/>
                                    2-8 Class<span class=text_gray> || </span>Math,English,Bangla,Science,Finance                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detaild50e.html?idn=51268" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>702</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                18/11/2017</span>]

                                    <br/>
                                    Class 3 to 10 Class<span class=text_gray> || </span>Math, English                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detailb2c2.html?idn=51258" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>687</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                11/09/2017</span>]

                                    <br/>
                                    3-10 Class<span class=text_gray> || </span>All                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detailbfaa.html?idn=51254" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>742</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                12/08/2017</span>]

                                    <br/>
                                    9-11 Class<span class=text_gray> || </span>Science                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail19f3.html?idn=51221" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>720</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                21/03/2017</span>]

                                    <br/>
                                    Six to Ten Class<span class=text_gray> || </span>Math & Science Subject                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detailb633.html?idn=51204" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>718</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                05/01/2017</span>]

                                    <br/>
                                    ix-x-xi-xii Class<span class=text_gray> || </span>ACCOUNTING++(Business Studies)                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detailbe24.html?idn=51202" class="nav4txt">
                                        Want Tuition                                                English & Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>656</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                03/12/2016</span>]

                                    <br/>
                                    1-10 Class<span class=text_gray> || </span>commerce                                             </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail0115.html?idn=50989" class="nav4txt">
                                        Want Tuition                                                English & Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>2195</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                12/06/2016</span>]

                                    <br/>
                                    3-10 Class<span class=text_gray> || </span>all                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail6df6.html?idn=50988" class="nav4txt">
                                        Want Tuition                                                English & Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>1975</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                10/06/2016</span>]

                                    <br/>
                                    1-10 Class<span class=text_gray> || </span>all subject (without math)                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail6562.html?idn=50987" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>1932</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                09/06/2016</span>]

                                    <br/>
                                    class 6 to 12 Class<span class=text_gray> || </span>english/ BGS/ Bangla                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail29ed.html?idn=50983" class="nav4txt">
                                        Want Tuition                                                English Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>1857</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                07/06/2016</span>]

                                    <br/>
                                    1 and 2 Class<span class=text_gray> || </span>Geography History Maths Bangla                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail589d.html?idn=50980" class="nav4txt">
                                        Want Tuition                                                English & Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>1862</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                16/06/2016</span>]

                                    <br/>
                                    1-10 Class<span class=text_gray> || </span>Math, Physics, English, Higher Math, chemistry                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail235b.html?idn=50977" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>1876</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                08/06/2016</span>]

                                    <br/>
                                    1-10 Class<span class=text_gray> || </span>all                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail3d92.html?idn=50976" class="nav4txt">
                                        Want Tuition                                                English & Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>1870</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                01/06/2016</span>]

                                    <br/>
                                    1-12 Class<span class=text_gray> || </span>Maths,physics,Chemistry                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail3fc3.html?idn=50972" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>2038</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                21/06/2016</span>]

                                    <br/>
                                    1-10 Class<span class=text_gray> || </span>all subject                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail49cd.html?idn=50971" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>1901</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                15/06/2016</span>]

                                    <br/>
                                    6-12 Class<span class=text_gray> || </span>all                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detailf2cc.html?idn=50970" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>2002</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                15/06/2016</span>]

                                    <br/>
                                    1-8 Class<span class=text_gray> || </span>All                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detailf1a1.html?idn=50969" class="nav4txt">
                                        Want Tuition                                                English & Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>1949</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                14/06/2016</span>]

                                    <br/>
                                    Class 1 to 8  Class<span class=text_gray> || </span>All Subject                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detaile552.html?idn=50967" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>1904</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                12/06/2016</span>]

                                    <br/>
                                    class 2 to class 9 Class<span class=text_gray> || </span>All subjects                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail593e.html?idn=50965" class="nav4txt">
                                        Want Tuition                                                English Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>1909</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                08/06/2016</span>]

                                    <br/>
                                    1-10 Class<span class=text_gray> || </span>English, Math, Science, qur-an, (computer-Ms word, Ms pp, Ms excel,Ms access & Photo shop)                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detailf235.html?idn=50964" class="nav4txt">
                                        Want Tuition                                                English Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>1882</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                08/06/2016</span>]

                                    <br/>
                                    Standard I - Standard VI Class<span class=text_gray> || </span>All Subjects                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail8ea5.html?idn=50963" class="nav4txt">
                                        Want Tutor                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>1854</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                08/06/2016</span>]

                                    <br/>
                                    Seven Class<span class=text_gray> || </span>English and Mathematics                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail7c54.html?idn=50962" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>1874</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                06/06/2016</span>]

                                    <br/>
                                    6-10 Class<span class=text_gray> || </span>math,physics,ict                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detailf503.html?idn=50959" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>1948</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                02/06/2016</span>]

                                    <br/>
                                    3-7 Class<span class=text_gray> || </span>Bangla, English, Mathmatics                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail7b75.html?idn=50956" class="nav4txt">
                                        Want Tuition                                                English & Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>1960</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                01/07/2016</span>]

                                    <br/>
                                    1-10 Class<span class=text_gray> || </span>All subjects except Religios subject and Drawing                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detail668c.html?idn=50955" class="nav4txt">
                                        Want Tuition                                                English & Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>2036</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                01/07/2016</span>]

                                    <br/>
                                    Class I to Class X Class<span class=text_gray> || </span>All subjects except Religios subject and Drawing                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detaildab4.html?idn=50954" class="nav4txt">
                                        Want Tutor                                                English Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>1966</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                30/06/2016</span>]

                                    <br/>
                                    9 Class<span class=text_gray> || </span>All                                            </td>
                            </tr>
                            <tr>
                                <!--                                            <td>
                                                                                                                            </td>-->
                                <td>
                                    <a href="detaild4fe.html?idn=50953" class="nav4txt">
                                        Want Tuition                                                Bengali Medium
                                    </a>
                                    &nbsp;<span class="text_darkgray">[ Viewed</span> <h1>1909</h1><span class="text_darkgray"> times ]</span>
                                    &nbsp; [<span class="text-small text-primary">Submitted on
                                                30/06/2016</span>]

                                    <br/>
                                    1-10 Class<span class=text_gray> || </span>all science subjects                                            </td>
                            </tr>
                        </table>

                        <div class="row margin-bottom-20">
                            <div class="col-md-2 col-md-offset-1">First Page </div>
                            <div class="col-md-2">Prev </div>
                            <div class="col-md-2">page 1 of 48</div>
                            <div class="col-md-2"> <a class="nav1txt" href="index4658.html?page=2">Next</a> </div>
                            <div class="col-md-2"> <a class="nav1txt" href="index89dd.html?page=48">Last Page</a> </div>
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
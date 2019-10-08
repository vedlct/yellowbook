<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">

        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">Dashboard</li>
                <li>
                    <a href="{{route('menu.index')}}"><i class="mdi mdi-gauge"></i><span class="hide-menu">Menu</span></a>

                </li>
                <li>
                    <a href="{{route('category.index')}}" ><i class="fa fa-plus"></i><span class="hide-menu">Category</span></a>

                </li>

                <li>
                    <a href="{{route('city.index')}}" ><i class="fa fa-plus"></i><span class="hide-menu">City</span></a>

                </li>


                <li>
                    <a href="{{route('company.index')}}"><i class="fa fa-list-alt"></i><span class="hide-menu">Company</span></a>

                </li>

                <li>
                    <a href="{{route('post.index')}}"><i class="fa fa-plus-square"></i><span class="hide-menu">Posts</span></a>

                </li>

                <li>
                    <a href="{{route('request_company.index')}}"><i class="fa fa-plus-square"></i><span class="hide-menu">Request Company</span></a>

                </li>

                {{--<li>--}}
                    {{--<a href="{{route('blog.index')}}"><i class="fa fa-plus-square"></i><span class="hide-menu">Blogs</span></a>--}}

                {{--</li>--}}

                {{--<li>--}}
                    {{--<a href="{{route('offer.add')}}"><i class="fa fa-plus"></i><span class="hide-menu">Enter Offer Details</span></a>--}}

                {{--</li>--}}

                {{--<li>--}}
                    {{--<a href="{{route('offer.generate')}}"><i class="fa fa-briefcase"></i><span class="hide-menu">Offer List</span></a>--}}

                {{--</li>--}}


                {{--<li>--}}
                {{--<a href="{{route('historic.files')}}"><i class="fa fa-star"></i><span class="hide-menu">Historic uploaded files</span></a>--}}

                {{--</li>--}}

                {{--<li>--}}
                    {{--<a href="{{route('settings')}}"><i class="fa fa-plus-square"></i><span class="hide-menu">Settings</span></a>--}}

                {{--</li>--}}






                <li class="nav-devider"></li>


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->

    <!-- End Bottom points-->
</aside>
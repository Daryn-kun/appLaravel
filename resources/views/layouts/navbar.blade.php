<section class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12 col-sm-4">
                <div class="contact-number">
                    <i class="tf-ion-ios-telephone"></i>
                    <span>+7 707 141 5141</span><br/>
                    <i class="tf-ion-ios-telephone"></i>
                    <span>+7 747 983 2705</span><br/>
                    <i class="tf-ion-ios-telephone"></i>
                    <span>+7 708 358 5452</span>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4">
                <!-- Site Logo -->
                <div class="logo text-center">
                    <a href="{{route('index')}}">
                        <h1 class="shadow">3D Store</h1>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4">
                <!-- Cart -->
                <ul class="top-menu text-right list-inline">
                    <li class="dropdown cart-nav dropdown-slide">

                        @lang('main.current_lang')
                        <ul class="dropdown-menu">
                            <li><a href="{{route('locale', 'ru')}}">ru</a></li>
                            <li><a href="{{route('locale', 'en')}}">en</a></li>
                        </ul>
                    </li>
                    <li class="dropdown cart-nav dropdown-slide">
                        <a href="{{route('basket')}}"><i class="tf-ion-android-cart"></i>@lang('main.cart')</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- End Top Header Bar -->


<!-- Main Menu Section -->
<section class="menu">
    <nav class="navbar navigation" id="mainnav" style="background-color: white">
        <!-- Navbar Links -->
        <div id="navbar" class="navbar-collapse collapse text-center">
            <ul class="nav navbar-nav">

                <!-- Home -->
                <li @routeactive('index')>
                    <a href="{{route('index')}}">@lang('main.all_products')</a>
                </li><!-- / Home -->
                <li @routeactive('categories') class="dropdown dropdown-slide">
                    <a href="{{route('categories')}}" class="dropdown-toggle">@lang('main.categories') <span
                            class="tf-ion-ios-arrow-down"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('category', 'mobiles')}}">@lang('main.smartphones')</a></li>
                        <li><a href="{{route('category', 'portable')}}">@lang('main.portables')</a></li>
                        <li><a href="{{route('category', 'appliances')}}">@lang('main.appliances')</a></li>
                    </ul>
                </li>

                <!-- Elements -->
                @guest
                    <li><a href="{{route('login')}}">@lang('main.login')</a></li>
                @endguest
                @auth
                    @admin
                    <li><a href="{{route('orders')}}">@lang('main.admin_panel')</a></li>
                @else
                    <li><a href="{{route('person.orders.index')}}">@lang('main.my_orders')</a></li>
                    @endadmin
                    <li><a href="{{route('get-logout')}}">@lang('main.logout')</a></li>
            @endauth
            <!-- / Elements -->
            </ul><!-- / .nav .navbar-nav -->

        </div><!--/.navbar-collapse -->
    </nav>
</section>

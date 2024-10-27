
@include('layouts.adminheader')
<!-- start reactjs or vuejs -->
<div id="app">

    <!-- start site setting -->
        <div id="sitesettings" class="sitesettings">
        <div class="sitesettings-item">
            <a href="javascript:void(0);" id="sitetoggle" class="sitetoggle">
                <i class="fas fa-cog ani-rotate"></i>
            </a>
        </div>
    </div>
    <!-- end site setting -->

    <!-- start left sidebar -->
    @include('layouts.adminleftsidebar')
    <!-- end left sidebar -->

    <!-- page wrapper -->
    <section>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 col-md-9 pt-md-5 mt-md-3 ms-auto">

                <!-- Start inner content area -->
                <div class="row">

                <!-- Start breadcrumb -->
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Previous</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Current</a></li>
                        </ol>
                    </nav>
                <!-- End breadcrumb -->

                @yield('content')

                </div>
                <!-- End inner content area -->
                
                </div>
            </div>
        </div>

    </section>
    <!-- page wrapper -->


</div>
<!-- end reactjs or vuejs -->
@include('layouts.adminfooter')


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

        <!-- start breadcrumb -->
        <!-- end breadcrumb -->

        @yield('content')

    </section>
    <!-- page wrapper -->


</div>
<!-- end reactjs or vuejs -->
@include('layouts.adminfooter')

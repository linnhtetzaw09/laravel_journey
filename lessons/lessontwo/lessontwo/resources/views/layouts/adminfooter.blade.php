 <!-- start footer section -->

 <footer>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-md-9 ms-auto">
            <div class="row border-top pt-3 mt-3">

                <div class="col-md-6 text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item me-2">
                            <a href="javascript:void(0);">Lin IT & Technology Co.,Ltd</a>
                        </li>
                        <li class="list-inline-item me-2">
                            <a href="javascript:void(0);">About</a>
                        </li>
                        <li class="list-inline-item me-2">
                            <a href="javascript:void(0);">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 text-center">
                    <p>&copy; <span id="getyear">2000</span> Copyright. All Rights served.</p>
                </div>

            </div>
        </div>
    </div>
</div>

</footer>

<!-- end footer section -->


<!-- start right navbar -->

<div class="right-panels">
<h6>Custom Your Template</h6>
<p class="small">Hello! Here you can change your custom theme</p>
<hr/>
<div class="themecolors">
    <a href="javascript:void(0);"><i class="fas fa-square text-primary shadow fa-lg"></i></a> 
    <a href="javascript:void(0);"><i class="fas fa-square text-secondary shadow fa-lg"></i></a>
    <a href="javascript:void(0);"><i class="fas fa-square text-info shadow fa-lg"></i></a>
    <a href="javascript:void(0);"><i class="fas fa-square text-success shadow fa-lg"></i></a>
    <a href="javascript:void(0);"><i class="fas fa-square text-danger shadow fa-lg"></i></a>
    <a href="javascript:void(0);"><i class="fas fa-square text-warning shadow fa-lg"></i></a>
    <a href="javascript:void(0);"><i class="fas fa-square text-muted shadow fa-lg"></i></a>
    <a href="javascript:void(0);"><i class="fas fa-square text-white shadow fa-lg"></i></a>
    <a href="javascript:void(0);"><i class="fas fa-square text-dark shadow fa-lg"></i></a>
    <a href="javascript:void(0);"><i class="fas fa-square text-light shadow fa-lg"></i></a>
</div>
</div>

<!-- end right navbar  -->

<!-- Start Modal Area -->

 <!-- Start Quick Search Modal -->

 
 <!-- End Quick Search Modal -->

<!-- End Modal Area -->


<!-- start modal area -->

<div id="quicksearchmodal" class="modal fade">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-0">
        <div class="modal-header">
            <h6 class="modal-title">Result</h6>
            <button type="button" class="close-btn" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <ul class="list-group">
                <li class="list-group-item"><a href="javascript:void(0);">WDF 1001</a></li>
                <li class="list-group-item"><a href="javascript:void(0);">WDF 1002</a></li>
                <li class="list-group-item"><a href="javascript:void(0);">WDF 1003</a></li>
            </ul>
        </div>
        <div class="modal-footer">
        </div>
    </div>
</div>
</div>

<!-- start modal area -->


<!-- Bootstrap JS -->
<script src="{{ asset('assets/libs/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>

<!-- jQuery JS -->
<script src="{{ asset('assets/libs/jquery/jquery-3.7.1.min.js') }}" type="text/javascript"></script>

<!-- jQuery UI JS -->
<script src="{{ asset('assets/libs/jquery-ui-1.13.2/jquery-ui.min.js') }}" type="text/javascript"></script>

<!-- Google Charts JS -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- JustGauge JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.4/raphael-min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/justgage/1.2.9/justgage.min.js"></script>

<!-- Lightbox2 JS -->
<script src="{{ asset('assets/libs/lightbox2-2.11.4/dist/js/lightbox.min.js') }}" type="text/javascript"></script>

<!-- Custom JS -->
<script src="{{ asset('assets/dist/app.js') }}" type="text/javascript"></script>

<!-- extra js -->
@yield('scripts')


</body>
</html>
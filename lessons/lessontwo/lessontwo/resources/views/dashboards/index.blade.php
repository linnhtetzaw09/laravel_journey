
@extends('layouts.adminindex')
@section('content')

    <!-- start content area -->

    <section>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 col-md-9 ms-auto">

                    <!-- Start Shortcut Area -->

                    <div class="row pt-md-5 mt-md-3">

                        <div class="col-lg-3 col-md-6 mb-2">
                            <div class="card shadow py-2 border-left-primarys">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="text-primary text-xs fw-bold text-uppercase mb-1">Sales (Monthly)</h6>
                                            <p class="h5 text-muted">$ 50,000</p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-secondary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-2">
                            <div class="card shadow py-2 border-left-successes">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="text-primary text-xs fw-bold text-uppercase mb-1">Rental Fee (Annual)</h6>
                                            <p class="h5 text-muted">$ 400,000</p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar fa-2x text-secondary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-2">
                            <div class="card shadow py-2 border-left-infos">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="text-primary text-xs fw-bold text-uppercase mb-1">Debit Collect</h6>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <p class="h5 text-muted">60%</p>
                                                </div>
                                                <div class="col">
                                                    <div class="progress" style="height: 13px;">
                                                        <div class="progress-bar bg-info" style="width: 60%;" aria-valuenow="60" aria-valuemax="100" aria-valuemin="0"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-secondary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-2">
                            <div class="card shadow py-2 border-left-warnings">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="text-primary text-xs fw-bold text-uppercase mb-1">Request Message</h6>
                                            <p class="h5 text-muted">25</p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-secondary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- End Shortcut Area -->


                    <!-- Start Carousel Area -->

                    <div class="row">

                        <div class="col-md-3 col-sm-6 mb-2">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Sales</h6>

                                    <div id="sales" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner p-3">

                                            <div class="carousel-item active">

                                                <div class="d-flex">
                                                    <h3 class="me-3">$ 58,664</h3>
                                                    <h3 class="text-danger">+3.2%</h3>
                                                </div>

                                                <div class="">
                                                    <p class="fw-bold text-small">Revenue <span class="text-muted">($1572M last Month)</span></p>
                                                </div>
    
                                                <button type="button" class="btn btn-outline-secondary btn-sm">
                                                    <i class="fas fa-calendar-alt me-1"></i> Jan
                                                </button>

                                            </div>

                                            <div class="carousel-item">
                                                
                                                <div class="d-flex">
                                                    <h3 class="me-3">$ 68,664</h3>
                                                    <h3 class="text-danger">+2.2%</h3>
                                                </div>

                                                <div class="">
                                                    <p class="fw-bold text-small">Revenue <span class="text-muted">($1572M last Month)</span></p>
                                                </div>
    
                                                <button type="button" class="btn btn-outline-secondary btn-sm">
                                                    <i class="fas fa-calendar-alt me-1"></i> Jan
                                                </button>

                                            </div>

                                            <div class="carousel-item">
                                                
                                                <div class="d-flex">
                                                    <h3 class="me-3">$ 78,664</h3>
                                                    <h3 class="text-danger">+1.2%</h3>
                                                </div>

                                                <div class="">
                                                    <p class="fw-bold text-small">Revenue <span class="text-muted">($1572M last Month)</span></p>
                                                </div>
    
                                                <button type="button" class="btn btn-outline-secondary btn-sm">
                                                    <i class="fas fa-calendar-alt me-1"></i> Jan
                                                </button>

                                            </div>

                                            <button type="button" class="carousel-control-prev" data-bs-target="#sales" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </button>

                                            <button type="button" class="carousel-control-next" data-bs-target="#sales" data-bs-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </button>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-2">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Purchases</h6>

                                    <div id="purchases" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner p-3">

                                            <div class="carousel-item active">

                                                <div class="d-flex">
                                                    <h3 class="me-3">$ 58,664</h3>
                                                    <h3 class="text-danger">+3.2%</h3>
                                                </div>

                                                <div class="">
                                                    <p class="fw-bold text-small">Revenue <span class="text-muted">($1572M last Month)</span></p>
                                                </div>
    
                                                <button type="button" class="btn btn-outline-secondary btn-sm">
                                                    <i class="fas fa-calendar-alt me-1"></i> Jan
                                                </button>

                                            </div>

                                            <div class="carousel-item">
                                                
                                                <div class="d-flex">
                                                    <h3 class="me-3">$ 68,664</h3>
                                                    <h3 class="text-danger">+2.2%</h3>
                                                </div>

                                                <div class="">
                                                    <p class="fw-bold text-small">Revenue <span class="text-muted">($1572M last Month)</span></p>
                                                </div>
    
                                                <button type="button" class="btn btn-outline-secondary btn-sm">
                                                    <i class="fas fa-calendar-alt me-1"></i> Jan
                                                </button>

                                            </div>

                                            <div class="carousel-item">
                                                
                                                <div class="d-flex">
                                                    <h3 class="me-3">$ 78,664</h3>
                                                    <h3 class="text-danger">+1.2%</h3>
                                                </div>

                                                <div class="">
                                                    <p class="fw-bold text-small">Revenue <span class="text-muted">($1572M last Month)</span></p>
                                                </div>
    
                                                <button type="button" class="btn btn-outline-secondary btn-sm">
                                                    <i class="fas fa-calendar-alt me-1"></i> Jan
                                                </button>

                                            </div>

                                            <button type="button" class="carousel-control-prev" data-bs-target="#purchases" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </button>

                                            <button type="button" class="carousel-control-next" data-bs-target="#purchases" data-bs-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </button>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-2">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Returns</h6>

                                    <div id="returns" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner p-3">

                                            <div class="carousel-item active">

                                                <div class="d-flex">
                                                    <h3 class="me-3">$ 58,664</h3>
                                                    <h3 class="text-danger">+3.2%</h3>
                                                </div>

                                                <div class="">
                                                    <p class="fw-bold text-small">Revenue <span class="text-muted">($1572M last Month)</span></p>
                                                </div>
    
                                                <button type="button" class="btn btn-outline-secondary btn-sm">
                                                    <i class="fas fa-calendar-alt me-1"></i> Jan
                                                </button>

                                            </div>

                                            <div class="carousel-item">
                                                
                                                <div class="d-flex">
                                                    <h3 class="me-3">$ 68,664</h3>
                                                    <h3 class="text-danger">+2.2%</h3>
                                                </div>

                                                <div class="">
                                                    <p class="fw-bold text-small">Revenue <span class="text-muted">($1572M last Month)</span></p>
                                                </div>
    
                                                <button type="button" class="btn btn-outline-secondary btn-sm">
                                                    <i class="fas fa-calendar-alt me-1"></i> Jan
                                                </button>

                                            </div>

                                            <div class="carousel-item">
                                                
                                                <div class="d-flex">
                                                    <h3 class="me-3">$ 78,664</h3>
                                                    <h3 class="text-danger">+1.2%</h3>
                                                </div>

                                                <div class="">
                                                    <p class="fw-bold text-small">Revenue <span class="text-muted">($1572M last Month)</span></p>
                                                </div>
    
                                                <button type="button" class="btn btn-outline-secondary btn-sm">
                                                    <i class="fas fa-calendar-alt me-1"></i> Jan
                                                </button>

                                            </div>

                                            <button type="button" class="carousel-control-prev" data-bs-target="#returns" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </button>

                                            <button type="button" class="carousel-control-next" data-bs-target="#returns" data-bs-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </button>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-2">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Marketing</h6>

                                    <div id="marketing" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner p-3">

                                            <div class="carousel-item active">

                                                <div class="d-flex">
                                                    <h3 class="me-3">$ 58,664</h3>
                                                    <h3 class="text-danger">+3.2%</h3>
                                                </div>

                                                <div class="">
                                                    <p class="fw-bold text-small">Revenue <span class="text-muted">($1572M last Month)</span></p>
                                                </div>
    
                                                <button type="button" class="btn btn-outline-secondary btn-sm">
                                                    <i class="fas fa-calendar-alt me-1"></i> Jan
                                                </button>

                                            </div>

                                            <div class="carousel-item">
                                                
                                                <div class="d-flex">
                                                    <h3 class="me-3">$ 68,664</h3>
                                                    <h3 class="text-danger">+2.2%</h3>
                                                </div>

                                                <div class="">
                                                    <p class="fw-bold text-small">Revenue <span class="text-muted">($1572M last Month)</span></p>
                                                </div>
    
                                                <button type="button" class="btn btn-outline-secondary btn-sm">
                                                    <i class="fas fa-calendar-alt me-1"></i> Jan
                                                </button>

                                            </div>

                                            <div class="carousel-item">
                                                
                                                <div class="d-flex">
                                                    <h3 class="me-3">$ 78,664</h3>
                                                    <h3 class="text-danger">+1.2%</h3>
                                                </div>

                                                <div class="">
                                                    <p class="fw-bold text-small">Revenue <span class="text-muted">($1572M last Month)</span></p>
                                                </div>
    
                                                <button type="button" class="btn btn-outline-secondary btn-sm">
                                                    <i class="fas fa-calendar-alt me-1"></i> Jan
                                                </button>

                                            </div>

                                            <button type="button" class="carousel-control-prev" data-bs-target="#marketing" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </button>

                                            <button type="button" class="carousel-control-next" data-bs-target="#marketing" data-bs-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </button>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- End Carousel Area -->


                    <!-- Start Gauge Area -->

                    <div  class="row">

                        <div class="col-lg-3 col-md-6 mb-2">
                            <div  class="card shadow py-2 border-left-primarys">
                                <div  class="card-body">

                                    <div class="row ">
                                        <div  class="col">
                                            <h6 class="text-sm fw-bold text-uppercase text-primary mb-1">Users</h6>
                                        </div>
                                        <div class="col-auto">
                                            <p class="h6 text-muted">Report</p>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div id="gaugeusers"></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-2">
                            <div  class="card shadow py-2 border-left-successes">
                                <div  class="card-body">

                                    <div class="row ">
                                        <div  class="col">
                                            <h6 class="text-sm fw-bold text-uppercase text-primary mb-1">Customers</h6>
                                        </div>
                                        <div class="col-auto">
                                            <p class="h6 text-muted">Report</p>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div id="gaugecustomers"></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-2">
                            <div  class="card shadow py-2 border-left-infos">
                                <div  class="card-body">

                                    <div class="row ">
                                        <div  class="col">
                                            <h6 class="text-sm fw-bold text-infos text-primary mb-1">Employees</h6>
                                        </div>
                                        <div class="col-auto">
                                            <p class="h6 text-muted">Report</p>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div id="gaugeemployees"></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-2">
                            <div  class="card shadow py-2 border-left-warnings">
                                <div  class="card-body">

                                    <div class="row ">
                                        <div  class="col">
                                            <h6 class="text-sm fw-bold text-infos text-primary mb-1">Investers</h6>
                                        </div>
                                        <div class="col-auto">
                                            <p class="h6 text-muted">Report</p>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div id="gaugeinvesters"></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- End Gauge Area -->


                    <!-- Start Expenses Area -->

                    <div  class="row">

                        <div class="col-md-7 mb-3">
                            <div  class="card shadow">
                                <div class="card-header">
                                    <h6 class="text-primary">Expenses</h6>
                                </div>
                                <div class="card-body">

                                    <h6 class="small">Other Expenses 20%</h6>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-danger" style="width: 20%;" aria-valuenow="20" aria-valuemax="100" aria-valuemin="0"> </div>
                                    </div>

                                    <h6 class="small">Sales Tracking 40%</h6>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-warning" style="width: 40%;" aria-valuenow="40" aria-valuemax="100" aria-valuemin="0"> </div>
                                    </div>

                                    <h6 class="small">Rental Fee 60%</h6>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-primary" style="width: 60%;" aria-valuenow="60" aria-valuemax="100" aria-valuemin="0"> </div>
                                    </div>

                                    <h6 class="small">Salary 80%</h6>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-info" style="width: 80%;" aria-valuenow="80" aria-valuemax="100" aria-valuemin="0"> </div>
                                    </div>

                                    <h6 class="small">Fixture 100%</h6>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-success" style="width: 100%;" aria-valuenow="100" aria-valuemax="100" aria-valuemin="0"> </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div  class="col-md-5">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h6 class="text-primary">Revenue Sources</h6>
                                </div>
                                <div class="card-body">
                                    <div style="height: 250px; display: flex; justify-content: center; align-items: center;">
                                        <canvas id="myChart"></canvas>
                                    </div>
                                    <div class="small text-center mt-2">
                                        <span><i class="fas fa-circle text-warning"></i>Return Items</span>
                                        <span class="mx-2"><i class="fas fa-circle text-info"></i>Direct Sales</span>
                                        <span><i class="fas fa-circle text-danger"></i>Online Sales</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- End Expenses Area -->


                    <!-- Start Earning Area -->

                    <div class="row">

                        <div class="col-md-8 mb-3">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="card-title">Earnings Overview</h6>
                                    <div class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>

                                            <div class="dropdown-menu shadow">
                                                <div class="dropdown-header">Quick Action</div>
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0);" class="dropdown-item">View Report</a>
                                            </div>

                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="curve_chart" style="width: 100%;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Regional Team</h6>

                                    <div class="d-flex align-items-center border-bottom py-2">
                                        <img src="./assets/img/users/user1.jpg" class="rounded-circle" width="40" alt="user1" />
                                        <div class="ms-3">
                                            <h6 class="mb-1">Ms. July</h6>
                                            <small class="text-muted"><i class="fas fa-map-marker-alt me-1"></i> Mandalay City, Myanmar</small>
                                        </div>
                                        <div class="badge bg-success p-1 ms-auto">
                                            <i class="fas fa-plus"></i>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center border-bottom py-2">
                                        <img src="./assets/img/users/user2.jpg" class="rounded-circle" width="40" alt="user2" />
                                        <div class="ms-3">
                                            <h6 class="mb-1">Mr. Ivan</h6>
                                            <small class="text-muted"><i class="fas fa-map-marker-alt me-1"></i> Yangon City, Myanmar</small>
                                        </div>
                                        <div class="badge bg-success p-1 ms-auto">
                                            <i class="fas fa-plus"></i>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center py-2">
                                        <img src="./assets/img/users/user3.jpg" class="rounded-circle" width="40" alt="user3" />
                                        <div class="ms-3">
                                            <h6 class="mb-1">Ms. Lily</h6>
                                            <small class="text-muted"><i class="fas fa-map-marker-alt me-1"></i> Myeik City, Myanmar</small>
                                        </div>
                                        <div class="badge bg-success p-1 ms-auto">
                                            <i class="fas fa-plus"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- End Earning Area -->


                    <!-- Start Result Area -->

                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-3 col-sm-6">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <i class="fas fa-users fa-2x text-primary me-4"></i>
                                                <div class="text-center">
                                                    <p class="mb-0">Users</p>
                                                    <h5 class="fw-bold">56,320</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <i class="fas fa-check-circle fa-2x text-primary me-4"></i>
                                                <div class="text-center">
                                                    <p class="mb-0">Feedbacks</p>
                                                    <h5 class="fw-bold">3,200</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <i class="fas fa-trophy fa-2x text-primary me-4"></i>
                                                <div class="text-center">
                                                    <p class="mb-0">Employees</p>
                                                    <h5 class="fw-bold">1,600</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <i class="fas fa-star fa-2x text-primary me-4"></i>
                                                <div class="text-center">
                                                    <p class="mb-0">Sales</p>
                                                    <h5 class="fw-bold">12,860</h5>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End Result Area -->


                    <!-- Start Analysis Area -->

                    <div class="row">

                        <div class="col-md-4 mb-3">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h6>Sale Analysis Trend</h6>

                                    <div class="mt-2">
                                        <div class="d-flex justify-content-between">
                                            <small>Order Value</small>
                                            <small>120.8%</small>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-secondary" style="width: 78.8%;" aria-valuenow="78.8" aria-valuemax="100" aria-valuemin="0"></div>
                                        </div>
                                    </div>

                                    <div class="mt-2">
                                        <div class="d-flex justify-content-between">
                                            <small>Total Products</small>
                                            <small>352.2%</small>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width: 50.2%;" aria-valuenow="50.2" aria-valuemax="100" aria-valuemin="0"></div>
                                        </div>
                                    </div>

                                    <div class="mt-2">
                                        <div class="d-flex justify-content-between">
                                            <small>Quantity</small>
                                            <small>25.6%</small>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" style="width: 65%;" aria-valuenow="65" aria-valuemax="100" aria-valuemin="0"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 mb-3">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h6>Project Status</h6>

                                    <div>
                                        <table class="table">

                                            <tr>
                                                <td >
                                                    <div class="d-flex">
                                                        <img src="./assets/img/clients/client1.png" class="me-3" width="100" alt="client1">
                                                        <div>
                                                            <small>Company</small>
                                                            <p class="fw-bold mt-1">Sony Electronic</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    Sales
                                                    <p class="fw-bold mt-1">$3250</p>
                                                </td>
                                                <td>
                                                    Status
                                                    <p class="fw-bold mt-1 text-success">88%</p>
                                                </td>
                                                <td>
                                                    Deadline
                                                    <p class="fw-bold mt-1">10 June 2023</p>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-secondary rounded-0"><i class="fas fa-pen"></i> Edit</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td >
                                                    <div class="d-flex">
                                                        <img src="./assets/img/clients/client2.png" class="me-3" width="100" alt="client2">
                                                        <div>
                                                            <small>Company</small>
                                                            <p class="fw-bold mt-1">Cannon Electronic</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    Sales
                                                    <p class="fw-bold mt-1">$3250</p>
                                                </td>
                                                <td>
                                                    Status
                                                    <p class="fw-bold mt-1 text-success">88%</p>
                                                </td>
                                                <td>
                                                    Deadline
                                                    <p class="fw-bold mt-1">10 June 2023</p>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-secondary rounded-0"><i class="fas fa-pen"></i> Edit</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td >
                                                    <div class="d-flex">
                                                        <img src="./assets/img/clients/client3.png" class="me-3" width="100" alt="client3">
                                                        <div>
                                                            <small>Company</small>
                                                            <p class="fw-bold mt-1">Apple Electronic</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    Sales
                                                    <p class="fw-bold mt-1">$3250</p>
                                                </td>
                                                <td>
                                                    Status
                                                    <p class="fw-bold mt-1 text-success">88%</p>
                                                </td>
                                                <td>
                                                    Deadline
                                                    <p class="fw-bold mt-1">10 June 2023</p>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-secondary rounded-0"><i class="fas fa-pen"></i> Edit</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td >
                                                    <div class="d-flex">
                                                        <img src="./assets/img/clients/client4.png" class="me-3" width="100" alt="client4">
                                                        <div>
                                                            <small>Company</small>
                                                            <p class="fw-bold mt-1">Opple Electronic</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    Sales
                                                    <p class="fw-bold mt-1">$3250</p>
                                                </td>
                                                <td>
                                                    Status
                                                    <p class="fw-bold mt-1 text-success">88%</p>
                                                </td>
                                                <td>
                                                    Deadline
                                                    <p class="fw-bold mt-1">10 June 2023</p>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-secondary rounded-0"><i class="fas fa-pen"></i> Edit</button>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- End Analysis Area -->


                    <!-- Start Todo Area -->

                    <div class="row">

                        <div class="col-md-4 mb-4">
                            <div class="card">

                                <div class="card-body">

                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-title">Todo List</h6>
                                        <div class="dropdown">
                                        
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>

                                            <div class="dropdown-menu shadow">
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                <a href="javascript:void(0);" class="dropdown-item">Another Action</a>
                                                <a href="javascript:void(0);" class="dropdown-item">something Else Here</a>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="input-group mt-3">
                                        <input type="text" class="form-control form-control-sm" placeholder="Add list here ... " />
                                        <button type="button" class="btn btn-primary btn-sm form-group-text">Add to list</button>
                                    </div>

                                    <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et dicta.</p>

                                    <ul class="list-unstyled">

                                        <li class="d-flex justify-content-between">
                                            <label for="">
                                                <input type="checkbox" class="checkbox" /><span class="ms-2">When an unknown printer took a gallery of type.</span>
                                            </label>
                                            <i class="fas fa-trash-alt text-muted"></i>
                                        </li>

                                        <li class="d-flex justify-content-between">
                                            <label for="">
                                                <input type="checkbox" class="checkbox" /><span class="ms-2">When an unknown printer took a gallery of type.</span>
                                            </label>
                                            <i class="fas fa-trash-alt text-muted"></i>
                                        </li>

                                        <li class="d-flex justify-content-between">
                                            <label for="">
                                                <input type="checkbox" class="checkbox" /><span class="ms-2">When an unknown printer took a gallery of type.</span>
                                            </label>
                                            <i class="fas fa-trash-alt text-muted"></i>
                                        </li>

                                        <li class="d-flex justify-content-between">
                                            <label for="">
                                                <input type="checkbox" class="checkbox" /><span class="ms-2">When an unknown printer took a gallery of type.</span>
                                            </label>
                                            <i class="fas fa-trash-alt text-muted"></i>
                                        </li>

                                        <li class="d-flex justify-content-between">
                                            <label for="">
                                                <input type="checkbox" class="checkbox" /><span class="ms-2">When an unknown printer took a gallery of type.</span>
                                            </label>
                                            <i class="fas fa-trash-alt text-muted"></i>
                                        </li>

                                        <li class="d-flex justify-content-between">
                                            <label for="">
                                                <input type="checkbox" class="checkbox" /><span class="ms-2">When an unknown printer took a gallery of type.</span>
                                            </label>
                                            <i class="fas fa-trash-alt text-muted"></i>
                                        </li>

                                        <li class="d-flex justify-content-between">
                                            <label for="">
                                                <input type="checkbox" class="checkbox" /><span class="ms-2">When an unknown printer took a gallery of type.</span>
                                            </label>
                                            <i class="fas fa-trash-alt text-muted"></i>
                                        </li>

                                    </ul>

                                </div>

                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h6 class="card-title text-primary m-0">Illustrations</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="./assets/img/etc/studentgroup.png" class="rounded-circle" width="150" alt="student group" />
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni odio veritatis veniam quod ad perferendis quis saepe officia illum commodi et quos vero quia, est hic sunt praesentium qui amet? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quidem tempore atque officia voluptates, magnam possimus recusandae vero porro aspernatur neque ratione quisquam dolorem dicta dolor? Doloribus facere distinctio voluptates?</p>
                                    <a href="javascript:void(0);">Browse Illustrations on more</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>      

                    <!-- End Todo Area -->
                     

                </div>
            </div>
        </div>

    </section>

    <!-- end content area -->

@endsection

@section('styles')
@endsection

@section('scripts')
@endsection
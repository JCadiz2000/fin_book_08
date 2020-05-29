@include('base.header')
    <!-- Start -->
        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
                <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                    <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">FinBook</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active ">
                    <a class="nav-link" href="/account">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Menu
                </div>

                <!-- Category Menu Item -->
                <li class="nav-item">
                    <a class="nav-link" href="/account/category">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Category Management</span></a>
                </li>

                <!-- Ledger Menu Item -->
                <li class="nav-item">
                    <a class="nav-link" href="/account/ledger">
                    <i class="fas fa-fw fa-balance-scale"></i>
                    <span>Ledger</span></a>
                </li>

                <!-- Monthly Menu Item -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <i class="far fa-fw fa-calendar"></i>
                    <span>Monthly Report</span></a>
                </li>


                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

                </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    @include('interfaces.topbar')
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Income (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Income (Monthly)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><span>₱</span>30,000</div>
                                </div>
                                <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-primary"></i>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- Savings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Savings (Monthly)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><span>₱</span>5,000</div>
                                </div>
                                <div class="col-auto">
                                <i class="fas fa-wallet fa-2x text-success"></i>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- Expenses (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Expenses (Monthly)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><span>₱</span>25,000    </div>
                                </div>
                                <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-danger"></i>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 ">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Monthly Overview</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myAreaChart"></canvas>
                            </div>
                            </div>
                        </div>
                        </div>

                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">My Categories</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="categoryList" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                <th>Description</th>
                                                <th>Type</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <tr>
                                                    <td>Food</td>
                                                    <td>Expense</td>
                                                </tr>
                                                <tr>
                                                    <td>Work Salary</td>
                                                    <td>Income</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">My Ledgers</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="ledgerList" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                <th>Date</th>
                                                <th>Desctiption</th>
                                                <th>Category</th>
                                                <th>Ammount</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <tr>
                                                    <td>March 23, 2020</td>
                                                    <td>My Salary from work</td>
                                                    <td>Work Salary</td>
                                                    <td class="text-success"><span>₱</span>5,000</td>
                                                </tr>
                                                <tr>
                                                    <td>March 24, 2020</td>
                                                    <td>Breakfast</td>
                                                    <td>Food</td>
                                                    <td class="text-danger"><span>(<span>₱</span>500)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>March 24, 2020</td>
                                                    <td>Lunch</td>
                                                    <td>Food</td>
                                                    <td class="text-danger"><span>(<span>₱</span>250)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>March 24, 2020</td>
                                                    <td>Dinner</td>
                                                    <td>Food</td>
                                                    <td class="text-danger"><span>(<span>₱</span>1,000)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>March 23, 2020</td>
                                                    <td>My Salary from work</td>
                                                    <td>Work Salary</td>
                                                    <td class="text-success"><span>₱</span>5,000</td>
                                                </tr>
                                                <tr>
                                                    <td>March 24, 2020</td>
                                                    <td>Breakfast</td>
                                                    <td>Food</td>
                                                    <td class="text-danger"><span>(<span>₱</span>500)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>March 24, 2020</td>
                                                    <td>Lunch</td>
                                                    <td>Food</td>
                                                    <td class="text-danger"><span>(<span>₱</span>250)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>March 24, 2020</td>
                                                    <td>Dinner</td>
                                                    <td>Food</td>
                                                    <td class="text-danger"><span>(<span>₱</span>1,000)</span></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; WebDev2 2020</span>
                </div>
                </div>
            </footer>
            <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
            </div>
        </div>
        
    <!-- End -->
    
        @include('base.footer')
        <script>
        $(document).ready(function() {
            $('#categoryList').DataTable({
                ordering: false,
                lengthMenu:[[5,10,25,50,-1],[5,10,25,50,'All']],
                searching: false
            });    
        });
        $(document).ready(function() {
            $('#ledgerList').DataTable({
                ordering: false,
                lengthMenu:[[5,10,25,50,-1],[5,10,25,50,'All']],
                searching: false
            });    
        });
    </script>
    </body>
</html>
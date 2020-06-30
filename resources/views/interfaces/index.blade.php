@extends('layouts.layout')


@section('content')
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
@endsection
 
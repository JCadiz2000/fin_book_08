@extends('layouts.layout')

@section('content')

			<!-- Begin Page Content -->
			<div class="container-fluid">
                <h1 class="h3 mb-2 text-gray-800">Ledger Report</h1>
                <p class="mb-4">Record and manage all of your expenses and incomes here!</p>
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">My Ledgers</h6>
                        <div>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Create"><i class="fas fa-plus"></i> Add</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="ledgerTable" width="100%" cellspacing="0">
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
                                        <td  class="text-success"><span>₱</span>5,000</td>
                                    </tr>
                                    <tr >
                                        <td>March 24, 2020</td>
                                        <td>Breakfast</td>
                                        <td>Food</td>
                                        <td class="text-danger"><span>(<span>₱</span>500)</span></td>
                                    </tr>
                                    <tr >
                                        <td>March 24, 2020</td>
                                        <td>Lunch</td>
                                        <td>Food</td>
                                        <td class="text-danger"><span>(<span>₱</span>250)</span></td>
                                    </tr>
                                    <tr >
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
                                    <tr >
                                        <td>March 24, 2020</td>
                                        <td>Breakfast</td>
                                        <td>Food</td>
                                        <td class="text-danger"><span>(<span>₱</span>500)</span></td>
                                    </tr>
                                    <tr >
                                        <td>March 24, 2020</td>
                                        <td>Lunch</td>
                                        <td>Food</td>
                                        <td class="text-danger"><span>(<span>₱</span>250)</span></td>
                                    </tr>
                                    <tr >
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
			<!-- /.container-fluid -->

@endsection
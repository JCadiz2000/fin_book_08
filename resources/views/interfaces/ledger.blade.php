@include ('base.header')
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
		<li class="nav-item ">
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
		<li class="nav-item ">
			<a class="nav-link" href="/account/category">
			<i class="fas fa-fw fa-list"></i>
			<span>Category Management</span></a>
		</li>
		<!-- Ledger Menu Item -->
		<li class="nav-item active">
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
<!-- End -->
<!-- Create Modal -->
<div class="modal fade" id="Create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Ledger</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form action="">
               <div class="form-group">
                  <label for="date">Date:  </label>
                  <input type="text" name="" id="date" class="form-control datepicker">
               </div>
               <div class="form-group">
                  <label for="desc">Descrption:  </label>
                  <input type="text" name="" id="desc" class="form-control datepicker">
               </div>
               <div class="form-group">
                  <label for="cate">Category:</label>
                  <select name="" id="cate" class="form-control">
                     <option selected disabled>Select Category</option>
                     <option value="Expense">Food</option>
                     <option value="Income">Work Salary</option>
                     <option value="Expense">Transportaion</option>
                     <option value="Income">Gift</option>
                     <option value="Income">Mobile Load</option>
                     <option value="Income">Water Bill</option>
                     <option value="Income">Electricity Bill</option>
                  </select>
               </div>
               <div class="form-group">
                  <label for="amt">Ammount:  </label>
                  <input type="number" name="" id="amt" class="form-control" min="1">
               </div>
               
         </div>
         <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <input type="submit" name="" id="" class="btn btn-success" value="Create">
         </div>
      </div>
      </form>
   </div>
</div>
@include ('base.footer')
<script>
    $(document).ready(function() {
       $('#ledgerTable').DataTable({
           ordering: false,
           lengthMenu:[[5,10,25,50,-1],[5,10,25,50,'All']],
           searching: false
       });    
   });
   $('.datepicker').datepicker();
</script>
</body>
</html>
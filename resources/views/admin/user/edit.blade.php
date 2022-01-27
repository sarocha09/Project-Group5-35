@include('layouts.admin.head')

<body id="page-top">
<div id="wrapper">
	<!-- Sidebar -->
@include('layouts.admin.sidebar')
	<!-- Sidebar -->
	<div id="content-wrapper" class="d-flex flex-column">
	<div id="content">
		<!-- TopBar -->
@include('layouts.admin.header')
		<!-- Topbar -->

		<!-- Container Fluid-->
		<div class="container-fluid" id="container-wrapper">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">หน้า User</h1>
			<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Home</a></li>
			<li class="breadcrumb-item">Tables</li>
			<li class="breadcrumb-item active" aria-current="page">หน้า User</li>
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-12 mb-4">
			<!-- Simple Tables -->
			<div class="card">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">เพิ่มข้อมูล User</h6>
				</div>
				
				<div class="container">

					<form action="{{ url('admin/user/update') }}" method="post" enctype="multipart/form-data">
						{!! csrf_field() !!}
						
						<input type="hidden" name="refId" value="{{$dbUser->id}}">

						<div class="row">
							<div class="col-md-3">
								<label>Username</label>
								<input type="text" class="form-control form-control-sm" name="txtUsername" value="{{$dbUser->username}}" readonly>
							</div>
						</div>

						<!-- <div class="row">
							<div class="col-md-3">
								<label>Password</label>
								<input type="text" class="form-control form-control-sm" name="txtPassword" value="">
							</div>
						</div> -->

						<div class="row">
							<div class="col-md-3">
								<label>Phone</label>
								<input type="text" class="form-control form-control-sm" name="txtPhone" value="{{$dbUser->phone}}">
							</div>
						</div>

						<div class="row">
							<div class="col-md-3 my-3">
								<button class="btn btn-sm btn-primary">บันทึก</button>
							</div>
						</div>
						
					</form>
					
				</div>
				
				<div class="card-footer"></div>
			</div>
			</div>
		</div>
		<!--Row-->

		<!-- Modal Logout -->
		<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
			<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				</div>
				<div class="modal-body">
				<p>Are you sure you want to logout?</p>
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
				<a href="login.html" class="btn btn-primary">Logout</a>
				</div>
			</div>
			</div>
		</div>

		</div>
		<!---Container Fluid-->
	</div>
	<!-- Footer -->
@include('layouts.admin.footer')
	<!-- Footer -->
	</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>


</body>

</html>
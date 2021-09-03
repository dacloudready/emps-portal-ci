<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">

	<style>
		html {
			position: relative;
			min-height: 100%;
		}

		body {
			margin-bottom: 100px;
		}

		.footer {
			position: absolute;
			bottom: 0;
			width: 100%;
			height: 60px;
			line-height: 60px;
			background-color: #f5f5f5;
		}

	</style>
	<title>EMPS PORTAL</title>
</head>
<body>

   <div id="header">
	   <nav class="navbar navbar-light bg-light">
			<div class="container">
				<div id="logo">
					<a class="navbar-brand" href="#">
						<img src="<?=base_url('assets/img/gatewaylogo.jpg');?>" alt="" width="250" height="" class="d-inline-block align-text-top">
					</a>
				</div>
				<div id="time">	
					<h4><?=date('l, d M Y');?></h4>
				</div>
			</div>
		</nav>
   </div>
		
	<div class="container mt-4" id="content">

		<!--<div id="page-title" class="col-sm-12">
			<h4>#0722 - Juan Dela Cruz</h4>
			<hr>
		</div> -->
		<div class="row">
			<div class="col-lg-3">
				<div id="profile_section">
					<div id="profile-img" class="border border-1 py-3">
						<img class="mx-auto d-block" src="<?=base_url('assets\img\profile.png');?>" width="150">
					</div>
					<div id="name_section" class="mt-3">
						<h5 class="text-center">Dan Luther Avergonzado </h5>
						<h6 class="text-center">0722 - IT Head</h6>
					</div>
					<div id="profile_details" class="mt-3">
						<ul class="list-group">
							<li class="list-group-item d-flex justify-content-between align-items-center">
								Time-In
								<span class="badge bg-primary rounded-pill">8:00 AM</span>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
								Time-Out
								<span class="badge bg-primary rounded-pill">5:00 PM</span>
							</li>
							
						</ul>
				
						<div class="text-center mt-3">
							<button class="btn btn-success  w-100 d-block mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">TIMEOUT</button>
							<button class="btn btn-danger  w-100 d-block mb-3">QUIT</button>
						</div>
					</div>
					
				</div>
			</div>

			<div class="col-lg-9">
				<div id="timelogs_section">
					<div class="card card-default">
						<div class="card-header"> <strong> TIMELOGS</strong> </div>
						<div class="card-body">
							<table class="table table-striped table-hover" id="tbl_timelogs">
								<thead>
									<th>EMP ID</th>
									<th>DATE</th>
									<th>TIME-IN</th>
									<th>TIME-OUT</th>
								</thead>
								<tbody>
									<?php foreach($logs as $log): ?>
									<tr>
										<td><?=$log['employee_id'];?></td>
										<td><?=$log['created_at'];?></td>
										<td><?=$log['timein'];?></td>
										<td><?=$log['timeout'];?></td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<!--<div id="task_section" class="mt-4">
					<div class="card card-default">
						<div class="card-header">TASKS</div>
						<div class="card-body">
							<table class="table table-striped" id="tbl_tasks">
								<thead>
									<th>DATE</th>
									<th>TIME-IN</th>
									<th>TIME-OUT</th>
								</thead>
							</table>
						</div>
					</div>
				</div> -->
			</div>

		</div>

	</div>

	<div id="modals">
		<!-- Modal -->
		<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Please enter your ID number:</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="time-out" role="form">
					<div class="form-group">
						<input type="text" class="form-control" value="" name="timeout" id="txtTimeOut">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Submit</button>
			</div>
			</div>
		</div>
		</div>

	</div>

	<div class="footer">
      <div class="container">
        <span class="text-muted">&copy;2021 Gateway Group | Developed By: Gateway Group MIS</span>
      </div>
	</div>


    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready( function () {
   	 	$('#tbl_timelogs').DataTable({searching: false});
	});
</script>
</body>
</html>
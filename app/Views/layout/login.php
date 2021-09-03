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
					<!--<h4><?=date('l, d M Y');?></h4>-->
				</div>
			</div>
		</nav>
   </div>
		
	<div class="container mt-4" id="content">
        <div id="login_screeen">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4">

                    <div class="text-center text-uppercase mt-4 mb-3">
                        <h4>Attendance Monitoring</h4>
                    </div>

                    <div class="card card-default">
                        <div class="card-header">
                            <center>ENTER YOUR ID NUMBER:</center>
                        </div>
                        <div class="card-body">
                            <form action="auth-user" method="POST">
                                <div class="p-2">
                                    <input type="text" class="form-control text-center" name="emp_id">
                                    <button type="submit" class="btn btn-success d-block w-100 mt-2">Submit</button>
                                </div>
                            </form>
                        </div>
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

</body>
</html>
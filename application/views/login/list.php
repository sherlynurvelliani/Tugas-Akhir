 <!doctype html>
<html lang="en">
  <head>
  	<title>Narmada Park</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url('assets/assets/img/lotus_50px.png');?>">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?=base_url('assets/form-login/')?>https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?=base_url('assets/form-login/')?>css/style.css">
	</head>
	<body  style="background-image: url(assets/form-login/gambar1.jpg); background-size: cover;">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<?php 
// <!-- notifikasi error -->
				echo validation_errors('<div class="alert alert_success">','</div>');

    // Notikasi gagal login
				if($this->session->flashdata('warning')){
					echo '<div class="alert alert-warning">';
					echo $this->session->flashdata('warning');
					echo '</div>';
				}

      // notifikasi logout
				if($this->session->flashdata('sukses')){
					echo '<div class="alert alert-success">';
					echo $this->session->flashdata('sukses');
					echo '</div>';
				}
				?>
				<!-- form class login -->
				<form class="login100-form validate-form p-b-33 p-t-5"  <?php  

      // Form buka login
				echo form_open(base_url('login'));

				?>
				
					<div class="login-wrap p-4 p-md-5">
				      	<div class="icon d-flex align-items-center justify-content-center">
				      		<span class="fa fa-user-o">
				      			<img src="<?= site_url('assets/assets/img/lotus_50px.png');?>">
				      		</span>
				      		</div>
					      		<h3 class="text-center mb-" style="color: #BAF7E5">MASUK SEBAGAI ADMIN</h3>
								<form action="#" class="login-form">
						      		<div class="form-group">
						      			<input type="text" name="username"class="form-control rounded-left" placeholder="Username" required>
						      		</div>
						            <div class="form-group d-flex">
						              <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
						            </div>
						            <div class="form-group d-md-flex">
										<div class="w-100 text-md-right">
											<a href="<?php echo base_url('user/Beranda') ?>">Kembali</a>
										</div>
						            </div>
						            <div class="form-group">
						            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">MASUK</button>
						            </div>
				          		</form>
				          		</form <?php echo form_close(); ?>
			        		</div>
			        	</div>
			        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?=base_url('assets/form-login/')?>js/jquery.min.js"></script>
	<script src="<?=base_url('assets/form-login/')?>js/popper.js"></script>
	<script src="<?=base_url('assets/form-login/')?>js/bootstrap.min.js"></script>
	<script src="<?=base_url('assets/form-login/')?>js/main.js"></script>

	</body>
</html>
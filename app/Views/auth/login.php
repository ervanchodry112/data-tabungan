<?php
echo $this->extend('template');

echo $this->section('navbar');
?>

<main style="background-image: url('/assets/img/login-background.jpg') ; background-size: cover; background-repeat: no-repeat;">
	<div class="container">
		<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center pt -3 pb-5">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
						<div class="d-flex justify-content-center py-4">
							<a href="<?= base_url('auth/login') ?>" class="logo grid text-center">
								<div class="g-col-6 mb-2">
									<img src="/assets/img/icon.png" alt="">
								</div>
								<div class="g-col-6">
									<span class="d-none d-lg-block">Save Life</span>
								</div>
							</a>
						</div><!-- End Logo -->

						<div class="card mb-3">

							<div class="card-body ">
								<div class="pt-4 pb-2">
									<h5 class="card-title text-center pb-0 fs-4">Login</h5>
									<p class="text-center small">Login to <b>Save Live</b></p>
								</div>

								<form class="row g-3 needs-validation px-3" novalidate>

									<div class="col-12">
										<label for="yourUsername" class="form-label">Your Username</label>
										<div class="input-group has-validation">
											<input type="text" name="username" class="form-control" id="yourUsername" required>
											<div class="invalid-feedback">Please enter your username!</div>
										</div>
									</div>

									<div class="col-12">
										<label for="yourPassword" class="form-label">Your Password</label>
										<input type="password" name="password" class="form-control" id="yourPassword" required>
										<div class="invalid-feedback">Please enter your password!</div>
									</div>

									<div class="col-12">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
											<label class="form-check-label" for="rememberMe">Remember Account?</label>
										</div>
									</div>
									<div class="col-12">
										<button class="btn btn-primary w-100" type="submit">Login</button>
									</div>
									<div class="col-12">
										<p class="small mb-0">Don't have account? <a href="<?= base_url('auth/register') ?>">Create an account</a></p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>
	</div>
</main><!-- End #main -->

<?= $this->endSection() ?>
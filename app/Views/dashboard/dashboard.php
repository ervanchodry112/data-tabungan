<?php
echo $this->extend('layout/navbar');

echo $this->section('content');
?>

<main id="main" class="main">
	<div class="pagetitle">
		<h1><?= $title ?></h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item">Home</li>
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->

	<section class="section dashboard">
		<div class="row">
			<div class="col-12">
				<div class="row">
					<div class="col-sm-4">
						<div class="card info-card revenue-card">
							<div class="card-body">
								<h5 class="card-title">
									Pemasukan
								</h5>

								<div class="d-flex align-items-center">
									<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
										<i class="bi bi-arrow-up-right"></i>
									</div>
									<div class="ps-3">
										<h6>$3,264</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<!-- Sales Card -->
						<div class="card info-card sales-card">
							<div class="card-body">
								<h5 class="card-title">Saldo</h5>

								<div class="d-flex align-items-center">
									<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
										<i class="bi bi-wallet2"></i>
									</div>
									<div class="ps-3">
										<h6>Rp 50000</h6>
									</div>
								</div>
							</div>
						</div>
						<!-- End Sales Card -->
					</div>
					<div class="col-sm-4">
						<div class="card info-card outcome-card">
							<div class="card-body">
								<h5 class="card-title">
									Pengeluaran
								</h5>

								<div class="d-flex align-items-center">
									<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
										<i class="bi bi-arrow-down-right"></i>
									</div>
									<div class="ps-3">
										<h6>$3,264</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
</main>
<!-- End #main -->

<?= $this->endSection() ?>
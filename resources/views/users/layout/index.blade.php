<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from booking.webestica.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 11:40:16 GMT -->

<head>
	<title>LaporKuy! - Pengaduan Masyarakat</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Pengaduan Masyarakat">

	<!-- Dark mode -->
	<script>
		const storedTheme = localStorage.getItem('theme')

		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
		}

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
			var el = document.querySelector('.theme-icon-active');
			if (el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
					const activeThemeIcon = document.querySelector('.theme-icon-active use')
					const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
					const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

					document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
						element.classList.remove('active')
					})

					btnToActive.classList.add('active')
					activeThemeIcon.setAttribute('href', svgOfActiveBtn)
				}

				window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
					if (storedTheme !== 'light' || storedTheme !== 'dark') {
						setTheme(getPreferredTheme())
					}
				})

				showActiveTheme(getPreferredTheme())

				document.querySelectorAll('[data-bs-theme-value]')
					.forEach(toggle => {
						toggle.addEventListener('click', () => {
							const theme = toggle.getAttribute('data-bs-theme-value')
							localStorage.setItem('theme', theme)
							setTheme(theme)
							showActiveTheme(theme)
						})
					})

			}
		})
	</script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/LaporKuy_Icon.png">

	<!--Remixicon-->
	<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/glightbox/css/glightbox.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/flatpickr/css/flatpickr.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">


	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

	<!--AOS-->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body class="has-navbar-mobile">

	<!-- Header START -->
	<header class="navbar-light header-sticky">
		<!-- Logo Nav START -->
		<nav class="navbar navbar-expand-xl">
			<div class="container">
				<!-- Logo START -->
				<a class="navbar-brand" href="{{route('home')}}">
					<img class="light-mode-item navbar-brand-item" src="assets/images/LaporKuy_Logo_dark.png" alt="logo">
					<img class="dark-mode-item navbar-brand-item" src="assets/images/LaporKuy_Logo_light.png" alt="logo">
				</a>
				<!-- Logo END -->

				<!-- Responsive navbar toggler -->
				<button class="navbar-toggler ms-auto ms-sm-0 p-0 p-sm-2" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-animation">
						<span></span>
						<span></span>
						<span></span>
					</span>
					<span class="d-none d-sm-inline-block small">Menu</span>
				</button>

				<!-- Responsive category toggler -->
				<button class="navbar-toggler ms-sm-auto mx-3 me-md-0 p-0 p-sm-2" type="button"
					data-bs-toggle="collapse" data-bs-target="#navbarCategoryCollapse"
					aria-controls="navbarCategoryCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<i class="bi bi-grid-3x3-gap-fill fa-fw"></i><span
						class="d-none d-sm-inline-block small">Category</span>
				</button>

				<!-- Main navbar START -->
				<div class="navbar-collapse collapse" id="navbarCollapse">
					<ul class="navbar-nav navbar-nav-scroll me-auto">
					</ul>
				</div>
				<!-- Main navbar END -->

				<!-- Profile and Notification START -->
				<ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">

					<!-- Notification dropdown START -->
					<li class="nav-item dropdown ms-0 ms-md-3">
						<!-- Notification button -->
						<a class="nav-notification btn btn-light p-0 mb-0" href="#" role="button"
							data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
							<i class="bi bi-bell fa-fw"></i>
						</a>
						<!-- Notification animation -->
						<span class="notif-badge animation-blink"></span>

						<!-- Notification dropdown menu START -->
						<div
							class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md shadow-lg p-0">
							<div class="card bg-transparent">
								<!-- Card header -->
								<div
									class="card-header bg-transparent d-flex justify-content-between align-items-center border-bottom">
									<h6 class="m-0">Notifikasi <span
											class="badge bg-danger bg-opacity-10 text-danger ms-2">1 Pesan</span></h6>
									<a class="small" href="#">Hapus semua</a>
								</div>

								<!-- Card body START -->
								<div class="card-body p-0">
									<ul class="list-group list-group-flush list-unstyled p-2">
										<!-- Notification item -->
										<li>
											<a href="#"
												class="list-group-item list-group-item-action rounded notif-unread border-0 mb-1 p-3">
												<h6 class="mb-2">Pesan Baru! 📨</h6>
												<p class="mb-0 small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum iste alias aut fugit quae cupiditate?</p>
												<span>Wednesday</span>
											</a>
										</li>
								<!-- Card body END -->

								<!-- Card footer -->
								<div class="card-footer bg-transparent text-center border-top">
									<a href="#" class="btn btn-sm btn-link mb-0 p-0">See all incoming activity</a>
								</div>
							</div>
						</div>
						<!-- Notification dropdown menu END -->
					</li>
					<!-- Notification dropdown END -->

					<!-- Profile dropdown START -->
					<li class="nav-item ms-3 dropdown">
						<!-- Avatar -->
						<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button"
							data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
							aria-expanded="false">
							<img class="avatar-img rounded-2" src="assets/" alt="avatar">
						</a>

						<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
							aria-labelledby="profileDropdown">
							<!-- Profile info -->
							<li class="px-3 mb-3">
								<div class="d-flex align-items-center">
									<!-- Avatar -->
									<div class="avatar me-3">
										<img class="avatar-img rounded-circle shadow" src="assets/"
											alt="avatar">
									</div>
									<div>
										<a class="h6 mt-2 mt-sm-0" href="account-settings.html">Lori Ferguson</a>
										<p class="small m-0">example@gmail.com</p>
									</div>
								</div>
							</li>

							<!-- Links -->
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item bg-danger-soft-hover" href="#"><i
										class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>

							<!-- Dark mode options START -->
							<li>
								<div
									class="nav-pills-primary-soft theme-icon-active d-flex justify-content-between align-items-center p-2 pb-0">
									<span>Mode:</span>
									<button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0"
										data-bs-theme-value="light" data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-title="Light">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
											fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
											<path
												d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
											<use href="#"></use>
										</svg>
									</button>
									<button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0"
										data-bs-theme-value="dark" data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-title="Dark">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
											fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch"
											viewBox="0 0 16 16">
											<path
												d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
											<path
												d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
											<use href="#"></use>
										</svg>
									</button>
									<button type="button"
										class="btn btn-link nav-link text-primary-hover mb-0 p-0 active"
										data-bs-theme-value="auto" data-bs-toggle="tooltip" data-bs-placement="top"
										data-bs-title="Auto">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
											fill="currentColor" class="bi bi-circle-half fa-fw mode-switch"
											viewBox="0 0 16 16">
											<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
											<use href="#"></use>
										</svg>
									</button>
								</div>
							</li>
							<!-- Dark mode options END-->
						</ul>
					</li>
					<!-- Profile dropdown END -->
				</ul>
				<!-- Profile and Notification START -->

			</div>
		</nav>
		<!-- Logo Nav END -->
	</header>
	<!-- Header END -->

	<!-- **************** MAIN CONTENT START **************** -->
	@yield('content')
	<!-- **************** MAIN CONTENT END **************** -->

	<!-- =======================
Footer START -->
	<footer class="bg-dark pt-5">
		<div class="container">
			<!-- Row START -->
			<div class="row g-4">

				<!-- Widget 1 START -->
				<div class="col-lg-3">
					<!-- logo -->
					<a href="{{route('home')}}">
						<img class="h-40px" src="assets/images/LaporKuy_Logo_light.png" alt="logo">
					</a>
					<p class="my-3 text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore, neque!.</p>
					<p class="mb-2"><a href="#" class="text-muted text-primary-hover"><i
								class="bi bi-telephone me-2"></i>+1234 568 963</a> </p>
					<p class="mb-0"><a href="#" class="text-muted text-primary-hover"><i
								class="bi bi-envelope me-2"></i>example@gmail.com</a></p>
				</div>
				<!-- Widget 1 END -->

				<!-- Widget 2 START -->
				<div class="col-lg-8 ms-auto">
					<div class="row g-4">
						<!-- Link block -->
						<div class="col-6 col-md-3">
							<h5 class="text-white mb-2 mb-md-4">Halaman</h5>
							<ul class="nav flex-column text-primary-hover">
								<li class="nav-item"><a class="nav-link text-muted" href="#">About us</a></li>
								<li class="nav-item"><a class="nav-link text-muted" href="#">Contact us</a></li>
								<li class="nav-item"><a class="nav-link text-muted" href="#">News and Blog</a></li>
								<li class="nav-item"><a class="nav-link text-muted" href="#">Meet a Team</a></li>
							</ul>
						</div>

						<!-- Link block -->
						<div class="col-6 col-md-3">
							<h5 class="text-white mb-2 mb-md-4">Layanan</h5>
							<ul class="nav flex-column text-primary-hover">
								<li class="nav-item"><a class="nav-link text-muted" href="#">Privacy Policy</a></li>
								<li class="nav-item"><a class="nav-link text-muted" href="#">Terms</a></li>
								<li class="nav-item"><a class="nav-link text-muted" href="#">Cookie</a></li>
								<li class="nav-item"><a class="nav-link text-muted" href="#">Support</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Widget 2 END -->

			</div><!-- Row END -->

			<!-- Space -->
			<div class="row g-4 justify-content-between mt-0 mt-md-2">

				<!-- Social Media -->
				<div class="col-sm-7 col-md-6 col-lg-4">
					<h5 class="text-white mb-2">Ikuti kami</h5>
					<ul class="list-inline mb-0 mt-3">
						<li class="list-inline-item"> <a class="btn btn-sm px-3 bg-facebook mb-0" href="#"><i 
							class="ri-facebook-fill"></i></a> </li>
						<li class="list-inline-item"> <a class="btn btn-sm shadow px-3 bg-instagram mb-0" href="#"><i 
							class="ri-instagram-line"></i></a> </li>
						<li class="list-inline-item"> <a class="btn btn-sm shadow px-3 bg-twitter mb-0" href="#"><i 
							class="ri-twitter-x-line"></i></a> </li>
					</ul>
				</div>
			</div>

			<!-- Divider -->
			<hr class="mt-4 mb-0">

			<!-- Bottom footer -->
			<div class="row">
				<div class="container">
					<div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-lg-start">
						<!-- copyright text -->
						<div class="text-muted text-primary-hover"> Copyrights ©2023 LaporKuy!. Build by <a
								href="#" class="text-muted">Ninth.Jutsu</a>. </div>
						<!-- copyright links-->
						<div class="nav mt-2 mt-lg-0">
							<ul class="list-inline text-primary-hover mx-auto mb-0">
								<li class="list-inline-item me-0"><a class="nav-link py-1 text-muted" href="#">Privacy
										policy</a></li>
								<li class="list-inline-item me-0"><a class="nav-link py-1 text-muted" href="#">Terms and
										conditions</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- =======================
Footer END -->

	<!-- Back to top -->
	<div class="back-top"></div>

	<!-- Navbar mobile START -->
	<div class="navbar navbar-mobile">
		<ul class="navbar-nav">
			<!-- Nav item Home -->
			<li class="nav-item">
				<a class="nav-link active" href="index.html"><i class="bi bi-house-door fa-fw"></i>
					<span class="mb-0 nav-text">Home</span>
				</a>
			</li>

			<!-- Nav item My Trips -->
			<li class="nav-item">
				<a class="nav-link" href="account-bookings.html"><i class="bi bi-briefcase fa-fw"></i>
					<span class="mb-0 nav-text">My Trips</span>
				</a>
			</li>

			<!-- Nav item Offer -->
			<li class="nav-item">
				<a class="nav-link" href="offer-detail.html"><i class="bi bi-percent fa-fw"></i>
					<span class="mb-0 nav-text">Offer</span>
				</a>
			</li>

			<!-- Nav item Account -->
			<li class="nav-item">
				<a class="nav-link" href="account-profile.html"><i class="bi bi-person-circle fa-fw"></i>
					<span class="mb-0 nav-text">Account</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- Navbar mobile END -->

	<!-- Bootstrap JS -->
	<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Vendors -->
	<script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.js"></script>
	<script src="assets/vendor/flatpickr/js/flatpickr.min.js"></script>
	<script src="assets/vendor/choices/js/choices.min.js"></script>

	<!-- ThemeFunctions -->
	<script src="assets/js/functions.js"></script>

</body>
</html>
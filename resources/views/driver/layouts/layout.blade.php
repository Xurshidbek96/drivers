<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
	<!-- My CSS -->
	<link rel="stylesheet" href="/assets/style.css">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Profile</span>
		</a>
		<ul class="side-menu top">
			<li class="@yield('dashboard')">
				<a href="/driver/dashboard">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
            <li class="@yield('drivers')">
				<a href="{{route('driver.edit', Auth::user()->id)}}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Ma'lumotlarni o'zgartirish</span>
				</a>
			</li>

            <li class="@yield('rating')">
				<a href="/driver/rating">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Berilgan baho</span>
				</a>
			</li>

		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li class="logout text">
                <form action="{{ route('driver.logout') }}" method="POST">
                    @csrf
                    <i class='bx bxs-log-out-circle' ></i>
                    <button>Chiqish</button>
                </form>
            </li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			
			<a href="#" class="profile">
				<img src="/files/{{Auth::user()->img}}">
			</a>
		</nav>
		<!-- NAVBAR -->

    @yield('content')

</section>
<!-- CONTENT -->

<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="/assets/script.js"></script>
</body>
</html>

<x-guest-layout>
  @section('content')
    <!-- Start Page Title Area -->
		<div class="page-title-area bg-2">
			<div class="container">
				<div class="page-title-content">
					<h2>Register</h2>

					<ul>
						<li>
							<a href="index.html">
								Home
							</a>
						</li>

						<li class="active">Register</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start User Area -->
		<div class="user-area ptb-100">
			<div class="container">
				<form class="user-form" action="{{route('register')}}" method="POST">@csrf
					<h3>Register</h3>
						<div class="col-12">
							<div class="form-group">
                                <div class="col-12">
                                    @foreach ($errors->all() as $err)
                                        <p class="alert alert-danger p-3">{{ $err }}</p>
                                    @endforeach
                                </div>
								<label>User name</label>
								<input placeholder="first name and last name" class="form-control" type="text" name="name">
							</div>
						</div>

						<div class="col-12">
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" type="email" name="email">
							</div>
						</div>
                        <div class="col-12">
							<div class="form-group">
								<label>Phone Number</label>
								<input class="form-control" type="tel" name="phone">
							</div>
						</div>

						<div class="col-12">
							<div class="form-group">
								<label>Password</label>
								<input class="form-control" type="password" name="password">
							</div>
						</div>
                        <div class="col-12">
							<div class="form-group">
								<label>Confirm Password</label>
								<input class="form-control" type="password" name="password_confirmation">
							</div>
						</div>
                        <div class="col-12">
							<div class="form-group">
								<label>Referral Code (Optional)</label>
								<input class="form-control" type="text" name="ref">
							</div>
						</div>

						<div class="col-12">
							<button class="default-btn" type="submit">
								Register
							</button>
						</div>

						<div class="col-12">
							<p class="create">Already have an account? <a href="{{route('login')}}">Login</a></p>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- End User Area -->

		<!-- Start Started Area -->
		<div class="started-area bg-color-ee6a3e">
			<div class="container">
				<div class="started-bg">
					<div class="started-content">
						<h3>Ready To Get Started?</h3>
						<p>Explore BITR Payments, or create an account instantly and start accepting payments. You can also contact us to design a custom package for your new online business.</p>

						<div class="started-btn">
							<a href="register.html" class="default-btn">
								Start Now
							</a>
							<a href="contact-us.html" class="default-btn active">
								Contact Us
							</a>
						</div>
					</div>

					<img src="/assets/images/started-shape-1.png" class="shape shape-1" alt="Image">
					<img src="/assets/images/started-shape-2.png" class="shape shape-2" alt="Image">
					<img src="/assets/images/started-shape-3.png" class="shape shape-3" alt="Image">
				</div>
			</div>
		</div>
		<!-- End Started Area -->
  @endsection
</x-guest-layout>

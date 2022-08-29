<x-guest-layout>
  @section('content')
  <div class="page-title-area bg-2">
    <div class="container">
        <div class="page-title-content">
            <h2>Login</h2>

            <ul>
                <li>
                    <a href="index.html">
                        Home
                    </a>
                </li>

                <li class="active">Login</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start User Area -->
<div class="user-area ptb-100">
    <div class="container">
        <form class="user-form">
            <h3>Login</h3>

            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <a href="https://www.google.com/" target="_blank" class="or-login google">
                        Google
                    </a>
                </div>

                <div class="col-lg-6 col-md-6">
                    <a href="https://www.facebook.com/" target="_blank" class="or-login facebook">
                        Facebook
                    </a>
                </div>

                <div class="col-12">
                    <span class="or">Or</span>
                </div>
                <div class="col-12">
                    @foreach ($errors->all() as $err)
                        <p class="alert alert-danger p-3">{{ $err }}</p>
                    @endforeach
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="text" name="name">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password">
                    </div>
                </div>

                <div class="col-12">
                    <div class="login-action">
                        <span class="forgot-login">
                            <a href="register.html">Forgot Password?</a>
                        </span>
                    </div>
                </div>

                <div class="col-12">
                    <button class="default-btn" type="submit">
                        Login
                    </button>
                </div>

                <div class="col-12">
                    <p class="create">New user? <a href="{{route('register')}}">Create an account</a></p>
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

            <img src="assets/images/started-shape-1.png" class="shape shape-1" alt="Image">
            <img src="assets/images/started-shape-2.png" class="shape shape-2" alt="Image">
            <img src="assets/images/started-shape-3.png" class="shape shape-3" alt="Image">
        </div>
    </div>
</div>
<!-- End Started Area -->
  @endsection
</x-guest-layout>

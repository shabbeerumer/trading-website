<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>urCrypto Landing Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/first.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="images/Logo.png" alt="urCrypto Logo" width="120" />

        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Price</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Learn</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Support</a>
              </li>
            </ul>
            @if (Auth::check())
            <!-- Display the user's name when logged in -->
            <span class="ms-3">{{ Auth::user()->name }}</span>
        @else
            <!-- Show "Sign In" link when user is not logged in -->
            <a href="{{ route('pageshowsignin') }}" class="btn ms-3">Sign In</a>
        @endif
        
            <a href="{{route('showtrading')}}" class="btn btn-outline-primary ms-2">Get Started</a>
          </div>
        </div>
      </nav>

    <!-- Hero Section -->
    <section class="hero text-center py-5">
      <div class="container">
        <h1 class="display-5 fw-bold">
           <span class="text-primary"> One platform </span>
             for all things Crypto</h1>
        <p class="lead">
          Open a free account in minutes, right from your phone and make your
          money go further.
        </p>
        <div class="input-group mt-4 w-50 mx-auto">
          <input
            type="email"
            class="form-control form-control-lg"
            placeholder="Enter email address"
          />
          <button class="btn btn-primary btn-lg" type="submit">
            Get started
          </button>
        </div>
        <img src="images/Safari (Big Sur) - Dark.png" alt="" class="mt-3 img-fluid" />
        <div class="row justify-content-around mt-3">
            <div class="col-md-2 col-2 me-2">
                <span>BiNANCE</span>
            </div>
            <div class="col-md-2 col-2 ">
                <span>coinbase</span>

            </div>
            <div class="col-md-2 col-2 ">
                <span>
                  <i class="fa-brands fa-bitcoin ms-1"></i>
                  bitcoin</span>

            </div>
            <div class="col-md-2 col-2 ">
                <span>tether</span>

            </div>
            <div class="col-md-2 col-2 me-2">
            <span>BitMax</span>
        </div>

        </div>
           
        </div>
      </div>
    </section>

    <!-- Platform Stats -->
    <section class="platform-stats py-5 bg-light">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-4" style="border-right: 1px solid gray;">
            <h3>99k</h3>
            <p>Happy Customers</p>
          </div>
          <div class="col-md-4"style="border-right: 1px solid gray;">
            <h3>50k</h3>
            <p>VIP Users</p>
          </div>
          <div class="col-md-4">
            <h3>100+</h3>
            <p>Supported Cryptos</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Sync Features Section -->

    <section class="features py-5 "data-aos="fade-left" data-aos-duration="1000">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-md-6 " id="features-1">
            <h1>The Most Trusted Cryptocurrency Platform</h1>
            <ul class="list-unstyled">
              <li>
               <h5>01 Sync between platforms </h5>
                <span>No matter if you're using our web interface or mobile app — your data is always synced. Just one account for all our services.</span>
            </li>
            <hr>
              <li>
                <h5>02 More focus, less clutter </h5>
              <span>No ads, just the crypto and content you love.</span>
            </li>
            <hr>
              <li>
                <h5>03 Security by default</h5>
                <span>Enable privacy mode and app locking to protect your data.</span>
                </li>
            </ul>
          </div>
          <div class="col-md-6 " id="features-2">
            <img
              src="images/Frame 5400.png"
              alt="Platform features"
              class="img-fluid"
            />
          </div>
        </div>

        <div class="row align-items-center mb-5" data-aos="fade-right" data-aos-duration="1000">
          <div class="col-md-6 order-md-2">
            <h1>Create portfolio today</h1>
            <p>
              Invest in your future with crypto assets and make smart financial
              decisions.
            </p>
          </div>
          <div class="col-md-6 order-md-1">
            <img
              src="images/Left.png"
              alt="Create portfolio"
              class="img-fluid"
            />
          </div>
        </div>

        <div class="row align-items-center mb-5"data-aos="fade-left" data-aos-duration="1000">
          <div class="col-md-6">
            <h1>Lightning-Fast Crypto Trading</h1>
            <p>Get the best trading experience with ultra-fast transactions.</p>
          </div>
          <div class="col-md-6">
            <img src="images/Right.png" alt="Fast trading" class="img-fluid" />
          </div>
        </div>

        <div class="row align-items-center mb-5"data-aos="fade-right" data-aos-duration="1000">
          <div class="col-md-6 order-md-2">
            <h1>Security From Day One</h1>
            <p>
              Rest assured that your investments are protected with the best
              security protocols.
            </p>
          </div>
          <div class="col-md-6 order-md-1">
            <img
              src="images/Left2.png"
              alt="Security features"
              class="img-fluid"
            />
          </div>
        </div>
      </div>
    </section>
    <section class="get-started py-5" data-aos="fade-up"
    data-aos-duration="2000">
      <div class="container text-center">
        <h1 class="mb-3">Get Started in Just Few Minute</h1>
        <p class="text-muted mb-5">
          Has a variety of features that make it the best place to start trading
        </p>

        <div class="row">
          <div class="col-md-4">
            <div class="card border-0 shadow-sm mb-4">
              <div class="card-body">
                <img
                  src="images/Frame 219.png"
                  alt="Sign Up"
                  class="mb-3"
                  width="70"
                />
                <h5>Sign Up</h5>
                <p class="text-muted">
                  Buy Bitcoin or Ethereum, then securely store it in your wallet
                  or send it easily to friends.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow-sm mb-4">
              <div class="card-body">
                <img src="images/Frame 220.png" alt="Fund" class="mb-3" width="70" />
                <h5>Fund</h5>
                <p class="text-muted">
                  Choose your preferred payment method such as bank transfer or
                  credit card to top up your wallet.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow-sm mb-4">
              <div class="card-body">
                <img
                  src="images/Group 5256.png"
                  alt="Buy Crypto"
                  class="mb-3"
                  width="70"
                />
                <h5>Buy Crypto</h5>
                <p class="text-muted">
                  Sign up for free with our web, iOS, or Android and follow our
                  easy process to set up your profile.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="testimonials py-5" data-aos="flip-left"
    data-aos-easing="ease-out-cubic"
    data-aos-duration="2000">
      <div class="container">
        <h1 class="text-center mb-5">What people are saying</h1>
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <img
                    src="images/team1.jpg"
                    class="rounded-circle me-3"
                    alt="Avatar"
                    width="50"
                  />
                  <div>
                    <h6 class="mb-0">John Doe</h6>
                    <small class="text-muted">CEO Motion Design Agency</small>
                  </div>
                </div>
                <p>
                  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua."
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <img
                    src="images/team2.jpg"
                    class="rounded-circle me-3"
                    alt="Avatar"
                    width="50"
                  />
                  <div>
                    <h6 class="mb-0">John Doe</h6>
                    <small class="text-muted">CEO Motion Design Agency</small>
                  </div>
                </div>
                <p>
                  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua."
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <img
                    src="images/team3.jpg"
                    class="rounded-circle me-3"
                    alt="Avatar"
                    width="50"
                  />
                  <div>
                    <h6 class="mb-0">John Doe</h6>
                    <small class="text-muted">CEO Motion Design Agency</small>
                  </div>
                </div>
                <p>
                  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua."
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <img
                    src="images/team4.jpg"
                    class="rounded-circle me-3"
                    alt="Avatar"
                    width="50"
                  />
                  <div>
                    <h6 class="mb-0">John Doe</h6>
                    <small class="text-muted">CEO Motion Design Agency</small>
                  </div>
                </div>
                <p>
                  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua."
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <img
                    src="images/Ellipse 298.png"
                    class="rounded-circle me-3"
                    alt="Avatar"
                    width="50"
                  />
                  <div>
                    <h6 class="mb-0">John Doe</h6>
                    <small class="text-muted">CEO Motion Design Agency</small>
                  </div>
                </div>
                <p>
                  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua."
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <img
                    src="images/Ellipse 299.png"
                    class="rounded-circle me-3"
                    alt="Avatar"
                    width="50"
                  />
                  <div>
                    <h6 class="mb-0">John Doe</h6>
                    <small class="text-muted">CEO Motion Design Agency</small>
                  </div>
                </div>
                <p>
                  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua."
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta bg-primary text-white text-center py-5">
      <div class="container">
        <h2>Join a new generation of investors</h2>
        <a href="#" class="btn btn-outline-light btn-lg mt-3">Get Started</a>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer  py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="images/Logo.png" alt="urCrypto Logo" width="120" />
            <p class="mt-3">Take your crypto to the next level.</p>
            <i class="fa-brands fa-square-facebook"></i>
            <i class="fa-brands fa-square-twitter"></i>
            <i class="fa-brands fa-square-instagram"></i>
            <i class="fa-brands fa-linkedin"></i>
            <i class="fa-brands fa-youtube"></i>
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-3">
                <h6>Company</h6>
                <ul class="list-unstyled">
                  <li><a href="#" class="">About Us</a></li>
                  <li><a href="#" class="">Blog</a></li>
                  <li><a href="#" class="">Student Offer</a></li>
                  <li><a href="#" class="">Investors</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h6>Learn</h6>
                <ul class="list-unstyled">
                  <li><a href="#" class="">Venture Funding</a></li>
                  <li><a href="#" class="">Cryptocurrency</a></li>
                  <li><a href="#" class="">Staking</a></li>
                  <li><a href="#" class="">NFTs</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h6>Support</h6>
                <ul class="list-unstyled">
                  <li><a href="#" class="">Help Center</a></li>
                  <li><a href="#" class="">Contact Us</a></li>
                  <li><a href="#" class="">Privacy Policy</a></li>
                  <li><a href="#" class="">Terms of Service</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h6>Products</h6>
                <ul class="list-unstyled">
                  <li><a href="#" class="">Trade</a></li>
                  <li><a href="#" class="">Crypto Wallet</a></li>
                  <li><a href="#" class="">Portfolio</a></li>
                  <li><a href="#" class="">Learn Crypto</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>

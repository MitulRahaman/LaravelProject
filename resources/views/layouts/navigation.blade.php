<!DOCTYPE html>
<head>
    <title>Appnap Online Shopping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href= "{{ asset('style.css') }}"/>
</head>

<body class="bg-secondary" style="background-color:#6c757d">
    <!-- Navbar -->
    <nav class="navbar" style="background-color: #e3f2fd;">
        <nav class="navbar navbar-expand-xl bg-body-tertiary mx-5 my-2">
            <div class="container-fluid">
                <a class="navbar-brand bg-success-subtle p-2 mx-4" href="https://appnap.io/" target="_blank"><h5>Appnap Online Shopping</h5></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item mx-3">
                            <a class="nav-link active" aria-current="page" href="HomePage.html">Home</a>
                        </li>

                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Products
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Laptop.html">Laptop</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="Desktop.html">Desktop</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="Tablet.html">Tablet</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="Camera.html">Camera</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="Phone.html">Phone</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="Accesories.html">Accesories</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="Offer.html">Offer</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="Refund.html">Refund Policy</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="Customer_care.html">Customer Care</a>
                        </li>
                        <li class="nav-item mx-3">
                                <!-- LogOut -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="nav-link" href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }} {{ Auth::user()->name }}
                                </a>
                            </form>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="EMI.html">EMI Terms</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="Privacy_policy.html">Privacy Policy</a>
                        </li>
                        <li class="nav-item mx-3">
                            <i class="fa-solid fa-cart-shopping pt-3 nav-link" id="cart-icon"></i>
                        </li>
                    </ul>
                    <form class="d-flex mx-4" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </nav>
    <!-- Products -->
    <div class="container bg-dark-subtle">
        <div class="row">
            <div class="card col-md-3 col-sm-12 m-4 card-body">
                <div class="card h-100">
                    <a class="card-title" href="MSI_Titan_GT77HX.html">
                        <img src="https://www.startech.com.bd/image/cache/catalog/laptop/msi/titan-gt77hx-13vi/titan-gt77hx-13vi-04-500x500.webp" class="card-img-top" alt="...">
                        <h5 class="product_name">SI Titan GT77HX Core i9 13th Gen 64GB RAM 4TB SSD 16GB Graphics 17.3 Gaming Laptop"</h5>
                    </a>
                    <div class="card-footer text-body-secondary m-4">
                        <h4 class="text-success price">774900$</h4>
                    </div>
                    <a class="btn btn-primary add-cart">Add to Cart</a>
                </div>
            </div>
            <div class="card col-md-3 col-sm-12 m-4 card-body">
                <div class="card h-100">
                    <a class="card-title" href="https://www.startech.com.bd/dell-xps-15-9520-core-i9-12th-gen-oled-touch-laptop" target="_blank">
                        <img src="https://www.startech.com.bd/image/cache/catalog/laptop/dell/xps-15-9520/xps-15-9520-01-500x500.webp" class="card-img-top" alt="...">
                        <h5 class="product_name">Dell XPS 15 9520 Core i9 12th Gen RTX 3050 Ti 4GB Graphics 32GB RAM 15.6" OLED 3.5K</h5>
                    </a>
                    <div class="card-footer text-body-secondary m-4">
                        <h4 class="text-success price">430000$</h4>
                    </div>
                    <a class="btn btn-primary add-cart">Add to Cart</a>
                </div>
            </div>
            <div class="card col-md-3 col-sm-12 m-4 card-body">
                <div class="card h-100">
                    <a class="card-title" href="https://www.startech.com.bd/razer-blade-15-advanced-model-core-i7-11th-gen-gaming-laptop" target="_blank">
                        <img src="https://www.startech.com.bd/image/cache/catalog/laptop/razer/blade-15-advanced-model/blade-15-advanced-model-01-500x500.jpg" class="card-img-top" alt="...">
                        <h5 class="product_name">Razer Blade 15 Advanced i7 11th Gen RTX 3070 8GB Graphics 15.6" QHD Gaming Laptop</h5>
                    </a>
                    <div class="card-footer text-body-secondary m-4">
                        <h4 class="text-success price">215000$</h4>
                    </div>
                    <a class="btn btn-primary add-cart">Add to Cart</a>
                </div>
            </div>
            <div class="card col-md-3 col-sm-12 m-4 card-body">
                <div class="card h-100">
                    <img src="https://www.startech.com.bd/image/cache/catalog/laptop/dell/latitude-9430/latitude-9430-04-500x500.webp" class="card-img-top" alt="...">
                    <a class="card-title" href="https://www.startech.com.bd/dell-latitude-9430-2-in-1-core-i7-12th-gen-touch-laptop" target="_blank">
                        <h5 class="product_name">Dell Latitude 9430 2-in-1 Core i7 12th Gen 14" QHD+ 16GB DDR5 5200MHz</h5>
                    </a>
                    <div class="card-footer text-body-secondary m-4">
                        <h4 class="text-success price">305000$</h4>
                    </div>
                    <a class="btn btn-primary add-cart">Add to Cart</a>
                </div>
            </div>

            <div class="card col-md-3 col-sm-12 m-4 card-body">
                <div class="card h-100">
                    <a class="card-title" href="https://www.startech.com.bd/microsoft-surface-studio-2-plus-all-in-one-pc" target="_blank">
                        <img src="https://www.startech.com.bd/image/cache/catalog/desktop-pc/all-in-one/microsoft/surface-studio-2-plus/surface-studio-2-plus-01-500x500.webp" class="card-img-top" alt="...">
                        <h5 class="product_name">Microsoft Surface Studio 2+ Core i7 11th Gen RTX 3060 6GB 28" Touchscreen </h5>
                    </a>
                    <div class="card-footer text-body-secondary m-4">
                        <h4 class="text-success price">589000$</h4>
                    </div>
                    <a class="btn btn-primary add-cart">Add to Cart</a>
                </div>
            </div>
            <div class="card col-md-3 col-sm-12 m-4 card-body">
                <div class="card h-100">
                    <a class="card-title" href="https://www.startech.com.bd/amd-ryzen-9-5950x-gaming-pc" target="_blank">
                        <img src="https://www.startech.com.bd/image/cache/catalog/star-pc/intel/ryzen-9-5950x-gaming-pc-02-500x500.webp" class="card-img-top" alt="...">
                        <h5 class="product_name">AMD Ryzen 9 5950X 32GB DDR4 RAM + 500GB PCIe 3.0 NVMe SSD</h5>
                    </a>
                    <div class="card-footer text-body-secondary m-4">
                        <h4 class="text-success price">397000$</h4>
                    </div>
                    <a class="btn btn-primary add-cart">Add to Cart</a>
                </div>
            </div>
            <div class="card col-md-3 col-sm-12 m-4 card-body">
                <div class="card h-100">
                    <a class="card-title" href="https://www.startech.com.bd/apple-imac-m1-24-inch-8-core-gpu-512gb-ssd-blue" target="_blank">
                        <img src="https://www.startech.com.bd/image/cache/catalog/desktop-pc/apple-imac/imac-m1-24-inch/imac-m1-24-inch-04-500x500.jpg" class="card-img-top" alt="...">
                        <h5 class="product_name">Apple iMac 24" 4.5K M1 8 Core CPU, 8 Core GPU, 16GB, 512GB SSD, Blue</h5>
                    </a>
                    <div class="card-footer text-body-secondary m-4">
                        <h4 class="text-success price">160000$</h4>
                    </div>
                    <a class="btn btn-primary add-cart">Add to Cart</a>
                </div>
            </div>
            <div class="card col-md-3 col-sm-12 m-4 card-body">
                <div class="card h-100">
                    <a class="card-title" href="https://www.startech.com.bd/lenovo-ideacentre-aio-5-24iob6-i7-11th-gen-8gb-all-in-one-pc" target="_blank">
                        <img src="https://www.startech.com.bd/image/cache/catalog/desktop-pc/all-in-one/lenovo/ideacentre-aio-5-24iob6/ideacentre-aio-5-24iob6-01-228x228.webp" class="card-img-top" alt="...">
                        <h5 class="product_name">Lenovo IdeaCentre AIO 5 24IOB6 i7 11th Gen 8GB 23.8" FHD Desktop PC</h5>
                    </a>
                    <div class="card-footer text-body-secondary m-4">
                        <h4 class="text-success price">110000$</h4>
                    </div>
                    <a class="btn btn-primary add-cart">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item disabled"><a class="page-link">Previous</a></li>
                <li class="page-item disabled" href="#"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="HomePage2.html">2</a></li>
                <li class="page-item"><a class="page-link" href="HomePage3.html">3</a></li>
                <li class="page-item"><a class="page-link" href="HomePage2.html">Next</a></li>
            </ul>
        </nav>

        <!-- Cart -->
        <div class="cart">
            <h2 class="cart-title">Your Cart</h2>
            <div class="cart-content">

            </div>
            <div class="total">
                <div class="total-title">Total</div>
                <div class="total-price">$0</div>
            </div>
            <button type="button" class="btn-buy">Buy Now</button>
            <i class="fa-solid fa-xmark" id="close-cart"></i>
        </div>

    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start text-dark"
            style="background-color: #ECEFF1">
        <section class="d-flex justify-content-between p-4 text-white"
                 style="background-color: #21D192">
            <div class="me-5">
                <span>Get connected with us on social networks:</span>
            </div>
            <div>
                <a href="https://facebook.com/mitul.unknown/" target="_blank" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://mail.google.com/mail/u/0/#inbox?compose=jrjtXRHDzdKLfBztbJRRqlzBtcRbndPVmLtCsQxSXlVjPTzqNlfqrLGjflFRhPbsnTnSjwpr" target="_blank" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="https://www.linkedin.com/in/masudur-rahaman-675773233/" target="_blank" class="text-white me-4">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://github.com/MitulRahaman" target="_blank" class="text-white me-4">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </section>
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">Appnap Online Shopping</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            We provide the highest level of satisfaction for our customers.
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">About Us</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#!" class="text-dark">Our Main Goal</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark">Services Being Provided</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark">Top-Selling Brands</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark">Customer Satisfaction</a>
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">Useful links</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#!" class="text-dark">Your Account</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark">Terms and Conditions</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark">Shipping Rates</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark">Help</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p><i class="fas fa-home mr-3"></i> House 18/19, Road 1, Block A, Mohanagar Project, Rampura, Dhaka</p>
                        <p>
                            <i class="fas fa-envelope mr-3"></i>
                            <a href="https://mail.google.com/mail/u/0/#inbox?compose=jrjtXRHDzdKLfBztbJRRqlzBtcRbndPVmLtCsQxSXlVjPTzqNlfqrLGjflFRhPbsnTnSjwpr" target="_blank">rahmanmitul00@gmail.com</a>
                        </p>
                        <p><i class="fas fa-phone mr-3"></i> + 880 179 488 3337</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Copyright -->
        <div class="text-center p-3"
             style="background-color: rgba(0, 0, 0, 0.2)">
            � 2023 Copyright:
            <a class="text-dark" href="https://github.com/MitulRahaman" target="_blank">Mitul Rahman</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('cart.js') }}"></script>
</body>

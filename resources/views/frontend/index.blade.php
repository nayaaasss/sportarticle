@extends('layouts.app')


@section('title', 'sportArticle')
@section('content')

  <!-- Home Section -->
  <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">
                    <h1 class="text-white">Discover the World of Sports News<hr></h1>
                    <p class="text-white"><span class="fw-bold">sportArticle</span>Explore the thrilling world of sports with our extensive collection of articles and news updates. Our platform is dedicated to bringing you the latest headlines, game highlights, and expert opinions on your favorite sports. Whether it's football, basketball, tennis, or any other sport, our team of experienced writers and analysts provide in-depth coverage and exclusive insights. Stay informed about upcoming events, player performances, and all the action from around the globe.</p>
                    <button class="buttonn">Read Article</button>
                </div>
            </div>
        </div>
        <!-- <img src="{{asset('assets/image/ski.png')}}" alt="home" class="img-hero position-absolute end-0 bottom-0 float-end"> -->

        <div class="card-list cards float-end shadow">
            <div class="card">
                <label for="branch" >Branch</label>
                <select id="branch">
                    <option>Olympic 2021</option>
                    <!-- Add other options as needed -->
                </select>
            </div>
            <div class="card">
                <label for="type">Type</label>
                <select id="type">
                    <option>Big Ball</option>
                    <!-- Add other options as needed -->
                </select>
            </div>
            <div class="card">
                <label for="result">Result</label>
                <select id="result">
                    <option>Most Popular</option>
                    <!-- Add other options as needed -->
                </select>
            </div>
            <button class="search-button">Search</button>
        </div>
        </section>

        <section class="hal2 ">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-md-6 hero-tagline my-auto">
                        <h1 class="text-black">Most Popular Sport <hr></h1>
                        <p class="text-black"><span class="fw-bold">sportArticle</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus facere sed consequatur quod molestias maiores laborum laboriosam voluptatibus nihil autem molestiae quam, fugiat perspiciatis iste vero voluptas accusamus ullam repellendus.</p>
                        <button class="btn-second">Read Article</button>
                    </div>
                    <div class="col-md-3">
                        <img src="{{asset('assets/image/voly.png')}}" class="image" alt="">
                        <div>
                            <h3>VolleyBall</h3>
                        </div>
                </div>
                    <div class="col-md-3">
                        <img src="{{asset('assets/image/ball.png')}}" class="image" alt="">
                        <div>
                            <h3>FootBall</h3>
                        </div>
                </div>
                </div>

               
            </div>
        </section>

        <section id="AboutUs" class="about-us" class="py-5">
            <div class="container">
                <div class="row">
                  
                    <div class="col-md-6">
                        <img src="{{asset('assets/image/about.png')}}" class="img-fluid rounded" alt="About Us Image">
                    </div>

                    <div class="col-md-6">
                        <h2 class="mb-4 text-white">About Us</h2>
                        <p class="text-white">We are passionate about sports and committed to promoting a healthy lifestyle through various physical activities. Our team consists of experienced athletes and fitness enthusiasts who aim to inspire and motivate others to stay active.</p>
                        <p class="text-white">At Sportify, we offer a wide range of sports programs and events for people of all ages and skill levels. Whether you're a beginner looking to try something new or a seasoned athlete seeking to improve your performance, we have something for everyone.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="on py-5">
                <div class="container">
                        <div class="col-md-12">
                            <h4>News Articles</h4>
                            <div class="underline mb-4"></div>
                        </div>
                        
                    <div class="trending row">
                        <div class="card-trending card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                        <div class="card-trending card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                        <div class="card-trending card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                        <div class="card-trending card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                 </div>
                    
                </div>
            </div>
        </section>

        <section class="testimonial py-5 bg-white">
            <div class="container">
                <!-- FOR DEMO PURPOSE -->
                <div class="row">
                    <div class="col-lg-3">
                        <header class="text-center pb-5">
                            <h1 class="h2">Their Comment About Us</h1>
                        </header>
                    </div>
                </div><!-- END -->
        
                <div class="row justify-content-center">
                    <div class="col-md-4"> <!-- Menggunakan col-md-4 untuk membuat tiga kartu dalam satu baris -->
                        <div class="testimonial-card">
                            <div class="quote">&#8220;</div>
                            <p class="comment">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.&#8221;</p>
                            <div class="profile">
                                <img src="asset/taylor swift eras tour icon.jpg" alt="Profile Picture">
                                <div class="profile-info">
                                    <strong>John Doe</strong>
                                    <span>CEO, Company</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"> <!-- Menggunakan col-md-4 untuk membuat tiga kartu dalam satu baris -->
                        <div class="testimonial-card">
                            <div class="quote">&#8220;</div>
                            <p class="comment">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.&#8221;</p>
                            <div class="profile">
                                <img src="asset/taylor swift eras tour icon.jpg" alt="Profile Picture">
                                <div class="profile-info">
                                    <strong>Jane Smith</strong>
                                    <span>Marketing Manager, Company</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"> <!-- Menggunakan col-md-4 untuk membuat tiga kartu dalam satu baris -->
                        <div class="testimonial-card">
                            <div class="quote">&#8220;</div>
                            <p class="comment">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.&#8221;</p>
                            <div class="profile">
                                <img src="asset/taylor swift eras tour icon.jpg" alt="Profile Picture">
                                <div class="profile-info">
                                    <strong>Emily Johnson</strong>
                                    <span>Product Manager, Company</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="ooter">
        <div>
          <!-- Footer -->
          <footer>
            <!-- Grid container -->
            <div>
              <!-- Section: Links -->
              <section class="">
                <!--Grid row-->
                <div class="row">
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <img src="asset/logoSport.png" width="40px" class="mb-4" >
                    <h6 class="text-uppercase mb-4 font-weight-bold">
                      sportArticle
                    </h6>
                    <p>
                      Here you can use rows and columns to organize your footer
                      content. Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit.
                    </p>
                  </div>
                  <!-- Grid column -->
        
                  <hr class="w-100 clearfix d-md-none" />
        
                  <!-- Grid column -->
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                    <p>
                      <a class="text-black">Home</a>
                    </p>
                    <p>
                      <a class="text-black">About Us</a>
                    </p>
                    <p>
                      <a class="text-black">Article</a>
                    </p>
                  </div>
                  <!-- Grid column -->
        
                  <hr class="w-100 clearfix d-md-none" />
        
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">
                      Useful links
                    </h6>
                    <p>
                      <a class="text-black">Your Account</a>
                    </p>
                    <p>
                      <a class="text-black">Become an Affiliate</a>
                    </p>
                    <p>
                      <a class="text-black">Shipping Rates</a>
                    </p>
                    <p>
                      <a class="text-black">Help</a>
                    </p>
                  </div>
        
                  <!-- Grid column -->
                  <hr class="w-100 clearfix d-md-none" />
        
                  <!-- Grid column -->
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                  </div>
                  <!-- Grid column -->
                </div>
                <!--Grid row-->
              </section>
              <!-- Section: Links -->
        
              <hr class="my-3">
        
              <!-- Section: Copyright -->
              <section>
                <div class="row d-flex align-items-center">
                  <!-- Grid column -->
                  <div class="col-md-7 col-lg-8 text-center text-md-start">
                    <!-- Copyright -->
                    <div class="p-3">
                      © 2024 Copyright:
                      <a class="text-black">sportArticles</a>
                    </div>
                    <!-- Copyright -->
                  </div>
                  <!-- Grid column -->
        
                  <!-- Grid column -->
                  <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                    <!-- Facebook -->
                    <a
                       class="btn btn-outline-light btn-floating m-1"
                       class="text-black"
                       role="button"
                       ><i class="fab fa-facebook-f"></i
                      ></a>
        
                    <!-- Twitter -->
                    <a
                       class="btn btn-outline-light btn-floating m-1"
                       class="text-black"
                       role="button"
                       ><i class="fab fa-twitter"></i
                      ></a>
        
                    <!-- Google -->
                    <a
                       class="btn btn-outline-light btn-floating m-1"
                       class="text-black"
                       role="button"
                       ><i class="fab fa-google"></i
                      ></a>
        
                    <!-- Instagram -->
                    <a
                       class="btn btn-outline-light btn-floating m-1"
                       class="text-black"
                       role="button"
                       ><i class="fab fa-instagram"></i
                      ></a>
                  </div>
                  <!-- Grid column -->
                </div>
              </section>
              <!-- Section: Copyright -->
            </div>
            <!-- Grid container -->
          </footer>
          <!-- Footer -->
        </div>
        <!-- End of .container -->
      </section>
@endsection
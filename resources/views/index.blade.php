<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])
  
    
</head>

<body>
    <x-navbar></x-navbar>

    <section id="home" class="head-section">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Welcome to ABC Academy</h1>
            <p class="lead mb-5">Nurturing minds, inspiring futures. Discover excellence in education.</p>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-title">About Us</h2>
                    <p class="lead">Founded in 1985, Evergreen Academy has been committed to academic excellence for
                        over 35 years.</p>
                    <p>Our school provides a nurturing environment where students can develop intellectually, socially,
                        and emotionally. We believe in fostering a love for learning that extends beyond the classroom.
                    </p>
                    <p>Our faculty consists of experienced educators who are dedicated to helping each student reach
                        their full potential through personalized attention and innovative teaching methods.</p>
                    <div class="mt-4">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="me-3 text-primary">
                                        <i class="fas fa-medal fa-2x"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">Award-winning</h5>
                                        <p class="mb-0">Excellence recognized</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="me-3 text-primary">
                                        <i class="fas fa-users fa-2x"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">Small Classes</h5>
                                        <p class="mb-0">Personalized attention</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="me-3 text-primary">
                                        <i class="fas fa-laptop fa-2x"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">Modern Facilities</h5>
                                        <p class="mb-0">State-of-the-art technology</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="me-3 text-primary">
                                        <i class="fas fa-globe fa-2x"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">Global Perspective</h5>
                                        <p class="mb-0">International programs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card border-0">
                        <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            class="img-fluid rounded" alt="About Us">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="section bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-5">Our Programs</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            class="card-img-top" alt="Elementary Program">
                        <div class="card-body">
                            <h5 class="card-title">Elementary Program</h5>
                            <p class="card-text">Our elementary program focuses on building strong foundations in
                                literacy, numeracy, and critical thinking while nurturing curiosity and creativity.</p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item">Ages 5-10</li>
                                <li class="list-group-item">Project-based learning</li>
                                <li class="list-group-item">Arts integration</li>
                            </ul>
                            <a href="#" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            class="card-img-top" alt="Middle School Program">
                        <div class="card-body">
                            <h5 class="card-title">Middle School Program</h5>
                            <p class="card-text">Our middle school program balances academic rigor with social-emotional
                                development, preparing students for the challenges of high school.</p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item">Ages 11-13</li>
                                <li class="list-group-item">Advanced math and science</li>
                                <li class="list-group-item">Leadership opportunities</li>
                            </ul>
                            <a href="#" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            class="card-img-top" alt="High School Program">
                        <div class="card-body">
                            <h5 class="card-title">High School Program</h5>
                            <p class="card-text">Our high school program offers rigorous academics, diverse electives,
                                and college preparation to ensure success in higher education and beyond.</p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item">Ages 14-18</li>
                                <li class="list-group-item">AP and honors courses</li>
                                <li class="list-group-item">College counseling</li>
                            </ul>
                            <a href="#" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Campus Section -->
    <section id="campus" class="section">
        <div class="container">
            <h2 class="section-title text-center mb-5">Our Campus</h2>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            class="card-img-top" alt="Library">
                        <div class="card-body">
                            <h5 class="card-title">Modern Library</h5>
                            <p class="card-text">Our state-of-the-art library houses over 20,000 books and digital
                                resources.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1564069114553-7215e1ff1890?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            class="card-img-top" alt="Science Lab">
                        <div class="card-body">
                            <h5 class="card-title">Science Labs</h5>
                            <p class="card-text">Fully equipped laboratories for biology, chemistry, and physics
                                experiments.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1547347298-4074fc3086f0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            class="card-img-top" alt="Sports Facilities">
                        <div class="card-body">
                            <h5 class="card-title">Sports Facilities</h5>
                            <p class="card-text">Indoor and outdoor facilities for basketball, soccer, tennis, and
                                swimming.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1526649661456-89c7ed4d00b8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            class="card-img-top" alt="Performing Arts">
                        <div class="card-body">
                            <h5 class="card-title">Arts Center</h5>
                            <p class="card-text">A 300-seat auditorium, music rooms, and art studios for creative
                                expression.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-4">ABC Academy</h5>
                    <p>Providing exceptional education since 1985. Our mission is to inspire a lifelong love of learning
                        in a supportive and challenging environment.</p>
                    <div class="social-icons mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-4">Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="/">Home</a></li>
                        <li><a href="/students">About</a></li>
                        <li><a href="#programs">Programs</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-4">Contact Us</h5>
                    <div class="mb-4">
                        <h6 class="fw-bold"><i class="fas fa-map-marker-alt me-2 text-primary"></i>Address</h6>
                        <p>123 Education Lane<br>Springfield, ST 12345<br>United States</p>
                    </div>
                    <div class="mb-4">
                        <h6 class="fw-bold"><i class="fas fa-phone me-2 text-primary"></i>Phone</h6>
                        <p>(555) 123-4567</p>
                    </div>
                    <div class="mb-4">
                        <h6 class="fw-bold"><i class="fas fa-envelope me-2 text-primary"></i>Email</h6>
                        <p>info@evergreenacademy.edu</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-4">Office Hours</h5>
                    <p>Monday - Friday: 8:00 AM - 4:30 PM<br>
                        Saturday: 9:00 AM - 12:00 PM<br>
                        Sunday: Closed</p>
                </div>
            </div>
            <div class="text-center mt-4">
                <p class="copyright">© {{date('Y')}} ABC Academy. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>
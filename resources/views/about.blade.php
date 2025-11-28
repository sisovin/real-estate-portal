@extends('layouts.front')

@section('content')
    <!-- Hero Section -->
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{ asset('images/about.jpg') }}');" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10">
                    <h1 class="mb-2">About VenueHub</h1>
                    <p class="mb-5">Connecting people with perfect spaces for unforgettable moments</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Story Section -->
    <div class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="site-section-title">
                        <h2>Our Story</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <img src="{{ asset('images/img_5.jpg') }}" alt="Our Story" class="img-fluid rounded">
                </div>
                <div class="col-lg-6 mb-4">
                    <h3 class="mb-4">Born from Passion for Perfect Events</h3>
                    <p>VenueHub was founded in 2020 with a simple mission: to make finding the perfect venue for any occasion as easy as possible. Our founders, experienced event planners themselves, recognized the frustration of searching through countless options to find that one special place.</p>
                    <p>What started as a small platform connecting local venues with event organizers has grown into the premier destination for venue discovery and booking. We believe that the right venue can transform any event from ordinary to extraordinary.</p>
                    <p class="mb-4">Today, we proudly serve thousands of event planners, businesses, and individuals across multiple cities, offering a curated selection of premium venues for every type of celebration and gathering.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Mission & Vision -->
    <div class="site-section bg-light">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="site-section-title">
                        <h2>Our Mission & Vision</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="service text-center border rounded p-4 h-100">
                        <span class="icon flaticon-target display-4 text-primary mb-4 d-block"></span>
                        <h3 class="service-heading mb-3">Our Mission</h3>
                        <p>To democratize access to exceptional venues, empowering event creators to focus on what matters most - crafting unforgettable experiences.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="service text-center border rounded p-4 h-100">
                        <span class="icon flaticon-trophy display-4 text-primary mb-4 d-block"></span>
                        <h3 class="service-heading mb-3">Our Vision</h3>
                        <p>To become the world's most trusted platform for venue discovery, where every event planner finds their perfect space effortlessly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- What We Offer -->
    <div class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="site-section-title">
                        <h2>What We Offer</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service text-center border rounded p-4 h-100">
                        <span class="icon flaticon-house display-4 text-primary mb-4 d-block"></span>
                        <h3 class="service-heading mb-3">Curated Venues</h3>
                        <p>Hand-picked selection of premium venues across multiple categories including banquet halls, outdoor spaces, conference rooms, and unique experiential locations.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service text-center border rounded p-4 h-100">
                        <span class="icon flaticon-search display-4 text-primary mb-4 d-block"></span>
                        <h3 class="service-heading mb-3">Smart Search</h3>
                        <p>Advanced filtering by location, capacity, event type, amenities, and budget to help you find the perfect venue in minutes, not hours.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service text-center border rounded p-4 h-100">
                        <span class="icon flaticon-calendar display-4 text-primary mb-4 d-block"></span>
                        <h3 class="service-heading mb-3">Easy Booking</h3>
                        <p>Seamless booking process with instant confirmation, secure payments, and direct communication with venue managers.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service text-center border rounded p-4 h-100">
                        <span class="icon flaticon-camera display-4 text-primary mb-4 d-block"></span>
                        <h3 class="service-heading mb-3">High-Quality Photos</h3>
                        <p>Professional photography showcasing each venue's best features, helping you visualize your event before booking.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service text-center border rounded p-4 h-100">
                        <span class="icon flaticon-support display-4 text-primary mb-4 d-block"></span>
                        <h3 class="service-heading mb-3">24/7 Support</h3>
                        <p>Dedicated customer support team available around the clock to assist with bookings, venue questions, and special requests.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service text-center border rounded p-4 h-100">
                        <span class="icon flaticon-review display-4 text-primary mb-4 d-block"></span>
                        <h3 class="service-heading mb-3">Verified Reviews</h3>
                        <p>Authentic reviews from real event planners and venue users to help you make informed decisions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Section -->
    <div class="site-section bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4 text-center">
                    <span class="display-4 text-white">{{ $globalLocations->count() }}</span>
                    <p class="text-white">Locations</p>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 text-center">
                    <span class="display-4 text-white">{{ $globalEventTypes->count() }}</span>
                    <p class="text-white">Event Types</p>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 text-center">
                    <span class="display-4 text-white">500+</span>
                    <p class="text-white">Venues</p>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 text-center">
                    <span class="display-4 text-white">10K+</span>
                    <p class="text-white">Happy Customers</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="site-section-title">
                        <h2>Meet Our Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="team-member text-center">
                        <img src="{{ asset('images/person_1.jpg') }}" alt="Team Member" class="img-fluid mb-4 rounded-circle">
                        <div class="text p-3">
                            <h3 class="mb-2 font-weight-light text-black">Sarah Johnson</h3>
                            <span class="d-block mb-3 text-muted">Founder & CEO</span>
                            <p>Sarah brings over 15 years of event planning experience and founded VenueHub to solve the venue discovery challenge she faced countless times in her career.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="team-member text-center">
                        <img src="{{ asset('images/person_2.jpg') }}" alt="Team Member" class="img-fluid mb-4 rounded-circle">
                        <div class="text p-3">
                            <h3 class="mb-2 font-weight-light text-black">Michael Chen</h3>
                            <span class="d-block mb-3 text-muted">Head of Operations</span>
                            <p>Michael oversees our venue partnerships and ensures every listing meets our high standards for quality, accuracy, and customer service.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="team-member text-center">
                        <img src="{{ asset('images/person_3.jpg') }}" alt="Team Member" class="img-fluid mb-4 rounded-circle">
                        <div class="text p-3">
                            <h3 class="mb-2 font-weight-light text-black">Emily Rodriguez</h3>
                            <span class="d-block mb-3 text-muted">Customer Success Manager</span>
                            <p>Emily leads our customer support team, ensuring every client has a smooth and successful experience from search to celebration.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="site-section bg-light">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="site-section-title">
                        <h2>Why Choose VenueHub?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="feature d-flex align-items-center">
                                <span class="icon flaticon-check mr-3 display-4 text-primary"></span>
                                <div class="text">
                                    <h2 class="mb-2">Verified Venues</h2>
                                    <p class="mb-0">Every venue on our platform is personally visited and verified by our team to ensure quality and accuracy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="feature d-flex align-items-center">
                                <span class="icon flaticon-check mr-3 display-4 text-primary"></span>
                                <div class="text">
                                    <h2 class="mb-2">Transparent Pricing</h2>
                                    <p class="mb-0">No hidden fees or surprise charges. See exact pricing upfront with clear cancellation policies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="feature d-flex align-items-center">
                                <span class="icon flaticon-check mr-3 display-4 text-primary"></span>
                                <div class="text">
                                    <h2 class="mb-2">Expert Support</h2>
                                    <p class="mb-0">Our team of event experts is available to help you find the perfect venue and answer any questions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <img src="{{ asset('images/img_6.jpg') }}" alt="Why Choose Us" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="mb-4">Ready to Find Your Perfect Venue?</h2>
                    <p class="mb-4">Join thousands of event planners who trust VenueHub to make their events unforgettable.</p>
                    <a href="{{ route('home') }}" class="btn btn-primary btn-lg px-5">Start Your Search</a>
                </div>
            </div>
        </div>
    </div>

@endsection
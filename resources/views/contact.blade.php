@extends('layouts.front')

@section('content')
    <!-- Hero Section -->
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{ asset('images/about.jpg') }}');" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10">
                    <h1 class="mb-2">Contact Us</h1>
                    <p class="mb-5">Get in touch with our team for venue inquiries, partnerships, or support</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Information Cards -->
    <div class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="site-section-title">
                        <h2>Get In Touch</h2>
                        <p>We're here to help you find the perfect venue for your next event</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="contact-info-card text-center p-4 border rounded h-100">
                        <span class="icon flaticon-phone-call display-4 text-primary mb-4 d-block"></span>
                        <h3 class="h4 mb-3">Phone</h3>
                        <p class="mb-2"><strong>Main Office:</strong></p>
                        <p class="mb-0">+2 102 3923 3922</p>
                        <p class="mb-2"><strong>Support:</strong></p>
                        <p class="mb-0">+2 102 3923 3923</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="contact-info-card text-center p-4 border rounded h-100">
                        <span class="icon flaticon-email display-4 text-primary mb-4 d-block"></span>
                        <h3 class="h4 mb-3">Email</h3>
                        <p class="mb-2"><strong>General Inquiries:</strong></p>
                        <p class="mb-0">info@venuehub.com</p>
                        <p class="mb-2"><strong>Support:</strong></p>
                        <p class="mb-0">support@venuehub.com</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="contact-info-card text-center p-4 border rounded h-100">
                        <span class="icon flaticon-map display-4 text-primary mb-4 d-block"></span>
                        <h3 class="h4 mb-3">Location</h3>
                        <p class="mb-2"><strong>Headquarters:</strong></p>
                        <p class="mb-0">123 Business District<br>London, UK EC1A 1BB</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form and Map -->
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="bg-white p-5 border rounded">
                        <h3 class="mb-4">Send us a Message</h3>

                        <!-- Flash Messages -->
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-check-circle"></i> {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-triangle"></i> {{ session('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-triangle"></i>
                                <strong>Please correct the following errors:</strong>
                                <ul class="mb-0 mt-2">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="first_name" class="form-label">First Name *</label>
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                                    @error('first_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="last_name" class="form-label">Last Name *</label>
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                                    @error('last_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject *</label>
                                <select class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" required>
                                    <option value="">Select a subject</option>
                                    <option value="venue_inquiry" {{ old('subject') == 'venue_inquiry' ? 'selected' : '' }}>Venue Inquiry</option>
                                    <option value="partnership" {{ old('subject') == 'partnership' ? 'selected' : '' }}>Partnership Opportunity</option>
                                    <option value="support" {{ old('subject') == 'support' ? 'selected' : '' }}>Technical Support</option>
                                    <option value="billing" {{ old('subject') == 'billing' ? 'selected' : '' }}>Billing Question</option>
                                    <option value="other" {{ old('subject') == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message *</label>
                                <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter" value="1" {{ old('newsletter') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="newsletter">
                                        Subscribe to our newsletter for venue updates and special offers
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg px-5">Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="bg-white p-5 border rounded">
                        <h3 class="mb-4">Visit Our Office</h3>
                        <div id="map" style="height: 300px; width: 100%;" class="mb-4 rounded"></div>
                        <div class="office-info">
                            <h4 class="mb-3">Headquarters</h4>
                            <p class="mb-2"><strong>Address:</strong><br>123 Business District<br>London, UK EC1A 1BB</p>
                            <p class="mb-2"><strong>Phone:</strong><br>+2 102 3923 3922</p>
                            <p class="mb-2"><strong>Email:</strong><br>info@venuehub.com</p>
                            <p class="mb-0"><strong>Business Hours:</strong><br>
                                Monday - Friday: 9:00 AM - 6:00 PM<br>
                                Saturday: 10:00 AM - 4:00 PM<br>
                                Sunday: Closed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Office Hours and FAQ -->
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <h3 class="mb-4">Business Hours</h3>
                    <div class="office-hours">
                        <div class="d-flex justify-content-between py-2 border-bottom">
                            <span>Monday - Friday</span>
                            <span class="text-primary">9:00 AM - 6:00 PM</span>
                        </div>
                        <div class="d-flex justify-content-between py-2 border-bottom">
                            <span>Saturday</span>
                            <span class="text-primary">10:00 AM - 4:00 PM</span>
                        </div>
                        <div class="d-flex justify-content-between py-2 border-bottom">
                            <span>Sunday</span>
                            <span class="text-muted">Closed</span>
                        </div>
                        <div class="d-flex justify-content-between py-2 border-bottom">
                            <span>Emergency Support</span>
                            <span class="text-primary">24/7 Available</span>
                        </div>
                    </div>

                    <h3 class="mb-4 mt-5">Follow Us</h3>
                    <div class="social-links">
                        <a href="#" class="btn btn-outline-primary btn-sm mr-2 mb-2"><span class="icon-facebook"></span> Facebook</a>
                        <a href="#" class="btn btn-outline-primary btn-sm mr-2 mb-2"><span class="icon-twitter"></span> Twitter</a>
                        <a href="#" class="btn btn-outline-primary btn-sm mr-2 mb-2"><span class="icon-instagram"></span> Instagram</a>
                        <a href="#" class="btn btn-outline-primary btn-sm mr-2 mb-2"><span class="icon-linkedin"></span> LinkedIn</a>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <h3 class="mb-4">Frequently Asked Questions</h3>
                    <div class="accordion" id="faqAccordion">
                        <div class="card border-0 mb-3">
                            <div class="card-header bg-light border-0" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link text-left w-100 p-0 text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How do I book a venue?
                                        <span class="float-right">+</span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                                <div class="card-body">
                                    You can book a venue directly through our website. Search for available venues, select your preferred dates, and complete the booking process. You'll receive a confirmation email with all the details.
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-3">
                            <div class="card-header bg-light border-0" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link text-left w-100 p-0 text-decoration-none collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What is your cancellation policy?
                                        <span class="float-right">+</span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                                <div class="card-body">
                                    Our cancellation policy varies by venue. Generally, cancellations made 30 days or more before the event receive a full refund. Cancellations within 7-30 days may incur a 50% fee, and cancellations within 7 days may not be eligible for refund.
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-3">
                            <div class="card-header bg-light border-0" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link text-left w-100 p-0 text-decoration-none collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Do you offer venue partnerships?
                                        <span class="float-right">+</span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                                <div class="card-body">
                                    Yes! We're always looking to partner with quality venues. If you own or manage a venue, please contact our partnerships team at partnerships@venuehub.com to discuss collaboration opportunities.
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-3">
                            <div class="card-header bg-light border-0" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link text-left w-100 p-0 text-decoration-none collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        How do I list my venue?
                                        <span class="float-right">+</span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqAccordion">
                                <div class="card-body">
                                    To list your venue on VenueHub, visit our partner portal or contact our venue acquisition team. We'll guide you through the listing process and help showcase your venue to our community of event planners.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="site-section bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="text-white mb-4">Ready to Find Your Perfect Venue?</h2>
                    <p class="text-white mb-4">Browse our extensive collection of premium venues and book your next event today.</p>
                    <a href="{{ route('home') }}" class="btn btn-light btn-lg px-5">Browse Venues</a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')
<script>
    // Initialize Google Maps
    function initMap() {
        // Default coordinates for London (you can replace with your actual office coordinates)
        var officeLocation = {lat: 51.5074, lng: -0.1278};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: officeLocation,
            styles: [
                {
                    "featureType": "all",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "weight": "2.00"
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#9c9c9c"
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "landscape.man_made",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#eeeeee"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#7b7b7b"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#46bcec"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#c8d7d4"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#070707"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                }
            ]
        });

        var marker = new google.maps.Marker({
            position: officeLocation,
            map: map,
            title: 'VenueHub Headquarters'
        });

        var infoWindow = new google.maps.InfoWindow({
            content: '<div><strong>VenueHub Headquarters</strong><br>123 Business District<br>London, UK EC1A 1BB</div>'
        });

        marker.addListener('click', function() {
            infoWindow.open(map, marker);
        });
    }

    // Form validation and submission
    $(document).ready(function() {
        $('.contact-form').on('submit', function(e) {
            // Basic client-side validation
            var isValid = true;
            $(this).find('input[required], select[required], textarea[required]').each(function() {
                if ($(this).val().trim() === '') {
                    $(this).addClass('is-invalid');
                    isValid = false;
                } else {
                    $(this).removeClass('is-invalid');
                }
            });

            if (!isValid) {
                e.preventDefault();
                alert('Please fill in all required fields.');
                return false;
            }

            // Show loading state
            var submitBtn = $(this).find('button[type="submit"]');
            submitBtn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...');
        });

        // Real-time validation
        $('.contact-form input, .contact-form select, .contact-form textarea').on('blur', function() {
            if ($(this).prop('required') && $(this).val().trim() === '') {
                $(this).addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid');
            }
        });

        // FAQ accordion functionality
        $('.accordion .btn-link').on('click', function() {
            var icon = $(this).find('.float-right');
            if ($(this).hasClass('collapsed')) {
                icon.text('+');
            } else {
                icon.text('−');
            }
        });
    });
</script>

@if(env('GOOGLE_MAPS_API_KEY'))
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initMap" async defer></script>
@endif
@endsection
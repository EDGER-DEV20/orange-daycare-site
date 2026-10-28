@extends('layout.layout')

@section('title', 'Home | Orange Daycare')

@section('content')

<div class="hero">
    <div class="container">
        <h1 class="hero-heading" data-aos="fade-down" data-aos-duration="1000">Learn, Play & Grow Well at<span>Orange</span>Daycare</h1>

        <P data-aos="fade-down" data-aos-duration="2000">We provide a safe, nurturing and stimulating environment where every child is encouraged to learn, explore, make friends and develop their unique potential.</P>

        <div class="hero-btns" data-aos="fade-down">
            <a href="/#contacts" class="hero-btn" data-aos="fade-down-right" data-aos-duration="2500">Enroll Your Child</a>
            <a href="/#programs" class="hero-btn hero-btn-2">Explore Our Programs</a>
        </div>

        <div class="hero-images" data-aos="fade-up">
            <img src="{{asset('images/image3.jfif')}}" class="img-1" alt="Hero image" loading="lazy" />
            <img src="{{asset('images/image1.jfif')}}" class="img-2" alt="Hero image" loading="lazy" />
            <img src="{{asset('images/image2.jfif')}}" class="img-3" alt="Hero image" loading="lazy" />
        </div>
    </div>
</div>

<div class="summary">
    <div class="container">
        <div class="row row-cols-2 row-cols-md-4 g-4">
            <div class="col">
                <h1>65+</h1>
                <h5>Children</h5>
            </div>
            <div class="col">
                <h1>12+</h1>
                <h5>Staff</h5>
            </div>
            <div class="col">
                <h1>03</h1>
                <h5>Programs</h5>
            </div>
            <div class="col">
                <h1>10+</h1>
                <h5>Years of Service</h5>
            </div>
        </div>
    </div>
</div>

<div class="welcome">
    <div class="container section-container">
        <h4 class="sub-heading">WELCOME NOTE</h4>
        <h1 class="heading">
            Welcome to Orange Daycare
        </h1>
        <div class="content">
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 g-4">
                <div class="col">
                    <div class="welcome-images" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{asset('images/welcome-img.jfif')}}" alt="" class="welcome-img-1" loading="lazy" />
                        <img src="{{asset('images/download (5).jfif')}}" alt="" class="welcome-img-2" loading="lazy" />
                    </div>
                </div>
                <div class="col">
                    <div class="welcome-note" data-aos="fade-up" data-aos-duration="2000">
                        <p>At Orange Daycare, we believe that every child deserves a happy, safe, and nurturing environment where they can learn, play, explore, and grow with confidence. Our daycare is designed to provide children with a loving and stimulating atmosphere where they feel valued, cared for, and encouraged to discover the world around them.</p>

                        <p>We understand that the early years of a child's life are incredibly important in shaping their future. That is why we combine play-based learning, creativity, social interaction, physical activities, and guided learning to support the development of the whole child. Our caring and dedicated teachers work closely with each child, recognizing their individual abilities, interests, and needs while helping them develop important skills and positive values.</p>

                        <p>At Orange Daycare, we consider parents and guardians to be important partners in every child's development. We are committed to creating a strong relationship with families and providing an environment where children can thrive while parents have peace of mind. We welcome you to ABC Daycare, where little minds are nurtured, big dreams begin, and every child is given the opportunity to shine.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="programs" id="programs">
    <div class="container section-container">
        <h4 class="sub-heading">PROGRAMS</h4>
        <h1 class="heading">
            Our Programs
        </h1>
        <div class="content">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="programs-card programs-card-1" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{asset('images/infant.jfif')}}" alt="programs image" loading="lazy" />
                        <div class="programs-card-info">
                            <div class="programs-age">6 Months - 2 Years</div>
                            <h3>Infant Care</h3>
                        </div>
                        <div class="programs-desc programs-desc-1">
                            <h3>Infant Care</h3>
                            <p>Special care for babies from 6 months to 2 years focusing on developing love, bond, care and comfort.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="programs-card programs-card-2" data-aos="fade-up" data-aos-duration="2000">
                        <img src="{{asset('images/toddler.jfif')}}" alt="programs image" loading="lazy" />
                        <div class="programs-card-info">
                            <div class="programs-age">2 - 3 Years</div>
                            <h3>Toddler Growth</h3>
                        </div>
                        <div class="programs-desc programs-desc-2">
                            <h3>Toddler Growth</h3>
                            <p>Between the age of 2 - 3 years we teach the kids communication skills, critical & ceative thinking as well as interpersonal skills and sports.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="programs-card programs-card-3" data-aos="fade-up" data-aos-duration="3000">
                        <img src="{{asset('images/early2.jfif')}}" alt="programs image" loading="lazy" />
                        <div class="programs-card-info">
                            <div class="programs-age">3 - 5 Years</div>
                            <h3>Early Learning</h3>
                        </div>
                        <div class="programs-desc programs-desc-3">
                            <h3>Early Learning</h3>
                            <p>A kid starts to develop and keep memory between the age of 3 - 5 years, thus we start to teach them numbers, reading, writing and listening skills.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="why-us">
    <div class="container section-container">
        <h4 class="sub-heading">WHY US</h4>
        <h1 class="heading">Why We're The Best for Your Child's Growth</h1>
        <div class="content">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="why-us-card" data-aos="fade-up" data-aos-duration="500">
                        <img src="{{asset('images/teacher3.jfif')}}" alt="Why us image" loading="lazy" />

                        <div class="why-icon">
                            <i class="bi bi-person-video3"></i>
                        </div>
                        <div class="why-us-details">
                            <h5>Professional Educators</h5>
                            <p>Our daycare has professional educators, enthusiasts in children matters operate with love and care.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="why-us-card" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{asset('images/environment2.jfif')}}" alt="Why us image" loading="lazy" />

                        <div class="why-icon">
                            <i class="bi bi-buildings"></i>
                        </div>
                        <div class="why-us-details">
                            <h5>Safe Environment</h5>
                            <p>We have safe and conducive environment well kept for your child's learning, growth and development.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="why-us-card" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{asset('images/facilities.jfif')}}" alt="Why us image" loading="lazy" />

                        <div class="why-icon">
                            <i class="bi bi-tv"></i>
                        </div>
                        <div class="why-us-details">
                            <h5>Modern Facilities</h5>
                            <p>Our modern facilities play a vital role in speeding up child's upbringing, learning habit and creativity.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="why-us-card  sec-row" data-aos="fade-up" data-aos-duration="2000">
                        <img src="{{asset('images/sports.jfif')}}" alt="Why us image" loading="lazy" />

                        <div class="why-icon">
                            <i class="bi bi-controller"></i>
                        </div>
                        <div class="why-us-details">
                            <h5>Sports & Games</h5>
                            <p>Sports, games and entertainment can keep a child active also as means to child's social interaction with others.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="why-us-card why-us-card-md-last sec-row" data-aos="fade-up" data-aos-duration="2500">
                        <img src="{{asset('images/care2.jfif')}}" alt="Why us image" loading="lazy" />

                        <div class="why-icon">
                            <i class="bi bi-heart"></i>
                        </div>
                        <div class="why-us-details">
                            <h5>Love & Care</h5>
                            <p>We handle children with love and care as little angels, thus we teach them to love and care about each other.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="why-us-card  sec-row why-us-card-md-last why-us-card-last" data-aos="fade-up" data-aos-duration="3000">
                        <img src="{{asset('images/transport.jfif')}}" alt="Why us image" loading="lazy" />

                        <div class="why-icon">
                            <i class="bi bi-bus-front-fill"></i>
                        </div>
                        <div class="why-us-details">
                            <h5>Reliable Transport</h5>
                            <p>We value child's welfare and safety, hence we have reliable transport to pick your child up and drop him off at your door steps.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="process">
    <div class="container section-container">
        <h4 class="sub-heading">DAILY ROUTINE</h4>
        <h1 class="heading">Our Learning Routine</h1>

        <div class="content">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="process-card" data-aos="fade-up" data-aos-duration="500">
                        <div class="process-number">01</div>
                        <h4>Drop off & Breakfast</h4>
                        <p>We drop off children to school in the morning and provide them with delicious and nutritious meal to start their beautiful day day.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="process-card" data-aos="fade-up" data-aos-duration="1000">
                        <div class="process-number">02</div>
                        <h4>Circle Time</h4>
                        <p>At cirlce time children and teachers circle up and sing to bring the energy and activate children before classes start, it also helps to connect children with each other with teachers also.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="process-card" data-aos="fade-up" data-aos-duration="1500">
                        <div class="process-number">03</div>
                        <h4>Learning</h4>
                        <p>Here is when children get in to their respective classes and start their lesson according to the particular day's schedule and children's level.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="process-card" data-aos="fade-up" data-aos-duration="2000">
                        <div class="process-number">04</div>
                        <h4>Sports & Games</h4>
                        <p>After classes children gather into groups according to their levels and play different sports and games to make them interact with each other well, explore their talents and excerxise physically.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="process-card" data-aos="fade-up" data-aos-duration="2500">
                        <div class="process-number">05</div>
                        <h4>Lunch</h4>
                        <p>After playing children get into a diner ready to get a well prepared, delicious and nutritious afternoon meal essential for their health and growth.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="process-card" data-aos="fade-up" data-aos-duration="3000">
                        <div class="process-number">06</div>
                        <h4>Rest & Pick up</h4>
                        <p>After lunch children get a short break for the food to be digested properly and then we call it a day when we pick them and drop them home safely.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="team">
    <div class="container section-container">
        <h4 class="sub-heading">OUR TEAM</h4>
        <h1 class="heading">Our Daycare Administrative Team</h1>
        <div class="content">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="team-card" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{asset('images/director.jfif')}}" alt="Team image" loading="lazy" />
                        <div class="team-desc">
                            <h5>Ms. Rosemary Whitfield</h5>
                            <p>Director</p>
                        </div>
                        <div class="team-socials">
                            <a href="#"><i class="bi bi-envelope-open-fill"></i></a>
                            <a href="#"><i class="bi bi-telephone-fill"></i></a>
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team-card" data-aos="fade-up" data-aos-duration="2000">
                        <img src="{{asset('images/a-director.jfif')}}" alt="Team image" loading="lazy" />
                        <div class="team-desc">
                            <h5>Mr. John Doe</h5>
                            <p>Assistant Director</p>
                        </div>
                        <div class="team-socials">
                            <a href="#"><i class="bi bi-envelope-open-fill"></i></a>
                            <a href="#"><i class="bi bi-telephone-fill"></i></a>
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team-card" data-aos="fade-up" data-aos-duration="3000">
                        <img src="{{asset('images/principal.jfif')}}" alt="Team image" loading="lazy" />
                        <div class="team-desc">
                            <h5>Ms. Alice Mwakalebela</h5>
                            <p>Principal</p>
                        </div>
                        <div class="team-socials">
                            <a href="#"><i class="bi bi-envelope-open-fill"></i></a>
                            <a href="#"><i class="bi bi-telephone-fill"></i></a>
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cta">
    <div class="container">
        <div class="cta-content" data-aos="fade-up" data-aos-duration="1000">
            <h1 data-aos="fade-up" data-aos-duration="2000">Let your Child Grow Better, Healthy & Smart at Orange Daycare</h1>
            <div class="cta-btns">
                <a href="#" class="cta-btn" data-aos="fade-up" data-aos-duration="3000">Enroll Now</a>
            </div>
        </div>
    </div>
</div>
<div class="blog">
    <div class="container section-container">
        <h4 class="sub-heading">BLOG</h4>
        <h1 class="heading">Blog Posts & Updates</h1>
        <div class="content">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="blog-card" data-aos="fade-up" data-aos-duration="1000">
                        <div class="blog-img">
                            <img src="{{asset('images/sports.jfif')}}" alt="blog image" loading="lazy" />
                        </div>
                        <div class="blog-desc">
                            <div class="blog-date">3 days ago</div>
                            <h4>Summer Picnic at Watergate</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores blanditiis debitis, quaerat quam laboriosam quibusdam accusamus excepturi deleniti laudantium quasi, nemo, est dolore fugit neque quos distinctio! Pariatur, dolorum obcaecati!</p>
                        </div>
                        <div class="blog-links">
                            <a href="#">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="blog-card" data-aos="fade-up" data-aos-duration="2000">
                        <div class="blog-img">
                            <img src="{{asset('images/sports.jfif')}}" alt="blog image" loading="lazy" />
                        </div>
                        <div class="blog-desc">
                            <div class="blog-date">3 days ago</div>
                            <h4>Summer Picnic at Watergate</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores blanditiis debitis, quaerat quam laboriosam quibusdam accusamus excepturi deleniti laudantium quasi, nemo, est dolore fugit neque quos distinctio! Pariatur, dolorum obcaecati!</p>
                        </div>
                        <div class="blog-links">
                            <a href="#">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="blog-card" data-aos="fade-up" data-aos-duration="3000">
                        <div class="blog-img">
                            <img src="{{asset('images/sports.jfif')}}" alt="blog image" loading="lazy" />
                        </div>
                        <div class="blog-desc">
                            <div class="blog-date">3 days ago</div>
                            <h4>Summer Picnic at Watergate</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores blanditiis debitis, quaerat quam laboriosam quibusdam accusamus excepturi deleniti laudantium quasi, nemo, est dolore fugit neque quos distinctio! Pariatur, dolorum obcaecati!</p>
                        </div>
                        <div class="blog-links">
                            <a href="#">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-view-more">
                <a href="#">View More</a>
            </div>
        </div>
    </div>
</div>
<div class="faqs">
    <div class="container section-container">
        <h4 class="sub-heading">FAQs</h4>
        <h1 class="heading">Frequently Asked Questions</h1>
        <div class="content">
            <div class="accordion .accordion-flush" id="accordionPanelsStayOpenExample">
                <div class="accordion-item" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="accordion-header shadow-none">
                        <button class="accordion-button shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Where is Orange daycare located?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            Orange daycare is located at the heart of Dodoma city few metres away from the Savanna college, our daycare is navigable and reachable easily you can also search it on google maps and it'll direct you to our gateway.
                        </div>
                    </div>
                </div>
                <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            Which age range of children do you enroll at your daycare?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            We enroll children from the age of 6 months up to 5 years, and we do enroll them into different levels according to the age groups to make them learn easy.
                        </div>
                    </div>
                </div>
                <div class="accordion-item" data-aos="fade-up" data-aos-duration="2000">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Are your school fees affordable to a parent earning a medium income?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Exactly and not just a medium income earner even parents with low income can afford our school fes since they are affordable and they can be paid per installment.
                        </div>
                    </div>
                </div>
                <div class="accordion-item" data-aos="fade-up" data-aos-duration="2500">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            How a child's safety is guaranteed at your daycare?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            A child's safety is of our top priority, we always make sure a child is always safe all the time he/she is at our daycare, we proctect a child physically, mentally as well as healthwise.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contacts" id="contacts">
    <div class="container section-container">
        <h4 class="sub-heading">CONTACT US</h4>
        <h1 class="heading">Get In Touch with Us</h1>
        <div class="content">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="contacts-col">


                        <div class="contacts-content" data-aos="fade-up" data-aos-duration="1000">
                            <div class="contacts-desc">
                                <div class="contacts-icon">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="contacts-details">
                                    <h6>PHONE</h6>
                                    <h5>+255 777 888 999</h5>
                                </div>
                            </div>
                            <div class="contacts-desc">
                                <div class="contacts-icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="contacts-details">
                                    <h6>EMAIL ADDRESS</h6>
                                    <h5>info@orangedaycare.ac.tz</h5>
                                </div>
                            </div>
                            <div class="contacts-desc">
                                <div class="contacts-icon">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="contacts-details">
                                    <h6>LOCATION</h6>
                                    <h5>Ilazo Dodoma, Tanzania</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form" data-aos="fade-up" data-aos-duration="2000">

                        <form action="/contacts" method="POST">
                            @csrf
                            <div class="form-field">
                                <input type="text" name="name" placeholder="Your name" />
                            </div>
                            <div class="form-field form-field-2">
                                <input type="email" name="email" placeholder="Email address" />
                                <input type="text" name="phone" placeholder="Phone number" />
                            </div>
                            <div class="form-field">
                                <input type="text" name="subject" placeholder="Subject" />
                            </div>
                            <div class="form-field">
                                <textarea name="message" id="" placeholder="Message..."></textarea>
                            </div>
                            <div class="form-field">
                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if (session('flash'))
<div class="toast-container position-fixed"
    style="top: 5%; right: 5%; z-index: 9999;">

    <div id="successToast"
        class="toast align-items-center text-bg-success border-0"
        role="alert"
        aria-live="assertive"
        aria-atomic="true">

        <div class="d-flex">
            <div class="toast-body" style="color:#ffffff;">
                <i class="bi bi-check-circle-fill me-2" style="color:#ffffff;"></i>
                {{ session('flash') }}
            </div>

            <button type="button"
                class="btn-close btn-close-white me-2 m-auto"
                data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>
</div>
@endif


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toastElement = document.getElementById('successToast');

        if (toastElement) {
            const toast = new bootstrap.Toast(toastElement, {
                delay: 4000,
                autohide: true
            });

            toast.show();
        }
    });
</script>

@endsection
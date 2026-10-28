@extends('layout.layout')

@section('title','About Us | Orange Daycare')

@section('content')

<div class="page-hero">
    <div class="container section-container">
        <h4 class="sub-heading">ABOUT US</h4>
        <h1 class="heading">Our Beautiful, Successful Story.</h1>

    </div>
</div>
<div class="page-content" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <h2 class="page-sub-heading">Our Story</h2>
        <p>Karibu Orange Daycare! We are a caring and welcoming daycare located in Ilazo, Dodoma, Tanzania, dedicated to giving your little ones a happy, safe, and loving place to learn and grow. We understand that every parent wants the best for their child, and we are here to support families by providing a nurturing environment where children feel at home, even when Mum and Dad are away.</p>

        <p>At Orange Daycare, we believe that every child is a special gift with unique talents and abilities. Through fun games, songs, storytelling, creative activities, and early learning experiences, we help children develop confidence, good manners, creativity, and the skills they need for a bright educational future. We encourage children to learn through play, make friends, explore their surroundings, and discover something new every day.
        </p>

        <p>We value the trust that parents in Ilazo and the wider Dodoma community place in us. That is why we believe in treating every child with kindness, patience, and respect while working hand in hand with parents to support their child's development. Our aim is to make every day a joyful experience filled with learning, laughter, care, and memorable little moments.</p>

        <p>At Orange Daycare, your child's happiness is our joy, their growth is our mission, and their future is our inspiration. Together, let's nurture today's little learners into tomorrow's great achievers!</p>

        <div class="page-below" data-aos="fade-up" data-aos-duration="2000">
            <h2 class="page-sub-heading">Our Programs</h2>
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
        <div class="page-below" data-aos="fade-up" data-aos-duration="3000">
            <h2 class="page-sub-heading">Our Administration</h2>
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

@endsection
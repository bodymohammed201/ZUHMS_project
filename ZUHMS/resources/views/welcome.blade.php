@extends('WebSite.layouts.master')

@section('content')
<!-- Main Slider Three -->
<section class="main-slider-three">
    <div class="banner-carousel">
        <!-- Swiper -->
        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!-- Content Column -->
                        <div class="content-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h2>Welcome to ZU Hospital</h2>
                                <div class="text">
                                    The primary goal of Hospitals is to promote and restore the health and well-being of patients through a range of medical services and interventions.

                                </div>
                                <div class="btn-box">

                                </div>
                            </div>
                        </div>

                        <!-- Image Column -->
                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="{{URL::asset('WebSite/images/main-slider/3.png')}}" alt="" />
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>



        </div>
        <!-- Add Arrows -->

    </div>
</section>
<!-- End Main Slider -->

<!-- Health Section -->
<section class="health-section">
    <div class="auto-container">
        <div class="inner-container">

            <div class="row clearfix">

                <!-- Content Column -->
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="border-line"></div>
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2> Who are we <br> Leadership in Health</h2>
                            <div class="separator"></div>
                        </div>
                        <div class="text">Where you are is at the heart of our mission. We hope you will consider us your medical home – a place where you feel safe, comfortable and cared for. As a multidisciplinary medical group
                        </div>

                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{URL::asset('WebSite/images/resource/image-3.jpg')}}" alt="" />
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- End Health Section -->

<!-- Featured Section -->
<section class="featured-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="upper-box">
                        <div class="icon flaticon-doctor-stethoscope"></div>
                        <h3>The medical treatment </a></h3>
                    </div>
                    <div class="text">

                        Whether you're taking your first steps in medical treatment or simply finding your way.</div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                    <div class="upper-box">
                        <div class="icon flaticon-ambulance-side-view"></div>
                        <h3>Emergency Assistance</a></h3>
                    </div>
                    <div class="text">
                        Your initial steps in emergencies or seeking assistance.</div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <div class="upper-box">
                        <div class="icon fas fa-user-md"></div>
                        <h3>Qualified Doctors</a></h3>
                    </div>
                    <div class="text">
                        Your initial steps in finding qualified doctors or searching for the right diagnosis.</div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
                    <div class="upper-box">
                        <div class="icon fas fa-briefcase-medical"></div>
                        <h3>Medical Professionals</a></h3>
                    </div>
                    <div class="text">
                        Your initial steps in finding medical professionals or discovering the right medical support.</div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Featured Section -->

<!-- Department Section Three -->
<section class="department-section-three">
    <div class="image-layer" style="background-image:url(images/background/6.jpg)"></div>
    <div class="auto-container">
        <!-- Department Tabs-->
        <div class="department-tabs tabs-box">
            <div class="row clearfix">
                <!--Column-->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <!-- Sec Title -->
                    <div class="sec-title light">
                        <h2>Sections</h2>
                        <div class="separator"></div>
                    </div>
                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#tab-urology" class="tab-btn active-btn">Department of Neurology</li>
                        <li data-tab="#tab-department" class="tab-btn">Department of Urology</li>
                        <li data-tab="#tab-gastrology" class="tab-btn">Department of Gastroenterology</li>
                        <li data-tab="#tab-cardiology" class="tab-btn">Department of Cardiology</li>
                        <li data-tab="#tab-eye" class="tab-btn">Department of Ophthalmology</li>
                    </ul>
                </div>
                <!--Column-->
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <!--Tabs Container-->
                    <div class="tabs-content">

                        <!-- Tab -->
                        <div class="tab active-tab" id="tab-urology">
                            <div class="content">

                                <h2>Neurology Department</h2>
                                <div class="title">Department of Neurology</div>
                                <div class="text">
                                    <p>The Department of Neurology is a specialized medical department that focuses on the diagnosis, treatment, and management of disorders and diseases related to the nervous system. The nervous system includes the brain, spinal cord, peripheral nerves, and muscles, which are responsible for controlling and coordinating bodily functions.

                                        Neurologists are the medical professionals who work within the Department of Neurology. They are highly trained physicians with expertise in the field of neurology and specialize in the study and treatment of neurological disorders. Neurologists often work in collaboration with other healthcare professionals, such as neurosurgeons, neuropsychologists, and physical therapists, to provide comprehensive care for patients with neurological conditions.</p>


                                </div>




                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab " id="tab-department">
                            <div class="content">
                                <<h2>Department of Urology</h2>
                                    <div class="title">Department of Urology</div>
                                    <div class="text">
                                        <p>The Department of Neurology is a specialized medical department that focuses on the diagnosis, treatment, and management of conditions affecting the nervous system. The nervous system includes the brain, spinal cord, and peripheral nerves, which control and coordinate various bodily functions.

                                            Neurologists are the medical professionals who work within the Department of Neurology. They are highly trained physicians who specialize in the field of neurology and are dedicated to the study and treatment of neurological disorders. Neurologists often work in collaboration with other medical specialists, such as neurosurgeons, psychiatrists, and radiologists, to provide comprehensive care for patients with neurological conditions.</p>


                                    </div>



                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="tab-gastrology">
                            <div class="content">
                                <h2>Gastrology Department</h2>
                                <div class="title">Gastrology Department</div>
                                <div class="text">
                                    <p>The Department of Gastroenterology is a specialized medical department that focuses on the study, diagnosis, and treatment of diseases and disorders of the gastrointestinal (GI) tract. The GI tract includes organs such as the esophagus, stomach, small intestine, large intestine (colon), liver, gallbladder, and pancreas.

                                        Gastroenterologists are the medical professionals who work within the Department of Gastroenterology. They are physicians with specialized training in gastroenterology and hepatology, which involves the study of the digestive system and associated organs. Gastroenterologists often work closely with other medical specialists, including surgeons, radiologists, and nutritionists, to provide comprehensive care to patients with GI disorders.</p>

                                </div>


                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="tab-cardiology">
                            <div class="content">
                                <h2>Cardiology Department</h2>
                                <div class="title">Cardiology Department</div>
                                <div class="text">
                                    <p>The Cardiology Department is a specialized medical department that focuses on the diagnosis, treatment, and management of cardiovascular diseases and disorders. Cardiology deals with the study of the heart and blood vessels, including the prevention, diagnosis, and treatment of conditions that affect the cardiovascular system.

                                        Cardiologists are the medical professionals who work within the Cardiology Department. They are physicians specializing in cardiology and are trained to diagnose and treat various heart-related conditions. Cardiologists may collaborate with other healthcare professionals, such as cardiovascular surgeons, electrophysiologists, and interventional radiologists, to provide comprehensive care for patients with cardiovascular diseases.
                                    </p>

                                </div>


                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="tab-eye">
                            <div class="content">
                                <h2>Department of Ophthalmology</h2>
                                <div class="title">Department of Ophthalmology</div>
                                <div class="text">
                                    <p>The Department of Ophthalmology is a specialized medical department that focuses on the diagnosis, treatment, and management of diseases and disorders related to the eyes and visual system. Ophthalmology deals with the study of the eyes and visual pathways, including the prevention, diagnosis, and treatment of conditions affecting vision and eye health.

                                        Ophthalmologists are the medical professionals who work within the Department of Ophthalmology. They are physicians specializing in ophthalmology and are trained to diagnose and treat various eye conditions and diseases. Ophthalmologists may collaborate with other healthcare professionals, such as optometrists, orthoptists, and ophthalmic surgeons, to provide comprehensive eye care.
                                    </p>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Department Section -->

<!-- Team Section -->
<section class="team-section">
    <div class="auto-container">

        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>Medical specialists </h2>
            <div class="separator"></div>
        </div>

        <div class="row clearfix">

            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="images/resource/team-1.jpg" alt="" />
                        <div class="overlay-box">
                            <ul class="social-icons">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-google"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                            <a href="#" class="appointment">Make Appointment</a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3>D/Mahmoud Shawky </a></h3>
                        <div class="designation">Cancer specialist </div>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="images/resource/team-2.jpg" alt="" />
                        <div class="overlay-box">
                            <ul class="social-icons">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-google"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                            <a href="#" class="appointment">Make Appointment</a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3>Dr/Abdo Saleh</a></h3>
                        <div class="designation"> Heart surgeon</div>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="images/resource/team-3.jpg" alt="" />
                        <div class="overlay-box">
                            <ul class="social-icons">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-google"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                            <a href="#" class="appointment">Make Appointment</a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3>Dr/Ziad Mostafa </a></h3>
                        <div class="designation">Family doctor </div>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="images/resource/team-4.jpg" alt="" />
                        <div class="overlay-box">
                            <ul class="social-icons">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-google"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                            <a href="#" class="appointment">Make Appointment</a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3>Dr/Mohamed Mahmoud </a></h3>
                        <div class="designation"> Orthopedic specialist </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Team Section -->

<!-- Video Section -->
<section class="video-section" style="background-image:url(images/background/5.jpg)">
    <div class="auto-container">
        <div class="content">
            <a href="https://youtu.be/_nB-WGZH1is?si=572rEQ4ls_hPDmAB" class="lightbox-image play-box"><span class="flaticon-play-button"><i class="ripple"></i></span></a>
            <div class="text">we care about you<h2>your health is our top priority</h2>
            </div>
        </div>
</section>
<!-- End Video Section -->

<!-- Appointment Section Two -->
<section class="appointment-section-two">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="images/resource/doctor-2.png" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2>Appointment Booking</h2>
                            <div class="separator"></div>
                        </div>

                        <!-- Appointment Form -->
                        <div class="appointment-form">
                            <livewire:appointments.create />
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section Two -->
<section class="testimonial-section-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>-What Patients say-</h2>
            <div class="separator"></div>
        </div>
        <div class="testimonial-carousel owl-carousel owl-theme">

            <!-- Tesimonial Block Two -->
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/resource/author-4.jpg" alt="" />
                    </div>
                    <div class="text">
                        يعد المركز الطبي مكانًا رائعًا للحصول على جميع احتياجاتك الطبية. دخلت
                        لإجراء فحص ولم تنتظر أكثر من 5 دقائق قبل رؤيتي. يمكنني أن أتصور
                        نوع الخدمة التي تحصل عليها في حالة المشكلات الأكثر خطورة. شكرًا!
                    </div>
                    <div class="lower-box">
                        <div class="clearfix">

                            <div class="pull-left">
                                <div class="quote-icon flaticon-quote"></div>
                            </div>
                            <div class="pull-right">
                                <div class="author-info">
                                    <h3> Samir Adel</h3>
                                    <div class="author">Cancer Patient </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Tesimonial Block Two -->
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/resource/author-5.jpg" alt="" />
                    </div>
                    <div class="text">
                        يعد المركز الطبي مكانًا رائعًا للحصول على جميع احتياجاتك الطبية. دخلت
                        لإجراء فحص ولم تنتظر أكثر من 5 دقائق قبل رؤيتي. يمكنني أن أتصور
                        نوع الخدمة التي تحصل عليها في حالة المشكلات الأكثر خطورة. شكرًا!
                    </div>
                    <div class="lower-box">
                        <div class="clearfix">

                            <div class="pull-left">
                                <div class="quote-icon flaticon-quote"></div>
                            </div>
                            <div class="pull-right">
                                <div class="author-info">
                                    <h3> Ali Hafez</h3>
                                    <div class="author">Cancer Patient</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Tesimonial Block Two -->
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/resource/author-4.jpg" alt="" />
                    </div>
                    <div class="text">Medical Centre is a great place to get all of your medical needs. I came in
                        for a check up and did not wait more than 5 minutes before I was seen. I can only imagine
                        the type of service you get for more serious issues. Thanks!
                    </div>
                    <div class="lower-box">
                        <div class="clearfix">

                            <div class="pull-left">
                                <div class="quote-icon flaticon-quote"></div>
                            </div>
                            <div class="pull-right">
                                <div class="author-info">
                                    <h3>Taha Elnagar </h3>
                                    <div class="author">Kidency patient</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Tesimonial Block Two -->
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/resource/author-5.jpg" alt="" />
                    </div>
                    <div class="text">Medical Centre is a great place to get all of your medical needs. I came in
                        for a check up and did not wait more than 5 minutes before I was seen. I can only imagine
                        the type of service you get for more serious issues. Thanks!
                    </div>
                    <div class="lower-box">
                        <div class="clearfix">

                            <div class="pull-left">
                                <div class="quote-icon flaticon-quote"></div>
                            </div>
                            <div class="pull-right">
                                <div class="author-info">
                                    <h3>saeed ahmed</h3>
                                    <div class="author"> Kedency patient </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Testimonial Section Two -->

<!-- Counter Section -->
<section class="counter-section style-two" style="background-image: url(images/background/pattern-3.png)">
    <div class="auto-container">

        <!-- Fact Counter -->
        <div class="fact-counter style-two">
            <div class="row clearfix">

                <!--Column-->
                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon flaticon-logout"></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="2500" data-stop="2350">0</span>
                            </div>
                            <h4 class="counter-title">Patient Satisfaction </h4>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon flaticon-logout"></div>
                            <div class="count-outer count-box alternate">
                                +<span class="count-text" data-speed="3000" data-stop="350">0</span>
                            </div>
                            <h4 class="counter-title">Doctor Team</h4>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon flaticon-logout"></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="2150">0</span>
                            </div>
                            <h4 class="counter-title">Success mission</h4>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon flaticon-logout"></div>
                            <div class="count-outer count-box">
                                +<span class="count-text" data-speed="2500" data-stop="225">0</span>
                            </div>
                            <h4 class="counter-title">Successful Surgaries</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Counter Section -->

<!-- Doctor Info Section -->
<section class="doctor-info-section">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">

                <!-- Doctor Block -->
                <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h3>Work Houre</h3>
                        <ul class="doctor-time-list">
                            <li>From monday to friday<span>8:00am–7:00pm</span></li>
                            <li>Saturday<span>9:00am–5:00pm</span></li>
                            <li>Sunday<span>9:00am–3:00pm</span></li>
                        </ul>
                        <h4>Emeergency Cases</h4>
                        <div class="phone">Call Us ! <strong>+20 12679 575 09</strong></div>
                    </div>
                </div>

                <!-- Doctor Block -->
                <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h3>Doctors Table</h3>
                        <div class="text">
                            The following is to help assist in planning a preferred doctor or nurse. It does not guarantee and multiple indications or diseases may sometimes be required and sometimes to other duties
                        </div>

                    </div>
                </div>

                <!-- Doctor Block -->
                <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h3>Primary Health Care</h3>
                        <div class="text">When you know you're using your best talents for something you love, you can't. Effective communication is the foundation for building solid brands like shipbuilding relationships with our customers </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Doctor Info Section -->

<!-- News Section Two -->
<section class="news-section-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>Your health matters to us. </h2>
            <div class="separator style-three"></div>
        </div>
        <div class="row clearfix">

            <!-- News Block Two -->
            <div class="news-block-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="blog-detail.html"><img src="images/resource/news-4.jpg" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <div class="content">
                            <ul class="post-info">

                            </ul>
                            <ul class="post-meta">
                                <li>Information from specialist doctors</li>

                            </ul>
                            <h3><a href="blog-detail.html">Stay away from smoking and alcohol:</a></h3>
                            <div class="text">
                                Lung disease: Smoking increases the risk of lung diseases such as cancer and chronic obstructive pulmonary disease.

                                Increased risk of mental illness: Drinking alcohol is associated with an increased risk of depression and anxiety.

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- News Block Two -->
            <div class="news-block-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="blog-detail.html"><img src="images/resource/news-5.jpg" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <div class="content">
                            <ul class="post-info">

                            </ul>
                            <ul class="post-meta">
                                <li>Information from specialist doctors</li>

                            </ul>
                            <h3><a href="blog-detail.html">Physical activity:</a></h3>
                            <div class="text">Cardiovascular health:
                                Regular exercise strengthens the heart and improves blood circulation, which reduces the risk of cardiovascular diseases such as strokes.

                                Weight management:
                                Physical activity plays a crucial role in weight control by burning calories and building muscle. It helps prevent obesity and maintain a healthy body weight.


                            </div>

                        </div>
                    </div>

                </div>
            </div>
</section>

<!--Clients Section-->
<section class="clients-section">
    <div class="outer-container">

        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
                </li>
            </ul>
        </div>

    </div>
</section>
<!--End Clients Section-->
@endsection
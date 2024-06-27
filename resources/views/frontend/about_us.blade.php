@extends('frontend.layout.app')

@section('content')

<main class="main about">
    <div class="page-header page-header-bg text-left"
        style="background: linear-gradient(to right, #2B503D , rgba(255, 255, 255, 0)), url('{{ asset('assets/img/page-header-bg.jpg') }}');">
        <div class="container-fluid" style="padding-left: 200px">
            <h1>ABOUT US</h1>
        </div>
    </div>

    <div class="about-section">
        <div class="container">
            <h2 class="subtitle">OUR STORY</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book.</p>

            <p class="lead">“ Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                default model search for evolved over sometimes by accident, sometimes on purpose ”</p>
        </div><!-- End .container -->
    </div><!-- End .about-section -->

    <div class="features-section bg-gray">
        <div class="container">
            <h2 class="subtitle">WHY CHOOSE US</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="feature-box bg-white">
                        <i class="icon-estrela"></i>

                        <div class="feature-box-content p-0">
                            <h3>Best Exchange</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industr.</p>
                        </div><!-- End .feature-box-content -->
                    </div><!-- End .feature-box -->
                </div><!-- End .col-lg-4 -->

                <div class="col-lg-4">
                    <div class="feature-box bg-white">
                        <i class="icon-us-dollar"></i>

                        <div class="feature-box-content p-0">
                            <h3>100% Money Back Guarantee</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industr.</p>
                        </div><!-- End .feature-box-content -->
                    </div><!-- End .feature-box -->
                </div><!-- End .col-lg-4 -->

                <div class="col-lg-4">
                    <div class="feature-box bg-white">
                        <i class="icon-online-support"></i>

                        <div class="feature-box-content p-0">
                            <h3>Online Support 24/7</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industr.</p>
                        </div><!-- End .feature-box-content -->
                    </div><!-- End .feature-box -->
                </div><!-- End .col-lg-4 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .features-section -->

    <div class="testimonials-section">
        <div class="container">
            <h2 class="subtitle text-center">HAPPY CLIENTS</h2>

            <div class="testimonials-carousel owl-carousel owl-theme images-left" data-owl-options="{
                'margin': 20,
                'lazyLoad': true,
                'autoHeight': true,
                'dots': false,
                'responsive': {
                    '0': {
                        'items': 1
                    },
                    '992': {
                        'items': 2
                    }
                }
            }">
                <div class="testimonial">
                    <div class="testimonial-owner">
                        <figure>
                            <img src="{{ asset('assets/img/clients/client1.png') }}" alt="client">
                        </figure>

                        <div>
                            <strong class="testimonial-title">John Smith</strong>
                            <span>SMARTWAVE Manager</span>
                        </div>
                    </div><!-- End .testimonial-owner -->

                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mipsum
                            dolor sit amet, consectetur elitad adipiscing cas non placerat mi.</p>
                    </blockquote>
                </div><!-- End .testimonial -->

                <div class="testimonial">
                    <div class="testimonial-owner">
                        <figure>
                            <img src="{{ asset('assets/img/clients/client2.png') }}" alt="client">
                        </figure>

                        <div>
                            <strong class="testimonial-title">Bob Smith</strong>
                            <span>SMARTWAVE Player</span>
                        </div>
                    </div><!-- End .testimonial-owner -->

                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mipsum
                            dolor sit amet, consectetur elitad adipiscing cas non placerat mi.</p>
                    </blockquote>
                </div><!-- End .testimonial -->

                <div class="testimonial">
                    <div class="testimonial-owner">
                        <figure>
                            <img src="{{ asset('assets/img/clients/client1.png') }}" alt="client">
                        </figure>

                        <div>
                            <strong class="testimonial-title">John Smith</strong>
                            <span>SMARTWAVE Manager</span>
                        </div>
                    </div><!-- End .testimonial-owner -->

                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mipsum
                            dolor sit amet, consectetur elitad adipiscing cas non placerat mi.</p>
                    </blockquote>
                </div><!-- End .testimonial -->
            </div><!-- End .testimonials-slider -->
        </div><!-- End .container -->
    </div><!-- End .testimonials-section -->

    <div class="counters-section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-4 count-container">
                    <div class="count-wrapper">
                        <span class="count-to" data-fromvalue="0" data-tovalue="200" data-duration="2000"
                            data-append="+">0</span>
                    </div><!-- End .count-wrapper -->
                    <h4 class="count-title">MILLION CUSTOMERS</h4>
                </div><!-- End .col-md-4 -->

                <div class="col-6 col-md-4 count-container">
                    <div class="count-wrapper">
                        <span class="count-to" data-fromvalue="0" data-tovalue="1800" data-duration="2000"
                            data-append="+">0</span>
                    </div><!-- End .count-wrapper -->
                    <h4 class="count-title">TEAM MEMBERS</h4>
                </div><!-- End .col-md-4 -->

                <div class="col-6 col-md-4 count-container">
                    <div class="count-wrapper line-height-1">
                        <span class="count-to" data-fromvalue="0" data-tovalue="24" data-duration="2000"
                            data-append="HR">0</span>
                    </div><!-- End .count-wrapper -->
                    <h4 class="count-title">SUPPORT AVAILABLE</h4>
                </div><!-- End .col-md-4 -->

                <div class="col-6 col-md-4 count-container">
                    <div class="count-wrapper">
                        <span class="count-to" data-fromvalue="0" data-tovalue="265" data-duration="2000"
                            data-append="+">0</span>
                    </div><!-- End .count-wrapper -->
                    <h4 class="count-title">SUPPORT AVAILABLE</h4>
                </div><!-- End .col-md-4 -->

                <div class="col-6 col-md-4 count-container">
                    <div class="count-wrapper line-height-1">
                        <span class="count-to" data-fromvalue="0" data-tovalue="99" data-duration="2000"
                            data-append="%">0</span>
                    </div><!-- End .count-wrapper -->
                    <h4 class="count-title">SUPPORT AVAILABLE</h4>
                </div><!-- End .col-md-4 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .counters-section -->
</main>

@endsection
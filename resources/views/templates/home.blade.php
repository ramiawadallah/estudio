<section class="tt-container-gallery" >
    <div class="tt-banner-gallery">
        <ul>
            @foreach(App\Slider::where('stutes','active')->limit(3)->get() as $slider)
            <li 
                data-transition="fade"
                data-slotamount="7"
                data-masterspeed="500"
                data-saveperformance="on"
                data-title="Truly Creative">


                <!-- MAIN IMAGE -->
                <img src="public/uploads/{{ $slider->photo }}"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tt-slider-title sft"
                    data-x="50"
                    data-y="150"
                    data-speed="1000"
                    data-start="500"
                    data-easing="Power4.easeOut"
                    data-endspeed="300"
                    style="z-index: 1">
                    E STUDIO <span>FOR</span>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tt-slider-subtitle sft"
                    data-x="50"
                    data-y="250"
                    data-speed="1000"
                    data-start="700"
                    data-easing="Power4.easeOut"
                    data-endspeed="300"
                    style="z-index: 2">
                    Innovative solution
                </div>


                <!-- LAYER NR. 3 -->
                <div class="tp-caption tt-slider-small-text sft"
                    data-x="50"
                    data-y="320"
                    data-speed="1000"
                    data-start="900"
                    data-easing="Power4.easeOut"
                    data-endspeed="300"
                    style="z-index: 3">Completely orchestrate cooperative applications before out of the box content.
                </div>


                <!-- LAYER NR. 4 -->
                <div class="tp-caption sft"
                    data-x="50"
                    data-y="400"
                    data-speed="1000"
                    data-start="1100"
                    data-easing="Power4.easeOut"
                    data-endspeed="300"
                    style="z-index: 4">
                    <a href="#" class="tt-btn btn-bordered light">Learn More</a>
                </div>
            </li>
            @endforeach()
        </ul>
    </div>
</section>


<!-- hero-block-v6 -->
<section class="hero-block-v6">
    <div class="container">

        <div class="row">
            <div class="col-sm-6">
                <div class="company-overview">
                    <h2 class="section-title">Company’s Overview</h2>
                    
                    <p>Messenger bag gentrify pitchfork tattooed craft beer iphone skateboard locavore carles etsy viny Photo booth beard raw denim letterpress vegan messenger bag stumptown. American apparel have a terry richardson vinyl chambray.</p>

                    <a href="#" class="btn btn-primary">Read More</a>

                </div><!-- /.company-overview -->
            </div>

            <div class="col-sm-6">

                <div class="video-wrap">
                    <iframe src="https://www.youtube.com/embed/loKKgAzoncI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div><!-- /.col-sm-6 -->
        </div>

    </div><!-- /.container -->
</section>
<!-- hero-block-v6 end -->


 <!-- Promo Section -->
<section class="promo-section section-padding">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title">What Make Us Awesome</h2>
            <p class="sub-title">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur <br>magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
        </div>

        <div class="row mt-80">
            <div class="col-sm-3">
                <div class="promo-block text-center">
                  <i class="fa fa-laptop"></i>
                  <h3>Innovation</h3>
                  <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
                </div><!-- /.promo-block -->
            </div>

            <div class="col-sm-3">
                <div class="promo-block text-center">
                  <i class="fa fa-laptop"></i>
                  <h3>Productive</h3>
                  <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
                </div><!-- /.promo-block -->
            </div>

            <div class="col-sm-3">
                <div class="promo-block text-center">
                  <i class="fa fa-laptop"></i>
                  <h3>Learner Mind</h3>
                  <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
                </div><!-- /.promo-block -->
            </div>


            <div class="col-sm-3">
                <div class="promo-block text-center">
                  <i class="fa fa-laptop"></i>
                  <h3>Learner Mind</h3>
                  <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
                </div><!-- /.promo-block -->
            </div>
        </div>

    </div><!-- /.container -->
</section><!-- /.Promo Section -->

<!-- client-testimonial-section-v3 -->
<section class="client-slider-v3-wrapper section-padding">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title">We Love Our Client, They Love Us</h2>
            <p class="sub-title">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur <br>magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
        </div>


        <div class="client-slider-v3 clearfix">
          <ul class="slides">
            <li data-thumb="{{ theme('frontend/images/client-logo/client-logo-1.jpg') }}">
                <blockquote>
                  <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt magni dolores eos qui ratione voluptatem.</p>
                  <footer class="clearfix">
                    <img src="{{ theme('frontend/images/client-logo/client-thumb-1.jpg') }}" alt="">
                    <div class="client-info">
                        <span class="client-name">Mr. Jolil</span>
                        <span class="client-title">Techmart. Bd</span>
                    </div>
                   </footer>
                </blockquote>
            </li>

            <li data-thumb="{{ theme('frontend/images/client-logo/client-logo-2.jpg') }}">
                <blockquote>
                  <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt magni dolores eos qui ratione voluptatem.</p>
                  <footer class="clearfix">
                    <img src="{{ theme('frontend/images/client-logo/client-thumb-1.jpg') }}" alt="">
                    <div class="client-info">
                        <span class="client-name">Mr. Jolil</span>
                        <span class="client-title">Techmart. Bd</span>
                    </div>
                   </footer>
                </blockquote>
            </li>
            <li data-thumb="{{ theme('frontend/images/client-logo/client-logo-3.jpg') }}">
                <blockquote>
                  <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt magni dolores eos qui ratione voluptatem.</p>
                  <footer class="clearfix">
                    <img src="{{ theme('frontend/images/client-logo/client-thumb-1.jpg') }}" alt="">
                    <div class="client-info">
                        <span class="client-name">Mr. Jolil</span>
                        <span class="client-title">Techmart. Bd</span>
                    </div>
                   </footer>
                </blockquote>
            </li>
            <li data-thumb="{{ theme('frontend/images/client-logo/client-logo-4.jpg') }}">
                <blockquote>
                  <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt magni dolores eos qui ratione voluptatem.</p>
                  <footer class="clearfix">
                    <img src="{{ theme('frontend/images/client-logo/client-thumb-1.jpg') }}" alt="">
                    <div class="client-info">
                        <span class="client-name">Mr. Jolil</span>
                        <span class="client-title">Techmart. Bd</span>
                    </div>
                   </footer>
                </blockquote>
            </li>
            <li data-thumb="{{ theme('frontend/images/client-logo/client-logo-5.jpg') }}">
                <blockquote>
                  <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt magni dolores eos qui ratione voluptatem.</p>
                  <footer class="clearfix">
                    <img src="{{ theme('frontend/images/client-logo/client-thumb-1.jpg') }}" alt="">
                    <div class="client-info">
                        <span class="client-name">Mr. Jolil</span>
                        <span class="client-title">Techmart. Bd</span>
                    </div>
                   </footer>
                </blockquote>
            </li>
            <li data-thumb="{{ theme('frontend/images/client-logo/client-logo-6.jpg') }}">
                <blockquote>
                  <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt magni dolores eos qui ratione voluptatem.</p>
                  <footer class="clearfix">
                    <img src="{{ theme('frontend/images/client-logo/client-thumb-1.jpg') }}" alt="">
                    <div class="client-info">
                        <span class="client-name">Mr. Jolil</span>
                        <span class="client-title">Techmart. Bd</span>
                    </div>
                   </footer>
                </blockquote>
            </li>
          </ul>
        </div><!-- /#client-slider-v3 -->
    </div>
</section>

<!-- Call to Action v2 -->
<section class="cta-v2-wrapper">
    <div class="container">
        <div class="cta-v2">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Have Any Projects Or Idea?</h2>
                    <p>We would love to build our project</p>
                </div>
                <div class="col-sm-3">
                    <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
            </div><!-- /.row -->
        </div><!-- /.cta-v2 -->
    </div><!-- /.container -->
</section>
<!-- Call to Action v2 end-->




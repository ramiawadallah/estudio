@foreach($pages as $page)

<!-- page-title-section start -->
<section class="page-title-section about-us-one" style="background-image: url( public/uploads/{{$page->photo }});" data-stellar-background-ratio="0.1">
  <div class="container">
    <div class="page-header text-center">
      <h1>{{ strtoupper($page->trans('title')) }}</h1>
    </div>
  </div>
</section>
<!-- page-title-section end -->

<!-- Team Section -->
<section class="team-section section-padding hero-block-v3">
  <div class="container">
  	
      <div class="text-center">
          <h2 class="section-title">Our Professional Team</h2>
          <p class="sub-title">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur <br>magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
      </div>

      <div class="row mt-80">

          <div class="col-sm-3" style="margin-bottom: 10px;">
            <div class="team-member">
              <div class="team-thumb">
                  <div class="thumb-overlay"></div>
                  <img src="public/uploads/unknown_image_team.png" alt="">

                  <div class="member-info text-center">
                      <h3>Sara Lisbon</h3>
                      <span class="title">Web Designer</span>
                      <!-- <ul class="social-link list-inline">
                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      </ul> -->
                  </div><!-- /.member-info -->
              </div>
            </div><!-- /.team-member -->
          </div>

          <div class="col-sm-3" style="margin-bottom: 10px;">
            <div class="team-member">
              <div class="team-thumb">
                  <div class="thumb-overlay"></div>
                  <img src="public/uploads/unknown_image_team.png" alt="">

                  <div class="member-info text-center">
                      <h3>Sara Lisbon</h3>
                      <span class="title">Web Designer</span>
                  </div><!-- /.member-info -->
              </div>
            </div><!-- /.team-member -->
          </div>

          <div class="col-sm-3" style="margin-bottom: 10px;">
            <div class="team-member">
              <div class="team-thumb">
                  <div class="thumb-overlay"></div>
                  <img src="public/uploads/unknown_image_team.png" alt="">
                  <div class="member-info text-center">
                      <h3>Rand E-Studio</h3>
                      <span class="title">Web Designer</span>
                  </div><!-- /.member-info -->
              </div>
            </div><!-- /.team-member -->
          </div>

          <div class="col-sm-3" style="margin-bottom: 10px;">
            <div class="team-member">
              <div class="team-thumb">
                  <div class="thumb-overlay"></div>
                  <img src="public/uploads/unknown_image_team.png" alt="">
                  <div class="member-info text-center">
                      <h3>Rand E-Studio</h3>
                      <span class="title">Web Designer</span>
                  </div><!-- /.member-info -->
              </div>
            </div><!-- /.team-member -->
          </div>

          <div class="col-sm-3" style="margin-bottom: 10px;">
            <div class="team-member">
              <div class="team-thumb">
                  <div class="thumb-overlay"></div>
                  <img src="public/uploads/unknown_image_team.png" alt="">
                  <div class="member-info text-center">
                      <h3>Rand E-Studio</h3>
                      <span class="title">Web Designer</span>
                  </div><!-- /.member-info -->
              </div>
            </div><!-- /.team-member -->
          </div>
      </div>

  </div><!-- /.container -->
</section>
<!-- /.team-section -->

<!-- client section -->
<section class="client-section section-padding">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title">Our happy clients</h2>
            <p class="sub-title">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur <br> magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
        </div>


        <div class="row mt-80 text-center">


        	<div class="col-xs-6 col-sm-3 client">
                <a href="#"><img class="img-responsive" src="public/uploads/unknown_image_client.png" alt=""></a>
            </div>

            <div class="col-xs-6 col-sm-3 client">
                <a href="#"><img class="img-responsive" src="public/uploads/unknown_image_client.png" alt=""></a>
            </div>


            <div class="col-xs-6 col-sm-3 client">
                <a href="#"><img class="img-responsive" src="public/uploads/unknown_image_client.png" alt=""></a>
            </div>


            <div class="col-xs-6 col-sm-3 client">
                <a href="#"><img class="img-responsive" src="public/uploads/unknown_image_client.png" alt=""></a>
            </div>


            <div class="col-xs-6 col-sm-3 client">
                <a href="#"><img class="img-responsive" src="public/uploads/unknown_image_client.png" alt=""></a>
            </div>

            <div class="col-xs-6 col-sm-3 client">
                <a href="#"><img class="img-responsive" src="public/uploads/unknown_image_client.png" alt=""></a>
            </div>

            <div class="col-xs-6 col-sm-3 client">
                <a href="#"><img class="img-responsive" src="public/uploads/unknown_image_client.png" alt=""></a>
            </div>

            <div class="col-xs-6 col-sm-3 client">
                <a href="#"><img class="img-responsive" src="public/uploads/unknown_image_client.png" alt=""></a>
            </div>
           
        </div>

    </div>
</section>
<!-- /.client section -->





@endforeach()
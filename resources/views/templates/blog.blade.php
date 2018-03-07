@foreach($pages as $page)

<!-- page-title-section start -->
<section class="page-title-section blog-page-cover" style="background-image: url( public/uploads/{{$page->photo }});" data-stellar-background-ratio="0.1">
  <div class="container">
    <div class="page-header text-center">
      <h1>{{ strtoupper($page->trans('title')) }}</h1>
    </div>
  </div>
</section>
<!-- page-title-section end -->



<!-- blog section start -->
<section class="blog-section blog-grid v2 ptb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">

                    @foreach( $posts as $post)
                        <div class="col-md-6">
                            <article class="post-wrapper">
                                <header class="featured-wrapper">

                                    <a href="#"><img src="public/uploads/{{ $post->photo }}" class="img-responsive " alt="Image"></a>

                                    <div class="entry-meta clearfix">
                                        <ul>
                                            <li>
                                              <span class="post-date"><a href="#">
                                                <i class="fa fa-calendar"></i> {{ $post->created_at }}</a>
                                              </span>
                                              <span style="color: #fff !important; "><i>Category: </i> <i>{{ $post->post_id()->first()->title }}</i></span>
                                            </li>
                                            <!-- <li><span class="post-comment"><a href="#"><i class="fa fa-comments"></i> 15 Comments</a></span></li> -->
                                        </ul>
                                    </div><!-- /.entry-meta -->
                                </header><!-- /.post-thumbnail -->
                                
                                <div class="blog-content">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="#">{{ $post->title }}</a></h2>
                                    </header><!-- /.entry-header -->

                                    <div class="entry-content">
<!--                                             <p>{!! str_limit($post->content,168) !!}</p>                                        
 -->                                        <div class="readmore">
                                            <a href="#">Read more</a>
                                        </div>
                                        
                                    </div><!-- /.entry-content -->
                                </div><!-- /.blog-content -->
                            </article>
                        </div>
                    @endforeach()

                   
                </div><!-- /.row -->

                <div class="blog-pagination clearfix">
                    <!-- <ul class="pagination">
                      <li><a href="#"><i class="fa fa-angle-left"></i> Previous</a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">Next <i class="fa fa-angle-right"></i></a></li>
                    </ul> -->
                    {{ $posts->links('layouts.pagination.default') }}
                </div>
            </div><!-- /.col-md-9 -->

            <div class="col-md-3">
                <div class="sidebar-wrapper">
                    <!-- <aside class="widget widget_search">
                        <form>
                            <input type="text" class="form-control" placeholder="Search any keyword">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </aside>
 -->

                    <aside class="widget widget_categories">
                      <h2 class="widget-title">Popular Categories</h2>  
                      <ul>
                        @foreach( App\Postcat::all() as $cat)
                            <li><a href="#"><i class="fa fa-angle-right"></i> {{ $cat->title }}  </a></li>
                        @endforeach()
                      </ul>
                    </aside>

                    <!-- <aside class="widget widget_tag_cloud">
                      <h2 class="widget-title"><span class="light">Tag</span> Cloud</h2>
                      <ul>
                          <li><a href="#">Post</a></li>
                          <li><a href="#">Custom</a></li>
                          <li><a href="#">Graphic</a></li>
                          <li><a href="#">Internet</a></li>
                          <li><a href="#">Web Design</a></li>
                          <li><a href="#">Hosting</a></li>
                          <li><a href="#">Affaliate</a></li>
                      </ul>
                    </aside> -->
                </div>
            </div><!-- /.col-md-3 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- blog section end -->


@endforeach()
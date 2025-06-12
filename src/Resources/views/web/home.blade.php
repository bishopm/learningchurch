<x-learningchurch::layouts.web pageName="Home">
    <!-- Blog Section -->
    <section id="blog-hero" class="blog-hero section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Recent blog posts</h2>
            <div>
                <span class="description-title">Blog</span>
            </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="blog-grid">
                @foreach ($blogs as $ndx=>$blog)
                    @if ($ndx==0)
                        <article class="blog-item featured" data-aos="fade-up">
                    @else 
                        <article class="blog-item" data-aos="fade-up">
                    @endif
                        <img src="{{asset('storage/' . $blog->image)}}" alt="Blog Image" class="img-fluid">
                        <div class="blog-content">
                            <div class="post-meta">
                                <span class="date">{{date('j M',strtotime($blog->published_at))}}</span>
                                <span class="category">
                                    @foreach ($blog->tags as $tag)
                                        <span class="badge bg-dark">{{strtoupper($tag->name)}}</span>
                                    @endforeach
                                </span>
                            </div>
                            <h2 class="post-title">
                                <a href="blog-details.html" title="{{$blog->title}}">{{$blog->title}}</a>
                            </h2>
                        </div>
                    </article><!-- End Featured Post -->
                @endforeach
            </div>
        </div>
    </section><!-- /Blog Hero Section -->

    <!-- Category Section Section -->
    <section id="category-section" class="category-section section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Visit our YouTube Channel</h2>
            <div>
                <span class="description-title">Videos</span>
            </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 mb-4">
                @foreach ($videos as $video)
                    <div class="col-lg-4">
                        <article class="featured-post">
                            <div class="post-img">
                                <iframe height="315px" width="100%" src="{{$video->url}}">
                                </iframe>
                            </div>
                            <div class="post-content">
                                <div class="category-meta">
                                    <span class="post-category">
                                        @foreach ($video->tags as $tag)
                                            <span class="badge bg-dark">{{strtoupper($tag->name)}}</span>
                                        @endforeach
                                    </span>
                                    <div class="author-meta">
                                        <span class="mx-3">{{$video->title}}</span>
                                        <span>{{ \Carbon\Carbon::parse($video->published_at)->diffForHumans() }}</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="category-section" class="category-section section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Prayers for worship</h2>
            <div>
                <span class="description-title">Liturgy</span>
            </div>
            <div class="row">
                @foreach ($prayers as $prayer)
                    <div class="col-xl-4 col-lg-6">
                        <article class="list-post">
                            <div class="post-content">
                                <div class="category-meta">
                                    <span class="post-category">
                                        @foreach ($prayer->tags as $tag)
                                            <span class="badge bg-dark">{{strtoupper($tag->name)}}</span>
                                        @endforeach
                                    </span>
                                </div>
                                <h3 class="title">
                                    <a href="blog-details.html">{{$prayer->title}}</a>
                                </h3>
                                <div class="post-meta">
                                    <span>{{ \Carbon\Carbon::parse($prayer->created_at)->diffForHumans() }}</span>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-between align-items-center">
          <div class="col-lg-6">
            <div class="cta-content" data-aos="fade-up" data-aos-delay="200">
              <h2>Subscribe to our newsletter</h2>
              <p>Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit.</p>
              <form action="forms/newsletter.php" method="post" class="php-email-form cta-form" data-aos="fade-up" data-aos-delay="300">
                <div class="input-group mb-3">
                  <input type="email" class="form-control" placeholder="Email address..." aria-label="Email address" aria-describedby="button-subscribe">
                  <button class="btn btn-primary" type="submit" id="button-subscribe">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cta-image" data-aos="zoom-out" data-aos-delay="200">
              <img src="assets/img/cta/cta-1.webp" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Call To Action Section -->
</x-learningchurch::layouts.web>
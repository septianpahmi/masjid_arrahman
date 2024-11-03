<section id="blog-posts" class="blog-posts section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Info Terbaru</h2>
    </div><!-- End Section Title -->
    <div class="container">
        <div class="row gy-4">
            @foreach ($berita as $b)
                <div class="col-lg-4">
                    <article>
                        <div class="post-img">
                            <img src="assets/berita/{{ $b->gambar }}" alt="" style="width: 100%; height: 200px"
                                class="img-fluid">
                        </div>

                        <p class="post-date">
                            <time
                                datetime="2022-01-01">{{ Carbon\Carbon::parse($b->created_at, 'Asia/Jakarta')->format('d F Y') }}</time>
                        </p>

                        <h2 class="title">
                            <a href="{{ $b->link }}" target="_blank">{{ Str::limit($b->tittle, 40) }}</a>
                        </h2>
                    </article>
                </div><!-- End post list item -->
            @endforeach
        </div>
    </div>

</section><!-- /Blog Posts Section -->

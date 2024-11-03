@include('users.partial.header')
@include('users.partial.navbar')

<body class="index-page">
    <main class="main">
        <div class="page-title">

            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Informasi</h1>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="current">Informasi</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Blog Posts Section -->
        <section id="blog-posts" class="blog-posts section">

            <div class="container">
                <div class="row gy-4">
                    @foreach ($berita as $k)
                        <div class="col-lg-4">
                            <article>

                                <div class="post-img">
                                    <img src="assets/berita/{{ $k->gambar }}" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">
                                    {{ Carbon\Carbon::parse($k->created_at, 'Asia/Jakarta')->format('d F Y') }}</p>

                                <h2 class="title">
                                    <a href="{{ $k->link }}" target="_blank">{{ Str::limit($k->tittle, 40) }}</a>
                                </h2>
                            </article>
                        </div><!-- End post list item -->
                    @endforeach

                </div>
            </div>

        </section><!-- /Blog Posts Section -->

    </main>
    @include('users.partial.footer')

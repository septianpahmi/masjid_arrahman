@include('users.partial.header')
@include('users.partial.navbar')

<body class="index-page">
    <main class="main">
        <div class="page-title">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>About Us</h1>

                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="current">About</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3>Berbagi Berkah Bersama.</h3>
                        <img src="https://beritausaha.com/wp-content/uploads/2024/03/membayar-zakat-fitrah-1-1024x576.jpg"
                            class="img-fluid rounded-4 mb-4" alt="">
                        <p style="text-align: justify;">ZIS adalah platform yang didedikasikan untuk memfasilitasi
                            donasi
                            zakat, infak, dan sedekah
                            secara online dengan mudah dan aman. Kami berkomitmen untuk membantu kaum dhuafa, fakir
                            miskin, dan mereka yang membutuhkan melalui distribusi zakat yang transparan dan tepat
                            sasaran.</p>
                        <p style="text-align: justify;">Dengan mengusung nilai-nilai kedermawanan dan kepercayaan, kami
                            bekerja sama dengan lembaga-lembaga terpercaya untuk memastikan bahwa setiap hibah yang Anda
                            salurkan memberikan dampak positif dan langsung kepada penerima manfaat.</p>
                        <p style="text-align: justify;">Melalui platform ini, Anda dapat menyalurkan zakat dan infak
                            kapan saja dan di mana saja, dengan laporan yang jelas serta sistem yang terintegrasi untuk
                            memastikan bahwa zakat Anda tepat guna dan diterima oleh mereka yang berhak.</p>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="content ps-0 ps-lg-5">
                            <h4 class="fst-italic">
                                Misi Kami
                            </h4>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Mempermudah penyaluran zakat dan
                                        sedekah secara digital.</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Memberikan laporan transparan kepada
                                        para donatur.</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>Menyalurkan bantuan kepada yang
                                        membutuhkan dengan cepat dan tepat.</span></li>
                            </ul>
                            <p>
                                Mari bersama-sama berkontribusi dalam menciptakan masyarakat yang lebih baik dengan
                                zakat yang Anda hibahkan.
                            </p>

                            <div class="position-relative mt-4">
                                <img src="https://img.freepik.com/premium-photo/islamic-friends-hands-stack-teamwork_53876-86914.jpg"
                                    class="img-fluid rounded-4" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

    </main>
    @include('users.partial.footer')

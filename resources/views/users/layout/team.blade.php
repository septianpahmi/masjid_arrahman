<section id="team" class="team section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Our Team</h2>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">
            @foreach ($team as $t)
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <img src="assets/team/{{ $t->foto }}" style="width: 100%; height: 350px" class="img-fluid"
                            alt="">
                        <h4>{{ $t->nama }}</h4>
                        <span>{{ $t->jabatan }}</span>
                    </div>
                </div><!-- End Team Member -->
            @endforeach

        </div>
    </div><!-- End Team Member -->

    </div>

    </div>

</section><!-- /Team Section -->

<footer id="footer" class="footer accent-background">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-6 col-md-12 footer-about">
                <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                    <img src="assets/img/logo-2.png" alt="">

                    <span class="sitename">ZIS</span>
                </a>
                <p>Perumahan Protanmas Samolo Indah, Desa Babakancaringin, Kecamatan Karangtengh, Cianjur 43281</p>
                {{-- <div class="social-links d-flex mt-4">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
            </div>



            <div class="col-lg-6 col-md-6 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <p class="mt-4"><strong>Phone:</strong> <span>+62 878 2042 5551</span></p>
                <p><strong>Email:</strong> <span>arrahmanprotanmas@gmail.com</span></p>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
    </div>

</footer>

<!-- Preloader -->
<div id="preloader"></div>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
<!-- Main JS File -->
<script src="assets/js/main.js"></script>

<script>
    const nominalInput = document.getElementById('nominal');

    nominalInput.addEventListener('keyup', function(e) {
        nominalInput.value = formatRupiah(this.value, 'Rp.');
    });

    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang diinput sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp.' + rupiah : '');
    }
</script>
<script>
    const lainnyaInput = document.getElementById('lainnya');

    lainnyaInput.addEventListener('keyup', function(e) {
        lainnyaInput.value = formatRupiah(this.value, 'Rp.');
    });

    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang diinput sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp.' + rupiah : '');
    }
</script>
<script>
    function formatRupiah(angka) {
        let number_string = angka.toString().replace(/[^,\d]/g, ''),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            let separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        return rupiah;
    }

    function cleanRupiah(angka) {
        return angka.replace(/[^0-9,-]+/g, "");
    }

    // Fungsi untuk menghitung total harta dan nilai zakat
    function calculateZakat() {
        let pendapatan = cleanRupiah(document.getElementById('pendapatan').value);
        let lainnya = cleanRupiah(document.getElementById('lainnya').value);

        // Konversi nilai input ke integer, dan hitung total
        let total = parseInt(pendapatan || 0) + parseInt(lainnya || 0);

        // Tampilkan total dalam format Rupiah
        document.getElementById('total').value = formatRupiah(total);

        // Hitung 2.5% dari total harta untuk zakat
        let zakat = total * 0.025;

        // Tampilkan nilai zakat dalam format Rupiah
        document.getElementById('zakatAmount').innerHTML =
            `<span class="text-green-700 dark:text-green-600">Rp. ${formatRupiah(Math.floor(zakat))}</span>`;

        // Simpan nilai zakat ke input hidden untuk dikirim ke server
        document.getElementById('zakat').value = Math.floor(zakat);
    }

    // Event listener untuk menghitung setiap kali input berubah
    document.getElementById('pendapatan').addEventListener('input', function() {
        calculateZakat();
        this.value = formatRupiah(cleanRupiah(this.value));
    });

    document.getElementById('lainnya').addEventListener('input', function() {
        calculateZakat();
        this.value = formatRupiah(cleanRupiah(this.value));
    });
</script>
<script>
    const phoneInput = document.getElementById('phone');

    phoneInput.addEventListener('input', function(e) {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
</script>

<script>
    document.getElementById('id_kategori').addEventListener('change', function() {
        var kategoriID = this.value;

        var subKategoriSelect = document.getElementById('id_sub_kategori');
        subKategoriSelect.innerHTML = '<option selected>Loading...</option>';

        if (kategoriID) {
            fetch('/get-subkategori/' + kategoriID)
                .then(response => response.json())
                .then(data => {
                    subKategoriSelect.innerHTML = '<option selected>Pilih Jenis Zakat</option>';
                    data.forEach(function(subkategori) {
                        var option = document.createElement('option');
                        option.value = subkategori.id;
                        option.text = subkategori.sub_kategori;
                        subKategoriSelect.appendChild(option);
                    });
                })
                .catch(error => {
                    console.log('Error:', error);
                    subKategoriSelect.innerHTML = '<option selected>Gagal memuat data</option>';
                });
        } else {
            subKategoriSelect.innerHTML = '<option selected>Pilih Jenis Zakat</option>';
        }
    });

    document.querySelector('form').addEventListener('submit', function(e) {
        // Reset pesan error
        document.getElementById('kategori-error').textContent = '';
        document.getElementById('subkategori-error').textContent = '';

        // Ambil nilai dari dropdown
        const kategori = document.getElementById('kategori').value;
        const subKategori = document.getElementById('sub_kategori').value;

        let valid = true;

        // Cek jika kategori belum dipilih
        if (!kategori) {
            document.getElementById('kategori-error').textContent = 'Silakan pilih kategori zakat.';
            valid = false;
        }

        // Cek jika sub-kategori belum dipilih
        if (!subKategori) {
            document.getElementById('subkategori-error').textContent = 'Silakan pilih jenis zakat.';
            valid = false;
        }

        // Jika ada error, cegah form dari pengiriman
        if (!valid) {
            e.preventDefault();
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    function updateTitleBasedOnRoute() {
        const path = window.location.pathname;

        let title;
        switch (path) {
            case '/':
                title = 'ZIS | Home';
                break;
            case '/about':
                title = 'ZIS | About';
                break;
            case '/informasi':
                title = 'ZIS | Informasi';
                break;
            default:
                title = 'ZIS';
        }
        document.title = title;
    }
    updateTitleBasedOnRoute();

    window.addEventListener('popstate', updateTitleBasedOnRoute);
</script>
</body>

</html>

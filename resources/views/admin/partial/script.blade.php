<script>
    const proyeksiInput = document.getElementById('proyeksi-edit');

    proyeksiInput.addEventListener('input', function(e) {
        let value = e.target.value;

        // Filter hanya angka
        value = value.replace(/[^0-9]/g, '');

        // Format menjadi rupiah
        e.target.value = formatRupiah(value);
    });

    function formatRupiah(angka, prefix = '') {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang diinput sudah menjadi angka ribuan
        if (ribuan) {
            let separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix + rupiah;
    }
</script>

@include('users.partial.header')
@include('users.partial.navbar')

<body class="index-page">
    <main class="main">
        <br><br><br><br><br>
        <div
            class="mx-auto max-w-5xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="/assets/img/tabungan.jpg" alt="" />
            </a>
            <div class="p-5">
                <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">TABUNGAN
                    KURBAN</h5>
                <p class="text-sm text-center  font-normal text-gray-500 dark:text-gray-400">Mari tunaikan ibadah kurban
                    anda dengan Tabungan Kurban. Sisihkan penghasilan Anda hingga Idul Adha.</p>
                <hr>


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th rowspan="2" scope="col" class="px-6 py-3 text-center">
                                    Hewan Kurban
                                </th>
                                <th rowspan="2" scope="col" class="px-6 py-3 text-center">
                                    Proyeksi Hasil Tabungan (Rp)
                                </th>
                                <th colspan="3" scope="col" class="px-6 py-3 text-center">
                                    Masa Tabungan dan Setoran Setiap Bulan (Rp)
                                </th>
                            </tr>
                            <tr>
                                <th scope="col" class="px-6 py-4 text-center">
                                    12 Bulan (1 Tahun)
                                </th>
                                <th scope="col" class="px-6 py-4 text-center">
                                    24 Bulan (2 Tahun)
                                </th>
                                <th scope="col" class="px-6 py-4 text-center">
                                    36 Bulan (3 Tahun)
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tab as $t)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td scope="row"
                                        class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $t->hewan }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        Rp. {{ $t->proyeksi }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        Rp. {{ number_format($t->setoran_12_bulan, 0, ',', '.') }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        Rp. {{ number_format($t->setoran_24_bulan, 0, ',', '.') }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        Rp. Rp. {{ number_format($t->setoran_36_bulan, 0, ',', '.') }}
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </main>
    @include('users.partial.footer')

@include('users.partial.header')
@include('users.partial.navbar')

<body class="index-page">
    <main class="main">
        <br><br><br><br><br>
        <div
            class="mx-auto max-w-5xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg" src="assets/img/masjid.jpg" alt="" />
            <div class="p-5">
                <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Jadwal
                    Sholat</h5>

                <p class="mt-1text-sm text-center font-normal text-gray-500 dark:text-gray-400">
                    <i class="bi bi-geo-alt-fill"></i> Kab. Cianjur
                </p>
                <hr>
                <span
                    class="mb-3 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    Hari Ini
                    <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400 tanggal" id="tanggal">Jumat,
                        10 Maret 2024
                    </p>
                </span>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Imsak
                                </th>
                                <td class="px-6 py-4 text-right">
                                    <p class="font-medium text-blue-600 dark:text-blue-500 imsak" id="imsak">04:30
                                        WIB
                                    </p>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Subuh
                                </th>
                                <td class="px-6 py-4 text-right">
                                    <p class="font-medium text-blue-600 dark:text-blue-500 subuh" id="subuh">03.20
                                        AM
                                    </p>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Terbit
                                </th>
                                <td class="px-6 py-4 text-right">
                                    <p class="font-medium text-blue-600 dark:text-blue-500 terbit" id="terbit">03.20
                                        AM
                                    </p>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Dhuha
                                </th>
                                <td class="px-6 py-4 text-right">
                                    <p class="font-medium text-blue-600 dark:text-blue-500 dhuha" id="dhuha">03.20
                                        AM
                                    </p>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Dzuhur
                                </th>
                                <td class="px-6 py-4 text-right">
                                    <p class="font-medium text-blue-600 dark:text-blue-500 dzuhur" id="dzuhur">03.20
                                        AM
                                    </p>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Ashar
                                </th>
                                <td class="px-6 py-4 text-right">
                                    <p class="font-medium text-blue-600 dark:text-blue-500 ashar" id="ashar">03.20
                                        AM
                                    </p>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Maghrib
                                </th>
                                <td class="px-6 py-4 text-right">
                                    <p class="font-medium text-blue-600 dark:text-blue-500 maghrib" id="maghrib">03.20
                                        AM
                                    </p>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Isya
                                </th>
                                <td class="px-6 py-4 text-right">
                                    <p class="font-medium text-blue-600 dark:text-blue-500 isya" id="isya">03.20 AM
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </main>
    <script src="/assets/js/jadwal.js"></script>
    @include('users.partial.footer')

@include('users.partial.header')
@include('users.partial.navbar')

<body class="index-page">
    <main class="main">
        <br><br><br><br><br>
        <div
            class="mx-auto max-w-6xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="/assets/img/kalkulator.jpg" width="100%" alt="" />
            </a>
            <div class="p-5">
                <div class="text-center">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        KALKULATOR ZAKAT</h5>
                    <span class="text-center">Yuk hitung berapa zakat yang harus kamu keluarkan tahun ini</span>
                </div>
                <hr>
                <form action="{{ route('kalkulator.store') }}" method="POST" class="max-w-7xl mx-auto">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mt-3">
                                <label for="pendapatan"
                                    class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Pendapatan
                                    (Gaji bulanan)</label>
                                <div class="flex">
                                    <span
                                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                        Rp.
                                    </span>
                                    <input type="text" id="pendapatan"
                                        class="block w-full flex-1 px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-none rounded-e-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        minlength="3" maxlength="50" inputmode="numeric" name="pendapatan"
                                        placeholder="" required="" onclick="this.select();"
                                        oninvalid="this.setCustomValidity('Min. 3 Karakter')"
                                        oninput="setCustomValidity('');" aria-invalid="true" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mt-3">
                                <label for="lainnya"
                                    class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Penghasilan
                                    lain Bulanan (Optional)</label>
                                <div class="flex">
                                    <span
                                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                        Rp.
                                    </span>
                                    <input type="text" id="lainnya"
                                        class="block w-full flex-1 px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-none rounded-e-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        maxlength="50" inputmode="numeric" name="lainnya" placeholder=""
                                        onclick="this.select();" oninput="setCustomValidity('');" aria-invalid="true" />
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <h4 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Nilai Zakat
                            </h4>
                            <span>Berikut hasil perhitungan dan nilai zakat yang harus anda keluarkan</span>
                        </div>
                        <div class="col-12">
                            <div class="mt-3">
                                <label for="total"
                                    class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Total
                                    Harta</label>
                                <div class="flex">
                                    <span
                                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                        Rp.
                                    </span>
                                    <input type="text" id="total"
                                        class="block w-full flex-1 px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-none rounded-e-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        minlength="3" maxlength="50" inputmode="numeric" name="total" placeholder=""
                                        required="" onclick="this.select();"
                                        oninvalid="this.setCustomValidity('Min. 3 Karakter')"
                                        oninput="setCustomValidity('');" aria-invalid="true" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mt-3">
                                <label for=""
                                    class="block mb-2 text-base font-medium text-center text-gray-900 dark:text-white">Nilai
                                    Zakat</label>
                                <h1 id="zakatAmount" name="zakatAmount"
                                    class="mb-4 text-center text-lg font-extrabold leading-none text-green-900 md:text-4xl lg:text-4xl dark:text-white">
                                    <span class="text-green-700 dark:text-green-600">Rp. 0</span>
                                </h1>
                                <input type="hidden" id="zakat" name="zakat" value="0">
                            </div>
                        </div>

                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="text-white bg-gradient-to-r from-green-600 via-green-700 to-green-800 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-base w-full px-5 py-2.5 text-center me-2 mb-2">Salurkan
                            Zakat</button>
                    </div>
                </form>
            </div>
        </div>

    </main>
    @include('users.partial.footer')

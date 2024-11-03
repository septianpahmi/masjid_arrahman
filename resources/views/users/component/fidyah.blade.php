@include('users.partial.header')
@include('users.partial.navbar')

<body class="index-page">
    <main class="main">
        <br><br><br><br><br>
        <div
            class="mx-auto max-w-5xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="/assets/img/fidyah.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Bayar
                        Hutang Puasa Dengan Fidyah Untuk Fakir Miskin</h5>
                </a>
                <hr>
                <form action="{{ route('fidyah.payment') }}" method="POST" class="max-w-7xl mx-auto">
                    @csrf
                    <div class="row">
                        <p class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Fidyah Per-Hari:
                            Rp. 30.000</p>
                        <div class="col-12">
                            <div class="mt-3">
                                <label for="jumlah"
                                    class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Jumlah
                                    Hari</label>
                                <div class="flex">
                                    <input type="text" id="jumlah"
                                        class="block w-full flex-1 px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-none rounded-e-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        maxlength="2" inputmode="numeric" name="jumlah" placeholder="" required=""
                                        onclick="this.select();" oninvalid="this.setCustomValidity('Min. 1 Karakter')"
                                        oninput="setCustomValidity('');" aria-invalid="true"
                                        onchange="document.getElementById('nominal').value = this.value * 30000;" />
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mt-3">
                                <label for="nominal"
                                    class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Nominal</label>
                                <div class="flex">
                                    <span
                                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                        Rp.
                                    </span>
                                    <input type="text" id="nominal"
                                        class="block w-full flex-1 px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-none rounded-e-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        minlength="3" maxlength="50" inputmode="numeric" name="nominal" placeholder=""
                                        required="" onclick="this.select();"
                                        oninvalid="this.setCustomValidity('Min. 3 Karakter')"
                                        oninput="setCustomValidity('');" aria-invalid="true" readonly />
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-2 mt-5 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Lengkapi
                            data di
                            bawah ini:</h4>
                        <div class="col-6">
                            <label for="nama"
                                class="block mb-2 mt-3 text-base font-medium text-gray-900 dark:text-white">Nama
                                Lengkap</label>
                            <input type="text" id="nama" name="nama"
                                class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                        </div>
                        <div class="col-6">
                            <label for="gender"
                                class="block mb-2 mt-3 text-base font-medium text-gray-900 dark:text-white">Gender</label>
                            <select id="gender" name="gender"
                                class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                                <option selected value="">Pilih Gender</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                            @if ($errors->has('gender'))
                                <div id="kategori-error" class="text-red-500 text-sm mt-1">
                                    {{ $errors->first('gender') }}</div>
                            @endif
                        </div>
                        <div class="col-6">
                            <div class="mt-3">
                                <label for="phone"
                                    class="block mb-2 text-base font-medium text-gray-900 dark:text-white">No.
                                    Telp</label>
                                <input type="text" id="phone" name="phone"
                                    class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    inputmode="numeric" pattern="[0-9]*" maxlength="13" minlength="10" required />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mt-3">
                                <label for="email"
                                    class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email" id="email" name="email"
                                    class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required />
                            </div>
                        </div>
                        <button type="submit"
                            class="mt-5 text-white bg-gradient-to-r from-green-600 via-green-700 to-green-800 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-base w-full px-5 py-2.5 text-center me-2 mb-2">Pembayaran</button>
                    </div>
                </form>
            </div>
        </div>

    </main>
    @include('users.partial.footer')

@include('users.partial.header')
@include('users.partial.navbar')

<body class="index-page">
    <main class="main">
        <section id="hero"
            class="bg-center bg-no-repeat bg-[url('https://baznas.jogjakota.go.id/assets/instansi/baznas/article/20230323205307.jpg')] bg-gray-700 bg-cover h-50 bg-blend-multiply">
            <div class="px-4 mx-auto max-w-screen-lg text-center py-24 lg:py-56">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                    Masjid Arrahman</h1>
                <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Selamat datang di aplikasi
                    kami, aplikasi kami membantu mempermudah untuk beribadah.</p>
            </div>
        </section>

        @include('users.layout.team')
        @include('users.layout.berita')


    </main>
    <a id="scroll-top" class="scroll-top align-items-center justify-content-center"></a>

    <div
        class="fixed bottom-0 left-0 z-50 w-full h-20 bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600 overflow-x-auto">
        <div class="flex h-full min-w-[640px] justify-between items-center mx-auto font-medium">
            <a href="{{ route('kalkulator') }}" type="button"
                class="flex-1 flex flex-col items-center justify-center px-3 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <img src="https://cdn-icons-png.freepik.com/512/3399/3399030.png" class="w-5 h-5 mb-2"
                    fill="currentColor">
                <span
                    class="text-sm text-green-600 dark:text-green-600 group-hover:text-green-700 dark:group-hover:text-green-600">Kalkulator
                    Zakat</span>
            </a>
            <a href="{{ route('bayar-zakat') }}" type="button"
                class="flex-1 flex flex-col items-center justify-center px-3 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <img src="https://cdn-icons-png.flaticon.com/512/4398/4398847.png" class="w-5 h-5 mb-2"
                    fill="currentColor">
                <span
                    class="text-sm text-green-600 dark:text-green-600 group-hover:text-green-700 dark:group-hover:text-green-600">Bayar
                    Zakat</span>
            </a>
            <a href="{{ route('tabungan.zakat') }}" type="button"
                class="flex-1 flex flex-col items-center justify-center px-3 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <img src="https://cdn-icons-png.flaticon.com/512/3347/3347971.png" class="w-5 h-5 mb-2"
                    fill="currentColor">
                <span
                    class="text-sm text-green-600 dark:text-green-600 group-hover:text-green-700 dark:group-hover:text-green-600">Tabungan</span>
            </a>
            <a href="{{ route('fidyah.user') }}" type="button"
                class="flex-1 flex flex-col items-center justify-center px-3 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <img src="https://cdn-icons-png.flaticon.com/512/2914/2914902.png" class="w-5 h-5 mb-2"
                    fill="currentColor">
                <span
                    class="text-sm text-green-600 dark:text-green-600 group-hover:text-green-700 dark:group-hover:text-green-600">Fidyah</span>
            </a>
            <a href="{{ route('infak.user') }}" type="button"
                class="flex-1 flex flex-col items-center justify-center px-3 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <img src="https://cdn-icons-png.flaticon.com/512/3165/3165318.png" class="w-5 h-5 mb-2"
                    fill="currentColor">
                <span
                    class="text-sm text-green-600 dark:text-green-600 group-hover:text-green-700 dark:group-hover:text-green-600">Infak</span>
            </a>
            <a href="{{ route('jadwal') }}" type="button"
                class="flex-1 flex flex-col items-center justify-center px-3 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <img src="https://cdn-icons-png.flaticon.com/512/4448/4448541.png" class="w-5 h-5 mb-2"
                    fill="currentColor">
                <span
                    class="text-sm text-green-600 dark:text-green-600 group-hover:text-green-700 dark:group-hover:text-green-600">Jadwal
                    Solat</span>
            </a>
        </div>
    </div>


    @include('users.partial.footer')

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portofolio | Atika Fitria Arifiana</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/waves.css') }}">
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/png" sizes="16x16" class="rounded-circle">
</head>

<body>

    <!-- Header -->
    @include('partial.navbar')
    @include('partial.header')


    <!-- Tampilkan Pendidikan -->
    <section id="pendidikan" class="my-5">
        <div class="container">
            <h2 class>Pendidikan</h2>
            <div class="row">
                @foreach($pendidikan as $item)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ asset('storage/'.$item->gambar) }}" class="card-img-top" alt="{{ $item->nama_institusi }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->nama_institusi }}</h5>
                                <p class="card-text">{{ $item->program_studi }} ({{ $item->tahun_mulai }} - {{ $item->tahun_selesai }})</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Tools -->
    @include('partial.tools')
    
    <!-- Tampilkan Portfolio -->
    <section id="portfolio" class="my-5">
        <div class="container">
            <h2 class="text">Portfolio</h2>
            <div class="row">
                @foreach($portfolio as $item)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ asset('storage/'.$item->image) }}" class="card-img-top" alt="{{ $item->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

        <!-- Kontak -->
        @include('partial.kontak')

<!-- Content Section -->
@yield('content')  <!-- Konten utama akan ditampilkan di sini -->

    <!-- Footer -->
    @include('partial.footer')

    <!-- JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

@extends('users.layout.index')

@section('content')
<main>		<!-- =======================
Main Banner START -->
<section class="pt-3 pt-lg-5">
    <div class="container">
        <!-- Content and Image START -->
        <div class="row g-4 g-lg-5">
            <!-- Content -->
            <div class="col-lg-6 position-relative mb-4 mb-md-0">
                <!-- Title -->
                <h1 class="mb-4 mt-md-5 display-5">Wujudkan perubahan bersama
                    <span class="position-relative z-index-9">kepedulian Anda!.
                        <!-- SVG START -->
                        <span
                            class="position-absolute top-50 start-50 translate-middle z-index-n1 d-none d-md-block mt-7">
                            <svg width="270.5px" height="30.5px" viewBox="0 0 445.5 21.5">
                                <path class="fill-primary opacity-7"
                                    d="M409.9,2.6c-9.7-0.6-19.5-1-29.2-1.5c-3.2-0.2-6.4-0.2-9.7-0.3c-7-0.2-14-0.4-20.9-0.5 c-3.9-0.1-7.8-0.2-11.7-0.3c-1.1,0-2.3,0-3.4,0c-2.5,0-5.1,0-7.6,0c-11.5,0-23,0-34.5,0c-2.7,0-5.5,0.1-8.2,0.1 c-6.8,0.1-13.6,0.2-20.3,0.3c-7.7,0.1-15.3,0.1-23,0.3c-12.4,0.3-24.8,0.6-37.1,0.9c-7.2,0.2-14.3,0.3-21.5,0.6 c-12.3,0.5-24.7,1-37,1.5c-6.7,0.3-13.5,0.5-20.2,0.9C112.7,5.3,99.9,6,87.1,6.7C80.3,7.1,73.5,7.4,66.7,8 C54,9.1,41.3,10.1,28.5,11.2c-2.7,0.2-5.5,0.5-8.2,0.7c-5.5,0.5-11,1.2-16.4,1.8c-0.3,0-0.7,0.1-1,0.1c-0.7,0.2-1.2,0.5-1.7,1 C0.4,15.6,0,16.6,0,17.6c0,1,0.4,2,1.1,2.7c0.7,0.7,1.8,1.2,2.7,1.1c6.6-0.7,13.2-1.5,19.8-2.1c6.1-0.5,12.3-1,18.4-1.6 c6.7-0.6,13.4-1.1,20.1-1.7c2.7-0.2,5.4-0.5,8.1-0.7c10.4-0.6,20.9-1.1,31.3-1.7c6.5-0.4,13-0.7,19.5-1.1c2.7-0.1,5.4-0.3,8.1-0.4 c10.3-0.4,20.7-0.8,31-1.2c6.3-0.2,12.5-0.5,18.8-0.7c2.1-0.1,4.2-0.2,6.3-0.2c11.2-0.3,22.3-0.5,33.5-0.8 c6.2-0.1,12.5-0.3,18.7-0.4c2.2-0.1,4.4-0.1,6.7-0.1c11.5-0.1,23-0.2,34.6-0.4c7.2-0.1,14.4-0.1,21.6-0.1c12.2,0,24.5,0.1,36.7,0.1 c2.4,0,4.8,0.1,7.2,0.2c6.8,0.2,13.5,0.4,20.3,0.6c5.1,0.2,10.1,0.3,15.2,0.4c3.6,0.1,7.2,0.4,10.8,0.6c10.6,0.6,21.1,1.2,31.7,1.8 c2.7,0.2,5.4,0.4,8,0.6c2.9,0.2,5.8,0.4,8.6,0.7c0.4,0.1,0.9,0.2,1.3,0.3c1.1,0.2,2.2,0.2,3.2-0.4c0.9-0.5,1.6-1.5,1.9-2.5 c0.6-2.2-0.7-4.5-2.9-5.2c-1.9-0.5-3.9-0.7-5.9-0.9c-1.4-0.1-2.7-0.3-4.1-0.4c-2.6-0.3-5.2-0.4-7.9-0.6 C419.7,3.1,414.8,2.9,409.9,2.6z" />
                            </svg>
                        </span>
                        <!-- SVG END -->
                    </span>
                </h1>
                <!-- Info -->
                <p class="mb-6">Laporkan, Diperhartikan, Diatasi!.</p>

                <!-- Buttons -->
                <div class="hstack gap-4 flex-wrap align-items-center">
                    <!-- Button -->
                    <a href="{{route('laporan')}}" class="btn btn-primary-soft mb-4">Buat Laporan Cepat</a>
                </div>
            </div>

            <!-- Image -->
            <div class="col-lg-6 position-relative">

                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/HH_Polizeihauptmeister_MZ.jpg/1200px-HH_Polizeihauptmeister_MZ.jpg" class="rounded" alt="">

            </div>
        </div>
        <!-- Content and Image END -->
    </div>
</section>
<!-- =======================
Main Banner END -->

<!-- =======================
Best deal START -->
<section class="pb-2 pb-lg-5">
    <div class="container">
        <!-- Slider START -->
        <div class="tiny-slider arrow-round arrow-blur arrow-hover">
            <div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-edge="2"
                data-dots="false" data-items-xl="3" data-items-lg="2" data-items-md="1">
            </div>
</section>
<!-- =======================
Best deal END -->

<!-- =======================
About START -->
<section class="pb-0 pb-xl-5">
    <div class="container">
        <div class="row g-4 justify-content-between align-items-center">
            <!-- Left side START -->
            <div class="col-lg-5 position-relative">

                <!-- Image -->
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/HH_Polizeihauptmeister_MZ.jpg/1200px-HH_Polizeihauptmeister_MZ.jpg" class="rounded-3 position-relative" alt="">
            </div>
            <!-- Left side END -->

            <!-- Right side START -->
            <div class="col-lg-6">
                <h2 class="mb-3 mb-lg-5">Sampaikan Laporan anda di LaporKuy!</h2>
                <p class="mb-3 mb-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum,
                    repellat eos iste officia voluptas et inventore ex, molestias mollitia pariatur adipisci
                    nobis aperiam, nam eligendi rem nihil ullam quibusdam voluptates?</p>

                <!-- Features START -->
                <div class="row g-4">
                    <!-- Item -->
                    <div class="col-sm-6">
                        <div class="icon-lg bg-success bg-opacity-10 text-success rounded-circle"><i
                                class="bi bi-shield-lock-fill"></i></div>
                        <h5 class="mt-2">Privasi Terjaga</h5>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    </div>
                    <!-- Item -->
                    <div class="col-sm-6">
                        <div class="icon-lg bg-danger bg-opacity-10 text-danger rounded-circle"><i
                                class="bi bi-stopwatch-fill"></i></div>
                        <h5 class="mt-2">Layanan 24 Jam</h5>
                        <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                    </div>
                    <!-- Item -->
                    <div class="col-sm-6">
                        <div class="icon-lg bg-orange bg-opacity-10 text-orange rounded-circle"><i
                                class="bi bi-shield-fill-check"></i></div>
                        <h5 class="mt-2">Keamanan Data & Laporan</h5>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    </div>
                    <!-- Item -->
                    <div class="col-sm-6">
                        <div class="icon-lg bg-info bg-opacity-10 text-info rounded-circle"><i
                                class="bi bi-lightning-fill"></i></div>
                        <h5 class="mt-2">Pelayanan & Respon Cepat</h5>
                        <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                    </div>
                </div>
                <!-- Features END -->

            </div>
            <!-- Right side END -->
        </div>
    </div>
</section>
<!-- =======================
About END -->

<!-- =======================
Near by START -->

<!-- =======================
Download app START -->
<section class="bg-light">
    <div class="container">
        <div class="row g-4">

            <!-- Help -->
            <div class="col-md-6 col-xxl-4">
                <div class="bg-body d-flex rounded-3 h-100 p-4">
                    <h3><i class="fa-solid fa-hand-holding-heart"></i></h3>
                    <div class="ms-3">
                        <h5>Bantuan 24 Jam</h5>
                        <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>

            <!-- Trust -->
            <div class="col-md-6 col-xxl-4">
                <div class="bg-body d-flex rounded-3 h-100 p-4">
                    <h3><i class="bi bi-patch-check-fill"></i></h3>
                    <div class="ms-3">
                        <h5>Dipercaya Pengguna</h5>
                        <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
Download app END -->

</main>
@endsection
@extends('app')
@section('content')

<main>
    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="container-fluid">
                        <div class="row">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Masuk</button>
                                </li>
            
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Keluar</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">ABSENSI</h1>
        
                            <h6 class="text-center">Absensi mahasiswa be</h6>
        
                            <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text bi-search" id="basic-addon1">
                                        
                                    </span>
        
                                    <input name="keyword" type="search" class="form-control" id="keyword" placeholder="Masukan Kode atau tap kartu" aria-label="Search">
        
                                    <button type="submit" class="form-control">Search</button>
                                </div>
                            </form>
                            <div class="text-center mt-5">
                                <a href="{{ route('register') }}">Daftarkan kartu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="explore-section section-padding" id="section_2">
        <div class="container">
                <div class="col-12 text-center">
                    <h2 class="mb-4">Absensi Masuk</h1>
                </div>

            </div>
        </div>
    </section>
</main>

<script>
    // Mengatur fokus ke input saat halaman dimuat
    window.onload = function() {
        document.getElementById('keyword').focus();
    };
</script>

@endsection
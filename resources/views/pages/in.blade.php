@extends('app')
@section('content')

<main>
    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="container-fluid">
                        <div class="row">
                            <ul class="nav nav-tabs ps-3" id="myTab" role="tablist">
                                <li class="nav-item ms-3" role="presentation">
                                    <a href="{{ route('attendance.in') }}" class="nav-link active">Masuk</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="{{ route('attendance.out') }}" class="nav-link">Keluar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">ABSENSI</h1>
                            <h6 class="text-center">Absensi Mahasiswa</h6>
                            <form method="post" action="{{ route('attendance.in.submit') }}" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search" onsubmit="handleSubmit(event)">
                                @csrf
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text bi-search" id="basic-addon1"></span>
                                    <input name="rfid" type="search" class="form-control" id="rfid" placeholder="Masukan Kode atau tap kartu" aria-label="Search">
                                    <button id="submitButton" type="submit" class="form-control">Submit</button>
                                </div>
                            </form>
                            <div class="text-center mt-5">
                                <a href="{{ route('register') }}"><u>Registrasi kartu</u></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="explore-section section-padding" id="section_2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="mb-4">Mahasiswa Masuk</h1>
                </div>
                <div class="col-lg-10 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="p-4 rounded bg-white shadow-lg">
                            <table id="table" class="table table-bordered w-100">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($student as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->student->id }}</td>
                                        <td>{{ $item->student->name }}</td>
                                        <td>{{ $item->student->student_identity_number }}</td>
                                        <td>{{ $item->created_at }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    window.onload = function() {
        document.getElementById('rfid').focus();
    };
    function handleSubmit(event) {
        event.preventDefault();
        var submitButton = document.getElementById("submitButton");
        submitButton.disabled = true;
        submitButton.innerHTML = '<div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>';
        event.target.submit();
    }
</script>


@endsection
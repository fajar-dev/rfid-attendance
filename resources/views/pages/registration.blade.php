@extends('app')
@section('content')
<main>
    <section class="hero-section h-100 d-flex justify-content-center align-items-center" id="section_1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-8 h-100 col-12 mx-auto">
                            <h1 class="text-white text-center">REGISTRASI</h1>
                            <h6 class="text-center">Registrasi RFID Mahasiswa</h6>
                            <form action="{{ route('register.store') }}" method="post" class="custom-form contact-form mt-5" id="register" role="form">
                                @csrf
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="">
                                            <label for="floatingInput">Nama</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-12">
                                        <div class="form-floating">
                                            <input type="number" name="student_identity_number" id="nim" class="form-control" placeholder="Nim" required="">
                                            <label for="floatingInput">Nim</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-12 text-end align-items-center">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="form-control w-50">Submit</button>
                                            <a href="{{ route('attendance.in') }}">Mulai Absensi</a>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body" >
                                                <div id="tapCard" class="card p-4 text-center" style="cursor: pointer;">
                                                    <h5 class="card-title mb-4">Tap a RFID</h5>
                                                    <input name="rfid" id="rfid" class="form-control p-0 text-center border-0"required="" onfocus="this.style.border='none'; this.style.outline='none'; this.style.boxShadow='none';">
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                <h2 class="mb-4">Mahasiswa</h1>
            </div>
            <div class="col-lg-10 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="p-4 rounded bg-white shadow-lg">
                    <table class="table" id="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">ID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIM</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($student as $item)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->student_identity_number }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
           </div>
        </div>
    </section>
</main>

<script>
document.getElementById('rfid').addEventListener('change', function() {
        if (this.value !== "") {
            document.getElementById('register').submit(); // Submit the form
        }
    });
    document.getElementById('exampleModal').addEventListener('shown.bs.modal', function () {
        document.getElementById('rfid').focus(); // Set focus on the RFID input
    });
</script>

@endsection
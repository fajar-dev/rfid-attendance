@extends('app')
@section('content')

<main>
    <section class="hero-section h-100 d-flex justify-content-center align-items-center" id="section_1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">Absensi</h1>
        
                            <h6 class="text-center">Registrasi Mahasiswa</h6>
        
                            <form action="{{ route('register.store') }}" method="post" class="custom-form contact-form mt-5" role="form">
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
                                    <div class="col-lg-8 col-12">
                                        <div class="form-floating">
                                            <input type="number" name="rfid" id="nim" class="form-control" placeholder="RFID" required="">
                                            <label for="floatingInput">RFaID</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-12 text-end align-items-center">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="form-control">Submit</button>
                                            <a href="{{ route('register') }}">Mulai Absensi</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          ...
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Save changes</button>
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
                    <div class="d-flex">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">RFID Code</th>
                                <th scope="col">Nama</th>
                                <th scope="col">SNIM</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
           </div>
        </div>
    </section>
</main>

{{-- <script>
    // Mengatur fokus ke input saat halaman dimuat
    window.onload = function() {
        document.getElementById('keyword').focus();
    };
</script> --}}

@endsection
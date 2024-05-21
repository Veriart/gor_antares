@extends('admin.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 d-lg-block d-none align-self-center">
                            <img src="/img/field.png" alt="Field" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-12">
                            <h4 class="card-title">Data Tipe Lapangan</h4>
                            <p class="card-subtitle mb-3">
                                Spesifik data lapangan
                            </p>
                            <form>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="Nama Lapangan">
                                    <label>
                                        <i class="fas fa-court-sport me-2 fs-4"></i>Nama Lapangan
                                    </label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" placeholder="Email">
                                    <label>
                                        <i class="fas fa-list-ol me-2 fs-4"></i>Nomor Lapangan
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <select class="form-select">
                                        <option hidden><i class="ti ti-mail me-2 fs-4"></i>Status</option>
                                        <option value="Ready">Ready</option>
                                        <option value="Not Ready">Not Ready</option>
                                    </select>
                                </div>
                                <div class="d-md-flex align-items-center">
                                    <div class="mt-3 mt-md-0 ms-auto">
                                        <button type="submit" class="btn btn-primary  hstack gap-6">
                                            <i class="ti ti-send fs-4"></i>
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12">
                            <hr>
                            <div class="table-responsive">

                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Nomor</th>
                                            <th>Status</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Martena Mccray</td>
                                            <td>Post-Sales support</td>
                                            <td>Edinburgh</td>
                                            <td>46</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

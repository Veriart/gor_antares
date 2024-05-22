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
                            <h4 class="card-title">PROFILE GELANGGANG OLAHRAGA</h4>
                            <p class="card-subtitle mb-3">
                                Profile
                            </p>
                            <form action="{{ route('gymnasium_update', 1) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" placeholder="Nama GOR" value="{{ $gymnasium->name }}">
                                    <label>
                                        <i class="fas fa-landmark-dome me-2 fs-4"></i>Nama GOR
                                    </label>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <select class="form-select @error('type') is-invalid @enderror" name="type">
                                        <option value="" hidden selected><i class="ti ti-mail me-2 fs-4"></i>Tipe GOR
                                        </option>
                                        <option value="Single Field"
                                            {{ $gymnasium->type == 'Single Field' ? 'selected' : '' }}>Single Field</option>
                                        <option value="Multiple Field"
                                            {{ $gymnasium->type == 'Multiple Field' ? 'selected' : '' }}>Multiple Field
                                        </option>
                                    </select>
                                    @error('type')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class=" mb-3">
                                    <label class="ms-1"><i class="fas fa-clock me-2 fs-4"></i> Jam Operasional</label>
                                    <div class="row">
                                        <div class="col-6">
                                            <small class="fw-bold">Jam Buka</small>
                                            <input type="time" name="open" class="form-control me-3 operational"
                                            id="timepicker" placeholder="Jam Buka" data-dtp="dtp_qqyco" value="">
                                        </div>
                                        <div class="col-6">
                                            <small class="fw-bold">Jam Tutup</small>
                                            <input type="time" name="close" class="form-control operational"
                                                id="timepicker" placeholder="Jam Tutup" data-dtp="dtp_qqyco" value="">
                                        </div>
                                    </div>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="d-md-flex align-items-center">
                                    <div class="mt-3 mt-md-0 ms-auto">
                                        <button type="submit" class="btn btn-primary  hstack gap-6">
                                            <i class="ti ti-send fs-4"></i>
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

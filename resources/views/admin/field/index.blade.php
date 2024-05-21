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
                            <h4 class="card-title">DATA LAPANGAN</h4>
                            <p class="card-subtitle mb-3">
                                Spesifik data lapangan
                            </p>
                            <form action="{{ route('field_store') }}" method="POST">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" placeholder="">
                                    <label>
                                        <i class="fas fa-court-sport me-2 fs-4"></i>Nama Lapangan
                                    </label>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control @error('number') is-invalid @enderror"
                                        name="number" placeholder="">
                                    <label>
                                        <i class="fas fa-list-ol me-2 fs-4"></i>Nomor Lapangan
                                    </label>
                                    @error('number')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <select class="form-select @error('status') is-invalid @enderror" name="status">
                                        <option value="" hidden selected><i class="ti ti-mail me-2 fs-4"></i>Status
                                        </option>
                                        <option value="Ready">Ready</option>
                                        <option value="Not Ready">Not Ready</option>
                                    </select>
                                    @error('status')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
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

                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th class="text-center">Nomor</th>
                                            <th class="text-center">Status</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($fields as $field)
                                            <tr>
                                                <form action="{{ route('field_update',$field->id) }}" method="post">
                                                    @method('PUT')
                                                    @csrf
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><input type="text" name="name"
                                                            class="form-control-sm field-name" value="{{ $field->name }}"
                                                            hidden>
                                                        <p class="mb-0 text-name">{{ $field->name }}</p>
                                                    </td>
                                                    <td class="text-center align-self-center"><input type="text"
                                                            name="number" class="form-control-sm field-number"
                                                            value="{{ $field->number }}" hidden>
                                                        <p class="mb-0 text-number">{{ $field->number }}</p>
                                                    </td>
                                                    <td class="text-center">
                                                        <select
                                                            class="form-select-sm field-status bg-{{ $field->status == 'Ready' ? 'success' : 'danger' }} text-white"
                                                            name="status" hidden>
                                                            <option value="Ready"
                                                                {{ $field->status == 'Ready' ? 'selected' : '' }}>Ready
                                                            </option>
                                                            <option value="Not Ready"
                                                                {{ $field->status == 'Not Ready' ? 'selected' : '' }}>Not
                                                                Ready</option>
                                                        </select>
                                                        <span
                                                            class="mb-1 badge rounded-pill text-bg-{{ $field->status == 'Ready' ? 'success' : 'danger' }} text-status">{{ $field->status }}</span>
                                                    </td>
                                                    <td class="d-flex">
                                                        <a href="javascript:void(0)"
                                                            class="btn btn-warning btn-sm btn-cancel text-white me-1"
                                                            hidden>x</a>
                                                        <a href="javascript:void(0)"
                                                            class="btn btn-success btn-sm btn-edit me-1">Edit</a>
                                                        <button type="submit" class="btn btn-sm btn-primary btn-update me-1"
                                                            name="update" data-id="{{ $field->id }}"
                                                            hidden>Update</button>
                                                        </form>
                                                        <form action="{{ route('field_destroy',$field->id) }}" method="POST">
                                                            @csrf
                                                            <button type="button" class="btn btn-sm btn-danger btn-destroy"
                                                            name="delete">Delete</button>
                                                        </form>
                                                    </td>
                                            </tr>
                                        @endforeach
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

@push('script')
    <script type="text/javascript">
        $('.btn-edit').click(function() {
            $(this).parent().prev().prev().prev().find('.field-name').removeAttr('hidden')
            $(this).parent().prev().prev().find('.field-number').removeAttr('hidden')
            $(this).parent().prev().find('.field-status').removeAttr('hidden')
            $(this).parent().prev().prev().prev().find('.text-name').attr('hidden', 'true')
            $(this).parent().prev().prev().find('.text-number').attr('hidden', 'true')
            $(this).parent().prev().find('.text-status').attr('hidden', 'true')
            $(this).parent().find('.btn-update').removeAttr('hidden')
            $(this).parent().find('.btn-cancel').removeAttr('hidden')
            $(this).attr('hidden', 'true')
        })
        $('.btn-cancel').click(function() {
            $(this).parent().prev().prev().prev().find('.field-name').attr('hidden', 'true')
            $(this).parent().prev().prev().find('.field-number').attr('hidden', 'true')
            $(this).parent().prev().find('.field-status').attr('hidden', 'true')
            $(this).parent().prev().prev().prev().find('.text-name').removeAttr('hidden', 'true')
            $(this).parent().prev().prev().find('.text-number').removeAttr('hidden', 'true')
            $(this).parent().prev().find('.text-status').removeAttr('hidden', 'true')
            $(this).parent().find('.btn-edit').removeAttr('hidden')
            $(this).parent().find('.btn-update').attr('hidden', 'true')
            $(this).attr('hidden', 'true')
        })
    </script>
@endpush

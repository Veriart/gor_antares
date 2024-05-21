@extends('admin.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1 class="arena-f">{{ gymnasium()->name }}</h1>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-fill mx-auto" role="tablist">
                                    @foreach ($fields as $field)
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link {{ $loop->first == 1 ? 'active' : '' }} d-flex text-center"
                                                data-bs-toggle="tab" href="#{{ $field->name . $field->number }}"
                                                role="tab" aria-selected="false" tabindex="-1">
                                                <span>
                                                    @php
                                                        switch ($field->name) {
                                                            case 'Futsal':
                                                                $fieldName = 'futbol';
                                                                break;
                                                            case 'Badminton':
                                                                $fieldName = 'badminton';
                                                                break;
                                                            case 'Volly':
                                                                $fieldName = 'volleyball';
                                                                break;
                                                            case 'Basket':
                                                                $fieldName = 'basketball';
                                                                break;
                                                            default:
                                                                $fieldName = $field->name;
                                                                break;
                                                        }
                                                    @endphp
                                                    <i class="fas fa-{{ $fieldName }} fs-4"></i>
                                                </span>
                                                <span class="d-none d-md-block ms-2">{{ $field->name }}
                                                    ({{ $field->number }})
                                                </span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                                <hr>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    @foreach ($fields as $field)
                                        <div class="tab-pane {{ $loop->first == 1 ? 'active' : '' }}"
                                            id="{{ $field->name . $field->number }}" role="tabpanel">
                                            <div class="p-3">
                                                <h3 class="redzone-f">Lapangan {{ $field->name }}</h3>

                                                <div class="d-flex flex-wrap gap-6 mt-3">
                                                    <div>
                                                        <input type="checkbox" class="btn-check" id="btn-check"
                                                            autocomplete="off">
                                                        <label class="btn btn-outline-primary " for="btn-check">07.00 - 08.00
                                                            <small class="d-block">Available</small>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <input type="checkbox" class="btn-check" id="btn-check2"
                                                            autocomplete="off">
                                                        <label class="btn btn-outline-primary " for="btn-check2">08.00 - 09.00
                                                            <small class="d-block">Available</small>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <input type="checkbox" class="btn-check" id="btn-check3"
                                                            autocomplete="off" disabled>
                                                        <label class="btn btn-outline-danger " for="btn-check3">09.00 - 10.00
                                                            <small class="text-muted d-block"><small>Booked</small></small>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

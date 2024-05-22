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
                                            <div class="p-3 pe-0">
                                                <h3 class="redzone-f">Lapangan {{ $field->name }}</h3>

                                                <div class="d-flex flex-wrap gap-6 mt-3">
                                                    @foreach (operating_hour('07:00:00', '10:00:00') as $time)
                                                    <div class="flex-grow-2">
                                                        <input type="checkbox" class="btn-check" id="btn-check{{ $loop->index }}"
                                                        autocomplete="off">
                                                        <label class="btn btn-outline-primary b-square" for="btn-check{{ $loop->index }}"><label class="fw-bold">{{ $time }}</label>
                                                            <small class="d-block">Available</small>
                                                        </label>
                                                    </div>
                                                    @endforeach
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

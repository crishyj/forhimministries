@extends('layouts.admin_app', [
    'parentSection' => 'dashboards',
    'elementName' => 'dashboard'
])

@section('content')    
    <div class="mx-5 mt-8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-9">
                <div class="card bg-secondary shadow border-0">
                   
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" method="POST" action="{{ route('vlog.store') }}" enctype="multipart/form-data" novalidate>
                            @csrf

                            <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                <label for="title">Vlog Title</label>
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Vlog Title') }}" type="text" name="title" value="{{ old('title') }}" required autofocus>
                                </div>
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('link') ? ' has-danger' : '' }}">
                                <label for="link">Vlog Video</label>
                                <div class="input-group input-group-alternative mb-3">
                                    <input class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" type="file" name="link" value="{{ old('link') }}" required>
                                </div>
                                @if ($errors->has('link'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('link') }}</strong>
                                    </span>
                                @endif
                                <div class="progress">
                                    <div class="bar"></div >
                                    <div class="percent">0%</div >
                                </div>
                            </div>
                           
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('Create Vlog') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">    
    <style>
        .progress { position:relative; width:100%; height: auto !important;}
        .bar { background-color: #008000; width:0%; height:20px; }
        .percent { position:absolute; display:inline-block; left:50%; color: #7F98B2;}
    </style>
@endpush

@push('js')
    <script src="{{ asset('argon') }}/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            var bar = $('.bar');
            var percent = $('.percent');

            $('form').ajaxForm({
                beforeSend: function() {
                    var percentVal = '0%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                uploadProgress: function(event, position, total, percentComplete) {
                    var percentVal = percentComplete + '%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                complete: function(xhr) {
                    // alert('File Uploaded Successfully');
                    window.location.href = "/admin_vlog";
                }
            });
        }); 
    </script>
   
@endpush

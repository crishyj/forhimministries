@extends('layouts.admin_app', [
    'parentSection' => 'dashboards',
    'elementName' => 'dashboard'
])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="admin_header">
                        <img src="{{asset('assets/img/header/admin_header.png')}}" class="navbar-brand-img" alt="...">
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome to the Administration Page. Select the Menu on the upper left to begin managing the Blogs and Vlogs.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')   
    <style>
       .admin_header img{
           width: 100%;
       }
    </style>
@endpush

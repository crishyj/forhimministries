@extends('layouts.app')

@section('content')
<div class="container prayer">
    <div class="text-center pt-3 pb-3" >
        <img src="{{asset('assets/img/PrayerRequest.png')}}" alt="">        
    </div>

    <div class="prayer_text pb-5">
        We consider it an honor that you would trust us to pray for you. Your request will be brought before the Lord Jesus Christ. Our trained staff, Pastor Steve and the ministers take prayer as their purpose in life. Your privacy is of our greatest priority. We will take your prayer request before the Lord and if we receive anything, we will email you what we have for you.
    </div>
    

    <div class="prayer_form pb-5">
        <form action="{{ route('prayer_store') }}" method="POST" class="">
            @csrf
            <div class="form-group {{ $errors->has('prayer_request') ? ' has-danger' : '' }}">
                <label for="prayer_request">Prayer Request</label>
                <span>You are limited to 500 characters. Please be brief.</span>
                <textarea name="prayer_request" id="prayer_request" cols="30" rows="10" class="form-control {{ $errors->has('prayer_request') ? ' is-invalid' : '' }}">{{ old('prayer_request') }}</textarea>
                @error('prayer_request')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group {{ $errors->has('FirstName') ? ' has-danger' : '' }}">
                        <label for="FirstName">First Name</label>
                        <input type="text" name="FirstName" id="FirstName" class="form-control {{ $errors->has('FirstName') ? ' is-invalid' : '' }}" value="{{ old('FirstName') }}">
                        @error('FirstName')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group {{ $errors->has('LastName') ? ' has-danger' : '' }}">
                        <label for="LastName">Last Name</label>
                        <input type="text" name="LastName" id="LastName" class="form-control {{ $errors->has('LastName') ? ' is-invalid' : '' }}" value="{{ old('LastName') }}">
                        @error('LastName')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group {{ $errors->has('email') ? ' has-danger' : '' }}">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" >
                        @error('email')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <input type="submit" value="Submit" class="btn btn-submit">
                </div>
            </div>
           
        </form>
    </div>
    
</div>
@endsection
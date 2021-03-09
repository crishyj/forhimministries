@extends('layouts.app')

@section('content')
<div class="container salvation">
    <div class="text-center pt-3 pb-3" >
        <img src="{{asset('assets/img/header/salvation.png')}}" alt="">        
    </div>
    <div class="salvation_text">
        God forbid, but if you were to die this second, do you know for sure, beyond a shadow of a doubt, that you would go to Heaven?
    </div>

    <div class="salvation_text">
        Let me quickly share with you what the Holy Bible relays. It reads "for all have sinned and come short of the glory of God (Romans 3:23)" and "for the wages of sin is death, but the gift of God is eternal life through Jesus Christ our Lord (Romans 6:23)". The Bible also reads, "For whosoever shall call upon the name of the Lord shall be saved (Romans 10:13)". Would you say that you and I are a "whosoever"? Of course we are; all of us are.
    </div>

    <div class="salvation_text">
        If you would like to receive the gift God has for you today, say this prayer with your heart and voice out loud.
    </div>

    <div class="salvation_text">
        Dear Lord Jesus, come into my heart, forgive me of my sin. Wash me and cleanse me. Set me Free. Jesus, I thank You that You died for me. I believe that You are the son of God, you died on the cross for my sins and that you rose from the dead to set me free. Fill me with the Holy Ghost. Give me a passion for the lost, a hunger for the things of God, and a holy boldness, to preach the gospel of Jesus Christ. In Jesus'name I pray, Amen.
    </div>

    <div class="salvation_text">
        Now you can say "I'm Saved: I'm born again, I'm forgiven, and I'm on my way to Heaven, because I have Jesus in my heart!"
    </div>

    <div class="salvation_text">
        As a minister of the gospel of Jesus Christ, I tell you today that all of your sins are forgiven. Always remember to run to God and not from Him because He loves you and has a great plan for your life.
    </div>

    <div class="salvation_text">
        Welcome to the family of God!
    </div>

    <div class="salvation_text">
        God has made it clear what constitutes salvation. Receiving salvation, entering into the kingdom of heaven, receiving Christ in your heart, and being born again are phrases that the Christian community uses to define joining the Family of God; they're synonymous. God's word is the measuring stick by which we will be judged on the Day of Judgment. So start reading the bible. I recommend starting in the New testament in the book of John then Matthew, Mark, Luke, and John. Read these four books several times before you move on.
    </div>

    <div class="salvation_text">
        Congratulations on your new walk of life with Jesus!
    </div>

    <div class="salvation_text">
        Let us celebrate with you by giving you a free book entitled "First Things First (What Every Christian Should Know)". To get your free book (a $9.99 value) just complete the form below.

    </div>

    <div class="salvation_form mt-5 mb-5">
        <form action="{{ route('salvation_store') }}" method="POST" class="">
            @csrf
            <div class="form_title text-center">
                Let us bless you: Enter your name and email to receive our gift to you. All fields are required.
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('First_Name') ? ' has-danger' : '' }}">
                        <label for="First_Name">First Name</label>
                        <input type="text" name="First_Name" id="First_Name" class="form-control {{ $errors->has('First_Name') ? ' is-invalid' : '' }}" value="{{ old('First_Name') }}">
                        @error('First_Name')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('Last_Name') ? ' has-danger' : '' }}">
                        <label for="Last_Name">Last Name</label>
                        <input type="text" name="Last_Name" id="Last_Name" class="form-control {{ $errors->has('Last_Name') ? ' is-invalid' : '' }} " value="{{ old('Last_Name') }}">
                        @error('Last_Name')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('email') ? ' has-danger' : '' }}">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}">
                        @error('email')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email-confirm">Confirm Email</label>
                        <input type="email" name="email_confirmation" id="email-confirm" class="form-control" value="{{ old('email_confirmation') }}">
                        @error('c_email')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-6 text-center">
                    <input type="reset" value="Clear Form" class="btn btn-reset">
                </div>
                <div class="col-sm-6 col-6 text-center">
                    <input type="submit" value="Submit" class="btn btn-submit">
                </div>
            </div>
           
        </form>
    </div>
    
</div>
@endsection
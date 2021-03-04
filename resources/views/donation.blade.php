@extends('layouts.app')

@section('content')
<div class="container salvation">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="text-center pt-3 pb-3" >
                <img src="{{asset('assets/img/Donations.png')}}" alt="">        
            </div>

            <div class="text-center donation_text1">
                We pray a hundred fold blessing on your gift.
            </div>

            <div class="text-center donation_text1">
                For Him Ministries is a non-profit, 501(c)3 organization.
            </div>

            <div class="text-center donation_text1">
                Select how you would like to donate by clicking on an icon below:
            </div>

            <div class="text-center donation_text2">
                PayPal:
            </div>

            <div class="text-center">                
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                    <div class="text-center">
                        <div>
                            <input type="hidden" name="cmd" value="_s-xclick" />
                            <input type="hidden" name="hosted_button_id" value="TMV9HXWMDLYDL" />
                        </div>
                        <div>
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                        </div>                        
                        <div>
                            <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="2" />
                        </div>
                    </div>
                </form>
            </div>

            <div class="text-center donation_text2">
                Givelify:
            </div>

            <div class="text-center">
                <span class="auto-style2" style="width: 300px; height: 100px; margin:auto">
                    <a target='_blank' href='https://www.givelify.com/givenow/1.0/?token=eyJvcmdfaWQiOiJOamN6TlRVfiIsImJhZGdlX2ltYWdlIjoiYjEucG5nIn0~' >
                        <img src='https://www.givelify.com/givenow/widget/badge/b1.png' alt='Givelify' style="width: 70px; height: 70px" />
                    </a>
                </span>
            </div>

            <div class="text-center donation_text2 pt-5">
                Cash App Tag: $ForHimMinistriesInc
            </div>

            <div class="text-center">
                <span class="auto-style11" style="width: 589px; height: 227px; margin:auto">
                    <a target="_blank" href="https://cash.app/account" >
                        <img src='https://cash.app/favicon.ico' alt='Cash App' style="width: 60px; height: 60px" />
                    </a>
                </span>
            </div>

            <div class="text-center donation_text2 pt-5">
                Or you can donate by Check or Money Order:
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="donation_text3">
                        <div class="pb-3">
                            Make payable to: For Him Ministries
                        </div>
        
                        <div class="pb-3">
                           <div>
                                For Him Ministries
                           </div>
                           <div>
                                1325 Commerce Dr. #728
                           </div>
                           <div>
                                Crestview, FL 32536
                           </div>                  
                        </div>
        
                        <div class="pb-3">
                            God Bless You!
                        </div>
        
                        <div class="pb-3">
                            In His Hands,
                        </div>
        
                        <div class="pb-3">
                            Pastor Steve
                        </div>
                       
                        
                    </div>
                </div>
                <div class="col-md-4"></div>

            </div>
            



        
         
        </div>
        <div class="col-sm-1"></div>
    </div>
  




    

</div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container home">
      
                <div id="first_carousel" class="carousel slide" data-ride="carousel"  data-interval="6000" data-pause="hover">
                    {{-- <ul class="carousel-indicators">
                        <li data-target="#first_carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#first_carousel" data-slide-to="1"></li>
                        <li data-target="#first_carousel" data-slide-to="2"></li>
                        <li data-target="#first_carousel" data-slide-to="3"></li>
                        <li data-target="#first_carousel" data-slide-to="4"></li>
                    </ul> --}}
                
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="https://www.amazon.com/kindle-dbs/entity/author/B01C65NKJO?_encoding=UTF8&amp;node=2656022011&amp;offset=0&amp;pageSize=12&amp;searchAlias=stripbooks&amp;sort=author-sidecar-rank&amp;page=1&amp;langFilter=default#formatSelectorHeader" >
                                <img src="{{asset('assets/img/galary/slide1.png')}}" alt="">
                            </a>
                            <div class="carousel-caption">
                                <span class="top"><strong>RELATIONSHIPS</strong><br>
                                    The WIVE'S SECRET WEAPON - gives wives the God given influence they were designed to have.<br>
                                    Ladies, you need to know your Secret Weapon!<br>
                                    
                                    THE HUSBAND'S TOOLBOX - provides men the tools needed to succseed at home. <br>
                                    These tools should be in every husband's toolbox!<br>
                                    
                                    Both books help each to meet core needs of the other while having fun. A must read for marriages.
                                </span>
                              </div>
                        </div>
        
                        <div class="carousel-item">
                            <a href="https://www.amazon.com/-/e/B01C65NKJO">
                                <img src="{{asset('assets/img/galary/slide2.png')}}" alt="Books Available">
                            </a>
                            <div class="carousel-caption">
                                <span class="top"><strong>BOOKS FOR YOU!</strong><br>
                                    FIRST THINGS FIRST addresses things that every Christian should know.<br>
                                    
                                    SECOND THINGS SECOND covers the Doctrine Of Christ mentioned in Hebrews 6:1-2.<br>
                                    
                                    GOD'S BLUEPRINT FOR SPIRITUAL GROWTH AND REWARD shows how Jesus Christ fulfilled the Mosaic Tabernacle while showing us a blueprint for growth and reward.
                                </span>
                            </div>
                        </div>
        
                        <div class="carousel-item">
                            <img src="{{asset('assets/img/galary/slide3.png')}}" alt="Erbil, Iraq">
                            <div class="carousel-caption">
                                <span class="top"><strong>Erbil, Iraq</strong><br>
                                    Erbil is the place of one of the oldest forts in the world.<br>

                                    Alexander the Great was said to stop here as he continued his quest. <br>
                                    The Curdish people are very strong and known for thier skills in battle.<br>
                                    Interestingly, the Christians and Muslims live in harmony side by side. <br>
                                    Yet Jesus is calling to their hearts and saving souls.
                                </span>
                            </div>
                        </div>               
                            
                        <div class="carousel-item">
                            <img src="{{asset('assets/img/galary/slide4.png')}}" alt="Entebbe, Uganda">
                            <div class="carousel-caption">
                                <span class="top"><strong>Entebbe, Uganda</strong><br>
                                    The people are very receptive to Jesus Christ.<br>
                                    Many are poor and need assistance. <br>
                                    
                                    I had the privilage of praying for a woman who had aids. <br>
                                    The power of God fell so that she fell to the ground under God's hand. <br>
                                    
                                    Pastor Mutebi, Miracle Center Catedral, is the hardest working Man of God I have met. <br>
                                    I met with him on several occasions and found him laying brick for the church.
                                </span>
                            </div>
                        </div>
        
                        <div class="carousel-item">
                            <img src="{{asset('assets/img/galary/slide5.png')}}" alt="Le Ceiba, Honduras">
                            <div class="carousel-caption">
                                <span class="top">
                                    <strong>Le Ceiba, Honduras</strong><br>
                                    The Lord led in such a unique way here on multiple occasions.<br>
                                    I was led to one of the case studies in my next book. <br>
                                    
                                    While visiting the local town, we ran across a witch that started laughing at us. <br>
                                    We began to speak Jesus' name and the witch stopped laughing and left the park very quickly.<br>
                                    
                                    To God be the Glory!
                                </span>
                            </div>
                        </div>
                        
                    </div>
                
                    <a class="carousel-control-prev" href="#first_carousel" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#first_carousel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>        
             </div>
          

        <div class="carousel_bottom">
            <h3>Above are some places this ministry has been able to reach!</h3>
        </div>
        <div class="row home_part">
            <div class="col-lg-8 home_left">
                <div class="home_main">
                    <h4>
                        Welcome to
                    </h4>
                    <div class="text-center">
                        <img src="{{asset('assets/img/FHM.png')}}" alt="">
                    </div>
                    <div class="text-center pt-3 pb-3">
                        We hope that you are blessed by what you receive here. We strive to ensure that we are doing all for Jesus. He has done so much for us and loved us regardless of our belief or non-belief of Him. This is why we minister for Him!
                    </div>
                    <div class="text-center pb-3">
                        Jesus loves you!
                    </div>
                    <div class="text-center pb-3">
                        And so do we.
                    </div>
                </div>
                <div class="home_main">
                    <div class="home_text pt-2 pb-3">
                        Pastor Steve has authored some very helpful books!
                    </div>
                    <div class="home_text pt-2 pb-3">
                        You can visit Pastor Steve's Author Page to see what books he has available by
                    </div>
                    <div>
                        <a href="https://www.amazon.com/kindle-dbs/entity/author/B01C65NKJO?_encoding=UTF8&node=2656022011&offset=0&pageSize=12&searchAlias=stripbooks&sort=author-sidecar-rank&page=1&langFilter=default#formatSelectorHeader" target="_blank">CLICKING HERE! Pastor Steve's Author Page</a>
                    </div>
                    <div class="home_links">
                        <div class="row">
                            <div class="col-sm-4 home_link">
                                <a href="{{asset('assets/img/lightbox/FTF.png')}}" data-lightbox="photos" title="For Beginners and those seeking to return to their first love.">
                                    <img src="{{asset('assets/img/lightbox/FTF.png')}}" alt="">
                                </a>
                                <a href="{{asset('assets/img/lightbox/FTB.png')}}"></a>
                            </div>
                            <div class="col-sm-4 home_link">
                                <a href="{{asset('assets/img/lightbox/STF.jpeg')}}" title="For intermediate study and those returning to their first love.">
                                    <img src="{{asset('assets/img/lightbox/STF.jpeg')}}" alt="">
                                </a>
                                <a href="{{asset('assets/img/lightbox/STB.png')}}"></a>
                            </div>
                            <div class="col-sm-4 home_link">
                                <a href="{{asset('assets/img/lightbox/TTF.jpeg')}}" title="Advanced Study on Jesus Christ and the Mosaic Tabernacle.">
                                    <img src="{{asset('assets/img/lightbox/TTF.jpeg')}}" alt="">
                                </a>
                                <a href="{{asset('assets/img/lightbox/TTB.jpeg')}}"></a>
                            </div>
                        </div>
                    </div>
                    <div class="home_flink">
                        <a href="{{asset('assets/img/GBB.jpg')}}" target="_blank">
                            <h3>If you would like to read the front and back cover of the books, just click on the book!</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 home_right">
                <a href="{{asset('assets/img/GBB.jpg')}}">                  
                    <div class="home_rTitle">
                        Lately:
                    </div>
                    <div class="home_rText">
                        We're on a mission to do things with a "For Him" motive. This is our mantra; It's All For Jesus. Pray for us as we endeavor to make this for Jesus Christ.
                    </div>
                    <div class="home_rTitle">
                        Special Thanks!
                    </div>
                    <div class="home_rText">
                        Bishop and Pastor McMillan from Pensacola Life Church, FL for their guidance and encouragement. We Love You!
                    </div>
                    <div class="home_rTitle">
                        Explore Our Site!
                    </div>
                    <div class="home_rText">
                        There are many relative pages waiting for you to discover. Our goal is to assist you in your personal relationship with Jesus Christ. We hope you find what you are looking for. If you don't, shoot us an email and we'll see if we can add it for you!
                    </div>
                    <div class="home_rTitle">
                        Here's some News!
                    </div>
                    <div class="home_rText">
                        For Him Ministries is now recognized by the IRS as a 501(c)3 non-profit corporation. This means that all your contributions are tax deductable.
                    </div>
                </a>
               
            </div>
        </div>
    </div>
@endsection

@section('after_script')
    <script type="text/javascript">      
        $(function() {
            $('.home_link a').lightBox();      

            $(".r_carousel > div:gt(0)").hide();
            
            setInterval(function() {
                $('.r_carousel > div:first')
                    .slideDown(500)
                    .slideUp(5500)        
                    .next()      

                    .end()
                    .appendTo('.r_carousel');
            }, 6000);
        });
    </script>
@endsection
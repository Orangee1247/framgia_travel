@extends('layouts.master')

@section('slide')
    @include('includes.slide')
@endsection

@section('header')
    @include('includes.header')
    @include('includes.searchBar')
@endsection

@section('content')
    <!-- about-section -->
    <div class="w3-agileits-about-section" id="w3-agile-about">
        <div class="container">
            <div class="w3agile-about-section-head text-center">
                <h3>About us</h3>
                <span></span>
            </div>
            <div class="about-section-grids">
                <div class="col-md-4 wthree-about-section-grid">
                    <img src="{{ asset('images/abt_pic.jpg') }}" alt=""/>
                </div>
                <div class="col-md-4 wthree-about-section-grid">
                    <h5>Why choose us</h5>
                    <p>Travel is the movement of people between relatively distant geographical locations, and can
                        involve travel by foot, bicycle, automobile, train, boat, airplane, or other means, with or
                        without luggage, and can be one way or round trip.</p>
                    <p><em>We can offer you an amazing trip of your life time</em>. Futhermore, after spending trip with
                        us, you can share your experience and memory to more users. You can select our guides to go
                        along with in the trip. We offer best staffs with enthusiasm and skills, moreover is morialty,
                        good characteristics. Enjoy your trip of the lifetime.</p>
                </div>
                <div class="col-md-4 wthree-about-section-grid">
                    <h5>Your benefits</h5>
                    <p>Contrary to our low cost demand, you will be offered with best quality of services. Your
                        relaxation is our happiness. <em>Here are some benefits you may take:</em></p>
                    <p>+ Fair price with discount<br>
                        + Nice and enthusiastic tour guide<br>
                        + Be offered trip plan<br>
                        + Be able to choose tour guide and place to hangout free will<br>
                        + Join our great community!!!</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //about-section -->

    <!-- specials -->
    <div class="agileits-w3layouts-specials" id="agileits-specials">
        <h3>OUR SPECIALS</h3>
        <span></span>
        <div class="special-grids">
            <div class="col-md-6 special-left l-grids">
                <figure class="effect-bubba">
                    <img src="{{ asset('images/4.jpg') }}" alt=""/>
                    <figcaption>
                        <h4>Tour</h4>
                        <p>She is free in her wildness, she is a wanderess, a drop of free water. She knows nothing of
                            borders and cares nothing for rules or customs. 'Time' for her isn’t something to fight
                            against. Her life flows clean, with passion, like fresh water.</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-6 special-right">
                <div class="sp-wid">
                    <h4>Books are the plane, and the train, and the road. They are the destination, and the Road trip.
                        They are home.</h4>
                    <p>Travel is fatal to prejudice, bigotry, and narrow-mindedness, and many of our people need it
                        sorely on these accounts. Broad, wholesome, charitable views of men and things cannot be
                        acquired by vegetating in one little corner of the earth all one's lifetime </p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="where-spl">
            <div class="col-md-6 special-right l-left">
                <div class="l-wid">
                    <h4>Wherever you go becomes a part of you somehow.</h4>
                    <p>What is that feeling when you're driving away from people and they recede on the plain till you
                        see their specks dispersing? - it's the too-huge world vaulting us, and it's good-bye. But we
                        lean forward to the next crazy venture beneath the skies.</p>
                </div>

            </div>
            <div class="col-md-6 special-left l-right l-grids">
                <figure class="effect-bubba">
                    <img src="{{ asset('images/1.jpg') }}" alt=""/>
                    <figcaption>
                        <h4>Tour</h4>
                        <p>In sit amet sapien eros quibusdam et aut officiis debitis aut rerum Integer in tincidunt
                            labore et dolore magna aliqua</p>
                    </figcaption>
                </figure>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="spl-bot">
            <div class="col-md-6 special-left spl-bot-right l-grids">
                <figure class="effect-bubba">
                    <img class="img-responsive" src="{{ asset('images/2.jpg') }}" alt=""/>
                    <figcaption>
                        <h4>Tour</h4>
                        <p>In sit amet sapien eros quibusdam labore et dolore magna aliqua</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-6 spl-bot-left">
                <h4>Travel brings power and love back into your life.</h4>
                <p>I am awfully greedy; I want everything from life. I want to be a woman and to be a man, to have many
                    friends and to have loneliness, to work much and write good books, to travel and enjoy myself, to be
                    selfish and to be unselfish… You see, it is difficult to get all which I want. And then when I do
                    not succeed I get mad with anger.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- specials -->
    <!-- news-section -->
    <div class="news-section" id="agileinfo-news">
        <div class="container">
            <div class="agileits-news-section-head text-center">
                <h3 class="agileits_head">Latest News</h3>
                <span class="w3-line"></span>
            </div>
            <div class="news-section-grids">
                <div class="col-md-4 w3ls-news-section-grid">
                    <img src="{{ asset('images/n1.jpg') }}" alt=""/>
                    <div class="info">
                        <h5>News post title1</h5>
                        <label>september 12</label>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</p>
                        <a class="more" href="#" data-toggle="modal" data-target="#myModal">Read more</a>
                        <!-- Modal-->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">
                                            News post title1</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. There are many variations of passages of Lorem
                                            Ipsum available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage of Lorem Ipsum, you need to be
                                            sure there isn't anything embarrassing hidden in the middle of text.Lorem
                                            ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque
                                            semper quam, quis dapibus mi sagittis nec. Donec eget dignissim orci, a
                                            scelerisque mauris. Fusce rutrum, enim a elementum condimentum, urna eros
                                            rutrum mauris, at ullamcorper odio sapien nec augue.</p>
                                    </div>
                                </div>
                                <!-- //Modal content-->
                            </div>
                        </div>
                        <!-- //Modal-->
                    </div>
                </div>
                <div class="col-md-4 w3ls-news-section-grid">
                    <img src="{{ asset('images/n2.jpg') }}" alt=""/>
                    <div class="info">
                        <h5>News post title2</h5>
                        <label>October 25</label>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</p>
                        <a class="more" href="#" data-toggle="modal" data-target="#myModal1">Read more</a>
                        <!-- Modal-->
                        <div class="modal fade" id="myModal1" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">
                                            News post title2</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. There are many variations of passages of Lorem
                                            Ipsum available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage of Lorem Ipsum, you need to be
                                            sure there isn't anything embarrassing hidden in the middle of text.Lorem
                                            ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque
                                            semper quam, quis dapibus mi sagittis nec. Donec eget dignissim orci, a
                                            scelerisque mauris. Fusce rutrum, enim a elementum condimentum, urna eros
                                            rutrum mauris, at ullamcorper odio sapien nec augue.</p>
                                    </div>
                                </div>
                                <!-- //Modal content-->
                            </div>
                        </div>
                        <!-- //Modal-->
                    </div>
                </div>
                <div class="col-md-4 w3ls-news-section-grid">
                    <img src="{{ asset('images/n3.jpg') }}" alt=""/>
                    <div class="info">
                        <h5>News post title3</h5>
                        <label>october 30</label>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</p>
                        <a class="more" href="#" data-toggle="modal" data-target="#myModal2">Read more</a>
                        <!-- Modal-->
                        <div class="modal fade" id="myModal2" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">
                                            News post title3</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. There are many variations of passages of Lorem
                                            Ipsum available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage of Lorem Ipsum, you need to be
                                            sure there isn't anything embarrassing hidden in the middle of text.Lorem
                                            ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque
                                            semper quam, quis dapibus mi sagittis nec. Donec eget dignissim orci, a
                                            scelerisque mauris. Fusce rutrum, enim a elementum condimentum, urna eros
                                            rutrum mauris, at ullamcorper odio sapien nec augue.</p>
                                    </div>
                                </div>
                                <!-- //Modal content-->
                            </div>
                        </div>
                        <!-- //Modal-->
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <a class="see-more" href="#">{{trans('label.seemore')}}</a>
    </div>
    </div>
    </div>
    <!-- //news-section -->
    <div class="gallery text-center" id="wthree-gallery">
        <div class="container">
            <h3 class="agileits_head">Gallery</h3>
            <span class="w3-line"></span>
            <div class="w3l_gallery_grids">
                <div class="bs-example bs-example-tabs wthree_example_tab" role="tabpanel"
                     data-example-id="togglable-tabs">
                    <div class="w3l_gallery_grids1">
                        <div class="col-md-4 w3l_gallery_grid">
                            <div class="agileinfo_gallery_grid">
                                <a class="group1" href="images/g1.jpg" title="Road trip">
                                    <div class="hovereffect">
                                        <img src="{{asset('images/g1.jpg')}}" alt=" " class="img-responsive"/>
                                        <div class="overlay">
                                            <p class="info">Road trip</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 w3l_gallery_grid">
                            <div class="agileinfo_gallery_grid">
                                <a class="group1" href="images/g2.jpg" title="Road trip">
                                    <div class="hovereffect">
                                        <img src="{{asset('images/g2.jpg')}}" alt=" " class="img-responsive"/>
                                        <div class="overlay">
                                            <p class="info">Road trip</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 w3l_gallery_grid">
                            <div class="agileinfo_gallery_grid">
                                <a class="group1" href="images/g3.jpg" title="Road trip">
                                    <div class="hovereffect">
                                        <img src="{{asset('images/g3.jpg')}}" alt=" " class="img-responsive"/>
                                        <div class="overlay">
                                            <p class="info">Road trip</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 w3l_gallery_grid">
                            <div class="agileinfo_gallery_grid">
                                <a class="group1" href="images/g4.jpg" title="Road trip">
                                    <div class="hovereffect">
                                        <img src="{{asset('images/g4.jpg')}}" alt=" " class="img-responsive"/>
                                        <div class="overlay">
                                            <p class="info">Road trip</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 w3l_gallery_grid">
                            <div class="agileinfo_gallery_grid">
                                <a class="group1" href="images/g5.jpg" title="Road trip">
                                    <div class="hovereffect">
                                        <img src="{{asset('images/g5.jpg')}}" alt=" " class="img-responsive"/>
                                        <div class="overlay">
                                            <p class="info">Road trip</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 w3l_gallery_grid">
                            <div class="agileinfo_gallery_grid">
                                <a class="group1" href="images/g6.jpg" title="Road trip">
                                    <div class="hovereffect">
                                        <img src="{{asset('images/g6.jpg')}}" alt=" " class="img-responsive"/>
                                        <div class="overlay">
                                            <p class="info">Road trip</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 w3l_gallery_grid">
                            <div class="agileinfo_gallery_grid">
                                <a class="group1" href="images/g7.jpg" title="Road trip">
                                    <div class="hovereffect">
                                        <img src="{{asset('images/g7.jpg')}}" alt=" " class="img-responsive"/>
                                        <div class="overlay">
                                            <p class="info">Road trip</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 w3l_gallery_grid">
                            <div class="agileinfo_gallery_grid">
                                <a class="group1" href="images/g8.jpg" title="Road trip">
                                    <div class="hovereffect">
                                        <img src="{{asset('images/g8.jpg')}}" alt=" " class="img-responsive"/>
                                        <div class="overlay">
                                            <p class="info">Road trip</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 w3l_gallery_grid">
                            <div class="agileinfo_gallery_grid">
                                <a class="group1" href="images/g9.jpg" title="Road trip">
                                    <div class="hovereffect">
                                        <img src="{{asset('images/g9.jpg')}}" alt=" " class="img-responsive"/>
                                        <div class="overlay">
                                            <p class="info">Road trip</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <a class="see-more-1" href="#">{{trans('label.seemore')}}</a>
    </div>
    <!-- //gallery -->

    <!-- team -->
    <div class="team" id="w3layouts-team">
        <div class="container">
            <div class="title">
                <h3>Our Team</h3>
                <span class="w3-line"></span>
            </div>
            <div class="team-w3ls-row">
                <div class="col-md-3 team-grids"></div>
                <div class="col-md-3 team-grids">
                    <img src="{{ asset('images/t1.jpg') }}" alt=""/>
                    <div class="img-caption">
                        <div class="img-text">
                            <h4>Dat Pho Duc</h4>
                            <p>HEDSPI K59<br>
                                Web Interface</p>
                            <div class="agile-icons">
                                <ul>
                                    <li><a href="https://www.facebook.com/phoducdat" target="_blank"><i
                                                    class="fa fa-facebook fb"></i> </a></li>
                                    <li><a href="https://twitter.com/PhoDucDat" target="_blank"><i
                                                    class="fa fa-twitter tw"></i> </a></li>
                                    <li><a href="https://plus.google.com/+DucDatPho" target="_blank"><i
                                                    class="fa fa-google-plus gp"></i> </a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 team-grids">
                    <img src="{{asset('images/t2.jpg')}}" alt=""/>
                    <div class="img-caption">
                        <div class="img-text">
                            <h4>Duong Lai Quang</h4>
                            <p>HEDSPI K59<br>
                                Database Maker</p>
                            <div class="agile-icons">
                                <ul>
                                    <li><a href="https://www.facebook.com/duong.laiquang?fref=ts" target="_blank"><i
                                                    class="fa fa-facebook fb"></i> </a></li>
                                    <li><a href="https://www.facebook.com/duong.laiquang?fref=ts" target="_blank"><i
                                                    class="fa fa-twitter tw"></i> </a></li>
                                    <li><a href="https://www.facebook.com/duong.laiquang?fref=ts" target="_blank"><i
                                                    class="fa fa-google-plus gp"></i> </a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 team-grids"></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //team -->

    <div class="contact-section" id="w3-contact">
        <div class="container">
            <div class="contact-section-head text-center">
                <h3>Contact us</h3>
                <span></span>
            </div>
            <div class="agileits-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.578273385689!2d105.8529758150317!3d21.009535686008824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abf506b45557%3A0xee62cf30cf1d94de!2sFramgia+labrary!5e0!3m2!1svi!2s!4v1500005661282"
                        width="700" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="w3l-contact-form-bottom">
                <div class="col-md-4 w3ls-address">
                    <address>
                        <strong>Address :</strong>
                        <p>Framgia Trip Company</p>
                        <p>436 Tran Khat Chan, Pho Hue</p>
                        <p class="bottom">Hai Ba Trung, Ha Noi, Viet Nam</p>
                        <strong><abbr title="phone">Phone :</abbr></strong>
                        <p>+8424 3795 5417</p>
                    </address>
                </div>
                <form action="#" method="get">
                    <div class="col-md-4 w3l-contact-form">
                        <div class="w3l-contact-form-row">
                            <div>
                                <span>Name</span>
                                <input type="text" class="text" placeholder="" required="required"/>
                            </div>
                            <div>
                                <span>Email</span>
                                <input type="email" class="text" placeholder="" required="required"/>
                            </div>
                            <div>
                                <span>phone</span>
                                <input type="text" class="text" placeholder="" required="required"/>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-4 w3l-contact-form-row comments">
                        <div>
                            <span>Comments</span>
                            <textarea onfocus="this.value = '';"
                                      onblur="if (this.value == '') {this.value = '';}"></textarea>
                        </div>
                        <input type="submit" value="Submit"/>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
    <!-- //contact-section -->

@endsection
<!-- //js required for banner slider -->

@section('script')
    {{ HTML::script('bower_components/jquery-colorbox/jquery.colorbox.js') }}
    {{ HTML::script('js/move-top.js', ['type' => 'text/javascript']) }}
    {{ HTML::script('js/easing.js', ['type' => 'text/javascript']) }}
    {{ HTML::script('js/home.js', ['type' => 'text/javascript']) }}
@endsection


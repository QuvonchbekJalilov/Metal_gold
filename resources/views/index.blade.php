<?php
$lang = \Illuminate\Support\Facades\App::getLocale()
?>

<x-layouts.main>
    <!-- mobile menu -->
    <div class="activemobile">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-2">
                    <div class="mobile-logo">
                        <a href="/"><img src="./assets/img/logo/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-8 text-end">
                    <div class="icon">
                        <a href="#" class="open-mobile-menu"><i class="far fa-bars"></i></a>
                        <!-- <div class="mobile-menu">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fix">
        <div class="side-info">
            <button class="side-info-close"><i class="fal fa-times"></i></button>
            <div class="side__logo mb-25">
                <a href="/">
                    <img src="assets/img/logo/log.png" alt="logo" />
                </a>
            </div>
            <div class="mobile-menu"></div>
            <div class="contact-infos mt-30 mb-30">
                <div class="contact-list mb-30">
                    <h4>
                        Contact Info
                    </h4>
                    <ul>
                        <li><i class="fal fa-map"></i>
                            <a href="#">12/A, Mirnada City Tower, NYC</a>
                        </li>

                        <li><i class="fal fa-clock"></i>
                            <a href="#">Mon - Fri: 9.00am - 11.00pm</a>
                        </li>

                        <li><i class="fal fa-phone"></i><a href="tell:+876864764764">
                                +876 864 764 764
                            </a>
                        </li>

                        <li><i class="far fa-envelope"></i><a href="mailto:info@webmail.com">
                                info@webmail.com
                            </a>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </div>
    <div class="offcanvas-overlay"></div>

    <!-- slide area start  -->
    <div class="slide_area">
        <div class="slide_shape">
            <img class="shape_01 position-absolute" src="./assets/img/slide/sl-1.png" alt="shape_01">
            <img class="shape_02 position-absolute" src="./assets/img/slide/sl-2.png" alt="shape_02">
            <img class="shape_03 position-absolute" src="./assets/img/slide/sl-3.png" alt="shape_03">
            <img class="shape_04 position-absolute" src="./assets/img/slide/sl-4.png" alt="shape_04">
            <img class="shape_05 position-absolute" src="./assets/img/slide/sl-5.png" alt="shape_05">
            <img class="shape_06 position-absolute" src="./assets/img/slide/sl-6.png" alt="shape_06">
            <img class="shape_07 position-absolute" src="./assets/img/slide/sl-7.png" alt="shape_07">
            <img class="shape_09 position-absolute" src="./assets/img/slide/face.png" alt="shape_07">
            <img class="shape_10 position-absolute" src="./assets/img/shapes/header_left.png" alt="shape_10">
            <img class="shape_11 position-absolute" src="./assets/img/shapes/header_middle.png" alt="shape_11">
            <img class="shape_12 position-absolute" src="./assets/img/shapes/slider_under.png" alt="shape_11">
            <img class="shape_13 position-absolute" src="./assets/img/shapes/slider_right.png" alt="shape_11">
        </div>
        <div class="custom-width">
            <div class="row">
                <div class="col-sm-12">
                    <div class="slide_img beforelsiee xlnone d-xl-none">
                        @foreach($homes as $home)
                            <img src="{{ asset('storage/' . $home->first_photo) }}" class="img-1" alt="slide_shape_01">
                            <img src="{{ asset('storage/' . $home->second_photo) }}" class="img-2 position-absolute" alt="slide_shape_02">
                            <img src="{{ asset('storage/' . $home->third_photo) }}" class="img-3 position-absolute" alt="slide_shape_03">
                            <img src="{{ asset('storage/' . $home->fourth_photo) }}" class="img-4 position-absolute" alt="slide_shape_04">
                            <img src="{{ asset('storage/' . $home->fifth_photo) }}" class="img-5 position-absolute" alt="slide_image">
                        @endforeach
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-6">
                    <div class="slide_content">
                        <h4 class="animated wow animate__fadeIn" data-animation="fadeInUp" data-delay="2s" data-wow-duration="2s">{{__('words.metal')}}
                            <span>{{__('words.company')}}</span>
                        </h4>
                        @foreach($homes as $home)
                            <h2 class="wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="2.5s">{{ $home['title_' . $lang] }}</h2>
                            <p class="wow animate__fadeIn" data-animation="fadeInUp" data-delay="3s" data-wow-duration="3s">
                                {{ $home['short_content_' . $lang] }}
                            </p>
                        @endforeach
                        <div class="site_button site_button-two">
                            <a class="cmn_btn slide_btn slide_btn_01 " href="{{ route('product')}}">{{__('words.product')}}<i class="fas fa-chevron-right"></i></a>
                            <a class="cmn_btn cmn_outline " href="{{ route('category')}}"><span>{{__('words.category')}}</span><i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-4 col-xl-5 offset-xl-1 text-end">
                    <div class="slide_img beforelsiee DisplayNone">
                        <span class="circle-shape-design"></span>
                        @foreach($homes as $home)
                            <img src="{{ asset('storage/' . $home->first_photo) }}" class="img-1" alt="slide_shape_01">
                            <img src="{{ asset('storage/' . $home->second_photo) }}" class="img-2 position-absolute" alt="slide_shape_02">
                            <img src="{{ asset('storage/' . $home->third_photo) }}" class="img-3 position-absolute" alt="slide_shape_03">
                            <img src="{{ asset('storage/' . $home->fourth_photo) }}" class="img-4 position-absolute" alt="slide_shape_04">
                            <img src="{{ asset('storage/' . $home->fifth_photo) }}" class="img-5 position-absolute" alt="slide_image">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slide area end  -->

    <!-- about us area start  -->
    <div class="about_area custom_animation mb-0">
        <div class="about_shapes">
            <img src="/assets/img/shapes/about.png" class="position-absolute about_o1" alt="aboutShapes">
            <img src="/assets/img/shapes/about2image.png" class="position-absolute about_o2" alt="aboutShapes">
            <img src="/assets/img/shapes/aboutoneimage.png" class="position-absolute about_o3" alt="aboutShapes">
            <img src="/assets/img/about/ss.png" class="position-absolute about_4" alt="aboutShapes">
        </div>
        <div class="custom-width">
            @foreach($abouts as $about)
            <div class="row">
                <div class="col-md-12 col-lg-7">
                    <div class="about_images scroll_01">
                        <div class="about_image_1">
                            <img class="about_shape_one" src="/assets/img/about/about_since.png" alt="about_shape_01">
                            <img class="about_shape_two" src="/assets/img/about/about_shape1.png" alt="about_image_01">
                            <img class="about_shape_three" src="/assets/img/about/about_shape_2.png" alt="about_image_01">
                        </div>
                        <div class="about_img_2">
                            <img class="about_img_one" src="/assets/img/about/show_sh.png" alt="about_shape_02">
                            <img class="about_img_two" src="{{ asset( 'storage/' . $about->photo ) }}" alt="about_image_02">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="wrap_about">
                        <div class="section_wrapper aboutwraper">
                            <h4 class="sub_title wow animate__flipInX" data-animation="fadeInUp" data-delay="1s">
                                {{__('words.about')}}
                            </h4>
                            <h2 class="title wow animate__bounceIn" data-animation="fadeInUp" data-delay="1.5s">
                                {{ $about['title_' . $lang] }}
                            </h2>
                        </div>
                        <div class="about_content">
                            <h3>{{ $about['short_content_' . $lang] }}</h3>
                            <p> {{ $about['content_' . $lang] }}
                            </p>
                            <div class="site_button">
                                <a class="cmn_btn cmn_outline " href="{{ route('about')}}"><span>{{__('words.read')}}</span> <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- about us area end  -->

    <!-- .services area start  -->
    <div class="service_area custom_animation mb-120 mobile-res-mb">
        <div class="service_shapes">
            <img src="./assets/img/shapes/service_right.png" class="position-absolute service_01" alt="service_shapes">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_wrapper service_wraper mb-40">
                        <h4 class="sub_title wow animate__flipInXx" data-animation="fadeInUp" data-delay="1s">{{ __('words.our')}}
                            {{__('words.product')}}</h4>
                        <h2 class="title wow animate__bounceInn" data-animation="fadeInUp" data-delay="1.5s">{{__('words.product')}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="service_activition">
                        @foreach ($photos as $product)
                        <div class="service_card">
                            <div class="service_img text-center">
                                <img src="{{ asset('storage/' . $product->photo) }}" alt="service_img">
                            </div>
                            <div class="service_content text-center">
                                <h3 class="service_title">{{ $product['name_'.$lang]}}</h3>
                                <p class="light_color">{{ $product['title_uz'.$lang]}}</p>
                            </div>
                            <a class="radius_btn effectPlus" href="{{ route('products', ['product'=> $product->id]) }}">
                                <i class="icon-serviceicon"></i>
                            </a>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- .services area end  -->

    <!-- process area start  -->
    <div class="process_area mb-120 mobile-res-mb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_wrapper mb-80 text-center">
                        <h4 class="sub_title wow animate__flipInXx" data-animation="fadeInUp" data-delay="1s">How it
                            works</h4>
                        <h2 class="title wow animate__bounceInn" data-animation="fadeInUp" data-delay="1.5s">How
                            Cliper
                            works</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12 col-xl-8 text-center">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="process_card wow animate__fadeIn" data-animation="fadeInUp" data-delay="1s" data-wow-duration="1s">
                                <div class="process_icon">
                                    <img class="process_one" src="./assets/img/services/ss_one.png" alt="process_icon">

                                </div>
                                <div class="process_content">
                                    <h4>01.PLACE WORK ORDER</h4>
                                    <p>There are many variation and of passages</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="process_card wow animate__fadeIn" data-animation="fadeInUp" data-delay="1.5s" data-wow-duration="1.2s">
                                <div class="process_icon process_icon_2">
                                    <img class="process_two" src="/assets/img/services/ss_two.png" alt="process_icon">
                                </div>
                                <div class="process_content">
                                    <h4>02.quick response</h4>
                                    <p>There are many variation and of passages</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="process_card wow animate__fadeIn" data-animation="fadeInUp" data-delay="2s" data-wow-duration="1.5s">
                                <div class="process_icon process_icon_3">
                                    <img class="process_three" src="/assets/img/services/ss_three.png" alt="process_icon">
                                </div>
                                <div class="process_content">
                                    <h4>03.image files</h4>
                                    <p>There are many variation and of passages</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="process_card wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="1.8s">
                                <div class="process_icon process_icon_4">
                                    <img class="process_four" src="/assets/img/services/ss_four.png" alt="process_icon">
                                </div>
                                <div class="process_content">
                                    <h4>04.download image</h4>
                                    <p>There are many variation and of passages</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="process_card wow animate__fadeIn" data-animation="fadeInUp" data-delay="3s" data-wow-duration="2s">
                                <div class="process_icon process_icon_5">
                                    <img class="process_five" src="/assets/img/services/ss_five.png" alt="process_icon">
                                </div>
                                <div class="process_content">
                                    <h4>05.made payment</h4>
                                    <p>There are many variation and of passages</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="process_card mb-0 wow animate__fadeIn" data-animation="fadeInUp" data-delay="3.5s">
                                <div class="process_icon process_icon_6">
                                    <img class="process_six" src="/assets/img/services/ss_six.png" alt="process_icon">
                                </div>
                                <div class="process_content">
                                    <h4>06.give us review</h4>
                                    <p class="mb-0">There are many variation and of passages</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-none d-xl-block">
                    <div class="process_image">
                        <div class="process_shape">
                            <img class="process_shape_02" src="./assets/img/services/shape_ss_02.png" alt="process_shape_02">
                            <img class="process_shape_04" src="./assets/img/services/shape_ss_04.png" alt="process_shape_04">
                            <img class="process_shape_05" src="./assets/img/services/shape_ss_05.png" alt="process_shape_05">
                            <img class="process_shape_06" src="./assets/img/services/shape_ss_06.png" alt="process_shape_06">
                            <img class="process_shape_07" src="./assets/img/services/shape_ss_07.png" alt="process_shape_08">
                            <!-- <img class="process_shape_09" src="./assets/img/services/rocket.png" alt="process_shape_06"> -->
                            <img class="process_shape_10" src="./assets/img/services/rocketwithpeople.png" alt="process_shape_06">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- process area end  -->

    <!-- idea area start  -->
    <div class="idea_area mb-120 mobile-res-mb">
        <div class="container">
            <div class="bg_idea">
                <img class="idea_area_01" src="./assets/img/preview/idea2.png" alt="">
                <img class="idea_area_02" src="./assets/img/preview/idea3.png" alt="">
                <img class="idea_area_03" src="./assets/img/preview/idea4.png" alt="">
                <img class="idea_area_04" src="./assets/img/preview/idea5.png" alt="">
                <img class="idea_area_05" src="./assets/img/preview/idea_1.png" alt="">
                <img class="position-absolute idea_area_06" src="./assets/img/shapes/calltoAction.png" alt="">
                @foreach($contacts as $contact)
                <div class="row">
                    <div class="d-none d-lg-block col-lg-6">
                        <div class="idea_title">
                            <h2 class="idea_heading">{{ $contact['title_' . $lang] }}</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="dial d-flex">
                            <a href="tel:+88888" class="dial_call">
                                <h2 class="text-white bold"> <span class="bgwhite">
                                        <i class="fal fa-phone"></i>
                                    </span>{{ $contact->phone_number }}
                                </h2>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- idea area end  -->

    <!-- shoot area start  -->
    <div class="shoot_area mb-120 mobile-res-mb">
        <div class="shoot_shapes">
            <img class="shoot_shapes_04" src="./assets/img/video/vd1.png" alt="">
            <img class="shoot_shapes_05" src="./assets/img/video/vd2.png" alt="">
            <img class="shoot_shapes_06" src="./assets/img/video/largpoly.png" alt="">
            <img class="shoot_shapes_07" src="./assets/img/video/vdshape.png" alt="">
        </div>
        <div class="container">
            <div class="row custom-center">
                <div class="col-xl-8">
                    <div class="shoot_box">
                        
                        <div class="vd-grid">
                            <iframe width="695" height="391" src="https://www.youtube.com/embed/Yrokj0SqRJA" title="Какой Метал Самый Дорогой? Платина Золото Серебро Медь" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    @foreach($actives as $active)
                    <div class="shoot_card before_shoot_01 wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="1s">
                        <div class="shoot_icon">
                            <img src="./assets/img/video/vd-or-2.png" alt="">
                            <h5>OUR TRUSTED <br> ACTIVE CLIENTS</h5>
                        </div>
                        <div class="shoot_count_1">
                            <h2>{{ $active->active_client }}+</h2>
                        </div>
                    </div>
                    <div class="shoot_card before_shoot_02 wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="2s">
                        <div class="shoot_icon">
                            <img src="./assets/img/video/ach-icon2.png" alt="">
                            <h5>our Experienced <br>
                                Members</h5>
                        </div>
                        <div class="shoot_count_2">
                            <h2>{{ $active->experienced }}+</h2>
                        </div>
                    </div>
                    <div class="shoot_card before_shoot_03 wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="3s">
                        <div class="shoot_icon">
                            <img src="./assets/img/video/vd-or-1.png" alt="">
                            <h5>Years Providing <br>
                                Services</h5>
                        </div>
                        <div class="shoot_count_3">
                            <h2>{{ $active->years_services }}+</h2>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- shoot area end  -->

    <!-- clients area start  -->
    <div class="clients_area mb-120 mobile-res-mb">
        <div class="clients_shapes">
            <img src="/assets/img/testimonial/test_01.png" class="clients_01 position-absolute" alt="">
            <img src="/assets/img/testimonial/test_02.png" class="clients_02 position-absolute" alt="">
            <img src="/assets/img/testimonial/test_03.png" class="clients_03 position-absolute" alt="">
            <img src="/assets/img/testimonial/test_04.png" class="clients_04 position-absolute" alt="">
            <img src="/assets/img/testimonial/test_05.png" class="clients_05 position-absolute" alt="">
            <img src="/assets/img/testimonial/test_06.png" class="clients_06 position-absolute" alt="">
            <img src="/assets/img/testimonial/test_07.png" class="clients_07 position-absolute" alt="">
            <img src="/assets/img/testimonial/test_08.png" class="clients_08 position-absolute" alt="">
            <img src="/assets/img/testimonial/test-bottom-right.png" class="clients_09 position-absolute" alt="">
            <img src="/assets/img/testimonial/bottom-left-one.png" class="clients_10 position-absolute" alt="">
            <img src="/assets/img/testimonial/bottom-right-one.png" class="clients_11 position-absolute" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_wrapper text-center mb-10">
                        <h4 class="sub_title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2s" data-wow-duration="3s">Clients Feedback</h4>
                        <h2 class="title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2s" data-wow-duration="2.5s">explore clients review</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial-active dot-style">
                    @foreach($commits as $commit)
                    <div class="col-md-4">
                        <div class="testimonial_wrapper test_two">
                            <div class="test_two_image">
                                <img src="/assets/img/first_photo_two_ass/projects/quote.png" class="position-absolute quote" alt="">
                                <img src="{{ asset('storage/' . $commit->photo) }}" class="test_image_two" alt="author_info">
                            </div>
                            <div class="rows">
                                <div class="client_info d-flex align-items-center">
                                    <div class="clientinfo">
                                        <h4>{{ $commit->name }}</h4>
                                        <p>{{ $commit['title_' . $lang] }}</p>
                                    </div>
                                    <div class="client_meta client_star">
                                        <div class="testimonial_star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- clients area end  -->

    <!-- pricing area start  -->
    <div class="pricing_area mb-120 mobile-res-mb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_wrapper section_wrapper_mobile text-center mb-60">
                        <h4 class="sub_title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2s" data-wow-duration="3s">Our products</h4>
                        <h2 class="title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="3s">Popular products</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                @foreach($popular_products as $popular)
                <div class="col-md-12">
                    <div class="single_price d-flex wow animate__fadeIn" data-animation="fadeInUp" data-delay="3s" data-wow-duration="3s">
                        <div class="price_img">
                            <img src="{{ asset('storage/' . $popular->photo) }}" alt="">

                        </div>
                        <div class="price_content">
                            <h4>{{ $popular['title_' . $lang] }}</h4>
                            <p>{{ $popular['short_content_' . $lang] }}</p>
                        </div>
                        <div class="choose_plan">
                            <a class="cmn_btn  increase_width   cmn_outline  effect" href="{{route('product')}}"><span>choose plan</span><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- pricing area end  -->

    <!-- brand partner area start  -->
    <div class="brand_area mb-110 mobile-res-mb">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_wrapper text-center mb-40">
                        <h4 class="sub_title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2s" data-wow-duration="3s">clients</h4>
                        <h2 class="title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="3s">some of our clients</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="brand_img d-flex">
                        @foreach($clients as $client)
                        <div class="brand_items">
                            <img src="/storage/{{$client->photo}}" alt="brand_image">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand partner area end  -->

    <!-- news area start  -->
    <div class="news_area mobile-res-mb">
        <div class="blog_shape">
            <img src="/assets/img/blog/patternblog.png" class="blog_pattern" alt="">
            <img src="/assets/img/blog/blog-shape.png" class="blog_circle_shpae position-absolute" alt="">
        </div>
        <div class="container">
            <div class="row">
                @foreach($blog_text as $text)
                <div class="col-md-12 col-lg-5">
                    <div class="section_wrapper news-wrapper">
                        <h4 class="sub_title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2s" data-wow-duration="2s">{{ $text['title_' . $lang] }}</h4>
                        <h2 class="title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="2s">{{ $text['short_content_' . $lang] }}</h2>
                        <p>{{ $text['content_' . $lang] }}</p>
                        <div class="blog-buttons">
                            <span class="prev b-arrow-01"></span>
                            <span class="next b-arrow-02"></span>
                        </div>

                    </div>
                </div>
                @endforeach
                <div class="col-md-12 col-lg-7">
                    <div class="row blog_activition_first_photo_one">
                        @foreach($blogs as $blog)
                        <div class="col-md-6">
                            <div class="blog_activition">
                                <div class="blog">
                                    <div class="blog_image">
                                        <img src="{{ asset('storage/' . $blog->photo) }}" alt="blog_image">
                                        <div class="blog_content">
                                            <div class="meta_content d-flex">
                                                <span>By : Admin</span>
                                                @if ($blog->created_at)
                                                <span>{{ $blog->created_at->format('F j Y') }}</span>
                                                @else
                                                <span>{{ __('No date available') }}</span>
                                                @endif
                                            </div>
                                            <h4><a href="/blog">{{ $blog['description_' . $lang] }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- news area end  -->

    <!-- subscribe area start  -->
    <div class="subscribe_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="subscribe_card">
                        <form action="#" method="post">
                            <input type="text" class="form-control" placeholder="enter your phone">
                            <button type="submit" class="subcribe_btn">yuborish<i class="icon-serviceicon"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe area end  -->

    <!-- footer area start  -->
    <div class="footer_area pt-120 pb-50">
        <div class="footer_shape">
            <img src="./assets/img/footer/footerPattern.png" class="f-shape_one" alt="">
            <img src="./assets/img/footer/polygonFooter.png" class="f-shape_two" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 col-xl-5 col-sm-7 ">
                    <div class="footer_widget">
                        <h4>{{ __('about')}}</h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem <br> Sed ut perspiciatis
                            unde
                            omnis
                            iste natus error <br> voluptatem. Sed ut perspiciatis</p>
                        <div class="social_contact">
                            <a href="mailto:name@email.com"><svg width="20.87" height="15">
                                    <g id="Mail_2" data-name="Mail 2" transform="translate(-163.667 -153.91)">
                                        <path id="dfdf" data-name="Path 22" d="M181.928,153.91H166.276a2.611,2.611,0,0,0-2.609,2.609V166.3a2.611,2.611,0,0,0,2.609,2.609h15.652a2.612,2.612,0,0,0,2.609-2.609v-9.783A2.612,2.612,0,0,0,181.928,153.91Zm1.3,12.391a1.306,1.306,0,0,1-1.3,1.3H166.276a1.306,1.306,0,0,1-1.3-1.3v-9.783a1.306,1.306,0,0,1,1.3-1.3h15.652a1.306,1.306,0,0,1,1.3,1.3Z" fill="#438ff9" />
                                        <path id="dfdeyyf" data-name="Path 23" d="M183.172,159.149a.653.653,0,0,0-.918-.092l-6.76,5.532-6.761-5.532a.652.652,0,0,0-.826,1.01l7.174,5.87a.653.653,0,0,0,.826,0l7.174-5.87A.653.653,0,0,0,183.172,159.149Z" transform="translate(-1.391 -1.739)" fill="#438ff9" />
                                        <path id="sdfs" data-name="Path 24" d="M186.78,167.1a.652.652,0,1,0-.922.922l2.609,2.609a.652.652,0,0,0,.922-.922Z" transform="translate(-7.652 -4.522)" fill="#438ff9" />
                                        <path id="Path_25" data-name="Path 25" d="M170.467,167.1l-2.609,2.609a.652.652,0,1,0,.922.922l2.609-2.609a.652.652,0,1,0-.922-.922Z" transform="translate(-1.391 -4.522)" fill="#438ff9" />
                                    </g>
                                </svg>
                                info.cliper@email.com</a>
                            <a href="tel:+4733378901"><svg width="17.224" height="17.224" viewBox="0 0 17.224 17.224">
                                    <g id="dfde" transform="translate(-255.083 -150.41)">
                                        <path id="dfd" data-name="Path 26" d="M279.005,158.071a14.427,14.427,0,0,0-7.655-7.618.551.551,0,0,0-.726.316.581.581,0,0,0,.307.749,13.3,13.3,0,0,1,7.058,7.024.557.557,0,0,0,.508.339.537.537,0,0,0,.228-.051A.582.582,0,0,0,279.005,158.071Z" transform="translate(-6.747 0)" fill="#438ff9" />
                                        <path id="dfdplgw" data-name="Path 27" d="M270.42,156.979a8.059,8.059,0,0,1,4.281,4.251.538.538,0,0,0,.492.328.52.52,0,0,0,.22-.049.561.561,0,0,0,.271-.733,9.149,9.149,0,0,0-4.858-4.825.534.534,0,0,0-.7.306A.561.561,0,0,0,270.42,156.979Z" transform="translate(-6.529 -2.394)" fill="#438ff9" />
                                        <path id="fpokmd" data-name="Path 28" d="M269.332,161.508a1.314,1.314,0,0,0-1.985,0c-.464.46-.928.921-1.385,1.389a.315.315,0,0,1-.222.119.324.324,0,0,1-.159-.049c-.3-.164-.621-.3-.909-.476a14.4,14.4,0,0,1-3.471-3.159,8.242,8.242,0,0,1-1.244-1.993.286.286,0,0,1,.07-.367c.464-.448.917-.909,1.373-1.369a1.318,1.318,0,0,0,0-2.032c-.363-.367-.726-.725-1.088-1.092s-.745-.753-1.123-1.124a1.322,1.322,0,0,0-1.985,0c-.468.46-.917.932-1.393,1.384a2.262,2.262,0,0,0-.71,1.525,6.455,6.455,0,0,0,.5,2.781,16.893,16.893,0,0,0,3,5,18.558,18.558,0,0,0,6.147,4.809,8.889,8.889,0,0,0,3.4.991c.074,0,.147.006.219.006a2.433,2.433,0,0,0,1.923-.821c.4-.445.846-.85,1.267-1.275a1.327,1.327,0,0,0,.008-2.021Q270.451,162.618,269.332,161.508Zm1.421,3.452c-.139.14-.281.278-.424.416-.293.285-.6.579-.884.9a1.314,1.314,0,0,1-1.08.444c-.051,0-.1,0-.157,0a7.671,7.671,0,0,1-2.972-.879,17.514,17.514,0,0,1-5.776-4.52,15.7,15.7,0,0,1-2.806-4.666,5.308,5.308,0,0,1-.431-2.295,1.141,1.141,0,0,1,.362-.8c.294-.279.578-.565.862-.852.18-.182.361-.365.546-.547a.223.223,0,0,1,.4,0c.249.244.494.491.739.738l.372.373c.185.187.369.372.554.556s.356.356.536.538c.208.209.2.246,0,.44l-.19.192c-.387.39-.771.779-1.179,1.174a1.407,1.407,0,0,0-.313,1.6,9.214,9.214,0,0,0,1.41,2.269,15.454,15.454,0,0,0,3.75,3.4c.222.138.447.248.644.346.108.053.215.105.3.154a1.442,1.442,0,0,0,.716.2,1.414,1.414,0,0,0,1.031-.46c.446-.457.9-.908,1.372-1.376a.217.217,0,0,1,.392,0q1.116,1.11,2.226,2.222C270.933,164.7,270.951,164.76,270.753,164.961Z" transform="translate(0 -0.218)" fill="#438ff9" />
                                    </g>
                                </svg>
                                +998 (93) 512 5324</a>
                        </div>
                        @foreach($links as $link)
                        <div class="social_link pt-25">
                            <ul>
                                <li><a href="{{ $link->telegram }}"><i class="fab fa-telegram icon"></i></a></li>
                                <li><a href="{{ $link->facebook }}"><i class="fab fa-facebook-f icon"></i></a></li>
                                <li><a href="{{ $link->twitter }}"><i class="fab fa-twitter icon"></i></a></li>
                                <li><a href="{{ $link->instagram }}"><i class="fab fa-instagram icon"></i></a></li>
                                <li><a href="{{ $link->youtube }}"><i class="fab fa-youtube icon"></i></a></li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-2 col-sm-5  fixed_width">
                    <div class="widget_two">
                        <h4>usefull links</h4>
                        <ul>
                            <li><a href="/"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                        <path id="dfdfd" data-name="dfdfd" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                    </svg>
                                    {{__('words.home')}}</a></li>
                            <li><a href="/about"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                        <path id="dfdfa" data-name="ojkj" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                    </svg>
                                    {{__('words.service')}}</a></li>
                            <li><a href="{{ route('category')}}"><svg width="7.514" height="11.563">
                                        <path id="poek" data-name="dfdsr" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                    </svg>
                                    service</a></li>
                            <li><a href="/blog"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                        <path id="pkks" data-name="dfkkij" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                    </svg>
                                    {{__('words.blog')}}</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-2 col-sm-7  fixed_width">
                    <div class="widget_two">
                        <h4>Categories</h4>
                        <ul>
                            <li><a href="portfolio.html">
                                    <svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                        <path id="dst" data-name="pqe" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                    </svg>
                                    cliping path</a></li>
                            <li><a href="portfolio.html"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                        <path id="opijj" data-name="iuyh" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                    </svg>
                                    background</a></li>
                            <li><a href="portfolio.html"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                        <path id="jkhh" data-name="rutrii" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                    </svg>
                                    shadow create</a></li>
                            <li><a href="portfolio.html"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                        <path id="dfsdty" data-name="oppk" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                    </svg>
                                    image retouch</a></li>
                            <li><a href="portfolio.html"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                        <path id="dfdnvb" data-name="optd" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                    </svg>
                                    art gallary</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-2 col-sm-5  fixed_width">
                    <div class="widget_two">
                        <h4>Popular products</h4>
                        <ul>
                            <li><a href="faq.html"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                        <path id="spoom" data-name="poyut" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                    </svg>
                                    faq</a></li>
                            <li><a href="about.html"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                        <path id="sdqwrt" data-name="plmk" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                    </svg>
                                    terms & conditions</a></li>
                            <li><a href="about.html"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                        <path id="snbv" data-name="ouhn" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                    </svg>
                                    reporting</a></li>
                            <li><a href="#"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                        <path id="sdfa" data-name="Patherh" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                    </svg>
                                    documentation</a></li>
                            <li><a href="contact.html"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                        <path id="azad" data-name="piuuj" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                    </svg>
                                    contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer area end  -->

    <!-- copyright section  -->
    <div class="copyright_area">
        <div class="container">
            <div class="row top-border align-items-center">
                <div class="col-md-4 col-lg-2 col-xl-4  col-sm-6">
                    <div class="logo">
                        <a href="/"><img src="./assets/img/logo/logo2.png" alt="site_logo"></a>
                    </div>
                </div>
                <div class="col-md-8 col-lg-8 col-xl-4 col-sm-6 text-center">
                    <div class="copyright_text">
                        <p>&copy; 2024 Megagold.uz by <a href="https://dora.uz"><span>Dora Dev.</span></a>. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-md-4 col-xl-4 text-end d-none d-xl-block">
                    <div class="copyright_menu">
                        <ul>
                            <li><a href="#">+998 (93) 512 5324</a></li>
                            <li><a href="#">+998 (93) 513 5324</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.main>
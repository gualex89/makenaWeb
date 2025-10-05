<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Open9 | NFT Marketplace HTML Template</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_new/css/style.css') }}">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_new/css/responsive.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets_new/icon/Favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets_new/icon/Favicon.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


</head>

<body class="body">

    <div id="wrapper">
        <div id="page" class="pt-40 home-1">

            <!-- header_section - start
            ================================================== -->
            @include('partials.headernew')
            <!-- header_section - end
            ================================================== -->
            
            <!-- Banner_section - start
            ================================================== -->

            <div class="swiper swiper-motorcycle-banner" style="width:100vw; max-width:1920px; height:42.25vw; max-height:1080px; margin:auto; position:relative;">
                <div class="swiper-wrapper">
                    @foreach ($banners as $banner)
                        <div class="swiper-slide" style="position:relative;">
                            <img src="{{ Voyager::image($banner->image) }}" alt="{{ $banner->name }}" style="width:100%; object-fit:cover;">
                            <div style="position:absolute; top:10%; left:10%; transform:translate(-50%,-50%); text-align:center; z-index:2;">
                                <h3 style="color:#fff; font-size:3rem; text-shadow:0 2px 8px #000;">{{ $banner->text1 }}</h3>
                                <a href="{{ $banner->href }}" class="tf-button style-1" style="margin-top:20px; ">{{ $banner->name_button }}</a>
                            </div>
                        </div>
                        
                    @endforeach
                </div>
                <!-- Botones dentro del swiper -->
                <div class="swiper-button-next next-3d over" style="z-index: 10; right: 20px;"></div>
                <div class="swiper-button-prev prev-3d over" style="z-index: 10; left: 20px;"></div>
            </div>

            <!-- Banner_section - end
            ================================================== -->
            
            
            <div class="tf-card-box style-1 mt-5 p-5" style="width: 80%; margin:auto;">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="video">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/nZBAXstf5Zs"
                                frameborder="0" allowfullscreen></iframe>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="descripcion p-4" style="display: flex; flex-direction: column; justify-content: center; height: 100%;">
                            <p style="font-size: 50px; text-align: center; font-weight: bold; line-height: 1.2;"><span
                                    style="color: #b321a6">Todo</span> lo que buscabas</p>

                            <p style="font-size: 26px; text-align: center; line-height: 1.4; align-items:center">Acabado brillante,
                                impresión <strong>Ultra HD 1200 DPI</strong> altura borde de cámara 1.5mm para
                                <strong>protegerla</strong> y agarres laterales <strong>anti-slip</strong>.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            

            <div class="flat-pages-title">
                <div class="widget-bg-line">
                    <div class="wraper">
                        <div class="bg-grid-line y bottom">
                            <div class="bg-line"></div>
                        </div>
                    </div>
                </div>
                <div class="themesflat-container w1490">
                    <div class="row">
                        <div class="col-12 pages-title">
                            
                            <div class="icon-background">
                                <img class="absolute item1" src="{{ asset('assets_new/images/item-background/item1.png') }} " alt="">
                                <img class="absolute item2" src="{{ asset('assets_new/images/item-background/item2.png') }} " alt="">
                                
                                <img class="absolute item4" src="{{ asset('assets_new/images/item-background/item1.png') }} " alt="">
                                <img class="absolute item5" src="{{ asset('assets_new/images/item-background/item1.png') }}" alt="">
                                
                                <img class="absolute item7" src="{{ asset('assets_new/images/item-background/item5.png' ) }}" alt="">
                                <img class="absolute item8" src="{{ asset('assets_new/images/item-background/item5.png' ) }}" alt="">
                            </div>
                            <div class="relative">
                                <div class="swiper swiper-3d-7" >
                                    <div class="swiper-wrapper">
                                        @foreach ($carrusel_cuadros as $carrusel_cuadro)
                                            <div class="swiper-slide">
                                                <div class="tf-card-box">
                                                    <div class="card-media">
                                                        <a href="#">
                                                            <img src="{{ Voyager::image($carrusel_cuadro->image) }}" alt="Cuadro personalizado de {{ $carrusel_cuadro->name }}">
                                                        </a>
                                                        <div class="button-place-bid">
                                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="meta-info text-center">
                                                        <h5 class="name"><a href="nft-detail-2.html">{{ $carrusel_cuadro->name }}</a></h5>
                                                        <h6 class="price gem"><i class="icon-gem"></i>{{ $carrusel_cuadro->text1 }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-pagination pagination-number"></div>
                                </div>
                                <div class="swiper-button-next next-3d over"></div>
                                <div class="swiper-button-prev prev-3d over"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            

            <div class="tf-section-3 discover-item ">
                <div class="themesflat-container">
                    <div class="row">
                        
                        
                        <div data-wow-delay="0s" class="wow fadeInUp col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('assets_new/images/box-item/card-item-05.jpg') }}" alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="featured-countdown">
                                        <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                                    </div>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('assets_new/images/avatar/avatar-box-01.jpg') }}" alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Posted by:</span>
                                        <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.1s" class="wow fadeInUp col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('assets_new/images/box-item/card-item-06.jpg') }}" alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="featured-countdown">
                                        <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                                    </div>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('assets_new/images/avatar/avatar-box-02.jpg') }}" alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Posted by:</span>
                                        <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.2s" class="wow fadeInUp col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('assets_new/images/box-item/card-item-07.jpg') }}" alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="featured-countdown">
                                        <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                                    </div>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('assets_new/images/avatar/avatar-box-03.jpg') }}" alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Posted by:</span>
                                        <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.3s" class="wow fadeInUp col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('assets_new/images/box-item/card-item-08.jpg') }}" alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="featured-countdown">
                                        <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                                    </div>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('assets_new/images/avatar/avatar-box-04.jpg') }}" alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Posted by:</span>
                                        <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0s" class="wow fadeInUp col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('assets_new/images/box-item/card-item-01.jpg') }}" alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="featured-countdown">
                                        <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                                    </div>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('assets_new/images/avatar/avatar-box-05.jpg') }}" alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Posted by:</span>
                                        <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.1s" class="wow fadeInUp col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('assets_new/images/box-item/card-item-02.jpg') }}" alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="featured-countdown">
                                        <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                                    </div>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('assets_new/images/avatar/avatar-box-06.jpg') }}" alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Posted by:</span>
                                        <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.2s" class="wow fadeInUp col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('assets_new/images/box-item/card-item-03.jpg') }}" alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="featured-countdown">
                                        <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                                    </div>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('assets_new/images/avatar/avatar-box-07.jpg') }}" alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Posted by:</span>
                                        <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0.2s" class="wow fadeInUp col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{ asset('assets_new/images/box-item/card-item-04.jpg') }}" alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="featured-countdown">
                                        <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                                    </div>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                <div class="author flex items-center">
                                    <div class="avatar">
                                        <img src="{{ asset('assets_new/images/avatar/avatar-box-01.jpg') }}" alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Posted by:</span>
                                        <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="text-bid">Current Bid</span>
                                    <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tf-section create-sell">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section justify-content-center">
                                <h2 class="tf-title pb-30">Step by step Create and Sell Your NFTs</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="tf-box-icon relative text-center">
                                <div class="image">
                                    <img src="{{ asset('assets_new/images/box-icon/icon-01.png') }}" alt=""> 
                                    <p>Step 1</p>                                                                          
                                </div>
                                <h4 class="heading"><a href="contact-us.html">Set Up Your Wallet</a></h4>
                                <p class="content">Fusce non dignissim velit, sit amet semper eros. Quisque orci est</p>
                                <div class="arrow">
                                    <svg width="114" height="114" viewBox="0 0 114 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_625_20131)">
                                        <path d="M13.0682 58.6163C14.3723 57.8473 15.7186 57.1206 17.0509 56.436L16.1333 54.65C14.7448 55.3625 13.3845 56.1032 12.0524 56.9002L13.0683 58.6444L13.0682 58.6163ZM21.1465 54.4527C22.5352 53.8244 23.9381 53.2383 25.3551 52.6944L24.6057 50.8245C23.1607 51.3965 21.7298 51.9825 20.313 52.6107L21.1324 54.4386L21.1465 54.4527ZM29.6344 51.1469C31.0797 50.6592 32.5251 50.2277 33.9986 49.8244L33.4458 47.8989C31.9582 48.3162 30.4707 48.7616 28.9974 49.2493L29.6344 51.1469ZM38.4195 48.6986C39.9073 48.3656 41.3952 48.0606 42.8972 47.7977L42.5408 45.8166C41.0107 46.0793 39.4948 46.3842 37.9649 46.7312L38.4195 48.6986ZM47.4036 47.1216C48.9199 46.929 50.4222 46.7786 51.9527 46.6563L51.7788 44.6615C50.2202 44.7838 48.6898 44.9342 47.1455 45.1267L47.4036 47.1216ZM56.5024 46.4156C58.019 46.3635 59.5498 46.3536 61.0666 46.3857L61.0753 44.3774C59.5164 44.3592 57.9715 44.3551 56.4128 44.4211L56.4884 46.4297L56.5024 46.4156ZM65.6314 46.5524C67.1485 46.6407 68.6656 46.7852 70.1829 46.9578L70.4022 44.9641C68.8569 44.7915 67.2977 44.6609 65.7526 44.5725L65.6315 46.5805L65.6314 46.5524ZM74.7067 47.5598C76.2101 47.8025 77.7135 48.0734 79.203 48.3863L79.591 46.4212C78.0734 46.1082 76.5278 45.8232 74.9963 45.5803L74.6927 47.5738L74.7067 47.5598ZM83.6578 49.4235C85.1335 49.8066 86.5952 50.2319 88.057 50.6852L88.6418 48.7767C87.1659 48.3093 85.648 47.8839 84.1582 47.4867L83.6578 49.4235ZM92.3866 52.1574C93.8064 52.6808 95.2405 53.2464 96.6465 53.84L97.428 51.9883C95.9938 51.3665 94.5458 50.8149 93.0978 50.2633L92.4147 52.1574L92.3866 52.1574ZM100.795 55.7471C102.159 56.4108 103.509 57.1166 104.845 57.8645L105.809 56.1116C104.445 55.3636 103.067 54.6296 101.661 53.9517L100.795 55.7471Z" fill="#919191"/>
                                        <path d="M95.5845 61.1824L95.0597 59.2569L104.589 56.6842L101.292 47.336L103.186 46.681L107.205 58.0676L95.5845 61.1824Z" fill="#919191"/>
                                        <circle cx="8.69433" cy="59.7296" r="3.91825" transform="rotate(-135 8.69433 59.7296)" stroke="#919191" stroke-width="2"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_625_20131">
                                        <rect width="76.2328" height="83.6102" fill="white" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 113.026 54.5132)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="tf-box-icon relative text-center type-1">
                                <div class="image">
                                    <img src="{{ asset('assets_new/images/box-icon/icon-02.png') }}" alt=""> 
                                    <p>Step 2</p>                                                                          
                                </div>
                                <h4 class="heading"><a href="contact-us.html">Create your collection</a></h4>
                                <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque luctus</p>
                                <div class="arrow">
                                    <svg width="114" height="114" viewBox="0 0 114 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_625_20131)">
                                        <path d="M13.0682 58.6163C14.3723 57.8473 15.7186 57.1206 17.0509 56.436L16.1333 54.65C14.7448 55.3625 13.3845 56.1032 12.0524 56.9002L13.0683 58.6444L13.0682 58.6163ZM21.1465 54.4527C22.5352 53.8244 23.9381 53.2383 25.3551 52.6944L24.6057 50.8245C23.1607 51.3965 21.7298 51.9825 20.313 52.6107L21.1324 54.4386L21.1465 54.4527ZM29.6344 51.1469C31.0797 50.6592 32.5251 50.2277 33.9986 49.8244L33.4458 47.8989C31.9582 48.3162 30.4707 48.7616 28.9974 49.2493L29.6344 51.1469ZM38.4195 48.6986C39.9073 48.3656 41.3952 48.0606 42.8972 47.7977L42.5408 45.8166C41.0107 46.0793 39.4948 46.3842 37.9649 46.7312L38.4195 48.6986ZM47.4036 47.1216C48.9199 46.929 50.4222 46.7786 51.9527 46.6563L51.7788 44.6615C50.2202 44.7838 48.6898 44.9342 47.1455 45.1267L47.4036 47.1216ZM56.5024 46.4156C58.019 46.3635 59.5498 46.3536 61.0666 46.3857L61.0753 44.3774C59.5164 44.3592 57.9715 44.3551 56.4128 44.4211L56.4884 46.4297L56.5024 46.4156ZM65.6314 46.5524C67.1485 46.6407 68.6656 46.7852 70.1829 46.9578L70.4022 44.9641C68.8569 44.7915 67.2977 44.6609 65.7526 44.5725L65.6315 46.5805L65.6314 46.5524ZM74.7067 47.5598C76.2101 47.8025 77.7135 48.0734 79.203 48.3863L79.591 46.4212C78.0734 46.1082 76.5278 45.8232 74.9963 45.5803L74.6927 47.5738L74.7067 47.5598ZM83.6578 49.4235C85.1335 49.8066 86.5952 50.2319 88.057 50.6852L88.6418 48.7767C87.1659 48.3093 85.648 47.8839 84.1582 47.4867L83.6578 49.4235ZM92.3866 52.1574C93.8064 52.6808 95.2405 53.2464 96.6465 53.84L97.428 51.9883C95.9938 51.3665 94.5458 50.8149 93.0978 50.2633L92.4147 52.1574L92.3866 52.1574ZM100.795 55.7471C102.159 56.4108 103.509 57.1166 104.845 57.8645L105.809 56.1116C104.445 55.3636 103.067 54.6296 101.661 53.9517L100.795 55.7471Z" fill="#919191"/>
                                        <path d="M95.5845 61.1824L95.0597 59.2569L104.589 56.6842L101.292 47.336L103.186 46.681L107.205 58.0676L95.5845 61.1824Z" fill="#919191"/>
                                        <circle cx="8.69433" cy="59.7296" r="3.91825" transform="rotate(-135 8.69433 59.7296)" stroke="#919191" stroke-width="2"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_625_20131">
                                        <rect width="76.2328" height="83.6102" fill="white" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 113.026 54.5132)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="tf-box-icon relative text-center">
                                <div class="image">
                                    <img src="{{ asset('assets_new/images/box-icon/icon-03.png') }}" alt=""> 
                                    <p>Step 3</p>                                                                          
                                </div>
                                <h4 class="heading"><a href="contact-us.html">Add your NFTs</a></h4>
                                <p class="content">Suspendisse porttitor id est non accumsan. Cras vel viverra velit</p>
                                <div class="arrow">
                                    <svg width="114" height="114" viewBox="0 0 114 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_625_20131)">
                                        <path d="M13.0682 58.6163C14.3723 57.8473 15.7186 57.1206 17.0509 56.436L16.1333 54.65C14.7448 55.3625 13.3845 56.1032 12.0524 56.9002L13.0683 58.6444L13.0682 58.6163ZM21.1465 54.4527C22.5352 53.8244 23.9381 53.2383 25.3551 52.6944L24.6057 50.8245C23.1607 51.3965 21.7298 51.9825 20.313 52.6107L21.1324 54.4386L21.1465 54.4527ZM29.6344 51.1469C31.0797 50.6592 32.5251 50.2277 33.9986 49.8244L33.4458 47.8989C31.9582 48.3162 30.4707 48.7616 28.9974 49.2493L29.6344 51.1469ZM38.4195 48.6986C39.9073 48.3656 41.3952 48.0606 42.8972 47.7977L42.5408 45.8166C41.0107 46.0793 39.4948 46.3842 37.9649 46.7312L38.4195 48.6986ZM47.4036 47.1216C48.9199 46.929 50.4222 46.7786 51.9527 46.6563L51.7788 44.6615C50.2202 44.7838 48.6898 44.9342 47.1455 45.1267L47.4036 47.1216ZM56.5024 46.4156C58.019 46.3635 59.5498 46.3536 61.0666 46.3857L61.0753 44.3774C59.5164 44.3592 57.9715 44.3551 56.4128 44.4211L56.4884 46.4297L56.5024 46.4156ZM65.6314 46.5524C67.1485 46.6407 68.6656 46.7852 70.1829 46.9578L70.4022 44.9641C68.8569 44.7915 67.2977 44.6609 65.7526 44.5725L65.6315 46.5805L65.6314 46.5524ZM74.7067 47.5598C76.2101 47.8025 77.7135 48.0734 79.203 48.3863L79.591 46.4212C78.0734 46.1082 76.5278 45.8232 74.9963 45.5803L74.6927 47.5738L74.7067 47.5598ZM83.6578 49.4235C85.1335 49.8066 86.5952 50.2319 88.057 50.6852L88.6418 48.7767C87.1659 48.3093 85.648 47.8839 84.1582 47.4867L83.6578 49.4235ZM92.3866 52.1574C93.8064 52.6808 95.2405 53.2464 96.6465 53.84L97.428 51.9883C95.9938 51.3665 94.5458 50.8149 93.0978 50.2633L92.4147 52.1574L92.3866 52.1574ZM100.795 55.7471C102.159 56.4108 103.509 57.1166 104.845 57.8645L105.809 56.1116C104.445 55.3636 103.067 54.6296 101.661 53.9517L100.795 55.7471Z" fill="#919191"/>
                                        <path d="M95.5845 61.1824L95.0597 59.2569L104.589 56.6842L101.292 47.336L103.186 46.681L107.205 58.0676L95.5845 61.1824Z" fill="#919191"/>
                                        <circle cx="8.69433" cy="59.7296" r="3.91825" transform="rotate(-135 8.69433 59.7296)" stroke="#919191" stroke-width="2"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_625_20131">
                                        <rect width="76.2328" height="83.6102" fill="white" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 113.026 54.5132)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="tf-box-icon relative text-center">
                                <div class="image">
                                    <img src="{{ asset('assets_new/images/box-icon/icon-04.png') }}" alt=""> 
                                    <p>Step 4</p>                                                                          
                                </div>
                                <h4 class="heading"><a href="contact-us.html">Sell your NFTs</a></h4>
                                <p class="content">Maecenas non semper quam. Vivamus et arcu condimentum ipsum consectetur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tf-section action">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="action__body">
                                <div class="tf-tsparticles">
                                    <div id="tsparticles1" data-color="#161616" data-line="#000"></div>
                                </div>
                                <h2>Discover, create and sell your own NFT</h2>
                                <div class="flat-button flex">
                                    <a href="/tufunda" class="tf-button style-2 h50 w190 mr-10">Crea tu Funda<i class="icon-arrow-up-right2"></i></a>
                                    <a href="/tucuadro" class="tf-button style-2 h50 w230">Crea tu Cuadro<i class="icon-arrow-up-right2"></i></a>
                                </div>
                                <div class="bg-home7">
                                    <div class="swiper-container autoslider3reverse" data-swiper='{
                                        "loop":true,
                                        "slidesPerView": "auto",
                                        "spaceBetween": 14,
                                        "direction": "vertical",
                                        "speed": 10000,
                                        "observer": true,
                                        "observeParents": true,
                                        "autoplay": {
                                            "delay": "0",
                                            "disableOnInteraction": false
                                        }
                                    }'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets_new/images/item-background/bg-action-1.png') }}" alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets_new/images/item-background/bg-action-1.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-container autoslider4reverse" data-swiper='{
                                        "loop":true,
                                        "slidesPerView": "auto",
                                        "spaceBetween": 14,
                                        "direction": "vertical",
                                        "speed": 10000,
                                        "observer": true,
                                        "observeParents": true,
                                        "autoplay": {
                                            "delay": "0",
                                            "disableOnInteraction": false,
                                            "reverseDirection": true
                                        }
                                    }'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets_new/images/item-background/bg-action-1.png') }}" alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets_new/images/item-background/bg-action-1.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-container autoslider3reverse" data-swiper='{
                                        "loop":true,
                                        "slidesPerView": "auto",
                                        "spaceBetween": 14,
                                        "direction": "vertical",
                                        "speed": 10000,
                                        "observer": true,
                                        "observeParents": true,
                                        "autoplay": {
                                            "delay": "0",
                                            "disableOnInteraction": false
                                        }
                                    }'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets_new/images/item-background/bg-action-1.png') }}" alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets_new/images/item-background/bg-action-1.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- footer_section - start
            ================================================== -->
            @include('partials.footernew')
            <!-- footer_section - end
            ================================================== -->
        
        </div>
        <!-- /#page -->

        <!-- Carrito Sidebar -->
        <div class="cart_sidebar" style="display:none; position:fixed; top:0; right:0; width:370px; height:100vh; background:#181818; z-index:9999; box-shadow:-2px 0 10px rgba(0,0,0,0.2); overflow-y:auto;">
            <button type="button" class="close_btn" style="background:none; border:none; color:#fff; font-size:2rem; position:absolute; top:15px; right:15px; z-index:10001;"><i class="fas fa-times"></i></button>
            <div style="padding:40px 24px 24px 24px;">
                <ul class="cart_items_list ul_li_block mb_30 clearfix" style="padding:0; margin:0 0 30px 0;">
                    <!-- Items del carrito se llenan por JS -->
                </ul>
                <ul class="total_price ul_li_block mb_30 clearfix" style="padding:0; margin:0 0 30px 0;">
                    <li class="total_sidecart">
                        <span>Subtotal:</span>
                        <span>$0</span>
                    </li>
                    <li class="total_sidecart">
                        <span>Total:</span>
                        <span>$0</span>
                    </li>
                </ul>
                <ul class="btns_group ul_li_block clearfix" style="padding:0;">
                    <li><a href="/carrito" class="tf-button style-1 w-100">Ir al carrito</a></li>
                </ul>
            </div>
        </div>

        

    </div>
    <!-- /#wrapper -->

    

    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>

    <!-- Javascript -->
    <script src="{{ asset('assets_new/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets_new/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets_new/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_new/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets_new/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets_new/js/swiper.js') }}"></script>
    <script src="{{ asset('assets_new/js/count-down.js') }}"></script>
    <script src="{{ asset('assets_new/js/simpleParallax.min.js') }}"></script>
    <script src="{{ asset('assets_new/js/gsap.js') }}"></script>
    <script src="{{ asset('assets_new/js/SplitText.js') }}"></script>
    <script src="{{ asset('assets_new/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets_new/js/ScrollTrigger.js') }}"></script>
    <script src="{{ asset('assets_new/js/gsap-animation.js') }}"></script>
    <script src="{{ asset('assets_new/js/tsparticles.min.js') }}"></script>
    <script src="{{ asset('assets_new/js/tsparticles.js') }}"></script>
    <script src="{{ asset('assets_new/js/main.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let cartItemCount = 0;
            let subtotal = 0;
            let total = 0;
            let cartItems = [];

            function updateCartCounter() {
                const badgeElements = document.querySelectorAll('.btn_badge');
                badgeElements.forEach(function(element) {
                    element.textContent = cartItemCount;
                });
            }

            function updatePrices() {
                const subtotalElement = document.querySelector('.total_price li:nth-child(1) span:nth-child(2)');
                const totalElement = document.querySelector('.total_price li:nth-child(2) span:nth-child(2)');

                subtotalElement.textContent = `$${subtotal.toFixed(2)}`;
                totalElement.textContent = `$${total.toFixed(2)}`;
            }

            function addToCart(productItem) {
                const price = parseFloat(productItem.querySelector('.item_price').textContent.replace('$', ''));
                const itemName = productItem.querySelector('.item_title').textContent;
                const imageUrl = productItem.querySelector('img').getAttribute(
                    'src'); // Obtener la URL de la imagen completa

                cartItemCount++;
                subtotal += price;
                total = subtotal;

                const cartItem = {
                    name: itemName,
                    price: price,
                    image: imageUrl // Guardar la URL completa de la imagen en el objeto del carrito
                };

                cartItems.push(cartItem);

                // Guardar el carrito en el almacenamiento local
                localStorage.setItem('cartItems', JSON.stringify(cartItems));

                // Llamar a la función para mostrar los elementos del carrito
                updateCartItems();
                updatePrices();
            }

            function updateCartItems() {
                const cartItemsList = document.querySelector('.cart_items_list');
                cartItemsList.innerHTML = ''; // Limpiar la lista de elementos del carrito

                cartItems.forEach(cartItem => {
                    const cartItemHTML = `
                    <li style="background:transparent; margin-bottom:32px; padding:0; display:flex; align-items:center;">
                        <div style="background:#fff; border-radius:18px; padding:12px; display:flex; align-items:center; width:70px; min-width:30px; justify-content:center;">
                            <img src="${cartItem.image}" alt="Funda en carrito ${cartItem.name}" style="width:100%; border-radius:14px; display:block;"/>
                        </div>
                        <div class="item_content" style="color:#fff; margin-left:18px; position:relative; flex:1;">
                             
                            <div style="padding-right:32px;">
                                <span class="item_type" style="font-size:13px;">${cartItem.marca2 ? `Funda Doble` : `Funda`}</span>
                                <div style="font-weight:700; font-size:18px; margin:2px 0 2px 0;"><span class="item_title">${cartItem.name}</span></div>
                                <div style="font-size:15px; margin-bottom:2px;">${cartItem.marca ? cartItem.marca : ''} ${cartItem.modelo ? cartItem.modelo : ''}</div>
                                ${cartItem.marca2 ? `<div style="font-size:15px;">${cartItem.marca2} ${cartItem.modelo2}</div>` : ''}
                                <div style="font-weight:700; font-size:17px; margin-top:6px;"><span class="item_price">$${cartItem.price}</span></div>
                            </div>
                        </div>
                        <button type="button" class="remove_btn" style=" background:none; border:none; color:#fff; font-size:2rem;">
                            <i class="bi bi-trash"></i>
                        </button>
                    </li>
                `;
                    cartItemsList.innerHTML += cartItemHTML;
                });

                // Actualizar el contador del carrito
                updateCartCounter();
            }

            // Restaurar el carrito al cargar la página
            function restoreCart() {
                const storedCartItems = localStorage.getItem('cartItems');
                if (storedCartItems) {
                    cartItems = JSON.parse(storedCartItems);
                    cartItemCount = cartItems.length;
                    cartItems.forEach(cartItem => {
                        subtotal += cartItem.price;
                    });
                    total = subtotal;

                    updateCartItems();
                    updatePrices();
                }
            }

            function removeFromCart(item) {
                const itemName = item.querySelector('.item_title').textContent;

                // Encontrar el índice del elemento a eliminar en cartItems
                const indexToRemove = cartItems.findIndex(cartItem => cartItem.name === itemName);

                if (indexToRemove !== -1) { // Verificar si se encontró el elemento
                    const price = cartItems[indexToRemove].price;

                    // Actualizar subtotal y total
                    subtotal -= price;
                    total = subtotal;

                    // Eliminar el elemento del carrito
                    cartItems.splice(indexToRemove, 1);

                    // Actualizar el almacenamiento local
                    localStorage.setItem('cartItems', JSON.stringify(cartItems));

                    // Actualizar el contador del carrito
                    cartItemCount--;

                    // Actualizar la visualización del carrito
                    updateCartItems();
                    updatePrices();
                    updateCartCounter(); // Actualizar el contador del carrito
                }
            }


            // Llamar a la función para restaurar el carrito al cargar la página
            restoreCart();

            document.querySelectorAll('.product_action_btns a').forEach(btn => {
                btn.addEventListener('click', function(event) {
                    event.preventDefault();
                    const productItem = this.closest('.motorcycle_product_grid');
                    addToCart(productItem);
                });
            });

            document.querySelector('.cart_items_list').addEventListener('click', function(event) {
                if (
                    event.target.classList.contains('remove_btn') ||
                    (event.target.closest('.remove_btn'))
                ) {
                    const item = event.target.closest('li');
                    removeFromCart(item);
                }
            });
            document.addEventListener('mousedown', function(event) {
                const sidebar = document.querySelector('.cart_sidebar');
                if (
                    sidebar.style.display === 'block' &&
                    !sidebar.contains(event.target) &&
                    !event.target.classList.contains('open-cart-sidebar')
                ) {
                    closeCartSidebar();
                }
            });

            // Mostrar/ocultar sidebar del carrito
            function openCartSidebar() {
                document.querySelector('.cart_sidebar').style.display = 'block';
                document.body.style.overflow = 'hidden';
            }
            function closeCartSidebar() {
                document.querySelector('.cart_sidebar').style.display = 'none';
                document.body.style.overflow = '';
            }
            document.querySelector('.open-cart-sidebar').addEventListener('click', openCartSidebar);
            document.querySelector('.cart_sidebar .close_btn').addEventListener('click', closeCartSidebar);
        });
    </script>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    new Swiper('.swiper-motorcycle-banner', {
        loop: true,
        navigation: {
            nextEl: '.swiper-motorcycle-banner .swiper-button-next',
            prevEl: '.swiper-motorcycle-banner .swiper-button-prev',
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        effect: 'slide'
    });
});
</script>

</body>
</html>
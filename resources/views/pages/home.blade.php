@extends('layout.index')
@section('title', 'Contacts')
@section('content')

    
    
<div class="frontFirst" >
    <div class="frontFirstImg">
        <video src="front-first/3773488-hd_1920_1080_30fps.mp4" class="activated" muted autoplay loop></video>
        <video src="front-first/gettyimages-1319150896-640_adpp.mp4" class="deactivated" muted autoplay loop></video>
    </div>
    <div class="company_name p-30 lh-45 d-flex flex-column position-absolute top-0 h-100 w-100 color-w justify-content-between align-items-center">
        <div class="top w-100 d-flex flex-column">
            
        </div>
        <div class="bottom w-100 text-end">
            
        </div>
    </div>
    <div class="company_and_losung d-grid">
        <div class="name d-flex flex-column align-items-center justify-content-center">
            <span class="firstline">A<span class="p-30">B</span>M</span>
            <span class="slogon">
                Create art in your kitchen
            </span>
        </div>
        <div class="name d-flex flex-column justify-content-center">
            <span class="slogon p-15">
                At ABM Studio Builders, we specialize in creating beautiful, functional kitchens tailored to your lifestyle. Our team is dedicated to bringing your vision to life with quality craftsmanship and innovative designs. Transform your culinary space into the heart of your home with ABM Studio!
            </span>
        </div>
    </div>
    <div class="company_layer_for_animation"></div>
</div>
<script>
    let mouse = {
        x: 0,
        y: 0
    };
    window.addEventListener("mousemove", function(event) {
  
        mouse.x = event.pageX;
        mouse.y = event.pageY;
        // console.log(mouse.x);

        var line = document.querySelector('.deactivated');
    
        var dx = mouse.x;
        var dy = mouse.y;

        // var transform = "rotateY(" + Math.atan2(dy, dx) + "rad)";
        // var transformX = "rotateX(" + Math.atan2(dx, dy) + "rad)";
        // line.style.transform = transform + transformX;
    });

    $( document ).ready(function() {
        setTimeout(() => {
            document.querySelector('.company_and_losung').classList.add('animation');
            document.querySelector('.company_layer_for_animation').classList.add('animation');
        }, "2500");
    });
</script>
<div class="frontSecond text-center">
    <div class="frontsecond_content" id="image_intro">
    <small>WELCOME TO ABM STUDIO</small>
        <div class="container p-30">
            <div class="titleforslide d-flex justify-content-center align-items-center">
                <div class="titletext">
                    DISCOVER THE ART OF KITCHEN CRAFTSMANSHIP, DESIGNED AND BUILT FOR YOUR LIFESTYLE.
                </div>
            </div>
        </div>
        <div class="fixed_container_for_img top-0 position-absolute">
            <img src="2slide_scale.jpg" class="image image_intro">
            
            <div class="slidecontent">
               <div class="cube"></div>
            </div>
        </div>
    </div>
</div>
<script>
    let scale =2;
    let clip = 40;
    let windows;
    var distance = $('.frontSecond').offset().top,
    $window = $(window);
    $window.on('wheel', function(e) {
        windows = $window.scrollTop();
        if ($window.scrollTop() >= distance) {
            // $window.scrollTop(distance)
            
        }
    });

    const element = document.querySelector('.frontSecond');
    const el = document.querySelector('.image_intro');
    
    element.addEventListener('wheel', function(e){
        if(e.deltaY > 0){
            if(clip != 0){
                clip -= 2;
            } 
            el.style.clipPath = `inset(${clip}%)` 
        }else{
            if(clip != 40){
                clip += 2;
            }
            el.style.clipPath = `inset(${clip}%)`;
        }        
    });
</script>

<style>
    .card_model{
        transition: all .25s ease-in-out;
        height: 350px;
        padding: 0;
        margin: 0;
        border: 0;
    }
    .card_model_body{
        height: 420px;
        padding: 0;
        margin: 0;
        border: 0;
        height: 100%;
    }
    .card_model_body img{
        object-fit: cover;
        border-radius: .25rem;
        width: 100%;
        height: 100%;
    }
    .text_for_model_card{}
</style>
<div class="other">    
    <div class="frontTirth text-center p-30" style="">
        <small class="color-w slide_title">WHO WE ARE?</small>
        <div class="container" style="">
            <div class="titleforslide d-flex flex-column justify-content-center align-items-center">
                <div class="titletext text_before_animation color-w">
                    Welcome to STUDIO ABM BUILDERS Inc.! We specialize in kitchen remodeling, transforming spaces into beautiful, functional areas that reflect your style. With years of experience, our skilled team combines innovative design and quality craftsmanship to bring your vision to life.
                    At STUDIO ABM BUILDERS, we believe the kitchen is the heart of the home. We prioritize customer satisfaction through clear communication and meticulous execution, making your remodeling journey seamless and enjoyable.
                    <b>Discover our models and choose your perfect design!</b> Let’s create the kitchen of your dreams together
                </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 p-15">
                                <div class="card card_model bg_img1">
                                    <div class="card-body card_model_body">
                                        <div class="text_for_model_card position-absolute p-15">
                                            <h1>Old Style</h1>
                                        </div>
                                        <img src="styles/1405446421782.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8  col-md-12 col-sm-12 p-15">
                                <div class="card card_model bg_img1">
                                    <div class="card-body card_model_body">
                                        <div class="text_for_model_card position-absolute p-15">
                                            <h1>Old Style</h1>
                                        </div>
                                        <img src="styles/1495149887363.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4  col-md-12 col-sm-12 p-15">
                                <div class="card card_model bg_img1">
                                    <div class="card-body card_model_body">
                                        <div class="text_for_model_card position-absolute p-15">
                                            <h1>Old Style</h1>
                                        </div>
                                        <img src="styles/1549664897706.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4  col-md-12 col-sm-12 p-15">
                                <div class="card card_model bg_img1">
                                    <div class="card-body card_model_body">
                                        <div class="text_for_model_card position-absolute p-15">
                                            <h1>Old Style</h1>
                                        </div>
                                        <img src="styles/1592932554591.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8  col-md-12 col-sm-12 p-15">
                                <div class="card card_model bg_img1">
                                    <div class="card-body card_model_body">
                                        <div class="text_for_model_card position-absolute p-15">
                                            <h1>Old Style</h1>
                                        </div>
                                        <img src="styles/1625682166094.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7  col-md-12 col-sm-12 p-15">
                                <div class="card card_model bg_img1">
                                    <div class="card-body card_model_body">
                                        <div class="text_for_model_card position-absolute p-15">
                                            <h1>Old Style</h1>
                                        </div>
                                        <img src="styles/1657576773385.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5  col-md-12 col-sm-12 p-15">
                                <div class="card card_model bg_img1">
                                    <div class="card-body card_model_body">
                                        <div class="text_for_model_card position-absolute p-15">
                                            <h1>Old Style</h1>
                                        </div>
                                        <img src="styles/1663013872428.webp" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="projects" style="
                        width: 100vw;
                        height: 100vh;
                        /* position: fixed; */
                        top: 0;
                        z-index: 99;
                    " >
                    
                    </div> --}}
                    <div class="threeTest">
                </div>
            </div>
            <script>
                let div_height = document.querySelector('.text_before_animation');
                let div_position = div_height.getBoundingClientRect();

                let animat_distance = $('.projects').offset().top,
                    $windows = $(window);

                    // console.log(animat_distance);
                var scrollDisabled_for_animate = false;
                $windows.on('wheel', function(e) {
                    windows = $windows.scrollTop();
                    if ($windows.scrollTop() >= animat_distance) {
                        scrollDisabled_for_animate = true;
                        // $window.scrollTop(animat_distance)
                    }
                });

                window.addEventListener('wheel', function(e){
                    if(scrollDisabled_for_animate){
                        // e.preventDefault();
                    }
                }, {passive:false});
            </script>

        </div>
    </div>
    <div class="frontForth text-center p-30" style="">
        <small class="color-w slide_title">Our current projects</small>
        <div class="Slide_4_Three_animation d-flex">
            <div class="titleexplanation color-w">
                STUDIO ABM <img class="cube" src="slide4/1.jpg">
                is on a 
                mission to transform kitchens <img class="cube" src="slide4/2.jpg"> into the 
                heart <img class="cube" src="slide4/3.jpeg"> of every home.
            </div>
            <div class="projects" style=" width: 50%; height: 60vh;/* position: fixed; */top: 0;z-index: 99;" >
            </div>
        </div>
        <div class="container" style="">
            {{-- <div class="threeTest"> --}}
        </div>
    </div>


    
    <div class="frontFifth text-center p-30" style="">
        <small class="color-w slide_title">What We Provide?</small>
        <div class="slidecontent">
            <div class="w-100">
                <div class="buttons_container">
                    <div class="buttons_for_book p-30">
                        <button id="flip-page-back"><i class="feather feather-arrow-left"></i></button>
                        <button id="flip-page"><i class="feather feather-arrow-right"></i></button>
                    </div>
                </div>
                <div class="container text-center d-flex flex-column justify-content-center" style="height: 100vh">
                    <div class="book d-flex ">
                        <div class="w-100">
        
                        </div>
                        <div class="pages w-100">
                            <div class="first">
                                <div class="cover" id="cover">
                                    <div class="logo">
                                        <img src="just-logo-removebg-preview.png" alt="logo">
                                    </div>
                                    <div class="bookTitle">
                                        <h1>studio abm builders Services</h1>
                                    </div>
                                </div>
                                <div class="coverback" id="coverback">
                                    <img src="services/remodeling.jpg" alt="logo">
                                </div>
                            </div>
                            <div class="page_book">
                                <div class="side2">
                                    <div class="description">
                                        <h1>Kittchen Remodeling</h1>
                                    </div>
                                </div>
                            </div>
        
                            <div class="page_book">
                                <div class="side2">
                                    <img src="services/Electrical.jpeg" alt="logo">
                                </div>
                            </div>
        
                            
                            <div class="page_book">
                                <div class="side2">
                                    <div class="description">
                                        <h1>Electrical</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <img src="services/Plumbing.jpeg" alt="logo">
                                </div>
                            </div>

                                <div class="page_book">
                                <div class="side2">
                                    <div class="description">
                                        <h1>Plumbing</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <img src="services/flooring.png" alt="logo">
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <div class="description">
                                        <h1>Flooring</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <img src="services/Drywall.jpg" alt="logo">
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <div class="description">
                                        <h1>Drywall</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <img src="services/Backsplash.webp" alt="logo">
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <div class="description">
                                        <h1>Backsplash</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <img src="services/Countertops.png" alt="logo">
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <div class="description">
                                        <h1>Counter tops</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <img src="services/closets.jpg" alt="logo">
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <div class="description">
                                        <h1>Closets</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <img src="services/InteriorPainting.jpg" alt="logo">
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <div class="description">
                                        <h1>Interior painting</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <img src="services/tails.jpg" alt="logo">
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <div class="description">
                                        <h1>Tails</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <img src="services/tails.jpg" alt="logo">
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(windows).ready(function() {
            let sctollTopByfrontSixth = 0;
            let height_by_frontSixth = 0;
            let value = 1;
            let frontSixth = document.querySelector('.frontSixth');
            window.onscroll = function() {
                height_by_frontSixth = frontSixth.getBoundingClientRect().top;

                value = height_by_frontSixth;
                if(value < 650){
                    let leftTestimonial = document.querySelector('.leftTestimonial');
                    leftTestimonial.classList.add('active');
                    let rightTestimonial = document.querySelector('.rightTestimonial');
                    rightTestimonial.classList.add('active');
                    return; 
                }

                console.log(value);
                // console.log(window.scrollY); // Value of scroll Y in px
            };
        });
    </script>
    <div class="frontSixth text-center p-30" style="">
        <small class="color-w slide_title">what our customers says about us</small>
        <div class="slidecontent">
            {{-- <div class="iponemodel" style="height: 100vh; z-index:99"> --}}
                <div class="leftTestimonial">
                    <div class="testimonial">
                        <div class="p-15">
                            <div class="itemTestimonial">
                                <div class="header p-15">
                                    <div class="name">
                                        Sophia Brooks
                                    </div>
                                    <div class="work">
                                        Bathrook Remodeling
                                    </div>
                                </div>
                                <div class="body p-15 p-sticyTop100">
                                    I’m thrilled with my bathroom remodel! The team was professional and full of great ideas. They transformed my outdated space into a beautiful oasis, and the attention to detail was fantastic. I highly recommend their services!
                                </div>
                                <div class="star">

                                </div>
                            </div>
                        </div>
                        <div class="p-15">
                            <div class="itemTestimonial">
                                <div class="header p-15">
                                    <div class="name">
                                        Liam Bennett
                                    </div>
                                    <div class="work">
                                        Interior Painting 
                                    </div>
                                </div>
                                <div class="body p-15 p-sticyTop100">
                                    I recently had my interior painted, and the results exceeded my expectations! The team was attentive to detail and worked quickly without compromising quality. My home feels renewed and vibrant!
                                </div>
                                <div class="star"></div>
                            </div>
                        </div>
                        <div class="p-15">
                            <div class="itemTestimonial">
                                <div class="header p-15">
                                    <div class="name">
                                        Isabella Reed
                                    </div>
                                    <div class="work">
                                        Kitchen Remodeling 
                                    </div>
                                </div>
                                <div class="body p-15 p-sticyTop100">
                                    I couldn't be happier with my kitchen remodel! The team was professional and truly listened to my ideas. They created a stunning, functional space that perfectly fits my style. Cooking has become a joy again!
                                </div>
                                <div class="star"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rightTestimonial">
                    <div class="testimonial">
                        <div class="p-15">
                            <div class="itemTestimonial">
                                <div class="header p-15">
                                    <div class="name">
                                        Sophia Brooks
                                    </div>
                                    <div class="work">
                                        Bathrook Remodeling
                                    </div>
                                </div>
                                <div class="body p-15 p-sticyTop100">
                                    I’m thrilled with my bathroom remodel! The team was professional and full of great ideas. They transformed my outdated space into a beautiful oasis, and the attention to detail was fantastic. I highly recommend their services!
                                </div>
                                <div class="star">

                                </div>
                            </div>
                        </div>
                        <div class="p-15">
                            <div class="itemTestimonial">
                                <div class="header p-15">
                                    <div class="name">
                                        Liam Bennett
                                    </div>
                                    <div class="work">
                                        Interior Painting 
                                    </div>
                                </div>
                                <div class="body p-15 p-sticyTop100">
                                    I recently had my interior painted, and the results exceeded my expectations! The team was attentive to detail and worked quickly without compromising quality. My home feels renewed and vibrant!
                                </div>
                                <div class="star"></div>
                            </div>
                        </div>
                        <div class="p-15">
                            <div class="itemTestimonial">
                                <div class="header p-15">
                                    <div class="name">
                                        Isabella Reed
                                    </div>
                                    <div class="work">
                                        Kitchen Remodeling 
                                    </div>
                                </div>
                                <div class="body p-15 p-sticyTop100">
                                    I couldn't be happier with my kitchen remodel! The team was professional and truly listened to my ideas. They created a stunning, functional space that perfectly fits my style. Cooking has become a joy again!
                                </div>
                                <div class="star"></div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
            {{-- <div class="w-100">
                <div class="buttons_container">
                    <div class="buttons_for_book p-30">
                        <button id="flip-page-back"><i class="feather feather-arrow-left"></i></button>
                        <button id="flip-page"><i class="feather feather-arrow-right"></i></button>
                    </div>
                </div>
                <div class="container text-center d-flex flex-column justify-content-center" style="height: 100vh">
                    <div class="book d-flex ">
                        <div class="w-100">
        
                        </div>
                        <div class="pages w-100">
                            <div class="first">
                                <div class="cover" id="cover">
                                    <div class="logo">
                                        <img src="just-logo-removebg-preview.png" alt="logo">
                                    </div>
                                    <div class="bookTitle">
                                        <h1>studio abm builders Services</h1>
                                    </div>
                                </div>
                                <div class="coverback" id="coverback">
                                    <img src="services/remodeling.jpg" alt="logo">
                                </div>
                            </div>
                            <div class="page_book">
                                <div class="side2">
                                    <div class="description">
                                        <h1>Kittchen Remodeling</h1>
                                    </div>
                                </div>
                            </div>
        
                            <div class="page_book">
                                <div class="side2">
                                    <img src="services/Electrical.jpeg" alt="logo">
                                </div>
                            </div>
        
                            
                            <div class="page_book">
                                <div class="side2">
                                    <div class="description">
                                        <h1>Electrical</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <img src="services/Plumbing.jpeg" alt="logo">
                                </div>
                            </div>

                                <div class="page_book">
                                <div class="side2">
                                    <div class="description">
                                        <h1>Plumbing</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <img src="services/flooring.png" alt="logo">
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <div class="description">
                                        <h1>Flooring</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <img src="services/Drywall.jpg" alt="logo">
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <div class="description">
                                        <h1>Drywall</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <img src="services/Backsplash.webp" alt="logo">
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <div class="description">
                                        <h1>Backsplash</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <img src="services/Countertops.png" alt="logo">
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <div class="description">
                                        <h1>Counter tops</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <img src="services/closets.jpg" alt="logo">
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <div class="description">
                                        <h1>Closets</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <img src="services/InteriorPainting.jpg" alt="logo">
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <div class="description">
                                        <h1>Interior painting</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <img src="services/tails.jpg" alt="logo">
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <div class="description">
                                        <h1>Tails</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="page_book">
                                <div class="side2">
                                    <img src="services/tails.jpg" alt="logo">
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div> --}}
        </div> 
    </div>


    <div class="frontLast text-center p-30" style="">
        <small class="color-w slide_title">ABM STUDIO Contact</small>
        <div class="iphoneContainer">    
            {{-- <div class="iponemodel" style="height: 100vh; width:100vw; position:absolute; z-index:99"> --}}
                
            </div>
            <div class="frontlast text-center p-30">
                
                <div class="container h-100">
                    <div class="titleforslide d-flex flex-column justify-content-center align-items-center">
                        <div class="titletext color-w">
                            LET’S BUILD THE
                            NEW ERA OF KITCHEN
                            DESIGN TOGETHER.
                        </div>
                    </div>
                    <div class="contact_form">
                        <div class="row h-100">
                            <div class="col-7 h-100  d-flex flex-column justify-content-center p-0">
                                <div class="contactFirst p-30">
                                    <h3>Get in touch</h3>
                                    <form action={{url('/submitForm')}} method="POST">
                                        @csrf
                                        <input type="text" name="form_name" class="form-control d-none" value="FrontContact">
                                        <div class="slidecontent">
                                            <div class="input-group mb-3">
                                                <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="number" name="phone" class="form-control" placeholder="Phone" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            
                                            <div class="input-group">
                                                <textarea class="form-control" name="message" placeholder="Message" aria-label="With textarea"></textarea>
                                            </div>
                                            <button type="submit" class="w-100 btn btn-info mb-3 mt-3">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-5 p-0">
                                <div class="contactSecond d-flex flex-column justify-content-center p-30 color-w">
                                    <h3>Contact Us</h3>
                                    <div class="contactItems">
                                        <div class="contactItem p-15 d-flex">
                                            <div class="w-50px h-50px bg">
                                                <i class="feather feather-map-pin h-100 d-flex justify-content-center align-items-center"></i>
                                            </div>
                                            <div class="contact_item_header_text"><b>Address:</b> 7040 Garden Grove Ave, Reseda, CA, 91335 </div>
                                        </div>

                                        <div class="contactItem p-15 d-flex">
                                            <div class="w-50px h-50px bg">
                                                <i class="feather feather-phone h-100 d-flex justify-content-center align-items-center"></i>
                                            </div>
                                            <div class="contact_item_header_text"><b>Phone:</b> +18189304127</div>
                                        </div>

                                        <div class="contactItem p-15 d-flex">
                                            <div class="w-50px h-50px bg">
                                                <i class="feather feather-phone h-100 d-flex justify-content-center align-items-center"></i>
                                            </div>
                                            <div class="contact_item_header_text"><b>Email:</b>info@studioabmbuilder.com</div>
                                        </div>

                                        <div class="contactItem p-15 d-flex">
                                            <div class="w-50px h-50px bg">
                                                <i class="feather feather-instagram h-100 d-flex justify-content-center align-items-center"></i>
                                            </div>
                                            <div class="contact_item_header_text"><b>Instagram:</b>studioabm_builders</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    
</div>













<script>
    let divs = document.querySelectorAll('.page_book');
    for(let i = 0; i < divs.length-1; i++){
        divs[i].style.zIndex = divs.length - i;
    }
</script>
<script type="importmap">
    {
        "imports": {
            "three": "https://cdn.jsdelivr.net/npm/three@v0.119.1/build/three.module.js",
            "three/addons": "https://cdn.jsdelivr.net/npm/three@v0.149.0/examples/jsm/"
        }
    }
</script>
<script src="assets/js/three.js" type="module" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="assets/js/gsap.js" type="module" defer></script>
@endsection

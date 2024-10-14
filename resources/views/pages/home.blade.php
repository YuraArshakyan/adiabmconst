@extends('layout.index')
@section('title', 'Home')
@section('content')

@php
    use App\Models\config;

    $FrontEmail = config::where('key','FrontEmail')->get('value');

    $FrontPhone = config::where('key','FrontPhone')->get();

    $FacebookLink = config::where('key','FacebookLink')->get();

    $InstagramLink = config::where('key','InstagramLink')->get();

    $workingHoursFront = config::where('key','workingHoursFront')->get();

@endphp
    
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
            <span class="firstline text_Dosis500">A<span class="p-30">B</span>M</span>
            <span class="slogon text_Dosis300">
                Create art in your kitchen
            </span>
        </div>
        <div class="name d-flex flex-column justify-content-center">
            <span class="slogon p-15 text_Dosis400">
                At ABM Studio Builders, we specialize in creating beautiful, functional kitchens tailored to your lifestyle. Our team is dedicated to bringing your vision to life with quality craftsmanship and innovative designs. Transform your culinary space into the heart of your home with ABM Studio!
            </span>
        </div>
        <div class="company_layer_for_animation"></div>
    </div>
    
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
    <small class="text_Dosis300">WELCOME TO ABM STUDIO</small>
        <div class="container p-30">
            <div class="titleforslide d-flex justify-content-center align-items-center">
                <div class="titletext text_Dosis500 start_text">
                    DISCOVER THE ART OF KITCHEN CRAFTSMANSHIP, DESIGNED AND BUILT FOR YOUR LIFESTYLE.
                </div>
            </div>
        </div>
        <div class="fixed_container_for_img position-absolute">
            <img src="2slide_scale.jpg" class="image image_intro">
            
            <div class="slidecontent">
               {{-- <div class="cube"></div> --}}
            </div>
        </div>
    </div>
</div>
<script>
    let scale =2;
    let clip = 40;
    let top_position = 25;
    let windows;
    let reached= false;
    let code_done_count = 0;
    var distance = $('.frontSecond').offset().top,
    $window = $(window);
    $window.on('scroll', function(e) {
        if(code_done_count == 0){
            windows = $window.scrollTop();
            if ($window.scrollTop() >= distance) {
                console.log('distance');
                    code_done_count = 1;
                    $window.scrollTop(distance);
                
                reached = true;            
            }
        }
       
    });    

    const element = document.querySelector('.frontSecond');
    const el = document.querySelector('.image_intro');
    if(distance > 670){
        if (window.screen.width >= 1024){
            
            element.addEventListener('wheel', function(e){
                let top_move = document.querySelector('.fixed_container_for_img ');
                if(reached){
                    console.log('distance1');
                    $window.scrollTop(distance);
                    e.preventDefault();
                }
                if (e.deltaY > 0) {
                    if(top_position != 0){
                        top_position -= 2;
                    } 

                    if(top_position > 0){
                        top_position = 0;
                    }

                    if (clip > 0 && top_position == 0) {
                        clip -= 2;
                    }

                    if(top_position == 0 && clip == 0){
                        reached = false;
                    }
                } else {
                    if(top_position != 25){
                        top_position += 2;
                    }

                    if(top_position > 25){
                        top_position = 25;
                    }

                    if (clip < 40 && top_position == 25) {
                        clip += 2;
                    }

                    
                }
                

                top_move.style.top = `${top_position}%`;
                el.style.clipPath = `inset(${clip}%)`;

                

            });

        }else{
            element.addEventListener('touchmove', function(e) {

                let top_move = document.querySelector('.fixed_container_for_img ');
                const touch = e.touches[0]; // Get the first touch point
                const deltaY = touch.clientY - (this.lastTouchY || touch.clientY); // Calculate the change in Y position
                this.lastTouchY = touch.clientY; // Update the last touch Y position

                if (deltaY < 0) {
                    if(top_position != 0){
                        top_position -= 2;
                    } 

                    if(top_position > 0){
                        top_position = 0;
                    }

                    if (clip > 0 && top_position == 0) {
                        clip -= 2;
                    }
                } else {
                    if(top_position != 25){
                        top_position += 2;
                    }

                    if(top_position > 25){
                        top_position = 25;
                    }

                    if (clip < 40 && top_position == 25) {
                        clip += 2;
                    }
                }
                top_move.style.top = `${top_position}%`;
                el.style.clipPath = `inset(${clip}%)`;
            });
        }
    }

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
    <div class="frontTirth text-center p-30 pb-0 pt-10" id="aboutUsScrollId">
        <small class="color-w slide_title text_Dosis300">WHO WE ARE?</small>
        <div class="container pt-10">
            <div class="titleforslide d-flex flex-column justify-content-center align-items-center">
                <div class="titletext text_models color-w text_Dosis300">
                    Studio ABM is a leading kitchen design company that is committed to creating functional and beautiful kitchens for our clients. We
                    understand that a kitchen is more than just a place to cook and eat, it’s the heart of the home where memories are made and
                    cherished. That’s why we take great care in designing kitchens that are not only aesthetically pleasing, but also highly functional and efficient.
                    Our team of talented designers and skilled craftsmen work closely with each client to understand their unique needs and tastes and create a
                    customized kitchen design that is tailored to their lifestyle. With a focus on quality, attention to detail and customer satisfaction, Studio ABM
                    is the trusted choice for all your kitchen design needs.<b>Let’s create the kitchen of your dreams together!</b>
                </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 p-15">
                                <div class="card card_model bg_img1">
                                    <div class="card-body card_model_body">
                                        <div class="text_for_model_card position-absolute p-15">
                                            <h1 class="text_Dosis600 text_front_card">Temple city</h1>
                                            <p class="text_Dosis300 t-start f-size-13">
                                                This style combines traditional charm with modern convenience. It features classic cabinetry, warm wood tones, and inviting color palettes. Open spaces are enhanced with practical layouts, often including cozy breakfast nooks and functional islands. Decorative details like tile backsplashes and vintage-inspired fixtures bring a touch of character, creating a welcoming atmosphere perfect for family gatherings.
                                            <p>
                                        </div>
                                        <img src="styles/Temple_city.webp" class="model_img" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8  col-md-12 col-sm-12 p-15">
                                <div class="card card_model bg_img1">
                                    <div class="card-body card_model_body">
                                        <div class="text_for_model_card position-absolute p-15">
                                            <h1 class="text_Dosis600 text_front_card t-start">Europian style</h1>
                                            <p class="text_Dosis300 t-start f-size-13">
                                                Characterized by elegant cabinetry and natural stone countertops, this style features warm, inviting colors and ornate details. Decorative accents like wrought iron and intricate tile work add charm, creating a sophisticated yet cozy atmosphere.
                                            <p>
                                        </div>
                                        <img src="styles/Europian_style.webp" class="model_img" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4  col-md-12 col-sm-12 p-15">
                                <div class="card card_model bg_img1">
                                    <div class="card-body card_model_body">
                                        <div class="text_for_model_card position-absolute p-15">
                                            <h1 class="text_Dosis600 text_front_card t-start">culver city</h1>
                                            <p class="text_Dosis300 t-start f-size-13">
                                                This style blends mid-century modern aesthetics with contemporary elements. It features clean lines, vibrant colors, and a mix of natural materials. Open layouts and large windows create a bright, airy feel, while stylish fixtures and unique tile patterns add a touch of artistic flair, reflecting the creative spirit of the area.
                                            <p>
                                        </div>
                                        
                                        <img src="styles/culver_city.webp" class="model_img" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4  col-md-12 col-sm-12 p-15">
                                <div class="card card_model bg_img1">
                                    <div class="card-body card_model_body">
                                        <div class="text_for_model_card position-absolute p-15">
                                            <h1 class="text_Dosis600 text_front_card t-start">Traditional</h1>
                                            <p class="text_Dosis300 t-start f-size-13">
                                                Features classic designs with ornate details, raised panel cabinetry, and a warm color palette. Often includes decorative molding and elegant finishes
                                            <p>
                                        </div>
                                        <img src="styles/Traditional.webp" class="model_img" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8  col-md-12 col-sm-12 p-15">
                                <div class="card card_model bg_img1">
                                    <div class="card-body card_model_body">
                                        <div class="text_for_model_card position-absolute p-15">
                                            <h1 class="text_Dosis600 text_front_card">Modern</h1>
                                            <p class="text_Dosis300 f-size-13">
                                                Characterized by clean lines, minimalist design, and a neutral color palette. Stainless steel appliances and sleek cabinetry are common.
                                            <p>
                                        </div>
                                        <img src="styles/Modern.webp" class="model_img" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7  col-md-12 col-sm-12 p-15">
                                <div class="card card_model bg_img1">
                                    <div class="card-body card_model_body">
                                        <div class="text_for_model_card position-absolute p-15">
                                            <h1 class="text_Dosis600 text_front_card">Transitional</h1>
                                            <p class="text_Dosis300 f-size-13">
                                                A blend of traditional and contemporary styles, it balances classic elements with modern touches for a timeless look.
                                            <p>
                                        </div>
                                        <img src="styles/Transitional.webp" class="model_img" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5  col-md-12 col-sm-12 p-15">
                                <div class="card card_model bg_img1">
                                    <div class="card-body card_model_body">
                                        <div class="text_for_model_card position-absolute p-15">
                                            <h1 class="text_Dosis600 text_front_card t-start">Rustic</h1>
                                            <p class="text_Dosis300 t-start f-size-13">
                                                This style emphasizes natural materials and a cozy, homey feel. It often features reclaimed wood, stone countertops, and earthy colors. Open shelving and vintage accents enhance its charm, creating a warm and inviting atmosphere.
                                            <p>
                                        </div>
                                        <img src="styles/Rustic.webp" class="model_img" alt="">
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
    <div class="frontForth text-center p-30 pt-0" style="">
        <small class="color-w slide_title text_Dosis300">Our current projects</small>
        <div class="Slide_4_Three_animation d-flex container">
            <div class="titleexplanation d-flex flex-column justify-content-center color-w">
                <div class="text_cube text_Dosis300">
                    STUDIO ABM <img class="cube" src="slide4/1.jpg">
                    is on a 
                    mission to transform kitchens <img class="cube" src="slide4/2.jpg"> into the 
                    heart <img class="cube" src="slide4/3.jpeg"> of every home.
                </div>
            </div>
            <div class="projects" style=" width: 50%; height: 60vh;/* position: fixed; */top: 0;z-index: 99;" >
            </div>
        </div>
        <div class="container" style="">
            {{-- <div class="threeTest"> --}}
        </div>
    </div>


    
    <div class="frontFifth text-center p-30 pb-10" style="">
        <small class="color-w slide_title text_Dosis300">What We Provide?</small>
        <div class="slidecontent pt-10">
            <div class="w-100 d-flex justify-content-center align-items-center">
                <div class="buttons_container">
                    <div class="buttons_for_book p-30">
                        <button id="flip-page-back"><i class="feather feather-arrow-left"></i></button>
                        <button id="flip-page"><i class="feather feather-arrow-right"></i></button>
                    </div>
                </div>
                <div class="container text-center d-flex flex-column justify-content-center">
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

            };
        });
    </script>
    <div class="frontSixth overflow-hidden text-center p-30 pt-0 pb-10" style="">
        <small class="color-w slide_title text_Dosis300">what our customers says about us</small>
        <div class="slidecontent pt-10">
            {{-- <div class="iponemodel" style="height: 100vh; z-index:99"> --}}
                <div class="leftTestimonial">
                    <div class="testimonial">
                        <div class="p-15 pt-0">
                            <div class="itemTestimonial btlr-45-bbrr-45">
                                <div class="header p-15 text_Dosis300">
                                    <div class="name">
                                        Sophia Brooks
                                    </div>
                                    <div class="work text_Dosis300">
                                        Bathrook Remodeling
                                    </div>
                                </div>
                                <div class="body p-15 p-sticyTop100 text_Dosis300">
                                    I’m thrilled with my bathroom remodel! The team was professional and full of great ideas. They transformed my outdated space into a beautiful oasis, and the attention to detail was fantastic. I highly recommend their services!
                                </div>
                                <div class="star">

                                </div>
                            </div>
                        </div>
                        <div class="p-15 pt-0">
                            <div class="itemTestimonial btrr-45-bblr-45">
                                <div class="header p-15 text_Dosis300">
                                    <div class="name text_Dosis300">
                                        Liam Bennett
                                    </div>
                                    <div class="work text_Dosis300">
                                        Interior Painting 
                                    </div>
                                </div>
                                <div class="body p-15 p-sticyTop100 text_Dosis300">
                                    I recently had my interior painted, and the results exceeded my expectations! The team was attentive to detail and worked quickly without compromising quality. My home feels renewed and vibrant!
                                </div>
                                <div class="star"></div>
                            </div>
                        </div>
                        <div class="p-15 pt-0">
                            <div class="itemTestimonial btlr-45-bbrr-45">
                                <div class="header p-15">
                                    <div class="name text_Dosis300">
                                        Isabella Reed
                                    </div>
                                    <div class="work text_Dosis300">
                                        Kitchen Remodeling 
                                    </div>
                                </div>
                                <div class="body p-15 p-sticyTop100 text_Dosis300">
                                    I couldn't be happier with my kitchen remodel! The team was professional and truly listened to my ideas. They created a stunning, functional space that perfectly fits my style. Cooking has become a joy again!
                                </div>
                                <div class="star"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rightTestimonial">
                    <div class="testimonial ">
                        <div class="p-15 pb-0">
                            <div class="itemTestimonial btrr-45-bblr-45">
                                <div class="header p-15">
                                    <div class="name text_Dosis300">
                                        Ethan Reynolds
                                    </div>
                                    <div class="work text_Dosis300">
                                        Bathrook Remodeling
                                    </div>
                                </div>
                                <div class="body p-15 p-sticyTop100 text_Dosis300">
                                    I’m thrilled with my bathroom remodel! The team was professional and full of great ideas. They transformed my outdated space into a beautiful oasis, and the attention to detail was fantastic. I highly recommend their services!
                                </div>
                                <div class="star">

                                </div>
                            </div>
                        </div>
                        <div class="p-15 pb-0">
                            <div class="itemTestimonial btlr-45-bbrr-45">
                                <div class="header p-15">
                                    <div class="name text_Dosis300">
                                        Elijah Scott
                                    </div>
                                    <div class="work text_Dosis300">
                                        Kitchen Remodeling 
                                    </div>
                                </div>
                                <div class="body p-15 p-sticyTop100 text_Dosis300">
                                    I recently had my interior painted, and the results exceeded my expectations! The team was attentive to detail and worked quickly without compromising quality. My home feels renewed and vibrant!
                                </div>
                                <div class="star"></div>
                            </div>
                        </div>
                        <div class="p-15 pb-0">
                            <div class="itemTestimonial btrr-45-bblr-45">
                                <div class="header p-15">
                                    <div class="name text_Dosis300">
                                        Liam Carter
                                    </div>
                                    <div class="work text_Dosis300">
                                        Kitchen Remodeling 
                                    </div>
                                </div>
                                <div class="body p-15 p-sticyTop100 text_Dosis300">
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


    <div class="frontLast text-center p-30 pt-0" id="ContactsScrollTo">
        <div class="iphoneContainer">  
            <small class="color-w slide_title text_Dosis300">STUDIO ABM Builders Contacts</small>  
            {{-- <div class="iponemodel" style="height: 100vh; width:100vw; position:absolute; z-index:99"> --}}
                
            </div>
            <div class="frontlast text-center pt-10">
                
                <div class="container h-100">
                    <div class="titleforslide d-flex flex-column justify-content-center align-items-center">
                        <div class="titletext color-w text_Dosis400">
                            LET’S BUILD THE
                            NEW ERA OF KITCHEN
                            DESIGN TOGETHER.
                        </div>
                    </div>
                    <div class="contact_form">
                        <div class="row h-100">
                            <div class="col-lg-7 col-md-12 col-sm-12 h-100  d-flex flex-column justify-content-center p-0">
                                <div class="contactFirst p-30">
                                    <h3 class="text_Dosis500">Get in touch</h3>
                                    <input type="text" name="form_name" class="form-control d-none" value="FrontContact">
                                    <div class="slidecontent">
                                        <div class="input-group mb-3">
                                            <input required type="text" name="name" class="contactsName form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input required type="number" name="phone" class="contactsPhone form-control" placeholder="Phone" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input required type="email" name="email" class="contactsEmail form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        
                                        <div class="input-group">
                                            <textarea class="contactsMessage form-control mh-263" name="message" placeholder="Message" aria-label="With textarea"></textarea>
                                        </div>
                                        <button type="button" class="w-100 btn btn-info mb-3 mt-3 formContacts">Submit</button>
                                        <div class="status">
                                            <div class="ContactsFormSuccess success d-none">
                                                We will contact you soon!
                                            </div>
                                            <div class="ContactsFormDeny deny d-none">
                                                Error
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12 col-sm-12 p-0">
                                <div class="contactSecond d-flex flex-column justify-content-center p-30 color-w">
                                    <h3 class="text_Dosis500">Contact Us</h3>
                                    <div class="contactItems">
                                        <div class="contactItem p-15 d-flex">
                                            <div class="w-50px h-50px bg">
                                                <i class=" w-50px feather feather-map-pin h-100 d-flex justify-content-center align-items-center"></i>
                                            </div>
                                            <div class="contact_item_header_text "><span class="d-flex align-items-center h-100 text_Dosis300"><b class="hide_for_mobile pr-1 text_Dosis600">Address:</b> 7040 Garden Grove Ave, Reseda, CA, 91335 </span></div>
                                        </div>

                                        <div class="contactItem p-15 d-flex">
                                            <div class="w-50px h-50px bg">
                                                <i class=" w-50px feather feather-phone h-100 d-flex justify-content-center align-items-center"></i>
                                            </div>
                                            <div class="contact_item_header_text"><span class="d-flex align-items-center h-100 text_Dosis300"><b class="hide_for_mobile pr-1 text_Dosis600">Phone:</b> {!! $FrontPhone[0]->value !!}</span></div>
                                        </div>

                                        <div class="contactItem p-15 d-flex">
                                            <div class="w-50px h-50px bg">
                                                <i class=" w-50px feather feather-mail h-100 d-flex justify-content-center align-items-center"></i>
                                            </div>
                                            <div class="contact_item_header_text"><span class="d-flex align-items-center h-100 text_Dosis300"><b class="hide_for_mobile pr-1 text_Dosis600">Email:</b>{!! $FrontEmail[0]->value !!}</span></div>
                                        </div>

                                        <div class="contactItem p-15 d-flex">
                                            <div class="w-50px h-50px bg">
                                                <i class=" w-50px feather feather-clock h-100 d-flex justify-content-center align-items-center"></i>
                                            </div>
                                            <div class="contact_item_header_text"><span class="d-flex align-items-center h-100 text_Dosis300"><b class="hide_for_mobile pr-1 text_Dosis600">Email:</b>{!! $workingHoursFront[0]->value !!}</span></div>
                                        </div>

                                        <div class="contactItem p-15 d-flex">
                                            <div class="w-50px h-50px bg">
                                                <i class=" w-50px feather feather-instagram h-100 d-flex justify-content-center align-items-center"></i>
                                            </div>
                                            <div class="contact_item_header_text"><span class="d-flex align-items-center h-100 text_Dosis300"><b class="hide_for_mobile pr-1 text_Dosis600">Instagram:</b>studioabm_builders</span></div>
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
    $(document).ready(function(){
        let get_button_listener_formContacts = document.querySelector('.formContacts');
        let success_contacts = document.querySelector('.ContactsFormSuccess');
        let error_contacts = document.querySelector('.ContactsFormDeny');
        
        $(get_button_listener_formContacts).on('click', function(){
            if(!success_contacts.classList.contains('d-none')){
                success_contacts.classList.add('d-none');
            }
            if(!error_contacts.classList.contains('d-none')){
                error_contacts.classList.add('d-none');
            }
            let name = document.querySelector('.contactsName').value;
            let email = document.querySelector('.contactsEmail').value;
            let phone = document.querySelector('.contactsPhone').value;
            let message = document.querySelector('.contactsMessage').value;

            if(name == null || email == null || phone == null || message == null){
                if(error_contacts.classList.contains('d-none')){
                    error_contacts.classList.remove('d-none');
                    setInterval(hide, 5000);
                    function hide(){
                        error_contacts.classList.add('d-none');
                    }
                }
            }else{
                $.ajax({
                    type: "POST",
                    headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
                    url: "/submitForm",
                    data: {
                        'name': name,
                        'email': email,
                        'phone': phone,
                        'message': message,
                        'form_name': 'Contacts'
                    },
                    success: function(response){
                        if(response.status == "success"){
                            if(success_contacts.classList.contains('d-none')){
                                success_contacts.classList.remove('d-none');

                                setInterval(hide, 5000);
                                function hide(){
                                    success_contacts.classList.add('d-none');
                                }
                            }
                        }else{
                            if(error_contacts.classList.contains('d-none')){
                                error_contacts.classList.remove('d-none');
                                setInterval(hide, 5000);
                                function hide(){
                                    error_contacts.classList.add('d-none');
                                }
                            }
                        }
                    }
                })
            }
        })                            
    });
</script>









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

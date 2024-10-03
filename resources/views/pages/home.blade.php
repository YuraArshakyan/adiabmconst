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
    <div class="frontsecond_content">
    <small>WELCOME TO ABM STUDIO</small>
        <div class="container p-30">
            <div class="titleforslide d-flex justify-content-center align-items-center">
                <div class="titletext">
                    DISCOVER THE ART OF KITCHEN CRAFTSMANSHIP, DESIGNED AND BUILT FOR YOUR LIFESTYLE.
                </div>
            </div>
        </div>
        <div class="fixed_container_for_img top-0 position-absolute">
            <div class="slidecontent">
                <img src="contact.jpg" class="image image_intro br-20">
            </div>
        </div>
    </div>
</div>
<script>
    let scale = 0.3;
    let windows;
    var distance = $('.frontSecond').offset().top,
    $window = $(window);
    $window.on('wheel', function(e) {
        console.log(distance);
        windows = $window.scrollTop();
        if ($window.scrollTop() >= distance) {
            // $window.scrollTop(distance)
            
        }
    });

    const element = document.querySelector('.frontSecond');
    const el = document.querySelector('.image_intro');
    
    element.addEventListener('wheel', function(e){
        if(e.deltaY > 0){
            if(scale != 1){
                scale += scale + 0.05;
                if(scale > 1){
                    scale = 1;
                }                    
                if(scale == 1){
                    // scrollDisabled = false;
                    el.style = `border-radius: 0; height:100vh`;
                }
            }
            el.style.transform = `scale(${scale})`;
            // e.preventDefault();
        }else{
            console.log('stop');

            if(scale != 0.3){
                scale = 0.3
            }
            el.style.transform = `scale(${scale})`;
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
        border-radius: .25rem;
        width: 100%;
        height: 100%;
    }
    .text_for_model_card{}
</style>
<div class="other">    
    <div class="frontTirth text-center p-30" style="">
        <small class="color-w">WHO WE ARE?</small>
        <div class="container" style="">
            <div class="titleforslide d-flex flex-column justify-content-center align-items-center">
                <div class="titletext text_before_animation color-w">
                    Welcome to STUDIO ABM BUILDERS Inc.! We specialize in kitchen remodeling, transforming spaces into beautiful, functional areas that reflect your style. With years of experience, our skilled team combines innovative design and quality craftsmanship to bring your vision to life.
                    At STUDIO ABM BUILDERS, we believe the kitchen is the heart of the home. We prioritize customer satisfaction through clear communication and meticulous execution, making your remodeling journey seamless and enjoyable.
                    <b>Discover our models and choose your perfect design!</b> Let’s create the kitchen of your dreams together
                </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-15">
                                <div class="card card_model bg_img1">
                                    <div class="card-body card_model_body">
                                        <div class="text_for_model_card position-absolute p-15">
                                            <h1>Old Style</h1>
                                        </div>
                                        <img src="styles/1405446421782.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 p-15">
                                <div class="card card_model bg_img1">
                                    <div class="card-body card_model_body">
                                        <div class="text_for_model_card position-absolute p-15">
                                            <h1>Old Style</h1>
                                        </div>
                                        <img src="styles/1495149887363.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 p-15">
                                <div class="card card_model bg_img1">
                                    <div class="card-body card_model_body">
                                        <div class="text_for_model_card position-absolute p-15">
                                            <h1>Old Style</h1>
                                        </div>
                                        <img src="styles/1549664897706.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 p-15">
                                <div class="card card_model bg_img1">
                                    <div class="card-body card_model_body">
                                        <div class="text_for_model_card position-absolute p-15">
                                            <h1>Old Style</h1>
                                        </div>
                                        <img src="styles/1592932554591.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 p-15">
                                <div class="card card_model bg_img1">
                                    <div class="card-body card_model_body">
                                        <div class="text_for_model_card position-absolute p-15">
                                            <h1>Old Style</h1>
                                        </div>
                                        <img src="styles/1625682166094.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-7 p-15">
                                <div class="card card_model bg_img1">
                                    <div class="card-body card_model_body">
                                        <div class="text_for_model_card position-absolute p-15">
                                            <h1>Old Style</h1>
                                        </div>
                                        <img src="styles/1657576773385.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 p-15">
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
                    <div class="projects" style="
                        width: 100vw;
                        height: 100vh;
                        /* position: fixed; */
                        top: 0;
                        z-index: 99;
                    " >
                    
                    </div>
                    <div class="threeTest">
                </div>
                <div class="titleexplanation color-w">
                    STUDIO ABM is on a 
                    mission to transform kitchens into the 
                    heart of every home.
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
            <div class="slidecontent" >
                <style>
                    .pages{
                        position: relative;
                        width: 48%;
                    }
                    .page_book{
                        z-index: -1;
                        position: absolute;
                        top: 0;
                        display: flex;
                        width: 100%;
                        height: 100%;
                        background: white
                    }
                    .side1{
                        flex-direction: column;
                        justify-content: center;
                        display: flex;
                        width: 50%;
                        height: 100%;
                    }
                    .side1 .item{
                        padding: 0 !important;
                    }
                    .side1 .item img{
                        width: 100%;
                    }
                    .side2{
                        flex-direction: column;
                        justify-content: center;
                        display: flex;
                        width: 100%;
                        height: 100%;
                    }
                    .cover{
                        z-index: 1;
                        position: relative;
                        background-color: #626262;
                        color: white;
                        text-transform: uppercase;
                        padding: 60px;
                    }
                    .bookTitle{
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                        align-items: center;
                        padding: 260px 0;
                    }
                    .bookTitle h1{
                        text-align: center;
                        width: min-content;
                    }
                    .book .pages .cover .logo img{
                        width: 170px !important;
                    }
                    .coverback{
                        top: 0;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        background: black;
                    }
                    .first{
                        position: relative;
                        z-index: 99;
                    }
                </style>
                <div class="w-100">
                    <div class="buttons_container">
                        <div class="buttons_for_book p-30">
                            <button id="flip-page-back"><i class="feather feather-arrow-left"></i></button>
                            <button id="flip-page"><i class="feather feather-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="container text-center d-flex flex-column justify-content-center" style="height: 100vh">
                        <p>What we provide?</p>
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
                                            <h1>studio abm builders</h1>
                                        </div>
                                    </div>
                                    <div class="coverback" id="coverback">
                                        <img src="just-logo-removebg-preview.png" alt="logo">
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
                                        <img src="just-logo-removebg-preview.png" alt="logo">
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
                                        <img src="form-contact-right.jpg" alt="logo">
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
                                        <img src="just-logo-removebg-preview.png" alt="logo">
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
                                        <img src="just-logo-removebg-preview.png" alt="logo">
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
                                        <img src="just-logo-removebg-preview.png" alt="logo">
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
                                        <img src="just-logo-removebg-preview.png" alt="logo">
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
                                        <img src="just-logo-removebg-preview.png" alt="logo">
                                    </div>
                                </div>

                                <div class="page_book">
                                    <div class="side2">
                                        <div class="description">
                                            <h1>Clousets</h1>
                                        </div>
                                    </div>
                                </div>

                                <div class="page_book">
                                    <div class="side2">
                                        <img src="just-logo-removebg-preview.png" alt="logo">
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
                                        <img src="just-logo-removebg-preview.png" alt="logo">
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
                                        <img src="just-logo-removebg-preview.png" alt="logo">
                                    </div>
                                </div> 

                            </div>
                        </div>
                        
                        {{-- <div class="line">
                            
                            <div class="item">
                                <div class="in_circle_icone">
                                    <i class="feather feather-instagram"></i>
                                </div>
                                <div class="description">
                                    <p>kitchen Remodeling</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="in_circle_icone">
                                    <i class="feather feather-instagram"></i>
                                </div>
                                <div class="description">
                                    <p>Bathroom Remodeling</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="in_circle_icone">
                                    <i class="feather feather-instagram"></i>
                                </div>
                                <div class="description">
                                    <p>Electrical</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="in_circle_icone">
                                    <i class="feather feather-instagram"></i>
                                </div>
                                <div class="description">
                                    <p>Plumbing</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="in_circle_icone">
                                    <i class="feather feather-instagram"></i>
                                </div>
                                <div class="description">
                                    <p>Flooring</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="in_circle_icone">
                                    <i class="feather feather-instagram"></i>
                                </div>
                                <div class="description">
                                    <p>Counter Tops</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="in_circle_icone">
                                    <i class="feather feather-instagram"></i>
                                </div>
                                <div class="description">
                                    <p>Clousets</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="in_circle_icone">
                                    <i class="feather feather-instagram"></i>
                                </div>
                                <div class="description">
                                    <p>Painting Interiors</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="in_circle_icone">
                                    <i class="feather feather-instagram"></i>
                                </div>
                                <div class="description">
                                    <p>Tails</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                {{-- <span class="p-30 contentChoose w-100 d-flex flex-column d-flex flex-column align-items-center">
                    <img src="contact.jpg" class="image br-20" width="300px" style="transform: matrix3d(1, 0, 0, 0.001, 0, 1.1, 0, 0, 0, 0, 1, 0, 470, 0, 0, 1);">
                </span> --}}
                {{-- <span class="p-30 content3 w-100 d-flex flex-column d-flex flex-column align-items-center">
                    <img src="contact.jpg" class="image br-20" width="300px">
                </span>
                <span class="p-30 contentChoose2 w-100 d-flex flex-column d-flex flex-column align-items-center">
                    <img src="contact.jpg" class="image br-20" width="300px">
                </span> --}}
            </div>
        </div>
    </div>
    <div class="iphoneContainer">
        <div class="titleexplanation213 color-w " style="position: absolute; z-index: 1; display: none;">
            STUDIO ABM is on a 
            mission to transform kitchens into the 
            heart of every home.
        </div>

        <div class="iponemodel" style="height: 100vh; width:100vw; position:absolute; z-index:99">
            
        </div>
        <div class="frontlast text-center p-30">
            <small class="color-w">ABM STUDIO</small>
            <div class="container">
                <div class="titleforslide d-flex flex-column justify-content-center align-items-center">
                    <div class="titletext color-w">
                        LET’S BUILD THE
                        NEW ERA OF KITCHEN
                        DESIGN TOGETHER.
                    </div>
                    <div class="titleexplanation color-w">
                        STUDIO ABM is on a 
                        mission to transform kitchens into the 
                        heart of every home.
                    </div>
                </div>
                <div class="slidecontent">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Phone" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    
                    <div class="input-group">
                        <textarea class="form-control" placeholder="Message" aria-label="With textarea"></textarea>
                    </div>
                    <button type="button" class="btn btn-info mb-3 mt-3">Submit</button>
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

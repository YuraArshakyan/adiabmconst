@extends('layout.index')
@section('title', 'Contacts')
@section('content')

    
    
<div class="frontFirst" >
    <div class="frontFirstImg">
        <img src="contact.jpg" class="active">
        <img src="logo.webp" class="deactivated">
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
    $( document ).ready(function() {
        document.querySelector('.company_and_losung').classList.add('animation');
        document.querySelector('.company_layer_for_animation').classList.add('animation');
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
    var scrollDisabled = false;
    $window.on('wheel', function(e) {
        windows = $window.scrollTop();
        if ($window.scrollTop() >= distance && scale != 1) {
            scrollDisabled = true;
            $window.scrollTop(distance)
        }
    });

    const el = document.querySelector('.image_intro');
    
    window.addEventListener('wheel', function(e){
        if(scrollDisabled){
            if(e.deltaY > 0){
                if(scale != 1){
                    if(scale > 1){
                        scale = 1;
                    }else{
                        scale += scale + 0.05;
                    }
                    
                    if(scale == 1){
                        scrollDisabled = false;
                        el.style = `border-radius: 0; height:100vh`;
                    }
                }
                el.style.transform = `scale(${scale})`;

                e.preventDefault();
            }else{
                if(scale != 0.3){
                    e.preventDefault();
                    scrollDisabled = true;
                }
                if(scale > 0.3){
                    scale = scale - 0.05;
                }else{
                    scale = 0.3
                    scrollDisabled = false;
                }
                if(scrollDisabled){
                    e.preventDefault();
                }
                el.style.transform = `scale(${scale})`;
            }
        }
        
        
    }, {passive:false});
</script>

<div class="other">    
    <div class="frontTirth text-center p-30" style="">
        <small class="color-w">WHO WE ARE?</small>
        <div class="container" style="">
            <div class="titleforslide d-flex flex-column justify-content-center align-items-center">
                <div class="titletext color-w">
                    WE’RE CREATING INSPIRING SPACES THAT ELEVATE LIVING
                    AND BRING FAMILIES TOGETHER
                </div>
               
                    <div class="projects" style="
                        width: 100vw;
                        height: 100vh;
                        /* position: fixed; */
                        top: 0;
                        z-index: 999;
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
                let animat_distance = $('.projects').offset().top,
                    $windows = $(window);
            
                    console.log(animat_distance);
                var scrollDisabled_for_animate = false;
                $windows.on('wheel', function(e) {
                    windows = $windows.scrollTop();
                    if ($windows.scrollTop() >= animat_distance) {
                        scrollDisabled_for_animate = true;
                        console.log('reached');
                        $window.scrollTop(animat_distance)
                    }
                });

                window.addEventListener('wheel', function(e){
                    if(scrollDisabled_for_animate){
                        e.preventDefault();
                    }
                }, {passive:false});
            </script>
            <div class="slidecontent" >
                <span class="p-30 content1 w-100 d-flex flex-column d-flex flex-column align-items-center">
                    <img src="contact.jpg" class="image image1 br-20" width="300px" style="">
                </span>
                <span class="p-30 content2 w-100 d-flex flex-column d-flex flex-column align-items-center">
                    <img src="contact.jpg" class="image image2 br-20" width="300px" style="transform: matrix3d(1, 0, 0, 0.001, 0, 1.1, 0, 0, 0, 0, 1, 0, 280, 0, 0, 1);">
                </span>
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
<script type="importmap">
    {
        "imports": {
            "three": "https://cdn.jsdelivr.net/npm/three@v0.149.0/build/three.module.js",
            "/three/addons": "https://cdn.jsdelivr.net/npm/three@v0.149.0/examples/jsm/"
        }
    }
</script>
<script src="assets/js/three.js" type="module" defer></script>
@endsection

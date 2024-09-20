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
            <span class="firstline">ABM</span>
            <span class="slogon">
                Create art in your kitchen
            </span>
        </div>
        <div class="bottom w-100 text-end">
            <span class="secondline">STUDIO</span>
        </div>
    </div>
</div>
<div class="frontSecond text-center">
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
<script>
    function zoom1(event){
        event.preventDefault();
    }
    function zoom(event){
        if(scale != 1 && scale != 0.3){
            event.preventDefault();
        }
        if(event.deltaY > 0){
            scale += scale + 0.05;
            if(scale > 1){
                scale = 1;
            }
        }else{
            if(scale > 0.3){
                scale = scale - 0.05;
            }else{
                scale = 0.3
            }
            
        }
        
        console.log(event.deltaY);
        if(scale == 1){
            el.style = `border-radius: 0`;
        }
        if(scale == 0.3){
            el.style = `border-radius: 20px`;
        }
        el.style.transform = `scale(${scale})`;
    }
    let scale = 0.3;
    const el = document.querySelector('.image_intro');
    const container = document.querySelector('.frontSecond');
    
    // if(scale < 1){
    //     document.container.onwheel = zoom;
    // }
    container.addEventListener('wheel', zoom);
    body.addEventListener('wheel', zoom1);
</script>
<script>
    function zoom(event){
        if(scale != 1 && scale != 0.3){
            event.preventDefault();
        }
        if(event.deltaY > 0){
            scale += scale + 0.05;
            if(scale > 1){
                scale = 1;
            }
        }else{
            if(scale > 0.3){
                scale = scale - 0.05;
            }else{
                scale = 0.3
            }
            
        }
        
        console.log(event.deltaY);
        if(scale == 1){
            el.style = `border-radius: 0`;
        }
        if(scale == 0.3){
            el.style = `border-radius: 20px`;
        }
        el.style.transform = `scale(${scale})`;
    }
    let scale = 0.3;
    const el = document.querySelector('.image1');
    const img1 = document.querySelector('.image1');
    
    // if(scale < 1){
    //     document.container.onwheel = zoom;
    // }
    container.addEventListener('wheel', zoom);
    body.addEventListener('wheel', zoom1);
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
                    position: fixed;
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

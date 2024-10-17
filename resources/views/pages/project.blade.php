@extends('layout.index')
@section('title', 'Projects')
@section('content')

    <img src="projects/sound.gif" alt="sound_button" class="soundbutton">
    <audio class="audio" src="projects/ambient.mp3" loop></audio>
    <div class="slide2 slide projects-portfolio" id="page_content1">
        <div class="container">
            <section class="gallary ">
                <div class="frame">
                    <div class="frame__content ">
                        <h2>studio abm builders</h2>
                    </div>
                </div>

                <div class="frame">
                    <div class="frame__content frame_bg">
                        <div class="frame-media frame-media_left" style="background-image: url('projects/1.jpg')"></div>
                    </div>
                </div>

                <div class="frame"></div>

                <div class="frame">
                    <div class="frame__content text-right">
                        <h3>Europian Style</h3>
                        <p>European-style kitchen design combines sleek, high-quality cabinetry with neutral tones and bold accents. Open layouts connect the kitchen to dining and living areas, promoting social interaction. Durable materials like marble and quartz are used for countertops, often paired with integrated appliances for a streamlined look. Stylish lighting, including pendant fixtures, adds warmth, while backsplashes in tile or stone provide character. Natural flooring materials like hardwood or stone enhance elegance and durability, creating a functional yet inviting space.</p>
                    </div>
                </div>

                <div class="frame"></div>

                <div class="frame ">
                    <div class="frame__content">
                        <div class="frame-media frame-media_right" style="background-image: url('projects/2.jpg')"></div>
                        {{-- <h2>Beautiful World</h2> --}}
                    </div>
                </div>

                <div class="frame"></div>

                <div class="frame frame_bg">
                    <div class="frame__content">
                        <div class="frame-media frame-media_left" style="background-image: url('projects/3.jpg')"></div>
                        {{-- <h2>Beautiful World</h2> --}}
                    </div>
                </div>

                <div class="frame ">
                    <div class="frame__content">
                        <video class="frame-media" src="first.mov" autoplay loop muted></video>
                    </div>
                </div>

            </section>
        </div>
    </div>



    {{-- <div class="slide2 slide projects-portfolio" id="page_content1">
        <div class="container">
            <section class="gallary">
                <div class="frame">
                    <div class="frame__content">
                        <div class="frame-media frame-media_left" style="background-image: url('projects/1.webp')"></div>
                         <h2>ABM STUDO PROJECTS</h2>
                    </div>
                </div>
                <div class="frame frame_bg">
                    <div class="frame-media frame-media_left" style="background-image: url('projects/1.webp')"></div>
                        <h2>ABM STUDO PROJECTS</h2>
                    </div>
                </div>
                <div class="frame frame_bg">
                    <div class="frame-media frame-media_left" style="background-image: url('projects/1.webp')"></div>
                        <h2>ABM STUDO PROJECTS</h2>
                    </div>
                </div>
            </section>
        </div>
    </div> --}}




    {{-- <div class="left">
        <video autoplay muted loop>
            <source src="first.mov">
        </video>
    </div>
    <div class="right">
        <video autoplay muted loop>
            <source src="first.mov">
        </video>
    </div> --}}

    {{-- <div class="slide1 slide active" id="page_content1">
        <div class="main_video_slide_1">
            <video autoplay muted loop>
                <source src="first.mov">
            </video>
        </div>
        <div class="d-grid w-10 devision ">
            <div class = "company ">
                studio abm builders
            </div>
            <div class="border_devision bb-1px-gray">
            </div>
            <div class = "about_text">
                create art in your kitchen
            </div>
        </div>
    </div>
    <div class="slide2 slide" id="page_content1">
        <div class="d-grid w-10 devision">
            <div class = "company ">
                studio abm builders
            </div>
            <div class="border_devision bb-1px-gray">
            </div>
            <div class = "about_text">
                create art in your kitchen
            </div>
        </div>
    </div> --}}
@endsection

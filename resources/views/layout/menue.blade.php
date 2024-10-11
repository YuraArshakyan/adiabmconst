<div class="open_menue ">
    <div class="transparent_bg_menue_header"></div>
    <div class="side_left_menue d-flex flex-column-reverse position-absolute">
        <img src="menue/left/1.jpeg">
        <img src="menue/left/2.jpg">
        <img src="menue/left/3.jpg">
        <img src="menue/left/4.jpeg">
        <img src="menue/left/5.jpg">
    </div>
    <div class="container h-100 d-flex flex-column justify-content-center">
        <div class="company_logo w-100 d-flex align-items-center justify-content-center">
           <img src="just-logo-removebg-preview.png" width="160px" style="position: relative; top: -15px">
        </div>
        <div class="navigation d-flex flex-column align-items-center justify-content-center">
            <div class="nav_item d-flex flex-column justify-content-center align-items-center">
                <div class="transperent_line"></div>
                <a href="/" class="nav">
                    Home
                </a>
                <div class="transperent_line"></div>
            </div>
            

            <div class="nav_item d-flex flex-column justify-content-center align-items-center">
                <div class="transperent_line"></div>
                <a href="#" class="nav" id="Contacts">
                    Contacts
                </a>
                <div class="transperent_line"></div>
            </div>
            
            <div class="nav_item d-flex flex-column justify-content-center align-items-center">
                <div class="transperent_line"></div>
                <a href="#" class="nav" id="AboutUs">
                    About Us
                </a>
                <div class="transperent_line"></div>
            </div>

            <div class="nav_item d-flex flex-column justify-content-center align-items-center">
                <div class="transperent_line"></div>
                <a href={{url('/process')}} class="nav">
                    Process
                </a>
                <div class="transperent_line"></div>
            </div>

            <div class="nav_item d-flex flex-column justify-content-center align-items-center">
                <div class="transperent_line"></div>
                <a href={{"/project"}} class="nav">
                    Projects
                </a>
                <div class="transperent_line"></div>
            </div>
        </div>
    </div>
    <div class="silde_right_menue d-flex flex-column position-absolute">
        <img src="menue/right/1.jpg">
        <img src="menue/right/2.jpg">
        <img src="menue/right/3.jpg">
        <img src="menue/right/4.jpg">
        <img src="menue/right/5.jpeg">
    </div>
</div>
    
        <div class="menue_footer">
            <div class="transperent_line_footer mb-15"></div>
            <div class="contactTextMenue">
                <p><b>Phone: </b>{!! $FrontPhone[0]->value !!}</p>
                <p><b>Working Hours: </b>{!! $workingHoursFront[0]->value !!}</p>
                <p><b>Email: </b>{!! $FrontEmail[0]->value !!}</p>
            </div>
            <div class="menue_icone_footer">
                <a href={!!$InstagramLink[0]->value!!} target="_blank"><i class="feather feather-instagram p-15"></i></a>
                <a href={!!$FacebookLink[0]->value!!}><i class="feather feather-facebook p-15"></i></a>
            </div>
            <div class="transperent_line_footer"></div>
        </div>  
<div class="transparent_bg_menue_footer"></div>


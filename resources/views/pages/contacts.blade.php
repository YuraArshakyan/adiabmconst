@php
    use App\Models\config;

    $FrontEmail = config::where('key','FrontEmail')->get();

    $FrontPhone = config::where('key','FrontPhone')->get();

    $FacebookLink = config::where('key','FacebookLink')->get();

    $InstagramLink = config::where('key','InstagramLink')->get();

    $workingHoursFront = config::where('key','workingHoursFront')->get();
@endphp

@extends('layout.index')
@section('title', 'Contacts')
@section('content')

    <div class="contacts">
        <div class="bg_contacts">
             
        
            <div class="contact_form d-flex flex-column align-items-center">
                <h3 class="text-center p-20 color-w">
                    LET’S BUILD SOMETHING GREAT TOGETHER
                </h3>  
                <div class="container">
                    <div class="card br-15">
                        <div class="card-body p-0">
                            <div class="d-flex">
                                <div class="left-side w-100 d-flex flex-column align-items-center p-30">
                                    <h5 class="card-title">Contact Us</h5>
                                    <form action={{url('/submitForm')}} method="POST">
                                        @csrf
                                        <input type="text" name="form_name" class="form-control d-none" value="ContactContact">
                                        <div class="form__group field">
                                            <input type="input" name="name" class="form__field" placeholder="Name" name="name" id='name' required />
                                            <label  class="form__label">Name</label>
                                        </div>
                                        <div class="form__group field">
                                            <input type="input" name="phone" class="form__field" placeholder="Name" name="name" id='name' required />
                                            <label  class="form__label">Phone</label>
                                        </div>
                                        <div class="form__group field">
                                            <input type="input" name="email" class="form__field" placeholder="Name" name="name" id='name' required />
                                            <label  class="form__label">E-mail</label>
                                        </div>
                                        <div class="form__group field">
                                            <input type="input" name="message" class="form__field" placeholder="Name" name="name" id='name' required />
                                            <label  class="form__label">Message</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                    <div class="social-icone d-flex w-100">
                                        <a href={!!$InstagramLink[0]->value!!} target="_blank"><i class="d-flex justify-content-center feather feather-instagram"></i></a>
                                        <a href={!!$FacebookLink[0]->value!!} target="_blank"><i class="d-flex justify-content-center feather feather-facebook"></i></a>
                                    </div>
                                </div>
                                <div class="rigt-side w-100">
                                    <div class="info h-100 d-flex flex-column justify-content-center p-15">
                                        <div class="map_pin_location d-flex">
                                            <i class="d-flex justify-content-center mb-15 feather feather-map-pin"></i>
                                            <div class="info_bar d-flex flex-column mb-15 ml-10">
                                                <span class="header_for_info_bar">Location:</span>
                                                <span class="text_for_info_bar">7040 Garden Grove Ave, Reseda, CA, 91335</span>
                                            </div>
                                        </div>
                                        <div class="map_pin_location d-flex">
                                            <i class="d-flex justify-content-center mb-15 feather feather-phone"></i>
                                            <div class="info_bar d-flex flex-column justify-content-center mb-15 ml-10">
                                                <span class="header_for_info_bar">Phone:</span>
                                                <span class="text_for_info_bar">(818) 930-4127</span>
                                            </div>
                                        </div>
                                        <div class="map_pin_location d-flex">
                                            <i class="d-flex justify-content-center mb-15 feather feather-at-sign"></i>
                                            <div class="info_bar d-flex flex-column justify-content-center mb-15 ml-10">
                                                <span class="header_for_info_bar">Emial:</span>
                                                <span class="text_for_info_bar">{!! $FrontEmail[0]->value !!}</span>
                                            </div>
                                        </div>
                                        <div class="map_pin_location d-flex">
                                            <i class="d-flex justify-content-center mb-15 feather feather-clock"></i>
                                            <div class="info_bar d-flex flex-column justify-content-center mb-15 ml-10">
                                                <span class="header_for_info_bar">Working Hours:</span>
                                                <span class="text_for_info_bar">{!! $workingHoursFront[0]->value !!}</span>
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
@endsection

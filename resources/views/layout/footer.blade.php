
<footer>
    <div class="footer">        
        <div class="container">
            <div class="sections">
                <div class="section1 d-flex p-15 ">
                    <div class="stage1">
                        <h3>Join our community today!</h3>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control emailUpdates" placeholder="Your email" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary formUpdates" type="button" id="button-addon2">Submit</button>
                        </div>
                        <div class="status">
                            <div class="UpdatesFormSuccess success d-none">
                                Success thank you for your submission
                            </div>
                            <div class="UpdatesFormDeny deny d-none">
                                Error
                            </div>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function(){
                            let get_button_listener = document.querySelector('.formUpdates');
                            let success = document.querySelector('.UpdatesFormSuccess');
                            let error = document.querySelector('.UpdatesFormDeny');
                            
                            $(get_button_listener).on('click', function(){
                                if(!success.classList.contains('d-none')){
                                    success.classList.add('d-none');
                                }
                                if(!error.classList.contains('d-none')){
                                    error.classList.add('d-none');
                                }

                                let email = document.querySelector('.emailUpdates').value;
                                $.ajax({
                                    type: "POST",
                                    headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
                                    url: "/submitForm",
                                    data: {
                                        'name': null,
                                        'email': email,
                                        'phone': null,
                                        'message': null,
                                        'form_name': 'Updates'
                                    },
                                    success: function(response){
                                        if(response.status == "success"){
                                            if(success.classList.contains('d-none')){
                                                success.classList.remove('d-none');

                                                setInterval(hide, 5000);
                                                function hide(){
                                                    success.classList.add('d-none');
                                                }
                                            }
                                        }else{
                                            if(error.classList.contains('d-none')){
                                                error.classList.remove('d-none');
                                                setInterval(hide, 5000);
                                                function hide(){
                                                    error.classList.add('d-none');
                                                }
                                            }
                                        }
                                    }
                                })
                            })                            
                        });
                    </script>
                    <div class="stage2">
                        <div class="footel_links">
                            <div class="links_first_section">
                                <h3>Resources</h3>
                                <a href="/" >Home</a>
                                <a href={{url('/contacts')}} >Contacts</a>
                                <a href={{url('/Proceses')}} >About Us</a>
                                {{-- <a href={{url('/process')}} >Process</a> --}}
                                <a href={{"/project"}} >Projects</a>
                            </div>
                            <div class="links_second_section">
                                <h3>Contacts</h3>
                                <a href={!!$FacebookLink[0]->value!!} target="_blank">Facebook</a>
                                <a href={!!$InstagramLink[0]->value!!} target="_blank">Instagram</a>
                                <a href={{url('/Proceses')}} >{!! $FrontPhone[0]->value !!}</a>
                                <a href={{url('/process')}} >{!! $FrontEmail[0]->value !!}</a>
                                <a href={{"/project"}} >7040 Garden Grove Ave, Reseda, CA, 91335</a>
                                <a href={{"/project"}} >{!! $workingHoursFront[0]->value !!}</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="devider w-100"></div>

                <div class="section2 d-flex flex-column justify-content-center align-items-center p-15 ">
                    <img src="just-logo-removebg-preview.png">
                    <div class="company_slogn">
                        STUDIO ABM BUILDERS
                    </div>
                </div>

                <div class="devider w-100"></div>

                <div class="section3 d-flex flex-column justify-content-center align-items-center  ">
                    <p class="mt-3 color-w">&copy; 2024-{{date('Y', strtotime('+1 year'))}}</p>
                </div>
            </div>
        </div>
    </div>
</footer>


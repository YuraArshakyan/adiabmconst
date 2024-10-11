@extends('layout.index')
@section('title', 'Process')
@section('content')

    <div class="process" style="width:100vw;">
        
            <div class="process_stages">
                    <div class="cards_for_process">
                        <div class="card process_card container">
                            <div class="step">
                                1
                            </div>
                            <div class="d-flex card_content_process">
                                <div class="section1 w-100">
                                    <div class="small_icone">
                                    </div>
                                    <div class="header_text">
                                        Goals and vision
                                    </div>
                                    <div class="text">
                                        Every project starts by discovering where you are—and where you want to go. By understanding what you want, we can start to build your vision.
                                    </div>
                                </div>
                                <div class="section2 w-100">
                                    <div class="image">
                                        <img src="process/1_for_process.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card process_card container">
                            <div class="step">
                                2
                            </div>
                            <div class="d-flex card_content_process">
                                <div class="section1 w-100">
                                    <div class="small_icone">
                                    </div>
                                    <div class="header_text">
                                        Proposal
                                    </div>
                                    <div class="text">
                                        To quote your project, we scope it and send it out to bid. With our industry expertise, we can value engineer elements of the proposal to fit both your vision and budget.
                                    </div>
                                </div>
                                <div class="section2 w-100">
                                    <div class="image">
                                        <img src="process/2_for_process.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card process_card container">
                            <div class="step">
                                3
                            </div>
                            <div class="d-flex card_content_process">
                                <div class="section1 w-100">
                                    <div class="small_icone">
                                    </div>
                                    <div class="header_text">
                                        Planning and logistics4
                                    </div>
                                    <div class="text">
                                        Next, we create a plan for the work with timelines and schedules. Because we’re highly experienced in working in occupied spaces, we’ll ensure everything is business as usual for you.
                                    </div>
                                </div>
                                <div class="section2 w-100">
                                    <div class="image">
                                        <img src="process/3_for_process.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card process_card container">
                            <div class="step">
                                4
                            </div>
                            <div class="d-flex card_content_process">
                                <div class="section1 w-100">
                                    <div class="small_icone">
                                    </div>
                                    <div class="header_text">
                                        Project kickoff
                                    </div>
                                    <div class="text">
                                        We attend to all necessary documents and permits in preconstruction meetings so your work proceeds smoothly. We also place long lead-time and submittal orders.
                                    </div>
                                </div>
                                <div class="section2 w-100">
                                    <div class="image">
                                        <img src="process/4_for_process.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card process_card container">
                            <div class="step">
                                5
                            </div>
                            <div class="d-flex card_content_process">
                                <div class="section1 w-100">
                                    <div class="small_icone">
                                    </div>
                                    <div class="header_text">
                                        Building begins
                                    </div>
                                    <div class="text">
                                        When our tradesmen arrive, everything is in place, from temporary partitions to plans and permits. Our attentive team handles ongoing on-site adjustments and maintains a clean and safe work site. Weekly construction meetings keep things proceeding smoothly.
                                    </div>  
                                </div>
                                <div class="section2 w-100">
                                    <div class="image">
                                        <img src="process/5_for_process.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card process_card container">
                            <div class="step">
                                6
                            </div>
                            <div class="d-flex card_content_process">
                                <div class="section1 w-100">
                                    <div class="small_icone">
                                    </div>
                                    <div class="header_text">
                                        Project completion
                                    </div>
                                    <div class="text">
                                        From creating a punch list to walking the entire project, we fine-tune every detail so your site is in tip-top shape. You receive a closeout book with as-builts, warranties, and operating manuals.
                                    </div>
                                </div>
                                <div class="section2 w-100">
                                    <div class="image">
                                        <img src="process/6_for_process.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

    </div>
    <script>
        $(document).ready(function (){
            setTimeout(() => {
                document.querySelector('.process_card').classList.add('active');
            }, "100");
        });



       
        let $card = document.getElementsByClassName('process_card')
            cards = Array.from($card)
        let current_index;

        if(window.screen.width >= 1024){
            addEventListener("wheel", (event) => {
                for(let i = 0; i <= cards.length-1; i++){
                    if(cards[i].classList.contains('active')){
                        current_index = i;
                        break;
                    }
                }

                var card_active = cards[current_index];
                if(current_index != cards.length-1){
                    card_active.classList.remove('active');
                    card_active.classList.add('deactive')
                    var card_for_active = cards[current_index+1];
                    card_for_active.classList.add('active');
                }else{
                    for(let i = 0; i <= cards.length-1; i++){
                        if(cards[i].classList.contains('deactive')){
                            cards[i].classList.remove('deactive');
                            // current_index = i;
                            // break;
                        }else if(cards[i].classList.contains('active')){
                            cards[i].classList.remove('active');
                        }

                    }
                    cards[0].classList.add('active');
                    current_index = 0;
                }
            });
               
        }else{
            let startY = 0;
            document.addEventListener('touchmove', (e) => {
                for(let i = 0; i <= cards.length-1; i++){
                    if(cards[i].classList.contains('active')){
                        current_index = i;
                        break;
                    }
                }



                const touch = e.touches[0]; // Get the first touch point
                const deltaY = touch.clientY - (this.lastTouchY || touch.clientY); // Calculate the change in Y position
                this.lastTouchY = touch.clientY; // Update the last touch Y position


                if (deltaY > 0) {
                    
                    var card_active = cards[current_index];



                    console.log(current_index);

                    if(current_index != cards.length-1){
                        card_active.classList.remove('active');
                        card_active.classList.add('deactive')
                        var card_for_active = cards[current_index+1];
                        card_for_active.classList.add('active');
                    }else{
                        for(let i = 0; i <= cards.length-1; i++){
                            if(cards[i].classList.contains('deactive')){
                                cards[i].classList.remove('deactive');
                                // current_index = i;
                                // break;
                            }else if(cards[i].classList.contains('active')){
                                cards[i].classList.remove('active');
                            }
                        }
                        cards[0].classList.add('active');
                        current_index = 0;
                    }
                } 
            });  
        }






        
    </script>
@endsection

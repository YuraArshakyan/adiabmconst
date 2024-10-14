@auth
    @extends('layout.admin')
    @section('title', 'Admin')
    @section('content')
        @notifyCss
        @notifyJs
        <div class="container">
            <form action={{url('/changeConfig')}} method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card">
                    <div class="card-header">For Admin</div>
                    <div class="card-body">
                        <div class="btn-group justify-content-around w-100" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" name="checkboxForms" class="checkboxForms btn-check" id="btncheck1" >
                            <label class="btn btn-outline-primary br-15-important" for="btncheck1">Email When Contact Forms Submited</label>
                            
                            <input type="checkbox" name="checkboxUpdates" class="checkboxUpdates btn-check" id="btncheck2" >
                            <label class="btn btn-outline-primary br-15-important" for="btncheck2">Email When Updates Form Submited</label>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" value="{{$email[0]->value}}" name="email" class="email form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Favicon</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="favicon" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>

                            <button type="button" class=" mt-3 btn btn-primary" data-bs-toggle="modal" data-bs-target="#faviconModal">
                                Current Favicon
                            </button>
                            <div class="modal fade" id="faviconModal" tabindex="-1" aria-labelledby="faviconModal" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="faviconModalLabel">Favicon</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        @if($favicon != null)
                                            <img src={{$favicon[0]->value}}>
                                        @else
                                            NULL
                                        @endif 
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                      </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title after -</label>
                            <input type="text" value="{{$title[0]->value}}" name="title" class="title form-control">
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary" onclick="createkey()">Submit</button>
                    </div>
                </div>
            </form>

            <form action={{url('/changeConfigFront')}} method="POST" enctype="multipart/form-data" id="summernoteFrom">
                @csrf
                <div class="card mt-3">
                    <div class="card-header">For Customer</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="emailForCustomer" value="{{$FrontEmail[0]->value}}" name="emailFront" class="email form-control" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Phone</label>
                            <input type="emailForCustomer" value="{{$FrontPhone[0]->value}}" name="phoneFront" class="email form-control" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Facebook Link</label>
                            <input type="emailForCustomer" value="{{$FacebookLink[0]->value}}" name="facebookLink" class="email form-control" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Instagram Link</label>
                            <input type="emailForCustomer" value="{{$InstagramLink[0]->value}}" name="instagramLink" class="email form-control" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Working Hours</label>
                            <div id="summernote">{!! nl2br($workingHoursFront[0]->value) !!}</div>
                            <input type="hidden" name="workingHoursFront" id="workingHoursFront">
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary submitFormWithSummernot">Submit CUSTOMER SETTINGS</button>
                    </div>
                </div>
            </form>
        </div>

        <script>
            $('.submitFormWithSummernot').on('click', function() {
                var content = $('#summernote').summernote('code');
                $('#workingHoursFront').val(content);

                document.getElementById('#summernoteFrom').submit();
            });
        
            let enable_email = document.querySelector('.checkboxForms');
            let input_email = document.querySelector('.email');
            let enable_updates = document.querySelector('.checkboxUpdates');

            if(!enable_email.hasAttribute('checked')){
                enable_updates.setAttribute("disabled", "");
                input_email.setAttribute("disabled", "");
            }

            $(document).ready( function(){
                $(enable_email).on('click', function(){
                    enable_email.toggleAttribute("checked");

                    if(enable_email.hasAttribute('checked')){

                        enable_updates.removeAttribute("disabled", "");
                        input_email.removeAttribute("disabled", "");
                        
                    }else{
                        enable_updates.setAttribute("disabled", "");
                        input_email.setAttribute("disabled", "");
                        
                    }
                    
                }); 
            });
        </script>
    @endsection
@endauth


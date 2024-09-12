@extends('layout.index')
@section('title', 'Contacts')
@section('content')

    <div class="footer">        
        <div class="container">
            <div class="sections">
                <div class="section1 d-flex flex-column align-items-center">
                    <img src="logo.webp">
                    <div class="company_slogn">
                        create art in your kitchen
                    </div>
                    
                </div>
                <div class="section2">
                    <form class="d-flex justify-content-between">
                        <div class="form-group w-85">
                            {{-- <label class="color-w">SUBSCRIBE TO OUR EXCLUSIVE UPDATES</label> --}}
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                        </div>
                        <button type="button" class="btn btn-info h-40 btn-email">Submit</button>
                    </form>
                    
                </div>
                <div class="section3">
                    <div class="header_for_info_bar color-w">Follow us</div>
                    <div class="header_for_info_bar color-w">Call us</div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

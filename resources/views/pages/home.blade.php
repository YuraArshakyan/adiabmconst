@extends('layout.index')
@section('title', 'Contacts')
@section('content')

    <div class="front" style="height: 4000px">
        <img src="form-contact-right.jpg" style="width:90vw;height:90vh" class="image">
    </div>
    <script>
        var x = document.querySelector('.front');
        var ysa = document.querySelector('.image');
        x.onmousemove = function(e){
            var xy = [e.clientX, e.clientY];
            var pos = xy.concat([ysa]);
            ysa.style.transform = transforms.applay
            console.warn(pos);
            tra
        }
        console.log(document.querySelector('.front'));
    </script>
@endsection

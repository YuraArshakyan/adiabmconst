@auth
    @extends('layout.admin')
    @section('title', 'Contacts')
    @section('content')
        @notifyCss
        @notifyJs
        <div class="menue-content p-15">
            <div class="admin_menue d-flex justify-content-between">
                <div class="logo">
                    <a href="/"><img src="just-logo-removebg-preview.png" width="100px"></a>
                </div>
                <div class="content d-flex justify-content-center align-items-center color-w">
                    <a href="" class="menue_padding">Forms</a>
                    <a href="" class="menue_padding">Settings</a>
                    <a href="" class="menue_padding">Config</a>
                    <a href="" class="menue_padding">LogOut</a>
                </div>
            </div>
        </div>
        <div class="container">
            <h1>Welcome {{Auth::user()->name}}</h1>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">name</th>
                      <th scope="col">email</th>
                      <th scope="col">phone</th>
                      <th scope="col">message</th>
                      <th scope="col">form_name</th>
                      <th scope="col">created_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($forms as $forms)
                        <tr>
                            <th scope="row">{{$forms->id}}</th>
                            <td>{{($forms->name) ? $forms->name : 'NULL'}}</td>
                            <td>{{($forms->email) ? $forms->email : 'NULL'}}</td>
                            <td>{{($forms->phone) ? $forms->phone : 'NULL'}}</td>
                            <td>{{($forms->message) ? $forms->message : 'NULL'}}</td>
                            <td>{{($forms->form_name) ? $forms->form_name : 'NULL'}}</td>
                            <td>{{($forms->created_at) ? $forms->created_at : 'NULL'}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    @endsection
@endauth


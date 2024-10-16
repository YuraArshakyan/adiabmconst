<div class="menue-content p-15">
    <div class="admin_menue d-flex justify-content-between">
        <div class="logo">
            <a href="/"><img src="just-logo-removebg-preview.png" width="100px"></a>
        </div>
        <div class="content d-flex justify-content-center align-items-center color-w">
            <a href={{url("/adminForms")}} class="menue_padding {{(Request::segment(1) == 'adminForms') ? "active" : ""}}" >Forms</a>
            <a href={{url("/adminSettings")}} class="menue_padding {{(Request::segment(1) == 'adminSettings') ? "active" : ""}}" >Settings</a>
            <a href={{url("/adminConfigs")}} class="menue_padding {{(Request::segment(1) == 'adminConfigs') ? "active" : ""}}" >Config</a>
            <a href={{url("/logOut")}} class="menue_padding" >LogOut</a>            
        </div>
    </div>
</div>
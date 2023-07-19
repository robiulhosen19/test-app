<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="{{url('home')}}">University</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                <li class="nav-item"><a class="nav-link " aria-current="page" href="{{url('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('about')}}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('contact')}}">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('services')}}">Services</a></li>

                <div class="dropdown">
                    <li class="nav-item">
                        <a class="btn btn-outline-info btn-sm dropdown-toggle" href="#"  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    {{Session::get('user_fname')}}{{Session::get('user_lname')}}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{url('dashboard')}}">Dashboard</a></li>
                        <li><a class="dropdown-item" href="{{url('profile')}}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{url('admin/logout')}}">Logout</a></li>
                        
                    </ul>
                    </li>
                    
                </div>
            </ul>
        </div>
    </div>
</nav>
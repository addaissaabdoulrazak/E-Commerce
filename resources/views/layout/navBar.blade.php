<nav class="navbar navbar-expand-sm navbar-light bg-secondary">
    <div class="container-fluid">
        <a class="navbar-brand " href="#">E-Commerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
            aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarID">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{URL::to('/')}}">Home</a>
                <a class="nav-link active" aria-current="page" href="{{URL::to('/apropos')}}">About</a>
                <a class="nav-link active" aria-current="page" href="{{route('home.services')}}">Services</a>
                
            </div>
        </div>
    </div>
</nav>
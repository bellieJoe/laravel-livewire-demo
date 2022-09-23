@extends('app')
@section('content')

<nav class="navbar navbar-expand-md navbar-primary">
    <div class="container">
        <a href="#intro" class="navbar-brand fw-bold ">Petter</a>
        <button class="navbar-toggler text-light" type='button' data-bs-toggle="collapse" data-bs-target="#main-nav">
            <span class="navbar-toggler-icon text-light"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a href="" class="nav-link">Pets</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<section class="container" id="intro">
    <div class="row my-5 justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="text-center text-md-start">
                <h1 class="display-4 fw-bold">Lorem, ipsum.</h1>
                <h6 class="display-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, maiores?</h6>
                <a href="#pricing" class="btn bg-green-500 text-light">Buy Now</a>
            </div>
        </div>
        <div class="col-md-6 d-none d-md-block">
            <div class="text-center">
                <img class="img-fluid" src="{{ asset('assets/images/dog.png') }}" alt="dog">
            </div>
        </div>
    </div>    
</section>

<section id="pricing" class="bg-light">
    <div class="container-lg">
        <div class="text-center">
            <h2>Pricing Plans</h2>
            <p class="lead text-muted">Choose pricing plan that suits you.</p>
        </div>
        <div class="row my-5 align-items-center justify-content-center g-4">
            <div class="col-sm-7 col-md-4 col-lg-3">
                <div class="card shadow border-0">
                    <div class="card-body text-center">
                        <h4 class="card-title">Starter Edition</h4>
                        <p class="lead card-subtitle">For Individuals only</p>
                        <p class="display-6 text-primary fw-bold">$200</p>
                        <p><i class="fa-solid fa-check text-teal-500 me-2"></i> Lorem, ipsum.</p>
                        <p><i class="fa-solid fa-check text-teal-500 me-2"></i> Lorem, ipsum dolor..</p>
                        <p><i class="fa-solid fa-check text-teal-500 me-2"></i> Lorem, ipsum dolor.</p>
                        <p><i class="fa-solid fa-check text-teal-500 me-2"></i> Lorem ipsumt.</p>
                        <p><i class="fa-solid fa-check text-teal-500 me-2"></i> Lorem ipsum sa.</p>
                        <button class="btn btn-outline-primary d-block w-100">Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 col-md-4 col-lg-3">
                <div class="card shadow-lg border-3 border-primary">
                    <div class="card-body text-center">
                        <div class="bg-light"><p class="text-center lead h6 pt-2">Most popular</p></div>
                        <h4 class="card-title">Team Edition</h4>
                        <p class="lead card-subtitle">For small teams</p>
                        <p class="display-6 text-primary fw-bold">$450</p>
                        <p><i class="fa-solid fa-check text-teal-500 me-2"></i> Lorem, ipsum.</p>
                        <p><i class="fa-solid fa-check text-teal-500 me-2"></i> Lorem, ipsum dolor..</p>
                        <p><i class="fa-solid fa-check text-teal-500 me-2"></i> Lorem, ipsum dolor.</p>
                        <p><i class="fa-solid fa-check text-teal-500 me-2"></i> Lorem ipsumt.</p>
                        <p><i class="fa-solid fa-check text-teal-500 me-2"></i> Lorem ipsum sa.</p>
                        <button class="btn btn-primary d-block w-100">Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 col-md-4 col-lg-3">
                <div class="card shadow border-0">
                    <div class="card-body text-center">
                        <h4 class="card-title">Enterprise Edition</h4>
                        <p class="lead card-subtitle">For corporate</p>
                        <p class="display-6 text-primary fw-bold">$200</p>
                        <p><i class="fa-solid fa-check text-teal-500 me-2"></i> Lorem, ipsum.</p>
                        <p><i class="fa-solid fa-check text-teal-500 me-2"></i> Lorem, ipsum dolor..</p>
                        <p><i class="fa-solid fa-check text-teal-500 me-2"></i> Lorem, ipsum dolor.</p>
                        <p><i class="fa-solid fa-check text-teal-500 me-2"></i> Lorem ipsumt.</p>
                        <p><i class="fa-solid fa-check text-teal-500 me-2"></i> Lorem ipsum sa.</p>
                        <button class="btn btn-outline-primary d-block w-100">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

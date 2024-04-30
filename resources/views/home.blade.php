@extends('layout')
@section('title', 'home')
@section('content')

 <!-- Hero Start -->

 <div class="py-5 mb-5 hero-header">
    <div class="container">
        <h1 id="title" class="display-1 text-uppercase text-white mb-4">Nutricandies</h1>
        <h1 id="subtitle" class="text-uppercase"> <span id="text-destaque">Nutrindo</span> a vida e o planeta de forma <span id="text-destaque">doce</span>
        </h1>
        
        <div class="d-flex align-items-center">
            <video autoplay loop muted playsinline id="myVideo" class="video-background">
                <source src="video/video-cacau.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
        </div>
        
    </div>
</div>


<!-- Hero End -->





<!-- About Start -->
<div class="container-fluid pt-5 position-relative">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 pb-5">
                <h4 class="mb-4">Aqui entra um subtitulo para a descrição do site</h4>
                <p class="mb-5">Aqui entra um resumo sobre do que se trata o site</p>
                <div class="row g-5">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center justify-content-center bg-primary border-inner mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-heartbeat fa-2x text-white"></i>
                        </div>
                        <h4 class="text-uppercase">100% Healthy</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center justify-content-center bg-primary border-inner mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-award fa-2x text-white"></i>
                        </div>
                        <h4 class="text-uppercase">Award Winning</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna dolor vero</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->







@endsection

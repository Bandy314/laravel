@extends('layouts.app')

@section('content')
<form action="" method="post" enctype="multipart/form-data">
@csrf
<div class="album py-5 bg-light">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col ">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/earth-dream (2560x1440).jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Заголовок новости</h5>
                        <p class="card-text">Сама новость, краткое описание.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Категория</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Полная новость</a>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/dark-silhouette (1920x1080).jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Заголовок новости</h5>
                        <p class="card-text">Сама новость, краткое описание.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Категория</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Полная новость</a>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/alienware (2560x1440).jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Заголовок новости</h5>
                        <p class="card-text">Сама новость, краткое описание.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Категория</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Полная новость</a>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/mclaren (2560x1440).jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Заголовок новости</h5>
                        <p class="card-text">Сама новость, краткое описание.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Категория</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Полная новость</a>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/maserati-a6g-2000-berlinetta (2560x1440).jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Заголовок новости</h5>
                        <p class="card-text">Сама новость, краткое описание.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Категория</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Полная новость</a>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/irbis_vysunutyj_iazyk_lapa_274639_1920x1080.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Заголовок новости</h5>
                        <p class="card-text">Сама новость, краткое описание.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Категория</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Полная новость</a>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/Akula (2560x1440).jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Заголовок новости</h5>
                        <p class="card-text">Сама новость, краткое описание.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Категория</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Полная новость</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.index')

@section('content')
    <section class="page-section">
        <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex ml-auto rounded">
                <h2 class="section-heading mb-0">
                <span class="section-heading-upper">{{ $informations->text1 }} </span>
                <span class="section-heading-lower">{{ $informations->text2 }} </span>
                </h2>
            </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src={{ $informations->img1 }}  alt="">
            <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
                <p class="mb-0">{{ $informations->text3 }} </p>
            </div>
            </div>
        </div>
        </div>
    </section>

        <section class="page-section">
            <div class="container">
            <div class="product-item">
                <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex mr-auto rounded">
                    <h2 class="section-heading mb-0">
                    <span class="section-heading-upper">{{ $informations->text4 }} </span>
                    <span class="section-heading-lower">{{ $informations->text5 }} </span>
                    </h2>
                </div>
                </div>
                <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src={{ $informations->img2 }}  alt="">
                <div class="product-item-description d-flex ml-auto">
                <div class="bg-faded p-5 rounded">
                    <p class="mb-0">{{ $informations->text6 }} </p>
                </div>
                </div>
            </div>
            </div>
        </section>

            <section class="page-section">
                <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                    <div class="bg-faded p-5 d-flex ml-auto rounded">
                        <h2 class="section-heading mb-0">
                        <span class="section-heading-upper">{{ $informations->text7 }}</span>
                        <span class="section-heading-lower">{{ $informations->text8 }}</span>
                        </h2>
                    </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src={{ $informations->img3 }} alt="">
                    <div class="product-item-description d-flex mr-auto">
                    <div class="bg-faded p-5 rounded">
                        <p class="mb-0">{{ $informations->text9 }}</p>
                    </div>
                    </div>
                </div>
                </div>
            </section>

@endsection
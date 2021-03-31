@extends('layouts.index')

@section('content')
    <section class="page-section cta">
        <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
                <h2 class="section-heading mb-5">
                <span class="section-heading-upper">{{ $informations->text1 }} </span>
                <span class="section-heading-lower">{{ $informations->text2 }}</span>
                </h2>
                <ul class="list-unstyled list-hours mb-5 text-left mx-auto">

                    @foreach ($informations->OpenHours as $key=>$day)
                        <li class="list-unstyled-item list-hours-item d-flex {{ date('D') === $key ? 'today' : '' }}">
                            {{ $day[0] }} 
                            <span class="ml-auto">{{ $day[1] }} </span>
                    @endforeach

                </ul>
                <p class="address mb-5">
                <em>
                    <strong>{{ $informations->text3 }}</strong>
                    <br>
                    {{ $informations->text4 }}
                </em>
                </p>
                <p class="mb-0">
                <small>
                    <em> {{ $informations->text5 }}</em>
                </small>
                <br>
                {{ $informations->text6 }}
                </p>
            </div>
            </div>
        </div>
        </div>
    </section>

        <section class="page-section about-heading">
            <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src={{ $informations->img1}} alt="">
            <div class="about-heading-content">
                <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">{{ $informations->text7}}</span>
                        <span class="section-heading-lower">{{ $informations->text8}}</span>
                    </h2>
                    <p> {{ $informations->text9}} </p>
                    <p class="mb-0">{{ htmlspecialchars($informations->text10) }}</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>


@endsection
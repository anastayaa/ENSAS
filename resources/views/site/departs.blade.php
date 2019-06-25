@extends('site.layouts.app')

@section('content')



<section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
                <h1>Départements de l'ENSA Safi</h1>
            </div>
        </div>
    </div>
</section>

<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            @foreach($departements as $departement)
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                <a href="/site/departs/{{$departement->id}}" class="probootstrap-featured-news-box">
                    <figure class="probootstrap-media"><img src="{{ url('/') }}/departements/images/{{$departement->image}}"
                            alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                    <div class="probootstrap-text">
                        <h3>{{$departement->titre}}</h3>
                    </div>
                </a>
            </div>
            @endforeach

            <div class="clearfix visible-sm-block visible-xs-block"></div>

        </div>
    </div>
</section>


@endsection
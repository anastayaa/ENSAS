@extends('site.layouts.app')

@section('content')

<section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
                <h1>Actualités</h1>
            </div>
        </div>
    </div>
</section>

<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    @foreach($actualites as $actualite)
                    <div class="probootstrap-service-2 probootstrap-animate">
                        <div class="image">
                            <div class="image-bg">
                                <img src="/news/{{$actualite->image}}">
                            </div>
                        </div>

                        <div class="text">
                            <span class="probootstrap-meta"><i class="icon-calendar2"></i> {{$actualite->created_at}}</span>
                            <h3>{{!!html_entity_decode($actualite->titre)!!}}</h3>
                            <p>{{!!html_entity_decode($actualite->description)!!}}</p>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
</section>


@endsection
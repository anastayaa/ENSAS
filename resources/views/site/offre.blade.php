@extends('site.layouts.app')

@section('content')

<section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
                <h1>Recrutements</h1>
            </div>
        </div>
    </div>
</section>

<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @foreach($offres as $offre)
                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="text">
                    <span class="probootstrap-meta"><i class="icon-calendar2"></i> {{$offre->created_at}}</span>
                        <h3>{{$offre->titre}}</h3>
                        <p>{{$offre->description}}</p>
                        <p><a href="/documents/{{$offre->doc}}" class="btn btn-primary">Voir l'annonce</a></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


@endsection
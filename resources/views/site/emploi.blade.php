@extends('site.layouts.app')

@section('content')

<section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
                <h1>Emploi du temps</h1>
            </div>
        </div>
    </div>
</section>

<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            
            <div class="col-md-4">

                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="text">
                        <h3>Génie Informatique</h3>
                        <p><a href="/documents/ginfo.jpg" class="btn btn-primary">Voir l'emploi du temp</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="text">
                        <h3>Génie Réseaux et Télécommunications</h3>
                        <p><a href="/documents/gtr.jpg" class="btn btn-primary">Voir l'emploi du temp</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="text">
                        <h3>Génie Industriel</h3>
                        <p><a href="/documents/gindus.jpg" class="btn btn-primary">Voir l'emploi du temp</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="text">
                        <h3>Génie des Procédés et Matériaux Céramiques</h3>
                        <p><a href="/documents/gpmc.jpg" class="btn btn-primary">Voir l'emploi du temp</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


@endsection
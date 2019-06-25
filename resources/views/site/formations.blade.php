@extends('site.layouts.app')

@section('content')

<section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
                <h1>Formations à l'ENSA Safi</h1>
            </div>
        </div>
    </div>
</section>



<section class="probootstrap-section probootstrap-section-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row probootstrap-gutter0">
                    <div class="col-md-4" id="probootstrap-sidebar">
                        <div class="probootstrap-sidebar-inner probootstrap-overlap probootstrap-animate">
                            <ul class="probootstrap-side-menu">
                                <li><a href="#formation">Formation initiale</a></li>
                                <li><a href="#etud">Cursus d'étude</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                        <h2 id="formation">Formation initiale</h2>
                        <p class="strong">La formation à l’ENSAS est dispensée sous forme d’enseignements et d’activités
                            pratiques organisés en modules, elle offre aux élèves ingénieurs :</p>
                        <ul class="square indent">
                            <li>Une formation homogène avec un premier cycle intégré ouvrant
                                l’accès aux différentes options du cycle ingénieur.
                            <li>Une pédagogie favorisant le développement personnel des élèves ingénieurs.</li>
                            <li>Une ouverture sur l’entreprise industrielle marocaine par l’organisation des stages,
                                visites et séminaires animés par des intervenants industriels.</li>
                            <li>Une pédagogie par projets, préparée et présentée par les élèves ingénieurs, soit
                                individuellement, soit collectivement et très souvent en relation avec le milieu
                                industriel.</li>
                            <p><strong>L’évaluation des connaissances suit un système de contrôle continu:</strong></p>
                            <li>Un ou deux contrôles sont prévus de façon hebdomadaire.</li>
                            <li>Un examen de synthèse permettra de valider ou non les modules.</li>
                        </ul>

                        <h2 id="etud">Cursus d'étude</h2>
                        <p><strong>L’ENSA Safi propose une formation homogène de l’admission à l’obtention du diplôme.
                                Le cursus de formation s’étale sur cinq années :</strong></p>
                        <ul class="check indent">
                            <li><strong>Cycle Préparatoire (2 ans) :</strong> &mdash;
                                Le but de ce cycle est de permettre à l’étudiant d’acquérir un enseignement
                                scientifique de base (mathématiques, physique, chimie, informatique) et une
                                formation humaine (langues et T.E.C).</li>
                            <li><strong>Cycle Ingénieur (3 ans):</strong> &mdash; Ce cycle se compose de trois années
                                de spécialisation dans les domaines suivants:</li>
                        </ul>
                        <ul class="green-arrow">
                            <li><mark class="highlight colored">Génie Informatique.</mark></li>
                            <li><mark class="highlight colored">Génie Industriel.</mark></li>
                            <li><mark class="highlight colored">Génie des procédés et matériaux céramiques.</mark></li>
                            <li><mark class="highlight colored">Génie Réseaux et Télécommunications.</mark></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>

<section>
        <div class="">
            <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                    <img src="/img/person_1.jpg" class="img-responsive">
                </figure>
                <div class="text">
                    <h3>Directeur Pédagogique</h3>
                    <h4>M. NIBOU Lahbib</h4>
                    <p>Pour plus d'informations, veuillez contacter M. NIBOU Lahbib, vice Directeur chargée des affaires pédagogiques</p>
                    <ul class="probootstrap-footer-social">
                        <p>Email: NIBOU.Lahbib@uca.ac.ma</p>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
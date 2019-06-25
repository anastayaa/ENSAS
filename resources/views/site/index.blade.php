@extends('site.layouts.app')

@section('content')

<section class="flexslider">
    <ul class="slides">
        @foreach($sliders as $slider)
        <li style="background-image: url(/slider/{{$slider->image}}); background-repeat: no-repeat; background-size: 100%;"
            class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="probootstrap-slider-text text-center">
                            <h1 class="probootstrap-heading probootstrap-animate"
                                style="background-color: black; opacity: 50%">{{$slider->titre}}</h1>
                            <p>{{--$slider->sous-titre--}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</section>

<section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
                <h2>Welcome to ENSA Safi</h2>
            </div>
        </div>
    </div>
</section>


<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="probootstrap-flex-block">
                    <div class="probootstrap-text probootstrap-animate">
                        <h3>À propos de l'école</h3>
                        <p>L’Ecole Nationale des Sciences Appliquées Safi (ENSA Safi) est une école d’ingénieurs
                            accessible par les bacheliers scientifiques et techniques. La durée d’études est de 5 ans,
                            dont 2 ans de cycle préparatoire et 3 ans du cycle d’ingénieurs.</p>
                        <p><a href="#" class="btn btn-primary">Learn More</a></p>
                    </div>
                    <div class="probootstrap-image probootstrap-animate"
                        style="background-image: url(/img/ensas-pano.jpg); background-position: center">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row">
        <div class="col-md-12 probootstrap-animate">
            <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
                <div class="item">
                    <div class="container">
                        <div class="col-md-3">
                            <p>
                                <img src="/img/fatajou.jpg" class="img-responsive">
                            </p>
                        </div>
                        <div class="col-md-9">
                            <h4>Mot du directeur</h4>
                            <p class="small" align="justify">L’Ecole Nationale des Sciences Appliquées de Safi est une
                                jeune et
                                dynamique école d’ingénieurs de l’université Cadi Ayyad nichée sur une grandefalaise et
                                surplombant de
                                haut l’océan atlantique. Fondée en 2003, elle offre à ses élèves-ingénieurs une palette
                                de formations
                                solides et variées en Génie Industriel, Génie des procédés et matériaux céramiques,
                                Génie informatique
                                et Génie télécommunication et réseaux, tout en accordant beaucoup d’importance aussi
                                bien aux sciences
                                humaines, économiques et sociales qu’à l’esprit d’entreprise.
                                Et partant, les lauréats de l’ENSAS sont dotés de bonnes capacités d’intégration et
                                d’analyse, de
                                solides connaissances scientifiques et techniques ainsi que des qualités utiles au
                                pilotage, à
                                l’entreprenariat, à la communication, à la participation (au partage) et à la direction.
                                Pour réussir dans sa mission, l’ENSA de Safi s’appuie sur un corps professoral de
                                qualité et varié, sur
                                des laboratoires bien équipés et modernes et sur des partenariats fructueux et
                                profitables avec le monde
                                de l’industrie.
                                En plus grâce à son esprit de formation, à son respect des choix de ces étudiants et à
                                son ouverture sur
                                son entourage, l’ENSAS fournit à chacun de ces lauréats les outils utiles à son
                                insertion dans le monde
                                de travail voire même son épanouissement personnel et l’invention de son rôle de demain.
                                <br><br>
                                <strong>Samir FATAJOU</strong><br>
                                Directeur de l'ENSA-SAFI </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <h4>Missions</h4>
                        <p class="small" align="justify">L'Ecole Nationale des Sciences Appliquées de SAFI (ENSA
                            Safi) est
                            un établissement universitaire relevant de l’université Cadi Ayyad et sous
                            la tutelle du ministère de l’enseignement supérieur et de la recherche scientifique.
                            Elle fait partie du réseau des écoles nationales des sciences appliquées réparties
                            sur
                            l’ensemble du territoire national au niveau des grandes villes universitaires du
                            pays.
                            L'ENSAS est spécialisée dans tout ce qui concerne l’enseignement supérieur, la
                            recherche
                            scientifique et technique et la formation d’ingénieurs et des cadres ainsi que la
                            formation
                            continue. </p>
                        <p class="small" align="justify">L'ENSA Safi vise d’atteindre les objectifs suivants :
                        </p>
                        <ul class="square indent">
                            <li>
                                <p class="small" align="justify">La formation d’ingénieurs d’Etat sur les plans
                                    théorique
                                    et pratique en parfaite adéquation avec les besoins du développement
                                    industriel,
                                    économique et social aussi bien au niveau régional que national.</p>
                            </li>
                            <li>
                                <p class="small" align="justify">La mise en place d’une coopération et d’un
                                    partenariat avec
                                    les opérateurs industriels, économiques et sociaux au niveau de la région et
                                    à
                                    l’échelle
                                    internationale.</p>
                            </li>
                            <li>
                                <p class="small" align="justify">La dynamisation de la recherche scientifique et
                                    technique.</p>
                            </li>
                        </ul>
                        <p class="small" align="justify">La formation offerte se caractérise par l’application
                            d'un
                            système
                            pédagogique moderne et
                            développé,
                            basé sur des modules d’enseignement organisés durant des sessions semestrielles.
                            Elle
                            adopte également
                            l’ouverture sur le milieu industriel et économique à travers les stages et le
                            parrainage
                            ainsi que
                            l'intégration de l’enseignement des langues étrangères, les techniques d’expression
                            et
                            de communication.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <h4>Visions</h4>
                        <p class="small" align="justify"><span class="dropcap with-bg">D</span>ans un esprit de travail
                            d’équipe,
                            nous visons la réussite professionnelle de tous nos élèves ingénieurs. Nous envisageons
                            un
                            climat ouvert aux changements et aux nouvelles approches
                            pédagogiques afin d’améliorer le climat d’apprentissage pour que chacun puisse goûter au
                            succès.
                            La vision de l'École couvre trois dimensions :
                            formation, recherche et innovation qui peuvent se représenter comme un triangle où deux
                            bases,
                            la recherche et l'innovation, contribuent à renforcer l'excellence de la formation
                            d'ingénieurs.</p>
                        <p><img src="/img/schema.png" width="50pt" height="50pt" class="img-responsive"
                                style="height: 250px; width: 250px; margin-left: auto; margin-right: auto;" /></p>
                        <p class="small" align="justify">L'école vise à ce que les enseignants-chercheurs dispensent le
                            meilleur
                            enseignement aux élèves, Les ingrédients pour garantir cette vision, On citera tout
                            particulièrement :</p>
                        <ul class="small" class="arrow indent">

                            <li>Collaborations à développer avec d'autres écoles ou universités</li>
                            <li>Ouverture internationale et interculturelle </li>

                        </ul>
                        <p class="small" align="justify"> L'enseignement, transmission de savoir d'un enseignant à ses
                            élèves
                            ingénieurs,
                            n’est pas la seule voie pour atteindre ce but. La mise en situation par des projets,
                            des
                            stages, la participation à la
                            vie associative offrent d’autres voies d'apprentissage dès lors qu'elles font
                            l'objet
                            d'une
                            analyse et d'une verbalisation des apprentissages. De plus, un dosage entre des
                            approches
                            disciplinaires, formelles et des approches intégratives (système) ouvre à la variété
                            des
                            situations auxquelles sera confronté le futur ingénieur.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <h4>Valeurs</h4>
                        <p class="small" align="justify"> La diversité, excellence, ouverture d'esprit et innovation
                            sont les
                            moteurs
                            de l'ENSA Safi qui, au
                            cours de ces année d'existence l'établissement n'a cessé de servir et de garantir ces
                            valeurs
                            au profit de ses étudiants.</p>

                        <ul class="small" class="check indent">
                            <li><strong>Excellence</strong> &mdash; Proposer des programmes en adéquation avec
                                la
                                demande du marché du travail</li>
                            <li><strong>Intégration</strong> &mdash; Motiver les étudiants à développer leurs
                                personnalités dans tout ce qui est para-scolaire.</li>
                            <li><strong>Distinction</strong> &mdash; L'ingénieur de l'ENSA Safi est capable de
                                comprendre les enjeux de son milieu socio-économique et
                                sa société et de s'inscrire dans l'évolution de son monde..</li>
                        </ul>
                        <p class="small" align="justify">
                            Un monde dans lequel l'ENSA Safi souhaite s'imposer, à la fois sur le plan
                            pédagogique
                            en
                            formant des ingénieurs d'excellence. Et sur le plan recherche, en visant à devenir
                            un pôle de recherche et d'innovation reconnu dans sa région en
                            exerçant une forte attractivité sur le milieu industriel et économique.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--<section class="probootstrap-section" id="probootstrap-counter">
    <div class="container">

        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                <div class="probootstrap-counter-wrap">
                    <div class="probootstrap-icon">
                        <i class="icon-users2"></i>
                    </div>
                    <div class="probootstrap-text">
                        <span class="probootstrap-counter">
                            <span class="js-counter" data-from="0" data-to="20203" data-speed="5000"
                                data-refresh-interval="50">1</span>
                        </span>
                        <span class="probootstrap-counter-label">Students Enrolled</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                <div class="probootstrap-counter-wrap">
                    <div class="probootstrap-icon">
                        <i class="icon-user-tie"></i>
                    </div>
                    <div class="probootstrap-text">
                        <span class="probootstrap-counter">
                            <span class="js-counter" data-from="0" data-to="139" data-speed="5000"
                                data-refresh-interval="50">1</span>
                        </span>
                        <span class="probootstrap-counter-label">Certified Teachers</span>
                    </div>
                </div>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                <div class="probootstrap-counter-wrap">
                    <div class="probootstrap-icon">
                        <i class="icon-library"></i>
                    </div>
                    <div class="probootstrap-text">
                        <span class="probootstrap-counter">
                            <span class="js-counter" data-from="0" data-to="99" data-speed="5000"
                                data-refresh-interval="50">1</span>%
                        </span>
                        <span class="probootstrap-counter-label">Passing to Universities</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">

                <div class="probootstrap-counter-wrap">
                    <div class="probootstrap-icon">
                        <i class="icon-smile2"></i>
                    </div>
                    <div class="probootstrap-text">
                        <span class="probootstrap-counter">
                            <span class="js-counter" data-from="0" data-to="100" data-speed="5000"
                                data-refresh-interval="50">1</span>%
                        </span>
                        <span class="probootstrap-counter-label">Parents Satisfaction</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>--}}

<section
    class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section"
    style="background-image: url(/img/slider_2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
                <h2 class="mb0">Actualités</h2>
            </div>
        </div>
    </div>
    <div class="probootstrap-tab-style-1">
        <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
            <li class="active"><a data-toggle="tab" href="#featured-news">Dernières Actualités</a></li>
            {{--<li><a data-toggle="tab" href="#upcoming-events">Upcoming Events</a></li>--}}
        </ul>
    </div>
</section>

<section class="probootstrap-section probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="tab-content">

                    <div id="featured-news" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="owl-carousel" id="owl1">

                                    @foreach($actualites as $actualite)
                                    <div class="item">
                                        <a href="#" class="probootstrap-featured-news-box">
                                            <figure class="probootstrap-media"><img src="/news/{{$actualite->image}}"
                                                    class="img-responsive">
                                            </figure>
                                            <div class="probootstrap-text">
                                                <h3>{{!!html_entity_decode($actualite->titre)!!}}</h3>
                                                <p>{{!!html_entity_decode($actualite->description)!!}}</p>
                                                <span class="probootstrap-date"><i class="icon-calendar"></i>
                                                    {{$actualite->created_at}}</span>

                                            </div>
                                        </a>
                                    </div>
                                    <!-- END item -->
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <!-- END row -->
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <p><a href="/site/news" class="btn btn-primary">Toutes les Actualités</a></p>
                            </div>
                        </div>
                    </div>
                    {{--<div id="upcoming-events" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="owl-carousel" id="owl2">
                                    <div class="item">
                                        <a href="#" class="probootstrap-featured-news-box">
                                            <figure class="probootstrap-media"><img src="/img/img_sm_3.jpg"
                                                    alt="Free Bootstrap Template by ProBootstrap.com"
                                                    class="img-responsive"></figure>
                                            <div class="probootstrap-text">
                                                <h3>Tempora consectetur unde nisi</h3>
                                                <span class="probootstrap-date"><i class="icon-calendar"></i>July 9,
                                                    2017</span>
                                                <span class="probootstrap-location"><i class="icon-location2"></i>White
                                                    Palace, Brooklyn, NYC</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- END item -->
                                    <div class="item">
                                        <a href="#" class="probootstrap-featured-news-box">
                                            <figure class="probootstrap-media"><img src="/img/img_sm_1.jpg"
                                                    alt="Free Bootstrap Template by ProBootstrap.com"
                                                    class="img-responsive"></figure>
                                            <div class="probootstrap-text">
                                                <h3>Tempora consectetur unde nisi</h3>
                                                <span class="probootstrap-date"><i class="icon-calendar"></i>July 9,
                                                    2017</span>
                                                <span class="probootstrap-location"><i class="icon-location2"></i>White
                                                    Palace, Brooklyn, NYC</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- END item -->
                                    <div class="item">
                                        <a href="#" class="probootstrap-featured-news-box">
                                            <figure class="probootstrap-media"><img src="/img/img_sm_2.jpg"
                                                    alt="Free Bootstrap Template by ProBootstrap.com"
                                                    class="img-responsive"></figure>
                                            <div class="probootstrap-text">
                                                <h3>Tempora consectetur unde nisi</h3>
                                                <span class="probootstrap-date"><i class="icon-calendar"></i>July 9,
                                                    2017</span>
                                                <span class="probootstrap-location"><i class="icon-location2"></i>White
                                                    Palace, Brooklyn, NYC</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- END item -->
                                    <div class="item">
                                        <a href="#" class="probootstrap-featured-news-box">
                                            <figure class="probootstrap-media"><img src="/img/img_sm_3.jpg"
                                                    alt="Free Bootstrap Template by ProBootstrap.com"
                                                    class="img-responsive"></figure>
                                            <div class="probootstrap-text">
                                                <h3>Tempora consectetur unde nisi</h3>
                                                <span class="probootstrap-date"><i class="icon-calendar"></i>July 9,
                                                    2017</span>
                                                <span class="probootstrap-location"><i class="icon-location2"></i>White
                                                    Palace, Brooklyn, NYC</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- END item -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <p><a href="#" class="btn btn-primary">View all events</a></p>
                            </div>
                        </div>
                    </div>--}}

                </div>

            </div>
        </div>
    </div>
</section>

<section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="image">
                        <div class="image-bg">
                            <img src="/img/calendrier4.png" style='height: 150%; width: 150%;'>
                        </div>
                    </div>
                    <div class="text">
                        <h3>Calendrier</h3>
                        <p>Le calendrier annuel des semaines des études à l'ENSA Safi, ainsi que les jours de vacances
                            durant l'année universitaire 2016-2017.</p>
                        <p><a href="/documents/Calendrier.pdf" class="btn btn-primary">Lire la suite</a></p>
                    </div>
                </div>

                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="image">
                        <div class="image-bg">
                            <img src="/img/emploi.png" style='height: 150%; width: 150%;'>
                        </div>
                    </div>
                    <div class="text">
                        <h3>Emploi du temps</h3>
                        <p>Les emplois du temps actualisés du cycles préparatoire et ingénieur sont consultables sur
                            cette rubrique du site ainsi que toute autre mise à jour possible.</p>
                        <p><a href="/site/emploi" class="btn btn-primary">Lire la suite</a></p>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="image">
                        <div class="image-bg">
                            <img src="/img/cours.png" style='height: 150%; width: 150%;'>
                        </div>
                    </div>
                    <div class="text">
                        <h3>Cours en ligne</h3>
                        <p>Déposés par les responsables des modules, vous trouverez aussi des séries de TD, des Examens
                            antérieurs ainsi que des éléments de réponses.</p>
                        <p><a href="#" class="btn btn-primary">Lire la suite</a></p>
                    </div>
                </div>

                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="image">
                        <div class="image-bg">
                            <img src="/img/camera.png" style='height: 150%; width: 150%;'>
                        </div>
                    </div>
                    <div class="text">
                        <h3>Visite virtuelle</h3>
                        <p>On vous propose une visite virtuelle des locaux de notre Ecole,
                            commentée par des statistiques et informations utiles concernant le régime des études.</p>
                        <p><a href="#" class="btn btn-primary">Lire la suite</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="probootstrap-section" id="parts">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                <h2>Nos Partenaires</h2>
            </div>
        </div>
        <!-- END row -->

        <div class="row table">
            <div class="col-md-3 col-sm-6">
                <div class="probootstrap-teacher text-center probootstrap-animate">
                    <figure class="media">
                        <img style="height: 80px" src="/img/uca.png" class="img-responsive">
                    </figure>
                    <div class="text">
                        <h3>UCA</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="probootstrap-teacher text-center probootstrap-animate">
                    <figure class="media">
                        <img style="height: 80px" src="/img/ocp.png" class="img-responsive">
                    </figure>
                    <div class="text">
                        <h3>OCP</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="probootstrap-teacher text-center probootstrap-animate">
                    <figure class="media">
                        <img style="height: 80px" src="/img/cnrst.png" class="img-responsive">
                    </figure>
                    <div class="text">
                        <h3>CNRST</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="probootstrap-teacher text-center probootstrap-animate">
                    <figure class="media">
                        <img style="height: 80px" src="/img/cri.png" class="img-responsive">
                    </figure>
                    <div class="text">
                        <h3>CRI</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="probootstrap-teacher text-center probootstrap-animate">
                    <figure class="media">
                        <img style="height: 80px" src="/img/comurb.png" class="img-responsive">
                    </figure>
                    <div class="text">
                        <h3>Commune</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="probootstrap-teacher text-center probootstrap-animate">
                    <figure class="media">
                        <img style="height: 80px" src="/img/fitco.png" class="img-responsive">
                    </figure>
                    <div class="text">
                        <h3>Fitco</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="probootstrap-teacher text-center probootstrap-animate">
                    <figure class="media">
                        <img style="height: 80px" src="/img/marsa.png" class="img-responsive">
                    </figure>
                    <div class="text">
                        <h3>Marsa Maroc</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="probootstrap-teacher text-center probootstrap-animate">
                    <figure class="media">
                        <img style="height: 80px" src="/img/wilaya.png" class="img-responsive">
                    </figure>
                    <div class="text">
                        <h3>Wilaya de Safi</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="probootstrap-teacher text-center probootstrap-animate">
                    <figure class="media">
                        <img style="height: 80px" src="/img/ensup.png" class="img-responsive">
                    </figure>
                    <div class="text">
                        <h3>Ensup</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="probootstrap-teacher text-center probootstrap-animate">
                    <figure class="media">
                        <img style="height: 80px" src="/img/bp.png" class="img-responsive">
                    </figure>
                    <div class="text">
                        <h3>Banque Populaire</h3>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

{{--<section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial"
    style="background-image: url(/img/slider_4.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                <h2>Alumni Testimonial</h2>
                <p class="lead">Sed a repudiandae impedit voluptate nam Deleniti dignissimos perspiciatis nostrum porro
                    nesciunt</p>
            </div>
        </div>
        <!-- END row -->
        <div class="row">
            <div class="col-md-12 probootstrap-animate">
                <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
                    <div class="item">

                        <div class="probootstrap-testimony-wrap text-center">
                            <figure>
                                <img src="/img/person_1.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                            </figure>
                            <blockquote class="quote">&ldquo;Design must be functional and functionality must be
                                translated into visual aesthetics, without any reliance on gimmicks that have to be
                                explained.&rdquo; <cite class="author"> &mdash; <span>Mike Fisher</span></cite>
                            </blockquote>
                        </div>

                    </div>
                    <div class="item">
                        <div class="probootstrap-testimony-wrap text-center">
                            <figure>
                                <img src="/img/person_2.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                            </figure>
                            <blockquote class="quote">&ldquo;Creativity is just connecting things. When you ask creative
                                people how they did something, they feel a little guilty because they didn’t really do
                                it, they just saw something. It seemed obvious to them after a while.&rdquo; <cite
                                    class="author"> &mdash;<span>Jorge Smith</span></cite></blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="probootstrap-testimony-wrap text-center">
                            <figure>
                                <img src="/img/person_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                            </figure>
                            <blockquote class="quote">&ldquo;I think design would be better if designers were much more
                                skeptical about its applications. If you believe in the potency of your craft, where you
                                choose to dole it out is not something to take lightly.&rdquo; <cite
                                    class="author">&mdash; <span>Brandon White</span></cite></blockquote>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END row -->
    </div>
</section>

<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                <h2>Why Choose Enlight School</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore
                    natus quos quibusdam soluta at.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="service left-icon probootstrap-animate">
                    <div class="icon"><i class="icon-checkmark"></i></div>
                    <div class="text">
                        <h3>Consectetur Adipisicing</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus
                            quos quibusdam soluta at.</p>
                    </div>
                </div>
                <div class="service left-icon probootstrap-animate">
                    <div class="icon"><i class="icon-checkmark"></i></div>
                    <div class="text">
                        <h3>Aliquid Dolorum Saepe</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus
                            quos quibusdam soluta at.</p>
                    </div>
                </div>
                <div class="service left-icon probootstrap-animate">
                    <div class="icon"><i class="icon-checkmark"></i></div>
                    <div class="text">
                        <h3>Eveniet Tempora Anisi</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus
                            quos quibusdam soluta at.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service left-icon probootstrap-animate">
                    <div class="icon"><i class="icon-checkmark"></i></div>
                    <div class="text">
                        <h3>Laboriosam Quod Dignissimos</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus
                            quos quibusdam soluta at.</p>
                    </div>
                </div>

                <div class="service left-icon probootstrap-animate">
                    <div class="icon"><i class="icon-checkmark"></i></div>
                    <div class="text">
                        <h3>Asperiores Maxime Modi</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus
                            quos quibusdam soluta at.</p>
                    </div>
                </div>

                <div class="service left-icon probootstrap-animate">
                    <div class="icon"><i class="icon-checkmark"></i></div>
                    <div class="text">
                        <h3>Libero Maxime Molestiae</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus
                            quos quibusdam soluta at.</p>
                    </div>
                </div>

            </div>
        </div>
        <!-- END row -->
    </div>
</section>--}}

@endsection
@extends('parent')
@section('content')


    <section>
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        @foreach($universites as $universite)
                            <div class="col-sm-6 blog-item mb100 wow match-height">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="hover-item mb30">
                                            <img src="{{$universite->imagePrincipale()}}" class="img-responsive smoothie" alt="title">
                                            <div class="overlay-item-caption smoothie"></div>
                                            <div class="hover-item-caption smoothie">
                                                <h3 class="vertical-center smoothie"><a href="{{ route('site', $universite->id) }}" class="smoothie btn btn-primary page-scroll" title="voir l'école">Voir</a></h3>
                                            </div>
                                        </div>
                                        <h2 class="post-title">{{ $universite->libelle }}</h2>

                                        <p>{{  substr($universite->description, 0, 30)  }}</p>
                                        <a class="btn btn-primary mt30" href="{{ route('site', $universite->id) }}">Lire plus</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div id="post-sidebar" class="col-sm-3 col-sm-offset-1">
                        <div class="widget mb50">
                            <h4 class="widget-title">Ecole de formation</h4>
                            <div>
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="widget-img" src="{{ asset('assets/img/widget/tdsi.jpeg') }}" alt="" height="60" width="60">
                                    </div>
                                    <div class="media-body">
                                        <span class="media-heading"><a href="https://fad.fst.ucad.sn/course/index.php?categoryid=307&lang=fr">TDSI</a></span>
                                        <small class="muted">Poste le  16 Avril 2021</small>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="widget-img" src="{{ asset('assets/img/widget/esp.jpeg') }}" alt="" height="60" width="60">
                                    </div>
                                    <div class="media-body">
                                        <span class="media-heading"><a href="http://www.esp.sn/">ESP Dakar</a></span>
                                        <small class="muted">Poste le  16 Avril 2021</small>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="widget-img" src="{{ asset('assets/img/widget/ipsl.jpeg') }}" alt="" height="60" width="60">
                                    </div>
                                    <div class="media-body">
                                        <span class="media-heading"><a href="http://ipsl.sn/">IPS Saint-Louis</a></span>
                                        <small class="muted">Poste le  16 Avril 2021</small>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="widget-img" src="{{ asset('assets/img/widget/ept.jpeg') }}" alt="" height="60" width="60">
                                    </div>
                                    <div class="media-body">
                                        <span class="media-heading"><a href="https://fr.wikipedia.org/wiki/%C3%89cole_polytechnique_de_Thi%C3%A8s">ESP de THIES</a></span>
                                        <small class="muted">Poste le  16 Avril 2021</small>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="widget about-us-widget mb50">
                            <h4 class="widget-title">EduApp</h4>
                            <p>EduApp est un site web conçcu pour les écoles Sénégalais.<br>
                                Elle permet de visité les écoles et plus donner des informatios sur les classes <br>
                                Chaque école peut enregister ces ecoles et étudiants.

                            </p>
                        </div>


                    </div>

                </div>


            </div>
        </div>
    </section>



@endsection
















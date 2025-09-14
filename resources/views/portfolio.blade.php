@extends('master')
@section('title', 'Portfolio - Nos Réalisations | Pronetwork')

@section('content')
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container pt-5">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Nos Réalisations</h2>
            <h3 class="section-subheading text-muted">Une sélection de projets conçus avec passion par notre équipe.</h3>
        </div>
        <div class="row">

            <!-- Projet 1 -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/site-ecommerce.jpg" alt="Site e-commerce Shop'N Go" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Shop'N Go</div>
                        <div class="portfolio-caption-subheading text-muted">Site e-commerce</div>
                    </div>
                </div>
            </div>

            <!-- Projet 2 -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/restaurant.jpg" alt="Site vitrine restaurant Le Gourmet" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Le Gourmet</div>
                        <div class="portfolio-caption-subheading text-muted">Site vitrine</div>
                    </div>
                </div>
            </div>

            <!-- Projet 3 -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/refonte-site.jpg" alt="Refonte site TechBuild" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">TechBuild</div>
                        <div class="portfolio-caption-subheading text-muted">Refonte de site</div>
                    </div>
                </div>
            </div>

            <!-- Projet 4 -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/seo.jpg" alt="Optimisation SEO GreenHome" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">GreenHome</div>
                        <div class="portfolio-caption-subheading text-muted">SEO & Référencement</div>
                    </div>
                </div>
            </div>

            <!-- Projet 5 -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/app-mobile.jpg" alt="App mobile MyCoach" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">MyCoach</div>
                        <div class="portfolio-caption-subheading text-muted">Application mobile</div>
                    </div>
                </div>
            </div>

            <!-- Projet 6 -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/branding.jpg" alt="Branding Nova Agency" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Nova Agency</div>
                        <div class="portfolio-caption-subheading text-muted">Branding & Identité</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MODALES PROJETS -->
<!-- Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal">
                <img src="assets/img/close-icon.svg" alt="Fermer" />
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <h2 class="text-uppercase">Shop'N Go</h2>
                            <p class="item-intro text-muted">Site e-commerce avec système de paiement sécurisé</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/site-ecommerce.jpg" alt="Shop'N Go" />
                            <p>Développement d’une boutique en ligne complète avec gestion de stock, tunnel de commande optimisé, et intégration Stripe/PayPal. Projet livré en 6 semaines.</p>
                            <ul class="list-inline">
                                <li><strong>Client :</strong> Shop'N Go</li>
                                <li><strong>Technologies :</strong> Laravel, Vue.js</li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                Fermer le projet
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Fermer" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <h2 class="text-uppercase">Roberta's</h2>
                            <p class="item-intro text-muted">Site vitrine responsive pour restaurant gastronomique</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/restaurant.jpg" alt="Le Gourmet" />
                            <p>Création d’un site élégant avec menu dynamique, réservation en ligne, et optimisation mobile. Design sur mesure selon la charte du client.</p>
                            <ul class="list-inline">
                                <li><strong>Client :</strong> Roberta's</li>
                                <li><strong>Technologies :</strong> WordPress</li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                Fermer le projet
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Fermer" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <h2 class="text-uppercase">TechBuild</h2>
                            <p class="item-intro text-muted">Refonte complète d’un site BTP</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/refonte-site.jpg" alt="TechBuild" />
                            <p>Refonte UX/UI, amélioration des performances web, refonte SEO, intégration CMS personnalisé. Objectif : générer plus de leads via le site.</p>
                            <ul class="list-inline">
                                <li><strong>Client :</strong> TechBuild</li>
                                <li><strong>Technologies :</strong> Laravel, Bootstrap</li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                Fermer le projet
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Fermer" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <h2 class="text-uppercase">GreenHome</h2>
                            <p class="item-intro text-muted">Optimisation SEO pour entreprise éco-responsable</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/seo.jpg" alt="GreenHome" />
                            <p>Audit technique, stratégie de contenu, netlinking, amélioration de la performance mobile. Résultat : +300% de trafic organique en 4 mois.</p>
                            <ul class="list-inline">
                                <li><strong>Client :</strong> GreenHome</li>
                                <li><strong>Outils :</strong> SEMrush, Google Search Console, Ahrefs</li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                Fermer le projet
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Fermer" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <h2 class="text-uppercase">MyCoach</h2>
                            <p class="item-intro text-muted">Application mobile de coaching sportif</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/app-mobile.jpg" alt="MyCoach" />
                            <p>Conception UI/UX, développement React Native, système de suivi des progrès et de notifications push. Disponible sur iOS et Android.</p>
                            <ul class="list-inline">
                                <li><strong>Client :</strong> MyCoach</li>
                                <li><strong>Technologies :</strong> React Native, Firebase</li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                Fermer le projet
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Fermer" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <h2 class="text-uppercase">Nova Agency</h2>
                            <p class="item-intro text-muted">Création d'identité visuelle complète</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/branding.jpg" alt="Nova Agency" />
                            <p>Logo, palette de couleurs, typographies, papeterie et charte graphique. Un branding cohérent et percutant pour améliorer leur présence sur le web.</p>
                            <ul class="list-inline">
                                <li><strong>Client :</strong> Nova Agency</li>
                                <li><strong>Outils :</strong> Adobe Illustrator, Figma</li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                Fermer le projet
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

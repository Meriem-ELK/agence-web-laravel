@extends('master')
@section('title', 'Pronetwork', 'Agence Web & Solutions Numériques')
@section('content')
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-heading text-uppercase">Experts en Solutions Numériques</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="apropos">Découvrir notre histoire</a>
            </div>
        </header>
        
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Des solutions sur-mesure pour propulser votre entreprise vers le succès</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Développement de plateformes e-commerce performantes et sécurisées. Intégration de systèmes de paiement, gestion des stocks et analytics avancées pour maximiser vos ventes en ligne.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Création d'interfaces utilisateur modernes et intuitives. Optimisation multi-écrans garantissant une expérience utilisateur exceptionnelle sur tous les appareils et navigateurs.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-headset fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Support 24/7</h4>
                         <p class="text-muted">Maintenance proactive et support technique dédié. Surveillance continue, mises à jour de sécurité et assistance personnalisée pour garantir la continuité de vos services.</p>
                    </div>
                </div>
            </div>
        </section>

             
        <!-- Statistiques -->
        <section class="page-section bg-light">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-custom">
                            <div class="card-body p-4">
                                <h2 class="text-gradient display-4 fw-bold">150+</h2>
                                <p class="text-muted mb-0">Projets Réalisés</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-custom">
                            <div class="card-body p-4">
                                <h2 class="text-gradient display-4 fw-bold">98%</h2>
                                <p class="text-muted mb-0">Satisfaction Client</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-custom">
                            <div class="card-body p-4">
                                <h2 class="text-gradient display-4 fw-bold">5+</h2>
                                <p class="text-muted mb-0">Années d'Expérience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-custom">
                            <div class="card-body p-4">
                                <h2 class="text-gradient display-4 fw-bold">24/7</h2>
                                <p class="text-muted mb-0">Support Disponible</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
  
        <!-- Certifications et expertises -->
        <div class="container mt-5">
            <div class="text-center">
                <h4 class="text-uppercase mb-4">Certifications & Expertises</h4>
                <div class="row justify-content-center">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                        <div class="p-3 border-radius-custom bg-white shadow-custom">
                            <i class="fab fa-aws fa-2x text-primary"></i>
                            <p class="small mt-2 mb-0">AWS Certified</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                        <div class="p-3 border-radius-custom bg-white shadow-custom">
                            <i class="fab fa-google fa-2x text-primary"></i>
                            <p class="small mt-2 mb-0">Google Partner</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                        <div class="p-3 border-radius-custom bg-white shadow-custom">
                            <i class="fab fa-react fa-2x text-primary"></i>
                            <p class="small mt-2 mb-0">React Expert</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                        <div class="p-3 border-radius-custom bg-white shadow-custom">
                            <i class="fas fa-palette fa-2x text-primary"></i>
                            <p class="small mt-2 mb-0">UX Certified</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                        <div class="p-3 border-radius-custom bg-white shadow-custom">
                            <i class="fas fa-shield-alt fa-2x text-primary"></i>
                            <p class="small mt-2 mb-0">Cyber Security</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
@endsection('content')
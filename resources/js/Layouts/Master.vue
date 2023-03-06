import white from '../../../node_modules/jqvmap-novulnerability/examples/images/marker/white.png';
<script setup>
    import {
        Link
    } from '@inertiajs/vue3';
</script>
<template>
    <header id="header" class="header">
        <div class="container">
            <h1 class="logo" v-bind:style="{marginTop:60 + 'px', marginBottom:10 + 'px'}">
                <span class="text">Bibliothèque</span>
            </h1>
            <!--//logo-->
            <nav class="main-nav navbar navbar-right navbar-expand-md">
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-collapse">
                    <span> </span>
                    <span> </span>
                    <span> </span>
                </button>
                <div id="navbar-collapse" class="navbar-collapse collapse"
                    v-bind:style="{marginTop:40 + 'px', marginBottom:10 + 'px'}">
                    <ul class="nav navbar-nav">

                        <Link href="/" class="nav-link active"  v-bind:style="{color: '#fff',marginTop:10 + 'px'}">Accueil</Link>

                        <Link href="/a-propos" class="nav-link"  v-bind:style="{color: '#fff',marginTop:10 + 'px'}">A propos</Link>


                        <Link href="/contact" class="nav-link"  v-bind:style="{color: '#fff',marginTop:10 + 'px'}">Contact</Link>

                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" href="#">Categorie <i class="fas fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="">Narratif</a></li>
                                <li><a class="dropdown-item" href="">Poème</a></li>
                                <li><a class="dropdown-item" href="">Epistolaire</a></li>
                                <li><a class="dropdown-item" href="">Théâtre</a></li>
                                <li><a class="dropdown-item" href="">Argumentatif</a> </li>
                                <li><a class="dropdown-item" href="">Developpement personnel</a></li>
                            </ul>
                        </li>
                        <!--//dropdown-->
                        <li class="nav-item"><a class="nav-link login-trigger" href="#" data-bs-toggle="modal" data-bs-target="#login-modal">Connexion</a></li>
                        <li class="nav-item nav-item-cta last" v-bind:style="{marginTop:-0 + 'px'}"><a class="btn-signup" href="#" data-bs-toggle="modal"   data-bs-target="#signup-modal">S'inscrire</a></li>


                    </ul>
                    <!--//nav-->
                </div>
                <!--//navabr-collapse-->
            </nav>
            <!--//main-nav-->
        </div>
        <!--//container-->
    </header>
    <!--//header-->
    <main>
        <slot />
    </main>
    <footer class="footer" v-bind:style="{marginTop: 70 + 'px'}">
        <div class="container">
            <div class="row">
                <div class="footer-col col-6 col-md-3">
                    <div class="footer-col-inner">
                        <h3 class="col-title">About</h3>
                        <ul class="footer-menu list-unstyled">
                            <li><a class="text-link" href="#">Company</a></li>
                            <li><a class="text-link" href="#">Blog</a></li>
                            <li><a class="text-link" href="#">Jobs</a> <span class="badge bg-success">We're
                                    hiring</span></li>
                            <li><a class="text-link" href="#">Press</a></li>
                            <li><a class="text-link" href="#">Contact</a></li>
                        </ul>
                    </div>
                    <!--//footer-col-inner-->
                </div>
                <!--//footer-col-->
                <div class="footer-col col-6 col-md-3">
                    <div class="footer-col-inner">
                        <h3 class="col-title">Product</h3>
                        <ul class="footer-menu list-unstyled">
                            <li><a class="text-link" href="#">Features</a></li>
                            <li><a class="text-link" href="#">Tutorials</a></li>
                            <li><a class="text-link" href="#">Support Center</a></li>
                            <li><a class="text-link" href="#">Pricing</a></li>
                            <li><a class="text-link" href="#">Customers</a></li>
                        </ul>
                    </div>
                </div>
                <!--//footer-col-->
                <div class="footer-col col-6 col-md-3">
                    <div class="footer-col-inner">
                        <h3 class="col-title">Useful Links</h3>
                        <ul class="footer-menu list-unstyled">
                            <li><a class="text-link" href="#">Sign up</a></li>
                            <li><a class="text-link" href="#">Login</a></li>
                            <li><a class="text-link" href="#">Become our partner</a></li>
                            <li><a class="text-link" href="#">FAQs</a></li>
                        </ul>
                    </div>
                </div>
                <!--//footer-col-->
                <div class="footer-col col-6 col-md-3">
                    <div class="footer-col-inner">
                        <h3 class="col-title">Legal</h3>
                        <ul class="footer-menu list-unstyled">
                            <li><a class="text-link" href="#">Privacy</a></li>
                            <li><a class="text-link" href="#">Terms of Services</a></li>
                            <li><a class="text-link" href="#">Policies</a></li>
                        </ul>
                    </div>
                </div>
                <!--//footer-col-->
            </div>
            <!--//row-->
            <div class="divider"></div>
            <div class="footer-bottom text-center">
                <ul class="social-media list-inline">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                </ul>

                <small class="copyright">Template Copyright @ <a class="text-link"
                        href="http://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a></small>
            </div>
        </div>
        <!--//container-->
    </footer>
    <!--//footer-->

</template>

<script setup>
</script>

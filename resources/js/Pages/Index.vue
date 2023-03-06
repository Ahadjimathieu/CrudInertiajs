
<template>
    <layout>
        <section class="heading-section section section-on-bg">
            <div class="hero-wrapper">
                <div class="hero-holder"></div>
                <div class="hero-mask-solid"></div>
            </div>
            <!--//hero-wrapper-->
            <div class="container heading-content" v-bind:style="{marginTop: 200 + 'px'}">
                <h2 class="headline">About Our Company</h2>
                <div class="intro">Startup Kit is founded in 2016 with a distributed team lorem ipsum dolor sit amet
                    <br>Aenean commodo ligula eget dolor.
                </div>
                <div class="actions">
                    <a class="scrollto-no-offset scrollto" href="#team-block">Meet the team</a>
                    <a class="scrollto-no-offset scrollto" href="#team-block"><img src="" alt=""></a>
                </div>
                <!--//actions-->
            </div>
            <!--//container-->
        </section>
        <!--//heading-section-->

        <div class="content" v-bind:style="{marginTop: 50 + 'px'}">
            <div class="containerr" style="width:70%; margin:0px; margin-left: 300px;" >
                <div class="row">
                    <div   v-for="livre in livres"  :key="livre.id" style="padding:0;" class="col-3" >
                        <div class="card" style="width: 18rem;">
                            <img src="img/image.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5  v-if="livre.titre" class="card-title">{{livre.titre}}</h5>
                                <h6  v-if=" livre.type" class="card-title"> {{ livre.type.libelle}} </h6>
                                <h4 v-if=" livre.auteur" class="card-title"> {{ livre.auteur.nom}} </h4>
                                <p v-if="livre.edition" class="card-text">Edition : {{livre.edition}}</p>
                                <p  v-if="livre.annee_publication" class="card-text">Année de parution :{{livre.annee_publication}}</p>
                                <a href="#" class="btn btn-primary">Emprunter </a>
                            </div>
                        </div>
                    </div>
                    <div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Login Modal -->
        <!-- Video Modal -->
        <div  class="modal modal-video" id="modal-video" tabindex="-1" role="dialog"
            aria-labelledby="videoModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-hidden="true">&times;</button>
                        <h4 id="videoModalLabel" class="modal-title sr-only">Video Tour</h4>
                    </div>
                    <div class="modal-body">
                        <div class="video-container ratio ratio-16x9">
                            <iframe id="vimeo-video" src="https://player.vimeo.com/video/140875675?" width="720"
                                height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen
                                allowfullscreen allow="autoplay; fullscreen"></iframe>
                        </div>
                        <!--//video-container-->
                    </div>
                    <!--//modal-body-->
                </div>
                <!--//modal-content-->
            </div>
            <!--//modal-dialog-->
        </div>
        <!--//modal-->

        <!-- Login Modal -->

        <!--//configure-panel-->
        <!--//configure-panel-->
    </layout>
</template>


<script>
    import Layout from '../Layouts/Master.vue'
    import {
        Link
    } from '@inertiajs/vue3';

    // import EnTete from '../Layouts/Partials/Header.vue'
    // import  Pied from '../Layouts/Partials/Footer.vue'
    export default {
        props: {
            livres: Object

        },

        // Using a render function...
        layout: (h, page) => h(Layout, [page]),

        // Using shorthand syntax...
        layout: Layout,
    }

</script>

<template>
    <Layout>
        <section class="heading-section section section-on-bg">
            <div class="hero-wrapper">
                <div class="hero-holder"></div>
                <div class="hero-mask-solid"></div>
            </div>
            <!--//hero-wrapper-->
            <div class="container heading-content" v-bind:style="{marginTop: 200 + 'px'}">
                <h2 class="headline">Get in Touch</h2>
                <div class="meta">We’d love to hear from you. Lorem ipsum dolor sit amet, <br
                        class="d-none d-md-block">consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                    massa. </div>
            </div>
            <!--//container-->
        </section>
        <!--//heading-section-->

        <div class="contact-methods">
            <div class="container">
                <div class="row">
                    <div class="item col-12 col-md-6">
                        <div class="item-inner">
                            <h4 class="item-title"><i class="fas fa-life-ring" aria-hidden="true"></i> Get Support</h4>
                            <div class="item-content">If you have any questions or problems with our product please
                                visit our <a class="text-link" href="support.html">Support Center</a>.</div>
                        </div>
                        <!--//item-inner-->
                    </div>
                    <!--//item-->

                    <div class="item col-12 col-md-6">
                        <div class="item-inner">
                            <h4 class="item-title"><i class="fas fa-phone-volume" aria-hidden="true"></i> Enterprise
                                Sales</h4>
                            <div class="item-content">Lorem ipsum dolor sit amet, consectetuer. Contact our sales team
                                at <a class="text-link" href="tel:0800123456">0800 123 456</a>.</div>
                        </div>
                        <!--//item-inner-->
                    </div>
                    <!--//item-->

                    <div class="item col-12 col-md-6">
                        <div class="item-inner">
                            <h4 class="item-title"><i class="fas fa-file-archive" aria-hidden="true"></i> Press
                                Inquiries</h4>
                            <div class="item-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                commodo ligula eget dolor <a class="text-link" href="support.html">Download our press
                                    kit</a>.</div>
                        </div>
                        <!--//item-inner-->
                    </div>
                    <!--//item-->

                    <div class="item col-12 col-md-6">
                        <div class="item-inner">
                            <h4 class="item-title"><i class="fas fa-users" aria-hidden="true"></i> Partnership Inquiries
                            </h4>
                            <div class="item-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                commodo ligula eget dolor <a class="text-link" href="support.html">Use the contact form
                                    below</a>.</div>
                        </div>
                        <!--//item-inner-->
                    </div>
                    <!--//item-->

                </div>
                <!--//row-->
            </div>
            <!--//container-->
        </div>
        <!--//contact-methods-->

        <div class="form-block">
            <form id="contact-form" class="contact-form" method="post" action="">
                <h3 class="form-title text-center">Quick Contact Form</h3>
                <div class="row">
                    <div class="form-group col-12 col-md-6">
                        <label class="sr-only" for="cname">Name</label>
                        <input type="text" class="form-control" id="cname" name="name" placeholder="Name"
                            minlength="2" aria-required="true">
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label class="sr-only" for="cemail">Email</label>
                        <input type="email" class="form-control" id="cemail" name="email" placeholder="Email"
                            aria-required="true">
                    </div>
                    <div class="form-group col-12">
                        <label class="sr-only" for="cmessage">Your message</label>
                        <textarea class="form-control" id="cmessage" name="message" placeholder="Enter your message" rows="12"
                            aria-required="true"></textarea>
                    </div>
                    <div class="form-group col-12">
                        <button type="submit" class="btn w-100 btn-cta btn-primary">Send It</button>
                    </div>
                </div>
                <!--//row-->
                <div id="form-messages"></div>
            </form>
            <!--//contact-form-->
        </div>
        <!--//form-block-->
    </Layout>
</template>

<script setup>
    import {
        Link
    } from '@inertiajs/vue3';
  import Layout from '../Layouts/Master.vue'
    // import EnTete from '../Layouts/Partials/Header.vue'
    // import  Pied from '../Layouts/Partials/Footer.vue'
//     export default {
//   // Using a render function...
//     layout: (h, page) => h(Layout, [page]),

//     // Using shorthand syntax...
//     layout: Layout,
//     }
</script>

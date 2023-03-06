<template>
    <layout >
        <div class="login-box" style="width:700px" v-bind:style="{marginTop: 200 + 'px', marginLeft: 600 + 'px' }">
            <div class="login-logo">
                <a href="#" style="color:black;font-size:1.8em;"><b style="font-weight:bold;">TRAMUD </b>ADMIN</a>
                <hr />
            </div>

            <div class="card bg-dark">
                <div class="card-body bg-dark login-card-body">

                    <form method="POST" action="">

                        <div class="input-group mb-3">
                            <input type="email" placeholder="Email" class="form-control"
                                name="email" value="" required autocomplete="off" autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password"
                                 name="password" required
                                autocomplete="current-password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">


                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </layout>
</template>

<script>
    import Layout from '../../Layouts/App.vue'

    export default {
        layout: (h, page) => h(Layout, [page]),

// Using shorthand syntax...
        layout:Layout,
    }
</script>

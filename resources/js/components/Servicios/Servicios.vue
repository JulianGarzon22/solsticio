<template>
    <div class="vh-100 container-fluid">
        <div class="row my-5">
            <div class="col-xl-4">
                <div class="card text-left">
                    <img alt="salon_de_juntas" class="card-img-top" src="../../../images/juntas.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Salon de Juntas</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit tortor fringilla
                            malesuada, nisi mollis egestas netus quisque dui ullamcorper varius molestie enim, dictumst
                            senectus pulvinar cum blandit nostra velit penatibus integer. Facilisis sagittis eu
                            condimentum aenean porta rhoncus ultricies, tempor torquent ad libero mattis porttitor,
                            bibendum scelerisque ultrices ac fusce nisl.</p>
                        <a class="btn btn-primary" href="/servicios/salon-de-juntas">Más Información</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card text-left">
                    <img alt="salon_social" class="card-img-top" src="../../../images/social.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Salon Social</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit tortor fringilla
                            malesuada, nisi mollis egestas netus quisque dui ullamcorper varius molestie enim, dictumst
                            senectus pulvinar cum blandit nostra velit penatibus integer. Facilisis sagittis eu
                            condimentum aenean porta rhoncus ultricies, tempor torquent ad libero mattis porttitor,
                            bibendum scelerisque ultrices ac fusce nisl.</p>
                        <a class="btn btn-primary" href="/servicios/salon-social">Más Información</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card text-left">
                    <img alt="bbq" class="card-img-top" src="../../../images/bbq.jpg">
                    <div class="card-body">
                        <h4 class="card-title">BBQ</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit tortor fringilla
                            malesuada, nisi mollis egestas netus quisque dui ullamcorper varius molestie enim, dictumst
                            senectus pulvinar cum blandit nostra velit penatibus integer. Facilisis sagittis eu
                            condimentum aenean porta rhoncus ultricies, tempor torquent ad libero mattis porttitor,
                            bibendum scelerisque ultrices ac fusce nisl.</p>
                        <a class="btn btn-primary" href="/servicios/bbq">Más Información</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        created() {
            if (this.$auth.isAuthenticated()) this.getUser();
        },
        data() {
            return {
                user: {}
            }
        },
        methods: {
            getUser() {
                const url = "/api/auth/user";
                axios
                    .get(url)
                    .then(response => {
                        this.user = response.data.data;
                    })
                    .catch();
            }
        }
    }
</script>

<style scoped>
    .vh-100 {
        min-height: 74vh;
    }

    img {
        width: 100%;
        height: 400px;
        object-fit: cover;
    }
</style>

<script>
export default {
    name: 'Home'
}
</script>

<template>
    <section class="jumbotron">
        <div class="container">
            <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" alt="Foto profilo Gabriele Rinciari">
            <h1>Ciao, sono Gabriele</h1>
            <h2>Fullstack developer</h2>
            <router-link :to="{ name: 'contacts'}" class="contact-me">Contattami <i class="fa-solid fa-paper-plane"></i></router-link>
        </div>
    </section>

    <section class="light-blue">
            <svg class="wave-1hkxOo" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none"><path class="wavePath-haxJK1 animationPaused-2hZ4IO" d="M826.337463,25.5396311 C670.970254,58.655965 603.696181,68.7870267 447.802481,35.1443383 C293.342778,1.81111414 137.33377,1.81111414 0,1.81111414 L0,150 L1920,150 L1920,1.81111414 C1739.53523,-16.6853983 1679.86404,73.1607868 1389.7826,37.4859505 C1099.70117,1.81111414 981.704672,-7.57670281 826.337463,25.5396311 Z"></path></svg>
            <div class="container">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, excepturi! Iure impedit alias itaque molestias reiciendis, rem eum dicta neque earum saepe quidem distinctio maxime minima nemo accusantium hic doloribus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, excepturi! Iure impedit alias itaque molestias reiciendis, rem eum dicta neque earum saepe quidem distinctio maxime minima nemo accusantium hic doloribus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, excepturi! Iure impedit alias itaque molestias reiciendis, rem eum dicta neque earum saepe quidem distinctio maxime minima nemo accusantium hic doloribus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, excepturi! Iure impedit alias itaque molestias reiciendis, rem eum dicta neque earum saepe quidem distinctio maxime minima nemo accusantium hic doloribus.
            </div>
        </section>
        <svg class="wave-1hkxOo close-wave light-blue" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none"><path class="wavePath-haxJK1 animationPaused-2hZ4IO" d="M826.337463,25.5396311 C670.970254,58.655965 603.696181,68.7870267 447.802481,35.1443383 C293.342778,1.81111414 137.33377,1.81111414 0,1.81111414 L0,150 L1920,150 L1920,1.81111414 C1739.53523,-16.6853983 1679.86404,73.1607868 1389.7826,37.4859505 C1099.70117,1.81111414 981.704672,-7.57670281 826.337463,25.5396311 Z"></path></svg>

</template>



<style lang="scss">

    @use './../../scss/partials/vue_variables'as *;

    section {
        padding-bottom: 50px;
    }

    section.light-blue{
        background-color: $light-blue;
    }

    .jumbotron .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        img {
            border-radius: 50%;
        }
        h1, h2 {
            align-self: flex-start;
        }
        h1 {
            font-size: 35px;
        }
        h2 {
            text-transform: uppercase;
            color: $grey;
        }
    }

    .contact-me {
        text-decoration: none;
        background-color: $header-color;
        color: white;
        padding: 20px;
        border-radius: 10px;
    }

    header, section {
        scroll-snap-align: start;
        scroll-snap-stop: always;
    }

html {
  scroll-snap-type: y mandatory;
}
</style>

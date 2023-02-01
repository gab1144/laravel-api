<script>

    import axios from 'axios';

    import {store} from './../data/store';
    import {BASE_URL} from '../data/data';
    import LanguagesSlider from './../components/LanguagesSlider.vue'

export default {
    name: 'Home',
    components:{
        LanguagesSlider
    },
    data(){
        return {
            BASE_URL,
            store,
            active_base_url: BASE_URL + 'projects'
        }
    },
    methods:{
            getApi(url){
                axios.get(url)
                    .then(result => {
                        store.total = result.data.projects.total;
                    })
            }
        },
        mounted(){
            this.getApi(this.active_base_url);
        }
}
</script>

<template>
    <section class="jumbotron scroll">
        <div class="container">
            <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" alt="Foto profilo Gabriele Rinciari">
            <h1>Ciao, sono Gabriele</h1>
            <h2>Fullstack developer</h2>
            <router-link :to="{ name: 'contacts'}" class="contact-me">Contattami <i class="fa-solid fa-paper-plane"></i></router-link>
        </div>
    </section>

    <section class="light-blue scroll">
            <svg class="wave-1hkxOo" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none"><path class="wavePath-haxJK1 animationPaused-2hZ4IO" d="M826.337463,25.5396311 C670.970254,58.655965 603.696181,68.7870267 447.802481,35.1443383 C293.342778,1.81111414 137.33377,1.81111414 0,1.81111414 L0,150 L1920,150 L1920,1.81111414 C1739.53523,-16.6853983 1679.86404,73.1607868 1389.7826,37.4859505 C1099.70117,1.81111414 981.704672,-7.57670281 826.337463,25.5396311 Z"></path></svg>
            <img src="https://frameartjamaica.com/wp-content/uploads/2018/07/placeholder-img-1.jpg" alt="" class="center-no-section-img">

            <div class="container info-numbers">
                <div>
                    <h3>Progetti svolti</h3>
                    <span class="content-number">{{ store.total }}</span>
                </div>

                <div>
                    <h3>Esperienza</h3>
                    <span class="content-number">0+ mesi</span>
                </div>

                <div>
                    <h3>Compagnie in cui ho lavorato</h3>
                    <span class="content-number">{{ store.total }}</span>
                </div>
            </div>
        </section>
        <svg class="wave-1hkxOo close-wave light-blue" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none"><path class="wavePath-haxJK1 animationPaused-2hZ4IO" d="M826.337463,25.5396311 C670.970254,58.655965 603.696181,68.7870267 447.802481,35.1443383 C293.342778,1.81111414 137.33377,1.81111414 0,1.81111414 L0,150 L1920,150 L1920,1.81111414 C1739.53523,-16.6853983 1679.86404,73.1607868 1389.7826,37.4859505 C1099.70117,1.81111414 981.704672,-7.57670281 826.337463,25.5396311 Z"></path></svg>

        <section class="scroll">
            <div class="container">
                <LanguagesSlider/>
            </div>
        </section>

</template>



<style lang="scss" scoped>

    @use './../../scss/partials/vue_variables'as *;

    section{
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
        margin-top: 20px;
        text-decoration: none;
        background-color: $header-color;
        color: white;
        padding: 20px;
        border-radius: 10px;
        align-self: flex-start;
    }
    .info-numbers{
        display: flex;
        justify-content: space-between;
        > div {
            width: calc(100% / 3);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

    }
    .content-number {
        display: block;
    }
    .center-no-section-img{
        width: 70%;
        max-width: 800px;
        margin: 30px auto;
    }
</style>

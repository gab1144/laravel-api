<script>

  export default{
    name: 'Footer'
  }
</script>

<template>
    <footer>
        <div class="container footer-top">
            <div>
                <h3>Gabriele</h3>
                <h4>Fullstack developer</h4>
                <router-link :to="{ name: 'contacts'}" class="contact-me">Contattami</router-link>
            </div>

            <div class="menu">

                <ul>
                    <li><router-link :to="{ name: 'home'}">home</router-link></li>
                    <li><router-link :to="{ name: 'blog'}">blog</router-link></li>
                    <li><router-link :to="{ name: 'about'}">chi siamo</router-link></li>
                    <li><router-link :to="{ name: 'contacts'}">contatti</router-link></li>
                </ul>
            </div>

        </div>
            <div class="social-links container">

                <div class="">
                    <a href="https://github.com/gab1144" class="social-links"><i class="fa-brands fa-github"></i></a>
                </div>
                <div class="">
                    <a href="https://www.linkedin.com/in/gabriele-rinciari-05b915246/" class="social-links"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
    </footer>
</template>

<style lang="scss" scoped>
    @use './../../scss/partials/_vue_variables.scss' as *;

    footer {
        padding: 50px;
        background-color: $light-grey;
        .container {
            height: 100%;
            display: flex;
            flex-wrap: wrap;
        }

        .footer-top > div {
                width: calc(100% / 2);
        }
    }

    h3 {
        font-size: 23px;
    }

    h4 {
        margin-bottom: 20px;
    }

    a {
        text-decoration: none;
        color: black;
    }

    .menu {
        height: 100%;
    }

    ul{
        display: flex;
        justify-content: space-between;
        align-items: center;
        list-style: none;
        height: 70%;
        width: 100%;
        li{
            a{
                text-decoration: none;
                text-transform: uppercase;
                &:hover{
                    color: $header-color;
                }
            }
        }
    }

    .social-links {
        padding-top: 20px;
        display: flex;
        justify-content: flex-end;
        > div {
            margin-left: 20px;
            font-size: 30px;
        }
    }

    .contact-me {
        padding: 10px;
        background-color: $light-blue;
        margin-top: 10px;
        border-radius: 10px;
    }
</style>

<script>
export default {
    name: 'Header'
}
</script>

<template>

    <header>
        <div class="logo">
            <img src="./../assets/logo-black.svg" alt="Logo Gabriele Rinciari">
        </div>

        <div>
            <ul>
                <li><router-link :to="{ name: 'home'}">home</router-link></li>
                <li><router-link :to="{ name: 'blog'}">blog</router-link></li>
                <li><router-link :to="{ name: 'about'}">chi siamo</router-link></li>
                <li><router-link :to="{ name: 'contacts'}">contatti</router-link></li>
            </ul>
        </div>
    </header>

</template>



<style lang="scss" scoped>

header{
    .logo {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        img {
            height: 80px;
            width: 100px;
            filter: invert(100%);
        }
    }

    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 40px;
    height: 100px;
    ul{
        list-style: none;
        display: flex;
        li{
            min-width: 100px;
            a{
                color: white;
                text-decoration: none;
                text-transform: uppercase;
                &:hover,
                &.active{
                    color: #98DED9;
                }
            }
        }
    }
}
</style>

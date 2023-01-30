<script>
    import axios from 'axios';
    import {BASE_URL} from '../data/data'
    import {store} from '../data/store'
    export default {
        name: 'AsideCategoryTag',
        data(){
            return{
                store
            }
        },
        methods:{
            getApiByCategoryTag(url,id){
                console.log(`${BASE_URL}projects/${url}/${id}`);

                axios.get(`${BASE_URL}projects/${url}/${id}`)
                    .then( result => {
                        console.log(result.data);
                        store.projects = result.data;
                        store.show_paginate = false;
                    })
            },
            setMainTitle(title){
                store.main_title = title;
            }
        }
    }
</script>


<template>
    <div class="categories">

        <div class="type">
            <h2>Tipi</h2>
            <div class="button-area">
                <button v-for="projType in store.types" :key="'type'+projType.id"
                    @click="getApiByCategoryTag('project-type', projType.id); setMainTitle('Elenco post per categoria ' + projType.name)"
                    >
                    {{projType.name}}
                </button>
            </div>
        </div>

        <div class="technology">
            <h2>Tecnologie</h2>
            <div class="button-area">
                <button v-for="technology in store.technologies" :key="'technology' + technology.id"
                    @click="getApiByCategoryTag('project-technology', technology.id); setMainTitle('Elenco post per tag ' + technology.name)"
                >
                    {{technology.name}}
                </button>
            </div>
        </div>

        <div class="all-projects button-area">
            <button
            @click="$emit('getApi')"
            >
            Tutti i progetti
            </button>
        </div>

    </div>
</template>


<style lang="scss" scoped>
.categories {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    h2 {
        text-align: center;
    }
    .type, .technology {
        width: calc(80% / 2);
    }
    .all-projects {
        width: 20%;
    }
    button {
        height: fit-content;
        width: fit-content;
    }

    .button-area {
        display: flex;
        align-items: center;
        justify-content: center;
        button {
            margin: 0 5px;
        }
    }
}
</style>

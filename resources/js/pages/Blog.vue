<script>
    import axios from 'axios';

    import {store} from './../data/store';
    import {BASE_URL} from '../data/data'

    import ProjectCard from './../components/ProjectCard.vue';
    import FormSearch from './../components/FormSearch.vue';
    import TechnologyType from './../components/TechnologyType.vue';

    export default {
        name: 'Blog',
        components:{
            ProjectCard,
            FormSearch,
            TechnologyType
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
                        store.main_title = 'Elenco progetti';
                        store.projects = result.data.projects.data;
                        store.links = result.data.projects.links;
                        store.types = result.data.types;
                        store.technologies = result.data.technologies;
                        store.show_paginate = true;
                    })
            }
        },
        mounted(){
            this.getApi(this.active_base_url);
        }
    }
</script>

<template>

    <div class="container">
        <div>
            <h1>{{store.main_title}}</h1>
        </div>

        <div class="search-area">
            <FormSearch />
            <TechnologyType @getApi="getApi(active_base_url);"/>
        </div>

        <div class="projects-area">
            <ProjectCard
                v-for="project in store.projects"
                :key="project.id"
                :project="project"/>
        </div>

        <div v-if="store.show_paginate" class="paginator">
            <button
                v-for="link in store.links" :key="link.label"
                :disabled="link.active || !link.url"
                @click="getApi(link.url)"
                v-html="link.label" ></button>

        </div>

    </div>
</template>

<style lang="scss" scoped>

    .search-area{
        margin: 20px 0;
    }
    .projects-area {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .paginator {
        width: 100%;
        display: flex;
        justify-content: center;
    }
</style>


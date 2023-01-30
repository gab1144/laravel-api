<script>
    import ProjectCard from './../components/ProjectCard.vue';
    import FormSearch from './../components/FormSearch.vue';
    import {store} from './../data/store';
    import {BASE_URL} from '../data/data'

    import axios from 'axios';

    export default {
        name: 'Blog',
        components:{
        ProjectCard,
        FormSearch
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

    <div class="container py-5">
        <div class="row">
            <h1>{{store.main_title}}</h1>
            <FormSearch />
        </div>

    <div class="row d-flex flex-wrap ">
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

</style>


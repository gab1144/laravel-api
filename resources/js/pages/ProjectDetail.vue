<script>

    import axios from 'axios';

    export default {
        name: 'ProjectDetail',
        data(){
            return{
                project: {}
            }
        },
        methods:{
            getApi(){
                axios.get('http://127.0.0.1:8000/api/' + 'projects/' +  this.$route.params.slug)
                .then(res => {
                        this.project = res.data;
                        console.log(this.project)
                    })
            }
        },
        mounted(){
            this.getApi();
        }
    }
</script>

<template>
    <div class="container">
        <h3>{{ project.name }}
        </h3>
        <img :src="project.cover_image" :alt="project.cover_image_original_name">
        <span class="badge rounded-pill bg-primary mx-1"
        v-if="project.type">
        {{ project.type.name }}</span>
        <br>
        <span class="badge rounded-pill bg-warning text-dark mx-1"
        v-if="project.technology"
        v-for="tech in project.technology"
        :key="tech.id">{{ tech.name }}</span>
        <h4>Nome cliente: {{ project.client_name }}</h4>
        <span>Sommario:</span>
        <p v-html="project.summary"></p>
    </div>

</template>



<style lang="scss">
    img {
        width: 500px;
        display: block;
    }
</style>

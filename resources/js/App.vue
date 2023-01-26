<script>
  import ProjectCard from './components/ProjectCard.vue';

  import axios from 'axios';

  export default {
    name: 'App',
    components:{
      ProjectCard
    },
    data(){
        return {
            baseUrl: 'http://127.0.0.1:8000/api/',
            projects : [],
            pagination:{
                current: 1,
                last:null
            }
        }
      },
      methods:{
        getApi(page){
          this.pagination.current = page;
            axios.get(this.baseUrl + 'projects', {
              params:{
                    page: this.pagination.current
                }
            })
                .then(result => {
                    this.projects = result.data.projects.data;
                    this.pagination.current = result.data.projects.current_page
                    this.pagination.last = result.data.projects.last_page
                })
        }
    },
    mounted(){
        this.getApi(1);
    }
  }
</script>

<template>
  <div class="container py-5">
    <div class="row">
      <h1 class="text-white">Progetti</h1>
    </div>

    <div class="row d-flex flex-wrap ">
      <ProjectCard
      v-for="project in projects"
      :key="project.id"
      :project="project"/>
    </div>

    <div class="paginator">
        <button
            :disabled="pagination.current === 1"
            @click="getApi(1)"
            > |	&lt; </button>

        <button
            :disabled="pagination.current === 1"
            @click="getApi(pagination.current - 1)"
            > &larr; </button>

        <button
            v-for="i in pagination.last" :key="i"
            :disabled="pagination.current === i"
            @click="getApi(i)"
            > {{i}} </button>

        <button
            :disabled="pagination.current === pagination.last"
            @click="getApi(pagination.current + 1)"
            > &rarr; </button>

        <button
            :disabled="pagination.current === pagination.last"
            @click="getApi(pagination.last)"
            > >| </button>
    </div>

  </div>
</template>

<style lang="scss">
</style>

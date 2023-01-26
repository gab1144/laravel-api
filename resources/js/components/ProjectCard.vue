<script>
  export default{
    name: 'ProjectCard',
    props:{
      project: Object
    },
    methods:{
      getImagePath(imageName){
        return new URL(`../assets/photographers/${imageName}`, import.meta.url).href
      }
    }
  }
</script>
<template>
  <div class="project-card">
        <h3>{{ project.name }}</h3>
        <h4>Nome cliente: {{ project.client_name }}</h4>
        <span>Sommario:</span>
        <p v-html="project.summary"></p>
  </div>
</template>
<style lang="scss" scoped>
  .project-card{
    width: calc(calc(100% - 100px) /3);
    background-color: blue;
    color: white;
    margin: 0 auto;
    margin-bottom: 30px;
    border-radius: 20px;
    padding: 20px;
    &:hover img {
      transform: scale(1.05);
    }
    .img-area{
      width: 100%;
      aspect-ratio: 1;
      overflow: hidden;
      background-color: red;
      display: flex;
      align-items: center;
      img{
        width: 100%;
        transition: 0.5s ;
      }
    }
    .text-area{
      padding: 30px;
      padding-bottom: 0;
      p {
        margin: 30px 0;
        color: white;
      }
    }
  }
/******************************
        RESPONSIVE
******************************/
  @media screen and (max-width: 991px){
    .project-card {
      width: calc(calc(100% - 100px) /2);
    }
  }
  @media screen and (max-width: 767px){
    .project-card {
      width: calc(100% - 40px);
    }
  }
</style>
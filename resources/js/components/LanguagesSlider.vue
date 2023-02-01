<script>
    import 'vue3-carousel/dist/carousel.css'
    import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'

    import langAndTech from '../data/slider-lang-and-tech';

    export default {
        name: 'LanguagesSlider',
        data(){
            return {
                langAndTech
            }
        },
        components: {
            Carousel,
            Slide,
            Pagination,
            Navigation,
        },
}
</script>

<template>
    <carousel :autoplay="2000" :itemsToShow="3.95" :wrapAround="true" :transition="500">
      <slide v-for="item in langAndTech" :key="slide" class="custom-slide">
        <div class="carousel__item">
            <i :class="item.icon"></i>
            <h3>{{ item.name }}</h3>
        </div>
      </slide>

      <template #addons>
        <navigation />
        <pagination />
      </template>
    </carousel>
</template>

<style lang="scss">

    @use './../../scss/partials/vue_variables'as *;

    .custom-slide {
        height: 300px;
    }

    .carousel__slide {
  padding: 5px;
}

.carousel__viewport {
  perspective: 2000px;
}

.carousel__track {
  transform-style: preserve-3d;
}

.carousel__slide--sliding {
  transition: 0.5s;
}

.carousel__slide {
  opacity: 0.9;
  transform: rotateY(-20deg) scale(0.9);
}

.carousel__slide--active ~ .carousel__slide {
  transform: rotateY(20deg) scale(0.9);
}

.carousel__slide--prev {
  opacity: 1;
  transform: rotateY(-10deg) scale(0.95);
}

.carousel__slide--next {
  opacity: 1;
  transform: rotateY(10deg) scale(0.95);
}

.carousel__slide--active {
  opacity: 1;
  transform: rotateY(0) scale(1.4);
  font-size: 25px;
}

</style>

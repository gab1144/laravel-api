<script>

import axios from 'axios';
import {BASE_URL} from '../data/data'
import {store} from '../data/store'

export default {
    name:'FormSearch',
    data(){
        return{
            BASE_URL,
            tosearch: '',
            store
        }
    },
    methods:{
        getApiSearch(){
            axios.get(BASE_URL + 'projects/search', {
                params:{
                    tosearch: this.tosearch
                }
            })
                .then(result => {
                    this.tosearch = '';
                    store.projects = result.data;
                    store.show_paginate = false;
                })
        }
    }
}
</script>

<template>

    <div class="d-flex">
        <input v-model.trim="tosearch" @keyup.enter="getApiSearch()"  type="text" placeholder="Cerca">
        <button @click="getApiSearch()">Invia</button>
    </div>

</template>


<style lang="scss" scoped>
input{
    margin-bottom: 30px;
    width: 400px;
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    margin-right: 20px;
}
button{
    cursor: pointer;
    background-color: white;
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    height: fit-content;
}
</style>

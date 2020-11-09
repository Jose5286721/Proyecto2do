<template>
    <div>
        <label>Seleccione una comunidad:</label>
        <multiselect v-model="comunidadSelected" :searchable="true" placeholder="Seleccione la comunidad" :options="comunidades" track-by="nombre" label="nombre"/>
        <input type="hidden" name="comunidad_id" :value="comunidadSelected.id"/>
    </div>
</template>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<script>
import axios from 'axios';
export default {
    data:function(){
        return {
            comunidades:[],
            comunidadSelected:''
        };
    },
    mounted:function(){
        axios.get('/api/comunidades').then((response)=>{
            this.comunidades = response.data
        })
    }
}
</script>
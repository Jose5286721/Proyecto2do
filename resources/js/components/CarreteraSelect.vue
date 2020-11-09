<template>
    <div>
        <label>Seleccione una carretera:</label>
        <multiselect v-model="carreteraSelected" :searchable="true" placeholder="Seleccione la carretera" :options="carreteras" track-by="nombre" label="nombre"/>
        <input type="hidden" name="carretera_id" :value="carreteraSelected.id"/>
    </div>
</template>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<script>
import axios from 'axios';
export default {
    data:function(){
        return {
            carreteras:[],
            carreteraSelected:''
        };
    },
    mounted:function(){
        axios.get('/api/carreteras').then((response)=>{
            this.carreteras = response.data
        })
    }
}
</script>
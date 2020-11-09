<template>
    <div>
        <label>Seleccione un tramo:</label>
        <multiselect v-model="tramoSelected" :searchable="true" placeholder="Seleccione el tramo" :options="tramos" track-by="inicio_carret" label="inicio_carret" :show-labels="false">
            <template slot="singleLabel" slot-scope="{ option }"><strong>{{ option.inicio_carret }}</strong> hasta <strong>  {{ option.fin_carret }}</strong></template>
            <template slot="option" slot-scope="props"><strong>{{ props.option.inicio_carret }}</strong> hasta <strong>  {{ props.option.fin_carret }}</strong></template>
        </multiselect>
        <input type="hidden" name="tramo_id" :value="tramoSelected.id"/>
    </div>
</template>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<script>
import axios from 'axios';
export default {
    data:function(){
        return {
            tramos:[],
            tramoSelected:''
        };
    },
    mounted:function(){
        axios.get('/api/tramos').then((response)=>{
            this.tramos = response.data
        })
    }
}
</script>
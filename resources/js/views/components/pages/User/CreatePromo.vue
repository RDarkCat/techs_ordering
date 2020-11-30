<template>
    <form>
            <div class=" card">
                <div class="d-flex justify-content-between card-body">
                    <div>
                        <div class="form-group">
                            <label for="item-name">Название:</label>
                            <input type="text" id="item-name" v-model="promo.name" value=""/>
                        </div>
                        <div class="form-group">
                            <label for="item-description">Описание:</label>
                            <input type="text" id="item-description" v-model="promo.description" value=""/>
                        </div>
                        <div class="form-group">
                            <label for="item-length">Длина:</label>
                            <input type="text" id="item-length" v-model="promo.length" value=""/>
                        </div>
                            
                        <div class="form-group">
                            <label for="item-height">Высота:</label>
                            <input type="text" id="item-height" v-model="promo.height" value=""/>
                        </div>
                        <div class="form-group">
                            <label for="item-width">Ширина:</label>
                            <input type="text" id="item-width" v-model="promo.width" value=""/>
                        </div>                        
                        <div class="form-group">
                            <label for="item-mass">Масса:</label>
                            <input type="text" id="item-mass" v-model="promo.mass" value=""/>
                        </div>
                        <div class="form-group">
                            <label for="item-power-watt">Мощность (Вт):</label>
                            <input type="text" id="item-power-watt" v-model="promo.pwrWatt" value=""/>
                        </div>
                        <div class="form-group">
                            <label for="item-power-horse-power">Мощность (л/с):</label>
                            <input type="text" id="item-power-horse-power" v-model="promo.pwrHorsePwr" value=""/>
                        </div>                        
                        <div class="form-group">
                            <label for="item-lift">Грузоподъемность:</label>
                            <input type="text" id="item-lift" v-model="promo.lift" value="{ promo.lift }"/>
                        </div>
                        <div class="form-group">                            
                            <input type="submit" id="item-submit" @click="createPromo" value="Добавить"/>
                        </div>
                        
                    </div>
                </div>
            </div>
        </form>
</template>

<script>
import { mapGetters } from "vuex";
import axios from 'axios';
export default {
    name: "CreatePromo",
    data: () => {
        return {
	          promo: {
	                username: null,
		            name: '',
		            description: '',
		            length: 0,
		            height: 0,
		            mass: 0,
		            pwrWatt: 0,
		            pwrHorsePwr: 0,
		            lift: 0
	            }         
        }
   },
   computed: {
        ...mapGetters({
            getPromo: 'promos/getPromo',
            user: 'auth/user'
        }),
   },
   mounted: function() {
       this.promo.username = this.user.name
   },
   methods: {
       async createPromo() {
           axios.post('/api/promos/create', {
           	    body: this.promo
           }).this(response => {
               console.log(response.data);
           });
       },
       async updatePromo(id) {
         
       },
       async deletePromo(id) {
         
       }
   }
}
</script>

<style scoped>

</style>

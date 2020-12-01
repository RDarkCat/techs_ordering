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
                            <input type="text" id="item-power-watt" v-model="promo.power_watt" value=""/>
                        </div>
                        <div class="form-group">
                            <label for="item-power-horse-power">Мощность (л/с):</label>
                            <input type="text" id="item-power-horse-power" v-model="promo.power_horse" value=""/>
                        </div>                        
                        <div class="form-group">
                            <label for="item-lift">Грузоподъемность:</label>
                            <input type="text" id="item-lift" v-model="promo.lift" value="{ promo.lift }"/>
                        </div>
                        <div class="form-group">
                            <label for="item-lift">Цена за час(руб):</label>
                            <input type="text" id="item-lift" v-model="promo.price_per_hour" value="{ promo.price_per_hour }"/>
                        </div>
                        <div class="form-group">
                            <label for="item-lift">Цена за день(руб):</label>
                            <input type="text" id="item-lift" v-model="promo.price_per_day" value="{ promo.price_per_day }"/>
                        </div>
                        <div class="form-group">
                            <label for="item-lift">Грузоподъемность:</label>
                            <input type="text" id="item-lift" v-model="promo.lift" value="{ promo.lift }"/>
                        </div>
                        <div class="form-group">                            
                            <input type="submit" id="item-submit" @click.prevent="createPromo" value="Добавить"/>
                        </div>
                        
                    </div>
                </div>
            </div>
        </form>
        
</template>

<script>
import { mapGetters } from 'vuex';
import axios from 'axios';
export default {
    name: "CreatePromo",
    data: () => {
        return {
	          promo: {
	                item_id: 100,
	                username: null,
		            name: '',
		            description: '',
		            length: 0,
		            height: 0,
		            mass: 0,
		            power_watt: 0,
		            power_horse: 0,
		            price_per_day: 0,
		            price_per_hour: 0,
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
           let response = await axios.post('/promos/store', this.promo);
           console.log(response);
       },
       async updatePromo(id) {
           let response = await axios.put('/promos/update/' + id, {})
           console.log(response.data);
       },
       async deletePromo(id) {
          let response = await axios.delete('/promos/delete/' + id);
          console.log(response.data);
       }
   }
}
</script>

<style scoped>

</style>

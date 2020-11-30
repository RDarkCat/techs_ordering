<template>
    <form action="/promos/create" method="POST">
            <div class=" card">
                <div class="d-flex justify-content-between card-body">
                    <div>
                        <div class="form-group">
                            <label for="item-name">Название:</label>
                            <input type="text" id="item-name" v-model="name" value=""/>
                        </div>
                        <div class="form-group">
                            <label for="item-description">Описание:</label>
                            <input type="text" id="item-description" v-model="description" value=""/>
                        </div>
                        <div class="form-group">
                            <label for="item-length">Длина:</label>
                            <input type="text" id="item-length" v-model="length" value=""/>
                        </div>
                            
                        <div class="form-group">
                            <label for="item-height">Высота:</label>
                            <input type="text" id="item-height" v-model="height" value=""/>
                        </div>
                        <div class="form-group">
                            <label for="item-width">Ширина:</label>
                            <input type="text" id="item-width" v-model="width" value=""/>
                        </div>                        
                        <div class="form-group">
                            <label for="item-mass">Масса:</label>
                            <input type="text" id="item-mass" v-model="mass" value=""/>
                        </div>
                        <div class="form-group">
                            <label for="item-power-watt">Мощность (Вт):</label>
                            <input type="text" id="item-power-watt" v-model="pwr_watt" value=""/>
                        </div>
                        <div class="form-group">
                            <label for="item-power-horse-power">Мощность (л/с):</label>
                            <input type="text" id="item-power-horse-power" v-model="pwr_horse_pwr" value=""/>
                        </div>                        
                        <div class="form-group">
                            <label for="item-lift">Грузоподъемность:</label>
                            <input type="text" id="item-lift" v-model="lift" value=""/>
                        </div>
                        <div class="form-group">                            
                            <input type="submit" id="item-submit" value="Добавить"/>
                        </div>
                    </div>
                </div>
            </div>
        </form>
</template>

<script>
export default {
    name: "CreatePromo",
    data() {
        return {
            name: '',
            description: '',
            length: 0,
            height: 0,
            mass: 0,
            pwr_watt: 0,
            pwr_horse_pwr: 0,
            lift: 0            
        }
   },
   methods: {
   
   }
}
</script>

<style scoped>

</style>

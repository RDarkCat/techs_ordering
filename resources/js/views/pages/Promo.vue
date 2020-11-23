<template>
    <div>
        <ul>
            <li>
                Название: {{ getPromo.item.name }}
            </li>
            <li>
                Описание: {{ getPromo.item.characteristic.description }}
            </li>
            <li>
                Цена в сутки: {{ getPromo.price_per_day }}
            </li>
            <li>
                Цена в час: {{ getPromo.price_per_hour }}
            </li>
            <li>
                Характеристики:
                <ul>
                    <li>
                        Высота: {{ getPromo.item.characteristic.height }}
                    </li>
                    <li>
                        Ширина: {{ getPromo.item.characteristic.width }}
                    </li>
                    <li>
                        Длина: {{ getPromo.item.characteristic.length }}
                    </li>
                    <li>
                        Масса: {{ getPromo.item.characteristic.mass }}
                    </li>
                    <li>
                        Мощьность Л/С:  {{ getPromo.item.characteristic.horse_power }}
                    </li>
                    <li>
                        Мощьность Ватт: {{ getPromo.item.characteristic.power_wattg }}
                    </li>
                    <li>
                        Грузоподъемность: {{ getPromo.item.characteristic.lifting_capacity }}
                    </li>
                </ul>
            </li>
            <li>
                Объявление создано:  {{ getPromo.created_at }}
            </li>
        </ul>

        <br>

        <br>

        <br>

        <br>



    </div>
</template>

<script>
import {mapActions, mapGetters} from "vuex";

export default {
    name: "Promo",
    props: ['id'],
    computed: {
        ...mapGetters({
            getPromo: 'promos/getPromo'
        }),
        promoId() {
            return this.$route.params.id
        }
    },
    methods: {
        ...mapActions({
            responsePromo: 'promos/responsePromo'
        }),
        promo () {
            this.responsePromo(this.promoId).then(() => {
                //console.log (this.getPromo);
            }).catch(() => {
                ///console.log('failed');
            });
        }
    },
    mounted() {
        //console.log('mounted')
        this.promo();
    }
}
</script>

<style scoped>

</style>

<template>
    <div>
        Promos list
        <ul>
            <li v-for="promo in getPromos.data">
                <p>
                    <router-link :to="`/promo/show/${ promo.id }`">
                        {{ promo.item.name }}
                    </router-link>
                </p>
                <p>
                    {{ promo.item.characteristic.description }}
                </p>
            </li>
        </ul>
    </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';

export default {
    name: "PromosListPage",
    computed: {
        ...mapGetters({
            getPromos: 'promos/getPromos'
        })
    },
    methods: {
        ...mapActions({
            responsePromos: 'promos/responsePromos'
        }),
        promos() {
            this.responsePromos().then(() => {
                //console.log (this.getPromos);
            }).catch(() => {
                //console.log('failed');
            });
        }
    },
    mounted() {
        this.promos();
    }
}
</script>

<style scoped>

</style>

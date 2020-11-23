<template>
    <div>
        <p v-for="promo in getPromos.data">
            <router-link :to="`/promo/show/${ promo.id }`">
                {{ promo.item.name }}
            </router-link>
        </p>
    </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';
export default {
    name: "promos",
    computed: {
        ...mapGetters({
            getPromos: 'promos/getPromos'
        })
    },
    methods: {
        ...mapActions({
            responsePromos: 'promos/responsePromos'
        }),
        promos () {
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

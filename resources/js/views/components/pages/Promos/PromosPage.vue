<template>
    <div v-if="getPromos">
        <PromosList :promos="getPromos.data" />
    </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';
import PromosList from "./elements/PromosList";

export default {
    name: "PromosListPage",
    components: {
        PromosList
    },
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

<template>
    <div v-if="getPromo">
        <PromoCard
            :promo="getPromo"/>
    </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
import PromoCard from "./elements/PromoCard.vue";

export default {
    name: "PromoByIdPage",
    components: {
        PromoCard
    },
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
        promo() {
            this.responsePromo(this.promoId).then(() => {

            }).catch(() => {
                ///console.log('failed');
            });
        }
    },
    mounted() {
        this.promo();
    }
}
</script>

<style scoped>

</style>

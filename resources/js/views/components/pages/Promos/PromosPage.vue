<template>
    <div>
        <SearchBlock />
        <div v-if="filteredItems">
            <PromosList :promos="filteredItems.data" />
        </div>
    </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';

import PromosList from "./elements/PromosList.vue";
import SearchBlock from "../../elements/Search/SearchBlock";

export default {
    name: "PromosListPage",
    components: {
        PromosList,
        SearchBlock
    },
    data () {
        return {
            filteredItems: null
        }
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
                this.filteredItems = this.getPromos;
            }).catch(() => {

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

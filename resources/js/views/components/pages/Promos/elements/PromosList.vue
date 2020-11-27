<template>
    <section class="search_section pb-5 bg-light">
        <div class="container pt-3" v-for="promo in promos">
            <PromosListItem
                :promo="promo"
            ></PromosListItem>
        </div>
    </section>
</template>

<script>
import PromosListItem from "./PromosListItem.vue";

export default {
    name: "PromosList",
    components: {
        PromosListItem
    },
    props: [
        'promos'
    ]
}
</script>

<style scoped>

</style>

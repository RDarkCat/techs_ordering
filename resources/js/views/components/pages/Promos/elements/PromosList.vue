<template>
    <ul>
        <li v-for="promo in promos">
            <PromosListItem
                :promo="promo"
            ></PromosListItem>
        </li>
    </ul>
</template>

<script>
import PromosListItem from "./PromosListItem";

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

<template>
    <div>
        <p>
            <router-link :to="`/promo/show/${ promo.id }`">
                {{ promo.item.name }}
            </router-link>
        </p>
        <p>
            {{ promo.item.characteristic.description }}
        </p>
    </div>
</template>

<script>
export default {
    name: "PromosListItem",
    props: [
        'promo'
    ]
}
</script>

<style scoped>

</style>

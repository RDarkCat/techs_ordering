<template>
    <div>
        Promo id: {{ promoId }}
    </div>
</template>

<script>
export default {
    name: "Promo",
    props: ['id'],
    computed: {
        promoId() {
            return this.$route.params.id
        }
    },
}
</script>

<style scoped>

</style>

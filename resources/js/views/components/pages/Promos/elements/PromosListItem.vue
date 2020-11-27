<template>
    <div class="container pt-3">
        <div class="card">
            <h5 class="card-header">
                {{ promo.item.name }}
            </h5>
            <div class="card-body d-flex">
                <img src="css/img/cat785D.jpg" alt="Responsive image" width="200">
                <div class="ml-5 d-flex flex-column">
                    <div class="d-flex">
                        <div>
                            <p class="text_small">Horse power: {{ promo.item.characteristic.horse_power }}</p>
                            <p class="text_small">Mass: {{ promo.item.characteristic.mass }}</p>
                        </div>
                        <div class="ml-3">
                            <p class="text_small">Lifting capacity: {{ promo.item.characteristic.lifting_capacity }}</p>
                            <p class="text_small">Date: {{ promo.created_at }}</p>
                        </div>
                    </div>
                    <p class="geo"><i class="fas fa-location-arrow"></i> Москва</p>
                </div>
                <div class="ml-auto">
                    <p class="price">{{ promo.price_per_day }} руб / сут.</p>
                    <a href="#" class="btn_show btn btn-primary">
                        <router-link :to="`/promo/show/${ promo.id }`">
                            Посмотреть
                        </router-link>
                    </a>
                </div>
            </div>

        </div>
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

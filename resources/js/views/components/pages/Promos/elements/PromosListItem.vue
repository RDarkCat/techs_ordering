<template>
    <div class="card">
        <h5 class="card-header">{{ promo.item.name }}</h5>
        <div class="card-body">
            <div class="row">
                <img class="col-sm-3" src="img/cat785D.jpg" alt="Responsive image" style="width:200px; height: 200px;">
                <div class="col-sm-3 mt-2">
                    <p class="text_small">Horse power: {{ promo.item.characteristic.horse_power }}</p>
                    <p class="text_small">Mass: {{ promo.item.characteristic.mass }}</p>
                    <p class="text_small">Lifting capacity: {{ promo.item.characteristic.lifting_capacity }}</p>

                </div>
                <div class="col-sm-3 mt-2">
                    <p class="text_small">Date: {{ promo.created_at }}</p>
                    <p class=""><i class="fas fa-location-arrow"></i> Москва</p>
                </div>
                <div class="col-sm-3 mt-2">
                    <p class="price">{{ promo.price_per_day }} руб / сут.</p>
                    <a href="#" class="btn_show btn btn-primary" style="color:#31312f!important;">
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

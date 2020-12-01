<template>
    <div>
        <section class=" pb-5 bg-light">
            <div class="container pt-5">
                <div class="row justify-content-between">


                    <div class="col-lg-6">
                        <h3>C{{ promo.item.name }}</h3>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="https://i.pinimg.com/736x/83/c3/28/83c328aecd869857da6fb579ad66820e--tonka-toys-heavy-equipment.jpg" width="200" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://i.ytimg.com/vi/6giym5yNhlo/0.jpg" width="200" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://www.australiahqj.com/wp-content/uploads/2019/04/New-Cat-777G-768x455.jpg" width="200" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card mt-5">
                            <h5 class="card-header text_dark">Продавец: "ООО Caterpillar"</h5>
                            <div class="card-body d-flex flex-column">
                                <h2>Цена <span>{{ promo.price_per_day }} руб / сут</span></h2>
                                <a href=""><i class="far fa-envelope"></i> Написать продавцу</a>
                                <a href=""><i class="fas fa-phone"></i> Позвонить продавцу</a>
                                <p class=""><i class="fas fa-location-arrow"></i> Москва</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="mt-3">
                    <h5>ДВИГАТЕЛЬ</h5>
                    <p>Мощность Л/С:  {{ promo.item.characteristic.horse_power }}</p>
                    <p>Мощность Ватт: {{ promo.item.characteristic.power_wattg }}</p>
                    <p>Модель двигателя	Cat® 3512C HD</p>

                    <h5>МАССА — ПРИБЛИЗИТЕЛЬНО</h5>
                    <p>Диапазон эксплуатационной массы шасси (OCW), мин./макс.{{ promo.item.characteristic.mass }} кг</p>
                    <p>Диапазон массы кузова	20 831–30 623 кг 45 924–67 512 фунтов</p>
                    <p>Грузоподъемность: {{ promo.item.characteristic.lifting_capacity }}</p>
                    <h5>Описание</h5>
                    <p>{{ promo.item.characteristic.description }}</p>
                    <p>Высота: {{ promo.item.characteristic.height }}</p>
                    <p>Ширина: {{ promo.item.characteristic.width }}</p>
                    <p>Длина: {{ promo.item.characteristic.length }}</p>
                    <p>Масса: {{ promo.item.characteristic.mass }}</p>
                    Объявление создано:  {{ promo.created_at }}
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: "PromoCard",
    props: [
        'promo'
    ]
}
</script>

<style scoped>

</style>

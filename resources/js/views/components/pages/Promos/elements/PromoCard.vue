<template>
    <div>
        <section class=" pb-5 bg-light">
            <div class="container pt-5">
                <div class="d-flex justify-content-between">
                    <div>
                        <h3>Caterpillar 785D</h3>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="css/img/carousel/C671759.jpeg" width="200" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="css/img/carousel/C722147.jpeg" width="200" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="css/img/carousel/C740870.jpeg" width="200" alt="Third slide">
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



                    <div class="card ml-5 mt-5">
                        <h5 class="card-header">Продавец: "ООО Caterpillar"</h5>
                        <div class="card-body d-flex flex-column">

                            <h2>Цена <span>20 000 руб / сут</span></h2>
                            <a href=""><i class="far fa-envelope"></i> Написать продавцу</a>
                            <a href=""><i class="fas fa-phone"></i> Позвонить продавцу</a>
                            <p class=""><i class="fas fa-location-arrow"></i> Москва</p>

                        </div>

                    </div>




                </div>
                <div class="mt-3">
                    <h5>ДВИГАТЕЛЬ</h5>
                    <p>Полная мощность согласно SAE J1995	1082 кВт</p>
                    <p>Полезная мощность согласно SAE J1349	1005 кВт</p>
                    <p>Модель двигателя	Cat® 3512C HD</p>

                    <h5>МАССА — ПРИБЛИЗИТЕЛЬНО</h5>
                    <p>Диапазон эксплуатационной массы шасси (OCW), мин./макс.	83 304–84 668 кг 183 654–186 661 фунт</p>
                    <p>Диапазон массы кузова	20 831–30 623 кг 45 924–67 512 фунтов</p>
                </div>
                <h5>Описание</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>





            </div>
            <ul v-if="promo">
                <li>
                    Название: {{ promo.item.name }}
                </li>
                <li>
                    Описание: {{ promo.item.characteristic.description }}
                </li>
                <li>
                    Цена в сутки: {{ promo.price_per_day }}
                </li>
                <li>
                    Цена в час: {{ promo.price_per_hour }}
                </li>
                <li>
                    Характеристики:
                    <ul>
                        <li>
                            Высота: {{ promo.item.characteristic.height }}
                        </li>
                        <li>
                            Ширина: {{ promo.item.characteristic.width }}
                        </li>
                        <li>
                            Длина: {{ promo.item.characteristic.length }}
                        </li>
                        <li>
                            Масса: {{ promo.item.characteristic.mass }}
                        </li>
                        <li>
                            Мощьность Л/С:  {{ promo.item.characteristic.horse_power }}
                        </li>
                        <li>
                            Мощьность Ватт: {{ promo.item.characteristic.power_wattg }}
                        </li>
                        <li>
                            Грузоподъемность: {{ promo.item.characteristic.lifting_capacity }}
                        </li>
                    </ul>
                </li>
                <li>
                    Объявление создано:  {{ promo.created_at }}
                </li>
            </ul>
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

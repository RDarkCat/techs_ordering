<template>
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

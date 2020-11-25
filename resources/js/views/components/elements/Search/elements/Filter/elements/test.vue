<template>
    <div>
        <input type="radio" id="one" value="Один" v-model="picked">
        <label for="one">Один</label>
        <br>
        <input type="radio" id="two" value="Два" v-model="picked">
        <label for="two">Два</label>
        <br>
        <span>Выбрано: {{ picked }}</span>
    </div>
</template>
<script>
export default {
    data() {
        return {
            picked: null
        }
    },
    methods: {

    }
}
</script>

<template>
    <div>
        Account:
        <div>
            <button id="show-modal" @click="showModal = true">Create promo</button>
            <CreatePromo v-if="showModal" @close="showModal = false">
                <h3 slot="header">PLS fill the form</h3>
            </CreatePromo>
        </div>
    </div>
</template>

<script>
import CreatePromo from "./elements/CreatePromo.vue";
export default {
    name: "AccountPage",
    components: {
        CreatePromo
    },
    data () {
        return {
            showModal: false
        }
    },
    methods: {

    }
}
</script>

<style scoped>

</style>

<template>
    <div>
<!--            <div>-->
<!--                Length:-->
<!--                <a href="#"-->
<!--                   v-on:click.prevent="props.length='up'"-->
<!--                    @click="handleSortBy"-->
<!--                >up</a>-->
<!--                /-->
<!--                <a href="#"-->
<!--                   v-on:click.prevent="props.length='dwn'"-->
<!--                    @click="handleSortBy"-->
<!--                >dwn</a>-->
<!--            </div>-->

<!--            <div>-->
<!--                Height:-->
<!--                <a href="#"-->
<!--                   v-on:click.prevent="props.height='up'"-->
<!--                    @click="handleSortBy"-->
<!--                >up</a>-->
<!--                /-->
<!--                <a href="#"-->
<!--                   v-on:click.prevent="props.height='dwn'"-->
<!--                    @click="handleSortBy"-->
<!--                >dwn</a>-->
<!--            </div>-->

<!--            <div>-->
<!--                Width:-->
<!--                <a href="#"-->
<!--                   v-on:click.prevent="props.width='up'"-->
<!--                    @click="handleSortBy"-->
<!--                >up</a>-->
<!--                /-->
<!--                <a href="#"-->
<!--                   v-on:click.prevent="props.width='dwn'"-->
<!--                    @click="handleSortBy"-->
<!--                >dwn</a>-->
<!--            </div>-->

<!--            <div>-->
<!--                Mass:-->
<!--                <a href="#"-->
<!--                   v-on:click.prevent="props.mass='up'"-->
<!--                   @click="handleSortBy"-->
<!--                >up</a>-->
<!--                /-->
<!--                <a href="#"-->
<!--                   v-on:click.prevent="props.mass='dwn'"-->
<!--                   @click="handleSortBy"-->
<!--                >dwn</a>-->
<!--            </div>-->

<!--            <div>-->
<!--                Power watt:-->
<!--                <a href="#"-->
<!--                   v-on:click.prevent="props.powerWatt='up'"-->
<!--                   @click="handleSortBy">up</a>-->
<!--                /-->
<!--                <a href="#"-->
<!--                   v-on:click.prevent="props.powerWatt='dwn'"-->
<!--                   @click="handleSortBy"-->
<!--                >dwn</a>-->
<!--            </div>-->

<!--            <div>-->
<!--                Horse power:-->
<!--                <a href="#"-->
<!--                   v-on:click.prevent="props.horsePower='up'"-->
<!--                   @click="handleSortBy"-->
<!--                >up</a>-->
<!--                /-->
<!--                <a href="#"-->
<!--                   v-on:click.prevent="props.horsePower='dwn'"-->
<!--                   @click="handleSortBy"-->
<!--                >dwn</a>-->
<!--            </div>-->

<!--            <div>-->
<!--                Lifting capacity:-->
<!--                <a href="#"-->
<!--                   v-on:click.prevent="props.liftingCapacity='up'"-->
<!--                   @click="handleSortBy"-->
<!--                >up</a>-->
<!--                /-->
<!--                <a href="#"-->
<!--                   v-on:click.prevent="props.liftingCapacity='dwn'"-->
<!--                   @click="handleSortBy"-->
<!--                >dwn</a>-->
<!--            </div>-->

            <div>
                Date:
                <a href="#"
                   v-on:click.prevent="props.date='up'"
                   @click="handleSortBy"
                >up</a>
                /
                <a href="#"
                   v-on:click.prevent="props.date='dwn'"
                   @click="handleSortBy"
                >dwn</a>
            </div>

            <div>
                Price:
                <a href="#"
                   v-on:click.prevent="props.price='up'"
                   @click="handleSortBy"
                >up</a>
                /
                <a href="#"
                   v-on:click.prevent="props.price='dwn'"
                   @click="handleSortBy"
                >dwn</a>
            </div>
        </div>
</template>

<script>
import {mapActions} from "vuex";

export default {
    name: "SortBy",
    data () {
        return {
            vision: false,
            props: {
                // length: null,
                // height: null,
                // width: null,
                // mass: null,
                // powerWatt: null,
                // horsePower: null,
                // liftingCapacity: null,
                date: null,
                price: null
            }
        }
    },
    methods: {
        ...mapActions ({
            setSort: 'promos/setSort'
        }),
        handleSortBy() {
            this.setSort(this.props);
        }
    }
}
</script>

<style scoped>

</style>

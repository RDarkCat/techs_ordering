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

<!--            <div>-->
<!--                Date:-->
<!--                <a href="#"-->
<!--                   v-on:click.prevent="props.date='up'"-->
<!--                   @click="handleSortBy"-->
<!--                >up</a>-->
<!--                /-->
<!--                <a href="#"-->
<!--                   v-on:click.prevent="props.date='dwn'"-->
<!--                   @click="handleSortBy"-->
<!--                >dwn</a>-->
<!--            </div>-->

<!--            <div>-->
<!--                Price:-->
<!--                <a href="#"-->
<!--                   v-on:click.prevent="props.price='up'"-->
<!--                   @click="handleSortBy"-->
<!--                >up</a>-->
<!--                /-->
<!--                <a href="#"-->
<!--                   v-on:click.prevent="props.price='dwn'"-->
<!--                   @click="handleSortBy"-->
<!--                >dwn</a>-->
<!--            </div>-->
<!--        </div>-->
        <form>
            <div class=" card">
                <div class="d-flex justify-content-between card-body">
                    <div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Категория</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option v-for="n in 5 ">{{ n }}</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Длина</label>
                            <div class="d-flex">
                                <input type="email" class="form-control" id="exampleFormControlInput7" placeholder="мин длина"
                                v-model="props.minLength" v-on:focusout="handleSortBy">
                                <input type="email" class="form-control ml-3" id="exampleFormControlInput8" placeholder="макс длина"
                                v-model="props.maxLength" v-on:focusout="handleSortBy">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Высота</label>
                            <div class="d-flex">
                                <input type="email" class="form-control" id="exampleFormControlInput9" placeholder="мин высота"
                                v-model="props.minHeight" v-on:focusout="handleSortBy">
                                <input type="email" class="form-control ml-3" id="exampleFormControlInput10" placeholder="макс высота"
                                v-model="props.maxHeight" v-on:focusout="handleSortBy">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Ширина</label>
                            <div class="d-flex">
                                <input type="email" class="form-control" id="exampleFormControlInput12" placeholder="мин ширина"
                                v-model="props.minWidth" v-on:focusout="handleSortBy">
                                <input type="email" class="form-control ml-3" id="exampleFormControlInput13" placeholder="макс ширина"
                                v-model="props.maxWidth" v-on:focusout="handleSortBy">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Страна производитель</label>
                            <select class="form-control" id="exampleFormControlSelect0">
                                <option v-for="n in 5 ">{{ n }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Масса</label>
                            <div class="d-flex">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="мин масса"
                                v-model="props.minMass" v-on:focusout="handleSortBy">
                                <input type="email" class="form-control ml-3" id="exampleFormControlInput2" placeholder="макс масса"
                                v-model="props.maxMass" v-on:focusout="handleSortBy">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Мощность</label>
                            <div class="d-flex">
                                <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="мин длина"
                                v-model="props.minHorsePower" v-on:focusout="handleSortBy">
                                <input type="email" class="form-control ml-3" id="exampleFormControlInput4" placeholder="макс длина"
                                v-model="props.maxHorsePower" v-on:focusout="handleSortBy">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Подъемная сила</label>
                            <div class="d-flex">
                                <input type="email" class="form-control" id="exampleFormControlInput5" placeholder="мин подъемная сила"
                                v-model="props.minLiftPower" v-on:focusout="handleSortBy">
                                <input type="email" class="form-control ml-3" id="exampleFormControlInput6" placeholder="макс подъемная сила"
                                v-model="props.maxLiftPower" v-on:focusout="handleSortBy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
                minLength: null,
                maxLength: null,
                minLiftPower: null,
                maxLiftPower: null,
                minMass: null,
                maxMass:null,
                minHorsePower: null,
                maxHorsePower: null,
                minWidth: null,
                maxWidth: null,
                minHeight: null,
                maxHeight: null,

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

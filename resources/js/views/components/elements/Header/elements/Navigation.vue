<template>
    <nav>
        <ul>
            <li>
                <router-link
                    :to="{
                        name: 'promos'
                    }"
                >
                    Promos
                </router-link>
            </li><!--Link to:promos-->
            <li>
                <router-link
                    :to="{
                        name: 'about'
                    }"
                >
                    About
                </router-link>
            </li><!--Link to:about-->
        </ul>
    </nav>
</template>

<script>

export default {
    name: 'Navigation',
}
</script>

<style scoped>

</style>

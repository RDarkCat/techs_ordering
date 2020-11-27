<template>
    <div>
        <p>
            <router-link :to="`/user/show/${ user.id }`">
                {{ user.name }}
            </router-link>
        </p>
        <p>
            {{ user.name }}
            {{ user.likes.like }}
        </p>
    </div>
</template>

<script>
export default {
    name: "UsersListItem",
    props: [
        'user'
    ]
}
</script>

<style scoped>

</style>

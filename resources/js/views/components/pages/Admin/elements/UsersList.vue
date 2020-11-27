<template>
    <ul>
        <li v-for="user in users">
            <UserListItem
                :user="user"
            ></UserListItem>
        </li>
    </ul>
</template>

<script>
import UsersListItem from "./UsersListItem.vue";

export default {
    name: "UsersList",
    components: {
        UsersListItem
    },
    props: [
        'users'
    ]
}
</script>

<style scoped>

</style>

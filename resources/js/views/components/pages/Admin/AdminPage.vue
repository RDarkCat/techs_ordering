<template>
    <div v-if="getUsers">
        <UsersList :users="getUsers.data" />
    </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';
import UsersList from "./elements/UsersList.vue";

export default {
    name: "UsersListPage",
    components: {
        UsersList
    },
    computed: {
        ...mapGetters({
            getUsers: 'users/getUsers'
        })
    },
    methods: {
        ...mapActions({
            responseUsers: 'users/responseUsers'
        }),
        users() {
            this.responseUsers().then(() => {
                //console.log (this.getUsers);
            }).catch(() => {
                //console.log('failed');
            });
        }
    },
    mounted() {
        this.users();
    }
}
</script>

<style scoped>

</style>
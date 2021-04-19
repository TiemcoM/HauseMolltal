<template>
    <router-link class="link" :to="route"><i v-if="icon" :class="'fas ' + icon"/> {{ name }}</router-link>
</template>

<script>
export default {
    name: "SideBarItem",
    props: {
        name: String,
        route: String,
        icon: String,
    }
}
</script>

<style scoped>
.link {
    display: block;
    padding-left: 50px;
    text-decoration: none;
    margin-bottom: 10px;
    text-align: left;
    font-size: 20px;
    color: #818181;
}
</style>

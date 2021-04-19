<template>
    <div class="navbar w-100">
        <vs-row>
            <vs-col w="4" style="text-align: left"></vs-col>
            <vs-col w="4" style="text-align: center"></vs-col>
            <vs-col w="4" style="text-align: right"><div @click="$emit('showFullScreenNavBar')" v-if="sidebarActive === false"><i class="fas fa-bars" /></div></vs-col>
        </vs-row>
    </div>
</template>

<script>
export default {
    name: "CustomNavBar",
    props: {
        sidebarActive: Boolean,
    },
}
</script>

<style scoped>
.navbar {
    font-size: 16px;
    border-radius: 10px;
    min-height: 50px;
    background-color: hsla(0, 0%, 100%, .96);
    padding: 5px 15px;
    border-width: 0;
    box-shadow: 0 0 1rem 0 rgb(136 152 170);
}
</style>

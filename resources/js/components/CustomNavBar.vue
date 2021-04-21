<template>
    <div class="navbar w-100">
        <vs-row v-bind:class="{ fullscreen: fullscreenActive}">
            <vs-col w="4" style="text-align: left">CurrentPage</vs-col>
            <vs-col w="4" style="text-align: center"></vs-col>
            <vs-col w="4" style="text-align: right"><div @click="$emit('toggleFullScreenNavBar')" v-if="sidebarActive === false"><i class="fas fa-bars" /></div></vs-col>
            <div v-if="fullscreenActive">
                <vs-col>Hier</vs-col>
                <vs-col>komen</vs-col>
                <vs-col>menu</vs-col>
                <vs-col>items</vs-col>
            </div>
        </vs-row>
    </div>
</template>

<script>
export default {
    name: "CustomNavBar",
    props: {
        sidebarActive: Boolean,
        fullscreenActive: Boolean,
    },
}
</script>

<style scoped>
.navbar {
    font-size: 15px;
    border-radius: 10px;
    min-height: 50px;
    background-color: hsla(0, 0%, 100%, .96);
    padding: 5px 15px;
    border-width: 0;
    box-shadow: 0 0 1rem 0 rgb(136 152 170);
}
.fullscreen {
    padding-top: 8px;
}
</style>

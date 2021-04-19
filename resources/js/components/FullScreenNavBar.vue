<template>
    <div class="FullScreen w-100">
        <vs-row>
            <vs-col style="text-align: left"></vs-col>
            <vs-col style="text-align: center"></vs-col>
            <vs-col style="text-align: right"><div @click="$emit('hideFullScreenNavBar')"><i class="fas fa-bars" /></div></vs-col>
        </vs-row>
        <vs-row>
            <vs-col>1</vs-col>
            <vs-col>2</vs-col>
            <vs-col>3</vs-col>
            <vs-col>4</vs-col>
            <vs-col>5</vs-col>
        </vs-row>
    </div>
</template>

<script>
export default {
    name: "FullScreenNavBar",
}
</script>

<style scoped>
.FullScreen {
    z-index: 1;
    height: 100%;
}

</style>

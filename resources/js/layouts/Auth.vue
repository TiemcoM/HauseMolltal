<template>
    <vs-row align="center" style="height: 100%">
        <vs-col class="card"  offset="4" w="4">
            <vs-row>
                <vs-col style="padding-bottom: 5px; text-align: center"><h4>{{this.$route.name}}</h4></vs-col>
                <vs-col><router-view/></vs-col>
            </vs-row>
        </vs-col>
    </vs-row>
</template>

<script>
export default {
    name: "Auth"
}
</script>

<style scoped>
.card {
    font-size: 15px;
    border-radius: 10px;
    background-color: hsla(0, 0%, 100%, .96);
    padding: 5px 15px;
    border-width: 0;
    box-shadow: 0 0 1rem 0 rgb(136 152 170);
}
</style>

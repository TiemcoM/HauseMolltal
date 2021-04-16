<template>
    <div class="sidebar h-100">
        <vs-row>
            <vs-col><h1>HauseMolltal</h1></vs-col>
        </vs-row>
        <vs-row>
            <vs-col><a>link 1</a></vs-col>
            <vs-col><a>link 2</a></vs-col>
            <vs-col><a>link 3</a></vs-col>
            <vs-col><a>link 4</a></vs-col>
        </vs-row>


    </div>
</template>

<script>
export default {
    name: "CustomSideBar",
}
</script>

<style scoped>
.SideBar {
    position: fixed;
    width: 260px;
    text-align: center;
    padding-top: 0;
    border-width: 0 0 1px 0;
    border-style: solid;
    box-shadow: 0 0 2rem 0 rgb(136 152 170);
}
</style>

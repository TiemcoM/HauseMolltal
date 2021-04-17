<template>
    <div class="sidebar h-100">
        <vs-row style="padding-top: 20px">
            <vs-col><h1 style="padding-bottom: 20px">HauseMolltal</h1></vs-col>
        </vs-row>
        <vs-row>
            <vs-col>
                <SideBarItem name="home" icon="fa-home" route="home"></SideBarItem>
            </vs-col>
            <vs-col>
                <SideBarItem name="contact" icon="fa-address-book" route="contact"></SideBarItem>
            </vs-col>
<!--            <vs-col>-->
<!--                <SideBarItem></SideBarItem>-->
<!--            </vs-col>-->
<!--            <vs-col>-->
<!--                <SideBarItem></SideBarItem>-->
<!--            </vs-col>-->
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
    box-shadow: 0 0 1rem 0 rgb(136 152 170);
}
</style>

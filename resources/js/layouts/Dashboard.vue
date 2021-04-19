<template>
    <div>
        <FullScreenNavBar @hideFullScreenNavBar="FullScreenNavBarActive = false" v-if="FullScreenNavBarActive"/>
        <div class="h-100">
            <CustomSideBar v-if="sidebarActive"/>
            <div v-bind:class="{ contentWithSidebar: sidebarActive, content: !sidebarActive }">
                <vs-row style="padding: 20px">
                    <vs-col>
                        <CustomNavBar @showFullScreenNavBar="FullScreenNavBarActive = true" :sidebarActive="sidebarActive"/>
                    </vs-col>
                    <vs-col style="padding-top: 20px">
                        <router-view/>
                    </vs-col>
                </vs-row>

            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Dashboard",
    data() {
        return {
            sidebarActive: true,
            FullScreenNavBarActive: false,
        }
    },
    mounted() {
        this.setSidebar();
    },
    created() {
        window.addEventListener("resize", this.setSidebar);
    },
    destroyed() {
        window.removeEventListener("resize", this.setSidebar);
    },
    methods: {
        setSidebar() {
            if (window.innerWidth > 900) {
                this.sidebarActive = true;
                this.FullScreenNavBarActive = false;
            }
            if (window.innerWidth < 900) {
                this.sidebarActive = false;
            }
        }
    }
}
</script>

<style scoped>
.content {
    width: 100%;
}

.contentWithSidebar {
    width: calc(100% - 260px);
    margin-left: 260px;
}
</style>

<template>
    <div>
        <div class="h-100">
            <CustomSideBar v-if="sidebarActive"/>
            <div v-bind:class="{ contentWithSidebar: sidebarActive, content: !sidebarActive }">
                <vs-row style="padding: 20px">
                    <vs-col>
                        <CustomNavBar :sidebarActive="sidebarActive"/>
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
        setSidebar(e) {
            if (window.innerWidth > 900) {
                this.sidebarActive = true;
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

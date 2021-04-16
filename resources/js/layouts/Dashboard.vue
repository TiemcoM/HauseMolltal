<template>
    <div>
        <div class="h-100">
            <CustomSideBar v-if="showSidebar"/>

            <div v-bind:class="{ contentWithSidebar: showSidebar, content: !showSidebar }">
                <vs-row style="padding: 20px">

                    <vs-col>
                        <CustomNavBar/>
                    </vs-col>

                    <vs-col>
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
            showSidebar: true,
        }
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
                this.showSidebar = true;
            }
            if (window.innerWidth < 900) {
                this.showSidebar = false;
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
    margin-left: 260px
}
</style>

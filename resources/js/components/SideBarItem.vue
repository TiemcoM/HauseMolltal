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
link{
    display:inline-block;
    padding:0.35em 1.2em;
    border:0.1em solid #FFFFFF;
    margin:0 0.3em 0.3em 0;
    border-radius:0.12em;
    box-sizing: border-box;
    text-decoration:none;
    font-family:'Roboto',sans-serif;
    font-weight:300;
    color:#FFFFFF;
    text-align:center;
    transition: all 0.2s;
}
link:hover{
    color:#000000;
    background-color:#FFFFFF;
}
@media all and (max-width:30em){
    link{
        display:block;
        margin:0.4em auto;
        }
}
/*.link {*/
/*    padding-left: 40px;*/
/*    text-decoration: none;*/
/*    text-align: left;*/
/*    font-size: 20px;*/
/*    color: #818181;*/
/*    display: block;*/
/*}*/
</style>

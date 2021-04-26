<template>
    <div>
        <vs-row style="padding-top: 15px">
            <vs-col sm="12" md="12" lg="6">
                <vs-input label-placeholder="E-mail"></vs-input>
            </vs-col>
            <vs-col sm="12" md="12" lg="6">
                <vs-input label-placeholder="Wachtwoord"></vs-input>
            </vs-col>
            <vs-col align="right">
                <vs-button color="success">Inloggen</vs-button>
            </vs-col>
        </vs-row>
    </div>
</template>

<script>
export default {
    name: "login"
}
</script>

<style scoped>

</style>

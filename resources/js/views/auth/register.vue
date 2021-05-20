<template>
    <div>
        <vs-row style="padding-top: 15px">
            <vs-col sm="12" md="12" lg="6">
                <vs-input v-model="userData.name" label-placeholder="Naam"></vs-input>
            </vs-col>
            <vs-col sm="12" md="12" lg="6">
                <vs-input v-model="userData.email" label-placeholder="E-mail"></vs-input>
            </vs-col>
            <vs-col sm="12" md="12" lg="6">
                <vs-input v-model="userData.password" type="password" label-placeholder="Wachtwoord"></vs-input>
            </vs-col>
            <vs-col sm="12" md="12" lg="6">
                <vs-input v-model="userData.password_confirmation" type="password"
                          label-placeholder="Wachtwoord Herhalen"></vs-input>
            </vs-col>
            <vs-col align="right">
                <vs-button @click="register" color="success">Acount aanmaken</vs-button>
            </vs-col>
        </vs-row>
    </div>
</template>

<script>
export default {
    name: "register",
    data() {
        return {
            userData: {
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
            }
        }
    },
    methods: {
        register() {
            const loading = this.$vs.loading()
            this.$store.dispatch("user/register", this.userData).then(res => {
                // loading.close()
                // this.$vs.notification({
                //     color: 'success',
                //     title: 'Inloggen gelukt',
                //     text: `Je wordt nu door gestuurd naar de home pagina`
                // })
            }).catch(err => {
                // loading.close()
                // this.$vs.notification({
                //     color: 'warning',
                //     title: 'Inloggen mislukt',
                //     text: `Probeer het opnieuw`
                // })
            })
        }
    }
}
</script>

<style scoped>

</style>

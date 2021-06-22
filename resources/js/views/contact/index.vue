<template>
    <div>
        <vs-row>
            <vs-col style="margin-left: 10px; margin-right: 10px; margin-bottom: 10px" v-for="contact in contacts"
                    :key="contact.id" xs="12" sm="6" lg="3">
                <v-card elevation="11">
                    <v-card-title>{{ contact.subject }}</v-card-title>
                    <v-card-text>
                        <vs-row>
                            <vs-col>{{ contact.message }}</vs-col>
                        </vs-row>
                        <vs-row>
                            <vs-col w="6">Naam:</vs-col>
                            <vs-col w="6">{{ contact.name }}</vs-col>
                            <vs-col w="6">Email:</vs-col>
                            <vs-col w="6"><a :href="'mailto:' + contact.email">{{ contact.email }}</a></vs-col>
                            <vs-col w="6">Telefoon</vs-col>
                            <vs-col w="6">{{ contact.phone }}</vs-col>
                            <vs-col w="6">Datum</vs-col>
                            <vs-col w="6">{{ contact.created_at.split('T')[0] }}</vs-col>
                            <vs-col w="6">tijd</vs-col>
                            <vs-col w="6">{{ contact.created_at.split('T')[1].split('.')[0] }}</vs-col>
                        </vs-row>
                    </v-card-text>
                    <v-card-actions><div @click="deleteContact(contact.id)"><i class="fas fa-trash-alt"></i></div></v-card-actions>
                </v-card>
            </vs-col>
        </vs-row>
    </div>
</template>
<script>
export default {
    name: "contact",
    mounted() {
        this.getContact()
    },
    computed: {
        contacts() {
            return this.$store.state.contact.contact;
        }
    },
    methods: {
        getContact() {
            this.$store.dispatch("contact/getContact").then(res => {
            })
        },
        deleteContact(id) {
            console.log(id)
            this.$store.dispatch("contact/deleteContact", id).then(res => {
                this.getContact()
            })
        }
    }

}
</script>

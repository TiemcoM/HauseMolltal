<template>
    <div>
        {{contactDetails}}
    </div>
</template>
<script>
export default {
    name: "contactDetails",
    mounted() {
        this.getContactDetails();
    },
    computed: {
        contactDetails() {
            return this.$store.state.contactDetails.contactDetails;
        }
    },
    methods: {
        getContactDetails() {
            this.$store.dispatch("contactDetails/get").then(res => {
            });
        },
        deleteContactDetails(id) {
            console.log(id)
        }
    }

}
</script>

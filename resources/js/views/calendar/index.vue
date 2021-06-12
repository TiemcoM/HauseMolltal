<template>
    <div>
        <FullCalendar :options="calendarOptions"/>
    </div>
</template>

<script>
import FullCalendar from '@fullcalendar/vue';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction';
import googleCalendarPlugin from '@fullcalendar/google-calendar';

export default {
    name: "calendar",
    components: {
        FullCalendar // make the <FullCalendar> tag available
    },
    data() {
        return {
            calendarOptions: {
                plugins: [dayGridPlugin, interactionPlugin, googleCalendarPlugin],
                initialView: 'dayGridMonth',
                googleCalendarApiKey: process.env.MIX_GOOGLECALENDARAPIKEY,
                events: {googleCalendarId: process.env.MIX_GOOGLE_CALENDAR_ID}
            }
        }
    },
    methods: {}
}
</script>

<style scoped>

</style>

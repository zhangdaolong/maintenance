<template>
    <div id="app">
        <calendar-view
                :show-date="January"
                class="holiday-us-traditional holiday-us-official"
                display-period-uom="month"
        />
        <calendar-view
                :show-date="February"
                class="holiday-us-traditional holiday-us-official"
                display-period-uom="month"
        />
        <calendar-view
                :show-date="March"
                class="holiday-us-traditional holiday-us-official"
                display-period-uom="month"
        />
        <calendar-view
                :show-date="April"
                class="holiday-us-traditional holiday-us-official"
                display-period-uom="month"
        />
        <calendar-view
                :show-date="May"
                class="holiday-us-traditional holiday-us-official"
                display-period-uom="month"
        />
        <calendar-view
                :show-date="June"
                class="holiday-us-traditional holiday-us-official"
                display-period-uom="month"
        />
        <calendar-view
                :show-date="July"
                class="holiday-us-traditional holiday-us-official"
                display-period-uom="month"
        />
        <calendar-view
                :show-date="August"
                class="holiday-us-traditional holiday-us-official"
                display-period-uom="month"
        />
        <calendar-view
                :show-date="September"
                class="holiday-us-traditional holiday-us-official"
                display-period-uom="month"
        />
        <calendar-view
                :show-date="October"
                class="holiday-us-traditional holiday-us-official"
                display-period-uom="month"
        />
        <calendar-view
                :show-date="November"
                class="holiday-us-traditional holiday-us-official"
                display-period-uom="month"
        />
        <calendar-view
                :show-date="December"
                class="holiday-us-traditional holiday-us-official"
                display-period-uom="month"
        />
    </div>
</template>
<script>
    import CalendarView from "vue-simple-calendar"
    require("vue-simple-calendar/dist/static/css/default.css")
    require("vue-simple-calendar/dist/static/css/holidays-us.css")
    var thisYear = new Date().getFullYear();

    export default {
        name: 'Calendar',
        data: function() {
            return {
                January: new Date(thisYear+"-01-01"),
                February: new Date(thisYear+"-02-01"),
                March: new Date(thisYear+"-03-01"),
                April: new Date(thisYear+"-04-01"),
                May: new Date(thisYear+"-05-01"),
                June: new Date(thisYear+"-06-01"),
                July: new Date(thisYear+"-07-01"),
                August: new Date(thisYear+"-08-01"),
                September: new Date(thisYear+"-09-01"),
                October: new Date(thisYear+"-10-01"),
                November: new Date(thisYear+"-11-01"),
                December: new Date(thisYear+"-12-01"),
            }
        },
        components: {
            CalendarView
        },
        methods: {
        }
    }
</script>

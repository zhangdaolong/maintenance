<template>
	<div>
                <div class="columns">
                    <div class="column is-one-fifth">
                        <vue-filter class="box"
                            :options="activeOptions"
                            icons
                            title="Active"
                            v-model="filters.invoices.is_active">
                        </vue-filter>
                    </div>

                    <div class="column is-two-fifths">
                        <date-interval-filter class="box"
                            title="Created Between"
                            :min="intervals.invoices.created_at.min"
                            @update-min="intervals.invoices.created_at.min = $event"
                            :max="intervals.invoices.created_at.max"
                            @update-max="intervals.invoices.created_at.max = $event">
                        </date-interval-filter>
                    </div>
		</div>

    <vue-table class="box"
        :path="path"
        :filters="filters"
        :intervals="intervals"
        :i18n="__"
        id="invoices">
    </vue-table>

</div>
</template>

<script>

import Vue from 'vue';
import axios from 'axios';
import fontawesome from '@fortawesome/fontawesome';
import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
import { faVuejs, faGithub } from '@fortawesome/fontawesome-free-brands/shakable.es';
import { faCheck, faTimes } from '@fortawesome/fontawesome-free-solid/shakable.es';
import store from '../../store';
import VueTable from '../../components/enso/vuedatatable/VueTable.vue';
import VueFilter from '../../components/enso/bulma/VueFilter.vue';
import VueSelectFilter from '../../components/enso/select/VueSelectFilter.vue';
import IntervalFilter from '../../components/enso/bulma/IntervalFilter.vue';
import DateIntervalFilter from '../../components/enso/bulma/DateIntervalFilter.vue';
import Tabs from '../../components/enso/bulma/Tabs.vue';
import Tab from '../../components/enso/bulma/Tab.vue';
import Toastr from '../../components/enso/bulma/toastr';
import '../../modules/enso/directives/hljs';
import { mapGetters } from 'vuex';


export default {

    store,
    comments: true,

    props: ['scopes'],

    components: { VueTable, VueFilter, VueSelectFilter, IntervalFilter, DateIntervalFilter, Tabs, Tab, },

    computed: {
        ...mapGetters('locale', ['__']),
    },

 data() {
        return {
            path: route('invoices.initTable', [], false),

            showCode: false,
            activeOptions: [
                { value: true, label: 'check', class: 'has-text-success' },
                { value: false, label: 'times', class: 'has-text-danger' },
            ],

            filters: {
                invoices: {
                        is_active: null

                },
            },
            intervals: {
                invoices: {
                    created_at: {
                        min: null,
                        max: null,
                        dbDateFormat: 'Y-m-d h:mm:ss'
                    },
                },
            },
        };
    },



};


require('highlight.js/styles/atom-one-dark.css');
</script>


<template>

    <div class="columns is-centered">
        <div class="column is-three-quarters animated fadeIn">
            <vue-form-ss class="box animated fadeIn"
                         :route-params="[$route.name, $route.params.id, false]"
                         ref="form"
                         @loaded="pivotParams.customers.id = $refs.form.field('customer_id').value">
                <template slot="customer_id" slot-scope="{ field, errors }">
                    <vue-select v-model="field.value"
                                :has-error="errors.has(field.name)"
                                @input="pivotParams.customers.id=$event;errors.clear(field.name)"
                                :source="field.meta.source"/>
                </template>
            <template slot="contractor_id" slot-scope="{ field, errors }">
                <vue-select v-model="field.value"
                            :pivot-params="pivotParams"
                            :has-error="errors.has(field.name)"
                            @input="errors.clear(field.name);"
                            :source="field.meta.source"/>
            </template>
            <template slot="status_id" slot-scope="{ field, errors }">
                <vue-select v-model="field.value"
                            :pivot-params="pivotParams"
                            :has-error="errors.has(field.name)"
                            @input="errors.clear(field.name);"
                            :source="field.meta.source"/>
            </template>
            <template slot="priority_id" slot-scope="{ field, errors }">
                <vue-select v-model="field.value"
                            :pivot-params="pivotParams"
                            :has-error="errors.has(field.name)"
                            @input="errors.clear(field.name);"
                            :source="field.meta.source"/>
            </template>


            </vue-form-ss>
            <div v-if="initialised">
                <documents-card :id="$route.params.id"
                    type="workorder">
                </documents-card>
                <addresses :id="$route.params.id"
                    type="workorder">
                </addresses>
                <comments-card :id="$route.params.id"
                               type="workorder">
                </comments-card>
            </div>
        </div>
    </div>

</template>

<script>
import DocumentsCard from '../../components/enso/documents/DocumentsCard.vue';
import CommentsCard from '../../components/enso/comments/CommentsCard.vue';
import Addresses from '../../components/enso/addresses/Addresses.vue';
import VueFormSs from '../../components/enso/vueforms/VueFormSs.vue';
import VueSelect from '../../components/enso/select/VueSelect.vue';

export default {
    components: {
        CommentsCard, DocumentsCard, Addresses, VueFormSs, VueSelect,
    },
    data() {
        return {
            initialised: false,
        };
    },
};
</script>

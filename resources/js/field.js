import IndexField from "./components/IndexField";
import DetailField from "./components/DetailField";
import FormField from "./components/FormField";

Nova.booting((Vue, router) => {
    Vue.component('index-address-field', IndexField);
    Vue.component('detail-address-field', DetailField);
    Vue.component('form-address-field', FormField);
})

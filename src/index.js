import Alert from "./components/Alert.vue";
import Table from "./components/Table.vue";
import TableField from "./components/TableField.vue";

panel.plugin("expl0it3r/kirby-bootstrap-blocks", {
  blocks: {
    alert: Alert,
    "bootstrap-table": Table,
  },
  fields: {
    "bootstrap-table": TableField,
  },
});

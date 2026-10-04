<template>
  <k-block-figure
    :is-empty="isEmpty"
    empty-icon="table"
    empty-text="No table content yet …"
    @open="open"
  >
    <div class="k-bootstrap-table-preview">
      <table>
        <tr v-for="(row, r) in rows" :key="r">
          <component :is="hasHeader && r === 0 ? 'th' : 'td'" v-for="(cell, c) in row" :key="c">
            {{ cell }}
          </component>
        </tr>
      </table>
      <p v-if="content.caption" class="k-bootstrap-table-caption">{{ content.caption }}</p>
    </div>
  </k-block-figure>
</template>

<script>
export default {
  computed: {
    rows() {
      let rows = this.content.rows;

      if (typeof rows === "string") {
        try {
          rows = JSON.parse(rows);
        } catch (e) {
          rows = null;
        }
      }

      return Array.isArray(rows) ? rows : [];
    },
    hasHeader() {
      // An unset toggle means the default, which is a header row
      return this.content.header !== false && this.content.header !== "false";
    },
    isEmpty() {
      return this.rows.every((row) => row.every((cell) => cell === ""));
    },
  },
};
</script>

<style>
.k-bootstrap-table-preview table {
  width: 100%;
  border-collapse: collapse;
  font-size: 0.875rem;
}
.k-bootstrap-table-preview th,
.k-bootstrap-table-preview td {
  padding: 0.375rem 0.5rem;
  border: 1px solid var(--color-border, #ccc);
  text-align: start;
  vertical-align: top;
}
.k-bootstrap-table-preview th {
  font-weight: 600;
}
.k-bootstrap-table-caption {
  margin-top: 0.375rem;
  font-size: 0.875rem;
  opacity: 0.75;
}
</style>

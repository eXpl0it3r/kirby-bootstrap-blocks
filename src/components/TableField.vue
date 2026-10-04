<template>
  <k-field v-bind="$props" class="k-bootstrap-table-field">
    <div class="k-bootstrap-table-grid">
      <table>
        <tbody>
          <tr v-for="(row, r) in rows" :key="r">
            <td v-for="(cell, c) in row" :key="c">
              <input
                type="text"
                :value="cell"
                :disabled="disabled"
                @input="setCell(r, c, $event.target.value)"
                @paste="paste(r, c, $event)"
              />
            </td>
            <td class="k-bootstrap-table-action">
              <k-button
                icon="remove"
                title="Remove row"
                :disabled="disabled || rows.length < 2"
                @click="removeRow(r)"
              />
            </td>
          </tr>
          <tr>
            <td v-for="(cell, c) in rows[0]" :key="c" class="k-bootstrap-table-action">
              <k-button
                icon="remove"
                title="Remove column"
                :disabled="disabled || rows[0].length < 2"
                @click="removeColumn(c)"
              />
            </td>
            <td class="k-bootstrap-table-action"></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="k-bootstrap-table-buttons">
      <k-button icon="add" :disabled="disabled" @click="addRow">Row</k-button>
      <k-button icon="add" :disabled="disabled" @click="addColumn">Column</k-button>
    </div>
  </k-field>
</template>

<script>
export default {
  props: {
    label: String,
    help: String,
    name: String,
    disabled: Boolean,
    required: Boolean,
    value: [Array, String],
  },
  computed: {
    rows() {
      let rows = this.value;

      if (typeof rows === "string") {
        try {
          rows = JSON.parse(rows);
        } catch (e) {
          rows = null;
        }
      }

      if (!Array.isArray(rows) || rows.length === 0) {
        return [["", "", ""], ["", "", ""], ["", "", ""]];
      }

      return rows;
    },
  },
  methods: {
    emit(rows) {
      this.$emit("input", rows);
    },
    copy() {
      return this.rows.map((row) => [...row]);
    },
    setCell(r, c, value) {
      const rows = this.copy();
      rows[r][c] = value;
      this.emit(rows);
    },
    addRow() {
      this.emit([...this.copy(), this.rows[0].map(() => "")]);
    },
    addColumn() {
      this.emit(this.copy().map((row) => [...row, ""]));
    },
    removeRow(r) {
      this.emit(this.copy().filter((row, index) => index !== r));
    },
    removeColumn(c) {
      this.emit(this.copy().map((row) => row.filter((cell, index) => index !== c)));
    },
    // Several cells from a spreadsheet arrive as tab separated lines, those fill the grid from the current cell on
    paste(r, c, event) {
      const text = (event.clipboardData || window.clipboardData).getData("text/plain");

      if (!/[\t\n]/.test(text.replace(/\r?\n$/, ""))) {
        return;
      }

      event.preventDefault();

      const cells = text.replace(/\r/g, "").replace(/\n$/, "").split("\n").map((line) => line.split("\t"));
      const rows = this.copy();
      const columns = Math.max(rows[0].length, c + Math.max(...cells.map((line) => line.length)));

      while (rows.length < r + cells.length) {
        rows.push([]);
      }

      rows.forEach((row) => {
        while (row.length < columns) {
          row.push("");
        }
      });

      cells.forEach((line, y) => line.forEach((value, x) => (rows[r + y][c + x] = value)));

      this.emit(rows);
    },
  },
};
</script>

<style>
.k-bootstrap-table-grid {
  overflow-x: auto;
}
.k-bootstrap-table-grid table {
  width: 100%;
  border-collapse: collapse;
  table-layout: fixed;
}
.k-bootstrap-table-grid td {
  padding: 0;
  border: 1px solid var(--input-color-border, var(--color-border, #ccc));
}
.k-bootstrap-table-grid input {
  display: block;
  width: 100%;
  padding: 0.375rem 0.5rem;
  border: 0;
  background: var(--input-color-back, #fff);
  color: var(--input-color-text, inherit);
  font: inherit;
}
.k-bootstrap-table-grid input:focus {
  outline: 2px solid var(--color-focus, #4271ae);
  outline-offset: -2px;
}
.k-bootstrap-table-grid td.k-bootstrap-table-action {
  width: 2.25rem;
  border: 0;
  text-align: center;
}
.k-bootstrap-table-buttons {
  display: flex;
  gap: 0.5rem;
  margin-top: 0.5rem;
}
</style>

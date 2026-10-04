<template>
  <k-block-figure
    :style="{
      backgroundColor: colors.background,
      border: `1px solid ${colors.border}`,
      color: colors.text,
    }"
  >
    <div
      :style="{
        display: 'flex',
        gap: '1em',
      }"
    >
      <k-icon type="alert" :color="colors.text"></k-icon>
      <div v-html="content.text"></div>
    </div>
  </k-block-figure>
</template>

<script>
// The colors of the Bootstrap 5.3 alerts, so the preview looks like the alert on the site
const colorMappings = {
  success: { background: "#d1e7dd", border: "#a3cfbb", text: "#0a3622" },
  danger: { background: "#f8d7da", border: "#f1aeb5", text: "#58151c" },
  warning: { background: "#fff3cd", border: "#ffe69c", text: "#664d03" },
  info: { background: "#cff4fc", border: "#9eeaf9", text: "#055160" },
};

export default {
  computed: {
    colors() {
      return colorMappings[this.content.alerttype] ?? { background: "#fff", border: "#dee2e6", text: "#212529" };
    },
  },
};
</script>

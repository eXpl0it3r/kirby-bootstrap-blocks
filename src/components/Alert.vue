<template>
  <k-block-figure
    :style="{
      backgroundColor: colors.background,
      border: `1px solid ${colors.border}`,
      color: colors.text,
      margin: '0.375rem 0',
    }"
  >
    <div
      :style="{
        display: 'flex',
        alignItems: 'center',
        gap: '1em',
        padding: '0.625rem 0.75rem',
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
  primary: { background: "#cfe2ff", border: "#9ec5fe", text: "#052c65" },
  secondary: { background: "#e2e3e5", border: "#c4c8cb", text: "#2b2f32" },
  success: { background: "#d1e7dd", border: "#a3cfbb", text: "#0a3622" },
  danger: { background: "#f8d7da", border: "#f1aeb5", text: "#58151c" },
  warning: { background: "#fff3cd", border: "#ffe69c", text: "#664d03" },
  info: { background: "#cff4fc", border: "#9eeaf9", text: "#055160" },
  light: { background: "#fcfcfd", border: "#e9ecef", text: "#495057" },
  dark: { background: "#ced4da", border: "#adb5bd", text: "#495057" },
};

export default {
  computed: {
    colors() {
      return colorMappings[this.content.alerttype] ?? { background: "#fff", border: "#dee2e6", text: "#212529" };
    },
  },
};
</script>

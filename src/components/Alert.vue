<template>
  <k-block-figure
    :style="{
      backgroundColor: computedBackgroundColor,
    }"
  >
    <div
      :style="{
        display: 'flex',
        gap: '1em',
      }"
    >
      <k-icon type="alert" :color="computedColor"></k-icon>
      <p v-html="content.text"></p>
    </div>
  </k-block-figure>
</template>

<script>
export default {
  computed: {
    computedColor() {
      const colorMappings = {
        success: "#3c763d",
        info: "#31708f",
        warning: "#8a6d3b",
        danger: "#a94442",
      };

      if (this.content.alerttype in colorMappings) {
        return colorMappings[this.content.alerttype];
      } else {
        return "#000";
      }
    },
    computedBackgroundColor() {
      const colorMappings = {
        success: "#dff0d8",
        info: "#d9edf7",
        warning: "#fcf8e3",
        danger: "#f2dede",
      };

      if (this.content.alerttype in colorMappings) {
        return colorMappings[this.content.alerttype];
      } else {
        return "#fff";
      }
    },
  },
};
</script>

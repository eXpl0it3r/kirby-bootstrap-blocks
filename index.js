panel.plugin("expl0it3r/kirby-bootstrap-blocks", {
    blocks: {
      alert: {
        template: `
            <div v-html="content.text"></div>
        `
      }
    }
  });
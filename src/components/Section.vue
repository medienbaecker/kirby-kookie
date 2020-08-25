<template>
  <section class="k-kookie-section">
    <header class="k-section-header">
      <h2 class="k-headline">{{ headline }}</h2>
    </header>
  </section>
</template>

<script>
export default {
  data() {
    return {
      headline: null,
    }
  },
  created() {
    this.load().then(response => {
      this.headline = response.headline;
    });
  }
};
</script>
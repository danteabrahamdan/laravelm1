<template>
  <span>{{ formatearFecha }}</span>
</template>

<script>
export default {
  props: ['fecha'],
  computed: {
    formatearFecha() {
      return moment(this.fecha).locale('es').format('DD [del] MMMM [del] YYYY');
    }
  }
}
</script>
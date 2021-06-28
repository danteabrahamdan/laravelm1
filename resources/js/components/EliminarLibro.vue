<template>
  <a @click="eliminarLibro" class="cursor"><i class="fa fa-trash trash"></i></a>
</template>

<script>
export default {
  props: ['bookId'],
  methods: {
    eliminarLibro() {
      this.$swal({
        title: '¿Deseas eliminar este libro?',
        text: "Una vez eliminado, no se puede recuperar",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelbuttonText: 'No'
      }).then((result) => {
        if (result.value) {
          const params = { id: this.bookId };
          axios.post(`/books/${this.bookId}`, { params, _method: 'delete' })
            .then(res => {
              this.$swal({ title: 'Libro eliminado', text: 'Se elimino el libro', icon: 'success' });
              window.location.replace('http://localhost:8000/books');
            })
            .catch(err => console.log(err));
        }
      })  
    }
  },
}
</script>

<style lang="scss" scoped>
.cursor {
  cursor: pointer;
}
</style>
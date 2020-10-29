<template>
  <span>{{ cantidad }}</span>
</template>

<script>
export default {
  props: ["id"],
  data() {
    return {
      cantidad: 0,
    };
  },
  mounted() {
    this.comentarios();
  },
  methods: {
    comentarios() {
      const params = {
        id: this.id,
      };
      axios
        .get(`/blog/articulo/comentarios/${this.id}`, {
          params,
          _method: "get",
        })
        .then((resp) => {
          if (resp.status == 200) this.cantidad = resp.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>
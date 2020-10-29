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
    this.vistas();
  },
  methods: {
    vistas() {
      const params = {
        id: this.id,
      };
      axios
        .get(`/blog/articulo/vistas/${this.id}`, {
          params,
          _method: "get",
        })
        .then((resp) => {
          if (resp.status == 200) this.cantidad = resp.data.vistas_articulo;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>
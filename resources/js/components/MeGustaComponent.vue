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
    this.megusta();
  },
  methods: {
    megusta() {
      const params = {
        id: this.id,
      };
      axios
        .get(`/blog/articulo/megusta/${this.id}`, {
          params,
          _method: "get",
        })
        .then((resp) => {
          if (resp.status == 200) this.cantidad = resp.data.megusta;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>
<template>
  <a
    href="http://localhost:8000/articulo/"
    {{Id}}
    class="float-right"
    @click="vistas"
    >Leer Más</a
  >
</template>

<script>
export default {
  props: ["id"],
  data() {
    return { Id: null };
  },
  methods: {
    vistas() {
      this.Id = this.id;
      const params = {
        id: this.id,
      };
      axios
        .post(`/blog/vistas/${this.id}`, {
          params,
          _method: "put",
        })
        .then((resp) => {
          console.log(resp.status);
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>

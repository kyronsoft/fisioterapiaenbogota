<template>
  <small class="btn btn-info btn-sm"
    ><i class="fa fa-heart" aria-hidden="true"></i> {{ cantidad }}</small
  >
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
        .get(`/blog/megusta/${this.id}`, {
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
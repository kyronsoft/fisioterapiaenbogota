<template>
  <button class="btn btn-primary btn-sm w-100" @click="autorizar">{{estado}}</button>
</template>

<script>
export default {
  props: ["id", "estado"],
  methods: {
    autorizar() {
      const params = {
        id: this.id,
      };
      axios
        .post(`/ks-admin/blog/comentarios/${this.id}`, {
          params,
          _method: "put",
        })
        .then((resp) => {
          if (resp.status == 200) location.reload();
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>

<template>
  <div>
    <span class="like-btn" @click="megusta"></span>
  </div>
</template>

<script>
export default {
  props: ["id"],
  methods: {
    megusta() {
      $(".like-btn").toggleClass("like-active");
      const params = {
        id: this.id,
      };
      axios
        .post(`/articulo/${this.id}`, {
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

<style scoped>
.like-btn {
  display: inline-block;
  cursor: pointer;
  width: 80px;
  height: 80px;
}

.like-btn {
  background: url("https://i.ibb.co/vw78mf3/heart.png") no-repeat 0% 50%;
  background-size: 2900%;
}

.like-active {
  animation-name: animate;
  animation-duration: 0.8s;
  animation-iteration-count: 1;
  animation-fill-mode: forwards;
}

.like-active {
  animation-timing-function: steps(28);
}

@keyframes animate {
  0% {
    background-position: left;
  }

  50% {
    background-position: right;
  }

  100% {
    background-position: right;
  }
}
</style>

<template>
  <span class="like-btn" @click="cambiar"></span>
</template>

<script>
export default {
  methods: {
    cambiar() {
      $(".like-btn").toggleClass("like-active")
    }
  }
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

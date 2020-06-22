<template>
    <img  v-bind:src="image_url" class="img-fluid" style="height:100%;" alt="Responsive image">
</template>
<script>
export default {
  data() {
    return {

    };
  },
  props: {
  image_url: String,

  }

};
</script>

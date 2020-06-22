
<template>

<a v-bind:href="button_url" v-bind:class="button_class" role="button">{{button_text}}</a>

</template>
<script>
export default {
  data() {
    return {

    };
  },
  props: {
  button_text: String,
   button_class:String,
   button_url:String,
  }

};
</script>

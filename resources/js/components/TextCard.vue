<template>
  <div class="card" style="height:100%;">
    <img class="card-img-top" v-bind:src="text_url" alt="Card image cap" />
    <div class="card-body" >
      <h5 class="card-title"  >{{text_title}}</h5>
      <p class="card-text" >{{text_value}}</p>
      <a href="#" class="btn btn-primary">Daha Fazla..</a>
    </div>
  </div>
</template>


<script>
export default {
  data() {
    return {
      title: "test",
      paragraph: "test"
    };
  },
  props: {
  text_value: String,
   text_title: String,
   text_url:String
  }

};
</script>

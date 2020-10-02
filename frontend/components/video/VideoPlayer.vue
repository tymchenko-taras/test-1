<template>
  <div class="container">
      <h4 class="title">Video Player</h4>

      <iframe v-if="videoId" :src="'//fast.wistia.net/embed/iframe/'+ videoId +'?videoFoam=true&playerColor=013b30'"
              allowtransparency="true"
              frameborder="0"
              scrolling="no"
              class="wistia_embed"
              name="wistia_embed"
              allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen
              width="620"
              height="349">
      </iframe>
      <h5 class="title">{{ item.title }}</h5>
      <div>{{ item.description }}</div>
  </div>
</template>

<script>
    export default {
      props: ['item'],
      computed: {
          videoId() {
              return this.item.videoId
          }
      },
  };
</script>
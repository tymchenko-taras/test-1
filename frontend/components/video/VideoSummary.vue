<template>
    <b-card class="border-0">
      <b-link :to="'/videos/' + item.id">
          <div class="bg-secondary thumbnail row align-items-center">
              <div  class="play bg-primary"></div>
          </div>
      </b-link>

      <b-card-text><h4 class="title">{{ item.title }}</h4></b-card-text>
      <b-card-text>{{ item.description }}</b-card-text>
    </b-card>
</template>

<script>

export default {
  props: ['item']
};
</script>

<style lang="scss">
.thumbnail:hover .play:after{
    content: "Watch Now";
    border: none;
    font-size: 0.8em;
    font-weight: 600;
    position: relative;
    top: auto;
    padding-left: 0.6em;
}
.thumbnail:hover .play{
    width: 50%;
    border-radius: 1em;
}
.thumbnail:hover{
    border: 0.8em $primary solid;
}
.thumbnail{
    height: 200px;
    width: 300px;
    position: relative;
    transition: border 50ms ease-out;
}
.play {
    border-radius: 0.3em;
    color: #fff;
    font-size: 1.5em;
    height: 1.9em;
    margin: 20px auto;
    padding: 0;
    position: relative;
    text-align: center;
    text-indent: 0.1em;
    width: 2.8em;
}
.play::after {
    border-style: solid;
    border-width: 1em 0 1em 1.732em;
    border-color: transparent transparent transparent rgba(255, 255, 255, 0.75);
    content: ' ';
    font-size: 0.45em;
    height: 0;
    margin: -1em 0 0 -0.75em;
    top: 50%;
    position: absolute;
    width: 0;
}
</style>
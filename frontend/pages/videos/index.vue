<template>
  <div class="container-fluid">
    <b-row class="mb-5">
      <b-col cols="2">
          <b-form-select v-model="selected" :options="options"></b-form-select>
      </b-col>
    </b-row>
    <b-row>
      <b-col md="6" lg="4" xl="3" v-for="item in items">
        <VideoSummary :item="item"/>
      </b-col>
    </b-row>
  </div>
</template>

<script>
import VideoSummary from "../../components/video/VideoSummary";

export default {
  middleware: ['auth'],
  components: {
    VideoSummary
  },
  computed: {
    items() {
      return this.$store.state.video.items
    }
  },
  created: function() {
    this.$store.dispatch("video/loadItems")
  },
  data() {
    return {
      selected: null,
      options: [
        { value: null, text: 'Video filter' },
        { value: '1', text: 'Video option 1' },
        { value: '2', text: 'Video option 2' },
        { value: '3', text: 'Video option 3' },
        { value: '4', text: 'Video option 4' },
        { value: '5', text: 'Video option 5' },
        { value: '6', text: 'Video option 6' },
        { value: '7', text: 'Video option 7' },
        { value: '8', text: 'Video option 8' },
      ]
    }
  }
}
</script>


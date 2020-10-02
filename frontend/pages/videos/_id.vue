<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <b-link to="/videos">Back</b-link>
            </div>
        </div>
        <VideoPlayer :item="item"/>
    </div>
</template>

<script>
    import VideoPlayer from "../../components/video/VideoPlayer";
    export default {
        middleware: ['auth'],
        components: {
            VideoPlayer
        },
        computed: {
            item() {
                return this.$store.state.video.item
            }
        },
        created: function() {
            this.$store.dispatch("video/loadItem", this.$route.params.id)
        },
        methods: {

        }
    }
</script>
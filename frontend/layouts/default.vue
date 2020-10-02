<template>
  <div>
    <b-navbar toggleable="lg" variant="light">
      <b-navbar-brand to="/">
        <span class="title">AlgaeCal</span>
      </b-navbar-brand>

      <b-navbar-nav class="ml-auto">
        <b-nav-item to="/videos">Videos</b-nav-item>
        <b-nav-item @click="logout">Logout</b-nav-item>
      </b-navbar-nav>
    </b-navbar>

    <Nuxt />
  </div>
</template>

<script>
  export default {
    methods: {
       logout() {
        this.$store.commit("auth/setLoggedIn", false)
        this.$router.push('/')
      }
    }
  };
</script>

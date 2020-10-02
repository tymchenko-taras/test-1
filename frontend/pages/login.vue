<template>
  <div class="container-fluid login-page bg-secondary">
      <LoginForm/>
  </div>
</template>

<script>
import LoginForm from "../components/user/LoginForm";

export default {
  components: {
    LoginForm
  },
}
</script>

<style>
.login-page {
  margin: 0 auto;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

</style>

<template>
    <b-card style="width: 32rem;">
        <h1 class="title mt-5 mb-5">User Login</h1>

        <b-form @submit.prevent="onSubmit">
            <b-row>
                <b-col class="text-left mb-4">
                    <b-form-input
                            id="input-1"
                            v-model="form.username"
                            required
                            placeholder="Enter username"
                    ></b-form-input>
                </b-col>
            </b-row>
            <b-row class="text-left mb-4">
                <b-col>
                    <b-form-checkbox
                            id="checkbox-1"
                            name="checkbox-1"
                            value="accepted"
                    >
                        Remember Me
                    </b-form-checkbox>
                </b-col>
            </b-row>
            <b-row>
                <b-col class="text-left mb-4">
                    <p class="text-danger" style="height: 1rem">
                        {{form.error}}
                    </p>
                </b-col>
            </b-row>
            <b-row>
                <b-col class="text-center mb-5">
                    <b-button :disabled="form.username.length < 3" class="w-50 rounded-pill" variant="primary" type="submit">Login</b-button>
                </b-col>
            </b-row>
        </b-form>
    </b-card>
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    username: "",
                    error: "",
                },
            };
        },
        methods: {
            async onSubmit() {
                await this.$store.dispatch("auth/login", this.form.username, "")
                if(this.$store.state.auth.error) {
                    this.form.error = this.$store.state.auth.error
                } else {
                    this.$router.push('/videos')
                }
            },
        }
    }
</script>
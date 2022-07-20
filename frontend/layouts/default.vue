<template>
  <div>
    <div class="p-2 bg-gray-600 text-white">
          <nuxt-link to="/">Home</nuxt-link>
          <nuxt-link to="/login"  v-if="$auth.loggedIn==false">Login</nuxt-link>
          <nuxt-link to="/dashboard"    v-if="$auth.loggedIn==true">Dashboard</nuxt-link>
          <nuxt-link to="/register"  v-if="$auth.loggedIn==false" >register</nuxt-link>

    </div>
    <Nuxt/>
  </div>
</template>
<script>
export default {
  auth:false,

        watch: {
            $route() {
                location.reload();
            },
        }


}
</script>

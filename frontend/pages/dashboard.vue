<template>
  <div class="font-bold">
    Dashboard: {{$auth.user.name}} Email:{{$auth.user.email}}
    <div>
      <button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" @click="logout">
  Logout
</button>
    </div>

  </div>
</template>
<script>
export default {
  middleware:'auth',
  methods:{
    async logout(){
      this.$auth.logout();
    this.$router.push('/login')
    }
  }
}
</script>

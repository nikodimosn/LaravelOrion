<template>
  <div class="font-bold">
    Hello: {{$token}} Email:{{$auth.user.email}}
    <div>
      <button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" @click="logout">

  Logout
</button>
<button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" @click="session">

  Session
</button>
    </div>

  </div>
</template>
<script>
export default {
  methods:{
    async logout(){
      this.$auth.logout();
    this.$router.push('/login')
    },
    async session(){
      console.log()

    }
  }
}
</script>

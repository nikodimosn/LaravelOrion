<template>

<div class="container max-w-full mx-auto py-24 px-6">
  <div class="font-sans">
  <div class="max-w-sm mx-auto px-6">
    <div class="relative flex flex-wrap">
      <div class="w-full relative">
        <div class="mt-6">
           <div class="mb-5 pb-1border-b-2 text-center font-base text-gray-700">
          </div>
          <div class="text-center font-semibold text-black">
Register          </div>

          <form class="mt-8" ref="registerForm" @submit.prevent="register" >
            <div class="mx-auto max-w-lg">
              <div class="py-2">
                <span class="px-1 text-sm text-gray-600">names</span>
                <input placeholder="" type="text" name="name"
                  class="text-md block px-3 py-2  rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
              </div>

               <div class="py-2">
                <span class="px-1 text-sm text-gray-600">email</span>
                <input placeholder="" type="text" name="email"
                  class="text-md block px-3 py-2  rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
              </div>
              <div class="py-2" >
                <span class="px-1 text-sm text-gray-600">Password</span>
                <div class="relative">
                  <input placeholder="" :type="show ? 'password' : 'text'" name="password" class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                focus:placeholder-gray-500
                focus:bg-white
                focus:border-gray-600
                focus:outline-none">
                  <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">


                  </div>
                </div>
              </div>
              <div class="flex justify-between"><label class="block text-gray-500 font-bold my-4"><input type="checkbox"
                    class="leading-loose text-pink-600"> <span class="py-2 text-sm text-gray-600 leading-snug"> Remember
                    Me </span></label> <label class="block text-gray-500 font-bold my-4"><a
                    href="#"
                    class="cursor-pointer tracking-tighter text-black border-b-2 border-gray-200 hover:border-gray-400"><span>Forgot
                      Password?</span></a></label></div> <button type="submit" class="mt-3 text-lg font-semibold
                bg-gray-800 w-full text-white rounded-lg
                px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
                Login
              </button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
</template>
<script>
export default {
  mounted(){
this.$axios.$get('/sanctum/csrf-cookie')
  },
  methods:{
 register(){
  try{
    const formData=new FormData(this.$refs.registerForm);
    this.$axios.post('/register',formData).then(res=>{
this.$auth.loginWith('laravelSanctum',{data:formData});
    console.log("user login");
    this.$router.push({
      path:'/dashboard'
    });
    });

  }catch(err){
    console.log(err)
  }
}
  }
}
</script>

<script setup>
import {onMounted, ref} from "vue";
import {useRouter} from "vue-router";

const router = useRouter();

let errors=ref()
let form = ref({
    email: '',
    password: '',
})

onMounted(async () => {
    console.log('mounted')
})


const login = () => {

    const formData = new FormData()
    formData.append('email', form.value.email)
    formData.append('password', form.value.password)
    console.log(form.value.email)

    axios.post("api/login_process", formData)
        .then((response) => {
            location.reload();
                toast.fire({
                icon: "success",
                title: "Успешный вход в систему",
            })

        })
        .catch((error) => {
            if(error.status='422') {
                console.log(error);
                errors.value = error.response.data.errors;
            }
            else{
                errors.value=error.response.errors
                console.log(errors.value)
            }

        })
}


</script>

<template>
    <div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
        <div class="bg-white w-99 shadow-xl rounded p-5">
            <h1 class="text-3xl font-medium">Вход</h1>

            <form  class="space-y-5 mt-5">

            <input name="email"   type="email" v-model="form.email" class="w-full h-12 border border-red-500 rounded px-3" placeholder="Email" />
                <div class="alert alert-danger" v-if="errors && errors.email">
                    {{ errors.email[0] }}
                </div>
            <input name="password" type="password" v-model="form.password" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Пароль" />
                <div class="alert alert-danger" v-if="errors && errors.password">
                    {{ errors.password[0] }}
                </div>
                <div class="alert alert-danger" v-if="errors && !errors.password&&!errors.email">
                    {{ errors }}
                </div>

            <div>
                <a href="#" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Забыли пароль?</a>
            </div>

            <div>
                <a href="/register" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Регистрация</a>
            </div>

            <button type="button" @click="login" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Войти</button>
            </form>
        </div>
    </div>



</template>

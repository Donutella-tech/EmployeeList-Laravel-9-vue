<script setup>
import {onMounted, ref} from "vue";
import {useRouter} from "vue-router";

const router = useRouter()

let errors=ref({

})
let form = ref({
    id: '',
    name: '',
    email: '',
    password: '',

})


onMounted(async () => {

    getUser()

})

const getUser = async () => {

    let response = await axios.get('/api/getUser')


    form.value = response.data.user;

}
const updateUser = () => {
    const formData = new FormData()
    formData.append('name', form.value.name)
    formData.append('email', form.value.email)
    formData.append('password', form.value.password)
    formData.append('id', form.value.id)
    Swal.fire({
        title: 'Вы уверены?',
        text: 'Данные о пользователе обновяться',
        icon: "warning",
        showCancelButton: true,

        confirmButtonText: 'Да,обновить',
        confirmButtonColor: '#3085d6',
        cancelButtonText: 'Отменить',
        cancelButtonColor: '#d33',


    }).then((result) => {
        if (result.value) {
            axios.post('/api/update_user', formData)
                .then(() => {
                    Swal.fire({
                        title: 'Обновление',
                        text: 'Данные обновлены успешно',
                        icon: 'success'
                    })

                    router.push('/list')
                })
                .catch((e)=>{
                     errors.value = e.response.data.errors;
                    console.log(errors)


            });
        }
    })

}

</script>


<template>

    <div class="container my-5">
       <div class="form-row">
            <div class="form-group col-md-6">
                <label>ФИО</label>
                <input type="text" v-model="form.name" class="form-control" name="name" id="name" placeholder="ФИО">
                <div class="alert alert-danger" v-if="errors && errors.name">
                    {{ errors.name[0] }}
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" v-model="form.email" id="email" placeholder="test@gmail.com">
                <div class="alert alert-danger" v-if="errors && errors.email">
                  {{ errors.email[0] }}
                </div>
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Пароль</label>
                <input type="password" class="form-control" v-model="form.password" id="password"
                       placeholder="Пароль">
                <div class="alert alert-danger" v-if="errors && errors.password">
                     {{ errors.password[0] }}
                </div>
            </div>

        </div>
        <div class="form my-3">
            <button type="button" class="btn btn-success" style="width:100px" @click="updateUser()">
                Обновить
            </button>
        </div>
    </div>

</template>



<script setup>
import {ref} from "vue"

import {useRouter} from "vue-router";

const router = useRouter();
let errors=ref({})
let form = ref({
    name: '',
    position: '',
    date: '',
    salary: '',
    boss: '',
    image: ''


})
const getPhoto = () => {
    let image = "/upload/image.png"
    if (form.value.image) {
        if (form.value.image.indexOf('base64') != -1) {
            image = form.value.image
        } else {
            image = '/upload/' + form.value.image
        }
    }
    return image
}
const updatePhoto = (e) => {
    let file = e.target.files[0];
    let reader = new FileReader();
   /* let limit = 1024 * 1024 * 2;
    if (file['size'] > limit) {
        return false
    }*/
    reader.onloadend = (file) => {
        form.value.image = reader.result;
    }
    reader.readAsDataURL(file);
}



const saveEmployee = () => {

    const formData = new FormData()


    formData.append('name', form.value.name)
    formData.append('position', form.value.position)
    formData.append('date', form.value.date)
    formData.append('salary', form.value.salary)
    formData.append('boss', form.value.boss)
    formData.append('image', form.value.image)


    axios.post("api/add_employee", formData)
        .then((response) => {

            form.value.name = '';
            form.value.position = '';
            form.value.date = '';
            form.value.salary = '';
            form.value.salary = '';
            form.value.boss = '';
            form.value.image = '';
            router.push('/list');
            toast.fire({
                icon: "success",
                title: "Работник добавлен успешно",
            })
        })
        .catch((error) => {

            errors.value = error.response.data.errors;


        })

}

</script>

<template>




    <div class="container my-5">


        <div class="form-row">
            <div class="form-group col-md-6">
                <label>ФИО Работника</label>
                <input type="text" required v-model="form.name" class="form-control" id="name"
                       placeholder="ФИО Работника">
                <div class="alert alert-danger" v-if="errors && errors.name">
                    {{ errors.name[0] }}
                </div>
            </div>
            <div class="form-group col-md-6">
                <label>Должность</label>
                <input type="text" required class="form-control" v-model="form.position" id="position"
                       placeholder="Должность">
                <div class="alert alert-danger" v-if="errors && errors.position">
                    {{ errors.position[0] }}
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Дата трудоустройства</label>
                <input type="date" required class="form-control" v-model="form.date" id="date"
                       placeholder="Дата приёма на работу">
                <div class="alert alert-danger" v-if="errors && errors.date">
                    {{ errors.date[0] }}
                </div>
            </div>
            <div class="form-group col-md-6">
                <label>Заработная плата</label>
                <input type="number" required class="form-control" v-model="form.salary" id="salary"
                       placeholder="Заработная плата сотрудника">
                <div class="alert alert-danger" v-if="errors && errors.salary">
                    {{ errors.salary[0] }}
                </div>
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Id босса</label>
                <input type="number" required v-model="form.boss" class="form-control">
                <div class="alert alert-danger" v-if="errors && errors.boss">
                    {{ errors.boss[0] }}
                </div>
                <div class="form my-3">
                    <button type="button" class="btn btn-success" style="width:100px" @click="saveEmployee">Сохранить
                    </button>
                </div>
            </div>

        </div>

        <div class="form-group col-md-6">

            <div class="form-row">
                <img :src="getPhoto()" style="height: 200px;width: 250px" alt=""/>
            </div>

            <form>
                <label for="myfile">Добавить фотографию</label>
                <input required class="form-control" type="file" id="myfile" @change="updatePhoto">

            </form>
          </div>
    </div>
</template>



















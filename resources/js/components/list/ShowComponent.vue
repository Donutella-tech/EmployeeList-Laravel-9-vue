<script setup>
import {onMounted, ref} from "vue";
import {useRouter} from "vue-router";

const router = useRouter()

let employees = ref([])
let searchEmployee = ref([])

onMounted(async () => {
    getEmployees()

})

const getEmployees = async (page_url) => {
    page_url = page_url || '/api/showAll'
    await axios.get(page_url)
        .then(response => {
            employees.value = response.data.employees;

        }).catch(error => {
            console.log(error);
        })

}

const search = async () => {
    let search = searchEmployee.value
    if (search != '') {
        await axios.get('/api/search_employee/' + search)
            .then(response => {
                console.log(searchEmployee.value)
                employees.value = response.data.employees;
                console.log('Employees:', employees.value)

            }).catch(error => {
                console.log('error', error);
            })
    } else {
        getEmployees()
    }
}

const onSorting = async (sort) => {

    await axios.get('/api/sort_employees/' + sort)
        .then(response => {
            employees.value = response.data.employees;
            console.log('Employees:', employees.value)

        }).catch(error => {
            console.log('error', error);
        })

}
const ourImage = (img) => {
    return "/upload/" + img;
}

const newEmployee = () => {

    router.push('/new')
}

const onEdit = (id) => {

    router.push('/list/edit/' + id)
}

const onDelete = (id) => {
    Swal.fire({
        title: 'Вы уверены?',
        text: 'Данные удаляться безвозвратно!',
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: 'Да,удалить',
        confirmButtonColor: '#3085d6',
        cancelButtonText: 'Отменить',
        cancelButtonColor: '#d33',


    })
        .then((result) => {
            if (result.value) {
                axios.get('/api/delete_employee/' + id)
                    .then(() => {
                        Swal.fire(
                            'Удаление',
                            'Работник удалён успешно',
                            'success'
                        )
                        getEmployees()
                    })
                    .catch(() => {
                        Swal.fire(
                            "Failed", "There was something wrong", "Warning"
                        )
                    })
            }
        })
}

</script>
<template>

    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
           aria-expanded="false">
            Сортировка
        </a>

        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" @click="onSorting('name1')">Имя(А-Я)</a></li>
            <li><a class="dropdown-item" @click="onSorting('name2')">Имя(Я-А)</a></li>
            <li>
                <hr class="dropdown-divider-white">
            </li>
            <li><a class="dropdown-item" @click="onSorting('id1')">Id возрастание</a></li>
            <li><a class="dropdown-item" @click="onSorting('id2')">Id убывание</a></li>
            <li>
                <hr class="dropdown-divider-white">
            </li>
            <li><a class="dropdown-item" @click="onSorting('position1')">Должность(А-Я)</a></li>
            <li><a class="dropdown-item" @click="onSorting('position2')">Должность(Я-А)</a></li>
            <li>
                <hr class="dropdown-divider-white">
            </li>
            <li><a class="dropdown-item" @click="onSorting('date1')">Дата возрастание</a></li>
            <li><a class="dropdown-item" @click="onSorting('date2')">Дата убывание</a></li>
            <li>
                <hr class="dropdown-divider-white">
            </li>
            <li><a class="dropdown-item" @click="onSorting('salary1')">Зарплата возрастание</a></li>
            <li><a class="dropdown-item" @click="onSorting('salary2')">Зарплата убывание</a></li>
            <li>
                <hr class="dropdown-divider-white">
            </li>
            <li><a class="dropdown-item" @click="onSorting('boss1')">Начальник (А-Я)</a></li>
            <li><a class="dropdown-item" @click="onSorting('boss2')">Начальник (Я-А)</a></li>

        </ul>
    </div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 text-right">
                <a class="btn btn-success my-3 mb-3" id="create-new-post" @click="newEmployee">Добавить сотрудника</a>
            </div>
        </div>

        <div class="row" style="clear: both;margin-top: 18px;">
            <div class="col-12">
                <div class="form-outline mb-5">
                    <input type="input" placeholder="Поиск" width="10px" class="form-control" id="search"
                           v-model="searchEmployee" @keyup="search()">
                </div>
                <table id="laravel_crud" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Иия</th>
                        <th>Должность</th>
                        <th>Дата трудоустройства</th>
                        <th>Зарплата</th>
                        <th>Номер начальника</th>
                        <th>Фото</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr v-for="item in employees.data">

                        <td>{{ item.id }}</td>
                        <td>{{ item.name }}</td>
                        <td>{{ item.position }}</td>
                        <td>{{ item.date }}</td>
                        <td>{{ item.salary }}</td>
                        <td>{{ item.boss }}</td>

                        <td v-if="item.image"><img class="products__list__item--img"
                                                   :src="ourImage(item.image)" alt=""
                                                   style="height: 100px;width: 110px"></td>
                        <td v-else>Фото не добавлено</td>
                        <td><a @click="onEdit(item.id)" class="btn btn-info">Редактировать</a></td>
                        <td><a @click="onDelete(item.id)" class="btn btn-danger">Удалить</a></td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <nav class="navbar" style="clear: both;margin-bottom: 18px; margin-left:700px;">
        <ul class="pagination ">

            <li class="page-item">
                <button type="button" class="page-link" @click="getEmployees(employees.first_page_url)">Первая</button>
            </li>

            <li class="page-item">
                <button type="button" class="page-link" @click="getEmployees(employees.prev_page_url)">Назад</button>
            </li>

            <li class="page-item active" aria-current="page">
                <button type="button" class="page-link">{{ employees.current_page }}</button>
            </li>

            <li class="page-item">
                <button type="button" class="page-link" @click="getEmployees(employees.next_page_url)">Вперед</button>
            </li>

            <li class="page-item">
                <button type="button" class="page-link" @click="getEmployees(employees.last_page_url)">Последняя
                </button>
            </li>
            <li>
                <p style="margin-top: 5px;"> Страница {{ employees.current_page }} из {{ employees.last_page }}</p>
            </li>
        </ul>
    </nav>
</template>





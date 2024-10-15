<template>
    <section>
        <div>
            <h1>Админ. панель</h1>
            <p @click="Logout()">Выход</p>
        </div>
        <table>
            <tr>
                <th>Пользователь</th>
                <th>Марка</th>
                <th>Начало аренды</th>
                <th>Конец аренды</th>
                <th>Одобрить</th>
                <th>Отказать</th>
            </tr>
            <tr v-for="order in orders" :key="order">
                <td>{{ order.id_user[0].name }}</td>
                <td>{{ order.id_car[0].name }} {{ order.id_car[0].year }}г.</td>
                <td>{{ order.start }}</td>
                <td>{{ order.end }}</td>
                <td><button class="yes" @click="Accept(order.id)">✔</button></td>
                <td><button class="no" @click="Cancel(order.id)">✖</button></td>
            </tr>
        </table>  
    </section>
</template>

<script>
import axios from 'axios';

    export default {
        data() {
            return {
                orders: []
            }
        },
        mounted() {
            this.GetAllOrders()
        },
        methods: {
            GetAllOrders(){
                axios.get('/api/order/all')
                .then(res => {
                    this.orders = res.data.data
                    console.log(this.orders);
                    
                })
            },

            Logout(){
                axios.get('/api/logout')
                .then(res => {
                    localStorage.removeItem("token");
                    localStorage.removeItem("id");
                    this.$router.push("/");

                })
            },

            Accept(id){
                axios.get(`/api/accept/${id}`)
                .then(res => {
                    this.GetAllOrders()
                })
            },

            Cancel(id){
                axios.get(`/api/cancel/${id}`)
                .then(res => {
                    this.GetAllOrders()
                })
            }
        },
    }
</script>

<style lang="scss" scoped>
section {
    div{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        font-size: 24px;

       h1 {
            color: rgba(201, 113, 11, 1);
            font-size: 62px;
            margin-top: 96px;
            margin-bottom: 45px;
        } 

        p{
            cursor: pointer;
        }
    }
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        font-size: 24px;
        margin-bottom: 150px;
    }

    td, th {
        text-align: center;
        padding: 8px;
    }

    .yes{
        cursor: pointer;
        width: 238px;
        height: 50px;
        background: #A6E2B6;
        border: none;
        border-radius: 15px;
        font-size: 30px;
    }
    .no{
        cursor: pointer;
        width: 238px;
        height: 50px;
        background: #E7847D;
        border: none;
        border-radius: 15px;
        font-size: 30px;
    }

}

</style>
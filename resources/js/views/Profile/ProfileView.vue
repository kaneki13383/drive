<template>
    <section>
        <h1>Ваши заказы</h1>
        <div class="all">
            <div class="card" v-for="row in orders" :key="row">
                <p>{{ row.id_car[0].name }}</p>
                <div>
                    <p v-if="row.status == 'Одобрено'" class="green">{{ row.status }}</p>
                    <p v-if="row.status == 'Отказано'" class="red">{{ row.status }}</p>
                    <p v-if="row.status == 'Ожидание'" class="yellow">{{ row.status }}</p>
                    <button @click.prevent="CancelOrder(row.id)">Отменить</button>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            orders: []
        }
    },
    mounted() {
        this.GetMyOrders()
    },
    methods: {
        GetMyOrders() {
            axios.post('/api/get/order', {
                id_user: localStorage.getItem('id')
            })
                .then(res => {
                    this.orders = res.data.data
                    console.log(this.orders);

                })
        },

        CancelOrder(id) {
            axios.post(`/api/delete/order/${id}`)
                .then(res => {
                    console.log(res);
                    this.GetMyOrders()
                })
        }
    },
}
</script>

<style lang="scss" scoped>
.green {
    background-color: rgba(166, 255, 149, 0.42);
}

.red {
    background-color: rgba(255, 152, 149, 0.42);
}

.yellow {
    background-color: rgba(251, 255, 149, 0.42);
}

section {
    h1 {
        color: rgba(201, 113, 11, 1);
        font-size: 62px;
        margin-top: 96px;
        margin-bottom: 34px;
    }

    .all {
        display: flex;
        flex-direction: column;
        margin-bottom: 124px;
        gap: 25px;

        .card {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            border: 3px solid black;
            border-radius: 16px;

            p {
                padding: 25px 0 25px 25px;
                font-size: 24px;
            }

            div {
                display: flex;
                flex-direction: row;
                gap: 20px;

                p {
                    padding: 25px 0px;
                    width: 365px;
                    text-align: center;
                    border-radius: 16px;
                    border: 3px solid black;
                    border-top: 1px solid black;
                    border-bottom: 1px solid black;
                }

                button {
                    cursor: pointer;
                    font-size: 24px;
                    padding: 0 100px;
                    background-color: transparent;
                    border-radius: 16px;
                    border: 3px solid black;
                    border-top: 1px solid black;
                    border-bottom: 1px solid black;
                    border-right: none;
                }
            }
        }
    }
}
</style>
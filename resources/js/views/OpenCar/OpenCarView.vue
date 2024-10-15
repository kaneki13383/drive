<template>
    <section class="sec1">
        <div>
            <img :src="'/' + car.img" alt="">
            <div>
                <p>{{ car.name }}</p>
                <p>Мощность: {{ car.horse_power }}</p>
                <p>Класс автомобиля: {{ car.class_auto }}</p>
                <p>Коробка передач: {{ car.transmission }}</p>
                <p>Кондиционер: {{ car.conditioner }}</p>
                <p>Привод: {{ car.drive }}</p>
                <p>Тип топлива: {{ car.type_fuel }}</p>
                <p>Средний расход: {{ car.consumption }}</p>
                <p>Цвет: {{ car.color }}</p>
                <p>Аудио: {{ car.audio }}</p>
                <p>Год: {{ car.year }}</p>
                <p>Цена: <span>{{ car.price }}/сутки</span></p>
            </div>
        </div>
    </section>
    <FirstOpenCarComponent></FirstOpenCarComponent>
    <section class="sec2">
        <div class="bg">
            <h2>Бронирование автомобиля</h2>
            <form>
                <div>
                    <label for="">Ваше имя</label>
                    <input type="text" v-model="name">
                </div>
                <div class="froms">
                    <div>
                        <label for="">Телефон</label>
                        <input type="text" v-model="number">
                        <label for="">Начало аренды</label>
                        <div>
                            <input type="date" v-model="start_date" :min="now_date" step="1">
                            <input type="time" v-model="start_time" :min="now_time" step="600000">
                        </div>
                    </div>
                    <div>
                        <label for="">E-mail</label>
                        <input type="text" v-model="email">
                        <label for="">Конец аренды</label>
                        <div>
                            <input type="date" v-model="end_date" :min="now_date" step="1">
                            <input type="time" v-model="end_time" :min="now_time" step="600000">
                        </div>
                    </div>
                </div>
                <button @click.prevent="SendOrder()">Забронировать</button>
            </form>
        </div>
    </section>
    <RecommendedComponent></RecommendedComponent>
</template>

<script>
import RecommendedComponent from '../../components/OpenCar/RecommendedComponent.vue';
import FirstOpenCarComponent from '../../components/OpenCar/FirstOpenCarComponent.vue';
export default {
    data() {
        return {
            id_car: null,
            car: [],
            now_date: null,
            now_time: null,
            name: '',
            number: '',
            start_date: null,
            start_time: null,
            email: '',
            end_date: null,
            end_time: null,
            id_user: localStorage.getItem('id')
        }
    },
    components: { FirstOpenCarComponent, RecommendedComponent },
    mounted() {
        this.parseURL()
        this.GetCar()
        this.currentDate()
    },
    methods: {
        parseURL() {
            let url = window.location.pathname;
            this.id_car = url.split("/")[2];
        },

        GetCar() {
            axios.get(`/api/get_car/${this.id_car}`)
                .then(res => {
                    this.car = res.data[0]
                })
        },

        currentDate() {
            const current = new Date();
            const date = `${current.getFullYear()}-${current.getMonth() + 1}-${current.getDate()}`;
            this.now_date = date

            const time = `${current.getHours()}:${current.getMinutes()}`;
            this.now_time = time;
        },

        SendOrder() {
            axios.post('/api/create/order', {
                name: this.name,
                email: this.email,
                number: this.number,
                start_date: this.start_date,
                start_time: this.start_time,
                end_date: this.end_date,
                end_time: this.end_time,
                id_car: this.id_car,
                id_user: this.id_user
            })
                .then(res => {                    
                    this.$router.push("/profile");
                })
        }
    },
}
</script>

<style lang="scss" scoped>
.sec1 {
    margin-top: 122px;

    div {
        display: flex;
        flex-direction: row;
        justify-content: space-between;

        img {
            height: 400px;
        }

        div {
            display: flex;
            flex-direction: column;

            p:nth-child(1) {
                font-size: 62px;
                color: rgba(201, 113, 11, 1);
                margin-bottom: 30px;
            }

            p {
                font-size: 24px;
                color: black;
            }

            p:last-child {
                span {
                    color: rgba(201, 113, 11, 1);
                }
            }
        }
    }
}

.sec2 {
    margin-top: 124px;

    .bg {
        box-shadow: 0px 0px 22.6px -9px rgba(0, 0, 0, 0.25);
        padding: 22px 0 60px 32px;
        border-radius: 40px;

        h2 {
            font-size: 36px;
            color: rgba(201, 113, 11, 1);
        }

        form {
            margin-top: 70px;
            margin-left: 127px;
            display: flex;
            flex-direction: column;
            gap: 30px;

            div {
                display: flex;
                flex-direction: column;
                gap: 10px;

                label {
                    font-size: 24px;
                }

                input {
                    max-width: 880px;
                    height: 50px;
                    border-radius: 15px;
                    border: 1px solid black;
                    padding-left: 10px;
                    font-size: 24px;
                }
            }

            .froms {
                display: flex;
                flex-direction: row;
                gap: 150px;

                div {
                    display: flex;
                    flex-direction: column;

                    input {
                        width: 365px;
                        padding-left: 10px;
                        font-size: 24px;
                    }

                    div {
                        display: flex;
                        flex-direction: row;

                        input {
                            width: 237px;
                            padding-left: 10px;
                            font-size: 24px;
                        }

                        input:nth-child(2) {
                            width: 108px;
                            font-size: 20px;
                        }
                    }
                }
            }

            button {
                cursor: pointer;
                width: 365px;
                background: rgba(201, 113, 11, 1);
                color: white;
                border-radius: 15px;
                border: none;
                padding: 10px 0;
                font-size: 24px;
            }
        }
    }
}
</style>
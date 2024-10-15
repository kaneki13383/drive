<template>
    <section>
        <h2>Смотрите также</h2>
        <div class="all">
            <div class="card" v-for="car in cars" :key="car">
                    <p>{{ car.name }}</p>
                    <div>
                        <p class="tag">{{ car.year }}</p>
                        <p class="tag">{{ car.transmission }}</p>
                    </div>
                    <img :src="'/' + car.img" alt="">
                    <p><span>₽</span>{{ car.price }}/сутки</p>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            cars: []
        }
    },
    mounted() {
        this.GetRandomCars()
    },
    methods: {
        GetRandomCars() {
            axios.get('/api/random_car')
                .then(res => {
                    this.cars = res.data
                })
        },
        ReloadPage() {
            location.reload()
        }
    },
}
</script>

<style lang="scss" scoped>
section {
    margin-top: 200px;
    margin-bottom: 152px;

    h2 {
        font-size: 62px;
        margin-bottom: 84px;
    }

    .all {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        gap: 21px;

        .card {
            padding: 27px 24px 22px 39px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);
            border-radius: 20px;

            img {
                width: 300px;
            }

            p:nth-child(1) {
                font-size: 24px;
                color: rgba(201, 113, 11, 1);
                margin-bottom: 5px;
            }

            div {
                display: flex;
                flex-direction: row;
                gap: 10px;

                .tag {
                    font-size: 16px;
                    color: black;
                    box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.25);
                    border-radius: 11px;
                    padding: 0 9px
                }
            }

            p:nth-child(4) {
                float: right;
                font-size: 20px;

                span {
                    color: rgba(201, 113, 11, 1);
                }
            }
        }
    }
}
</style>
<template>
    <section>
        <div class="all">
            <div class="card" v-for="car in cars" :key="car">
                <router-link :to="'/car/' + car.id">
                    <p>{{ car.name }}</p>
                    <div>
                        <p class="tag">{{ car.year }}</p>
                        <p class="tag">{{ car.transmission }}</p>
                    </div>
                    <img :src="car.img" alt="">
                    <p><span>₽</span>{{ car.price }}/сутки</p>
                </router-link>
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
        axios.get('/api/all_cars')
            .then(res => {
                this.cars = res.data
            })
    },
}
</script>

<style lang="scss" scoped>
section {
    margin-bottom: 211px;

    .all {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 50px;

        .card {
            a {

                padding: 22px 28px 22px 22px;
                box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);
                border-radius: 20px;
                display: flex;
                flex-direction: column;
                width: 421px;

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
                    position: relative;
                    right: 0;
                    font-size: 20px;

                    span {
                        color: rgba(201, 113, 11, 1);
                    }
                }
            }
        }
    }
}
</style>
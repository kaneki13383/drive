<template>
    <section>
        <div class="all">
            <div class="card" v-for="cars in 12" :key="cars">
                <p>Kia Ceed</p>
                <div>
                    <p class="tag">2023</p>
                    <p class="tag">M/T</p>
                </div>
                <img src="../../../../public/img/pngegg 1.png" alt="">
                <p><span>₽</span>10k/сутки</p>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {

        }
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
</style>
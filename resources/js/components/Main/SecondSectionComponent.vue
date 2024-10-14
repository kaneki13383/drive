<template>
    <section>
        <div>
            <p>9+ лет</p>
            <p>на рынке</p>
        </div>
        <div class="line"></div>
        <div>
            <p>72+</p>
            <p>машин в нашем автопарке</p>
        </div>
        <div class="line"></div>
        <div>
            <p>10+ тыс</p>
            <p>людей под нашим крылом</p>
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
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin-top: 150px;

    div {
        height: 250px;
        display: flex;
        flex-direction: column;
        justify-content: center;

        p:nth-child(1) {
            font-size: 64px;
            color: rgba(201, 113, 11, 1);
        }

        p:nth-child(2) {
            font-size: 24px;
            width: 70%;
        }
    }

    .line {
        border: 2px solid rgba(0, 0, 0, 0.17);
        box-shadow: 0px 0px 10.8px 1px rgba(0, 0, 0, 0.25);
    }
}
</style>
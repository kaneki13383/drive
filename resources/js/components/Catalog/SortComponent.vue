<template>
    <section>
        <p>Комфорт</p>
        <p>Спорт</p>
        <p>Эконом</p>
        <p>Кроссовер</p>
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
section{
    margin-top: 133px;
    margin-bottom: 100px;
    display: flex;
    flex-direction: row;
    justify-content: center;
    gap: 90px;

    p{
        font-size: 24px;
        border: 1px solid black;
        padding: 10px 38px;
        border-radius: 25px;
    }
}
</style>
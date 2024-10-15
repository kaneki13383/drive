<template>
    <section>
        <h1>Требования к клиенту:</h1>
        <div>
            <p>Стаж от 3 лет, Возраст от 23 лет;</p>
            <p>Выдаётся/принимается с одинаковым уровнем топлива. Долив топлива оплачивается: 55 руб./л.</p>
            <p>Выдаётся/принимается чистым. При возврате автомобиля в грязном виде клиентом оплачивается мойка 1000 руб.
            </p>
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
    margin-top: 110px;

    h1 {
        font-size: 36px;
        color: rgba(201, 113, 11, 1);
    }

    div{
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-top: 22px;

        p{
            font-size: 24px;
        }
    }
}
</style>
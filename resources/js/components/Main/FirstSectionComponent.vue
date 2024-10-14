<template>
    <section>
        <h1>Машины <br> премиум класса</h1>
        <h2>Астрахань</h2>
        <a href="">В каталог
            <svg width="19" height="34" viewBox="0 0 19 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 32L16 17L2 2" stroke="white" stroke-width="3" />
            </svg>
        </a>
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
img {
    margin-top: 183px;
}

section {
    color: rgba(201, 113, 11, 1);
    background-image: url('../../../../public/img/kisspng-2018-nissan-gt-r-brossard-car-2017-nissan-gt-r-nis-5b37e600288b48.4864107315303900161661 2.png');
    background-repeat: no-repeat;
    background-position-y: 10px;
    height: 73vh;

    h1 {
        margin-top: 177px;
        font-size: 96px;
        font-family: "Unbounded", sans-serif;
        font-weight: 400;
        text-transform: uppercase;
    }

    h2 {
        font-family: "Comforter Brush", cursive;
        font-size: 64px;
        position: absolute;
        top: 217px;
        margin-left: 719px;
        transform: rotate(-10.58deg);
    }

    a {
        float: right;
        margin-top: 61px;
        background-color: rgba(201, 113, 11, 1);
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 32px;
        padding: 20px 90px;
        font-size: 24px;
        border-radius: 15px;
        color: white;
    }
}
</style>
<template>
    <header class="container">
        <ul>
            <li>Эх, прокачу</li>
        </ul>
        <ul>
            <li>Каталог</li>
            <li>О нас</li>
            <li>Сервисы</li>
        </ul>
        <ul>
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M2 25C2 37.7025 12.2975 48 25 48C37.7025 48 48 37.7025 48 25C48 12.2975 37.7025 2 25 2C12.2975 2 2 12.2975 2 25ZM25 0C11.1929 0 0 11.1929 0 25C0 38.8071 11.1929 50 25 50C38.8071 50 50 38.8071 50 25C50 11.1929 38.8071 0 25 0Z"
                    fill="black" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M14.4993 16C14.4993 21.799 19.2003 26.5 24.9993 26.5C30.7983 26.5 35.4993 21.799 35.4993 16C35.4993 10.201 30.7983 5.5 24.9993 5.5C19.2003 5.5 14.4993 10.201 14.4993 16ZM24.9993 3.5C18.0957 3.5 12.4993 9.09644 12.4993 16C12.4993 22.9036 18.0957 28.5 24.9993 28.5C31.9028 28.5 37.4993 22.9036 37.4993 16C37.4993 9.09644 31.9028 3.5 24.9993 3.5Z"
                    fill="black" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M33 29H16.5C14.567 29 13 30.567 13 32.5V42.5C13 44.433 14.567 46 16.5 46H33C34.933 46 36.5 44.433 36.5 42.5V32.5C36.5 30.567 34.933 29 33 29ZM16.5 27C13.4624 27 11 29.4624 11 32.5V42.5C11 45.5376 13.4624 48 16.5 48H33C36.0376 48 38.5 45.5376 38.5 42.5V32.5C38.5 29.4624 36.0376 27 33 27H16.5Z"
                    fill="black" />
            </svg>
        </ul>
    </header>
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
header {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    margin-top: 35px;

    ul li{
        font-size: 24px;
    }

    ul:nth-child(2){
        display: flex;
        flex-direction: row;
        gap: 95px;
    }
}
</style>
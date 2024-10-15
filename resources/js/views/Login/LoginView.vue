<template>
    <section>
        <div class="background">
            <h1>Авторизация</h1>
            <form>
                <div>
                    <label for="">Введите почту</label>
                    <input type="email" placeholder="Почта">
                </div>
                <div>
                    <label for="">Введите пароль</label>
                    <input type="password">
                </div>
                <button>Войти</button>
            </form>
            <p>Нет аккаунта? <router-link to="/register">Зарегистрируйтесь</router-link></p>
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
.background {
    margin: 100px auto;
    margin-bottom: 0;
    box-shadow: 0px 0px 8.5px 0px rgba(0, 0, 0, 0.25);
    width: max-content;
    padding: 0 128px;

    h1 {
        font-size: 64px;
        color: rgba(201, 113, 11, 1);
        text-align: center;
        padding: 30px 0;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
        padding-bottom: 40px;

        div {
            display: flex;
            flex-direction: column;
            gap: 10px;

            label {
                font-size: 24px;
            }

            input {
                width: 500px;
                height: 50px;
                border-radius: 10px;
                padding-left: 10px;
                border: 1px solid black;
                font-size: 24px;
            }
        }

        button {
            cursor: pointer;
            margin-top: 20px;
            font-size: 24px;
            padding: 10px 76px;
            border-radius: 15px;
            border: none;
            color: white;
            background: rgba(201, 113, 11, 1);
        }
    }

    p {
        text-align: center;
        padding-bottom: 30px;

        a {
            color: rgba(201, 113, 11, 1);
        }
    }
}
</style>
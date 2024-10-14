<template>
    <FirstSectionComponent></FirstSectionComponent>
    <SecondSectionComponent></SecondSectionComponent>
    <ThirdSectionComponent></ThirdSectionComponent>
</template>

<script>
import FirstSectionComponent from '../../components/Main/FirstSectionComponent.vue';
import SecondSectionComponent from '../../components/Main/SecondSectionComponent.vue';
import ThirdSectionComponent from '../../components/Main/ThirdSectionComponent.vue';
export default {
    data() {
        return {
            
        }
    },
    components: { FirstSectionComponent, SecondSectionComponent, ThirdSectionComponent },

    mounted() {
        document.title = 'Эх, прокачу'
    },
}
</script>

<style lang="scss" scoped></style>
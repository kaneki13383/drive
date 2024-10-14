<template>
    <FirstSectionComponent></FirstSectionComponent>
    <SecondSectionComponent></SecondSectionComponent>
    <ThirdSectionComponent></ThirdSectionComponent>
    <FourSectionComponent></FourSectionComponent>
</template>

<script>
import FirstSectionComponent from '../../components/Main/FirstSectionComponent.vue';
import SecondSectionComponent from '../../components/Main/SecondSectionComponent.vue';
import ThirdSectionComponent from '../../components/Main/ThirdSectionComponent.vue';
import FourSectionComponent from '../../components/Main/FourSectionComponent.vue';
export default {
    data() {
        return {
            
        }
    },
    components: { FirstSectionComponent, SecondSectionComponent, ThirdSectionComponent, FourSectionComponent },

    mounted() {
        document.title = 'Эх, прокачу'
    },
}
</script>

<style lang="scss" scoped></style>
<template>
  <HeaderComponent></HeaderComponent>
  <router-view></router-view>
</template>

<script>
import HeaderComponent from '../components/HeaderComponent.vue';
export default {
  data() {
    return {};
  },
  components: { HeaderComponent }
};
</script>

<style lang="scss" scoped></style>
<template>
  <HeaderComponent v-if="this.$route.path != '/'"></HeaderComponent>
  <router-view></router-view>
  <FooterComponent></FooterComponent>
</template>

<script>
import FooterComponent from '../components/FooterComponent.vue';
import HeaderComponent from '../components/HeaderComponent.vue';
export default {
  data() {
    return {};
  },
  components: { HeaderComponent, FooterComponent }
};
</script>

<style lang="scss" scoped></style>
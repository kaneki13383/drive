<template>
  <HeaderComponent v-if="this.$route.path == '/'"></HeaderComponent>
  <HeaderOrangeComponent v-else></HeaderOrangeComponent>
  <router-view></router-view>
  <FooterComponent v-if="this.$route.path != '/register' && this.$route.path != '/login'"></FooterComponent>
</template>

<script>
import FooterComponent from '../components/FooterComponent.vue';
import HeaderComponent from '../components/HeaderComponent.vue';
import HeaderOrangeComponent from '../components/HeaderOrangeComponent.vue';
export default {
  data() {
    return {};
  },
  components: { HeaderComponent, FooterComponent, HeaderOrangeComponent }
};
</script>

<style lang="scss" scoped></style>
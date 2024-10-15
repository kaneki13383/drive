<template>
    <SortComponent></SortComponent>
    <CatalogComponent></CatalogComponent>
</template>

<script>
import CatalogComponent from '../../components/Catalog/CatalogComponent.vue';
import SortComponent from '../../components/Catalog/SortComponent.vue';

export default {
    data() {
        return {

        }
    },
    components: { SortComponent, CatalogComponent }
}
</script>

<style lang="scss" scoped></style>
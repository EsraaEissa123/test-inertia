<template>
    <h5>Users</h5>
    <h1>Hello, {{ name }}</h1>
    <h5>Links</h5>
    <Nav />
    <ul>
        <li v-for="framework of frameworks" v-text="framework"></li>
    </ul>
</template>
<script>
import Nav from "../Shared/Nav.vue";
export default {
    components: { Nav },
    props: {
        name: String,
        frameworks: Array,
    },
};
</script>

<template>
    <h5>Welcome</h5>
    <h5>Links</h5>
    <Nav />
    <h1>Hello, {{ name }}</h1>
    <ul>
        <li
            v-for="framework of frameworks"
            v-text="framework"
            :key="framework"
        ></li>
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

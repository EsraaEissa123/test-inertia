<template>
    <nav>
        <li><Link href="/">Home</Link></li>
        <li><Link href="/users">Users</Link></li>
        <li><Link href="/settings">Settings</Link></li>
        <li><Link href="/welcome">Welcome</Link></li>
        <li><Link href="/logout" method = "post" as="button">Logout</Link></li>
    </nav>
</template>
<script>
import { Link } from '@inertiajs/vue3';
export default {
components:{Link}
};
</script>

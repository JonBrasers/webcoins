<template>
    <div>
        <div>
            <router-link to="/">Home</router-link>
        </div>
        <div>
            <router-link to="/about">About</router-link>
        </div>
        <router-view />
    </div>
</template>
<script>export default {
    components: {}
}
</script>

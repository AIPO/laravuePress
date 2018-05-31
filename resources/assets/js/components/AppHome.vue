<template>
    <div>
        <app-toolbar></app-toolbar>
        <router-view/>
        <app-footer></app-footer>
    </div>
</template>
<script>
    import AppFooter from './AppFooter'
    import AppToolbar from './AppToolbar'

    export default {
        components: {AppFooter, AppToolbar}
    }
</script>
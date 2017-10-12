<template>
    <table class="table">
        <tbody>
            <tr v-for="(job, index) in allJobs" :key="index" v-bind:class="{success: job.run, danger: !job.run}">
                <td width="80%">{{ job.description }}</td>
                <td>{{ job.created_at }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    props: ['jobs'],
    data() {
        return {allJobs: this.jobs}
    },
    created() {
        let vm = this

        vm.refreshAllJobs = (e) => axios.get('/jobs').then((e) => (vm.allJobs = e.data))

        Echo.channel('email-queue')
            .listen('.add', (e)  => vm.refreshAllJobs(e))
            .listen('.sent', (e) => vm.refreshAllJobs(e))
    }
}
</script>

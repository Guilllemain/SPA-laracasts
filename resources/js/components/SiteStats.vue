<template>
    <div>
        <h1 class="font-normal text-3xl text-grey-darkest leading-none">Site stats</h1>
        <ul>
            <li><strong>Total Series</strong>{{ series }}</li>
            <li><strong>Total Lessons</strong>{{ lessons }}</li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                series: 0,
                lessons: 0
            }
        },
        created() {
            axios.get('http://spa.test/api/stats').then(response => console.log(response.data))
        }
    }
</script>

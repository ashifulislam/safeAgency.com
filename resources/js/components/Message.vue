<template>
        <div>
            <li class="content msg-reply f-12 bg-primary "><slot></slot></li>
            <small class="badge-success">{{user}}</small>
            <br>
            <small class="badge-success">{{time}}</small>
        </div>




</template>

<script>
export default {
    props:[

        'user',
        'time',
    ],
    mounted() {
        console.log('Component mounted.')
    }
}
</script>

<template>
    <div class="container">
        <ul>
            <li v-for="user in users">
            {{user.nom}}</li>
        </ul>
    </div>
</template>


<script>
    export default{
        data(){
            return {
                users:null
            }
        },
        mounted(){
            Echo.join('users')
            .here((users)=>{
                this.users = users
            })
            .joining((user)=>{
                this.users.push(user)
            })
            .leaving((user)=>{
                this.users.splice(this.users.indexOf(user),1) 
            })
        }
    }
</script>
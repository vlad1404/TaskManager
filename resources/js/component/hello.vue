<template>
    <div v-if="tasks && tasks.length">
        <div v-for="task in tasks" :key="task.id">
            <div class="messages">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-8">
                            <label>Name: </label>
                            <span class="labl label-info">{{task.name}}</span>
                        </div>
                        <div class="col-8">
                            <label>Text: </label>
                            <span class="labl label-info">{{task.text}}</span>
                        </div>
                        <div class="col-8">
                            <label>Date: </label>
                            <span class="labl label-info">{{task.date}}</span>
                        </div>
                        <div class="col-8">
                            <label>Created at: </label>
                            <span class="labl label-info">{{task.created_at}}</span>
                        </div>
                        <div class="col-4">
                            <div class="pull-right">
                                <a class="btn btn-primary" :href="'/tasks/' + task.id + '/show'">
                                    show
                                </a>
                                <a class="btn btn-info" :href="'/tasks/' + task.id + '/edit'">
                                    update
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>
                                <button class="btn btn-danger" @click='deleteTask(task.id)'>
                                    delete
                                    <i class="glyphicon glyphicon-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    data() {
        return {
            tasks: [],
        }
    },
    created() {
      this.getTasks();
    },
    methods: {
        getTasks() {
            axios
                .get('/api/data')
                .then(response => {
                    this.tasks = response.data;
                });
        },
        deleteTask(id) {
            axios.delete(`/api/tasks/${id}`)
            .then(function (response) {
                window.location.reload()
            });
        },
    },
}
</script>

<style scoped>

</style>

<template>
    <div>
        <div class="card" v-for="todo2 in todo2s">
            <div class="card-header">
                <span class="glyphicon glyphicon-user" id="start"></span>
                {{ todo2.todo_date }}
            </div>
            <div class="card-body">
                <span class="glyphicon glyphicon-calendar" id="visit"></span>
                <p>{{ todo2.contents }}</p>
            </div>
            <div class="card-footer">
                <span class="glyphicon glyphicon-calendar" id="visit"></span> {{ todo2.date }} |
                <span class="glyphicon glyphicon-flag" id="comment"></span>
                <a href="#" id="comments" @click="done(todo2.id)">Done</a>
            </div>
        </div>
        <paginate
                :page-count="pageCount"
                :click-handler="fetch"
                :prev-text="'Prev'"
                :next-text="'Next'"
                :container-class="'pagination'">
        </paginate>
    </div>
</template>
            
<script>
    export default {
            data() {
                return {
                    todo2s: [],
                    pageCount : 1,
                    endpoint: 'api/todo2s?page='
                };
            },
            created() {
                this.fetch();
            },
            methods: {
                fetch(page = 1) {
                    axios.get(this.endpoint + page)
                        .then(({data}) => {
                            this.todo2s = data.data;
                            this.pageCount = data.meta.last_page;
                        });
                },
                done(id) {
                    if(confirm('完了にしますか？')) {
                        axios.put('api/todo2s/'+id+'/done')
                            .then(response => this.removeTodo2(id));
                    }
                },
                removeTodo2(id) {
                    this.todo2s = _.remove(this.todo2s,
                        function(todo2) {
                            return todo2.id !== id;
                    });
                }
            }
    }
</script>

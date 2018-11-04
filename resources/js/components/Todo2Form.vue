<template>
    <div>
        <div class="alert alert-success" v-if="saved">ToDo作成が完了しました！</div>
        <div class="well well-sm" id="todo2-form">
            <form class="form-horizontal" method="post" @submit.prevent="onSubmit">
                <fieldset>
                    <legend class="text-center">test</legend>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="todo_date">日付</label>
                        <div class="col-md-9" :class="{'has-error': errors.todo_date}">
                            <input id="todo_date"
                                v-model="todo2.todo_date"
                                type="text"
                                placeholder="ToDoの日付"
                                class="form-control">
                            <span v-if="errors.todo_date"
                                class="help-block text-danger">{{ errors.todo_date[0] }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="contents">ToDo内容</label>
                        <div class="col-md-9" :class="{'has-error': errors.contents}">
                            <textarea 
                                id="contents"
                                v-model="todo2.contents"
                                placeholder="ToDo内容"
                                class="form-control"
                                rows="5"></textarea>
                            <span v-if="errors.contents"
                                class="help-block text-danger">{{ errors.contents[0] }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary btn-lg">登録</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                errors: [],
                saved: false,
                todo2: {
                    todo_date: null,
                    contents: null,
                }
            };
        },
        methods: {
            onSubmit() {
                this.saved = false;
                axios.post('api/todo2s', this.todo2)
                    .then(({data}) => this.setSuccessMessage())
                    .catch(({response}) => this.setErrors(response));
            },
            setErrors(response) {
                this.errors = response.data.errors;
            },
            setSuccessMessage() {
                this.reset();
                this.saved = true;
            },
            reset() {
                this.errors = [];
                this.todos = { todo_date: null, contents: null, done: null };
            },
        }
    }
</script>

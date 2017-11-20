<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Modifying {{ name }}</div>

                    <div class="panel-body">
                        <form action="#" @submit="submit">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input v-model="name" type="text" class="form-control">
                            </div>

                            <div class="panel panel-default" v-for="part, index in parts">
                                <div class="panel-heading">Part {{ index + 1 }} #{{ index }}</div>

                                <div class="panel-body">
                                    <label for="name" class="control-label">Name</label>
                                    <input v-model="part.name" type="text" id="name" class="form-control">
                                </div>
                            </div>

                            <button>Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
       props: [
           'data'
       ],
       data () {
           return {
               name: null,
               parts: []
           }
       },
       methods: {
           submit (e) {
               console.log(this.parts)
           }
       },
        mounted() {
            this.name = this.data.name
            this.parts = this.data.parts
        }
    }
</script>

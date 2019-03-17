<template>
    <div id="search-box">
        <input type="text" placeholder="Код товара" v-model="query" v-on:keyup="autoComplete" class="form-control">
        <div id="result-box" class="panel-footer" v-if="results.length">
            <ul class="list-group">
                <li class="list-group-item" v-for="result in results">
                    <a :href="'/admin/products/'+result.id"> {{ result.code }} – {{result.title}}</a>
                </li>
            </ul>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                query: '',
                results: []
            }
        },
        methods: {
            autoComplete() {
                this.results = [];
                if (this.query.length > 2) {
                    axios.get('/api/search', {params: {query: this.query}}).then(response => {
                        this.results = response.data;
                    });
                }
            }
        }
    }
</script>
<style lang="scss" scoped>

    #search-box{
        position: relative;
        #result-box{
            position: absolute!important;
            top:45px;
            z-index: 100;
            min-width:250px;
            width: 300px;

        }
    }


</style>

@extends('layouts.admin')

@section('content')
    <div class="container mt-5" id="app">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5">
                    <form>
                        <div class="form-group">
                            <label>Titulo</label>
                            <input type="text" class="form-control" v-model="model.title" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea type="description" class="form-control" v-model="model.description" placeholder="Description" rows="10"></textarea>
                        </div>
                        <button type="button" class="pt-2 btn btn-primary" @click="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        new Vue({
            el: '#app',
            data(){
                return {
                    slug: null,
                    model: {
                        title: null,
                        description: null
                    }
                }
            },
            mounted(){
                const pathArray = window.location.pathname.split('/');
                if(pathArray[pathArray.length-1] !== 'sections'){
                    this.slug = pathArray[pathArray.length-1]
                    if(this.slug){
                        setTimeout(() => {
                            this.getSection()
                        }, 1000)
                    }
                }
            },
            methods: {
                async save(){
                    try {
                        console.log(this.getUrl())
                        await axios.post(this.getUrl(),{...this.model, slug: this.slug})
                    } catch (error) {
                        console.log(error)
                    }
                },
                async getSection(){
                    try {
                        const response = await axios.get(this.getUrl(),this.model)
                        this.slug = response.data.slug
                        this.model.id = response.data.id
                        this.model.slug = response.data.slug
                        this.model.title = response.data.title
                        this.model.description = response.data.description
                    } catch (error) {
                        console.log(error)
                    }
                },
                getUrl(){
                    let url = '/api/sections'
                    if(this.slug){
                        url += '/' + this.slug
                    }
                    return url
                }
            }
        })
    </script>
@endsection
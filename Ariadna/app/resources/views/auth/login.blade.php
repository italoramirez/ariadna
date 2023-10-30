@extends('layouts.admin')

@section('content')
    <div class="container mt-5" id="app">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5">
                    <form>
                        <div class="form-group">
                            <label for="login--email">Email</label>
                            <input type="email" class="form-control" v-model="model.email" id="login--email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" v-model="model.password" id="login--pass" placeholder="Password">
                        </div>
                        <button type="button" class="pt-2 btn btn-primary" @click="login">Sig In</button>
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
                    model: {
                        email: null,
                        password: null
                    }
                }
            },
            methods: {
                async login(){
                    try {
                        const response = await axios.post('/api/login',this.model)
                        localStorage.setItem('access_token', response.data.token)
                        console.log(response.data)
                    } catch (error) {
                        console.log(error)
                    }
                }
            }
        })
    </script>
@endsection
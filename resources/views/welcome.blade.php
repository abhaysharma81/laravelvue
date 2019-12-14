<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/app.css">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    </head>
 <body>
    <div id="app" class="container">
        <form action="/storedatas" method="post" v-on:submit.prevent="onSubmit">
         @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" v-model="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                <span style="color:red;" v-text="errors.get('email')"></span>
            </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control" id="password" aria-describedby="emailHelp" v-model="password" name="password">
                <small id="emailHelp" class="form-text text-muted">We secure your password.</small>
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div> 
    <script src="/js/app.js"></script>
 </body>
</html>

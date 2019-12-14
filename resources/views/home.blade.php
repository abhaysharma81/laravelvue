@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-2">
         <div class="card-header">Setting</div>
         <div class="card-body">
            <a href="/category">Create Category</a><br>
            <a href="/categoryshow">My Category</a><br>
            <a href="/message">Message</a>
         </div>
    </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                        <div>
                            @yield('category')
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

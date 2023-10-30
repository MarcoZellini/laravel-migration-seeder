@extends('layouts.app')

@section('page-title', 'Home')

@section('content')
    <section id="app_hero">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 py-5">
                <div class="col">
                    <div class="d-flex flex-column justify-content-center align-items-center h-100">
                        <h1>Welcome to <span class="text-danger">Trenitalia</span></h1>
                        <p>Make sure your train isn't late! 😝</p>
                    </div>
                </div>
                <div class="col">
                    <img src="https://images.unsplash.com/photo-1515165562839-978bbcf18277?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- /#app_hero -->
@endsection

@extends('layouts.app')

@section('subtitle', '| Not Found')

@section('content')
    <!--Cover Image-->
    <section class="page-cover">
        <div class="container">
            <div class="center-title">
                <h1>PAGE NOT FOUND</h1>
            </div>
        </div>
    </section>
    <!-- PAGE CONTENT -->
    <section class="page">
        <div class="container">
            <div class="row">
                <div class="page-content col-md-12">
                    <div class="not_found">
                        <h1>404</h1>
                        <h2>THIS PAGE IS NOT FOUND</h2>
                        <a href="/" class="giggs_button top_30">BACK TO HOME</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
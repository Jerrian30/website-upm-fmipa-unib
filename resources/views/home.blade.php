<!-- resources/views/home.blade.php -->

@extends('layouts.master')

@section('title', 'Home')
@section('js')
<script src="{{ $survei->cdn() }}"></script>

{{ $survei->script() }}
@endsection

@section('content')
    <div class="container">
        <h1>Welcome to Home Page!</h1>

        <div class="row">
            <div class="container px-4 mx-auto">

                <div class="p-6 m-20 bg-white rounded shadow">
                    {!! $survei->container() !!}
                </div>
            
            </div>
            <!-- Tambahkan kolom lain jika diperlukan -->
        </div>
    </div>
@endsection

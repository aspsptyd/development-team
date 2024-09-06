@extends('layouts.app_tabler')

@section('content')

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Hi, you are Administrator!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hi, Selamat datang di sistem development tim, yuk jadikan hari kamu produktif hari ini!
                </div>
            </div>
        </div>
@endsection
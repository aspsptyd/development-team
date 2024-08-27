@extends('layouts.app_tabler')

@section('content')

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Hi, Anda login sebagai Administrator</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4" align="center">
            <div class="card">
                <div class="card-header">{{ __('ログインしました！') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->

                    <a href="/todo" class="btn btn-primary">タスク一覧へ</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

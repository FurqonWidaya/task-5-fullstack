@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Hai') }} <b>{{ Auth::user()->name }}</b>
                </div>
                <div class="card-text ps-3">
                    <p>Anda Dapat menambahkan artikel maupun ketegori pada website ini<br>Ayo terus tambahkan artikel untuk lainnya</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

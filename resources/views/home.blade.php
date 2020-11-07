@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div class="row">
                        {{ __('name: ') }} {{ Auth::user()->name }}
                    </div>
                    
                    <div class="row">
                        {{ __('phone: ') }} {{ Auth::user()->phone }}
                    </div>
                    
                    <div class="row">
                        {{ __('mail: ') }} {{ Auth::user()->email }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

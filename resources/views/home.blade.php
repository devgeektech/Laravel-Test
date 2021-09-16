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
                    hi <strong>{{ Auth::user()->name }}</strong>,<br>
                    {{ __('You are logged in!') }} as a {{Auth::user()->user_role->name ?? ''}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
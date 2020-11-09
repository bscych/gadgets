@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">欢迎回来！ {{auth()->user()->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(session('wechat_user'))
                     <div class="alert alert-success" role="alert">
                            {{session('wechat_user') }}
                        </div>
                    @endif
                    <h1> <x-displayer/></h1>
                    
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

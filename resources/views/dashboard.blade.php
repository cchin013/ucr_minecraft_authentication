{{-- Show the currently registered Email to Minecraft username--}}
{{--Have ability to input minecraft username to tie to the email--}}
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form method="POST" action="{{ route('dashboard') }}">
                @csrf
                <div class="form-group row">
                    <div class="card" style="width:450px;">
                        <div class="card-header">Tie your Minecraft username to your UCR email</div>
                        @if(Auth::user()->minecraft_username)
                            <div class="card-subtitle text-center mx-2 mt-2">Your currently attached username: {{Auth::user()->minecraft_username}}</div>
                        @endif

                        @if(!Auth::user()->minecraft_username)
                            <div class="card-subtitle text-center mx-2 mt-2">You have not attached a username yet.</div>
                        @endif
                        <div class="card-body">
                            <label for="minecraft_username"
                                   class="col-md-12 col-form-label text-md-left">{{ __('Minecraft Username') }}</label>
                            <div class="col-md-12 text-center">
                                <input id="minecraft_username" type="text"
                                       class="form-control @error('minecraft_username') is-invalid @enderror"
                                       name="minecraft_username" value="{{ old('minecraft_username') }}"
                                       autocomplete="minecraft_username">
                                @error('minecraft_username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                @if(session('message'))
                                    <span style="font-size: 80%;" class="animated flash text-success">
                                        <strong> {{ session('message') }}</strong>
                                    </span>
                                @endif
                                <div class="form-group row mb-0 mt-4">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-block btn-primary">
                                            {{ __('Submit') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
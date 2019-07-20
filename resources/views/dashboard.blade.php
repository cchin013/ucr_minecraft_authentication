{{-- Show the currently registered Email to Minecraft username--}}
{{--Have ability to input minecraft username to tie to the email--}}
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        {{-- change minecraft name --}}
        <div class="row justify-content-center">
            <div class="col">
                <form method="POST" action="{{ route('updateMinecraft') }}">
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
                                    @if(session('minecraft_success'))
                                        <span style="font-size: 80%;" class="animated flash text-success">
                                            <strong> {{ session('minecraft_success') }}</strong>
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
            {{-- change discord name --}}
            <div class="col">
                <form method="POST" action="{{ route('updateDiscord') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="card" style="width:450px;">
                            <div class="card-header">Change your Discord ID</div>
                            @if(Auth::user()->discord_id)
                                <div class="card-subtitle text-center mx-2 mt-2">Your currently attached Discord ID: {{Auth::user()->discord_id}}</div>
                            @endif

                            @if(!Auth::user()->discord_id)
                                <div class="card-subtitle text-center mx-2 mt-2">You have no associated Discord ID yet.</div>
                            @endif
                            <div class="card-body">
                                <label for="discord_id"
                                       class="col-md-12 col-form-label text-md-left">{{ __('Discord ID') }}</label>
                                <div class="col-md-12 text-center">
                                    <input id="discord_id" type="text"
                                           class="form-control @error('discord_id') is-invalid @enderror"
                                           name="discord_id" value="{{ old('discord_id') }}"
                                           autocomplete="discord_id">
                                    @error('discord_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    @if(session('discord_id_success'))
                                        <span style="font-size: 80%;" class="animated flash text-success">
                                            <strong> {{ session('discord_id_success') }}</strong>
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
    </div>
@endsection
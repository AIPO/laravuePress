@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <div class="card-header-title is-centered">
                    <h1 class="title"> @lang('cms.login')</h1>
                </div>
                <div class="card-content">
                    <form action="{{route('login')}}" method="post" role="form">
                        {{csrf_field()}}
                        <b-field label="@lang('cms.email')">
                            <b-input type="email"
                                     icon-pack="fa"
                                     icon="envelope"
                                     id="email"
                                     placeholder="@lang('cms.email')"
                                     value="{{old('email')}}"
                                     message="Email is invalid."
                                     required>
                            </b-input>
                        </b-field>
                        <b-field label="@lang('cms.password')">
                            <b-input type="password"
                                     name="password"
                                     icon-pack="fa"
                                     id="password"
                                     icon="lock"
                                     password-reveal>
                            </b-input>
                        </b-field>
                        <b-checkbox name="remember">@lang('cms.remember')</b-checkbox>
                        <button class="button is-primary is-fullwidth m-t-30">
                            @lang('cms.login')
                        </button>
                    </form>
                </div>

            </div>
            <h5 class="has-text-centered m-t-30">
                <a href="{{route('password.request')}}" class="is-muted ">@lang('cms.forgotPassword')</a>
            </h5>
        </div>
    </div>
@endsection

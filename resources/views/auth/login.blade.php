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
                        <div class="field">
                            <div class="field-label">
                                <label for="email" class="label"></label>
                            </div>
                            <div class="control has-icons-left">
                                <b-field label="@lang('cms.email')">
                                <b-input type="email"
                                         icon="email"
                                         name="email"
                                         id="email"
                                         v-model="email"
                                         placeholder="@lang('cms.email')"
                                         v-validate="'required|email'"
                                         value="{{old('email')}}"
                                message="Email is invalid."></b-input>
                                </b-field>
                            </div>

                        </div>
                        <div class="field">
                            <div class="field-label">
                                <label for="password" class="label">@lang('cms.password')</label>
                            </div>
                            <div class="control has-icons-left">
                                <b-input type="password"
                                         name="password"
                                         id="password"
                                         icon="lock"
                                         password-reveal></b-input>
                                <span class="icon is-small is-left"><i class="fa fa-lock"></i></span>
                            </div>
                            <p class="help is-danger">
                                This field is required
                            </p>
                        </div>
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

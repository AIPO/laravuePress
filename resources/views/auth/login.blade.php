@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns">
            <div class="column is-one-third is-offset-one-third">
                <div class="card">
                    <div class="card-header-title">
                        <h1 class="title">@lang('cms.login')</h1>
                    </div>
                    <div class="card-content">
                        <div class="field">
                            <div class="field-label">
                                <label for="email" class="label">@lang('cms.email')</label>
                            </div>
                            <div class="control has-icons-left has-icons-right">
                                <input type="text" class="input is-primary" name="email" id="email"
                                       placeholder="name@pastas.com">
                                <span class="icon is-small is-left"><i class="fa fa-envelope"></i></span>
                            </div>
                            <p class="help is-danger">
                                This field is required
                            </p>
                        </div>
                        <div class="field">
                            <div class="field-label">
                                <label for="password" class="label">@lang('cms.password')</label>
                            </div>
                            <div class="control has-icons-left">
                                <input type="password" class="input is-primary" name="password" id="password">
                                <span class="icon is-small is-left"><i class="fa fa-lock"></i></span>
                            </div>
                            <p class="help is-danger">
                                This field is required
                            </p>
                        </div>
                        <b-checkbox name="remember">@lang('cms.remember')</b-checkbox>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

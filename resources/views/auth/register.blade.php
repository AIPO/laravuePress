@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <div class="card-header-title is-centered">
                    <h1 class="title"> @lang('cms.register')</h1>
                </div>
                <div class="card-content">
                    <form action="{{route('register')}}" method="post" role="form">
                        {{csrf_field()}}
                        <b-field label="@lang('cms.name')">
                            <b-input type="name"
                                     icon-pack="fa"
                                     icon="user"
                                     name="name"
                                     {{--v-model="name"--}}
                                     placeholder="@lang('cms.name')"
                                     value="{{old('name')}}"
                                     message="Name is invalid."
                                     required>
                            </b-input>
                        </b-field>
                        <b-field label="@lang('cms.email')">
                            <b-input type="email"
                                     icon-pack="fa"
                                     icon="envelope"
                                     {{--name="email"--}}
                                     id="email"
                                     {{--v-model="email"--}}
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
                        <b-field label="@lang('cms.password_confirmation')">
                            <b-input type="password_confirmation"
                                     name="password_confirmation"
                                     icon-pack="fa"
                                     id="password_confirmation"
                                     icon="lock"
                                     password-reveal>
                            </b-input>
                        </b-field>
                        <button class="button is-primary is-fullwidth m-t-30">
                            @lang('cms.button.register')
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

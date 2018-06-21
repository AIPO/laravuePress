@extends('layouts.app')

@section('content')
    @if(session('status'))
        <b-message title="Success" type="is-success">
            {{session('status')}}
        </b-message>
    @endif
    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <div class="card-header-title is-centered">
                    <h1 class="title"> @lang('cms.forgotPassword')</h1>
                </div>
                <div class="card-content">
                    <form action="{{route('password.email')}}" method="post" role="form">
                        {{csrf_field()}}
                        <b-field label="@lang('cms.email')">
                            <b-input type="email"
                                     icon-pack="fa"
                                     icon="envelope"
                                     name="email"
                                     id="email"
                                     v-model="email"
                                     placeholder="@lang('cms.email')"
                                     v-validate="'required|email'"
                                     value="{{old('email')}}"
                                     message="Email is invalid.">

                            </b-input>
                        </b-field>
                        <button class="button is-primary is-fullwidth m-t-30">
                            @lang('cms.getPassword')
                        </button>
                    </form>
                </div>
            </div>
            <h5 class="has-text-centered m-t-30">
                <a href="{{route('login')}}" class="is-muted ">@lang('cms.backToLogin')</a>
            </h5>
        </div>
    </div>

@endsection

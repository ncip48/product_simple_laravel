@extends('layouts.app')

@section('title', __('Unauthorized'))
@section('content')
    <div class="error_page_bg">
        <div class="container">
            <div class="error_section">
                <div class="row">
                    <div class="col-12">
                        <div class="error_form">
                            <h1>403</h1>
                            <h2>Opps! Unauthorized</h2>
                            <p>{{ __($exception->getMessage() ?: 'Unauthorized') }}</p>
                            <form action="#">
                                <input placeholder="Search..." type="text">
                                <button type="submit"><i class="ion-ios-search-strong"></i></button>
                            </form>
                            <a href="{{ url('/') }}">Back to home page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

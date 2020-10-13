@extends('layouts.app')

@section('content')
    <div class="lg:flex lg:justify-between">
        <div class="lg:w-1/6">
            @include('_sidebar-links')
        </div>

        <div class="flex-1 lg:mr-10" style="max-width: 700px;">
            @include('_publish-tweet-panel')
            
            <div class="border border-grey-300 rounded-lg mt-6">
                @include('_tweet')
                @include('_tweet')
                @include('_tweet')
                @include('_tweet')
            </div>
        </div>

        <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4 max-h-screen">
            @include('_friends-list')
        </div>
    </div>
@endsection

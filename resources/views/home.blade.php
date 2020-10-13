@extends('layouts.app')

@section('content')
    {{-- home --}}
    <div class="lg:flex lg:justify-between">
        {{-- left section --}}
        <div class="lg:w-1/6">
            @include('_sidebar-links')
        </div>

        {{-- middle section --}}
        <div class="flex-1 lg:mr-10" style="max-width: 700px;">
            {{-- tweet panel --}}
            @include('_publish-tweet-panel')
            {{-- timeline --}}
            <div class="border border-grey-300 rounded-lg mt-6">
                @include('_tweet')
            </div>
        </div>
    
        {{-- right section --}}
        <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4 max-h-screen">
            @include('_friends-list')
        </div>
    </div>
@endsection

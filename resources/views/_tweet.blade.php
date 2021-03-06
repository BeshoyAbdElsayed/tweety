@foreach ($tweets as $tweet)
    <div class="flex p-4 border-b border-b-grey-300">
        <div class="mr-2 flex-shrink-0">
            <img class="rounded-full mr-2" src="{{ $tweet->user->avatar }}" alt="owner">
        </div>

        <div>
            <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
            <p class="text-sm">
                {{ $tweet->body }}
            </p>
        </div>
    </div>
@endforeach
    
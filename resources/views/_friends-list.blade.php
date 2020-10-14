<h3 class="font-bold text-xl mb-4">Following</h3>

<ul>
    @foreach (Auth::user()->follows as $user)
        
        <li class="mb-2">
        <div class="flex items-center text-sm">
            <a href="#">
                <img class="rounded-full mr-2" src="{{ $user->avatar }}" alt="friend">
            </a>
            {{ $user->name }}
        </div>
    </li>
    @endforeach
</ul>
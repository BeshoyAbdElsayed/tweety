<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
    @foreach (range(1, 8) as $index)
        
        <li class="mb-2">
        <div class="flex items-center text-sm">
            <a href="#">
                <img class="rounded-full mr-2" src="https://api.adorable.io/avatars/40/abott@adorable.png" alt="friend">
            </a>
            John Doe
        </div>
    </li>
    @endforeach
</ul>
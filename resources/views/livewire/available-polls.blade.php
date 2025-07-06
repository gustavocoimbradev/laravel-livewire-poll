<div class="flex flex-col gap-4">
    @forelse ($polls as $poll)
        <div class="border p-4 rounded flex flex-col">
            <h3 class="mb-5">#{{ $poll->id+1 }} - {{$poll->title}}</h3>
            @foreach($poll->options as $option)
                <div class="mb-2 flex gap-2">
                    <button wire:click="vote({{ $option->id }})" class="py-2 px-4 border text-gray-500 transition-all ease-in-out duration-300 hover:bg-gray-100/80 rounded-xl max-w-max">Vote</button>
                    <div class="border px-2 rounded text text-nowrap flex-1 flex items-center">
                        {{ $option->name }}
                    </div>
                    <div class="flex items-center border px-2 rounded text text-nowrap w-[100px] text-center justify-center">
                        {{ $option->votes->count() }} {{ Str::plural('vote', $option->votes->count()) }}
                    </div>
                </div>
            @endforeach
            <div class="mt-4 pt-4 border-t flex">
                <button wire:click="delete({{ $poll->id }})" class="py-2 px-4 border border-red-200 text-red-500 transition-all ease-in-out duration-300 hover:bg-red-100/80 rounded-xl max-w-max">Delete</button>
            </div>
        </div>
    @empty
        <div class="text-gray-500">
            No polls available
        </div>
    @endforelse
</div>

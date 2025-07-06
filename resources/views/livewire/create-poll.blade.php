<div>
    <form class="flex flex-col gap-4" wire:submit.prevent="createPoll">

        @if ($success != '')
            <span class="py-2 px-4 border-green-600 bg-green-100 text-green-600 w-full">{{$success}}</span>
        @endif

        @if ($error != '')
            <span class="py-2 px-4 border-red-600 bg-red-100 text-red-600 w-full">{{$error}}</span>
        @endif

        <fieldset class="flex flex-col gap-2">
            <label for="title" class="text-gray-700">Poll title</label>
            <input class="border py-2 px-4 outline-none" type="text" name="title" id="title" wire:model.live="title">
        </fieldset>

        <button wire:click.prevent="addOption"
            class="py-2 px-4 border text-gray-500 transition-all ease-in-out duration-300 hover:bg-gray-100/80 rounded-xl max-w-max mt-5">Add
            option</button>

        <div class="flex flex-col gap-4">
            @foreach ($options as $index => $option)
                <fieldset class="flex flex-col gap-2">
                    <label for="" class="text-gray-700">Option {{ $index + 1 }}</label>
                    <div class="flex gap-2">
                        <input class=" py-2 px-4 border outline-none flex-1" wire:model="options.{{ $index }}" type="text">
                        <button wire:click.prevent="removeOption({{ $index }})"
                            class="py-2 px-4 border text-gray-500 transition-all ease-in-out duration-300 hover:bg-gray-100/80 rounded-xl max-w-max">Remove</button>
                    </div>
                </fieldset>
            @endforeach
        </div>

        <button type="submit"
            class="py-2 px-4 border text-gray-500 transition-all ease-in-out duration-300 hover:bg-gray-100/80 rounded-xl max-w-max">Create
            poll</button>

    </form>

</div>
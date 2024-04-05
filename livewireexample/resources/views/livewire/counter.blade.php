<div>
    {{-- <h1>{{ $count }}</h1>
    <button wire:click="increment">Increment</button>

    {{-- Para que cuando escriba aparezca instantaneamente abajo del input, esto dice que se guarde en
    la variable username del modelo counter de livewire (wire:model.live)--}}
    {{-- <input type="text" wire:model.live="username" /> --}}
    {{-- <h3>{{ $username }}</h3>  --}}

    <input type="text" wire:model.live="note">
    <button wire:click="store"> Save note</button>
    <p style="color: red">{{ $feedback }}</p>
    @foreach ($notes as $note)
        <p>{{ $note->content }}
            <button wire:click="update({{ $note->id }})"> Update</button>
            <button wire:click="destroy({{ $note->id }})"> Delete</button>
        </p>
    @endforeach

</div>

<div>
    <input type="text" wire:model.live="note">
    <button wire:click="store"> Save note</button>
    <p style="color: red">{{ $feedback }}</p>
</div>

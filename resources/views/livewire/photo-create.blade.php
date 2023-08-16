<form wire:submit.prevent="save">
    <input type="text" wire:model="title">
    @error('title') <span class="error">{{ $message }}</span> @enderror
 
    <input type="text" wire:model="description">
    @error('description') <span class="error">{{ $message }}</span> @enderror

    <input type="file" wire:model="src">
    @error('src') <span class="error">{{ $message }}</span> @enderror
 
    <input type="checkbox" wire:model="isPublic">
    @error('isPublic') <span class="error">{{ $message }}</span> @enderror
 
    <input type="text" wire:model="category_id">
    @error('category_id') <span class="error">{{ $message }}</span> @enderror

    <button type="submit">Save Contact</button>
</form>

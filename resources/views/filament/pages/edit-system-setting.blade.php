<x-filament-panels::page>

    <x-filament-panels::form wire:submit="save">

        {{ $this->form}}

        <x-filament-panels::form.Actions
            :actions="$this->getFormActions()"
        />
        
    </x-filament-panels::form>

</x-filament-panels::page>

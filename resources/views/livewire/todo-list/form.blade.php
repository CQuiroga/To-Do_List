<x-jet-form-section submit="createTodoItem">
    <x-slot name="title">
        {{ __('Crear nueva tarea') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Crea una nueva tarea en la lista de tareas') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="todoItem.description" value="{{ __('Descripción de la tarea') }}" />
            <x-jet-input id="todoItem.description" type="text" class="mt-1 block w-full" wire:model.defer="todoItem.description" autocomplete="description" />
            <x-jet-input-error for="todoItem.description" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="todoItemCreated">
            {{ __('Guardado') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Guardar') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>

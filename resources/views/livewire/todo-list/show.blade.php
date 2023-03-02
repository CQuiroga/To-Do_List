<div>
    <table class="table-auto w-full">
        <thead class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-200">
        <tr>
            <th class="px-4 py-2 w-1"></th>
            <th class="px-4 py-2 text-left">{{__('Descripción')}}</th>
            <th class="px-4 py-2 w-1"></th>
        </tr>
        </thead>
        <tbody>
        @forelse ($todoItems as $todoItem)
            <tr @if($loop->even)class="bg-grey-200"@endif>
                <td class="border-dashed border-t border-gray-200  px-4 py-2">
                    <label
                        class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
                        <input type="checkbox" class="form-checkbox rowCheckbox focus:outline-none focus:shadow-outline"
                            wire:click="toggleState({{$todoItem->id}})" {{ $todoItem->done ? 'checked' : '' }}>
                    </label>
                </td>
                <td class="border-dashed border-t border-gray-200  px-4 py-2">
                    <p class="{{ $todoItem->done ? 'line-through' : '' }}">{{ $todoItem->description }}</p>
                </td>
                <td class="border-dashed border-t border-gray-200  px-4 py-2">
                    <div wire:click="deleteTodoItem({{ $todoItem->id }})">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather stroke-current text-red-600 feather-x cursor-pointer hover:text-red-400 rounded-full w-5 h-5 ml-2">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </div>
                </td>
                </td>
            </tr>
        @empty
             <tr>
                 <td colspan="3" class="text-center">
                    {{ __('Aún no has creado tareas') }}
                 </td>
             </tr>
        @endforelse
        </tbody>
    </table>
</div>

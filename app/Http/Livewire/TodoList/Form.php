<?php

namespace App\Http\Livewire\TodoList;

use App\Models\TodoItem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Form extends Component
{
    public TodoItem $todoItem;

    protected array $rules = [
        'todoItem.description' => 'required|min:6',
    ];

    public function mount()
    {
        $this->todoItem = app(TodoItem::class);
    }

    public function render()
    {
        return view('livewire.todo-list.form');
    }

    public function createTodoItem(): void
    {
        $this->validate();
        $this->todoItem->user_id = Auth::user()->id;
        $this->todoItem->save();
        $this->emit('todoItemCreated');
    }
}

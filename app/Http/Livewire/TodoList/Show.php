<?php

namespace App\Http\Livewire\TodoList;

use App\Models\TodoItem;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Show extends Component
{
    public Collection $todoItems;

    protected $listeners = ['todoItemCreated'];

    public function render()
    {
        $this->todoItems = TodoItem::where('user_id', Auth::user()->id)->orderBy('done')->get();
        return view('livewire.todo-list.show');
    }

    public function todoItemCreated(): void
    {
        $this->render();
    }

    public function toggleState(TodoItem $todoItem): void
    {
        $todoItem->done = !$todoItem->done;
        $todoItem->save();
    }

    public function deleteTodoItem(TodoItem $todoItem): void
    {
        $todoItem->delete();
    }
}

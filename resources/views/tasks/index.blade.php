<h1>To-Do List</h1>
<a href="{{ route('tasks.create') }}">Add Task</a>
<ul>
    @foreach ($tasks as $task)
        <li>
            {{ $task->title }}
            <a href="{{ route('tasks.edit', $task) }}">Edit</a>
            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>

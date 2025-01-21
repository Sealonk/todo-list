<h1>Add Task</h1>
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Task Title">
    <button type="submit">Add</button>
</form>

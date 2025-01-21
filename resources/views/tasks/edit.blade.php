<h1>Edit Task</h1>
<form action="{{ route('tasks.update', $task) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $task->title }}">
    <button type="submit">Update</button>
</form>

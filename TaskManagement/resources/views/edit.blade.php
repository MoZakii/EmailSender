<h1>Edit Task</h1>

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('update', $task->id) }}" method="post">
  @csrf
  @method('PUT') <label for="title">Title:</label>
  <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}" required>
  <br>
  <label for="description">Description:</label>
  <textarea name="description" id="description">{{ old('description', $task->description) }}</textarea>
  <br>
  <button type="submit">Update Task</button>
</form>
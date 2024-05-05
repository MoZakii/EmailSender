<h1>Task List</h1>

@if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

@if (count($tasks) > 0)
  <table>
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tasks as $task)
        <tr>
          <td>{{ $task->title }}</td>
          <td>{{ $task->description }}</td>
          <td>
            <a href="{{ route('edit', $task->id) }}">Edit</a>
            <form action="{{ route('destroy', $task->id) }}" method="POST" style="display: inline-block">
              @csrf
              @method('DELETE')
              <button type="submit" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@else
  <p>No tasks found.</p>
@endif

<br>
<a href="{{ route('create') }}">Add New Task</a>
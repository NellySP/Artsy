<p>Hello {{$user->name}}!</p>
<p>Do you want to <a href="/logout">logout?</a></p>

@if ($errors->any())
<p>
    <u>{{ $errors->first() }}</u>
</p>
@endif

<!-- <form action="/tasks" method="POST">
    @csrf
    <label for="description">Task</label>
    <input type="text" name="description" id="description">
    <button type="submit">submit</button>
</form>

<ul>
    @foreach ($user->task as $task)
    <li>
        @if ($task->completed)
        <s>{{ $task->description }}</s>
        @else
        <form action="tasks/{{ $task->id}}/complete" method="post">
            @csrf
            @method('patch')
            {{ $task->description }}
            <button type="submit">Complete</button>
        </form>
        @endif
    </li>
    @endforeach
</ul> -->
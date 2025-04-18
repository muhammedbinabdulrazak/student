<div class="m-4 p-4">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Class</th>
                <th scope="col">Roll No</th>
                <th scope="col">Age</th>
                @if (auth()->user() && auth()->user()->is_admin && str_starts_with(request()->path(), 'admin/'))
                    <th scope="col">Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td scope="col">{{ $loop->iteration }}</td>
                    <td scope="col">{{ $student->first_name }}</td>
                    <td scope="col">{{ $student->last_name }}</td>
                    <td scope="col">{{ $student->class }}</td>
                    <td scope="col">{{ $student->roll_no }}</td>
                    <td scope="col">{{ $student->age }}</td>
                    @if (auth()->user() && auth()->user()->is_admin && str_starts_with(request()->path(), 'admin/'))
                        <td scope="col">
                            <div class="d-flex">
                                <button class="btn btn-sm btn-warning edit-btn mx-2">
                                    <a href="{{route('admin.students.edit', $student->id)}}" style="all:unset;">Edit</a>
                                </button>
                                <form action="{{ route('admin.students.destroy', $student->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>

    </table>
</div>
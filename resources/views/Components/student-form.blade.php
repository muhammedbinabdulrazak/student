@props([
    'action','method','student'
])
<div class="d-flex w-100 justify-content-ceter align-items-center flex-column">
    <div class="col-md-6 mt-3 py-3">
        <div class="card">
            <div class="card-body">

                <form action={{ route($action,$student->id ?? null)}} method="POST">
                    @csrf
                    @method($method)
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="first-name" class="form-label">First Name:</label>
                            <input type="text" class="form-control" id="first-name" placeholder="John" name="first_name"
                                value="{{ old('first_name') ?? $student->first_name ?? null }}">
                            @error('first_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="last-name" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" id="last-name" placeholder="Doe" name="last_name"
                                value="{{ old('last_name') ?? $student->last_name ?? null }}">
                            @error('last_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="class" class="form-label">Class:</label>
                            <select class="form-select" name="class" aria-label="Default select example">
    <option value="1" {{ (old('class') ?? $student->class ?? '') == '1' ? 'selected' : '' }}>First</option>
    <option value="2" {{ (old('class') ?? $student->class ?? '') == '2' ? 'selected' : '' }}>Second</option>
    <option value="3" {{ (old('class') ?? $student->class ?? '') == '3' ? 'selected' : '' }}>Third</option>
    <option value="4" {{ (old('class') ?? $student->class ?? '') == '4' ? 'selected' : '' }}>Fourth</option>
    <option value="5" {{ (old('class') ?? $student->class ?? '') == '5' ? 'selected' : '' }}>Fifth</option>
    <option value="6" {{ (old('class') ?? $student->class ?? '') == '6' ? 'selected' : '' }}>Sixth</option>
    <option value="7" {{ (old('class') ?? $student->class ?? '') == '7' ? 'selected' : '' }}>Seventh</option>
    <option value="8" {{ (old('class') ?? $student->class ?? '') == '8' ? 'selected' : '' }}>Eighth</option>
    <option value="9" {{ (old('class') ?? $student->class ?? '') == '9' ? 'selected' : '' }}>Ninth</option>
    <option value="10" {{ (old('class') ?? $student->class ?? '') == '10' ? 'selected' : '' }}>Tenth</option>
</select>
                            @error('class')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="roll-no" class="form-label">Roll No:</label>
                            <input type="number" class="form-control" id="roll-no" name="roll_no" placeholder="Roll No" 
                                value="{{ old('roll_no') ?? $student->roll_no ?? null }}">
                            @error('roll_no')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="age" class="form-label">Age:</label>
                            <input type="number" class="form-control" id="age" name="age" placeholder="Age"
                                value="{{ old('age') ?? $student->age ?? null }}">
                            @error('age')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class='mt-2 d-flex justify-content-end'>
                        <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal"><a
                                href="{{route('admin.students.index')}}" style="all: unset;"><span
                                    class="text-white">cancel</a></span></button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>
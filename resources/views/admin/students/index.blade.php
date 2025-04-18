<x-layout>
    <x-slot:heading>Students Details</x-slot:heading>
    <x-slot:addStudentRecord>
        <button class="btn btn-primary rounded-2">
            <a href="{{route('admin.students.create')}}"><span class="text-white">Add New Student</span></a>
        </button>
    </x-slot:addStudentRecord>
    <div class="p-5">
       <x-students-list :students="$students">
       </x-students-list>

    </div>
</x-layout>
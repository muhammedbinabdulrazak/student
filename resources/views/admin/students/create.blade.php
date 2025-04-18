
<x-layout>
    <x-slot:heading>Add Student</x-slot:heading>
    <x-student-form :action="'admin.students.store'" :method="'POST'">
    </x-student-form>
</x-layout>
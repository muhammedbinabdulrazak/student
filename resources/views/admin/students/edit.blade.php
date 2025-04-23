<x-layout>
    <x-slot:heading>Edit Student</x-slot:heading>
    <x-student-form :action="'admin.students.update'" :method="'PATCH'" :student="$student" >
    </x-student-form>
</x-layout>
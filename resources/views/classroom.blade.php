<x-layout>
    <x-slot name="judul">Classroom</x-slot>

    <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">List Classroom</h2>

    <div class="flex justify-center">
        <table class="min-w-[700px] border-collapse text-left">
            <thead class="bg-black text-white">
                <tr>
                    <th class="px-6 py-3 w-20 text-center">ID</th>
                    <th class="px-6 py-3 w-52 text-center">Name</th>
                    <th class="px-6 py-3 w-96 text-center">Student List</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-300">
                @foreach ($classrooms as $classroom)
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-3 text-center">{{ $classroom->id }}</td>
                        <td class="px-6 py-3 text-center">{{ $classroom->name }}</td>
                        <td class="px-6 py-3">
                            <ul class="list-disc list-inside">
                            @foreach ($classroom->students as $student)
                                <li>{{ $student->name }} </li>
                            @endforeach
                            </ul>     
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>

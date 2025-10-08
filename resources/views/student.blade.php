<x-layout>
    <x-slot name="judul">{{ $title }}</x-slot>

    <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">List Student</h2>
    <div class="flex justify-center">
        <table class="w-full max-w-[1100px] border border-gray-300 divide-y divide-gray-200 text-left rounded-lg shadow">
            <thead class="bg-black text-white">
                <tr>
                    <th class="px-6 py-3 text-sm font-semibold text-white text-center">NO</th>
                    <th class="px-6 py-3 text-sm font-semibold text-white text-center">Name</th>
                    <th class="px-6 py-3 text-sm font-semibold text-white text-center">Email</th>
                    <th class="px-6 py-3 text-sm font-semibold text-white text-center w-[150px]">Classroom</th>
                    <th class="px-6 py-3 text-sm font-semibold text-white text-center w-[150px]">Birthday</th>
                    <th class="px-6 py-3 text-sm font-semibold text-white text-center">Addres</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($students as $student)
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ $student['name'] }}</td>
                        <td class="px-6 py-4">{{ $student['email'] }}</td>
                        <td class="px-6 py-4">{{ $student->classroom->name }}</td>
                        <td class="px-6 py-4">{{ $student->birthday }}</td>
                        <td class="px-6 py-4">{{ $student['addres'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>

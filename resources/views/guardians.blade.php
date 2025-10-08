<x-layout>
    <x-slot name="judul">{{ $title }}</x-slot>

    <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">List Guardians</h2>
    <div class="flex justify-center">
        <table class="w-full max-w-[1100px] border border-gray-300 divide-y divide-gray-200 text-left rounded-lg shadow">
            <thead class="bg-black text-white">
                <tr>
                    <th class="px-6 py-3 text-sm font-semibold text-white text-center">NO</th>
                    <th class="px-6 py-3 text-sm font-semibold text-white text-center">Name</th>
                    <th class="px-6 py-3 text-sm font-semibold text-white text-center">Job</th>
                    <th class="px-6 py-3 text-sm font-semibold text-white text-center w-[220px]">Phone</th>
                    <th class="px-6 py-3 text-sm font-semibold text-white text-center">Email</th>
                    <th class="px-6 py-3 text-sm font-semibold text-white text-center w-[90px]">City</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($guardians as $guardian)
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4 text-center">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ $guardian->name }}</td>
                        <td class="px-6 py-4">{{ $guardian->job }}</td>
                        <td class="px-6 py-4 w-[200px]">{{ $guardian->phone }}</td>
                        <td class="px-6 py-4">{{ $guardian->email }}</td>
                        <td class="px-6 py-4">{{ $guardian->city }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>

<x-layout>
    <x-slot:judul>Kontak</x-slot:judul>

    <div class="max-w-lg mx-auto bg-white rounded-xl shadow-md p-6 space-y-6">

    <div class="flex items-center space-x-3">
            <div>
                <p class="text-sm text-gray-500">Email</p>
                <p class="text-lg font-semibold text-gray-800">{{ $data['email'] }}</p>
            </div>
        </div>

        <div class="flex items-center space-x-3">
            <div>
                <p class="text-sm text-gray-500">Instagram</p>
                <p class="text-lg font-semibold text-gray-800">{{ $data['instagram'] }}</p>
            </div>
        </div>
    </div>
</x-layout>

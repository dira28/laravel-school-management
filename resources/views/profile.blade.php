<x-layout>
    <x-slot:judul>Profile</x-slot:judul>

    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
        <div class="flex flex-col items-center p-6">
            
            <img class="w-32 h-32 rounded-full object-cover border-4 border-indigo-500 shadow-md"
                 src="https://avatars.githubusercontent.com/u/9919?s=280&v=4"
                 alt="Foto Profil">

            <div class="mt-4 text-center">
                <h2 class="text-2xl font-bold text-gray-800">{{ $data['nama'] }}</h2>
                <p class="text-gray-600 mt-2">Kelas: {{ $data['kelas'] }}</p>
                <p class="text-gray-600">Sekolah: {{ $data['sekolah'] }}</p>
            </div>
        </div>
    </div>
</x-layout>

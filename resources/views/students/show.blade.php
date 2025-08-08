@extends('layouts.app')

@section('title', 'Detail Siswa')

@section('content')

    
<div class="max-w-2xl mx-auto p-6">
    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <img src="{{ asset($student['foto']) }}" alt="{{ $student['nama'] }}" class="h-52 w-60 mx-auto mt-4 px-4">
        <div class="p-6 text-center">
            <p class="text-gray-500">Username : {{ $student['username'] }}</p>
            <h3 class="text-xl font-bold mb-1.5">{{ $student['nama'] }}</h3>
            <p class="mb-1.5">{{ $student['kelas'] }} | {{ $student['hobi'] }}</p>
            <p class="">{{ $student['deskripsi'] }}</p>
            <div class="mt-8 space-x-2">
            <x-button desc="edit">Edit</x-button>
            <x-button desc="delete">Delete</x-button>
            </div>
            <a href="{{ route('students.index') }}" class="inline-block mt-6 text-cyan-600 hover:underline">&larr; Kembali ke daftar siswa</a>
        </div>
    </div>
</div>

@endsection

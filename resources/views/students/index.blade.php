@extends('layouts.app')

@section(section:'title', content:'Daftar Siswa')
@section(section:'content')


<h1 class="text-3xl font-bold text-center text-pink-500 my-8">Daftar Siswa</h1>

@foreach ($students as $student)
    
        <div class="flex flex-wrap px-4 justify-center">
                <div class="rounded-xl shadow-xl mb-10 p-4 lg:w-1/2 text-center hover:scale-105 transition-all duration-300 bg-white"><a href="{{ route('students.students.show', ['studentsId' => $student['id']]) }}">
                    <img src=" {{ $student['foto'] }}" alt="{{ $student['nama'] }}" class="w-56 h-56 object-cover my-4 mx-auto">
                    <h2 class="text-lg font-bold text-slate">{{ $student['nama'] }}</h2>
                    <p>Kelas: {{ $student['kelas'] }}</p>
                    <p>Hobi: {{ $student['hobi'] }}</p>
                    <p class="truncate">{{ $student['deskripsi'] }}</p>
             </a></div>
        </div>
   
     @endforeach



@endsection
<!-- filepath: resources/views/users/send.blade.php -->
@extends('app')
@section('title', 'Send Email')
@section('content')
<div class="container mx-auto px-4 flex justify-center items-center min-h-[60vh]">
    <form action="{{ route('users.sendEmail') }}" method="POST" class="bg-white p-8 rounded shadow flex flex-col gap-6 w-full max-w-md">
        @csrf
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Gửi email</h2>
        @if(session('success'))
            <div class="mb-4 px-4 py-3 rounded bg-green-100 text-green-800 border border-green-300 text-center font-semibold">
                {{ session('success') }}
            </div>
        @endif
        <button type="submit"
            class="flex items-center justify-center gap-2 bg-gradient-to-r from-green-500 to-green-700 hover:from-green-600 hover:to-green-800 text-white font-bold py-3 px-8 rounded-lg shadow-md hover:shadow-lg transition-all duration-200 text-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m8 0l-4-4m4 4l-4 4" />
            </svg>
            Gửi đi
        </button>
    </form>
</div>
@endsection

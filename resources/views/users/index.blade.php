@extends('app')
@section('title', 'Users')
@section('content')
<div class="container mx-auto px-4">
    <form action="{{ route('users.import') }}" method="POST" enctype="multipart/form-data" class="mb-4 w-full max-w-md mx-auto bg-white p-6 rounded shadow flex flex-col gap-4">
    @csrf
    <label class="block text-gray-700 font-bold mb-2" for="excel_file">
        Import dữ liệu:
    </label>
    <input type="file" name="excel_file" id="excel_file" accept=".xlsx,.xls" required
        class="block w-full text-sm text-gray-700 border border-gray-300 rounded py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" />
    <button type="submit"
        class="flex items-center justify-center gap-2 bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white font-bold py-2 px-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-200">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4" />
        </svg>
        Import
    </button>
</form>
</div>
@endsection


@extends('Layouts.dashboard')

@php
 $mainClass = 'w-3/4 flex flex-col'
@endphp

@section('content')
  <div class="py-4 px-8 flex-grow">
    <h1 class="text-2xl font-bold mb-6">Create New Post</h1>
    <form action="{{ route('posts.store') }}" method="POST" class="space-y-4">
      @csrf

      <div>
        <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
        <input
          type="text"
          name="title"
          id="title"
          required
          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 sm:text-sm"
        />
      </div>

      <div>
        <label for="description" class="block text-sm font-medium text-gray-700">Content:</label>
        <textarea
          name="description"
          id="description"
          required
          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 sm:text-sm"
          rows="4"
        ></textarea>
      </div>

      <div>
        <button
          type="submit"
          class="w-full bg-red-500 text-white font-semibold py-2 px-4 rounded-md shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
        >
          Create
        </button>
      </div>
    </form>
  </div>
@endsection

@extends('layout')
@section('content')
    <h1 class="text-2xl font-bold mb-4">Dashboard</h1>

    <!-- Wrapper -->
    <div class="w-[700px] border-2 border-blue-500 rounded-lg bg-white shadow-md">
        <!-- Header -->
        <div class="flex justify-between items-center bg-gray-100 px-4 py-3 border-b">
            <div class="flex items-center gap-2">
                <img src="https://img.icons8.com/ios-filled/50/000000/task.png" class="w-6 h-6" />
                <span class="font-semibold">Dashboard</span>
            </div>
            <div class="flex items-center gap-2">
                <span>Hello! {{ session('data.username') }}</span>
                <img src="https://img.icons8.com/ios-filled/50/000000/user.png" class="w-5 h-5" />
            </div>
        </div>

        <!-- Task Table -->
        <div class="p-4 bg-gray-200">
            <h2 class="text-xl font-bold text-center mb-4">Task List</h2>
            <table class="w-full text-sm border border-collapse">
                <thead>
                    <tr class="bg-white text-black">
                        <th class="border px-4 py-2">Task Name</th>
                        <th class="border px-4 py-2">Task Link</th>
                        <th class="border px-4 py-2">Deadline</th>
                        <th class="border px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr class="bg-white">
                            <td class="border px-4 py-2">{{ $task['name'] }}</td>
                            <td class="border px-4 py-2"><a href="{{ $task['link'] }}" class="text-blue-500 underline" target="_blank">Link</a></td>
                            <td class="border px-4 py-2">{{ $task['deadline'] }}</td>
                            <td class="border px-4 py-2 flex gap-2 justify-center">
                                <button title="Edit" class="text-blue-500 hover:text-blue-700">
                                    ✏️
                                </button>
                                <button title="Delete" class="text-red-500 hover:text-red-700">
                                    🗑️
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Add Task Button -->
            <div class="mt-4">
                <button class="flex items-center gap-2 bg-cyan-600 hover:bg-cyan-700 text-white px-4 py-2 rounded">
                    ➕ Add Task
                </button>
            </div>
        </div>
    </div>
@endsection
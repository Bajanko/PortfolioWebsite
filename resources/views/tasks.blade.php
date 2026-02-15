{{-- @extends('main')

@section('content')
<div class="min-h-screen bg-gray-50 dark:bg-gray-900 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-8">My Tasks</h1>
        </div>

        <!-- Task List -->
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
            <div class="space-y-4">
                <!-- Task items will be dynamically added here -->
                <div id="task-list" class="space-y-4">
                    <!-- Example task item -->
                    <div class="task-item flex items-center justify-between p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <div class="flex items-center space-x-4">
                            <input type="checkbox" class="h-5 w-5 text-blue-600 rounded border-gray-300 dark:border-gray-600">
                            <span class="text-gray-900 dark:text-white">Example task</span>
                        </div>
                        <button class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Add Task Form -->
            <div class="mt-6">
                <form id="add-task-form" class="flex space-x-4">
                    <input type="text" 
                           id="new-task" 
                           class="flex-1 rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-blue-500 focus:border-blue-500" 
                           placeholder="Add a new task...">
                    <button type="submit" 
                            class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Add Task
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const taskList = document.getElementById('task-list');
    const addTaskForm = document.getElementById('add-task-form');
    const newTaskInput = document.getElementById('new-task');

    // Load tasks from localStorage
    function loadTasks() {
        const tasks = JSON.parse(localStorage.getItem('tasks') || '[]');
        taskList.innerHTML = '';
        tasks.forEach((task, index) => {
            addTaskToDOM(task, index);
        });
    }

    // Add task to DOM
    function addTaskToDOM(task, index) {
        const taskElement = document.createElement('div');
        taskElement.className = 'task-item flex items-center justify-between p-4 bg-gray-50 dark:bg-gray-700 rounded-lg';
        taskElement.innerHTML = `
            <div class="flex items-center space-x-4">
                <input type="checkbox" class="h-5 w-5 text-blue-600 rounded border-gray-300 dark:border-gray-600" ${task.completed ? 'checked' : ''}>
                <span class="text-gray-900 dark:text-white ${task.completed ? 'line-through' : ''}">${task.text}</span>
            </div>
            <button class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300 delete-task">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
            </button>
        `;

        // Add event listeners
        const checkbox = taskElement.querySelector('input[type="checkbox"]');
        checkbox.addEventListener('change', () => toggleTask(index));

        const deleteButton = taskElement.querySelector('.delete-task');
        deleteButton.addEventListener('click', () => deleteTask(index));

        taskList.appendChild(taskElement);
    }

    // Add new task
    function addTask(text) {
        const tasks = JSON.parse(localStorage.getItem('tasks') || '[]');
        tasks.push({ text, completed: false });
        localStorage.setItem('tasks', JSON.stringify(tasks));
        addTaskToDOM({ text, completed: false }, tasks.length - 1);
    }

    // Toggle task completion
    function toggleTask(index) {
        const tasks = JSON.parse(localStorage.getItem('tasks') || '[]');
        tasks[index].completed = !tasks[index].completed;
        localStorage.setItem('tasks', JSON.stringify(tasks));
        loadTasks();
    }

    // Delete task
    function deleteTask(index) {
        const tasks = JSON.parse(localStorage.getItem('tasks') || '[]');
        tasks.splice(index, 1);
        localStorage.setItem('tasks', JSON.stringify(tasks));
        loadTasks();
    }

    // Form submission
    addTaskForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const text = newTaskInput.value.trim();
        if (text) {
            addTask(text);
            newTaskInput.value = '';
        }
    });

    // Initial load
    loadTasks();
});
</script>
@endsection  --}}
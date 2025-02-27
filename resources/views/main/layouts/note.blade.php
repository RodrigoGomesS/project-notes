<div class="grid grid-cols-1">
    <div class="p-4 bg-white shadow rounded-lg dark:bg-gray-800 dark:text-gray-200">
        <div class="flex justify-between items-center">
            <div>
                <h4 class="text-xl font-semibold text-blue-500 dark:text-blue-400">{{ $note['title'] }}</h4>
                <small class="text-gray-500 dark:text-gray-400">
                    <span class="opacity-75 mr-2">
                        Created at:
                    </span>
                    <strong>{{ date('Y-m-d H:i:s', strtotime($note['created_at'])) }}</strong>
                </small>
            </div>
            <div class="flex space-x-2">
                <a href="/edit/{{ Crypt::encrypt($note['id']) }}"
                    class="border border-gray-500 text-gray-500 px-2 py-1 rounded dark:border-gray-400 dark:text-gray-300">
                    <i class="fa-regular fa-pen-to-square"></i>
                </a>
                <a href="/delete/{{ Crypt::encrypt($note['id']) }}"
                    class="border border-red-500 text-red-500 px-2 py-1 rounded dark:border-red-400 dark:text-red-300">
                    <i class="fa-regular fa-trash-can"></i>
                </a>
            </div>
        </div>
        <hr class="my-2 border-gray-300 dark:border-gray-600">
        <p class="text-gray-500 dark:text-gray-300">{{ $note['text'] }}</p>
    </div>
</div>

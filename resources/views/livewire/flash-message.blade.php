<div>
    @if ($message)
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 10000)" x-show="show"
            class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800 fixed bottom-4 right-4 w-full max-w-xs"
            role="alert">
            {{ $type === 'success' ? '✅' : '❌' }} {{ $message }}
        </div>
    @endif
</div>

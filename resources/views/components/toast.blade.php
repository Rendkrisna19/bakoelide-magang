<div id="toast-container" class="fixed top-5 right-5 z-50">
    @foreach ($toasts as $toast)
        <div class="toast {{ $toast['status'] }} p-4 mb-3 rounded-lg shadow-lg text-white flex items-center gap-3">
            <div>
                @if ($toast['status'] === 'success')
                    <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                @elseif ($toast['status'] === 'error')
                    <svg class="w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                @elseif ($toast['status'] === 'warning')
                    <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M12 4.5A7.5 7.5 0 1019.5 12 7.5 7.5 0 0012 4.5z" />
                    </svg>
                @endif
            </div>
            <div>
                <strong>{{ ucfirst($toast['status']) }}:</strong> {{ $toast['message'] }}
            </div>
        </div>
    @endforeach
</div>

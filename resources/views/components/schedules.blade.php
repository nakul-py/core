<div class="overflow-hidden rounded-lg border shadow dark:border-zinc-700">
    <div class="flex items-center justify-between border-b bg-zinc-50 p-4 dark:border-zinc-700 dark:bg-zinc-900">
        <h3 class="font-semibold">{{ __('Planned Maintenance') }}</h3>
    </div>

    <div class="flex flex-col divide-y bg-white dark:bg-zinc-800">
        <ul class="divide-y">
            @foreach($schedules as $schedule)
            <x-cachet::schedule :schedule="$schedule" />
            @endforeach
        </ul>
    </div>
</div>

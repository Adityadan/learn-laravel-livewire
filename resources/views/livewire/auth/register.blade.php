<div>
    <form wire:submit="save" class="max-w-sm mx-auto min-h-screen flex justify-center items-center">
        <div class="w-full">
            @if (session('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">{{ session('success') }}
                </div>
            @endif
            <div class="mb-5">
                <x-label for="name"> name </x-label>
                <x-input type="name" name="form.name" id="name" placeholder="enter name " wire:model="form.name" />
            </div>
            <div class="mb-5">
                <x-label for="email"> email </x-label>
                <x-input type="email" name="form.email" id="email" placeholder="enter valid email address"
                    wire:model="form.email" />
            </div>
            <div class="mb-5">
                <x-label for="password"> password </x-label>
                <x-input type="password" name="form.password" id="password" placeholder="enter password"
                    wire:model="form.password" />
            </div>
            <x-button>register</x-button>
        </div>
    </form>
</div>

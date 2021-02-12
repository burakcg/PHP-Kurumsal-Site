<x-app-layout>

    <div>

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
    </div>
</x-app-layout>

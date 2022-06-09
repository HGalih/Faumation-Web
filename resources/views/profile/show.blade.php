<x-sidebar>
    <x-slot:heading>Profil</x-slot>
    <x-slot:subheading>Personalisasikan identitasmu.</x-slot>
    <x-slot:content>

    <div>
        <div class="max-w-7xl mx-auto py-10 ">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

     
        </div>
    </div>
</x-slot>
</x-sidebar>

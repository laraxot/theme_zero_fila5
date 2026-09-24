{{-- Vista per il LoginWidget nel tema Zero --}}
{{-- Questa vista è minimalista e focalizzata solo sul layout/styling --}}

<x-filament-widgets::widget>
    <div class="space-y-7">
        {{-- Header del form --}}
        <div class="text-center">
            <h2 id="login-widget-title" class="font-serif text-3xl font-semibold tracking-tight text-primary-950">
                {{ __('Accedi al tuo account') }}
            </h2>
            <p class="mt-3 text-sm leading-6 text-gray-600">
                {{ __('Inserisci le tue credenziali per accedere.') }}
            </p>
        </div>

        {{-- Form renderizzato dal widget --}}
        <form wire:submit="login" class="space-y-5" aria-labelledby="login-widget-title">
            {{ $this->form }}

            {{-- Remember Me & Forgot Password --}}
            <div class="flex items-center justify-between gap-4">
                <div class="text-sm">
                    <a
                        href="{{ route('password.request') }}"
                    class="inline-flex rounded font-medium text-primary-700 underline decoration-primary-200 underline-offset-4 transition-colors hover:text-primary-900 hover:decoration-primary-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500 focus-visible:ring-offset-2"
                    >
                        {{ __('Password dimenticata?') }}
                    </a>
                </div>
            </div>

            {{-- Submit Button --}}
            <div>
                <button
                    type="submit"
                    wire:loading.attr="disabled"
                    data-auth-submit
                    class="group relative min-h-12 w-full flex justify-center items-center rounded-xl border border-transparent bg-primary-600 px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-primary-900/15 transition-[transform,background-color,box-shadow] duration-200 hover:-translate-y-0.5 hover:bg-primary-700 hover:shadow-xl focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                >
                    {{-- Loading Spinner --}}
                    <svg wire:loading aria-hidden="true" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>

                    {{-- Login Icon --}}
                    <svg wire:loading.remove aria-hidden="true" class="absolute left-0 inset-y-0 flex items-center pl-3 h-5 w-5 text-primary-400 group-hover:text-primary-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>

                    <span wire:loading.remove>{{ __('Accedi') }}</span>
                    <span wire:loading>{{ __('Accesso in corso...') }}</span>
                </button>
            </div>
        </form>
    </div>
</x-filament-widgets::widget>

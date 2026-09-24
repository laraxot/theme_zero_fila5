<x-layouts.auth>
    <x-slot name="title">
        {{ __('Accedi') }} - {{ config('app.name', 'Laravel') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Accedi al tuo account per accedere alle funzionalità riservate.') }}
    </x-slot>

    <div class="w-full max-w-5xl" data-auth-card>
        <div class="grid overflow-hidden rounded-[2rem] border border-primary-100/80 bg-white/80 shadow-2xl shadow-primary-950/10 backdrop-blur-xl lg:grid-cols-[1.05fr_0.95fr]">
            <section class="auth-hero relative hidden min-h-[38rem] flex-col justify-between overflow-hidden bg-primary-950 p-10 text-white lg:flex xl:p-14" aria-labelledby="auth-hero-title">
                <div class="auth-hero__glow auth-hero__glow--one" aria-hidden="true"></div>
                <div class="auth-hero__glow auth-hero__glow--two" aria-hidden="true"></div>
                <div class="relative z-10" data-auth-hero-item>
                    <span class="mb-8 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-primary-500 text-white shadow-lg shadow-black/20">
                        <x-heroicon-o-building-storefront class="h-6 w-6" aria-hidden="true" />
                    </span>
                    <p class="mb-4 text-xs font-semibold uppercase tracking-[0.24em] text-primary-300">{{ __('La tua sala, sempre con te') }}</p>
                    <h1 id="auth-hero-title" class="max-w-md font-serif text-4xl font-semibold leading-tight tracking-tight xl:text-5xl">
                        {{ __('Accedi e porta avanti il servizio con serenità.') }}
                    </h1>
                    <p class="mt-6 max-w-md text-base leading-7 text-primary-100/80">
                        {{ __('Ordini, prenotazioni e operazioni quotidiane in un unico spazio pensato per il tuo ristorante.') }}
                    </p>
                </div>
                <ul class="relative z-10 mt-12 space-y-4 text-sm text-primary-100/90" data-auth-hero-item>
                    <li class="flex items-center gap-3"><x-heroicon-o-check-circle class="h-5 w-5 text-primary-300" aria-hidden="true" />{{ __('Un accesso sicuro e veloce') }}</li>
                    <li class="flex items-center gap-3"><x-heroicon-o-check-circle class="h-5 w-5 text-primary-300" aria-hidden="true" />{{ __('Una visione chiara del lavoro di squadra') }}</li>
                    <li class="flex items-center gap-3"><x-heroicon-o-check-circle class="h-5 w-5 text-primary-300" aria-hidden="true" />{{ __('Supporto per ogni turno e ogni sede') }}</li>
                </ul>
                <div class="relative z-10 mt-10 flex items-center gap-3 border-t border-white/15 pt-5 text-xs text-primary-100/70" data-auth-hero-item>
                    <span class="h-2 w-2 rounded-full bg-emerald-300 shadow-[0_0_0_4px_rgba(110,231,183,0.12)]" aria-hidden="true"></span>
                    {{ __('Il tuo spazio operativo è pronto') }}
                </div>
            </section>

            <section class="p-6 sm:p-10 xl:p-14" aria-labelledby="login-widget-title">
                <div class="mb-8 lg:hidden" data-auth-card-item>
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-primary-700">{{ __('Area riservata') }}</p>
                    <h1 class="mt-2 font-serif text-3xl font-semibold tracking-tight text-primary-950">{{ __('Bentornato.') }}</h1>
                </div>
                <div id="login-widget" data-auth-card-item>
                    @livewire(\Modules\User\Filament\Widgets\Auth\LoginWidget::class)
                </div>
            </section>
        </div>

        <p class="mt-6 text-center text-sm text-gray-600" data-auth-card-item>
            {{ __('Non hai un account?') }}
            <a
                href="{{ route('register') }}"
                class="font-medium text-primary-600 hover:text-primary-500 transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500 focus-visible:ring-offset-2 rounded"
            >
                {{ __('Registrati ora') }}
            </a>
        </p>
    </div>
</x-layouts.auth>

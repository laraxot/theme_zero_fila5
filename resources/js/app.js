import './bootstrap';
import 'flowbite';
import { initAuthLoginMotion } from './pages/auth-login';

// Every page in this theme goes through Filament/Livewire (@filamentScripts is in
// every layout), which boots its own Alpine instance with persist/collapse/focus/
// intersect already registered and window.Alpine exposed. Booting a second,
// plugin-less Alpine instance here (as this file used to) rebinds every x-data
// element a second time against an instance with no $wire and no $persist,
// which is what threw "$wire is not defined" / "Alpine.$persist is not a
// function" on this very page's form fields.

document.addEventListener('DOMContentLoaded', initAuthLoginMotion);

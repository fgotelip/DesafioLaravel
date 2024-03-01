<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
                <div class="flex justify-between p-4">
                    
                    <a href="/pacientes">
                        <x-primary-button>Pacientes</x-primary-button>
                    </a>
                    <a href="/medicos">
                        <x-primary-button>Médicos</x-primary-button>
                    </a>
                    <a href="/especialidades">
                        <x-primary-button>Especialidades</x-primary-button>
                    </a>
                    <a href="/planosdesaude">
                        <x-primary-button>Planos de Saúde</x-primary-button>
                    </a>
                </div>
            </div>
        </div>
</x-app-layout>

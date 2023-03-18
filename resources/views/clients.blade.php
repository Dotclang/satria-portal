<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in Clients!") }}

                    @foreach ($clients as $client)
                        <div class="py-3 text-gray-900">
                            <h3 class="text-lg text-gray-500">
                                {{$client->name}}
                            </h3>
                            <p>Client ID: {{$client->id}}</p>
                            <p>Client Redirect: {{$client->redirect}}</p>
                            <p>Client Secret: {{$client->secret}}</p>
                        </div>
                    @endforeach
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="/oauth/clients" method="post">
                        @csrf
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="username" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="redirect" :value="__('Redirect')" />
                            <x-text-input id="redirect" class="block mt-1 w-full" type="text" name="redirect" :value="old('redirect')" required autocomplete="redirect" placeholder="http://app.mockup.test:8081/callback" />
                        </div>
                        <div class="flex items-center justify-start mt-4">
                            <x-primary-button class="ml-3">
                                {{ __('Create Client') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

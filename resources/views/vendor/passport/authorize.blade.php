<x-guest-layout>
    <div class="card-header">
        Authorization Request
    </div>

     <!-- Introduction -->
     <p><strong>{{ $client->name }}</strong> is requesting permission to access your account.</p>

     <!-- Scope List -->
     @if (count($scopes) > 0)
         <div class="scopes">
                 <p><strong>This application will be able to:</strong></p>

                 <ul>
                     @foreach ($scopes as $scope)
                         <li>{{ $scope->description }}</li>
                     @endforeach
                 </ul>
         </div>
     @endif

     <div class="buttons">
         <!-- Authorize Button -->
         <form method="post" action="{{ route('passport.authorizations.approve') }}">
             @csrf

             <input type="hidden" name="state" value="{{ $request->state }}">
             <input type="hidden" name="client_id" value="{{ $client->getKey() }}">
             <input type="hidden" name="auth_token" value="{{ $authToken }}">
             <x-primary-button>{{ __('Authorize') }}</x-primary-button>
         </form>

         <!-- Cancel Button -->
         <form method="post" action="{{ route('passport.authorizations.deny') }}">
             @csrf
             @method('DELETE')

             <input type="hidden" name="state" value="{{ $request->state }}">
             <input type="hidden" name="client_id" value="{{ $client->getKey() }}">
             <input type="hidden" name="auth_token" value="{{ $authToken }}">
             <x-danger-button>{{ __('Cancel') }}</x-danger-button>
         </form>
     </div>

</x-guest-layout>

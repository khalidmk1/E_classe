<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <div class="container-xl px-4 mt-4">

            <div class="row">

                <div class="col-xl-4">

                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Profile Picture</div>
                        <div class="card-body text-center">

                            <img class="img-account-profile rounded-circle mb-2"
                                src="{{ URL::asset('avatars/' . auth()->user()->avatar) }}" alt="avatar">

                            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>

                            <button class="btn btn-primary" type="button">Upload new image</button>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">

                    <div class="card mb-4">
                        <div class="card-header">Account Details</div>
                        <div class="card-body">



                            <div class="row gx-3 mb-3">

                                {{--  first_name --}}
                                <div class="col-md-6">
                                    <x-input-label class="small mb-1" for="name" :value="__('First Name')" />
                                    <x-text-input class="form-control" id="inputFirstName" name="first_name"
                                        type="text" :value="old('first_name', $user->first_name)" required autofocus autocomplete="username" />
                                    <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                                </div>
                                {{--  first_name --}}

                                {{--  last_name --}}
                                <div class="col-md-6">
                                    <x-input-label class="small mb-1" for="last_name" :value="__('Last Name')" />
                                    <x-text-input class="form-control" id="inputLastName" name="last_name"
                                        type="text" :value="old('last_name', $user->last_name)" required autofocus autocomplete="username" />
                                    <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                                </div>
                                {{--  last_name --}}
                            </div>

                            {{--  email --}}

                            <div class="mb-3">
                                <x-input-label for="email" class="small mb-1" :value="__('Email')" />
                                <x-text-input id="inputEmailAddress" class="form-control" name="email" type="email"
                                    :value="old('email', $user->email)" required autocomplete="username" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                    <div>
                                        <p class="text-sm mt-2 text-gray-800">
                                            {{ __('Your email address is unverified.') }}

                                            <button form="send-verification"
                                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                {{ __('Click here to re-send the verification email.') }}
                                            </button>
                                        </p>

                                        @if (session('status') === 'verification-link-sent')
                                            <p class="mt-2 font-medium text-sm text-green-600">
                                                {{ __('A new verification link has been sent to your email address.') }}
                                            </p>
                                        @endif
                                    </div>
                                @endif

                            </div>
                            {{--  email --}}

                            <div>
                                <x-primary-button class="btn btn-primary">{{ __('Save') }}</x-primary-button>

                                @if (session('status') === 'profile-updated')
                                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600 ">{{ __('Saved') }}</p>
                                @endif
                            </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>


</section>

<x-guest-layout>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

            <form method="" action="">
                @csrf

                <div>
                    <x-label for="student_name" value="{{ __('Student Name') }}" />
                    <x-input id="student_name" class="block mt-1 w-full" type="text" name="student_name"
                        :value="old('student_name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-label for="admission_number" value="{{ __('Admission Number') }}" />
                    <x-input id="admission_number" class="block mt-1 w-full" type="text" name="admission_number"
                        :value="old('admission_number')" required autofocus autocomplete="admission-number" />
                </div>

                <div class="mt-4">
                    <x-label for="address" value="{{ __('Address') }}" />
                    <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"
                        required autocomplete="address" />
                </div>
                <div class="mt-4">
                    <x-label for="gender" value="{{ __('Gender') }}" />
                    <div class="mt-2 flex items-center gap-4">
                        <label class="inline-flex items-center">
                            <input type="radio" name="gender" value="male" class="text-indigo-600" {{ old('gender') === 'male' ? 'checked' : '' }} required>
                            <span class="ml-2">{{ __('Male') }}</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="gender" value="female" class="text-indigo-600" {{ old('gender') === 'female' ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('Female') }}</span>
                        </label>
                    </div>
                </div>

                <div class="mt-4">
                    <x-label for="phone" value="{{ __('Phone') }}" />
                    <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')"
                        required autocomplete="phone" />
                </div>
                <div class="mt-4">
                    <x-label for="dob" value="{{ __('Date of Birth') }}" />
                    <x-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')"
                        required autocomplete="dob" />
                </div>
                <div class="mt-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autocomplete="username" />
                </div>
                <div class="mt-4">
                    <x-label for="admission_date" value="{{ __('Admission Date') }}" />
                    <x-input id="admission_date" class="block mt-1 w-full" type="date" name="admission_date" :value="old('admission_date')"
                        required autocomplete="admission_date" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-4">
                        {{ __('Add Student') }}
                    </x-button>
            </form>
        </div>
    </div>


</x-guest-layout>

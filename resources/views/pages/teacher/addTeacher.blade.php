<x-guest-layout>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

            <form method="POST" action="{{ route('teacher.save') }}">
                @csrf

                <div>
                    <x-label for="tch_name" value="{{ __('Teacher Name') }}" />
                    <x-input id="tch_name" class="block mt-1 w-full" type="text" name="tch_name" :value="old('tch_name')"
                        required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-label for="tch_employeeId" value="{{ __('Employee ID') }}" />
                    <x-input id="tch_employeeId" class="block mt-1 w-full" type="text" name="tch_employeeId"
                        :value="old('tch_employeeId')" required autofocus autocomplete="tch_employeeId" />
                </div>

                <div class="mt-4">
                    <x-label for="tch_subject" value="{{ __('Subject') }}" />
                    <x-input id="tch_subject" class="block mt-1 w-full" type="text" name="tch_subject"
                        :value="old('tch_subject')" required autocomplete="tch_subject" />
                </div>
                <div class="mt-4">
                    <x-label for="tch_gender" value="{{ __('Gender') }}" />
                    <div class="mt-2 flex items-center gap-4">
                        <label class="inline-flex items-center">
                            <input type="radio" name="tch_gender" value="male" class="text-indigo-600"
                                {{ old('tch_gender') === 'male' ? 'checked' : '' }} required>
                            <span class="ml-2">{{ __('Male') }}</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="tch_gender" value="female" class="text-indigo-600"
                                {{ old('tch_gender') === 'female' ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('Female') }}</span>
                        </label>
                    </div>
                </div>

                <div class="mt-4">
                    <x-label for="tch_phone" value="{{ __('Phone') }}" />
                    <x-input id="tch_phone" class="block mt-1 w-full" type="text" name="tch_phone" :value="old('tch_phone')"
                        required autocomplete="tch_phone" />
                </div>
                <div class="mt-4">
                    <x-label for="tch_dob" value="{{ __('Date of Birth') }}" />
                    <x-input id="tch_dob" class="block mt-1 w-full" type="date" name="tch_dob" :value="old('tch_dob')"
                        required autocomplete="tch_dob" />
                </div>
                <div class="mt-4">
                    <x-label for="tch_email" value="{{ __('Email') }}" />
                    <x-input id="tch_email" class="block mt-1 w-full" type="email" name="tch_email" :value="old('tch_email')"
                        autocomplete="tch_email" />
                </div>
                <div class="mt-4">
                    <x-label for="tch_joiningDate" value="{{ __('Joining Date') }}" />
                    <x-input id="tch_joiningDate" class="block mt-1 w-full" type="date" name="tch_joiningDate"
                        :value="old('tch_joiningDate')" required autocomplete="tch_joiningDate" />
                </div>


                <div class="flex items-center justify-end mt-4">
                    <a href="{{ url('/teachers') }}" >
                        Back
                    </a>
                    <x-button class="ml-4">
                        {{ __('Add Teacher') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

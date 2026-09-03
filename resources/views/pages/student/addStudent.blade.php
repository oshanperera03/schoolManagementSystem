<x-guest-layout>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

            <form method="POST" action="{{ route('student.save') }}">
                @csrf

                <div>
                    <x-label for="stu_name" value="{{ __('Student Name') }}" />
                    <x-input id="stu_name" class="block mt-1 w-full" type="text" name="stu_name" :value="old('stu_name')"
                        required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-label for="stu_admissionNo" value="{{ __('Admission Number') }}" />
                    <x-input id="stu_admissionNo" class="block mt-1 w-full" type="text" name="stu_admissionNo"
                        :value="old('stu_admissionNo')" required autofocus autocomplete="stu_admissionNo" />
                </div>

                <div class="mt-4">
                    <x-label for="stu_address" value="{{ __('Address') }}" />
                    <x-input id="stu_address" class="block mt-1 w-full" type="text" name="stu_address"
                        :value="old('stu_address')" required autocomplete="stu_address" />
                </div>
                <div class="mt-4">
                    <x-label for="stu_gender" value="{{ __('Gender') }}" />
                    <div class="mt-2 flex items-center gap-4">
                        <label class="inline-flex items-center">
                            <input type="radio" name="stu_gender" value="male" class="text-indigo-600"
                                {{ old('stu_gender') === 'male' ? 'checked' : '' }} required>
                            <span class="ml-2">{{ __('Male') }}</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="stu_gender" value="female" class="text-indigo-600"
                                {{ old('stu_gender') === 'female' ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('Female') }}</span>
                        </label>
                    </div>
                </div>

                <div class="mt-4">
                    <x-label for="stu_phone" value="{{ __('Phone') }}" />
                    <x-input id="stu_phone" class="block mt-1 w-full" type="text" name="stu_phone" :value="old('stu_phone')"
                        required autocomplete="stu_phone" />
                </div>
                <div class="mt-4">
                    <x-label for="stu_dob" value="{{ __('Date of Birth') }}" />
                    <x-input id="stu_dob" class="block mt-1 w-full" type="date" name="stu_dob" :value="old('stu_dob')"
                        required autocomplete="stu_dob" />
                </div>
                <div class="mt-4">
                    <x-label for="stu_email" value="{{ __('Email') }}" />
                    <x-input id="stu_email" class="block mt-1 w-full" type="email" name="stu_email" :value="old('stu_email')"
                        autocomplete="stu_email" />
                </div>
                <div class="mt-4">
                    <x-label for="stu_admissionDate" value="{{ __('Admission Date') }}" />
                    <x-input id="stu_admissionDate" class="block mt-1 w-full" type="date" name="stu_admissionDate"
                        :value="old('stu_admissionDate')" required autocomplete="stu_admissionDate" />
                </div>


                <div class="flex items-center justify-end mt-4">
                    <a href="{{ url('/students') }}" >
                        Back
                    </a>
                    <x-button class="ml-4">
                        {{ __('Add Student') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

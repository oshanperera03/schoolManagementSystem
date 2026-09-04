<x-guest-layout>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

            <form method="POST"
                action="{{ isset($classroom) ? route('classroom.update', $classroom->id) : route('classroom.save') }}">
                @csrf
                @if (isset($classroom))
                    @method('PUT')
                @endif

                <div>
                    <x-label for="class_name" value="{{ __('Class Name') }}" />
                    <x-input id="class_name" class="block mt-1 w-full" type="text" name="class_name" :value="old('class_name', isset($classroom) ? $classroom->class_name : '')"
                        required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-label for="class_grade" value="{{ __('Class Grade') }}" />
                    <x-input id="class_grade" class="block mt-1 w-full" type="number" name="class_grade"
                        :value="old('class_grade', isset($classroom) ? $classroom->class_grade : '')" required autofocus autocomplete="class_grade" />
                </div>

                <div class="mt-4">
                    <x-label for="class_capacity" value="{{ __('Class Capacity') }}" />
                    <x-input id="class_capacity" class="block mt-1 w-full" type="number" name="class_capacity"
                        :value="old('class_capacity', isset($classroom) ? $classroom->class_capacity : '')" required autofocus autocomplete="class_capacity" />
                </div>

                <div class="mt-4">
                    <x-label for="class_teacher" value="{{ __('Class Teacher') }}" />
                    <x-input id="class_teacher" class="block mt-1 w-full" type="text" name="class_teacher"
                        :value="old('class_teacher', isset($classroom) ? $classroom->class_teacher : '')" required autofocus autocomplete="class_teacher" />
                </div>





                <div class="flex items-center justify-end mt-4">
                    <a href="{{ url('/classrooms') }}">
                        Back
                    </a>
                    <x-button class="ml-4">
                        {{ isset($classroom) ? __('Update') : __('Add Classroom') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

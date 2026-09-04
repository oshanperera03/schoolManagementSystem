<x-app-layout>
    <div class="students-dashboard">
        <!-- Top Header & Breadcrumb -->
        <div
            class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 pb-2 border-bottom">
            <div>

                <h4 class="fw-bold mb-0 text-dark d-flex align-items-center gap-2">
                    <i class="bi bi-person-lines-fill text-primary"></i> Classes
                </h4>
                <p class="text-muted fs-7 mb-0">Manage class information.</p>
            </div>
            <div class="d-flex gap-2 mt-3 mt-md-0">

                <a href="/classrooms/create">
                    <button type="button"
                        class="btn btn-primary btn-sm d-flex align-items-center gap-1.5 rounded-2 px-3 fw-medium shadow-sm">
                        <i class="bi bi-plus-circle-fill"></i> Add New Class
                    </button>
                </a>
            </div>
        </div>


        <x-table>
            <thead class="bg-light text-muted fs-8 text-uppercase tracking-wider">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Class Name</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Capacity</th>
                    <th scope="col">Class Teacher</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-end pe-4">Actions</th>
                </tr>
            </thead>
            <tbody class="border-top-0 fs-7">
                @foreach ($classrooms as $classroom)
                    <tr>
                        <td><b>{{ $loop->iteration }}</b></td>
                        <td>
                            <div class="d-flex align-items-center gap-2.5">

                                <div>
                                    <div class="fw-bold text-dark lh-1">{{ $classroom->class_name }}</div>
                                </div>
                            </div>
                        </td>
                        <td><span
                                class="badge bg-light text-dark font-monospace border px-2 py-1">{{ $classroom->class_grade }}</span>
                        </td>
                        <td><span class="fw-semibold text-dark">{{ $classroom->class_capacity }}</span></td>
                        <td>
                            <div class="lh-1">{{ $classroom->class_teacher }}</div>
                        </td>
            
                        <td>
                            <span
                                class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-2.5 py-1 fw-semibold d-inline-flex align-items-center gap-1">
                                <span class="badge-dot bg-success"></span> {{ $classroom->status }}
                            </span>
                        </td>
                        <td class="text-end pe-4">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('classroom.edit', $classroom->id) }}">
                                    <button type="button" class="btn btn-outline-primary border-0"
                                        title="Edit Class">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                </a>
                                <a href="{{ route('classroom.delete', $classroom->id) }}">
                                    <button type="button" class="btn btn-outline-danger border-0" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </a>
                                
                            </div>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </x-table>


    </div>
    </div>

    <style>
        .badge-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            display: inline-block;
        }
    </style>
</x-app-layout>

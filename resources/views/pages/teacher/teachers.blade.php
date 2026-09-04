<x-app-layout>
    <div class="students-dashboard">
        <div
            class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 pb-2 border-bottom">
            <div>

                <h4 class="fw-bold mb-0 text-dark d-flex align-items-center gap-2">
                    <i class="bi bi-person-lines-fill text-primary"></i> Teachers
                </h4>
                <p class="text-muted fs-7 mb-0">Manage teacher profiles.</p>
            </div>
            <div class="d-flex gap-2 mt-3 mt-md-0">

                <a href="/teachers/create">
                    <button type="button"
                        class="btn btn-primary btn-sm d-flex align-items-center gap-1.5 rounded-2 px-3 fw-medium shadow-sm">
                        <i class="bi bi-person-badge-fill"></i> Add New Teacher
                    </button>
                </a>
            </div>
        </div>


        <x-table>
            <thead class="bg-light text-muted fs-8 text-uppercase tracking-wider">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Teacher Name</th>
                    <th scope="col">Employee ID</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Joining Date</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-end pe-4">Actions</th>
                </tr>
            </thead>
            <tbody class="border-top-0 fs-7">
                @foreach ($teachers as $teacher)
                    <tr>
                        <td><b>{{ $loop->iteration }}</b></td>
                        <td>
                            <div class="d-flex align-items-center gap-2.5">

                                <div>
                                    <div class="fw-bold text-dark lh-1">{{ $teacher->tch_name }}</div>
                                    <small class="text-muted">{{ $teacher->tch_email }}</small>
                                </div>
                            </div>
                        </td>
                        <td><span
                                class="badge bg-light text-dark font-monospace border px-2 py-1">{{ $teacher->tch_employeeId }}</span>
                        </td>
                        <td><span class="fw-semibold text-dark">{{ $teacher->tch_subject }}</span></td>
                        <td>
                            <div class="lh-1">{{ $teacher->tch_gender }}</div>
                        </td>
                        <td>{{ $teacher->tch_phone }}</td>
                        <td>{{ $teacher->tch_dob }}</td>
                        <td>{{ $teacher->tch_joiningDate }}</td>
                        <td>
                            <span
                                class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-2.5 py-1 fw-semibold d-inline-flex align-items-center gap-1">
                                <span class="badge-dot bg-success"></span> {{ $teacher->status }}
                            </span>
                        </td>
                        <td class="text-end pe-4">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('teacher.edit', $teacher->id) }}">
                                    <button type="button" class="btn btn-outline-primary border-0" title="Edit Teacher">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                </a>
                                <a href="{{ route('teacher.delete', $teacher->id) }}">
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

<x-app-layout>
    <div class="teachers-dashboard">
        <!-- Top Header & Breadcrumb -->
        <div
            class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 pb-2 border-bottom">
            <div>

                <h4 class="fw-bold mb-0 text-dark d-flex align-items-center gap-2">
                    <i class="bi bi-person-badge-fill text-primary"></i> Teachers
                </h4>
                <p class="text-muted fs-7 mb-0">Manage teacher profiles.</p>
            </div>
            <div class="d-flex gap-2 mt-3 mt-md-0">

                <button type="button"
                    class="btn btn-primary btn-sm d-flex align-items-center gap-1.5 rounded-2 px-3 fw-medium shadow-sm">
                    <i class="bi bi-plus-circle-fill"></i> Add New Teacher
                </button>
            </div>
        </div>


        <x-table>
            <thead class="bg-light text-muted fs-8 text-uppercase tracking-wider">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student ID</th>
                    <th scope="col">Class & Section</th>
                    <th scope="col">Guardian Contact</th>
                    <th scope="col">Enrollment Date</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-end pe-4">Actions</th>
                </tr>
            </thead>
            <tbody class="border-top-0 fs-7">
                <!-- Row 1 -->
                <tr>
                    <td>1</td>
                    <td>
                        <div class="d-flex align-items-center gap-2.5">

                            <div>
                                <div class="fw-bold text-dark lh-1">Mark Otto</div>
                                <small class="text-muted">mark.otto@school.edu</small>
                            </div>
                        </div>
                    </td>
                    <td><span class="badge bg-light text-dark font-monospace border px-2 py-1">STU-2025-001</span>
                    </td>
                    <td><span class="fw-semibold text-dark">Grade 10-A</span></td>
                    <td>
                        <div class="lh-1">Robert Otto</div>
                        <small class="text-muted">+1 (555) 234-5678</small>
                    </td>
                    <td>Jan 12, 2024</td>
                    <td>
                        <span
                            class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-2.5 py-1 fw-semibold d-inline-flex align-items-center gap-1">
                            <span class="badge-dot bg-success"></span> Active
                        </span>
                    </td>
                    <td class="text-end pe-4">
                        <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-outline-secondary border-0" title="View Profile">
                                <i class="bi bi-eye"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary border-0" title="Edit Student">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button type="button" class="btn btn-outline-danger border-0" title="Delete">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 2 -->
                <tr>
                    <td>1</td>
                    <td>
                        <div class="d-flex align-items-center gap-2.5">

                            <div>
                                <div class="fw-bold text-dark lh-1">Jacob Thornton</div>
                                <small class="text-muted">jacob.t@school.edu</small>
                            </div>
                        </div>
                    </td>
                    <td><span class="badge bg-light text-dark font-monospace border px-2 py-1">STU-2025-002</span>
                    </td>
                    <td><span class="fw-semibold text-dark">Grade 11-B</span></td>
                    <td>
                        <div class="lh-1">Sarah Thornton</div>
                        <small class="text-muted">+1 (555) 345-6789</small>
                    </td>
                    <td>Feb 05, 2024</td>
                    <td>
                        <span
                            class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-2.5 py-1 fw-semibold d-inline-flex align-items-center gap-1">
                            <span class="badge-dot bg-success"></span> Active
                        </span>
                    </td>
                    <td class="text-end pe-4">
                        <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-outline-secondary border-0" title="View Profile">
                                <i class="bi bi-eye"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary border-0" title="Edit Student">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button type="button" class="btn btn-outline-danger border-0" title="Delete">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 3 -->
                <tr>
                    <td>1</td>
                    <td>
                        <div class="d-flex align-items-center gap-2.5">

                            <div>
                                <div class="fw-bold text-dark lh-1">John Doe</div>
                                <small class="text-muted">john.doe@school.edu</small>
                            </div>
                        </div>
                    </td>
                    <td><span class="badge bg-light text-dark font-monospace border px-2 py-1">STU-2025-003</span>
                    </td>
                    <td><span class="fw-semibold text-dark">Grade 9-C</span></td>
                    <td>
                        <div class="lh-1">Michael Doe</div>
                        <small class="text-muted">+1 (555) 456-7890</small>
                    </td>
                    <td>Mar 19, 2024</td>
                    <td>
                        <span
                            class="badge bg-warning-subtle text-warning border border-warning-subtle rounded-pill px-2.5 py-1 fw-semibold d-inline-flex align-items-center gap-1">
                            <span class="badge-dot bg-warning"></span> Pending
                        </span>
                    </td>
                    <td class="text-end pe-4">
                        <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-outline-secondary border-0" title="View Profile">
                                <i class="bi bi-eye"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary border-0" title="Edit Student">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button type="button" class="btn btn-outline-danger border-0" title="Delete">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 4 -->
                <tr>
                    <td>1</td>
                    <td>
                        <div class="d-flex align-items-center gap-2.5">

                            <div>
                                <div class="fw-bold text-dark lh-1">Emily Stone</div>
                                <small class="text-muted">emily.s@school.edu</small>
                            </div>
                        </div>
                    </td>
                    <td><span class="badge bg-light text-dark font-monospace border px-2 py-1">STU-2025-004</span>
                    </td>
                    <td><span class="fw-semibold text-dark">Grade 12-A</span></td>
                    <td>
                        <div class="lh-1">David Stone</div>
                        <small class="text-muted">+1 (555) 567-8901</small>
                    </td>
                    <td>Apr 02, 2024</td>
                    <td>
                        <span
                            class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-2.5 py-1 fw-semibold d-inline-flex align-items-center gap-1">
                            <span class="badge-dot bg-success"></span> Active
                        </span>
                    </td>
                    <td class="text-end pe-4">
                        <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-outline-secondary border-0" title="View Profile">
                                <i class="bi bi-eye"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary border-0" title="Edit Student">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button type="button" class="btn btn-outline-danger border-0" title="Delete">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 5 -->
                <tr>
                    <td>1</td>
                    <td>
                        <div class="d-flex align-items-center gap-2.5">

                            <div>
                                <div class="fw-bold text-dark lh-1">Alex Walker</div>
                                <small class="text-muted">alex.w@school.edu</small>
                            </div>
                        </div>
                    </td>
                    <td><span class="badge bg-light text-dark font-monospace border px-2 py-1">STU-2025-005</span>
                    </td>
                    <td><span class="fw-semibold text-dark">Grade 10-C</span></td>
                    <td>
                        <div class="lh-1">Karen Walker</div>
                        <small class="text-muted">+1 (555) 678-9012</small>
                    </td>
                    <td>May 14, 2024</td>
                    <td>
                        <span
                            class="badge bg-secondary-subtle text-secondary border border-secondary-subtle rounded-pill px-2.5 py-1 fw-semibold d-inline-flex align-items-center gap-1">
                            <span class="badge-dot bg-secondary"></span> On Leave
                        </span>
                    </td>
                    <td class="text-end pe-4">
                        <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-outline-secondary border-0" title="View Profile">
                                <i class="bi bi-eye"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary border-0" title="Edit Student">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button type="button" class="btn btn-outline-danger border-0" title="Delete">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
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

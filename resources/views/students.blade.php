<x-app-layout>
    <div class="students-dashboard">
        <!-- Top Header & Breadcrumb -->
        <div
            class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 pb-2 border-bottom">
            <div>

                <h4 class="fw-bold mb-0 text-dark d-flex align-items-center gap-2">
                    <i class="bi bi-person-lines-fill text-primary"></i> Students
                </h4>
                <p class="text-muted fs-7 mb-0">Manage student profiles, enrollment statuses, and academic records.</p>
            </div>
            <div class="d-flex gap-2 mt-3 mt-md-0">

                <button type="button"
                    class="btn btn-primary btn-sm d-flex align-items-center gap-1.5 rounded-2 px-3 fw-medium shadow-sm">
                    <i class="bi bi-plus-circle-fill"></i> Add New Student
                </button>
            </div>
        </div>

        <!-- Overview Stat Cards -->
        <div class="row g-3 mb-4">
            <div class="col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm rounded-3 overflow-hidden h-100">
                    <div class="card-body p-3 d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-uppercase text-muted fw-semibold fs-8 tracking-wider d-block mb-1">Total
                                Enrolled</span>
                            <h3 class="fw-bold mb-0 text-dark">1,248</h3>
                            <span class="text-success fs-8 fw-semibold"><i class="bi bi-arrow-up-short"></i> +12% this
                                term</span>
                        </div>
                        <div class="rounded-3 bg-primary-subtle text-primary p-3 fs-3 d-flex align-items-center justify-content-center"
                            style="width: 54px; height: 54px;">
                            <i class="bi bi-people-fill"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm rounded-3 overflow-hidden h-100">
                    <div class="card-body p-3 d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-uppercase text-muted fw-semibold fs-8 tracking-wider d-block mb-1">Avg
                                Attendance</span>
                            <h3 class="fw-bold mb-0 text-dark">95.8%</h3>
                            <span class="text-success fs-8 fw-semibold"><i class="bi bi-arrow-up-short"></i> +1.4% this
                                week</span>
                        </div>
                        <div class="rounded-3 bg-success-subtle text-success p-3 fs-3 d-flex align-items-center justify-content-center"
                            style="width: 54px; height: 54px;">
                            <i class="bi bi-check-circle-fill"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm rounded-3 overflow-hidden h-100">
                    <div class="card-body p-3 d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-uppercase text-muted fw-semibold fs-8 tracking-wider d-block mb-1">Active
                                Classes</span>
                            <h3 class="fw-bold mb-0 text-dark">36</h3>
                            <span class="text-muted fs-8">Grade 1 to 12</span>
                        </div>
                        <div class="rounded-3 bg-info-subtle text-info p-3 fs-3 d-flex align-items-center justify-content-center"
                            style="width: 54px; height: 54px;">
                            <i class="bi bi-building-fill"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm rounded-3 overflow-hidden h-100">
                    <div class="card-body p-3 d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-uppercase text-muted fw-semibold fs-8 tracking-wider d-block mb-1">Fees
                                Paid Ratio</span>
                            <h3 class="fw-bold mb-0 text-dark">91.2%</h3>
                            <span class="text-warning fs-8 fw-semibold"><i class="bi bi-exclamation-circle"></i> 110
                                Pending</span>
                        </div>
                        <div class="rounded-3 bg-warning-subtle text-warning p-3 fs-3 d-flex align-items-center justify-content-center"
                            style="width: 54px; height: 54px;">
                            <i class="bi bi-wallet2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Data Table Card -->
        <div class="card border-0 shadow-sm rounded-3 overflow-hidden">
            <!-- Toolbar & Filter Header -->
            <div class="card-header bg-white py-3 px-4 border-bottom">
                <div class="row g-2 align-items-center">
                    <div class="col-md-5 col-lg-4">
                        <div class="input-group input-group-sm">
                            <span class="input-group-text bg-light border-end-0 text-muted">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" class="form-control bg-light border-start-0 ps-0"
                                placeholder="Search by name, ID or email...">
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <div class="d-flex flex-wrap gap-2 justify-content-md-end">
                            <select class="form-select form-select-sm bg-light w-auto">
                                <option selected>All Grades</option>
                                <option value="9">Grade 9</option>
                                <option value="10">Grade 10</option>
                                <option value="11">Grade 11</option>
                                <option value="12">Grade 12</option>
                            </select>
                            <select class="form-select form-select-sm bg-light w-auto">
                                <option selected>All Statuses</option>
                                <option value="active">Active</option>
                                <option value="pending">Pending</option>
                                <option value="on_leave">On Leave</option>
                            </select>
                            <button class="btn btn-sm btn-light border text-secondary" title="Refresh list">
                                <i class="bi bi-arrow-clockwise"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table View -->
            <div class="table-responsive">
                <table class="table align-middle table-hover mb-0">
                    <thead class="bg-light text-muted fs-8 text-uppercase tracking-wider">
                        <tr>
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
                            <td>
                                <div class="d-flex align-items-center gap-2.5">

                                    <div>
                                        <div class="fw-bold text-dark lh-1">Mark Otto</div>
                                        <small class="text-muted">mark.otto@school.edu</small>
                                    </div>
                                </div>
                            </td>
                            <td><span
                                    class="badge bg-light text-dark font-monospace border px-2 py-1">STU-2025-001</span>
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
                                    <button type="button" class="btn btn-outline-secondary border-0"
                                        title="View Profile">
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
                            <td>
                                <div class="d-flex align-items-center gap-2.5">

                                    <div>
                                        <div class="fw-bold text-dark lh-1">Jacob Thornton</div>
                                        <small class="text-muted">jacob.t@school.edu</small>
                                    </div>
                                </div>
                            </td>
                            <td><span
                                    class="badge bg-light text-dark font-monospace border px-2 py-1">STU-2025-002</span>
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
                                    <button type="button" class="btn btn-outline-secondary border-0"
                                        title="View Profile">
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
                            <td>
                                <div class="d-flex align-items-center gap-2.5">

                                    <div>
                                        <div class="fw-bold text-dark lh-1">John Doe</div>
                                        <small class="text-muted">john.doe@school.edu</small>
                                    </div>
                                </div>
                            </td>
                            <td><span
                                    class="badge bg-light text-dark font-monospace border px-2 py-1">STU-2025-003</span>
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
                                    <button type="button" class="btn btn-outline-secondary border-0"
                                        title="View Profile">
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
                            <td>
                                <div class="d-flex align-items-center gap-2.5">

                                    <div>
                                        <div class="fw-bold text-dark lh-1">Emily Stone</div>
                                        <small class="text-muted">emily.s@school.edu</small>
                                    </div>
                                </div>
                            </td>
                            <td><span
                                    class="badge bg-light text-dark font-monospace border px-2 py-1">STU-2025-004</span>
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
                                    <button type="button" class="btn btn-outline-secondary border-0"
                                        title="View Profile">
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
                            <td>
                                <div class="d-flex align-items-center gap-2.5">

                                    <div>
                                        <div class="fw-bold text-dark lh-1">Alex Walker</div>
                                        <small class="text-muted">alex.w@school.edu</small>
                                    </div>
                                </div>
                            </td>
                            <td><span
                                    class="badge bg-light text-dark font-monospace border px-2 py-1">STU-2025-005</span>
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
                                    <button type="button" class="btn btn-outline-secondary border-0"
                                        title="View Profile">
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
                </table>
            </div>

            <!-- Card Footer & Pagination -->
            <div class="card-footer bg-white py-3 px-4 border-top">
                <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2">
                    <small class="text-muted fs-8">Showing <span class="fw-bold text-dark">1-5</span> of <span
                            class="fw-bold text-dark">1,248</span> students</small>
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-sm mb-0">
                            <li class="page-item disabled"><a class="page-link" href="#"><i
                                        class="bi bi-chevron-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">250</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
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
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
                            <td>1</td>
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
                            <td>1</td>
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
                            <td>1</td>
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
                            <td>1</td>
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
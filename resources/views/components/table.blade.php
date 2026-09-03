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
                   {{ $slot }}
                </table>
            </div>
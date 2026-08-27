<div class="card border-0 shadow-sm rounded-3 overflow-hidden bg-white sidebar-nav mb-4">
    <!-- Brand / Header -->
    <div class="p-3 border-bottom bg-primary text-white d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center gap-2">
            <div class="rounded-circle bg-white text-primary d-flex align-items-center justify-content-center fw-bold"
                style="width: 38px; height: 38px; font-size: 1.1rem;">
                <i class="bi bi-mortarboard-fill"></i>
            </div>
            <div>
                <h6 class="mb-0 fw-bold lh-1 text-white">EduManager</h6>
                <small class="text-white-50 fs-7">School Admin Portal</small>
            </div>
        </div>
    </div>

    <!-- Navigation Body -->
    <div class="card-body p-2">
        <!-- Main Navigation -->
        <div class="px-3 pt-2 pb-1 text-uppercase text-muted fw-bold fs-8 tracking-wider">Main Navigation</div>
        <div class="nav flex-column nav-pills custom-sidebar-nav">
            <a href="/dashboard"
                class="nav-link d-flex align-items-center justify-content-between px-3 py-2.5 rounded-3 mb-1 text-secondary">
                <div class="d-flex align-items-center gap-2.5">
                    <i class="bi bi-grid-1x2-fill fs-5"></i>
                    <span class="fw-semibold">Dashboard</span>
                </div>
            </a>

            <a href="/students"
                class="nav-link active d-flex align-items-center justify-content-between px-3 py-2.5 rounded-3 mb-1 bg-primary text-white shadow-sm">
                <div class="d-flex align-items-center gap-2.5">
                    <i class="bi bi-people-fill fs-5"></i>
                    <span class="fw-semibold">Students</span>
                </div>
                <span class="badge bg-white text-primary rounded-pill px-2 py-1 fs-8">1,248</span>
            </a>

            <a href="#"
                class="nav-link d-flex align-items-center justify-content-between px-3 py-2.5 rounded-3 mb-1 text-secondary">
                <div class="d-flex align-items-center gap-2.5">
                    <i class="bi bi-person-badge-fill fs-5"></i>
                    <span class="fw-semibold">Teachers</span>
                </div>
                <span class="badge bg-light text-secondary rounded-pill px-2 py-1 fs-8">42</span>
            </a>

            <a href="#"
                class="nav-link d-flex align-items-center justify-content-between px-3 py-2.5 rounded-3 mb-1 text-secondary">
                <div class="d-flex align-items-center gap-2.5">
                    <i class="bi bi-journal-bookmark-fill fs-5"></i>
                    <span class="fw-semibold">Classes & Subjects</span>
                </div>
            </a>
        </div>

        <!-- Academic Management -->
        <div class="px-3 pt-3 pb-1 text-uppercase text-muted fw-bold fs-8 tracking-wider">Academics</div>
        <div class="nav flex-column nav-pills custom-sidebar-nav">
            <a href="#"
                class="nav-link d-flex align-items-center justify-content-between px-3 py-2.5 rounded-3 mb-1 text-secondary">
                <div class="d-flex align-items-center gap-2.5">
                    <i class="bi bi-card-checklist fs-5"></i>
                    <span class="fw-semibold">Exams & Tests</span>
                </div>
            </a>

            <a href="#"
                class="nav-link d-flex align-items-center justify-content-between px-3 py-2.5 rounded-3 mb-1 text-secondary">
                <div class="d-flex align-items-center gap-2.5">
                    <i class="bi bi-graph-up-arrow fs-5"></i>
                    <span class="fw-semibold">Marks & Grades</span>
                </div>
            </a>

            <a href="#"
                class="nav-link d-flex align-items-center justify-content-between px-3 py-2.5 rounded-3 mb-1 text-secondary">
                <div class="d-flex align-items-center gap-2.5">
                    <i class="bi bi-calendar-week-fill fs-5"></i>
                    <span class="fw-semibold">Timetable</span>
                </div>
            </a>
        </div>

        <!-- System & Settings -->
        <div class="px-3 pt-3 pb-1 text-uppercase text-muted fw-bold fs-8 tracking-wider">Administration</div>
        <div class="nav flex-column nav-pills custom-sidebar-nav">
            <a href="#"
                class="nav-link d-flex align-items-center justify-content-between px-3 py-2.5 rounded-3 mb-1 text-secondary">
                <div class="d-flex align-items-center gap-2.5">
                    <i class="bi bi-receipt-cutoff fs-5"></i>
                    <span class="fw-semibold">Fee Management</span>
                </div>
            </a>

            <a href="{{ route('profile.show') }}"
                class="nav-link d-flex align-items-center justify-content-between px-3 py-2.5 rounded-3 mb-1 text-secondary">
                <div class="d-flex align-items-center gap-2.5">
                    <i class="bi bi-gear-fill fs-5"></i>
                    <span class="fw-semibold">Settings</span>
                </div>
            </a>
        </div>
        <div class="p-5"></div>
        <div class="px-3 pt-5 pb-1 text-uppercase text-danger fw-bold fs-7 tracking-wider">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="nav-link d-flex align-items-center justify-content-between px-3 py-2.5 rounded-3 mb-1 text-secondary">
                    <div class="d-flex align-items-center gap-2.5">
                        <i class="bi bi-box-arrow-right fs-5 text-danger"></i>
                        <span class="fw-bold ml-2 text-danger">Logout</span>
                    </div>
                </button>
            </form>
        </div>
    </div>


</div>

<style>
    .fs-7 {
        font-size: 0.825rem;
    }

    .fs-8 {
        font-size: 0.75rem;
    }

    .tracking-wider {
        letter-spacing: 0.05em;
    }

    .custom-sidebar-nav .nav-link {
        transition: all 0.2s ease-in-out;
        color: #495057;
    }

    .custom-sidebar-nav .nav-link:hover:not(.active) {
        background-color: #f1f5f9;
        color: #0d6efd;
        transform: translateX(3px);
    }
</style>
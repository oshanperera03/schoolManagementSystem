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


            <x-table></x-table>

            
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
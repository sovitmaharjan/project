@extends('layouts.app')
@section('dashboard', 'active')
@section('title', 'About Us')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Dashboard
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <div class="m-0">
                        <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            Filter
                        </a>
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                            id="kt_menu_6244763d93048">
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                            </div>
                            <div class="separator border-gray-200"></div>
                            <div class="px-7 py-5">
                                <div class="mb-10">
                                    <label class="form-label fw-bold">Status:</label>
                                    <div>
                                        <select class="form-select form-select-solid" data-kt-select2="true"
                                            data-placeholder="Select option" data-dropdown-parent="#kt_menu_6244763d93048"
                                            data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <label class="form-label fw-bold">Member Type:</label>
                                    <div class="d-flex">
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2"
                                                checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <label class="form-label fw-bold">Notifications:</label>
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications"
                                            checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                        data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary"
                                        data-kt-menu-dismiss="true">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_create_app">Create</a>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <div class="row gy-5 g-xl-8">
                    <div class="col-xl-4">
                        <div class="card card-xl-stretch">
                            <div class="card-header border-0 bg-danger py-5">
                                <h3 class="card-title fw-bolder text-white">Company Name</h3>
                                <div class="card-toolbar">
                                    <button type="button"
                                        class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5"
                                                        rx="1" fill="currentColor" />
                                                    <rect x="14" y="5" width="5" height="5"
                                                        rx="1" fill="currentColor" opacity="0.3" />
                                                    <rect x="5" y="14" width="5" height="5"
                                                        rx="1" fill="currentColor" opacity="0.3" />
                                                    <rect x="14" y="14" width="5" height="5"
                                                        rx="1" fill="currentColor" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                        data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Options
                                            </div>
                                        </div>
                                        <div class="separator mb-3 opacity-75"></div>
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="card-rounded-bottom bg-danger" data-kt-color="danger" style="height: 75px">
                                </div>
                                <div class="card-p mt-n20 position-relative">
                                    <div class="row g-0">
                                        <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                                            <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect x="8" y="9" width="3" height="10"
                                                        rx="1.5" fill="currentColor" />
                                                    <rect opacity="0.5" x="13" y="5" width="3"
                                                        height="14" rx="1.5" fill="currentColor" />
                                                    <rect x="18" y="11" width="3" height="8"
                                                        rx="1.5" fill="currentColor" />
                                                    <rect x="3" y="13" width="3" height="6"
                                                        rx="1.5" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <div class="m-0">
                                                <span class="fw-boldest d-block fs-2qx lh-1 ls-n1 mb-1 text-warning"
                                                    style="color: #5e6278">{{ $branch ?? 'n/a' }}</span>
                                            </div>
                                            <a href="{{ route('branch.index') }}"
                                                class="text-warning fw-bold fs-6">Branch</a>
                                        </div>
                                        <div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
                                            <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <div class="m-0">
                                                <span class="fw-boldest d-block fs-2qx lh-1 ls-n1 mb-1 text-primary"
                                                    style="color: #5e6278">{{ $department ?? 'n/a' }}</span>
                                            </div>
                                            <a href="{{ route('department.index') }}"
                                                class="text-primary fw-bold fs-6">Department</a>
                                        </div>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
                                            <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <div class="m-0">
                                                <span class="fw-boldest d-block fs-2qx lh-1 ls-n1 mb-1 text-danger"
                                                    style="color: #5e6278">{{ $employee ?? 'n/a' }}</span>
                                            </div>
                                            <a href="{{ route('employee.index') }}"
                                                class="text-danger fw-bold fs-6 mt-2">Department Employee</a>
                                        </div>
                                        <div class="col bg-light-success px-6 py-8 rounded-2">
                                            <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                        fill="currentColor" />
                                                    <path opacity="0.3"
                                                        d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <div class="m-0">
                                                <span class="fw-boldest d-block fs-2qx lh-1 ls-n1 mb-1 text-success"
                                                    style="color: #5e6278">{{ $total_employee ?? 'n/a' }}</span>
                                            </div>
                                            <a href="{{ route('employee.index') }}"
                                                class="text-success fw-bold fs-6 mt-2">All Employee</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card card-xl-stretch mb-xl-8">
                            <div class="card-header border-0">
                                <h3 class="card-title fw-bolder text-dark">
                                    Present ({{ $present->count() ?? 'n/a' }})
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        aria-label="Shifts must be assigned to the employee"
                                        data-bs-original-title="Shifts must be assigned to the employee"
                                        data-kt-initialized="1"></i>
                                </h3>
                                <div class="card-toolbar">
                                    <button
                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-overflow="true">
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20"
                                                    height="20" rx="4" fill="currentColor" />
                                                <rect x="11" y="11" width="2.6" height="2.6"
                                                    rx="1.3" fill="currentColor" />
                                                <rect x="15" y="11" width="2.6" height="2.6"
                                                    rx="1.3" fill="currentColor" />
                                                <rect x="7" y="11" width="2.6" height="2.6"
                                                    rx="1.3" fill="currentColor" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                        data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Options
                                            </div>
                                        </div>
                                        <div class="separator mb-3 opacity-75"></div>
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Branch 1</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Department 1</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Department 2</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Branch 2</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Department 1</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Branch 2</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">Other</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-2">
                                <div class="table-responsive">
                                    <table
                                        class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 datatable-setting-1">
                                        <thead hidden>
                                            <tr class="text-start text-gray-800 fw-bolder fs-7 text-uppercase gs-0">
                                                <th>#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($present as $item)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="symbol symbol-45px me-5">
                                                                <img src="{{ $item->employee->getFirstMediaUrl('image') }}"
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bolder text-hover-primary fs-6">
                                                                    {{ $item->employee->full_name }}
                                                                </a>
                                                                <span
                                                                    class="text-muted fw-bold text-muted d-block fs-7">{{ isset($item->employee->designation->title) ? $item->employee->designation->title : '' }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card card-xl-stretch mb-xl-8">
                            <div class="card-header border-0">
                                <h3 class="card-title fw-bolder text-dark">
                                    Absent ({{ $absent->count() ?? 'n/a' }})
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        aria-label="Shifts musht be assigned to the employee"
                                        data-bs-original-title="Shifts must be assigned to the employee"
                                        data-kt-initialized="1"></i>
                                </h3>
                                <div class="card-toolbar">
                                    <button
                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-overflow="true">
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20"
                                                    height="20" rx="4" fill="currentColor" />
                                                <rect x="11" y="11" width="2.6" height="2.6"
                                                    rx="1.3" fill="currentColor" />
                                                <rect x="15" y="11" width="2.6" height="2.6"
                                                    rx="1.3" fill="currentColor" />
                                                <rect x="7" y="11" width="2.6" height="2.6"
                                                    rx="1.3" fill="currentColor" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                        data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Options
                                            </div>
                                        </div>
                                        <div class="separator mb-3 opacity-75"></div>
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Company 1</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-end">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Branch 1</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Department 1</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Department 2</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Department 2</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-end">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Branch 2</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Department 1</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Department 2</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Department 2</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Company 2</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-end">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Branch 1</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Department 1</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Department 2</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Department 2</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-end">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Branch 2</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Department 1</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Department 2</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Department 2</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">Other</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-2">
                                <div class="table-responsive">
                                    <table
                                        class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 datatable-setting-1">
                                        <thead hidden>
                                            <tr class="text-start text-gray-800 fw-bolder fs-7 text-uppercase gs-0">
                                                <th>#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($absent as $item)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="symbol symbol-45px me-5">
                                                                <img src="{{ $item->employee->getFirstMediaUrl('image') }}"
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bolder text-hover-primary fs-6">
                                                                    {{ $item->employee->full_name }}
                                                                </a>
                                                                <span
                                                                    class="text-muted fw-bold text-muted d-block fs-7">{{ isset($item->employee->designation->title) ? $item->employee->designation->title : '' }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-5 g-xl-8">
                    <div class="col-xl-8">
                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                            <div class="card-header border-0">
                                <h3 class="card-title fw-bolder text-dark">Upcoming Events</h3>

                            </div>
                            <div class="card-body py-3">
                                <div class="table-responsive">
                                    <table
                                        class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 datatable-setting-1">
                                        <thead>
                                            <tr class="fs-7 fw-bolder border-0 text-gray-400">
                                                <th class="min-w-150px">EVENT</th>
                                                <th class="text-end min-w-150px">DATE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($event as $item)
                                                <tr>
                                                    <td class="">
                                                        <a href="#"
                                                            class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">
                                                            {{ $item->name }}
                                                            @if ($item->type == 'birthday')
                                                                <span class="badge badge-light-warning">Birthday</span>
                                                            @elseif ($item->type == 'holiday')
                                                                <span class="badge badge-light-success">Holiday</span>
                                                            @endif
                                                        </a>
                                                    </td>
                                                    <td class="pe-0">
                                                        <div class="d-flex justify-content-end">
                                                            <span
                                                                class="text-gray-800 fw-bolder fs-6 me-1">{{ $item->date }}</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card card-xl-stretch mb-xl-8">
                            <div class="card-header border-0">
                                <h3 class="card-title fw-bolder text-dark">Leave ({{ $leave->count() }})</h3>
                            </div>
                            <div class="card-body pt-2">
                                <div class="table-responsive">
                                    <table
                                        class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 datatable-setting-1">
                                        <thead hidden>
                                            <tr class="text-start text-gray-800 fw-bolder fs-7 text-uppercase gs-0">
                                                <th>#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($leave as $item)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bolder text-hover-primary fs-6 my-4">
                                                                    {{ $item->name }}
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-dark">My Calendar</span>
                            <span class="text-muted mt-1 fw-bold fs-7">Preview monthly events</span>
                        </h3>
                        <div class="card-toolbar">
                            <a href="../../demo1/dist/apps/calendar.html" class="btn btn-primary">Manage Calendar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="kt_calendar_widget_1"></div>
                    </div>
                </div>
                <div class="modal fade" id="kt_modal_add_event" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <div class="modal-content">
                            <form class="form" action="#" id="kt_modal_add_event_form">
                                <div class="modal-header">
                                    <h2 class="fw-bolder" data-kt-calendar="title">Add Event</h2>
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                        id="kt_modal_add_event_close">
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                    height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                                    fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16" height="2"
                                                    rx="1" transform="rotate(45 7.41422 6)"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="modal-body py-10 px-lg-17">
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold required mb-2">Event Name</label>
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="calendar_event_name" />
                                    </div>
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold mb-2">Event Description</label>
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="calendar_event_description" />
                                    </div>
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold mb-2">Event Location</label>
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="calendar_event_location" />
                                    </div>
                                    <div class="fv-row mb-9">
                                        <label class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="kt_calendar_datepicker_allday" />
                                            <span class="form-check-label fw-bold" for="kt_calendar_datepicker_allday">All
                                                Day</span>
                                        </label>
                                    </div>
                                    <div class="row row-cols-lg-2 g-10">
                                        <div class="col">
                                            <div class="fv-row mb-9">
                                                <label class="fs-6 fw-bold mb-2 required">Event Start Date</label>
                                                <input class="form-control form-control-solid"
                                                    name="calendar_event_from_date" placeholder="Pick a start date"
                                                    id="kt_calendar_datepicker_from_date" />
                                            </div>
                                        </div>
                                        <div class="col" data-kt-calendar="datepicker">
                                            <div class="fv-row mb-9">
                                                <label class="fs-6 fw-bold mb-2">Event Start Time</label>
                                                <input class="form-control form-control-solid"
                                                    name="calendar_event_start_time" placeholder="Pick a start time"
                                                    id="kt_calendar_datepicker_start_time" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-cols-lg-2 g-10">
                                        <div class="col">
                                            <div class="fv-row mb-9">
                                                <label class="fs-6 fw-bold mb-2 required">Event End Date</label>
                                                <input class="form-control form-control-solid"
                                                    name="calendar_event_to_date" placeholder="Pick a end date"
                                                    id="kt_calendar_datepicker_to_date" />
                                            </div>
                                        </div>
                                        <div class="col" data-kt-calendar="datepicker">
                                            <div class="fv-row mb-9">
                                                <label class="fs-6 fw-bold mb-2">Event End Time</label>
                                                <input class="form-control form-control-solid"
                                                    name="calendar_event_end_time" placeholder="Pick a end time"
                                                    id="kt_calendar_datepicker_end_time" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer flex-center">
                                    <button type="reset" id="kt_modal_add_event_cancel"
                                        class="btn btn-light me-3">Cancel</button>
                                    <button type="button" id="kt_modal_add_event_submit" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="kt_modal_view_event" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <div class="modal-content">
                            <div class="modal-header border-0 justify-content-end">
                                <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-primary me-2"
                                    data-bs-toggle="tooltip" data-bs-dismiss="click" title="Edit Event"
                                    id="kt_modal_view_event_edit">
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                fill="currentColor" />
                                            <path
                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-danger me-2"
                                    data-bs-toggle="tooltip" data-bs-dismiss="click" title="Delete Event"
                                    id="kt_modal_view_event_delete">
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                fill="currentColor" />
                                            <path opacity="0.5"
                                                d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                fill="currentColor" />
                                            <path opacity="0.5"
                                                d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="btn btn-icon btn-sm btn-color-gray-500 btn-active-icon-primary"
                                    data-bs-toggle="tooltip" title="Hide Event" data-bs-dismiss="modal">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                                fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2"
                                                rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="modal-body pt-0 pb-20 px-lg-17">
                                <div class="d-flex">
                                    <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                fill="currentColor" />
                                            <path
                                                d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                fill="currentColor" />
                                            <path
                                                d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <div class="mb-9">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="fs-3 fw-bolder me-3" data-kt-calendar="event_name"></span>
                                            <span class="badge badge-light-success" data-kt-calendar="all_day"></span>
                                        </div>
                                        <div class="fs-6" data-kt-calendar="event_description"></div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="svg-icon svg-icon-1 svg-icon-success me-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <circle fill="currentColor" cx="12" cy="12" r="8" />
                                        </svg>
                                    </span>
                                    <div class="fs-6">
                                        <span class="fw-bolder">Starts</span>
                                        <span data-kt-calendar="event_from_date"></span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-9">
                                    <span class="svg-icon svg-icon-1 svg-icon-danger me-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <circle fill="currentColor" cx="12" cy="12" r="8" />
                                        </svg>
                                    </span>
                                    <div class="fs-6">
                                        <span class="fw-bolder">Ends</span>
                                        <span data-kt-calendar="event_to_date"></span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                fill="currentColor" />
                                            <path
                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <div class="fs-6" data-kt-calendar="event_location"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(".datatable-setting-1").DataTable({
                "scrollY": "300px",
                "scrollCollapse": true,
                "paging": false,
                "language": {
                    "lengthMenu": "Show _MENU_",
                },
                "dom": "<'row'" +
                    // "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                    "<'col-sm-12 d-flex align-items-center justify-content-end'f>" +
                    ">" +

                    "<'table-responsive'tr>" +

                    "<'row'" +
                    // "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                    "<'col-sm-12 col-md-12 d-flex align-items-center justify-content-center'p>" +
                    ">"
            });
        })
    </script>
@endSection

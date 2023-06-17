@extends('layouts.app')
@section('event', 'active')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Event</h1>
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Event</li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-dark">Edit</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    {{-- @can('view-event') --}}
                        <div class="m-0">
                            <a href="{{ route('event.index') }}"
                                class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder">
                                <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                            fill="black"></path>
                                        <path opacity="0.3"
                                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                                List
                            </a>
                        </div>
                    {{-- @endcan --}}
                    {{-- @can('add-event') --}}
                        <a href="{{ route('event.create') }}" class="btn btn-sm btn-primary">Create</a>
                    {{-- @endcan --}}
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <form id="event_form" class="form d-flex flex-column flex-lg-row" method="POST"
                    action="{{ route('event.update', $event->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <span class="mt-1 fs-7 text-danger">Fields with asterisk<span class="required"></span>
                                        are required </span>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Name</label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        placeholder="Event Title" value="{{ old('title', $event->title) }}" required />
                                </div>
                                @php
                                    $date = $event
                                @endphp
                                @include('partials.date-range.html')
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Duration</label>
                                    <div class="d-flex">
                                        <input type="text" id="duration" name="duration"
                                            class="form-control" value="{{ old('duration', $event->duration) }}" readonly />
                                    </div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Status</label>
                                    <div class="mb-5 mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="1" id="active" name="status" required {{ $event->status == 1 ? 'checked' : '' }} />
                                            <label class="form-check-label" for="active">
                                                Active
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="0" id="inactive" name="status" {{ $event->status != 1 ? 'checked' : '' }} />
                                            <label class="form-check-label" for="inactive">
                                                Inactive
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('event.index') }}" id="event_cancel"
                                class="btn btn-light me-5">Cancel</a>
                            <button type="submit" id="event_submit" class="btn btn-primary">
                                <span class="indicator-label">Save Changes</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endSection

@section('script')
    <script>
        englishToNepaliDatePicker($('.from_date'), $('.nepali_from_date'), function() {
            dateDiff();
        });
        nepaliToEnglishDatepicker($('.nepali_from_date'), $('.from_date'), function() {
            dateDiff();
        });
        englishToNepaliDatePicker($('.to_date'), $('.nepali_to_date'), function() {
            dateDiff();
        });
        nepaliToEnglishDatepicker($('.nepali_to_date'), $('.to_date'), function() {
            dateDiff();
        });
        
        function dateDiff() {
            const date1 = new Date($('.from_date').val() ? $('.from_date').val() : $('.to_date').val());
            const date2 = new Date($('.to_date').val() ? $('.to_date').val() : $('.from_date').val());
            const diffTime = Math.abs(date2 - date1);
            const days = (Math.ceil(diffTime / (1000 * 60 * 60 * 24))) + 1;
            $('#duration').val(days);
        }
    </script>
@endsection

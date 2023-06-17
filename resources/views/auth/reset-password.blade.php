@extends('auth.layouts.app')

@section('content')
<form class="form w-100" novalidate="novalidate" id="kt_new_password_form">
    <div class="text-center mb-10">
        <h1 class="text-dark mb-3">Setup New Password</h1>
        <div class="text-gray-400 fw-bold fs-4">Already have reset your password ?
        <a href="{{ route('login') }}" class="link-primary fw-bolder">Sign in here</a></div>
    </div>
    <div class="mb-10 fv-row" data-kt-password-meter="true">
        <div class="mb-1">
            <label class="form-label fw-bolder text-dark fs-6">Password</label>
            <div class="position-relative mb-3">
                <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password" autocomplete="off" />
                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                    <i class="bi bi-eye-slash fs-2"></i>
                    <i class="bi bi-eye fs-2 d-none"></i>
                </span>
            </div>
            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
            </div>
        </div>
        <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
    </div>
    <div class="fv-row mb-10">
        <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
        <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm-password" autocomplete="off" />
    </div>
    <div class="fv-row mb-10">
        <div class="form-check form-check-custom form-check-solid form-check-inline">
            <input class="form-check-input" type="checkbox" name="toc" value="1" />
            <label class="form-check-label fw-bold text-gray-700 fs-6">I Agree &amp;
            <a href="#" class="ms-1 link-primary">Terms and conditions</a>.</label>
        </div>
    </div>
    <div class="text-center">
        <button type="button" id="kt_new_password_submit" class="btn btn-lg btn-primary fw-bolder">
            <span class="indicator-label">Submit</span>
            <span class="indicator-progress">Please wait...
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
    </div>
</form>
@endsection

@section('script')
    @error('password')
    <script>
        toastr.error('{{ $message }}');
    </script>
    @enderror
@endsection
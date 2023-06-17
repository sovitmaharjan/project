<div class="fv-row w-100 flex-md-root">
    <label class="required form-label">Employee</label>
    <div class="d-flex">
        <select class="form-select employee" id="employee" name="employee" data-control="select2" data-hide-search="false"
            data-placeholder="Select Employee" autocomplete="off" required>
            <option></option>
            @foreach ($employee as $item)
                <option value="{{ $item->id }}" @selected(old('employee', isset($dropdown['employee_id']) ? $dropdown['employee_id'] : '') == $item->id)>
                    {{ $item->full_name }}
                </option>
            @endforeach
        </select>
    </div>
</div>

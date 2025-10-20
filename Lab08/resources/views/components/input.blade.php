
@props(['name', 'label', 'type' => 'text', 'value' => ''])
<div class="mb-2">
    <label>{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}" class="form-control" />
    @error($name)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
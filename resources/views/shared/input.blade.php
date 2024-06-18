@php
$class ??= '';
$name ??= '';
$type ??= 'text';
$value ??= '';
$label ??= ucfirst($name);

@endphp
<div @class(['form-group mb-3', $class])>
    <labe for="{{ $name }}">{{ $label }}</labe>
    @if( $name === 'describ' )
        <textarea class = "form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}">{{ old($name,$value) }}</textarea>
        @error($name)
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    @else
        <input
            class = "form-control @error($name) is-invalid @enderror"
            id="{{ $name }}" type="{{ $type }}"
            name="{{ $name }}"
            value="{{ old($name,$value) }}" />
        @error($name)
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    @endif
</div>


<div {!! $wrapperAttributes !!}>
    <div class="checkable-title">{{ $label }}</div>
    @foreach($value as $val)
        @if($vertical) <p> @else <span class="checkable"> @endif
            <input type="checkbox" name="{{ $name }}" value="{{ $val['value'] }}" id="form-field-{{ $name }}-{{ $val['value'] }}">
            <label {!! $labelAttributes !!} for="form-field-{{ $name }}-{{ $val['value'] }}">{{ $val['label'] }}</label>
            @if($errors->has($name))
                <span class="help is-danger">{{ $errors->first($name) }}</span>
            @endif
            @if($vertical) </p> @else </span> @endif
    @endforeach
</div>
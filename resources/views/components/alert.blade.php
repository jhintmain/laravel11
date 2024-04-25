<div {{ $attributes->merge(['class' => 'alert alert-'.$type]) }}>
    {{$type}} message here<br>
    {{ $message }}<br>
    {{ $etc }}<br>
    {{ $userId }}<br>
    @if ($slot->isEmpty())
        This is default content if the slot is empty.
    @else
        {{ $slot }}
    @endif
</div>

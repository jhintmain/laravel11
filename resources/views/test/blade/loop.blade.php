@extends('layouts.master')
@include('test.blade.navi')

@php
    $users = [
        (object) ['id' => 1, 'name' => 'John Doe'],
        (object) ['id' => 2, 'name' => 'Jane Doe'],
        (object) ['id' => 3, 'name' => 'Johnny Doe'],
    ];

    $j = 0;
@endphp

@section('content')
    <div class="container">
        <pre>
        @for ($i = 0; $i < 10; $i++)
                The current value is {{ $i }}
            @endfor
        </pre>

        <pre>
        @foreach ($users as $user)
                @if ($loop->first)
                    This is the first iteration.
                @endif
                This is user {{ $user->id }}
                @if ($loop->last)
                    This is the last iteration.
                @endif
            @endforeach
        </pre>
        <pre>
        @forelse ($users as $user)
                <li>{{ $user->name }}</li>
            @empty
                <p>No users</p>
            @endforelse
        </pre>


        <pre>
        @while ($j < 2)

                {{ $j++ }}
                <p>I'm looping forever.</p>
            @endwhile
        </pre>
    </div>
@endsection



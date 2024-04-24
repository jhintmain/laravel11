@extends('layouts.master')

@section('content')
    <div class="container">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>address</th>
                <th>status</th>
                <th>create_at</th>
                <th>update_at</th>
                <th>delete_at</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach($members as $member)
                <tr>
                    <td>{{$member->id}}</td>
                    <td>{{$member->name}}</td>
                    <td>{{$member->email}}</td>
                    <td>{{$member->address}}</td>
                    <td>{{$member->status}}</td>
                    <td>{{$member->created_at}}</td>
                    <td>{{$member->updated_at}}</td>
                    <td>{{$member->deleted_at ?? '-'}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="pagination">
            <!-- 첫 페이지 링크 -->
            <li class="page-item {{ $members->onFirstPage() ? 'disabled' : '' }}" aria-disabled="{{ $members->onFirstPage() ? 'true' : 'false' }}">
                <a class="page-link" href="{{ $members->url(1) }}" rel="prev">&laquo;&laquo;</a>
            </li>
            {{ $members->links() }}
            <!-- 마지막 페이지 링크 -->
            <li class="page-item {{ $members->currentPage() == $members->lastPage() ? 'disabled' : '' }}" aria-disabled="{{ $members->currentPage() == $members->lastPage() ? 'true' : 'false' }}">
                <a class="page-link" href="{{ $members->url($members->lastPage()) }}" rel="next">&raquo;&raquo;</a>
            </li>
        </div>
    </div>

@endsection


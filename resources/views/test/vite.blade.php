@extends('layouts.master')

@section('content')
    <div class="content">
        Hellow~
        <table class="table table-hover">
            <thead>
            <tr>
                <th>file</th>
                <th>line</th>
                <th>message</th>
            </tr>
            </thead>
            <tbody class="table-group-divider"> <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            </tbody>
        </table>
        <div class="box">box1</div>
        <div class="box">box2</div>
        <div class="box">box3</div>
        <div class="box">box4</div>
    </div>
@endsection

@section('script')
    <script>
        $(".box").html('Hello~2')
    </script>
@endsection


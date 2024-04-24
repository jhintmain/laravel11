<!DOCTYPE html>
<html>
<head>
    <title>500 Internal Server Error</title>
    <style>
        /* 화면 전체를 채우는 flex 컨테이너 설정 */
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        /* 내용을 감싸는 div 요소 설정 */
        .content {
            text-align: center;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/css/app.js'])
</head>

<body>
<div class="content">
    <h1>500 Internal Server Error</h1>
    <img src="https://item.kakaocdn.net/do/7ab82b3c2f19bf65b0cc4ee917ff7a329f5287469802eca457586a25a096fd31" alt="500 Internal Server Error" >
    <div>
        <table class="table">
            <tr>
                <th>file</th>
                <th>line</th>
                <th>message</th>
{{--                <th>description</th>--}}
            </tr>
            <tr>
                <td>{{ $file ?? ''}}</td>
                <td>{{ $line ?? ''}}</td>
                <td>{{ $message ?? ''}}</td>
{{--                <textarea>{{ ($description ?? '') }}</textarea>        --}}
            </tr>
        </table>
    </div>
</div>
</body>
</html>

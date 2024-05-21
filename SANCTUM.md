# Laravel Sanctum
- https://laravel.com/docs/11.x/sanctum#issuing-api-tokens

1. php artisan install:api
2. app/Providers/AppServiceProvider.php <br>
 public function boot(): void
   {
   Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
   }
3. Auth 해야 사용가능하므로 각회원테이블에 맞게 config/auth.php 변경
4. 회원 테이블 model에 HasApiTokens 추가
4. 로그인시 createToken하여 토큰 발급
5. 이후 토큰이용하여 인증시 middleware('auth:sanctum') 추가하여 route/api.php에 선언
6. 토큰 발급이후 middleware('auth:sanctum') 가 필요한 라우터 접근시 header에 4번에서 발급받은 토큰 넣어서 통신해준다

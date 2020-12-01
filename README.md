# basicPhpLaravel
PHP - Laravel 

- [x] 1. composer 설치 - [URL](https://www.lesstif.com/php-and-laravel/php-composer-23757293.html)
- [x] 2. laravel 설치 - [URL](https://laravel.com/)
- [x] 3. laravel 프로젝트 생성 : > laravel new projectName
- [x] 4. laravel 실행 : projectName > php artisan serve
- [x] 5. 라우터 Router : ./routes/web.php
  - return JSON
     - Route::get('/path', function(){return '{"data":"dddata"}'});
  - return HTML : resources/views/fileName.blade.php // 확장자 중요
     - Route::get('/path', function(){return view('fileName');});
  - [Route 코드](https://github.com/doyle-flutter/basicPhpLaravel/blob/master/mylrv/routes/web.php) / [view - HTML 코드](https://github.com/doyle-flutter/basicPhpLaravel/tree/master/mylrv/resources/views)/ 영상 ... 준비중
  - Path & QS & Redirect
  - [코드](https://github.com/doyle-flutter/basicPhpLaravel/blob/master/mylrv/routes/web.php) 
- [ ] 준비중

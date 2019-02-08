# ISTeam 그룹웨어
숭실대학교 프로젝트 소모임 ISTeam 홈페이지 및 그룹웨어입니다. ISTeam 겨울방학 공모전 발표 작품입니다.

## 권장 실행 환경
 - PHP 7.0 이상
 - MySQL
 - Nginx

## 설치 방법
1. `/application/config/database.sample.php` 파일의 이름을 `/application/config/database.php`로 변경하고, `$db['default']` 배열의 내용을 실제 가동될 주소로 수정하세요.
1. `/DATABASE.sql` 파일을 데이터베이스에 Import하세요.
1. `/application/session/` 폴더에 `777` Permission을 적용하세요. (윈도우의 경우, Everyone에 모든 권한을 부여하면 됩니다.)
1. `isteam_memberlist` 테이블에 부원 정보를 Import하세요.

## License
Developed by Hakyeon Kim (aooen.com)
```
The MIT License (MIT)

Copyright (c) 2014 - 2019, British Columbia Institute of Technology

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
```

## Credit
 - CodeIgniter 3.1.10
 - Bootstrap 4.2.1
 - 스포카 한 산스
 - jQuery 3.3.1
 - background by SVGBackgrounds.com
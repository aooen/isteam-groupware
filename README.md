# ISTeam 그룹웨어

## 권장 구동 환경
 - PHP 7.0 이상
 - MySQL
 - Nginx

## 설치 방법
1. `/application/config/database.sample.php` 파일의 이름을 `/application/config/database.php`로 변경하고, `$db['default']` 배열의 내용을 실제 가동될 주소로 수정하세요.
1. `/DATABASE.sql` 파일을 데이터베이스에 Import하세요.
1. `/application/session/` 폴더에 `777` Permission을 적용하세요. (윈도우의 경우, Everyone에 모든 권한을 주면 됩니다.)
1. `isteam_memberlist` 테이블에 부원 정보를 가져오세요.

## License
 - CodeIgniter 3.1.10
 - Bootstrap 4.2.1
 - 스포카 한 산스
 - jQuery 3.3.1
 - background by SVGBackgrounds.com
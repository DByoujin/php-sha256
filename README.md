# PHP에서 SHA256 암호화 하기
## 1. 설명
PHP 소스코드는 다음과 같습니다.
```
<?php
$password = "123456";
$sha256 = hash("sha256", $password);
echo "암호화 전 내용 : ".$password."<br>";
echo "암호화 후 내용 : ".$sha256."<br>";
?>
```
* 변수 $password는 암호화할 내용입니다.
* 변수 $sha256은 변수 $password의 암호화된 내용을 담고 있습니다.
* hash();은 암호화를 도와줄 도구입니다.

> $password에 암호화할 내용을 넣습니다.

> $sha256 변수를 만들고 hash(); 입력후 $password 내용을 불러옵니다.
> ```
> $sha256 = hash("sha256", $password);
> ```

예시 : [LINK](https://esoftkorea.co.kr/github/php-sha256/)

* ```위 내용은 기본적인 내용을 다룹니다. 본인에 상황에 따라 바꾸어 사용하십시오.```

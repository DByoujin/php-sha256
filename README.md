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

> $password에 암호화 하고싶은 내용을 넣습니다.

> 변수 $sha256를 만들고 hash(); 를 입력, $password 내용을 불러옵니다.
> ```
> $sha256 = hash("sha256", $password);
> ```

예시 : [LINK](https://esoftkorea.co.kr/github/php-sha256/)
```
본 웹사이트 내의 SSL은 안전하므로, 접속하셔도 무방합니다.

* ```위 내용은 기본적인 내용을 다룹니다. 본인 또는 웹사이트에 따라 소스코드를 수정해야 할 수 있습니다. 본인에 맞게 수정하여 사용하십시오.```

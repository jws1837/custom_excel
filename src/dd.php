<?php
// HTML 문자열을 포함한 변수
$htmlString = '<p>this <a href="https://example.com">link manse</p>';

// DOMDocument 객체 생성
$dom = new DOMDocument();

// HTML 문자열을 로드
$dom->loadHTML($htmlString);

// 모든 <a> 태그 선택
$aTags = $dom->getElementsByTagName('a');

// <a> 태그를 순회하며 제거
foreach ($aTags as $aTag) {
    $aTag->parentNode->removeChild($aTag);
}

// 결과 HTML 문자열 가져오기
$cleanedHtml = $dom->saveHTML();

// <a> 태그가 제거된 HTML 문자열 출력
echo $cleanedHtml;
?>
<?php
for ($i = 0; $i < 4; $i++) {
  echo $i;
}
echo "<br />";

for ($i = 1; $i <= 5; $i++) {
  echo $i * 2 . '<br />';
}
echo "<br />";

$count = 0;

while ($count < 20) {
  $count += 1;
  echo $count . '<br />';
}
echo "<br />";

$i = 0;
while ($i < 10) {
  if ($i == 5) {
    break;
    // $iが5の時、ループから抜ける。
  }
  echo $i;
  $i++;
}
echo "<br />";

$i = 0;
while ($i < 10) {
  if ($i == 5) {
    $i++;
    continue;
    // $iが5の時、$iに1を足す処理をし、スキップをする。
  }
  echo $i;
  $i++;
}
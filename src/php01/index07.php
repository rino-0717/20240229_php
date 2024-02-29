<?php
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);

echo "<br />";
echo $people[0];

echo "<br />";
$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);
echo $people['person2'];

echo "<br />";
$people = array('Taro', 'Jiro', 'Saburo');

foreach ($people as $person) {
  echo $person;
  echo '<br />';
}

echo "<br />";
$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

foreach ($people as $person => $name) {
  print $person . "は" . $name . "です" . '<br />';
}

echo "<br />";
$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')';
  echo '';
}

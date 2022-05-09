<?php

echo "<li class='submenuunit'><a href='all'>সমস্ত
</a></li><br>";
foreach ($arr as $value) {
    echo "<li class='submenuunit'>
    <a href='category?id=" . $value['id'] . "'>" . $value['name'] . "</a>
    </li>
    <br>";
}

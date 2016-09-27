<?PHP 
 print("EXPERT SYSTEM");
echo "<br \>";
$input = file_get_contents("input.txt");
$raw_input = explode("\n", $input);
$tosolve = array();
foreach ($raw_input as $select){
    $eIndex = strpos($select, '#');
    $conun = substr($select, 0, $eIndex);
    if (empty($conun) === FALSE)
        array_push($tosolve, $conun);
}

function solve($item){
    foreach ($item as $chr){
        if ($chr === '+')
            echo "AND";
        else if ($chr === '|')
            echo "OR";
        else
            echo $chr;
        echo " ";
    }
}
foreach ($tosolve as $test){
    $imp_pos = strpos($test, "=");
    $left = substr($test, 0, $imp_pos);
    $line = explode(" ", $left);
    solve($line);
    echo "implies ";
    $r_side = strpos($test, ">");
    $right = trim(substr($test, $r_side + 1));
    $line2 = 
    solve(explode(" ", $right));
    echo "<br \>";
}
?>
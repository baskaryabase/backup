
<?php

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}


function get_logo($role){

if($role == 'pioneer'){
return URL::asset('/image/pioneers.png');
}elseif ($role == 'founder') {
return URL::asset('/image/founders.png');
}elseif ($role == 'member_partner') {
return URL::asset('/image/member-partner.png');
}elseif ($role == 'honorary') {
return URL::asset('/image/expert.png');
}



}



function get_title($role){

if($role == 'pioneer'){
return 'Pioneer Member';
}elseif ($role == 'founder') {
return 'Founder';
}elseif ($role == 'member_partner') {
return 'Premium Pioneer Member';
}elseif ($role == 'honorary') {
return 'Honorary Pioneer Member';
}
}

?>
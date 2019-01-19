<?php
$name = "Diana Amelia Safitri";
$address = "Bangsa, rt 06/02, kebasen banyumas";
$hobbies = array("Reading", "Traveling", "Design", "Public speaking");
$is_married = false;
$skills = [
    'Web' => ['CSS', 'HTML', 'JavaScript', 'Php'],
    'Other Language' => ['C#', 'VB', 'Java', 'Python'],
    'design' => ['UI&UX']
];
$school = [
    'highSchool' => 'SMK Telkom Purwokerto',
    'university' => '-'
];
function biodata($name, $address, $hobbies, $is_married, $skills, $school){
    return json_encode(array(
        'name' => $name,
        'address' => $address,
        'hobbies' => $hobbies,
        'is_married' => $is_married,
        'school' => $school,
        'skills' => $skills
    ), JSON_PRETTY_PRINT);
}
echo biodata($name, $address, $hobbies, $is_married, $school, $skills);
<?php
// Input 
$bangla_1st_paper = 70;   
$bangla_2nd_paper = 43;
$english_1st_paper = 81;
$english_2nd_paper = 34;
$math = 88;
$higher_math = 68;
$biology = 50;             $biology_particle = 24;
$physics = 65;             $physics_particle = 23;
$chemistry = 67;           $chemistry_particle = 23;
$islam = 80;
$social_scince = 78;



$ban_eng_1st_paper = 100;
$ban_eng_2nd_paper = 50;
$sechand_paper_percentage = (50 * 33)/100;
$ban_eng_total = $ban_eng_1st_paper + $ban_eng_2nd_paper;
$ban_eng_pass_percentage = ($ban_eng_total * 33) / 100;
$all_subject = 100;
$all_subject_pass_percentage = ($all_subject * 33) / 100;
$biology_pphysics_chemistry = 75;
$biology_pphysics_chemistry_pass_percentage = ($biology_pphysics_chemistry * 33) / 100;
$particle = 25;
$particle_pass_percentage = ($particle * 33) / 100;
$b_100 = $bangla_1st_paper + $bangla_2nd_paper;
$b_e_80 = ($ban_eng_total * 80) / 100;
$b_e_70 = ($ban_eng_total * 70) / 100;
$b_e_60 = ($ban_eng_total * 60) / 100;
$b_e_50 = ($ban_eng_total * 50) / 100;
$b_e_40 = ($ban_eng_total * 40) / 100;
$b_e_33 = ($ban_eng_total * 33) / 100;

if($bangla_1st_paper >= 0 && 100 >= $bangla_1st_paper && $bangla_2nd_paper >= 0 && 50 >= $bangla_2nd_paper && $english_1st_paper >= 0 && 100 >= $english_1st_paper && $english_2nd_paper >= 0 && 50 >= $english_2nd_paper && $math  >= 0 && 100 >= $math && $higher_math >= 0 && 100 >= $higher_math && $biology >= 0 && 75 >= $biology && $biology_particle >= 0 && 25 >= $biology_particle && $physics >= 0 && 75 >= $physics && $physics_particle >= 0 && 25 >= $physics_particle && $chemistry >= 0 && 75 >= $chemistry && $chemistry_particle >= 0 && 25 >= $chemistry_particle && $islam >= 0 && 100 >= $islam && $social_scince >= 0 && 100 >= $social_scince){
  
  if($bangla_1st_paper >= 33 && $bangla_2nd_paper >= $sechand_paper_percentage && $english_1st_paper >= 33 && $english_2nd_paper >= $sechand_paper_percentage && $math >= 33 && $higher_math >= 33 && $biology >= $biology_pphysics_chemistry_pass_percentage && $biology_particle >= $particle_pass_percentage && $physics >= $biology_pphysics_chemistry_pass_percentage && $physics_particle >= $particle_pass_percentage && $chemistry >= $biology_pphysics_chemistry_pass_percentage &&  $chemistry_particle >= $particle_pass_percentage && $islam >= 33 && $social_scince>= 33){
  // Bangla
if($all_subject_pass_percentage <= $bangla_1st_paper && $sechand_paper_percentage <= $bangla_2nd_paper){
  
  if($b_e_80 <= $b_100 && $b_100 <= $ban_eng_total){
    echo "Bangla: A+" . "\n";
  }
  elseif($b_e_70 <= $b_100 && $b_e_80 > $b_100 ){
    echo "Bangla: A" . "\n";
  }
  elseif($b_e_60 <= $b_100 && $b_e_70 > $b_100){
    echo "Bangla: A-" . "\n";
  }
  elseif($b_e_50 <= $b_100 && $b_e_60 > $b_100){
    echo "Bangla: B" . "\n";
  }
  elseif($b_e_40 <= $b_100 && $b_e_50 > $b_100){
    echo "Bangla: C" . "\n";
  }
  elseif($b_e_33 <= $b_100 && $b_e_40 > $b_100){
    echo "Bangla: D" . "\n";
  }
}
else{
  echo "Bangla: F" . "\n";
}
// English
$e_100 = $english_1st_paper + $english_2nd_paper;
if($all_subject_pass_percentage <= $english_1st_paper && $sechand_paper_percentage <= $english_2nd_paper){
  
  if($b_e_80 <= $e_100 && $e_100 <= $ban_eng_total){
    echo "English: A+" . "\n";
  }
  elseif($b_e_70 <= $e_100 && $b_e_80 > $e_100 ){
    echo "English: A" . "\n";
  }
  elseif($b_e_60 <= $e_100 && $b_e_70 > $e_100){
    echo "English: A-" . "\n";
  }
  elseif($b_e_50 <= $e_100 && $b_e_60 > $e_100){
    echo "English: B" . "\n";
  }
  elseif($b_e_40 <= $e_100 && $b_e_50 > $e_100){
    echo "English: C" . "\n";
  }
  elseif($b_e_33 <= $e_100 && $b_e_40 > $e_100){
    echo "English: D" . "\n";
  }
}
else{
  echo "English: F" . "\n";
}
// Match
if($math >= 80 && $math <= 100){
  echo "Math: A+" ."\n";
}
elseif($math >= 70 && $math <= 79){
  echo "Math: A" ."\n";
}
elseif($math >= 60 && $math <= 69){
  echo "Math: A-" ."\n";
}
elseif($math >= 50 && $math <= 59){
  echo "Math: B" ."\n";
}
elseif($math >= 40 && $math <= 49){
  echo "Math: C" ."\n";
}
elseif($math >= 33 && $math <= 39){
  echo "Math: D" ."\n";
}
else{
  echo "Math: F" ."\n";
}
// Higher Math
if($higher_math >= 80 && $higher_math <= 100){
  echo "Higher Math: A+" ."\n";
}
elseif($higher_math >= 70 && $higher_math <= 79){
  echo "Higher Math: A" ."\n";
}
elseif($higher_math >= 60 && $higher_math <= 69){
  echo "Higher Math: A-" ."\n";
}
elseif($higher_math >= 50 && $higher_math <= 59){
  echo "Higher Math: B" ."\n";
}
elseif($higher_math >= 40 && $higher_math <= 49){
  echo "Higher Math: C" ."\n";
}
elseif($higher_math >= 33 && $higher_math <= 39){
  echo "Higher Math: D" ."\n";
}
else{
  echo "Higher Math: F" ."\n";
}
// Biology
$total_biology = $biology + $biology_particle;
if($biology_pphysics_chemistry_pass_percentage <= $biology && $particle_pass_percentage <= $biology_particle){
  if($total_biology >= 80 && $total_biology <= 100){
    echo "Bioogy A+" ."\n";
  }
  elseif($total_biology >= 70 && $total_biology <= 79){
    echo "Bioogy A" ."\n";
  }
  elseif($total_biology >= 60 && $total_biology <= 69){
    echo "Bioogy A-" ."\n";
  }
  elseif($total_biology >= 50 && $total_biology <= 59){
    echo "Bioogy B" ."\n";
  }
  elseif($total_biology >= 40 && $total_biology <= 49){
    echo "Bioogy C" ."\n";
  }
  elseif($total_biology >= 33 && $total_biology <= 39){
    echo "Bioogy D" ."\n";
  }
}
else {
  echo "Biology: F" ."\n";
}
// Physics 
$total_physics = $physics + $physics_particle;
if($biology_pphysics_chemistry_pass_percentage <= $physics && $particle_pass_percentage <= $physics_particle){
  if($total_physics >= 80 && $total_physics <= 100){
    echo "Physics: A+" ."\n";
  }
  elseif($total_physics >= 70 && $total_physics <= 79){
    echo "Physics: A" ."\n";
  }
  elseif($total_physics >= 60 && $total_physics <= 69){
    echo "Physics: A-" ."\n";
  }
  elseif($total_physics >= 50 && $total_physics <= 59){
    echo "Physics: B" ."\n";
  }
  elseif($total_physics >= 40 && $total_physics <= 49){
    echo "Physics: C" ."\n";
  }
  elseif($total_physics >= 33 && $total_physics <= 39){
    echo "Physics: D" ."\n";
  }
}
else {
  echo "Physics: F" ."\n";
}
// Chemistry
  $total_chemistry = $chemistry + $chemistry_particle;
if($biology_pphysics_chemistry_pass_percentage <= $chemistry && $particle_pass_percentage <= $chemistry_particle){
  if($total_chemistry >= 80 && $total_chemistry <= 100){
    echo "Chemistry: A+" ."\n";
  }
  elseif($total_chemistry >= 70 && $total_chemistry <= 79){
    echo "Chemistry: A" ."\n";
  }
  elseif($total_chemistry >= 60 && $total_chemistry <= 69){
    echo "Chemistry: A-" ."\n";
  }
  elseif($total_chemistry >= 50 && $total_chemistry <= 59){
    echo "Chemistry: B" ."\n";
  }
  elseif($total_chemistry >= 40 && $total_chemistry <= 49){
    echo "Chemistry: C" ."\n";
  }
  elseif($total_chemistry >= 33 && $total_chemistry <= 39){
    echo "Chemistry: D" ."\n";
  }
}
else {
  echo "Chemistry: F" ."\n";
}
// Islam
if($islam >= 80 && $islam <= 100){
  echo "Islam: A+" ."\n";
}
elseif($islam >= 70 && $islam <= 79){
  echo "Islam: A" ."\n";
}
elseif($islam >= 60 && $islam <= 69){
  echo "Islam: A-" ."\n";
}
elseif($islam >= 50 && $islam <= 59){
  echo "Islam: B" ."\n";
}
elseif($islam >= 40 && $islam <= 49){
  echo "Islam: C" ."\n";
}
elseif($islam >= 33 && $islam <= 39){
  echo "Islam: D" ."\n";
}
else{
  echo "Islam: F" ."\n";
}
// Social scince
if($social_scince >= 80 && $social_scince <= 100){
  echo "Social scince: A+" ."\n";
}
elseif($social_scince >= 70 && $social_scince <= 79){
  echo "Social scince: A" ."\n";
}
elseif($social_scince >= 60 && $social_scince <= 69){
  echo "Social scince: A-" ."\n";
}
elseif($social_scince >= 50 && $social_scince <= 59){
  echo "Social scince: B" ."\n";
}
elseif($social_scince >= 40 && $social_scince <= 49){
  echo "Social scince: C" ."\n";
}
elseif($social_scince >= 33 && $social_scince <= 39){
  echo "Social scince: D" ."\n";
}
else{
  echo "Social scince: F" ."\n";
}
echo "\n";
// Grade 
$total_mark = $bangla_1st_paper + $bangla_2nd_paper + $english_1st_paper + $english_2nd_paper +  $math + $higher_math + $biology + $biology_particle + $physics + $physics_particle + $chemistry + $chemistry_particle + $islam + $social_scince;

if($total_mark >= 800 && $total_mark <= 1000){
  echo "Your Grade: A+" ."\n" . "Total mark $total_mark";
}
elseif($total_mark >= 700 && $total_mark <= 799){
  echo "Your Grade: A" ."\n" . "Total mark $total_mark";
}
elseif($total_mark >= 600 && $total_mark <= 699){
  echo "Your Grade: A-" ."\n" . "Total mark $total_mark";
}
elseif($total_mark >= 500 && $total_mark <= 599){
  echo "Your Grade: B" ."\n" . "Total mark $total_mark";
}
elseif($total_mark >= 400 && $total_mark <= 499){
  echo "Your Grade: C" ."\n" . "Total mark $total_mark";
}
elseif($total_mark >= 333 && $total_mark <= 399){
  echo "Your Grade: D" ."\n" . "Total mark $total_mark";
}
else{
  echo "Your Grade: F" ."\n" . "Total mark $total_mark";
} 
}
else{
  echo "Your Grade: F" ."\n" ;
}
}
else{
  echo "Error ! Invalid number. Please try again\n";
}


?>
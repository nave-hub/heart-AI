<?php 
if(isset($_POST['button'])){	
	if(empty($_POST['heart_failure1'])){
$heart_failure1 = "0";
}
else
{
if($_POST['heart_failure1'] == "heart failure"){
$heart_failure1= "20";	
}
else
{
$heart_failure1 = "0";	
}
}

	if(empty($_POST['heart_failure2'])){
$heart_failure2 = "0";
}
else
{
if($_POST['heart_failure2'] == "heart failure"){
$heart_failure2= "20";	
}
else
{
$heart_failure2 = "0";	
}
}

if(empty($_POST['heart_failure3'])){
$heart_failure3 = "0";
}
else
{
if($_POST['heart_failure3'] == "heart failure"){
$heart_failure3= "20";	
}
else
{
$heart_failure3 = "0";	
}
}
	
if(empty($_POST['heart_failure4'])){
$heart_failure4 = "0";
}
else
{
if($_POST['heart_failure4'] == "heart failure"){
$heart_failure4= "20";	
}
else
{
$heart_failure4 = "0";	
}
}

if(empty($_POST['heart_failure5'])){
$heart_failure5 = "0";
}
else
{
if($_POST['heart_failure5'] == "heart failure"){
$heart_failure5= "20";	
}
else
{
$heart_failure5 = "0";	
}
}
$heart_failure_ans = $heart_failure1 + $heart_failure2 + $heart_failure3 + $heart_failure4 + $heart_failure5;	




if(empty($_POST['stroke1'])){
$stroke1 = "0";
}
else
{
if($_POST['stroke1'] == "stroke"){
$stroke1= "12.5";	
}
else
{
$stroke1 = "0";	
}
}



if(empty($_POST['stroke2'])){
$stroke2 = "0";
}
else
{
if($_POST['stroke2'] == "stroke"){
$stroke2= "12.5";	
}
else
{
$stroke2 = "0";	
}
}



if(empty($_POST['stroke3'])){
$stroke3 = "0";
}
else
{
if($_POST['stroke3'] == "stroke"){
$stroke3= "12.5";	
}
else
{
$stroke3 = "0";	
}
}


if(empty($_POST['stroke4'])){
$stroke4 = "0";
}
else
{
if($_POST['stroke4'] == "stroke"){
$stroke4= "12.5";	
}
else
{
$stroke4 = "0";	
}
}



if(empty($_POST['stroke7'])){
$stroke7 = "0";
}
else
{
if($_POST['stroke7'] == "stroke"){
$stroke7= "12.5";	
}
else
{
$stroke7 = "0";	
}
}


if(empty($_POST['coronary_heart_disease1'])){
$coronary_heart_disease1 = "0";
}
else
{
if($_POST['coronary_heart_disease1'] == "coronary heart disease"){
$coronary_heart_disease1= "12.5";	
}
else
{
$coronary_heart_disease1 = "0";	
}
}

if(empty($_POST['coronary_heart_disease2'])){
$coronary_heart_disease2 = "0";
}
else
{
if($_POST['coronary_heart_disease2'] == "coronary heart disease"){
$coronary_heart_disease2= "12.5";	
}
else
{
$coronary_heart_disease2 = "0";	
}
}

if(empty($_POST['coronary_heart_disease3'])){
$coronary_heart_disease3 = "0";
}
else
{
if($_POST['coronary_heart_disease3'] == "coronary heart disease"){
$coronary_heart_disease3= "12.5";	
}
else
{
$coronary_heart_disease3 = "0";	
}
}

if(empty($_POST['coronary_heart_disease4'])){
$coronary_heart_disease4 = "0";
}
else
{
if($_POST['coronary_heart_disease4'] == "coronary heart disease"){
$coronary_heart_disease4= "12.5";	
}
else
{
$coronary_heart_disease4 = "0";	
}
}

if(empty($_POST['coronary_heart_disease5'])){
$coronary_heart_disease5 = "0";
}
else
{
if($_POST['coronary_heart_disease5'] == "coronary heart disease"){
$coronary_heart_disease5= "12.5";	
}
else
{
$coronary_heart_disease5 = "0";	
}
}

if(empty($_POST['coronary_heart_disease6'])){
$coronary_heart_disease6 = "0";
}
else
{
if($_POST['coronary_heart_disease6'] == "coronary heart disease"){
$coronary_heart_disease6= "12.5";	
}
else
{
$coronary_heart_disease6 = "0";	
}
}

if(empty($_POST['coronary_heart_disease7'])){
$coronary_heart_disease7 = "0";
}
else
{
if($_POST['coronary_heart_disease7'] == "coronary heart disease"){
$coronary_heart_disease7= "12.5";	
}
else
{
$coronary_heart_disease7 = "0";	
}
}
if(empty($_POST['coronary_heart_disease8'])){
$coronary_heart_disease8 = "0";
}
else
{
if($_POST['coronary_heart_disease8'] == "coronary heart disease"){
$coronary_heart_disease8= "12.5";	
}
else
{
$coronary_heart_disease8 = "0";	
}
}


if(empty($_POST['Cor_pulmonale1'])){
$Cor_pulmonale1 = "0";
}
else
{
if($_POST['Cor_pulmonale1'] == "Cor pulmonale"){
$Cor_pulmonale1= "10";	
}
else
{
$Cor_pulmonale1 = "0";	
}
}

if(empty($_POST['Cor_pulmonale2'])){
$Cor_pulmonale2 = "0";
}
else
{
if($_POST['Cor_pulmonale2'] == "Cor pulmonale"){
$Cor_pulmonale2= "10";	
}
else
{
$Cor_pulmonale2 = "0";	
}
}
if(empty($_POST['Cor_pulmonale3'])){
$Cor_pulmonale3 = "0";
}
else
{
if($_POST['Cor_pulmonale3'] == "Cor pulmonale"){
$Cor_pulmonale3= "10";	
}
else
{
$Cor_pulmonale3 = "0";	
}
}
if(empty($_POST['Cor_pulmonale4'])){
$Cor_pulmonale4 = "0";
}
else
{
if($_POST['Cor_pulmonale4'] == "Cor pulmonale"){
$Cor_pulmonale4= "10";	
}
else
{
$Cor_pulmonale4 = "0";	
}
}
if(empty($_POST['Cor_pulmonale5'])){
$Cor_pulmonale5 = "0";
}
else
{
if($_POST['Cor_pulmonale5'] == "Cor pulmonale"){
$Cor_pulmonale5= "10";	
}
else
{
$Cor_pulmonale5 = "0";	
}
}
if(empty($_POST['Cor_pulmonale6'])){
$Cor_pulmonale6 = "0";
}
else
{
if($_POST['Cor_pulmonale6'] == "Cor pulmonale"){
$Cor_pulmonale6= "10";	
}
else
{
$Cor_pulmonale6 = "0";	
}
}
if(empty($_POST['Cor_pulmonale7'])){
$Cor_pulmonale7 = "0";
}
else
{
if($_POST['Cor_pulmonale7'] == "Cor pulmonale"){
$Cor_pulmonale7= "10";	
}
else
{
$Cor_pulmonale7 = "0";	
}
}
if(empty($_POST['Cor_pulmonale8'])){
$Cor_pulmonale8 = "0";
}
else
{
if($_POST['Cor_pulmonale8'] == "Cor pulmonale"){
$Cor_pulmonale8= "10";	
}
else
{
$Cor_pulmonale8 = "0";	
}
}
if(empty($_POST['Cor_pulmonale9'])){
$Cor_pulmonale9 = "0";
}
else
{
if($_POST['Cor_pulmonale9'] == "Cor pulmonale"){
$Cor_pulmonale9= "10";	
}
else
{
$Cor_pulmonale9 = "0";	
}
}
if(empty($_POST['Cor_pulmonale10'])){
$Cor_pulmonale10 = "0";
}
else
{
if($_POST['Cor_pulmonale10'] == "Cor pulmonale"){
$Cor_pulmonale10= "10";	
}
else
{
$Cor_pulmonale10 = "0";	
}
}

if(empty($_POST['cardiac_dysrhythmia'])){
$cardiac_dysrhythmia = "0";
}
else
{
if($_POST['cardiac_dysrhythmia'] == "cardiac dysrhythmia"){
$cardiac_dysrhythmia= "100";	
}
else
{
$cardiac_dysrhythmia = "0";	
}
}

$Cor_pulmonale_ans = $Cor_pulmonale1 + $Cor_pulmonale2 + $Cor_pulmonale3 + $Cor_pulmonale4 + $Cor_pulmonale5 + $Cor_pulmonale6 + $Cor_pulmonale7 + $Cor_pulmonale8 + $Cor_pulmonale9 + $Cor_pulmonale10;

echo "Cor_pulmonale = ".$Cor_pulmonale_ans."<br>";

echo "cardiac_dysrhythmia = ".$cardiac_dysrhythmia."<br>";

$coronary_heart_disease_ans = $coronary_heart_disease1 + $coronary_heart_disease2 + $coronary_heart_disease3 + $coronary_heart_disease4 + $coronary_heart_disease5 + $coronary_heart_disease6 + $coronary_heart_disease7+ $coronary_heart_disease8;

echo $coronary_heart_disease_ans."<br>";
echo $heart_failure_ans;

$stroke_ans = $stroke1 + $stroke2 + $stroke3 + $stroke4  + $coronary_heart_disease1 +  $coronary_heart_disease2 + $stroke7;

echo "<br>".$stroke_ans;


if(($heart_failure_ans)==($stroke_ans) && ($heart_failure_ans)==($coronary_heart_disease_ans)  && ($heart_failure_ans)==($Cor_pulmonale_ans) && ($heart_failure_ans)==($cardiac_dysrhythmia) && ($stroke_ans)==($coronary_heart_disease_ans) && ($stroke_ans)==($Cor_pulmonale_ans) && ($stroke_ans)==($cardiac_dysrhythmia) && ($coronary_heart_disease_ans)==($Cor_pulmonale_ans) && ($coronary_heart_disease_ans)==($cardiac_dysrhythmia) && ($Cor_pulmonale_ans) == ($cardiac_dysrhythmia))
{
	echo "go and see doctor";
}

elseif (($heart_failure_ans) > ($stroke_ans) && ($heart_failure_ans) > ($coronary_heart_disease_ans)){
	
echo "heart_failure";

}
elseif (($stroke_ans) > ($heart_failure_ans) && ($stroke_ans) >($coronary_heart_disease_ans) )
{
echo "stroke";	
}
elseif (($coronary_heart_disease_ans) > ($heart_failure_ans) && ($coronary_heart_disease_ans) >($stroke_ans) )
{
echo "coronary_heart_disease_ans";	
}



	
}


?>
<?php session_start() ?>
<?php 
if(isset($_POST['button'])){	
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
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

if(empty($_POST['stroke1'])){
$stroke1 = "0";
}
else
{
if($_POST['stroke1'] == "stroke"){
$stroke1= "20";	
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
$stroke2= "20";	
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
$stroke3= "20";	
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
$stroke4= "20";	
}
else
{
$stroke4 = "0";	
}
}
if(empty($_POST['stroke5'])){
$stroke5 = "0";
}
else
{
if($_POST['stroke5'] == "stroke"){
$stroke5= "20";	
}
else
{
$stroke5 = "0";	
}
}

if(empty($_POST['coronary_heart_disease1'])){
$coronary_heart_disease1 = "0";
}
else
{
if($_POST['coronary_heart_disease1'] == "coronary heart disease"){
$coronary_heart_disease1= "20";	
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
$coronary_heart_disease2= "20";	
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
$coronary_heart_disease3= "20";	
}
else
{
$coronary_heart_disease3 = "0";	
}
}



if(empty($_POST['cardiac_dysrhythmia1'])){
$cardiac_dysrhythmia1= "0";
}
else
{
if($_POST['cardiac_dysrhythmia1'] == "cardiac dysrhythmia"){
$cardiac_dysrhythmia1= "20";	
}
else
{
$cardiac_dysrhythmia1 = "0";	
}
}

if(empty($_POST['cardiac_dysrhythmia2'])){
$cardiac_dysrhythmia2= "0";
}
else
{
if($_POST['cardiac_dysrhythmia2'] == "cardiac dysrhythmia"){
$cardiac_dysrhythmia2= "20";	
}
else
{
$cardiac_dysrhythmia2 = "0";	
}
}

if(empty($_POST['cardiac_dysrhythmia3'])){
$cardiac_dysrhythmia3= "0";
}
else
{
if($_POST['cardiac_dysrhythmia3'] == "cardiac dysrhythmia"){
$cardiac_dysrhythmia3= "20";	
}
else
{
$cardiac_dysrhythmia3 = "0";	
}
}

if(empty($_POST['cardiac_dysrhythmia4'])){
$cardiac_dysrhythmia4= "0";
}
else
{
if($_POST['cardiac_dysrhythmia4'] == "cardiac dysrhythmia"){
$cardiac_dysrhythmia4= "20";	
}
else
{
$cardiac_dysrhythmia4 = "0";	
}
}




if(empty($_POST['Cor_pulmonale1'])){
$Cor_pulmonale1 = "0";
}
else
{
if($_POST['Cor_pulmonale1'] == "Cor pulmonale"){
$Cor_pulmonale1= "20";	
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
$Cor_pulmonale2= "20";	
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
$Cor_pulmonale3= "20";	
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
$Cor_pulmonale4= "20";	
}
else
{
$Cor_pulmonale4 = "0";	
}
}

$heart_failure_ans = $stroke1 + $heart_failure1 + $heart_failure2 + $heart_failure3 + $heart_failure4;	

$stroke_ans = $stroke1 + $stroke2 + $stroke3 + $stroke4 + $stroke5;

$coronary_heart_disease_ans = $stroke1 + $stroke2 + $coronary_heart_disease1 + $coronary_heart_disease2 + $coronary_heart_disease3;

$Cor_pulmonale_ans = $stroke1 + $Cor_pulmonale1 + $Cor_pulmonale2 + $Cor_pulmonale3 + $Cor_pulmonale4 ;

$cardiac_dysrhythmia =$stroke1+$stroke3+$cardiac_dysrhythmia1+$cardiac_dysrhythmia2+$cardiac_dysrhythmia3;

$total = $stroke1 + $stroke2 + $stroke3 + $stroke4 + $stroke5+$heart_failure1 + $heart_failure2 + $heart_failure3 + $heart_failure4+ $coronary_heart_disease1 + $coronary_heart_disease2 + $coronary_heart_disease3+ $Cor_pulmonale1 + $Cor_pulmonale2 + $Cor_pulmonale3 + $Cor_pulmonale4 +$cardiac_dysrhythmia1+$cardiac_dysrhythmia2+$cardiac_dysrhythmia3;

if($total <=60){
header('location: small.php');
}
elseif(($heart_failure_ans)==($stroke_ans) && ($heart_failure_ans)==($cardiac_dysrhythmia) && ($heart_failure_ans)==($coronary_heart_disease_ans) && ($heart_failure_ans)==($Cor_pulmonale_ans) && ($stroke_ans)==($cardiac_dysrhythmia) && ($stroke_ans)==($coronary_heart_disease_ans) && ($stroke_ans)==($Cor_pulmonale_ans) && ($cardiac_dysrhythmia)==($coronary_heart_disease_ans) && ($cardiac_dysrhythmia)==($Cor_pulmonale_ans) && ($coronary_heart_disease_ans)==($Cor_pulmonale_ans)){
	
	$_SESSION['disease'] = "go and see a doctor";
  $_SESSION['username'] = $_SESSION['username'];
  $_SESSION['password'] = $_SESSION['password'];
	header('location: member_d_result.php');
}
elseif(($heart_failure_ans)>($stroke_ans)&& ($heart_failure_ans)>($cardiac_dysrhythmia) && ($heart_failure_ans)>($coronary_heart_disease_ans) && ($heart_failure_ans)>($Cor_pulmonale_ans)){
	
	$_SESSION['disease'] = "heart failure";
  $_SESSION['username'] = $_SESSION['username'];
  $_SESSION['password'] = $_SESSION['password'];
	header('location: member_d_result.php');
}
elseif(($stroke_ans)>($heart_failure_ans)&& ($stroke_ans)>($cardiac_dysrhythmia) && ($stroke_ans)>($coronary_heart_disease_ans) && ($stroke_ans)>($Cor_pulmonale_ans)){
	
	$_SESSION['disease'] = "stroke";
  $_SESSION['username'] = $_SESSION['username'];
  $_SESSION['password'] = $_SESSION['password'];
	header('location: member_d_result.php');
	

}
elseif(($cardiac_dysrhythmia)>($heart_failure_ans)&& ($cardiac_dysrhythmia)>($stroke_ans) && ($cardiac_dysrhythmia)>($coronary_heart_disease_ans) && ($cardiac_dysrhythmia)>($Cor_pulmonale_ans)){
	
	$_SESSION['disease'] = "cardiac dysrhythmia";
  $_SESSION['username'] = $_SESSION['username'];
  $_SESSION['password'] = $_SESSION['password'];
	header('location: member_d_result.php');
}
elseif(($coronary_heart_disease_ans)>($heart_failure_ans)&& ($coronary_heart_disease_ans)>($stroke_ans) && ($coronary_heart_disease_ans)>($cardiac_dysrhythmia) && ($coronary_heart_disease_ans)>($Cor_pulmonale_ans)){
	
	$_SESSION['disease'] = "coronary heart disease";
  $_SESSION['username'] = $_SESSION['username'];
  $_SESSION['password'] = $_SESSION['password'];
	header('location: member_d_result.php');
}
elseif(($Cor_pulmonale_ans)>($heart_failure_ans)&& ($Cor_pulmonale_ans)>($stroke_ans) && ($Cor_pulmonale_ans)>($cardiac_dysrhythmia) && ($Cor_pulmonale_ans)>($coronary_heart_disease_ans)){
	
$_SESSION['disease'] = "Cor pulmonale";  
  $_SESSION['username'] = $_SESSION['username'];
  $_SESSION['password'] = $_SESSION['password'];
header('location: member_d_result.php');
}

else
{
	
$_SESSION['disease'] = "go and see a doctor";	
  $_SESSION['username'] = $_SESSION['username'];
  $_SESSION['password'] = $_SESSION['password'];
header('location: member_d_result.php');
}












}
?>

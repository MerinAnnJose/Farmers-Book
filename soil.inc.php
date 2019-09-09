<!DOCTYPE html>
<html><head>
<title>crop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
	body{
		background-image: url("heli.jpeg");
	}
</style>
</head><body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">பட்டி</h3>
  <a href="home.php" class="w3-bar-item w3-button">முகப்பு</a>
  <a href="search.php" class="w3-bar-item w3-button">தேடல்</a>
 <a href="contact.php" class="w3-bar-item w3-button">எங்களை தொடர்பு கொள்ள</a>
 <a href="help.html" class="w3-bar-item w3-button">உதவி</a>
</div>

<!-- Page Content -->
<div style="margin-left:25%">

<div class="w3-container w3-teal">
  <h1><center>பயிர் ஆலோசனைகள்</center></h1>
</div>


<?php
	session_start();

	if (isset($_POST['submit'])) {

		include_once 'c:\xampp\htdocs\login\includes\dbh2.inc.php';

		$soil=mysqli_real_escape_string($conn, $_POST['soil']);

		$id=$_SESSION['u_id'];
		$sql="SELECT * FROM users WHERE id='$id'";
		$result = mysqli_query($conn, $sql);
		$resultsCheck= mysqli_num_rows($result);
		if ($resultsCheck > 0){
			$sql = "UPDATE users set soil='$soil' WHERE id='$id'";
			mysqli_query($conn, $sql);
			echo "<br><br>&nbsp&nbsp&nbsp<b>
பரிந்துரைகள்: </b><br>";
			switch ($soil) {
				case 'alluvial':
					echo "<br><ul><li>மேற்கில் சட்லுஜ் நதிக்கு கிழக்கில் பிரம்மபுத்திரா பள்ளத்தாக்கில் இருந்து 15 லட்சம் சதுர கி.மீ. பரப்பளவில் நிலப்பகுதி நிலவுகிறது.

அவர்கள் மத்தியப் பிரதேசம் மற்றும் குஜராத்தில் நர்மதா மற்றும் டபியின் பள்ளத்தாக்கிலும் நடப்பார்கள்; சத்தீஸ்கர் மற்றும் ஒரிசாவில் மகாநதி; ஆந்திரப் பிரதேசத்தில் கோதாவரி; கிருஷ்ணா மற்றும் ஆந்திரப் பிரதேசம் மற்றும் தமிழ்நாட்டில் காவேரி. கேரளாவின் கரையோரத்தில் இவை கடலோர அலுவியம் என்றும், மகாநதி, கோதாவரி, கிருஷ்ணா மற்றும் காவேரி ஆகியவற்றின் டெல்டா அலுமியம் என்றும் அழைக்கப்படுகின்றன.

இந்த மண் முக்கியமாக இமயமலைகளிலிருந்து கீழே இறங்கிய குப்பைகளிலிருந்து அல்லது பின்வாங்காத கடலில் விட்டுச் செல்லப்பட்ட சாய்விலிருந்து பெறப்படுகிறது. அவர்களின் நிற ஒளி சாம்பல் மற்றும் சாம்பல் நிறத்தில் இருந்து மாறுபடுகின்றது, மேலும் அமைப்பு மெல்லிய வட்டத்திற்கு மணல் ஆகும்.

இந்த மண் நன்கு வறட்சியாகவும், மோசமாகவும் வடிகட்டப்படுகிறது. சில இடங்களில், அதிக உப்புத்தன்மை கொண்ட மண்ணைக் கொண்டிருக்கும் போது, ​​மற்ற இடங்களில் மண் மேற்பரப்பில் குறைவாக இருக்கும். தட்பவெப்ப நிலங்கள் முதிர்ச்சியடையாத சுயவிவரத்தைக் கொண்டிருக்கும் போது இந்த மண் நிலத்தில் நீளமானதாக இருக்கும். கடலோர மண்ணின் மைல்கள் திசை தோற்றம் ஆகும். </li></ul>";
					break;
				case 'black':
					echo "<ul><li>
பரிந்துரைகள்:
மகாராஷ்டிரா, மேற்கு மத்தியப்பிரதேசம் (ஹாஷங்காபாத், நார்சிங் பர்பூர், டாமோ, ஜபல்பூர்) ஆகியவற்றில் முக்கிய இடங்களில் உள்ள டெக்கான் லாவாவின் வானிலை மூலம் உருவாக்கப்படும் கருவளையம் அல்லது கறுப்பு பருத்தி மண் மற்றும் சர்வதேச அளவில் 'வெப்ப மண்டல கறுப்பு பூமி' அல்லது ' கர்நாடகம், கர்னூர் மற்றும் கரீம்நகர் மாவட்டங்கள்), கர்நாடகம் (பிஜப்பூர், தார்வார், குல்பர்கா, கர்நாடகம், கர்நாடகம், கர்நாடகம்), ஆந்திரப் பிரதேசம், ராமநாதபுரம், திருநெல்வேலி, கோயம்புத்தூர், மதுரை மற்றும் தென் ஆற்காடு மாவட்டங்கள்), உத்திரப்பிரதேசம் (ஜலவுன், ஹமீர்பூர், ராமநாதபுரம், மதுரை மற்றும் தெற்கு ஆற்காடு மாவட்டங்கள்), ராஜஸ்தான் (கோட்டா, பூந்தி, சவாய் மாதோபூர், பாரத்பூர் மற்றும் பன்ஸ்வாரா மாவட்டங்கள்), பிதார், பண்டா மற்றும் ஜான்ஸி மாவட்டங்கள்). க்ரெப்களின் கூற்றுப்படி, கரும்பு மண் என்பது ஒரு முதிர்ந்த மண்ணாகும், இது ஒரு குறிப்பிட்ட வகை ராக் மூலம் அல்லாமல் நிவாரணமும் காலநிலையும் மூலம் உற்பத்தி செய்யப்படுகிறது. இது வருடாந்த மழைப்பொழிவு 50 செ.மீ. முதல் 75 செ.மீ. வரைக்கும், மழை நாட்களின் எண்ணிக்கை 30 முதல் 50 வரை இருக்கும். </li></ul>";
					break;
				case 'red':
					echo "<ul><li>இந்தியாவின் டெக்கான் பீடபூமியில், சிவப்பு மண் பெரும்பாலும் கிடைக்கிறது. தமிழ்நாடு மாநிலத்தில் சிவப்பு மண் முக்கியமாக பெரியார் மற்றும் சேலம் மாவட்டங்களில் காணப்படுகிறது. இந்தியாவில், மத்திய பிரதேசம், ஆந்திரப் பிரதேசம், தென் கர்நாடகம், பீகார், மகாராஷ்டிரா, கோவா, கிழக்கு ராஜஸ்தான், மேற்கு வங்கம் மற்றும் வடகிழக்கு மாநிலங்கள் போன்ற பல மாநிலங்களில் சிவப்பு மண் காணப்படுகிறது.

இந்தியாவின் வரைபடத்தில் இது கண்ணுக்குத் தெரியாமல் காணப்பட்டால், தீபகற்பத்திலுள்ள வடமேற்கு பகுதிகள் கறுப்பு மண்ணால் மூடப்பட்டிருக்கின்றன, மற்ற தென் கிழக்குப் பகுதி சிவப்பு மண் மஞ்சள் மற்றும் சிவப்பு பல்வேறு நிழல்கள். ஆழமான மற்றும் பகுத்தறிவார்ந்த மழைவீழ்ச்சியின் கீழ், படிகங்களின் பாறைகளால் சிவப்பு மண்களும் உருவாகின்றன.

 

அவை மேற்கில் மஹாராஷ்டிரா மாநிலத்தின் கொங்கன் கடற்கரையிலும், வடக்கிலும் வடக்கிலும் தொடர்கின்றன. அவர்கள் இந்தியாவின் கிழக்கு கும்பல் மலைத்தொடரில், ஷில்லாங் பீடபூமி மற்றும் பீஹார் பீடபூமிலும் உருவாக்கப்படுகின்றனர். </li></ul>";
					break;
				case 'alkaline':
					echo "<ul><li> அல்கலைன் மண் 7.0 க்கும் அதிகமாக pH உடன் மண்ணாகும். இது சில நேரங்களில் இனிப்பு அல்லது அடிப்படை மண் என்று அழைக்கப்படுகிறது. (அல்காலி மண் அதிக அளவு சோடியம் கொண்ட மண்ணாகும், மேலும் கார்பன் மண்ணிலிருந்து மிகவும் வேறுபட்டது.)

கால்சியம், மெக்னீசியம், அல்லது சோடியம் ஆகியவற்றின் மூலம் மண்ணானது காரத்தன்மை கொண்டது. அனைத்துமே பெரும்பாலான மண்ணில் உள்ளன, ஆனால் சில சூழ்நிலைகளில் அதிக அளவில் உள்ளன. சோடியம் உப்புகள் மிகவும் கரையக்கூடியவை, ஆகவே அவை எந்த மண்ணிலும் மிகச் சிறிய அளவில் மட்டுமே உள்ளன, அவை நன்கு வடிகட்டியும், மழைக்காலங்களில் கணிசமான அளவையும் பெறுகின்றன. மண்ணில் சோடியம் பற்றிய மேலும் தகவலுக்கு, சோடிக் மண் பார்க்கவும்.

கால்சியம், அல்லது கால்சியம் மற்றும் மக்னீசியம் ஆகியவை சேர்ந்து சற்றே கரையக்கூடியவை, பெரும்பாலான மண் காரத்தன்மைக்கான காரணங்கள். அடிப்படை பாறை சுண்ணாம்பு (கால்சியம் கார்பனேட்) அல்லது வறண்ட பகுதிகளிலுள்ள கால்சியத்தை மண்ணிலிருந்து வெளியேற்றாத இடங்களில் அல்கலைன் மண் பொதுவாக காணப்படும். ஒரு வருடத்திற்கு 20 அங்குல மழை வருவாயைப் பெறும் பகுதிகளுக்கு பொதுவாக ஆல்கைன் மண் வேண்டும்.</li></ul>";
					break;
				
			}
		}
	}
	?>

	</body>
</html>
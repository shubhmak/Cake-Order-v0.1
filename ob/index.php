<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>






#home_quicklinks {
    padding: 20px 0;
    text-align: center;
}
a.quicklink.link1 {
    background: #fc6719;
}
a.quicklink {
    display: inline-block;
    width: 302px;
    height: 173px;
    position: relative;
    margin: 90px 30px;
}
a.quicklink .ql_caption {
    display: block;
    height: 100%;
    width: 100%;
    position: relative;
}
.outer {
    display: table;
    position: relative;
    vertical-align: middle;
    text-align: center;
    height: 100%;
    width: 100%;
    border-spacing: 0px;
    padding: 0px;
}
.inner {
    display: table-cell;
    position: relative;
    vertical-align: middle;
    text-align: center;
    height: 100%;
    width: 100%;
    border-spacing: 0px;
    padding: 0px;
}
a.quicklink .ql_caption h2 {
    margin: 0px;
    padding: 0px;
    text-transform: uppercase;
    line-height: 1.46em;
    color: #fff;
}
a.quicklink.link1 .ql_top {
    border-bottom-color: #fc6719;
}
a.quicklink.link1 .ql_bottom {
    border-top-color: #fc6719;
}


.ql_top {
    bottom: 173px;
    border-bottom: 89px solid #ccc;
}
.ql_bottom {
    top: 173px;
    border-top: 89px solid #ccc;
}
.ql_top, .ql_bottom {
    position: absolute;
    left: 0px;
    width: 0px;
    border-left: 151px solid transparent;
    border-right: 151px solid transparent;
}

a.quicklink.link2 {
    background: #fcf4e7;
}
a.quicklink.link2 .ql_top {
    border-bottom-color: #fcf4e7;
}
a.quicklink.link2 .ql_bottom {
    border-top-color: #fcf4e7;
}


a.quicklink.link3 .ql_top {
    border-bottom-color: #bcbdc0;
}
a.quicklink.link3 .ql_bottom {
    border-top-color: #bcbdc0;
}
a.quicklink.link3 {
    background: #bcbdc0;
}
a.quicklink {
    font-size: 36px;
    font-weight: 500;
    text-decoration:none;
}
.hexagon {
  position: relative;
  width: 300px; 
  height: 173.21px;
  margin: 86.60px 0;
  background-image: url(http://csshexagon.com/img/meow.jpg);
  background-size: auto 334.8632px;
  background-position: center;
  box-shadow: 0 0 20px rgba(0,128,192,0.6);
  border-left: solid 5px #4a401c;
  border-right: solid 5px #4a401c;
}

.hexTop,
.hexBottom {
  position: absolute;
  z-index: 1;
  width: 212.13px;
  height: 212.13px;
  overflow: hidden;
  -webkit-transform: scaleY(0.5774) rotate(-45deg);
  -ms-transform: scaleY(0.5774) rotate(-45deg);
  transform: scaleY(0.5774) rotate(-45deg);
  background: inherit;
  left: 38.93px;
  box-shadow: 0 0 20px rgba(0,128,192,0.6);
}

/*counter transform the bg image on the caps*/
.hexTop:after,
.hexBottom:after {
  content: "";
  position: absolute;
  width: 290.0000px;
  height: 167.4315780649915px;
  -webkit-transform:  rotate(45deg) scaleY(1.7321) translateY(-83.7158px);
  -ms-transform:      rotate(45deg) scaleY(1.7321) translateY(-83.7158px);
  transform:          rotate(45deg) scaleY(1.7321) translateY(-83.7158px);
  -webkit-transform-origin: 0 0;
  -ms-transform-origin: 0 0;
  transform-origin: 0 0;
  background: inherit;
}

.hexTop {
  top: -106.0660px;
  border-top: solid 7.0711px #4a401c;
  border-right: solid 7.0711px #4a401c;
}

.hexTop:after {
  background-position: center top;
}

.hexBottom {
  bottom: -106.0660px;
  border-bottom: solid 7.0711px #4a401c;
  border-left: solid 7.0711px #4a401c;
}

.hexBottom:after {
  background-position: center bottom;
}

.hexagon:after {
  content: "";
  position: absolute;
  top: 2.8868px;
  left: 0;
  width: 290.0000px;
  height: 167.4316px;
  z-index: 2;
  background: inherit;
}

































@import url('https://fonts.googleapis.com/css?family=Roboto:300');
body{
  margin: 0;
  padding: 0;
 font-family: 'Roboto', sans-serif !important;
}
section{
  width: 100%;
  height: 100vh;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
          padding: 140px 0;
}
.card{
  position: relative;
  max-width: 300px;
  height: auto;
  background: linear-gradient(-45deg,#fe0847,#feae3f);
  border-radius: 15px;
  margin: 0 auto;
  padding: 40px 20px;
  -webkit-box-shadow: 0 10px 15px rgba(0,0,0,.1) ;
          box-shadow: 0 10px 15px rgba(0,0,0,.1) ;
-webkit-transition: .5s;
transition: .5s;
}
.card:hover{
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}
.col-sm-4:nth-child(1) .card ,
.col-sm-4:nth-child(1) .card .title .fa{
  background: linear-gradient(-45deg,#f403d1,#64b5f6);

}
.col-sm-4:nth-child(2) .card,
.col-sm-4:nth-child(2) .card .title .fa{
  background: linear-gradient(-45deg,#ffec61,#f321d7);

}
.col-sm-4:nth-child(3) .card,
.col-sm-4:nth-child(3) .card .title .fa{
  background: linear-gradient(-45deg,#24ff72,#9a4eff);

}
.card::before{
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 40%;
  background: rgba(255, 255, 255, .1);
z-index: 1;
-webkit-transform: skewY(-5deg) scale(1.5);
        transform: skewY(-5deg) scale(1.5);
}
.title .fa{
  color:#fff;
  font-size: 60px;
  width: 100px;
  height: 100px;
  border-radius:  50%;
  text-align: center;
  line-height: 100px;
  -webkit-box-shadow: 0 10px 10px rgba(0,0,0,.1) ;
          box-shadow: 0 10px 10px rgba(0,0,0,.1) ;

}
.title h2 {
  position: relative;
  margin: 20px  0 0;
  padding: 0;
  color: #fff;
  font-size: 28px;
 z-index: 2;
}
.price,.option{
  position: relative;
  z-index: 2;
}
.price h4 {
margin: 0;
padding: 20px 0 ;
color: #fff;
font-size: 60px;
}
.option ul {
  margin: 0;
  padding: 0;

}
.option ul li {
margin: 0 0 10px;
padding: 0;
list-style: none;
color: #fff;
font-size: 16px;
}
.card a {
  position: relative;
  z-index: 2;
  background: #fff;
  color : black;
  width: 150px;
  height: 40px;
  line-height: 40px;
  border-radius: 40px;
  display: block;
  text-align: center;
  margin: 20px auto 0 ;
  font-size: 16px;
  cursor: pointer;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
          box-shadow: 0 5px 10px rgba(0, 0, 0, .1);

}
.card a:hover{
    text-decoration: none;
}



</style>




</head>
<body>


                            <center>    <a class="quicklink link1" href="/order">
					<span class="ql_caption"  ">
                                        <span class="outer">
                                            <span class="inner">
                                                <h2 >Order View</h2>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="ql_top"></span>
                                    <span class="ql_bottom"></span>
                                </a>

                                <a class="quicklink link2" href="/order/ob">
                                    <span class="ql_caption">
                                        <span class="outer">
                                            <span class="inner">
                                                <h2 style="color:red">Take order</h2>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="ql_top"></span>
                                    <span class="ql_bottom"></span>
                                </a></center>




<hr style="height:15px;background: cyan;">





<?php date_default_timezone_set("Asia/Kolkata");  ?>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST">
				<span class="contact100-form-title">
				Order booking!
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name" id="n">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid date is required: ex@abc.xyz">
					<span class="label-input100">Date</span>
					<input class="input100" type="Date" name="date" placeholder="Enter delivery date" value="<?php echo date('Y-m-d');   ?> ">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate = "Valid time is required: ex@abc.xyz">
					<span class="label-input100">Time</span>
					<input class="input100" type="time" name="time" placeholder="Enter time of delivery">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate = "Valid Contact is required: ex@abc.xyz">
					<span class="label-input100">Contact</span>
					<input class="input100" type="number" name="contact" placeholder="Enter your Contact number">
					<span class="focus-input100"></span>
				</div>



<script src="jq/jq.js">
</script>
<script>
$(document).ready(function(){
$('#fcs').hide();
$('#bcs').hide();

   

    $('#se').on('change', function() {
      if(this.value=="-NOT SELECTED-")
      {
       $('#fcs').hide();
	$('#bcs').hide();
	}
      if ( this.value == 'Fresh Cream')
      //.....................^.......
      {
          $("#bcs").hide();
           
        $("#fcs").show();
      }
      else  if ( this.value == 'Butter Cream')
      {
          $("#fcs").hide();
          $("#bcs").show();
       
      }

      
    });
});
</script>


				<div class="wrap-input100 input100-select" >
					<span class="label-input100">Cream:</span>
					<div>
						<select  id='se' name="cream">


							<option value="-NOT SELECTED-" default>-Select-</option>
							<option value="Fresh Cream">Fresh Cream</option>
							<option value="Butter Cream">Butter Cream</option>					
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>



				<div class="wrap-input100 input100-select"  id='fcs'>
					<span class="label-input100">Fresh Cream flavours:</span>
					<div>
						<select name="fctype">
							<option value="F.C Black Forest">F.C Black Forest</option>

							<option  value="F.C White Forest">F.C White Forest</option>

							<option  value="F.C Plain Pinaple">F.C Plain Pinaple</option>

							<option value="F.C Gel Pinaple">F.C Gel Pinaple</option>

							<option value="F.C gel strawberry">F.C Gel strawberry</option>

							<option  value="F.c Chocolate Troufle">F.C Chocolate Troufle</option>

							<option  value="F.C Gel Blueberry">F.C gel blueberry</option>

							<option  value="F.C Rasmalai">F.C Rasmalai</option>


						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
	


				<div class="wrap-input100 input100-select"  id='bcs'>
					<span class="label-input100">Buttercream Cream flavours:</span>
					<div>
						<select name="bctype">
							<option value="B.C Vanilla">B.C Vanilla</option>

							<option  value="B.C Pure Chocolate">B.C Pure Chocolate</option>

							<option  value="B.C Strawberry">B.C Strawberry</option>

							<option value="B.C Pinaple">B.C Pinaple</option>

							<option value="B.C Butterscotch">B.C Butterscotch</option>

						</select>
					</div>
					<span class="focus-input100"></span>
				</div>



				<div class="wrap-input100 input100-select"  id='bcs'>
					<span class="label-input100">Weight:</span>
					<div>
						<select name="wt">
							<option value="0.5">500 gm</option>

							<option  value="1.0">1 KG</option>

							<option  value="1.5">1.5 KG</option>

							<option value="2.0">2.0 KG</option>

							<option value="2.5">2.5 KG</option>
							<option value="3.0">3.0 KG</option>

							<option value="3.5">3.5 KG</option>

							<option value="4.0">4.0 KG</option>




						</select>
					</div>
					<span class="focus-input100"></span>
				</div>




<script>
//script to hide/show elements based on selected  categories .
$(document).ready(function(){

$('#nov').hide();
$('#shp').hide();	


$('#dsg').on('change',function(){

if(this.value=="-NOT SELECTED-")
{$('#nov').hide();
$('#shp').hide();	
}
if(this.value=="Regular")
{$('#shp').show();
$('#nov').hide();}

else 
if(this.value=="Novelty")
{$('#nov').show();
$('#shp').hide();}
});
});

</script>

<script>




</script>




				<div class="wrap-input100 input100-select">
					<span class="label-input100">Design:</span>
					<div>
						<select  id="dsg" name="design">
							<option value="-NOT SELECTED-" default>-Select-</option>
							<option value="Regular">Regular</option>
							<option value="Novelty">Novelty</option>					
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>



				<div class="wrap-input100 input100-select" id="shp">
					<span class="label-input100">Shape:</span>
					<div>
						<select name="stype">
							<option>round</option>
							<option>Heart</option>					
							<option>Square</option>	
																
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>





				<div class="wrap-input100 input100-select" id="nov">
					<span class="label-input100">Novelty Design:</span>
					<div>

					<input type="text" name="ntype" ></input>

					</div>
					<span class="focus-input100"></span>
				</div>



				<div class="wrap-input100 input100-select">
					<span class="label-input700">Photo Print:</span>
					<div>
						<select  id="pht" name="pht">
							<option value="No">No</option>
							<option value="Yes">Yes</option>					
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>




				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						
							<span>
								<input type="submit" name="s" class="contact100-form-btn name="submit" style="background:transparent">

							</span>
						
					</div>
				</div>
			</form>
		</div>
	</div>



<?php     
mysqli_connect('localhost','root','','orders');

if(isset($_POST['s']))
{echo "lollllslfjghaskjgh";





if(!ctype_alpha($_POST['name'])){echo '<script>alert("please enter valid name!!");</script>';}	
else if($_POST['date']==NULL){echo '<script>alert("please select date!!");</script>';}	
else if($_POST['time']==NULL){echo '<script>alert("please select time!!");</script>';}	
else if($_POST['contact']==NULL || !is_numeric($_POST['contact']) || strlen($_POST['contact'])!=10 ){echo '<script>alert("please enter valid phone number!!");</script>';}	
else if($_POST['cream']=="-NOT SELECTED-"){echo '<script>alert("please select cream type!!");</script>';}	
else if($_POST['design']=="-NOT SELECTED-"){echo '<script>alert("please select design type!!");</script>';}	


else{
$name=$_POST['name'];
$date=$_POST['date'];
$time=$_POST['time'];
$contact=$_POST['contact'];
$cream=$_POST['cream'];


$ctype="-NOT SELECTED-";
if($cream=="Fresh Cream")
$ctype=$_POST['fctype'];
else if($cream=="Butter Cream")
$ctype=$_POST['bctype'];

$design=$_POST['design'];



$dtype="-NOT SELECTED-";
if($design=="Regular")
$dtype=$_POST['stype'];
else if($design=="Novelty")
$dtype=$_POST['ntype'];
$pic=$_POST['pht'];
$wt=$_POST['wt'];

/*
echo $name."<br>";	
echo $date."<br>";	
echo $time."<br>";	 	
echo $contact."<br>";	
echo $cream."<br>";	 
echo $ctype."<br>";    
echo $design."<br>";	 
echo $dtype."<br>";	
echo $pic."<br>";	

*/
//echo '<script>alert(',$name,',"<br>",',$date,',"<br>",',$time,',"<br>",',$contact,',"<br>",',$cream,',"<br>",',$ctype,',"<br>",',$design,',"<br>",',$dtype,',"<br>", ',$pic,',"<br>";)</script>');
if($con=mysqli_connect('localhost','root','','orders'))
echo "connection successful";


$sql="INSERT INTO `orders`(`name`, `date`, `time`, `contact`, `cream`, `wt`,`flavour`, `design`, `shape`, `photo`, `pic`) VALUES ('$name','$date','$time','$contact','$cream','$wt','$ctype','$design','$dtype','$pic',NULL)";

if(mysqli_query($con,$sql))
echo "<br>entry successful";
else
echo "<br>entry unsuccesful";

/*
echo $name."<br>";	
echo $date."<br>";	
echo $time."<br>";	 	
echo $contact."<br>";	
echo $cream."<br>";	 
echo $ctype."<br>";    
echo $design."<br>";	 
echo $dtype."<br>";	
echo $pic."<br>";	
*/


$stt=$name." ,".$date." ,".$time." ,".$contact." ,".$cream." ,".$ctype." ,".$design." ,". $dtype." ,".$pic." .";
echo '<script>alert("'.$stt.'");</script>';
}}

?>

</body>
</html>


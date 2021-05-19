s<html>
<head>

  <meta charset="UTF-8">
  <title>Pricing Table</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">


















<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
<link rel="stylesheet" href="style.css">

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
background:url('https://images.unsplash.com/photo-1583173451851-dd9ba01f891e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80');
background-repeat:no-repeat;
background-size:cover;
background-attachment:fixed;
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
<?php  
function rand_color() {
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
}

$i=4;
while($i<20)
{   ?>

.col-sm-4:nth-child(<?php echo $i; ?>) .card,
.col-sm-4:nth-child(<?php echo $i; ?>) .card .title .fa{
<?php //  background: linear-gradient(-45deg,#24ff72,#9a4eff); ?>
background: linear-gradient(-45deg,<?php  echo rand_color(); ?>,<?php  echo rand_color(); ?>);
}




<?php
  
$i++;

}




?>

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
                                    <span class="ql_caption">
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




<section>
  <div class="container-fluid">
    <div class="container">
      <div class="row">


<?php 

//	echo "sdvdfdggf";
$con=mysqli_connect("localhost","root","","orders");
$sql="select * from `orders` where `delivered`='no' and `ready`='no' order by `date` desc , 'date'";
$r=mysqli_query($con,$sql);
if(mysqli_num_rows($r)>0)
{

while($rw=mysqli_fetch_assoc($r))
{



?>
        <div class="col-sm-4" >
          <div class="card text-center">
            <div class="title">
            <div class="option">
              <ul>
              <li>  <?php  echo $rw['date']."  <b> <h3>".$rw['time']."</h3></b>"; ?> </li>
	      </ul>
	    </div>

              <i class="<?php  if($rw['cream']== 'Fresh Cream') echo "fa fa-plane"; else if($rw['cream']== 'Butter Cream') echo 'fa fa-paper-plane'  ?>" aria-hidden="true"><?php  echo $rw['id']; ?></i>
              <h2><?php  echo $rw['flavour'] ?></h2>
            </div>
            
<div class="price">
              <h4><?php echo $rw['wt']; ?>KG</h4>
            </div>
            <div class="option">
              <ul>
              <li>  <?php   echo "<h2>".$rw['name']."</h2>"; ?> </li>
              <li>  <?php  echo $rw['design'].":<h3>".$rw['shape']."</h3>"; if($rw['shape']=='Square') echo"🔳" ;else if($rw['shape']=='Heart') echo"🖤" ; else if($rw['shape']=='round') echo"🔘"; ?> </li>

              <li> <?php if($rw['photo']=='Yes') echo"<h2>Photo Print </h2>"	 ?> </li>
              <li>  </li>
              </ul>
            </div>
            <a href="#">. </a>
          </div>
        </div>
<?php


}

}
else
echo "0results";

?>
        <!-- END Col one -->
      </div>
    </div>
  </div>
</section>
</body>
</html>

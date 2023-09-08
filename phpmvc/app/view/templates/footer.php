<style>
    
body{
	line-height: 1.5;
	font-family: 'Poppins', sans-serif;
}
*{
	margin:0;
	padding:0;
	box-sizing: border-box;
}
.container{
	max-width: 1150px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}

.footer{
	background-color: #24262b;
    padding: 42px 0;
}
.footer-col{
   width: 25%;
   padding: 0 7px;
}
.footer-col h4{
	font-size: 30px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 20px;
	font-weight: 500;
	position: relative;
}
.footer-bot{
    text-align: center ;
    
}
.footer-bot p{
    color : white;
    font-size: 14px;
    word-spacing:2px;
    text-transform: capitalize;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 5px;
	box-sizing: border-box;
	width: 110px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 20px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px; var_dump
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}





</style>

<footer class="footer">
  	 <div class="container mt-3">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>THANKS FOR YOUR OPEN MY WEBSITE</h4>
  	 		</div>
            <div class="footer-col">
  	 			<ul>
                   <li><a href="<?= BASE_URL; ?>/jurusan">Kompetensi Keahlian</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<ul>
  	 				<li><a href="<?= BASE_URL; ?>/guru">Data Guru</a></li>
                       
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<ul>
  	 				<li><a href="<?= BASE_URL; ?>/siswa">Data Siswa</a></li>
  	 				<li><a href="<?= BASE_URL; ?>/user/profile">About</a></li>
  	 		</div>
  	 </div>
       <div class="footer-bot">
                <p>copyright &copy; 2023 AmaElMatadore. designed by<span>Atma Wijaya</span></p>
            </div>
            <div class="footer-bot">
                <p>Windows PowerShell</p>
            </div>
  </footer>
<script src="<?= BASE_URL;?>/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

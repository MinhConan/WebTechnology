<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	<?php 
	   $name=$_GET["name"]; $dateTime=$_GET["datetime"];
	   
	   print("Hi $name ! <br></br> You have choose to have an appointment on ");
	   print(date_format(date_create($dateTime),"H:i:s, d/m/Y"));
	   
	   print("<br></br> More Infomation <br></br>");
	   print("In 12 hour, the time and date is ");
	   print(date_format(date_create($dateTime),"h:i:sa, d/m/Y"));
	   print("<br></br>");
	   
	   $month=date_format(date_create($dateTime),"m");
	   $month= (int)$month;
	   $year=date_format(date_create($dateTime),"Y");//lấy tháng và năm của thời gian người dùng đã chọn
	   
	   $days = array(0,31,28,31,30,31,30,31,31,30,31,30,31);
	   
	   if( !($year%4) && ($year%100)){
	       $days[2]++;
	   }else if(!($year%400)) $days[2]++;
	   //if(($month==1)||($month==3)||($month==5)||($month==7)||($month==8)||($month==10)||($month==12)){
	   $days[0]= $days[$month];    
	   print("this month has $days[0] !" );
	   //}
	?>
	
</body>
</html>
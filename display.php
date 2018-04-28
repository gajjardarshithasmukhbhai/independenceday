<html>
<head><title>gajjar darshit hasmukhbhai</title>
    <style type="text/css">
		#trt
		{
			height:210px;
			border:1px solid black;
			background-color:#FF9933;
			width:1341px;
		}
		#rtt
		{
			height:210px;
			border:1px solid black;
			background-color:#FFFFFF;
			width:1341px;
		}
		#opp
		{
			height:210px;
			border:1px solid black;
			background-color:#138808;
			width:1341px;
		}
		.oip
		{
			height:212px;
            animation: pop 2s infinite;
		}
		.uyt
		{
            color:darkmagenta;
			position:absolute;
			top:90px;
			left:320px;
            font-size: 70px;
			font-family: 'Roboto', sans-serif;
			text-shadow:4px 4px 2px 2px lawngreen;
            animation: anim 2s infinite;
		}
        @keyframes anim
        {
            90%{color: red;text-shadow: 4px 4px 2px 2px rebeccapurple;transform: scale(1.7);}
            80%{color: royalblue; text-shadow: 4px 4px 2px 2px teal;transform: scale(0.8);}
            90%{color: darkblue; text-shadow: 4px 4px 2px 2px sandybrown;transform: scale(1);}
            20%{color: darkviolet; text-shadow: 4px 4px 2px 2px crimson;transform: scale(0.8);}
            70%{color: darkmagenta; text-shadow: 6px 6px 3px 3px royalblue;transform: scale(1.7)}
            80%{color: orangered;transform: scale(0.8);};
        }
        .ioppp
        {
            color:darkmagenta;
            position:absolute;
            top:420px;
            left:520px;
            font-size: 70px;
            font-family: 'Roboto', sans-serif;
            text-shadow:4px 4px 2px 2px lawngreen;
            animation: pope 2s infinite;
        }
        @keyframes  pope
        {
            90%{color:#FF9933 ;transform: scale(1.7);font-family: "Cambria Math";}
            80%{color: #FFFFFF; transform: scale(0.8);font-family: "Lucida Console";}
            90%{color: #138808; transform: scale(1);font-family: "Eras Bold ITC";}
            20%{color: blue;transform: scale(0.8);font-family: "Engravers MT";}
            70%{color: aqua;transform: scale(1.7);font-family: "Agency FB";}
            80%{color: saddlebrown;transform: scale(0.8);font-family: "Berlin Sans FB Demi";}
        }
        .pp
        {
            color:darkmagenta;
            position:absolute;
            top:170px;
            left:180px;
            font-size: 70px;
            font-family: 'Roboto', sans-serif;
            text-shadow:4px 4px 2px 2px lawngreen;
            animation: kk 9s infinite;
        }
        @keyframes kk
        {
            90%{color: red;text-shadow: 4px 4px 2px 2px rebeccapurple;transform: scale(1.7);}
            80%{color: green; text-shadow: 4px 4px 2px 2px teal;transform: scale(0.8);}
            90%{color: black; text-shadow: 4px 4px 2px 2px sandybrown;transform: scale(1);}
            20%{color: red; text-shadow: 4px 4px 2px 2px crimson;transform: scale(0.8);}
            70%{color:blue; text-shadow: 6px 6px 3px 3px royalblue;transform: scale(1.7)}
            80%{color: orange;transform: scale(0.8);};
        }
    </style>
</head>
<body>
    <div id="trt"><h1 class="uyt">HAPPY REPUBLIC DAY</h1></div>
    <script type="text/javascript" src="js/fireworks.js"></script>
    <div id="rtt"><h1 class="pp">26 January</h1> <center><img src="https://cdn.pixabay.com/photo/2012/04/25/00/34/wheel-41387__340.png" class="oip"></center></div>
	<div id="opp">
        <?php

            $con=mysqli_connect('localhost','root','','nikunj');
           $query="select *from name";
           $run=mysqli_query($con,$query);
            $num=mysqli_num_rows($run);
            mysqli_close($con);
        ?>
        <?php
            for($i=1;$i<=$num;$i++) {
                $row = mysqli_fetch_array($run);
            }
             ?>
                <h1 class="ioppp"><?php echo $row['name']; ?></h1>
    </div>
</body>
</html>
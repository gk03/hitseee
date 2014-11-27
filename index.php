<html>
    <head>
        <title> Hindustan Univeristy</title>

        <link rel="import" href="bower_components/paper-shadow/paper-shadow.html">
        <link rel="import" href="bower_components/font-roboto/roboto.html">
        <link rel="import" href="bower_components/paper-tabs/paper-tab.html">
        <link rel="import" href="bower_components/paper-radio-group/paper-radio-group.html">

        <script src="bootstrap/js/jquery-1.11.1.js"></script>
        <script src="bootstrap/js/jquery-1.10.2.js"></script>
        <script src="bootstrap/js/jquery-ui.js"></script>

        <?php
			$cad_name = $_POST['name'];  ?>
     <style>
        body{
            width: 100%;
            height: 100%;
            max-height: 700px;
            margin: 0;
            margin-top: 0;
            margin-left: 0;
            background-color: #FFF;
            overflow: hidden;
        }
        paper-shadow.bar{
            float: left;
            width: 100%;
            height: 110px;
            position: relative;
            background-color: #5264ae;
        }
        div.logo{
            padding-top: 17px;
            padding-left: 15px;
            width: 100px;
            position: fixed;
        }
        div.til{
            width: 500px;
            position: fixed;
            font: roboto;
            font-size: 25px;
            padding-top: 17px;
            padding-left: 425px;

        }
        div.header{
            position: relative;
            width: 900px;
        }
        div.timer{
            width: 500px;
            position: fixed;
            font-size: 25px;
            padding-top: 05px;
            padding-left: 900px;
        }
        div.bet{
            width: 100%;
            height: 30px;
            padding-top: 50px;
        }
        paper-tab{
            color: #FFF;
        }
        div.main{
            height: 100%;
            background-color: #505050;
            margin: 0 auto;
        }
        div.lft{
            width: 135px;
            padding: 0;
            margin: 0;
            display: block;
            float: left;
        }
        div.rht{
            padding-top: 50px;
            padding-left: 50px;
            display: block;
            float: left;
        }
        paper-shadow.chos1{
            padding-bottom: 170px;
            position: static;
            padding-left: 50px;
            width: 130px;
            height: 392px;
            padding-top: 40px;
            background-color: #8BBC2F;
        }
        paper-shadow.chos2{
            padding-bottom: 170px;
            position: static;
            padding-left: 50px;
            width: 130px;
            height: 392px;
            padding-top: 40px;
            background-color: #F15A22;
        }
        paper-shadow.chos3{
            padding-bottom: 170px;
            position: static;
            padding-left: 50px;
            width: 130px;
            height: 392px;
            padding-top: 40px;
            background-color: #FD616C;
        }
        paper-radio-group.blue paper-radio-button::shadow #ink[checked] {
          color: #4285f4;
        }

        paper-radio-group.blue paper-radio-button::shadow #onRadio {
          background-color: #4285f4;
        }

        paper-radio-button {
          display: block;
        }

    </style>
    </head>
    <body onload="countdown(year,month,day,hour,minute);
            c_que(0,1);
            c_que(1,1);
            c_que(2,1);">
        <paper-shadow  class="bar" z="2">
            <div class="header">
                <div flux class="logo">
                    <img src="logo_wh.png" alt="logo"/>
                </div>
                <div class="til">
                    <center>Hindustan Institute of Technology and Science<br/>Engineering Entrance Examination<br/> HITSEEE '15</center>
                </div>
                <div class="timer">
                    <span style="font: roboto; font-size: 18px; padding-left:240px;">Welcome, <?php echo $cad_name; ?></span>
                    <br/>
                    <table id="table" border="0" cellpadding="0" cellspacing="0" style="padding-top:15px; padding-left:50;">
                        <tr>
                            <td align="center" colspan="6">
                                    <div class="numbers" id="count2" style="padding: 5px 0 0 0; "></div>                                                </td>
                        </tr>
                        <tr id="spacer1" height="30">
                            <td align="center" ><div class="numbers" ></div></td>
                            <td align="center" ><div class="numbers" id="dday" style="display:none"></div></td>
                            <td align="center" ><div class="numbers" id="dhour"></div></td>
                            <td align="center" ><div class="numbers" id="dmin"></div></td>
                            <td align="center" ><div class="numbers" id="dsec"></div></td>
                            <td align="center" ><div class="numbers" ></div></td>
                        </tr>
                        <tr id="spacer2" height="12">
                            <td align="center" ><div class="title" ></div></td>
                            <td align="center" ><div class="title" id="days" style="display:none">Days</div></td>
                            <td align="center" ><div class="title" id="hours">Hours</div></td>
                            <td align="center" ><div class="title" id="minutes">Minutes</div></td>
                            <td align="center" ><div class="title" id="seconds">Seconds</div></td>
                            <td align="center" ><div class="title" ></div></td>
                        </tr>
                    </table>
                </div>
            </div>
        </paper-shadow>
        <div class="bet">
            <paper-tabs selected="0" fle auto center-center horizontal layout  style="width: 85%; padding-left:190px;" >

              <paper-tab onclick="tabchange(0)">PHYSICS</paper-tab>
              <paper-tab onclick="tabchange(1)">CHEMISTRY</paper-tab>
              <paper-tab onclick="tabchange(2)">MATHS</paper-tab>

            </paper-tabs>
        </div>
        <div id="phy" class="main">
            <div class="lft">
               <paper-shadow z="2" class="chos1">
                   <span style="font:roboto; font-size:20px;">Questions</span>
                   <br/>
                   <br/>
                    <paper-radio-group class="blue" selected="0">
                      <paper-radio-button  onclick="c_que(0,1)" label="1"></paper-radio-button>
                      <paper-radio-button  onclick="c_que(0,2)" label="2"></paper-radio-button>
                      <paper-radio-button  onclick="c_que(0,3)" label="3"></paper-radio-button>
                      <paper-radio-button  onclick="c_que(0,4)" label="4"></paper-radio-button>
                      <paper-radio-button  onclick="c_que(0,5)" label="5"></paper-radio-button>
                    </paper-radio-group>
               </paper-shadow>
            </div>
            <div class="rht">
               <br/>
               <br/>
               <br/>
                <span id="p_q" style="padding-left:150px;">Tis is question</span>
                <br/>
                <br/>
                <br/>
                <center>
                    <paper-radio-group selected="auto">
                      <paper-radio-button style="display: inline-block;"></paper-radio-button><span id="p1"></span>
                      <paper-radio-button style="display: inline-block;"></paper-radio-button><span id="p2"></span>
                      <paper-radio-button style="display: inline-block;"></paper-radio-button><span id="p3"></span>
                      <paper-radio-button style="display: inline-block;"></paper-radio-button><span id="p4"></span>
                    </paper-radio-group>
                </center>
            </div>
        </div>
        <div id="che" class="main" style="display:none;">
            <div class="lft">
               <paper-shadow z="2" class="chos2">
                   <span style="font:roboto; font-size:20px;">Questions</span>
                   <br/>
                   <br/>
                    <paper-radio-group class="blue" selected="0">
                      <paper-radio-button  onclick="c_que(1,1)" label="1"></paper-radio-button>
                      <paper-radio-button  onclick="c_que(1,2)" label="2"></paper-radio-button>
                      <paper-radio-button  onclick="c_que(1,3)" label="3"></paper-radio-button>
                      <paper-radio-button  onclick="c_que(1,4)" label="4"></paper-radio-button>
                      <paper-radio-button  onclick="c_que(1,5)" label="5"></paper-radio-button>
                    </paper-radio-group>
               </paper-shadow>
            </div>
            <div class="rht">
               <br/>
               <br/>
               <br/>
                <span id="c_q" style="padding-left:150px;">Tis is question</span>
                <br/>
                <br/>
                <br/>
                <center>
                    <paper-radio-group selected="auto">
                      <paper-radio-button style="display: inline-block;"></paper-radio-button><span id="c1"></span>
                      <paper-radio-button style="display: inline-block;"></paper-radio-button><span id="c2"></span>
                      <paper-radio-button style="display: inline-block;"></paper-radio-button><span id="c3"></span>
                      <paper-radio-button style="display: inline-block;"></paper-radio-button><span id="c4"></span>
                    </paper-radio-group>
                </center>
            </div>
        </div>
        <div id="mat" class="main" style="display:none;">
            <div class="lft">
               <paper-shadow z="2" class="chos3">
                   <span style="font:roboto; font-size:20px;">Questions</span>
                   <br/>
                   <br/>
                    <paper-radio-group class="blue" selected="0">
                      <paper-radio-button  onclick="c_que(2,1)" label="1"></paper-radio-button>
                      <paper-radio-button  onclick="c_que(2,2)" label="2"></paper-radio-button>
                      <paper-radio-button  onclick="c_que(2,3)" label="3"></paper-radio-button>
                      <paper-radio-button  onclick="c_que(2,4)" label="4"></paper-radio-button>
                      <paper-radio-button  onclick="c_que(2,5)" label="5"></paper-radio-button>
                    </paper-radio-group>
               </paper-shadow>
            </div>
            <div class="rht">
               <br/>
               <br/>
               <br/>
                <span id="m_q" style="padding-left:150px;">Tis is question</span>
                <br/>
                <br/>
                <br/>
                <center>
                    <paper-radio-group selected="auto">
                      <paper-radio-button style="display: inline-block;"></paper-radio-button><span id="m1"></span>
                      <paper-radio-button style="display: inline-block;"></paper-radio-button><span id="m2"></span>
                      <paper-radio-button style="display: inline-block;"></paper-radio-button><span id="m3"></span>
                      <paper-radio-button style="display: inline-block;"></paper-radio-button><span id="m4"></span>
                    </paper-radio-group>
                </center>
            </div>
        </div>

        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <style type="text/css">
            .numbers {
                width: 55px;
                text-align: center;
                font-family: Arial;
                font-size: 28px;
                font-weight: bold;    /* options are normal, bold, bolder, lighter */
                font-style: normal;   /* options are normal or italic */
                color: #ffffff;       /* change color using the hexadecimal color codes for HTML */
            }
            .title {		/* the styles below will affect the title under the numbers, i.e., "Days", "Hours", etc. */
                width: 55px;
                text-align: center;
                font-family: Arial;
                font-size: 10px;
                font-weight: bold;    /* options are normal, bold, bolder, lighter */
                color: #dddddd;       /* change color using the hexadecimal color codes for HTML */
            }
            #table {
                width: 400px;
                height: 48px;
                border-style: none;
                background-color: transparent;
                margin: 0px auto;
                position: relative;
                top: 0px;             /* change to position the timer */
                left: 0px;
            }
        </style>
<script type="text/javascript" src="pdb.json"></script>
<script type="text/javascript" src="cdb.json"></script>
<script type="text/javascript" src="mdb.json"></script>
<script type="text/javascript">
        var a=0,b;

        function c_que(a,b){
                if(a==0)
                {
                    b = parseInt(b);
                    var jsondb = JSON.parse(pque);
                      for(var i=0;i<5;i++)
                      {
                          if(jsondb.que[i].num==b)
                             {
                                    var qu = jsondb.que[i].ques;
                                    var op1 = jsondb.que[i].op1;
                                    var op2 = jsondb.que[i].op2;
                                    var op3 = jsondb.que[i].op3;
                                    var op4 = jsondb.que[i].op4;
                             }
                      }

                    document.getElementById('p_q').innerHTML = qu;
                    document.getElementById('p1').innerHTML = op1;
                    document.getElementById('p2').innerHTML = op2;
                    document.getElementById('p3').innerHTML = op3;
                    document.getElementById('p4').innerHTML = op4;

                }
                else if(a==1)
                {
                  b = parseInt(b);
                    var jsondb = JSON.parse(cque);
                      for(var i=0;i<5;i++)
                      {
                          if(jsondb.que[i].num==b)
                             {
                                    var qu = jsondb.que[i].ques;
                                    var op1 = jsondb.que[i].op1;
                                    var op2 = jsondb.que[i].op2;
                                    var op3 = jsondb.que[i].op3;
                                    var op4 = jsondb.que[i].op4;
                             }
                      }

                    document.getElementById('c_q').innerHTML = qu;
                    document.getElementById('c1').innerHTML = op1;
                    document.getElementById('c2').innerHTML = op2;
                    document.getElementById('c3').innerHTML = op3;
                    document.getElementById('c4').innerHTML = op4;
                }
                else if(a==2)
                {
                    b = parseInt(b);
                    var jsondb = JSON.parse(mque);
                      for(var i=0;i<5;i++)
                      {
                          if(jsondb.que[i].num==b)
                             {
                                    var qu = jsondb.que[i].ques;
                                    var op1 = jsondb.que[i].op1;
                                    var op2 = jsondb.que[i].op2;
                                    var op3 = jsondb.que[i].op3;
                                    var op4 = jsondb.que[i].op4;
                             }
                      }

                    document.getElementById('m_q').innerHTML = qu;
                    document.getElementById('m1').innerHTML = op1;
                    document.getElementById('m2').innerHTML = op2;
                    document.getElementById('m3').innerHTML = op3;
                    document.getElementById('m4').innerHTML = op4;
                }
            }
        </script>


<script type="text/javascript">
        var e;
        function tabchange(e){
                if(e==0)
                {
                  document.getElementById('phy').style.display = 'block' ;
                  document.getElementById('che').style.display = 'none' ;
                  document.getElementById('mat').style.display = 'none' ;
                }
                else if(e==1)
                {
                  document.getElementById('phy').style.display = 'none' ;
                  document.getElementById('che').style.display = 'block' ;
                  document.getElementById('mat').style.display = 'none' ;
                }
                else if(e==2)
                {
                  document.getElementById('phy').style.display = 'none' ;
                  document.getElementById('che').style.display = 'none' ;
                  document.getElementById('mat').style.display = 'block' ;
                }
            }
        </script>

<script type="text/javascript">

        var current="Your Done !";
        var year=2014;      //-->Enter the count down target date YEAR
        var month=11;        //-->Enter the count down target date MONTH
        var day=27;         //-->Enter the count down target date DAY
        var hour=23;        //-->Enter the count down target date HOUR (24 hour clock)
        var minute=30;      //-->Enter the count down target date MINUTE
        var tz=-+ 5.30;          //-->Offset for yo
        var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

        function countdown(yr,m,d,hr,min){
            theyear=yr;themonth=m;theday=d;thehour=hr;theminute=min;
            var today=new Date();
            var todayy=today.getYear();
            if (todayy < 1000) {todayy+=1900;}
            var todaym=today.getMonth();
            var todayd=today.getDate();
            var todayh=today.getHours();
            var todaymin=today.getMinutes();
            var todaysec=today.getSeconds();
            var todaystring1=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
            var todaystring=Date.parse(todaystring1)+(tz*1000*60*60);
            var futurestring1=(montharray[m-1]+" "+d+", "+yr+" "+hr+":"+min);
            var futurestring=Date.parse(futurestring1)-(today.getTimezoneOffset()*(1000*60));
            var dd=futurestring-todaystring;
            var dday=Math.floor(dd/(60*60*1000*24)*1);
            var dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
            var dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
            var dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
            if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=0){
                document.getElementById('count2').innerHTML=current;
                document.getElementById('count2').style.display="inline";
                document.getElementById('count2').style.width="390px";
                document.getElementById('dday').style.display="none";
                document.getElementById('dhour').style.display="none";
                document.getElementById('dmin').style.display="none";
                document.getElementById('dsec').style.display="none";
                document.getElementById('days').style.display="none";
                document.getElementById('hours').style.display="none";
                document.getElementById('minutes').style.display="none";
                document.getElementById('seconds').style.display="none";
                document.getElementById('spacer1').style.display="none";
                document.getElementById('spacer2').style.display="none";
                return;
            }
            else {
                document.getElementById('count2').style.display="none";
                document.getElementById('dday').innerHTML=dday;
                document.getElementById('dhour').innerHTML=dhour;
                document.getElementById('dmin').innerHTML=dmin;
                document.getElementById('dsec').innerHTML=dsec;
                setTimeout("countdown(theyear,themonth,theday,thehour,theminute)",1000);
            }
        }
</script>

    </body>
</html>

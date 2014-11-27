<html>
    <head>
        <link rel="import" href="bower_components/paper-shadow/paper-shadow.html">
        <link rel="import" href="bower_components/font-roboto/roboto.html">
        <link rel="import" href="bower_components/paper-button/paper-button.html">
        <link rel="import" href="bower_components/paper-input/paper-input-decorator.html">

        <script src="bootstrap/js/jquery-1.11.1.js"></script>
        <script src="bootstrap/js/jquery-1.10.2.js"></script>
        <script src="bootstrap/js/jquery-ui.js"></script>

        <title>HITSEEE '15</title>
        <style>
            body{
                margin:0;
                width:100%;
                height:100%;
                background-color: #FEF167;
            }
            div.main{
            }
            paper-shadow{
                width:400px;
                height:450px;
                background-color: #999999;
            }
            paper-input-decorator{
                width:40%;
            }
            paper-button.colored {
              color: #D83B00;
            }

            paper-button[raised].colored {
              background: #D83B00;
              color: #fff;
            }
            .fine {
                width:300px;
                height:20px;
                height:auto;
                position:absolute;
                left:35%;
                margin-left:-100px;
                bottom:10px;
                background-color: #383838;
                color: #F0F0F0;
                font-family: Calibri;
                font-size: 20px;
                padding:10px;
                text-align:center;
                border-radius: 2px;
                -webkit-box-shadow: 0px 0px 24px -1px rgba(56, 56, 56, 1);
                -moz-box-shadow: 0px 0px 24px -1px rgba(56, 56, 56, 1);
                box-shadow: 0px 0px 24px -1px rgba(56, 56, 56, 1);
            }
            .error {
                width:300px;
                height:20px;
                height:auto;
                position:absolute;
                left:35%;
                margin-left:-100px;
                bottom:10px;
                background-color: #383838;
                color: #F0F0F0;
                font-family: Calibri;
                font-size: 20px;
                padding:10px;
                text-align:center;
                border-radius: 2px;
                -webkit-box-shadow: 0px 0px 24px -1px rgba(56, 56, 56, 1);
                -moz-box-shadow: 0px 0px 24px -1px rgba(56, 56, 56, 1);
                box-shadow: 0px 0px 24px -1px rgba(56, 56, 56, 1);
            }
        </style>
    </head>
    <body>
        <div>
            <center>
                <br/>
                <br/>
                <span style="font:roboto; font-size:25px;">HINDUSTAN INSTITUTE OF TECHNOLOGY AND SCIENCE <br/> ENGINEERING ENTRENCE EXAM <br/> HITSEEE '15</span>
                <br/>
                <br/>
                <br/>
                <paper-shadow z="2">
                    <br/>
                    <img src="logo_wh.png">
                        <div class='fine' style='display:none'>Login successful ...</div>
                        <div class='error' style='display:none'>Login Unsuccessful ... try Again !</div>
                    <br/>
                    <br/>
                    <br/>
                    <section id="validate">
                         Enter Your Username :
                        <paper-input-decorator  value='{{value}}'  floatingLabel error="Username is required!">
                          <input id="nam" required>
                        </paper-input-decorator>
                        <br/>
                        Enter Your Password :
                        <paper-input-decorator value='{{value}}' floatingLabel error="Password is required!">
                          <input id="pass" type="password" required>
                        </paper-input-decorator>
                        <br/>
                        <br/>
                        <br/>
                        <paper-button onclick="validateAll()" raised class="colored">LOGIN</paper-button>
                    </section>
                </paper-shadow>
            </center>
        </div>
    <script type="text/javascript" src="userdb.json"></script>
    <script>
      function validateAll() {
          var a=0;
        var $d = document.getElementById('validate').querySelectorAll('paper-input-decorator');
        Array.prototype.forEach.call($d, function(d) {
          d.isInvalid = !d.querySelector('input').validity.valid;
            if(d.isInvalid)
            {
                a=1;
            }
        });
          if(a==0)
          {
              var jsondb = JSON.parse(data);
              var ln=Object.keys(jsondb).length;
              var lname = document.getElementById('nam').value;
              var lpass = document.getElementById('pass').value;
              for(var i=0;i<=ln;i++)
              {
                  if(jsondb.user[i].name==lname&&jsondb.user[i].pass==lpass)
                     {
                          $('.fine').fadeIn(400).delay(3000).fadeOut(400);
                            window.clearInterval(2000);
                            post('instruct.php', {name: lname});
                     }
                  else
                  {
                     $('.error').fadeIn(400).delay(3000).fadeOut(400);
                  }
              }
          }
      }
    function post(path, params, method) {
            method = method || "post";
            var form = document.createElement("form");
            form.setAttribute("method", method);
            form.setAttribute("action", path);

            for(var key in params) {
                if(params.hasOwnProperty(key)) {
                    var hiddenField = document.createElement("input");
                    hiddenField.setAttribute("type", "hidden");
                    hiddenField.setAttribute("name", key);
                    hiddenField.setAttribute("value", params[key]);

                    form.appendChild(hiddenField);
                 }
            }

            document.body.appendChild(form);
            form.submit();
        }
    </script>
    </body>
</html>

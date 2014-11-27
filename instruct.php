<html>
    <head>
        <?php
			$cad_name = $_POST['name'];  ?>

        <link rel="import" href="bower_components/paper-button/paper-button.html">
        <style>
            paper-button.colored {
                color: #4B9CDD;
            }

            paper-button[raised].colored {
              background: #4B9CDD;
              color: #fff;
            }
        </style>
    </head>
    <br/>
    <br/>
    <br/>
    <body>
        <center>
            Welcome , <?php echo $cad_name; ?>
            <br/>
            <br/>
            <br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            Instruction<br/>
            <br/>
            <paper-button onclick="post('index.php', {name: '<?php echo $cad_name; ?>'});" raised class="colored">BEGIN YOUR TEST !</paper-button>
        </center>
        <script>
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

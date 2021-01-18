
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="migrtool">
        <h1 class="migrtool__title">MIGRATION TOOL</h1>
        <div class="migrtool-form">
            <h2>Please fill in the FTP info of the old provider</h2>
            <form action="startmigration.php" method="POST">
                <div class="migrtool-form__values">
                    <br/>
                    <div>
                        <label>Host</label>
                        <input type="text" name="Shost" id="Shost">
                    </div>
                    <br/>
                    <div>
                        <label>User</label>
                        <input type="text" name="Suser" id="Suser">
                    </div>
                    <br/>
                    <div>
                        <label>Pass</label>
                        <input type="password" name="Spassword" id="Spassword">
                    </div>
                    <br/>
                    <div>
                        <label>Port</label>
                        <input type="text" name="Sport" id="Sport">
                    </div>
                    <br/>
                    <div>
                        <label>Path</label>
                        <input type="text" name="Spath" id="Spath" placeholder="/domains/domain.tld/public_html">
                        
                    </div>
                </div>
                <br/>
                <input type="submit" id="submit" name="submit" value="Start Transfer">
            </form>
        </div>
        
    </div>
</body>
</html>
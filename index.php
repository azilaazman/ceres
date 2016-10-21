<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--	<title>PHP Starter Application</title>-->
<!--	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
<!--	<link rel="stylesheet" href="style.css" />-->
<!--</head>-->
<!--<body>-->
<!--	<table>-->
<!--		<tr>-->
<!--			<td style='width: 30%;'>-->
<!--				<img class = 'newappIcon' src='images/newapp-icon.png'>-->
<!--			</td>-->
<!--			<td>-->
<!--				<h1 id = "message">--><?php //echo "Hello ceres!"; ?><!--</h1>-->
<!--				<p class='description'></p> Thanks for creating a <span class="blue">Plant IOT</span>.-->
<!---->
<!--			</td>-->
<!--		</tr>-->
<!--	</table>-->
<!--</body>-->
<!--</html>-->
<!-- PHP Mongo Docs: http://php.net/manual/en/class.mongodb.php -->
<!-- PHP Mongo Docs: http://php.net/manual/en/class.mongodb.php -->
<!DOCTYPE html>
<html>

<head>
    <title>IBM Compose for MongoDB for Bluemix sample app</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheets/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" type="text/javascript"></script>
    <script src="/javascripts/main.js" type="text/javascript"></script>
</head>

<body>
<table>
    <tr>
        <td style= "width:30%;">
            <img class = "newappIcon" src="images/logo-graphic-white.png">
        </td>
        <td>
            <h1 id="message">Hello World!</h1>
            <p class="description"></p> Thanks for creating a <a href=""><span class = "blue">Compose for MongoDB sample application</span></a>.
            <h2>Add a word to the database</h2>
            <form id="add-word">
                The word <input type="text" name="word" value="hello"/>
                is defined as <input type="text" name="definition" value="a greeting" />
                <input type="submit" value="Add" />
            </form>
        </td>
    </tr>
    <tr class="hidden">
        <td />
        <td>
            <p class="description">
            <h2>Database output</h2>
            <pre id="displayOutput"></pre>
            </p>
        </td>
    </tr>
</table>

</body>

</html>

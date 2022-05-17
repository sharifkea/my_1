<!DOCTYPE html>
<html>
<head>
	<title>Movie Search</title>
    <link rel="stylesheet" href="css/style.css" />
    <script src="script/jquery-3.5.1.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>	
	<script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
</head>
<body>
    <header>
        <h1>Movie Search</h1>
    </header>	
    <main>
        <div id="all_search">
            <fieldset >
                <label for="txtTitle">Enter Movie Title</label>
                <input id="txtTitle" name="txtTitle" type="text"  required tabindex="1"><br>
                <input type="button" id="btnSubTitle" value="Search">
            </fieldset>
            
        </div>
        <div id="Movies">
            
            
        </div>
    </main>
    <footer>2021 Abul Kasem Mohammed Omar Sharif</footer>
</body>
</html>
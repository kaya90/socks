<!DOCTYPE html>
<html>
<head>
	<title>SockMatch</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
		.inline li{
			display: inline;

		}
		/* label color */
	   .input-field label {
	     color: #000;
	   }
	   /* label focus color */
	   .input-field input[type=text]:focus + label {
	     color: #000;
	   }
	   /* label underline focus color */
	   .input-field input[type=text]:focus {
	     border-bottom: 1px solid #000;
	     box-shadow: 0 1px 0 0 #000;
	   }
	   /* valid color */
	   .input-field input[type=text].valid {
	     border-bottom: 1px solid #000;
	     box-shadow: 0 1px 0 0 #000;
	   }
	   /* invalid color */
	   .input-field input[type=text].invalid {
	     border-bottom: 1px solid #000;
	     box-shadow: 0 1px 0 0 #000;
	   }
	   /* icon prefix focus color */
	   .input-field .prefix.active {
	     color: #000;
	   }
	   .container{
	   	margin-top: 20px;
	   }
	</style>
</head>
<body>
	<nav>
		<div class="nav-wrapper black">
			<a href="#" class="brand-logo">Logo</a>
			<ul id="nav-mobile" class="right hide-on-small-and-down">
				<li><a href="sass.html">Sass</a></li>
				<li><a href="badges.html">Components</a></li>
				<li><a href="collapsible.html">JavaScript</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
	<!-- 	    <div class="col s12">
		    	<ul class="inline">
		    		<li>MEN</li>
		    		<li>WOMEN</li>
		    		<li>KIDS</li>
		    	</ul>
		    </div> -->
		    <div class="row">
			    <form class="col s12">
			      <div class="row">
			        <div class="input-field col s6">
			          <i class="material-icons prefix">search</i>
			          <input id="icon_prefix" type="text" class="validate">
			          <label for="icon_prefix">Search</label>
			        </div>
			    </form>
			</div>
		    <table>
	        <thead>
	          <tr>
	              <th data-field="id">Name</th>
	              <th data-field="name">Item Name</th>
	              <th data-field="price">Item Price</th>
	          </tr>
	        </thead>

	        <tbody>
	          <tr>
	            <td>Alvin</td>
	            <td>Eclair</td>
	            <td>$0.87</td>
	          </tr>
	          <tr>
	            <td>Alan</td>
	            <td>Jellybean</td>
	            <td>$3.76</td>
	          </tr>
	          <tr>
	            <td>Jonathan</td>
	            <td>Lollipop</td>
	            <td>$7.00</td>
	          </tr>
	        </tbody>
	      </table>
	  </div>
	</div>
</body>
</html>
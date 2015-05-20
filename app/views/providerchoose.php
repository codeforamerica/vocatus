<!doctype html>
<html>
  <head>
    	<title>Choose your provider</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="">
    	<meta name="author" content="">



    	<!-- standard styles -->
	    	<link type="text/css" rel="stylesheet" href="<?php echo $api_url; ?>/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="<?php echo $api_url; ?>/css/tablesorter.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo $api_url; ?>/css/theme.bootstrap.css"/>
	    	<!-- standard javascript -->
    	<script type="text/javascript" language="javascript" src="<?php echo $api_url; ?>/js/jquery.min.js"></script>
    	<script type='text/javascript' language="javascript" src="<?php echo $api_url; ?>/js/jquery.tablesorter.min.js"></script>
    	<script type='text/javascript' language="javascript" src="<?php echo $api_url; ?>/js/jquery.tablesorter.widgets.min.js"></script>
	<script type='text/javascript' language="javascript" src='<?php echo $api_url; ?>/js/dust-full-2.6.2.js'></script>
	<script type="text/javascript" language="javascript" src="<?php echo $api_url; ?>/js/dust-helpers-1.6.2.js"></script>
    	<script type="text/javascript" language="javascript" src="<?php echo $api_url; ?>/js/bootstrap.min.js"></script>
	

        <!-- custom javascript -->
	<script type="text/javascript" src="/js/util.js"></script>
	
        <!-- custom css -->
        <link type="text/css" rel="stylesheet" href="<?php echo $api_url; ?>/css/colors.css"/>

	<!-- load our dust templates -->
	<script src='/dust/search_dust.js'></script>

    	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    	<!--[if lt IE 9]>
      		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    	<![endif]-->

    	<!-- Fav and touch icons -->
    	<link rel="shortcut icon" href="<?php echo $api_url; ?>/favicon.ico">
    	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $api_url; ?>/ico/apple-touch-icon-144-precomposed.png">
    	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $api_url; ?>/ico/apple-touch-icon-114-precomposed.png">
    	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $api_url; ?>/ico/apple-touch-icon-72-precomposed.png">
    	<link rel="apple-touch-icon-precomposed" href="<?php echo $api_url; ?>/ico/apple-touch-icon-57-precomposed.png">


        <!-- custom css navbar code fixes IE9 issue -->
	<style type="text/css">

      		body {
        		padding-top: 50px;
        		padding-bottom: 20px;
      			}
section {
    padding-top: 60px;
    margin-top: -60px;
}


  .navbar {
      background-color: white; 
      background-image:none;
  }


    	</style>



	<!-- sort the table if you can find it.. -->
	
 <script>
  $(document).ready(function() 
       { 
           	$('#sorted_table').tablesorter({
			widgets : ['filter','stickyHeaders'],
			widgetOptions : {
					filter_hideFilters : false,
					stickyHeaders_offset: 52
					}
		}); 
     		if ($("[rel=tooltip]").length) {
     			$("[rel=tooltip]").tooltip();
     		}
		
	


		
       } 
  );
  </script>

 


  </head>  
  <body>

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">vocatus</a>
    </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
	 </ul>

      <ul class="nav navbar-nav navbar-right">
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


	<!--From: search_name.tpl start -->
<script type="text/javascript" > 
/*
	This is how you aim the API to either target a person search or an organizational search...
	
*/
	is_person = false;
        is_org = true;     
        is_address = false; 
        is_ident = false; 
	debug = false;

        

</script>

<!-- from patch_javsacript.tpl --> 
<script type="text/javascript"> 
	var core_search_dust_file = "search_dust";
</script>
<!-- end patch_javsacript.tpl --> 

<!--From: search_javascript.tpl start -->
<link href='<?php echo $api_url; ?>/css/tablesorter.css' rel='stylesheet' type='text/css'>

<style type="text/css">
#most ul { list-style-type: none; }
#most label { display: inline; }
</style>



	<script type="text/javascript" > 


		function load_npi(){

			var first_name = '';
			var last_name = '';
			var org_name = '';

			if(debug){ //the we are in the debug search mode..

				//only needed because the are not statically set
				//in the normal code they are statically set
				is_hit_api = $('#is_hit_api').is(':checked');
				is_ident = $('#is_ident').is(':checked');
				is_org = $('#is_org').is(':checked');
				is_address = $('#is_address').is(':checked');
				is_person = $('#is_person').is(':checked');
			}
/*
			var radio_selected = '';
			radio_selected = $('form input[type=radio]:checked').val();
			if(typeof(radio_selected) === 'undefined'){
				radio_selected = '';
			}
*/
			radio_selected = '';

			if(is_org){
				org_name = document.npi_form.org_name.value;
			}else{	
				first_name = document.npi_form.first_name.value;
				last_name = document.npi_form.last_name.value;
			}
		
			var address = document.npi_form.address.value;
			var state = document.npi_form.state.value;
			var city_name = document.npi_form.city.value;
			var zip = document.npi_form.zip.value;
			var ident = document.npi_form.an_ident.value;


//All searches are good on Patch
		//	var is_search_good = is_valid_form(address,state,city_name,zip,radio_selected,ident,first_name,last_name,org_name);
//			if(!is_search_good){
//				$('#errorModal').modal();
//				return(false);
//			}

			var query_string = 
						'?first_name=' + first_name +
						'&last_name=' + last_name +
						'&org_name=' + org_name +
						'&address=' + address +
						'&state=' + state +
						'&city_name=' + city_name +
						'&zip=' + zip +
						'&taxonomy=' + radio_selected +
						'&ident=' + ident +
						'&is_person=' + is_person +
						'&is_address=' + is_address +
						'&is_org=' + is_org +
						'&is_ident=' + is_ident +
						'&format=aha_table';

			var my_query = {};
			my_query.first_name = first_name;
			my_query.last_name = last_name;
			my_query.org_name = org_name;
			my_query.address = address;
			my_query.state = state;
			my_query.city_name = city_name; 
			my_query.zip = zip;
			my_query.taxonomy = radio_selected;
			my_query.ident = ident;
			my_query.is_person = is_person; 
			my_query.is_address = is_address; 
			my_query.is_org = is_org;
			my_query.is_dent = is_ident;

		
			var my_search = {};
//			var my_search.query = my_query;

			var query_url = '<?php echo $api_url; ?>api/search';
			var query_shortcut_url = query_url + query_string;

                        if(debug){
//				alert("inside debug");
                                //we are testing the url generation 
                                //as part of debugging...
                        	var debug_html = "<h3><a href='"+ query_url + query_string + "' > My Query </a> </h3> <pre>" + JSON.stringify(my_query , undefined, 2) + "</pre>";      
                        	$('#npi_results').html(debug_html);   
				if(is_hit_api){
                        		$.post(query_url, my_query).done( function(data){  
                                	debug_html = debug_html + "<h3> The Results </h3> <pre> " + JSON.stringify(data, undefined, 2) + "</pre>";
                
                                	$('#npi_results').html(debug_html);     

					});
				}

                        }else{			
				//then we are live, lets do this shit.
	
				var dot_link  = "<a href='" + query_shortcut_url + "'>.</a>";
				$('#npi_results').html('');	
				$('#dot_div').html(dot_link);	

				$('#results_waiting').show();
	
				$.post(query_url, my_query).done( function(data){ 
					dust.render(core_search_dust_file, data, function(err,out){
						$('#results_waiting').hide();
						$('#npi_results').html(out);
						$('#sorted_table').tablesorter({
                        				widgets : ['filter','stickyHeaders'],
                        				widgetOptions : {
                                        			filter_hideFilters : false,
								stickyHeaders_offset: 52
                                        		}
						});	
					});
				});			

			}


		//	jah('api/index.php?api_key=&first_name=John&last_name=smith&city_name=&format=ullinks','npi_results');
		}




	</script>



<!--From: search_javascript.tpl end -->


      <div class="row">
        <div class="col-md-3">
          <div class="well sidebar-nav">

<!-- Begin sidebar -->
<form name='npi_form'>

	<input type='hidden' name='address' id='address' value=''>
	<input type='hidden' name='first_name' id='first_name' value=''>
	<input type='hidden' name='last_name' id='last_name' value=''>
	<input type='hidden' name='an_ident' id='an_ident' value=''>

<h2> Search By Organization </h2>

        <p>This allows you to also search for the name of an organization. Try your local hospital. </p>
        <div class='form_group'>
	<label for='org_name'>Organization Name</label>
                        <input value=''class='form-control' type='text' name='org_name' placeholder='Type an organization name..'>

	</div>
<br>
<!-- search_main_form.tpl start -->

<div id="most" >
<div class='form-group'>
	<label for='city'>City</label>
        <input class="form-control" type='text' name='city' id='city' placeholder='Type a city..' value=''>
</div>

<div class='form-group'>
	<label for='zip'>Zip</label>
        <input class="form-control"  type='text' name='zip' id='zip' placeholder='Type a zip' value=''>
</div>
	<!-- state_select.tpl start -->

<div class='form-group'>
	<label for='state'>State</label>
<select class='form-control' name="state" id="state">
<option disabled  value="">Choose a state</option>
<option  value="">all states (default)</option>
<option  value="AK">AK (ALASKA)</option>
<option  value="AL">AL (ALABAMA)</option>
<option  value="AR">AR (ARKANSAS)</option>
<option  value="AS">AS (AMERICAN SAMOA)</option>
<option  value="AZ">AZ (ARIZONA)</option>
<option  value="CA">CA (CALIFORNIA)</option>
<option  value="CO">CO (COLORADO)</option>

<option  value="CT">CT (CONNECTICUT)</option>
<option  value="DC">DC (DISTRICT OF COLUMBIA)</option>
<option  value="DE">DE (DELAWARE)</option>
<option  value="FL">FL (FLORIDA)</option>
<option  value="FM">FM (FED STATES OF MICRONESIA)</option>
<option  value="GA">GA (GEORGIA)</option>
<option  value="GU">GU (GUAM)</option>
<option  value="HI">HI (HAWAII)</option>
<option  value="IA">IA (IOWA)</option>

<option  value="ID">ID (IDAHO)</option>
<option  value="IL">IL (ILLINOIS)</option>
<option  value="IN">IN (INDIANA)</option>
<option  value="KS">KS (KANSAS)</option>
<option  value="KY">KY (KENTUCKY)</option>
<option  value="LA">LA (LOUISIANA)</option>
<option  value="MA">MA (MASSACHUSETTS)</option>
<option  value="MD">MD (MARYLAND)</option>
<option  value="ME">ME (MAINE)</option>

<option  value="MH">MH (MARSHALL ISLANDS)</option>
<option  value="MI">MI (MICHIGAN)</option>
<option  value="MN">MN (MINNESOTA)</option>
<option  value="MO">MO (MISSOURI)</option>
<option  value="MP">MP (N MARIANA ISLANDS)</option>
<option  value="MS">MS (MISSISSIPPI)</option>
<option  value="MT">MT (MONTANA)</option>
<option  value="NC">NC (NORTH CAROLINA)</option>
<option  value="ND">ND (NORTH DAKOTA)</option>

<option  value="NE">NE (NEBRASKA)</option>
<option  value="NH">NH (NEW HAMPSHIRE)</option>
<option  value="NJ">NJ (NEW JERSEY)</option>
<option  value="NM">NM (NEW MEXICO)</option>
<option  value="NV">NV (NEVADA)</option>
<option  value="NY">NY (NEW YORK)</option>
<option  value="OH">OH (OHIO)</option>
<option  value="OK">OK (OKLAHOMA)</option>
<option  value="OR">OR (OREGON)</option>

<option  value="PA">PA (PENNSYLVANIA)</option>
<option  value="PR">PR (PUERTO RICO)</option>
<option  value="PW">PW (PALAU)</option>
<option  value="RI">RI (RHODE ISLAND)</option>
<option  value="SC">SC (SOUTH CAROLINA)</option>
<option  value="SD">SD (SOUTH DAKOTA)</option>
<option  value="TN">TN (TENNESSEE)</option>
<option  value="TX">TX (TEXAS)</option>
<option  value="UT">UT (UTAH)</option>

<option  value="VA">VA (VIRGINIA)</option>
<option  value="VI">VI (VIRGIN ISLANDS)</option>
<option  value="VT">VT (VERMONT)</option>
<option  value="WA">WA (WASHINGTON)</option>
<option  value="WI">WI (WISCONSIN)</option>
<option  value="WV">WV (WEST VIRGINIA)</option>
<option  value="WY">WY (WYOMING)</option>
<option  value="ZZ">ZZ (FOREIGN COUNTRY)</option>
</select>
</div>
<!-- state_select.tpl end -->


<div class='form-group'>          
</div>
 <br>
		<input class='btn btn-default' type='button' name='Search' id='load_npi_button' value='Search' onclick="load_npi(); return false;">
</div> <!-- end most -->
<!-- search_main_form.tpl end -->


</form>
<div id="dot_div">

</div>
        <p>© CareSet 2014</p>
          </div><!--/.well -->
        </div><!--/col-md-3 -->
<!-- End sidebar, begin results area -->
<br>
<div class="col-md-9"> <!-- Start results col-md  -->

<!--From: search_result.tpl start -->
<div id='npi_results'>


<!-- This div will be replaced by results goodness!! -->
          <div class="jumbotron">
	   <div class="container">
            <h1>Find your healthcare provider</h1>
<p>
Find the clinic, hospital, lab or other organization where you would like to send your HIPAA request!
This only works if you have been a patient of this organization of course!
</p>
          </div>
		</div>
</div> <!-- End npi_results -->

<div id='results_waiting' style='display: none'>
<div id='loading_div' class="row">
  <div class="col-md-3"></div>
  <div class="col-md-7">
    <h1>
      <i class='fa fa-refresh fa-spin fa-3x'></i>
      Loading your results
    </h1>
<h3> Please be patient. This is harder than it looks ;)</h3>
  </div>
  <div class="col-md-2"></div>
</div>

</div>

<!--From: search_result.tpl stop -->


</div> <!-- End results col-md -->

</div> <!-- end row -->

<!--From: search_name.tpl stop -->




  </body>

</html>

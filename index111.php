<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>AJAX Rating Stars Demo</title>
		<script type="text/javascript" src="../lib/prototype/prototype.js"></script>
		<script type="text/javascript" src="stars.js"></script>
		<style type="text/css">
			.prop{width: 500px; border: 1px green dotted; background: #EFEFEF; padding: 10px;}
			.prop em {color:green; font-weight: bold;}
			.prop td {vertical-align: top; text-align: left; padding: 5px;}
		</style>
	</head>
	<body style="margin: 0px; padding: 0px; background: url(example_files/header-bg.png); background-repeat: repeat-x;">
			<h1 style="margin: 20px 0px 39px 20px; color: white; vertical-align: middle;">AJAX Rating Stars Demo</h1>
		<br/>
		<div style="padding: 20px;">
			<table>
				<tr>
					<td valign="top">
						<h2>Examples</h2>
						<table cellpadding="10">
							<tr>
								<td colspan="2">
									<h3>Simple form binding</h3>								</td>
							</tr>
							<tr>
								<td valign="top">
									<form><input type="text" name="myRating" value="" id="myRating" readonly="readonly"/></form>
									<script type="text/javascript">
										var s1 = new Stars({
											maxRating: 5,
											bindField: 'myRating',
											imagePath: 'images/',
											value: 4.5
										});
									</script>								</td>
								<td valign="top"><pre style="color: blue">
&lt;script type="text/javascript"&gt;
  var s1 = new Stars({
    maxRating: 5,
    bindField: 'myRating',
    imagePath: 'images/',
    value: 4.5
  });
&lt;/script&gt;</pre>								</td>
							</tr>
							<tr>
								<td colspan="2">
									<h3>JavaScript callback function</h3>								</td>
							</tr>
							<tr>
								<td valign="top">
									<script type="text/javascript">

										function rating(val)
										{
											alert('You rated it ' + val + ' star(s)!');
										}

										var s2 = new Stars({
											maxRating: 5,
											imagePath: 'images/',
											callback: rating
										});

									</script></td>
								<td valign="top"><pre style="color: blue">
&lt;script type="text/javascript"&gt;
  function rating(val)
  {
    alert('You rated it ' + val + ' star(s)!');
  }
  var s2 = new Stars({
    maxRating: 5,
    imagePath: 'images/',
    callback: rating
  });
&lt;/script&gt;</pre></td>
							</tr>
							<tr>
								<td colspan="2">
									<h3>Sending values through AJAX</h3>								</td>
							</tr>
							<tr>
								<td valign="top">
									<script type="text/javascript">
										function ajaxRating(xml)
										{
											var x = xml.responseXML;
											var xmlRating = x.getElementsByTagName('rating');
											var rating = xmlRating[0].firstChild.nodeValue;
											alert('You rated it ' + rating + ' star(s)!');
										}
										var s3 = new Stars({
											maxRating: 5,
											actionURL: 'rate.php?rating=',
											callback: ajaxRating,
											imagePath: 'images/',
											value: 3
										});
									</script></td>
								<td valign="top"><pre style="color: blue">
&lt;script type="text/javascript"&gt;
  function ajaxRating(xml)
  {
    var x = xml.responseXML;
    var xmlRating = x.getElementsByTagName('rating');
    var rating = xmlRating[0].firstChild.nodeValue;
    alert('You rated it ' + rating + ' star(s)!');
  }
  var s3 = new Stars({
    maxRating: 5,
    actionURL: 'rate.php?rating=',
    callback: ajaxRating,
    imagePath: 'images/',
    value: 3
  });
&lt;/script&gt;</pre>								</td>
							</tr>
							<tr>
								<td colspan="2">
									<h3>Locking Example 1: Lock on update</h3>								</td>
							</tr>

							<tr>
								<td valign="top">
									<script type="text/javascript">

										function rating2(val)
										{
											alert('You rated it ' + val + ' star(s)!');
											s4.locked = true;
										}

										var s4 = new Stars({
											maxRating: 5,
											imagePath: 'images/',
											callback: rating2
										});

									</script></td>
								<td valign="top"><pre style="color: blue">
&lt;script type="text/javascript"&gt;
  function rating(val)
  {
    alert('You rated it ' + val + ' star(s)!');
    s4.locked = true;
  }
  var s4 = new Stars({
    maxRating: 5,
    imagePath: 'images/',
    callback: rating
  });
&lt;/script&gt;</pre></td>
							</tr>
							<tr>
								<td colspan="2">
									<h3>Locking Example 2: Prelocked</h3>								</td>
							</tr>

							<tr>
								<td valign="top">
									<script type="text/javascript">
										var s5 = new Stars({
											maxRating: 5,
											value: 4,
											imagePath: 'images/',
											locked: true
										});

									</script></td>
								<td valign="top"><pre style="color: blue">
&lt;script type="text/javascript"&gt;
   var s5 = new Stars({
    maxRating: 5,
    value: 4,
    imagePath: 'images/',
    locked: true
  });
&lt;/script&gt;</pre></td>
							</tr>
							<tr>
								<td colspan="2" valign="top"><h3>External Value Setting with a disabled callback</h3></td>
							</tr>							
							<tr>
								<td valign="top">
									<div>
										<input type="radio" value="1" name="starval" id="val1" onclick="setStarValue(1)" /><label for="val1">1</label>
										<input type="radio" value="2" name="starval" id="val2" onclick="setStarValue(2)" /><label for="val2">2</label>
										<input type="radio" value="3" name="starval" id="val3" onclick="setStarValue(3)" /><label for="val3">3</label>
										<input type="radio" value="4" name="starval" id="val4" onclick="setStarValue(4)" /><label for="val4">4</label>
										<input type="radio" value="5" name="starval" id="val5" onclick="setStarValue(5)" /><label for="val5">5</label>
									</div>
									<script type="text/javascript">
										function setStarValue(val) {
											window.s7.setValue(val, false);
										}
										function uncalledCallBack(val)
										{
											alert('was called anyway');
										}
										var s7 = new Stars({
											maxRating: 5,
											callback: uncalledCallBack
										});
									</script>
								</td>
								<td valign="top"><pre style="color: blue">
<?php echo htmlspecialchars(<<<JAVASCRIPT
function setStarValue(val) {
	window.s7.setValue(val, false);
}
function uncalledCallBack(val)
{
	alert('was called anyway');
}
var s7 = new Stars({
	maxRating: 5,
	callback: uncalledCallBack
});

JAVASCRIPT
);

?>
</pre></td>
							</tr>
						</table>
					</td>
					<td valign="top">
				<h2>Instantiation Options</h2>
				<div class="prop">
					<table>
						<tr>
							<td>
								<table>
									<tr>
										<td><em>maxRating</em>:</td>
										<td>integer. The maximum rating possible, also the number of stars to display.</td>
									</tr>
									<tr>
										<td><em>locked</em>:</td>
										<td>boolean (optional) Turns off the ability to use the rating stars, but still displays them.</td>
									</tr>
									<tr>
										<td><em>imagePath</em>:</td>
										<td>(optional) the path to look fro the star images in. Default: ./images/</td>
									</tr>
									<tr>
										<td><em>bindField</em>:</td>
										<td>(optional) the input object, or ID of the input object, to apply the rating value to.</td>
									</tr>
									<tr>
										<td><em>value</em>:</td>
										<td>(optional) the initial value of the rating.</td>
									</tr>
									<tr>
										<td><em>actionURL</em>:</td>
										<td>(optional) the URL to call when a rating is made. The rating value will be appended to the actionURL. (eg: '/rating.php?rating=' will be sent off as '/rating.php?rating=5' when the 5th star is clicked).</td>
									</tr>
									<tr>
										<td><em>callback</em>:</td>
										<td>(optional) the name of the javascript function to call when the widget is clicked. If actionURL is specified, this will be executed on the completion of the AJAX call with the XML document as the only parameter. If no actionURL is specified, the value of the rating widget will be passed in as the only parameter.</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>
				<h2>Properties</h2>
				<div class="prop">
					<table>
						<tr>
							<td>
								<table>
									<tr>
										<td><em>value</em>:</td>
										<td>integer. The maximum rating possible, also the number of stars to display.</td>
									</tr>
									<tr>
										<td><em>locked</em>:</td>
										<td>boolean (optional) Turns off the ability to use the rating stars, but still displays them.</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>
				<h2>Methods</h2>
				<div class="prop">
					<table>
						<tr>
							<td>
								<table>
									<tr>
										<td><em>setValue(number value, boolean doCallBack)</em>:</td>
										<td>sets the value of the rating object. Also fires the callback/ajax functions, unless doCallBack is false (true is default).</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>
			</td>
		</tr>
	</table>
		</div>
		<?php include_once('../urchin.php'); ?>
	</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- If you delete this tag, the sky will fall on your head -->
<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Your TechFitness report</title>

</head>
<style>
* { 
	margin:0;
	padding:0;
}
@font-face {
  font-family: 'Avenir';
  src: url({{asset('fonts/avenir-roman.eot')}});
  src: url({{asset('fonts/avenir-roman.eot')}}) format('embedded-opentype'),
       url({{asset('fonts/avenir-roman.woff2')}}) format('woff2'),
       url({{asset('fonts/avenir-roman.woff')}}) format('woff'),
       url({{asset('fonts/avenir-roman.ttf')}}) format('truetype'),
       url({{asset('fonts/avenir-roman.svg#AvenirLTStd55Roman')}}) format('svg');
}
@font-face {
  font-family: 'AvenirHeavy';
  src: url({{asset('fonts/avenirltstdheavy.eot')}});
  src: url({{asset('fonts/avenirltstdheavy.eot')}}) format('embedded-opentype'),
       url({{asset('fonts/avenirltstdheavy.woff2')}}) format('woff2'),
       url({{asset('fonts/avenirltstdheavy.woff')}}) format('woff'),
       url({{asset('fonts/avenirltstdheavy.ttf')}}) format('truetype'),
       url({{asset('fonts/avenirltstdheavy.svg#AvenirLTStd85Heavy')}}) format('svg');
}
* { font: 14px Arial, Helvetica, sans-serif; color: #3e3e3e }
img { 
	max-width: 100%; 
}
.collapse {
	margin:0;
	padding:0;
}
body {
	-webkit-font-smoothing:antialiased; 
	-webkit-text-size-adjust:none; 
	width: 100%!important; 
	height: 100%;
}
h1,h2,h3,h4,h5,h6 {
font-family: 'Avenir', Arial, "Lucida Grande", sans-serif; line-height: 1.1; margin-bottom:15px;
}
h1 small, h2 small, h3 small, h4 small, h5 small, h6 small { font-size: 60%; color: #6f6f6f; line-height: 0; text-transform: none; }

h1 { font-weight:200; font-size: 44px;}
h2 { font-weight:200; font-size: 37px;}
h3 { font-weight:500; font-size: 24px; font-family: 'Avenir', Arial, "Lucida Grande", sans-serif}
h4 { font-weight:500; font-size: 23px;}
h5 { font-weight:bold; font-size: 17px; margin-bottom:10px;}
h6 { font-weight:900; font-size: 12px; color:#FFF; font-weight: normal; line-height: 30px; margin-bottom: 0; background: url(../../img/hp_email.png) no-repeat 100% 50%; padding-right: 30px;}

.collapse { margin:0!important;}

p, ul { 
	margin-bottom: 10px; 
	font-weight: normal; 
	font-size:14px; 
	line-height:1.2;
	font-family: 'Avenir', Arial, 'Lucida Grande', sans-serif;
}
p.lead { font-size:15px; }
p.last { margin-bottom:0px;}

ul li {
	margin-left:5px;
	list-style-position: inside;
}
</style>
<body bgcolor="#FFFFFF">

<!-- HEADER -->
<table class="head-wrap" bgcolor="#174a85" style="width: 100%; color: #fff; font-size: 12px;margin:0;padding:0; border-collapse:collapse;">
	<tr>
		<td style="margin:0;padding:0;"></td>
		<td class="header container" style="display:block!important; max-width:600px!important;margin:0 auto!important;clear:both!important;padding:0;">		
            <div class="content" style="padding:0px;max-width:600px;margin:0 auto;display:block;">
                <table bgcolor="#174a85" style="width: 100%;margin:0; padding:0;">
                <tr>
                    <td align="right" style="margin:0; padding:0;"><h6 style="margin:0; padding:0; font-family: 'Avenir', Arial, 'Lucida Grande', sans-serif; line-height: 1.1;font-weight:900; font-size: 12px; color:#FFF; font-weight: normal; line-height: 30px; margin-bottom: 0; background: url(../../img/hp_email.png) no-repeat 100% 50%; padding-right: 30px;">in association with</h6></td>
                </tr>
            </table>
            </div>
				
		</td>
		<td style="margin:0;padding:0;"></td>
	</tr>
</table><!-- /HEADER -->
<table class="body-wrap" style="width: 100%;margin:0; padding:0; border-collapse:collapse; border-spacing: 0;">
	<tr>
		<td></td>
		<td class="container" bgcolor="#FFFFFF" style="display:block!important; max-width:600px!important;margin:0 auto!important;clear:both!important; padding:0;">
			<div class="content" style="margin:0; padding:0;">
			<table style="width: 100%;margin:0; padding:0; border-collapse:collapse; border-spacing: 0;">
				<tr>
					<td style="margin:0; padding:0;">
						<img src="{{asset('img/email_img.jpg')}}" width="100%" style="display:block; margin-bottom: 20px;" />
						<h3 style="font-family: 'Avenir', Arial, 'Lucida Grande', sans-serif; line-height: 1.1; margin-bottom:20px;font-weight:500; font-size: 24px;">Hi {{$fname}},</h3>
						<p class="lead" style="margin-bottom: 10px; font-weight: normal; font-size:14px; line-height:1.2;font-family: 'Avenir', Arial, 'Lucida Grande', sans-serif;font-size:15px;margin:0; padding:0;">
							As promised, here's the link to download your TechFitness report. This breaks down your performance by category and helps you benchmark yourself against other organisations operating within EMEA.
						</p>

						
						<!-- Callout Panel -->
						<p class="callout" style="margin:15px auto; width: 316px;">
							<a href="{{ URL::asset('quiz/download/'.$userid) }}" style="display: block;background: url({{ URL::asset('img/email_download.jpg')}});position: relative;font-size: 22px;font-family: arial;color: #242638;display: block;text-decoration: none;margin: 0;padding: 135px 0 0 41px;border: 0;overflow: visible;width: 275px;height: 60px;text-align: left;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px; text-indent:-9999px; overflow:hidden">Download now</a>
						</p><!-- /Callout Panel -->
						
						<!--h3>Title Ipsum <small>This is a note.</small></h3-->
						<p style="margin:0; margin-bottom: 10px; font-weight: normal; font-size:14px; line-height:1.2;font-family: 'Avenir', Arial, 'Lucida Grande', sans-serif;padding:0;">
							Also, once you've digested the report why not visit <a href="http://hp.com/go/businessready" style="color:#024886">HP Business Ready</a> to keep up to date on the latest business technology thinking. For examples, here is a selection of articles that may be of interest:
						</p>
						<!--a class="btn">Click Me!</a-->
												
						<br/>					
												
						<!-- social & contact -->
						<table class="social" width="100%" style="width: 100%;margin:0; padding:0;background-color: #ebebeb; border-collapse:collapse;">
							<tr>
								<td style="margin:0; padding:0;">
									
									<!--- column 1 -->
									<table align="left" class="column" style="width: 280px;	min-width: 279px;float:left;margin:0; padding:0;">
										<tr>
											<td style=" padding:0;padding: 15px;margin:0;">
												<h5 style="margin:0; font-family: 'Avenir', Arial, 'Lucida Grande', sans-serif; line-height: 1.1; margin-bottom:10px;font-weight:bold; font-size: 17px;padding:0;">Security</h5>
												<p class="" style="margin:0; margin-bottom: 10px; font-weight: normal; font-size:14px; line-height:1.2; font-family: 'Avenir', Arial, 'Lucida Grande', sans-serif;padding:0; height: 55px;">
													Is your printer putting sensitive data at risk? Top 10 dangers of staying on Windows XP 
												</p>
												<a href="http://h20435.www2.hp.com/t5/HP-BusinessReady/Is-your-printer-putting-sensitive-data-at-risk/ba-p/89690#.VI7r8FesV7c" class="btn" style="display: block;text-decoration: none;background: url({{asset('img/email_click.jpg')}});position: relative;font-size: 14px;font-family: 'Avenir', Arial, 'Lucida Grande';color: #242638;outline: 0 none;margin: 0;padding: 0px;border: 0;overflow: visible;width: 150px;height: 53px;text-align: left;margin-bottom: 1em; text-indent:-9999px;overflow:hidden">Click here</a>
											</td>
										</tr>
									</table><!-- /column 1 -->	
									
									<!--- column 2 -->
									<table align="left" class="column" style="width: 280px;	min-width: 279px;float:left;">
										<tr>
											<td style=" padding:0;padding: 15px;margin:0;">				
												<h5 style="margin:0; font-family: 'Avenir', Arial, 'Lucida Grande', sans-serif; line-height: 1.1; margin-bottom:10px;font-weight:bold; font-size: 17px;padding:0;">Cloud Computing</h5>
												<p class="" style="margin:0; margin-bottom: 10px; font-weight: normal; font-size:14px; line-height:1.2; font-family: 'Avenir', Arial, 'Lucida Grande', sans-serif;padding:0; height: 55px;">
													Enterprise cloud computing myths debunked
												</p>
												<a href="http://h20435.www2.hp.com/t5/HP-BusinessReady/Top-10-dangers-of-staying-on-Windows-XP/ba-p/92718#.VI7tFVesV7c" class="btn" style="display: block;text-decoration: none;background: url({{asset('img/email_click.jpg')}});position: relative;font-size: 14px;font-family: 'Avenir', Arial, 'Lucida Grande';color: #242638;outline: 0 none;margin: 0;padding: 0px;border: 0;overflow: visible;width: 150px;height: 53px;text-align: left;margin-bottom: 1em; text-indent:-9999px;overflow:hidden">Click here</a>
											</td>
										</tr>
									</table><!-- /column 2 -->
									<span class="clear"></span>	
								</td>
							</tr>
							<tr>
								<td>
									
									<!--- column 1 -->
									<table align="left" class="column" style="width: 280px;	min-width: 279px;float:left; border-collapse:collapse;">
										<tr>
											<td style=" padding:0;padding: 15px;margin:0;">
												<h5 style="margin:0; font-family: 'Avenir', Arial, 'Lucida Grande', sans-serif; line-height: 1.1; margin-bottom:10px;font-weight:bold; font-size: 17px;padding:0;">Mobility</h5>
												<p class="" style="margin:0; margin-bottom: 10px; font-weight: normal; font-size:14px; line-height:1.2; font-family: 'Avenir', Arial, 'Lucida Grande', sans-serif;padding:0; height: 55px;">
													A guide to hot desking BYOD printing: the things to consider

												</p>
												<a href="http://h20435.www2.hp.com/t5/HP-BusinessReady/Enterprise-cloud-computing-myths-debunked/ba-p/91496#.VI7tc1esV7c" class="btn" style="display: block;text-decoration: none;background: url({{asset('img/email_click.jpg')}});position: relative;font-size: 14px;font-family: 'Avenir', Arial, 'Lucida Grande';color: #242638;outline: 0 none;margin: 0;padding: 0px;border: 0;overflow: visible;width: 150px;height: 53px;text-align: left;margin-bottom: 1em; text-indent:-9999px;overflow:hidden">Click here</a>
											</td>
										</tr>
									</table><!-- /column 1 -->	
									
									<!--- column 2 -->
									<table align="left" class="column" style="width: 280px;	min-width: 279px;float:left; border-collapse:collapse;">
										<tr>
											<td style=" padding:0;padding: 15px;margin:0;">				
												<h5 style="margin:0; font-family: 'Avenir', Arial, 'Lucida Grande', sans-serif; line-height: 1.1; margin-bottom:10px;font-weight:bold; font-size: 17px;padding:0;">Big Data</h5>
												<p class="" style="margin:0; margin-bottom: 10px; font-weight: normal; font-size:14px; line-height:1.2; font-family: 'Avenir', Arial, 'Lucida Grande', sans-serif;padding:0; height: 55px;">
													5 ways your small business could benefit from big data
												</p>
												<a href="http://h20435.www2.hp.com/t5/HP-BusinessReady/5-ways-your-small-business-can-benefit-from-big-data/ba-p/92118#.VI7uqVesV7c" class="btn" style="display: block;text-decoration: none;background: url({{asset('img/email_click.jpg')}});position: relative;font-size: 14px;font-family: 'Avenir', Arial, 'Lucida Grande';color: #242638;outline: 0 none;margin: 0;padding: 0px;border: 0;overflow: visible;width: 150px;height: 53px;text-align: left;margin-bottom: 1em; text-indent:-9999px;overflow:hidden">Click here</a>
											</td>
										</tr>
									</table><!-- /column 2 -->
									
									<span class="clear" style="display: block; clear: both;"></span>	
									
								</td>
							</tr>
						</table><!-- /social & contact -->			
					</td>
				</tr>
			</table>
			</div>
									
		</td>
		<td></td>
	</tr>
</table><!-- /BODY -->

<!-- FOOTER -->
<table class="footer-wrap" style="width: 100%;	clear:both!important;margin:0; padding:0; border-collapse:collapse;">
	<tr>
		<td align="center" style="margin:0; padding:10px;">
            <p>This email is automatically generated, please do not reply.<br/></p>
            <a href="{{url('/email', array($userid))}}" style="color:#024886;font-family: 'Avenir', Arial, 'Lucida Grande', sans-serif;">View in Browser</a><br/>
        </td>
	</tr>
</table><!-- /FOOTER -->

</body>
</html>
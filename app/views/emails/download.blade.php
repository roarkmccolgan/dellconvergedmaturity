<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Your TechFitness report</title>
        <style type="text/css">
			/* /\/\/\/\/\/\/\/\/ CLIENT-SPECIFIC STYLES /\/\/\/\/\/\/\/\/ */
			#outlook a{padding:0;} /* Force Outlook to provide a "view in browser" message */
			.ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
			.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing */
			body, table, td, p, a, li, blockquote{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
			table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up */
			img{-ms-interpolation-mode:bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */

			/* /\/\/\/\/\/\/\/\/ RESET STYLES /\/\/\/\/\/\/\/\/ */
			body{margin:0; padding:0;}
			img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
			table{border-collapse:collapse !important;}
			body, #bodyTable, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;}

			/* /\/\/\/\/\/\/\/\/ TEMPLATE STYLES /\/\/\/\/\/\/\/\/ */
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

			/* ========== Page Styles ========== */

			#bodyCell{padding:20px; padding-top:0}
			#templateContainer, #template600{width:600px;}

			/**
			* @tab Page
			* @section background style
			* @tip Set the background color and top border for your email. You may want to choose colors that match your company's branding.
			* @theme page
			*/
			body, #bodyTable{
				background-color:#FFF;
			}

			/**
			* @tab Page
			* @section heading 1
			* @tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
			* @style heading 1
			*/
			h1{
				color:#242638 !important;
				display:block;
				font-family:'Avenir', arial;
				font-size:26px;
				font-style:normal;
				font-weight:normal;
				line-height:100%;
				letter-spacing:normal;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				text-align:left;
			}

			/**
			* @tab Page
			* @section heading 2
			* @tip Set the styling for all second-level headings in your emails.
			* @style heading 2
			*/
			h2{
				color:#242638 !important;
				display:block;
				font-family:'Avenir', arial;
				font-size:20px;
				font-style:normal;
				font-weight:bold;
				line-height:100%;
				letter-spacing:normal;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				text-align:left;
			}

			/**
			* @tab Page
			* @section heading 3
			* @tip Set the styling for all third-level headings in your emails.
			* @style heading 3
			*/
			h3{
				color:#242638 !important;
				display:block;
				font-family:'Avenir', arial;
				font-size:16px;
				font-style:italic;
				font-weight:normal;
				line-height:100%;
				letter-spacing:normal;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				text-align:left;
			}

			/**
			* @tab Page
			* @section heading 4
			* @tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
			* @style heading 4
			*/
			h4{
				color:#242638 !important;
				display:block;
				font-family:'Avenir', arial;
				font-size:14px;
				font-style:italic;
				font-weight:normal;
				line-height:100%;
				letter-spacing:normal;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				text-align:left;
			}

			/* ========== Header Styles ========== */

			/**
			* @tab Header
			* @section preheader style
			* @tip Set the background color and bottom border for your email's preheader area.
			* @theme header
			*/
			#templatePreheader{
				background-color:#F4F4F4;
			}

			/**
			* @tab Header
			* @section preheader text
			* @tip Set the styling for your email's preheader text. Choose a size and color that is easy to read.
			*/
			.preheaderContent{
				color:#242638;
				font-family:'Avenir', arial;
				font-size:10px;
				line-height:125%;
				text-align:left;
			}
			.preheaderBar{
				color:#FFF;
				font-family:'Avenir', arial;
				font-size:10px;
				line-height:125%;
				text-align:right;
				background-color: #024886
			}

			/**
			* @tab Header
			* @section preheader link
			* @tip Set the styling for your email's preheader links. Choose a color that helps them stand out from your text.
			*/
			.preheaderContent a:link, .preheaderContent a:visited, /* Yahoo! Mail Override */ .preheaderContent a .yshortcuts /* Yahoo! Mail Override */{
				color:#606060;
				font-weight:normal;
				text-decoration:underline;
			}

			/**
			* @tab Header
			* @section header style
			* @tip Set the background color and borders for your email's header area.
			* @theme header
			*/
			#templateHeader{
				background-color:#FFF;
			}

			/**
			* @tab Header
			* @section header text
			* @tip Set the styling for your email's header text. Choose a size and color that is easy to read.
			*/
			.headerContent{
				color:#505050;
				font-family:'Avenir', arial;
				font-size:20px;
				font-weight:bold;
				line-height:100%;
				padding-top:0;
				padding-right:0;
				padding-bottom:0;
				padding-left:0;
				text-align:left;
				vertical-align:middle;
			}

			/**
			* @tab Header
			* @section header link
			* @tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
			*/
			.headerContent a:link, .headerContent a:visited, /* Yahoo! Mail Override */ .headerContent a .yshortcuts /* Yahoo! Mail Override */{
				color:#EB4102;
				font-weight:normal;
				text-decoration:underline;
			}

			#headerImage{
				height:auto;
				max-width:600px;
			}

			/* ========== Body Styles ========== */

			/**
			* @tab Body
			* @section body style
			* @tip Set the background color and borders for your email's body area.
			*/
			#templateBody{
				background-color:#FFF;
			}

			/**
			* @tab Body
			* @section body text
			* @tip Set the styling for your email's main content text. Choose a size and color that is easy to read.
			* @theme main
			*/
			.bodyContent{
				color:#242638;
				font-family:'Avenir', arial;
				font-size:16px;
				line-height:130%;
				padding-top:20px;
				padding-right:20px;
				padding-bottom:20px;
				padding-left:20px;
				text-align:left;
			}

			/**
			* @tab Body
			* @section body link
			* @tip Set the styling for your email's main content links. Choose a color that helps them stand out from your text.
			*/
			.bodyContent a:link, .bodyContent a:visited, /* Yahoo! Mail Override */ .bodyContent a .yshortcuts /* Yahoo! Mail Override */{
				color:#2aa6cb;
				font-weight:normal;
				text-decoration:underline;
			}

			.bodyContent img{
				display:inline;
				height:auto;
				max-width:560px;
			}

			/* ========== Column Styles ========== */

			.templateColumnContainer{width:260px;}

			/**
			* @tab Columns
			* @section column style
			* @tip Set the background color and borders for your email's column area.
			*/
			#templateColumns{
				background-color:#ebebeb;
			}

			/**
			* @tab Columns
			* @section left column text
			* @tip Set the styling for your email's left column content text. Choose a size and color that is easy to read.
			*/
			.leftColumnContent{
				color:#242638 ;
				font-family:'Avenir', arial;
				font-size:14px;
				line-height:150%;
				padding-top:0;
				padding-right:20px;
				padding-bottom:20px;
				padding-left:20px;
				text-align:left;
			}

			/**
			* @tab Columns
			* @section left column link
			* @tip Set the styling for your email's left column content links. Choose a color that helps them stand out from your text.
			*/
			.leftColumnContent a:link, .leftColumnContent a:visited, /* Yahoo! Mail Override */ .leftColumnContent a .yshortcuts /* Yahoo! Mail Override */{
				color:#2ba6cb;
				font-weight:normal;
				text-decoration:underline;
			}

			/**
			* @tab Columns
			* @section right column text
			* @tip Set the styling for your email's right column content text. Choose a size and color that is easy to read.
			*/
			.rightColumnContent{
				color:#242638 ;
				font-family:'Avenir', arial;
				font-size:14px;
				line-height:150%;
				padding-top:0;
				padding-right:20px;
				padding-bottom:20px;
				padding-left:20px;
				text-align:left;
			}

			/**
			* @tab Columns
			* @section right column link
			* @tip Set the styling for your email's right column content links. Choose a color that helps them stand out from your text.
			*/
			.rightColumnContent a:link, .rightColumnContent a:visited, /* Yahoo! Mail Override */ .rightColumnContent a .yshortcuts /* Yahoo! Mail Override */{
				color:#2ba6cb;
				font-weight:normal;
				text-decoration:underline;
			}

			.leftColumnContent img, .rightColumnContent img{
				display:inline;
				height:auto;
				max-width:260px;
			}

			/* ========== Footer Styles ========== */

			/**
			* @tab Footer
			* @section footer style
			* @tip Set the background color and borders for your email's footer area.
			* @theme footer
			*/
			#templateFooter{
				background-color:#FFF;
				text-align: center;
			}

			/**
			* @tab Footer
			* @section footer text
			* @tip Set the styling for your email's footer text. Choose a size and color that is easy to read.
			* @theme footer
			*/
			.footerContent{
				color:#242638;
				font-family:'Avenir', arial;
				font-size:14px;
				line-height:150%;
				padding-top:20px;
				padding-right:20px;
				padding-bottom:20px;
				padding-left:20px;
				text-align:center;
			}

			/**
			* @tab Footer
			* @section footer link
			* @tip Set the styling for your email's footer links. Choose a color that helps them stand out from your text.
			*/
			.footerContent a:link, .footerContent a:visited, /* Yahoo! Mail Override */ .footerContent a .yshortcuts, .footerContent a span /* Yahoo! Mail Override */{
				color:#2aa5cb;
				font-weight:normal;
				text-decoration:underline;
			}

			/* /\/\/\/\/\/\/\/\/ MOBILE STYLES /\/\/\/\/\/\/\/\/ */

            @media only screen and (max-width: 480px){
				/* /\/\/\/\/\/\/ CLIENT-SPECIFIC MOBILE STYLES /\/\/\/\/\/\/ */
				body, table, td, p, a, li, blockquote{-webkit-text-size-adjust:none !important;} /* Prevent Webkit platforms from changing default text sizes */
                body{width:100% !important; min-width:100% !important;} /* Prevent iOS Mail from adding padding to the body */

				/* /\/\/\/\/\/\/ MOBILE RESET STYLES /\/\/\/\/\/\/ */
				#bodyCell{padding:10px !important;}


				/* /\/\/\/\/\/\/ MOBILE TEMPLATE STYLES /\/\/\/\/\/\/ */

				/* ======== Page Styles ======== */

				/**
				* @tab Mobile Styles
				* @section template width
				* @tip Make the template fluid for portrait or landscape view adaptability. If a fluid layout doesn't work for you, set the width to 300px instead.
				*/
				#templateContainer, #template600{
					max-width:600px !important;
					width:100% !important;
				}

				/**
				* @tab Mobile Styles
				* @section heading 1
				* @tip Make the first-level headings larger in size for better readability on small screens.
				*/
				h1{
					font-size:24px !important;
					line-height:100% !important;
				}

				/**
				* @tab Mobile Styles
				* @section heading 2
				* @tip Make the second-level headings larger in size for better readability on small screens.
				*/
				h2{
					font-size:20px !important;
					line-height:100% !important;
				}

				/**
				* @tab Mobile Styles
				* @section heading 3
				* @tip Make the third-level headings larger in size for better readability on small screens.
				*/
				h3{
					font-size:18px !important;
					line-height:100% !important;
				}

				/**
				* @tab Mobile Styles
				* @section heading 4
				* @tip Make the fourth-level headings larger in size for better readability on small screens.
				*/
				h4{
					font-size:16px !important;
					line-height:100% !important;
				}

				/* ======== Header Styles ======== */

				#templatePreheader{display:none !important;} /* Hide the template preheader to save space */

				/**
				* @tab Mobile Styles
				* @section header image
				* @tip Make the main header image fluid for portrait or landscape view adaptability, and set the image's original width as the max-width. If a fluid setting doesn't work, set the image width to half its original size instead.
				*/
				#headerImage{
					height:auto !important;
					max-width:600px !important;
					width:100% !important;
				}

				/**
				* @tab Mobile Styles
				* @section header text
				* @tip Make the header content text larger in size for better readability on small screens. We recommend a font size of at least 16px.
				*/
				.headerContent{
					font-size:20px !important;
					line-height:125% !important;
				}

				/* ======== Body Styles ======== */

				/**
				* @tab Mobile Styles
				* @section body text
				* @tip Make the body content text larger in size for better readability on small screens. We recommend a font size of at least 16px.
				*/
				.bodyContent{
					font-size:18px !important;
					line-height:125% !important;
				}

				/* ======== Column Styles ======== */

				.templateColumnContainer{display:block !important; width:100% !important;}

				/**
				* @tab Mobile Styles
				* @section column image
				* @tip Make the column image fluid for portrait or landscape view adaptability, and set the image's original width as the max-width. If a fluid setting doesn't work, set the image width to half its original size instead.
				*/
				.columnImage{
					height:auto !important;
					max-width:480px !important;
					width:100% !important;
				}

				/**
				* @tab Mobile Styles
				* @section left column text
				* @tip Make the left column content text larger in size for better readability on small screens. We recommend a font size of at least 16px.
				*/
				.leftColumnContent{
					font-size:16px !important;
					line-height:125% !important;
				}

				/**
				* @tab Mobile Styles
				* @section right column text
				* @tip Make the right column content text larger in size for better readability on small screens. We recommend a font size of at least 16px.
				*/
				.rightColumnContent{
					font-size:16px !important;
					line-height:125% !important;
				}

				/* ======== Footer Styles ======== */

				/**
				* @tab Mobile Styles
				* @section footer text
				* @tip Make the body content text larger in size for better readability on small screens.
				*/
				.footerContent{
					font-size:14px !important;
					line-height:115% !important;
				}

				.footerContent a{display:block !important;} /* Place footer social and utility links on their own lines, for easier access */
			}
		</style>
    </head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
    	<center>
        	<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
            	<tr>
                	<td align="center" valign="top" id="bodyCell">
                    	<table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
                            <tr>
                                <td valign="top" class="preheaderBar" align="center">
                                	<table border="0" cellpadding="0" cellspacing="0" id="template600" align="center">
                                        <tr>
                                            <td align="center" valign="top">                                                
                                                <!-- BEGIN PREHEADER // -->
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
                                                    <tr>
                                                        <td valign="top" style="padding-right:2px; padding-top:2px; padding-bottom: 2px; text-align:right">
                                                            In association with
                                                        </td>
                                                        <!-- *|IFNOT:ARCHIVE_PAGE|* -->
                                                        <td valign="top" width="15" style="padding-right:10px; padding-top:2px; padding-bottom: 2px;">
                                                            <img src="{{ URL::asset('img/email_download.jpg')}}" style="max-width:20px;" alt="HP" />
                                                        </td>
                                                        <!-- *|END:IF|* -->
                                                    </tr>
                                                </table>
                                                <!-- // END PREHEADER -->
                                            </td>
                                        </tr>
                                    </table>
                            	</td>
                            </tr>
                        </table>
                    	<table border="0" cellpadding="0" cellspacing="0" id="templateContainer">
                        	<tr>
                            	<td align="center" valign="top">
                                	<!-- BEGIN HEADER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateHeader">
                                        <tr>
                                            <td valign="top" class="headerContent">
                                            	<img src="{{asset('img/email_img.jpg')}}" style="max-width:600px;" id="headerImage"/>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // END HEADER -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                	<!-- BEGIN BODY // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateBody">
                                        <tr>
                                            <td valign="top" class="bodyContent">
                                                <h1>Hi {{$fname}},</h1>
                                                <br/>
                                                As promised, here's the link to download your TechFitness report. This breaks down your performance by category and helps you benchmark yourself against other organisations operating within EMEA.
                                                <br /><br/>
                                                <a href="{{ URL::asset('quiz/download/'.$userid) }}" target="_blank"><img src="{{ URL::asset('img/email_download.jpg')}}" style="max-width:316px;display:block; margin:0 auto" align="middle"/></a>
                                                <br/><br/>
                                                Also, once you've digested the report why not visit <a href="http://hp.com/go/businessready" style="color:#024886">HP Business Ready</a> to keep up to date on the latest business technology thinking. For examples, here is a selection of articles that may be of interest:
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // END BODY -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                	<!-- BEGIN COLUMNS // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateColumns">
                                    	<tr>
                                        	<td align="center" valign="top" class="templateColumnContainer" style="padding-top:20px;">
                                            	<table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                    <tr>
                                                    	<td valign="top" class="leftColumnContent" height="150">
                                                            <h2>Security</h2>
                                                            Is your printer putting sensitive data at risk? Top 10 dangers of staying on Windows XP<br/><br/>
                                                            <a href="http://h20435.www2.hp.com/t5/HP-BusinessReady/Is-your-printer-putting-sensitive-data-at-risk/ba-p/89690#.VI7r8FesV7c" target="_blank"><img src="{{asset('img/email_click.jpg')}}" style="max-width:150px;"/></a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        	<td align="center" valign="top" class="templateColumnContainer" style="padding-top:20px;">
                                            	<table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                    <tr>
                                                    	<td valign="top" class="rightColumnContent" height="150">
                                                            <h2>Cloud Computing</h2>
                                                            Enterprise cloud computing myths debunked<br/><br/>
                                                            <a href="http://h20435.www2.hp.com/t5/HP-BusinessReady/Top-10-dangers-of-staying-on-Windows-XP/ba-p/92718#.VI7tFVesV7c" target="_blank"><img src="{{asset('img/email_click.jpg')}}" style="max-width:150px;"/></a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // END COLUMNS -->
                                </td>
                            </tr>
                            <tr>
                            	<td align="center" valign="top">
                                	<!-- BEGIN COLUMNS // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateColumns">
                                    	<tr>
                                        	<td align="center" valign="top" class="templateColumnContainer" style="padding-top:20px;">
                                            	<table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                    <tr>
                                                    	<td valign="top" class="leftColumnContent" height="150">
                                                            <h2>Mobility</h2>
                                                            A guide to hot desking BYOD printing: the things to consider<br/><br/>
                                                            <a href="http://h20435.www2.hp.com/t5/HP-BusinessReady/Enterprise-cloud-computing-myths-debunked/ba-p/91496#.VI7tc1esV7c" target="_blank"><img src="{{asset('img/email_click.jpg')}}" style="max-width:150px;"/></a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        	<td align="center" valign="top" class="templateColumnContainer" style="padding-top:20px;">
                                            	<table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                    <tr>
                                                    	<td valign="top" class="rightColumnContent" height="150">
                                                            <h2>Big Data</h2>
                                                            5 ways your small business could benefit from big data<br/><br/>
                                                            <a href="http://h20435.www2.hp.com/t5/HP-BusinessReady/5-ways-your-small-business-can-benefit-from-big-data/ba-p/92118#.VI7uqVesV7c" target="_blank"><img src="{{asset('img/email_click.jpg')}}" style="max-width:150px;"/></a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // END COLUMNS -->
                                </td>
                            </tr>
                            <tr>
                            	<td align="center" valign="top">
                                	<!-- BEGIN FOOTER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateFooter" align="center">
                                        <tr>
                                            <td valign="top" class="footerContent">
                                                This email is automatically generated, please do not reply.<br/>
                                                <a href="{{url('/email', array($userid))}}">View in Browser</a>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // END FOOTER -->
                                </td>
                            </tr>
                        </table>
                        <!-- // END TEMPLATE -->
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>
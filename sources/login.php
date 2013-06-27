<?php 
	ob_start();
	require_once("includes/initialize.php"); 
?>
<?php
	if($session->is_logged_in()) {
	  redirect_to("home.php");
	}

	// Remember to give your form's submit tag a name="submit" attribute!
	if (isset($_POST['submit'])) { // Form has been submitted.
		  $username = trim($_POST['name']);
		  $password = trim($_POST['psswrd']);
		  
		  // Check database to see if username/password exist.
		  $found_user = User::authenticate($username, $password);
		  if ($found_user) {
		    	$session->login($found_user->agecpt,$found_user->prenomNom);
		    	redirect_to("home.php");
		  } else {
		    // username/password combo was not found in the database
		    $message="Compte ou mot de passe incorrect.<br />Veuillez réessayer svp.";
		    $message_id=1;
		  }
	} else { // Form has not been submitted.
		$username = "";
		$password = "";
	}
?>
<HTML style="overflow:hidden;">
	<HEAD>
		<TITLE>Pr&eacute;sence Assistance - Accueil</TITLE>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
		<style TYPE=text/css>.l-0{}.l-1{font-family:'Century Gothic';font-size:10pt;font-weight:bold;background-color:#FFFFFF;border: 1 solid #9C9C9C}
#A5,#bzA5{border:solid 5px #0080C0;border-collapse:collapse;empty-cells:show;border-spacing:0;}
#A2,#tzA2{width:222;height:26;}
#A1,#tzA1{width:222;height:26;}
#A4,#tzA4{width:29;height:26;}
		</style>
		<link REL="stylesheet" TYPE="text/css" HREF="prs-css/style.css">
		<script type="text/javascript">
			function MM_swapImgRestore() { //v3.0
			  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
			}
			function MM_preloadImages() { //v3.0
			  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
			    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
			    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
			}
			
			function MM_findObj(n, d) { //v4.01
			  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
			    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
			  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
			  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
			  if(!x && d.getElementById) x=d.getElementById(n); return x;
			}
			
			function MM_swapImage() { //v3.0
			  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
			   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
			}
        </script>
	</HEAD>
	<BODY bgcolor=#FFFFFF leftmargin=0 topmargin=0 onLoad="MM_preloadImages('../../../../prs-images/Valider_over.GIF')">
	<table align=center width=389>
	<tr align=left valign=top>
	<td>
	<div style="position:relative">
		<form action="login.php" method="post" id="login_form">
			<div style="position:absolute;left:0;top:0;z-index:0;width:389">
				<TABLE STYLE="position:relative;left:0;">
					<TR><TD COLSPAN=2 HEIGHT=152/></TR>
					<TR><TD width=389>
						<table id=A5 bgcolor=#FFFFFF style="border-collapse:separate;" cellspacing=0>
							<tr>
								<td height=352 width=379 bgcolor=#FFFFFF valign=top>
									<div style="position:relative;">
										<TABLE STYLE="position:relative;left:0;">
											<TR><TD COLSPAN=9 HEIGHT=70/></TR>
											<TR>
												<TD ROWSPAN=11 WIDTH=18/>
												<TD COLSPAN=5 CLASS=STC-7 valign=top id="tzA8" WIDTH=326>Saisissez votre identifiant et votre mot de passe ...</TD>
												<TD COLSPAN=2 ROWSPAN=2 width=20 height=33/>
												<TD height=26/>
											<TR><TD COLSPAN=5 width=326/><TD height=7/>
											<TR>
												<TD COLSPAN=2 CLASS=STC-9-Bold valign=middle WIDTH=118>No de compte : </TD>
												<TD COLSPAN=4 WIDTH=222>
													<table width=222 height=28>
														<tr>
															<td valign=middle id="tzA1">
																<INPUT TYPE=TEXT SIZE=18 MAXLENGTH="10" name="name" id="name" CLASS=l-1>
															</td>
														</tr>
													</table>
												</TD>
												<TD ROWSPAN=6 width=6 height=112/>
												<TD height=28/>
											<TR><TD COLSPAN=6 width=340/><TD height=8/>
											<TR>
												<TD COLSPAN=2 CLASS=STC-9-Bold valign=middle WIDTH=118>Mot de passe :</TD>
												<TD COLSPAN=4 WIDTH=222>
													<table width=222 height=28>
														<tr>
															<td valign=middle id="tzA2">
																<INPUT TYPE=PASSWORD SIZE=18 MAXLENGTH="10" name="psswrd" id="psswrd" CLASS=l-1>
															</td>
														</tr>
													</table>
												</TD>
												<TD height=28/>
											<TR><TD COLSPAN=6 width=340/><?php echo '<font face="verdana" size="2" color="red">'.$message.'</font>'; ?><TD height=8/>
											<TR>
												<TD COLSPAN=3 ROWSPAN=2 width=153 height=40/>
												<TD ROWSPAN=2 width=97 height=40>
													<input type="image" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('valider','','prs-images/Valider_over.GIF',1)" src="prs-images/Valider.GIF" alt="Valider" name="submit" value="LOGIN" />
												</TD>
											<TD ROWSPAN=2 width=97 height=40><a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('annuler','','prs-images/Annuler_over.GIF',1)"><img src="prs-images/Annuler.GIF" alt="Valider" name="annuler" width="80" height="24" border="0"></a></TD>
											<TR>
												<TD COLSPAN=2 width=90>&nbsp;</TD>
												<TD height=39/>
											<TR>
												<TD COLSPAN=7 width=346><HR SIZE=2 WIDTH=346 CLASS=STC-9-Color></TD>
												<TD height=16/>
											<TR>
												<TD width=52><img src="prs-images/IMAG_contact.png" width=40 height=40 hspace=0 vspace=0 border=0 name=A11 onClick="_T1(event)" CLASS=l-0></TD>
												<TD COLSPAN=5 CLASS=STC-9-Simple valign=top id="tzA10" WIDTH=288>Un probl&egrave;me de connexion ou pour toute autre question, n'h&eacute;sitez pas &agrave; nous contacter en nous envoyant un message par le formulaire ; il sera trait&eacute; en priorit&eacute;. </TD>
												<TD width=6/>
												<TD height=81/>
											<TR>
												<TD width=52/>
												<TD width=66/>
												<TD width=35/>
												<TD width=97/>
												<TD width=76/>
												<TD width=14/>
												<TD width=6/>
												<TD/>
										</TABLE>
										<DIV id="A12" STYLE="position:absolute;left:23;top:327;width:309;height:17;z-index:0;" CLASS=STC-9-Simple>Cliquer&nbsp;&#32;&nbsp;&#32;&nbsp;&#32;&nbsp;&#32; pour afficher le formulaire 
										</DIV>
										<DIV id="dwwczA4" STYLE="position:absolute;left:23;top:175;width:72;height:28;z-index:9;visibility:hidden;">
											<table>
												<tr>
													<td height=28 width=72 valign=top>
														<div style="position:relative;">
															<DIV id="dwwA4" STYLE="position:absolute;left:0;top:0;width:43;height:28;z-index:9;">
																<table width=43 height=28>
																	<tr><td CLASS=STC-9-Color valign=middle>Bidon</td></tr>
																</table>
															</DIV>
															<DIV id="tzA4" STYLE="position:absolute;left:43;top:0;z-index:9;" CLASS=STC-9-WhiteBckgrdBorder>
																<INPUT TYPE=TEXT SIZE=2 NAME=A4 VALUE="" id="A4" CLASS=STC-9-WhiteBckgrdBorder>
															</DIV>
														</div>
													</td>
												</tr>
											</table>
										</DIV>
										<DIV id="dwwA13" STYLE="position:absolute;left:70;top:325;width:15;height:20;z-index:10;">
											<table width=15 height=20>
												<tr>
													<td CLASS=Simple-Link valign=middle id="tzA13"><a name=A13 href="contact.php" CLASS=Simple-Link>ici</a>
													</td>
												</tr>
											</table>
										</DIV>
										<DIV id="dwwA6" STYLE="position:absolute;left:14;top:11;width:198;height:63;z-index:11;">
											<img src="prs-images/PRESENCE PAT 198x63.PNG" width=198 height=63 hspace=0 vspace=0 border=0 name=A6 CLASS=l-0>
										</DIV>
									</div>
								</td>
							</tr>
						</table>
					</TD>
					<TD height=362/>
					<TR><TD width=389/><TD/>
				</TABLE>
			</div>
			<input type="image" src="prs-images/vide.gif" style="float:left;height:0" onClick="" border=0 width=0 height=0>
		</form>
		</div>
		</td>
		</tr>
		</table>
	</BODY>
</HTML>
<?php
  ob_end_flush();
?>
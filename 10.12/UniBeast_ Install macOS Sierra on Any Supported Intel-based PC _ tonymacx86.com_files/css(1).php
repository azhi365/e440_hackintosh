@charset "UTF-8";

/* --- addToNav.css --- */

.subNavMenu > li > a > img, .subNavMenu > li > ul img {
	max-width:24px;
	height:auto;
	vertical-align:middle;
	padding-right:5px;
}

li.navTab.resources {
	display:none !important;
}

/* --- bb_code.css --- */

/* .bbCodeX classes are designed to exist inside .baseHtml. ie: they have no CSS reset applied */

.bbCodeBlock
{
	margin: 1em 240px 1em 0;
border: 1px solid rgb(216, 216, 216);
border-radius: 5px;
overflow: auto;

}

	.bbCodeBlock .bbCodeBlock,
	.hasJs .bbCodeBlock .bbCodeSpoilerText,
	.messageList.withSidebar .bbCodeBlock
	{
		margin-right: 0;
	}

	/* mini CSS reset */
	.bbCodeBlock pre,
	.bbCodeBlock blockquote
	{
		margin: 0;
	}
	
	.bbCodeBlock img
	{
		border: none;
	}

.bbCodeBlock .type
{
	font-size: 11px;
font-family: Verdana, Helvetica, Arial, sans-serif;
color: ;
background: rgb(255, 255, 255) url('styles/tmx/xenforo/gradients/form-button-white-25px.png') repeat-x top;
padding: 3px 8px;
border-bottom: 1px solid rgb(226, 226, 226);
border-top-left-radius: 4px;
border-top-right-radius: 4px;

}

.bbCodeBlock pre,
.bbCodeBlock .code
{
	font-size: 10pt;
font-family: Consolas, 'Courier New', Courier, monospace;
background: rgb(255, 255, 255) url('styles/tmx/xenforo/gradients/category-23px-light.png') repeat-x top;
padding: 10px;
border-radius: 5px;
word-wrap: normal;
overflow: auto;
line-height: 1.24;
min-height: 30px;
max-height: 500px;
_width: 600px;
direction: ltr;

}

.bbCodeBlock .code
{
	white-space: nowrap;
}

.bbCodeQuote
{
	border-color: rgb(150,150,150);
overflow: auto;

}

.bbCodeQuote .attribution
{
	font-weight: bold;
color: rgb(20,20,20);
background-color: rgb(242, 246, 248);
border-bottom: 1px solid rgb(150,150,150);

}

.bbCodeQuote .quoteContainer
{
	overflow: hidden;
	position: relative;
	
	font-size: 9pt;
background-color: rgb(242, 246, 248);
padding: 10px;
border-radius: 4px;

}


	.bbCodeQuote .quoteContainer .quote
	{
		max-height: 150px;
		overflow: hidden;
		padding-bottom: 1px;
	}
	
		.NoJs .bbCodeQuote .quoteContainer .quote
		{
			max-height: none;
		}

	.bbCodeQuote .quoteContainer .quoteExpand
	{		
		display: none;
		box-sizing: border-box;
		position: absolute;
		height: 80px;
		top: 90px;
		left: 0;
		right: 0;
		
		font-size: 11px;
		line-height: 1;
		text-align: center;
		color: #f9bc6d;
		cursor: pointer;
		padding-top: 65px;
		background: -webkit-linear-gradient(top, rgba(242, 246, 248, 0) 0%, rgb(242, 246, 248) 80%);
		background: -moz-linear-gradient(top, rgba(242, 246, 248, 0) 0%, rgb(242, 246, 248) 80%);
		background: -o-linear-gradient(top, rgba(242, 246, 248, 0) 0%, rgb(242, 246, 248) 80%);
		background: linear-gradient(to bottom, rgba(242, 246, 248, 0) 0%, rgb(242, 246, 248) 80%);
		
		border-bottom-left-radius: 4px;
		border-bottom-right-radius: 4px;
	}
	
	.bbCodeQuote .quoteContainer .quoteExpand.quoteCut
	{
		display: block;
	}
	
	.bbCodeQuote .quoteContainer.expanded .quote
	{
		max-height: none;
	}
	
	.bbCodeQuote .quoteContainer.expanded .quoteExpand
	{
		display: none;
	}


	.bbCodeQuote img
	{
		max-height: 150px;
	}
	
	.bbCodeQuote iframe,
	.bbCodeQuote .fb_iframe_widget,
	.bbCodeQuote object,
	.bbCodeQuote embed
	{
		max-width: 200px;
		max-height: 150px;
	}
	
	.bbCodeQuote iframe:-webkit-full-screen
	{
		max-width: none;
		max-height: none;
	}
	
	.bbCodeQuote iframe:-moz-full-screen
	{
		max-width: none;
		max-height: none;
	}
	
	.bbCodeQuote iframe:-ms-fullscreen
	{
		max-width: none;
		max-height: none;
	}
	
	.bbCodeQuote iframe:fullscreen
	{
		max-width: none;
		max-height: none;
	}
	
.bbCodeSpoilerButton
{
	margin: 5px 0;
	max-width: 99%;
}

	.bbCodeSpoilerButton > span
	{
		display: inline-block;
		max-width: 100%;
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
	}
	
.hasJs .bbCodeSpoilerText
{
	display: none;
	background-color: rgb(255, 255, 255);
padding: 5px;
margin-top: 5px;
margin-right: 240px;
margin-bottom: 5px;
border: 1px solid rgb(255, 255, 255);
border-radius: 5px;
overflow: auto;

}

	.hasJs .bbCodeSpoilerText .bbCodeSpoilerText,
	.hasJs .bbCodeSpoilerText .bbCodeBlock,
	.hasJs .messageList.withSidebar .bbCodeSpoilerText
	{
		margin-right: 0;
	}
	
.NoJs .bbCodeSpoilerContainer
{
	background-color: rgb(20,20,20); /* fallback for browsers without currentColor */
	background-color: currentColor;
}

	.NoJs .bbCodeSpoilerContainer > .bbCodeSpoilerText
	{
		visibility: hidden;
	}

	.NoJs .bbCodeSpoilerContainer:hover
	{
		background-color: transparent;
	}
	
		.NoJs .bbCodeSpoilerContainer:hover > .bbCodeSpoilerText
		{
			visibility: visible;
		}


@media (max-width:800px)
{
	.Responsive .bbCodeBlock,
	.Responsive.hasJs .bbCodeSpoilerText
	{
		margin-right: 0;
	}
}
.bbCodePHP ol,
.bbCodeHtml ol,
.bbCodeCode ol {
	color: lightgrey;
	-moz-user-select: -moz-none;
	-khtml-user-select: none;
	-webkit-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

.bbCodePHP li > div,
.bbCodeHtml li > div,
.bbCodeCode li > div {
	color: grey;
	-moz-user-select: text;
	-khtml-user-select: text;
	-webkit-user-select: text;
	-ms-user-select: text;
	user-select: text;
}

/* --- buildsignatures.css --- */

.buildsignature {
	margin:10px;
	padding:10px;
	padding-left:0px;
	margin-left:auto;
	margin-right:auto;
	border-top:1px solid ;
	font-size:13px;
}

.buildsignature > dl > dt, .buildsignature > dl > dd {
	display:inline-block;
}

.buildsignature > dl > dt {
	font-weight:bold;
	padding-right:10px;
}

.buildsignature_wrapper
{
	border-top:1px solid #d8d8d8;
}

.buildsignature_wrapper, .message .signature, .messageMeta {
	margin-top:10px;
	font-size: 11px;
	/* padding: 15px 5px 5px; */
	/* margin: -5px !important; */
	margin-left: 240px !important;
	overflow: hidden;
	zoom: 1;
	clear:both;
}

.buildsignature_wrapper .xenForm {
	max-width:none;
	font-size:11px;
	margin:none;
}

.buildsignature_wrapper .xenForm table > tbody > tr > td:first-child > label > a {
	font-weight:bold;
	padding-right:25px;
}

.helpertext
{
	color:#666;
}

/* RESPONSIVE SPECIFIC */


	/* smaller desktop */
	@media (max-width:1010px) {
		
	}

	/* tablet */
	@media (max-width:800px) {
		.buildsignature_wrapper, .message .signature, .messageMeta {
			display:none;
		}
	}
	
	/* most phones */
	@media (max-width:500px) {
		.buildsignature_wrapper, .message .signature, .messageMeta {
			display:none;
		}
	}


/* --- customFooter.css --- */

.showMobile
{
	display:none;
}

#footer > .pageContent > table {
	margin-top:25px;
	margin-bottom:10px;
	width:95%;
	margin-left:auto;
	margin-right:auto;
}

#footer > .pageContent > table > tbody > tr > td {
	vertical-align:top;
}

.footerLinks {
	float:none;
}

.footerLinks li {
	float:none;
}

.footerLinks > li > h4 > a {
	font-weight:500;
	font-size:14px;
}

.footerLinks > li:first-child > h4 > a {
	font-weight:700;
	font-size:16px;
}

#footerLogo > a > img {
	max-width:300px;
	height:auto;
}

#footerSocial {
	text-align:right;
}

#footerSearch, #mobileFooterSearch {
	position:relative;
	overflow:visible;
}

#mobileFooterSearch
{
	margin-top:40px;
	margin-left:auto;
	margin-right:auto;
	width:60%;
}

#footerCritters, #mobileFooterCritters {
	position:absolute;
	top:-40px;
}


@media (max-width:610px)
{
	.showMobile
	{
		display:block !important;
	}
	.hideMobile
	{
		display:none !important;
	}
	
	#footer > .pageContent > table > tbody > tr > td
	{
		display:inline-block;
		width:38%;
		margin-left:3%;
		margin-right:3%;
		margin-bottom:10px;
	}
	#footer > .pageContent > table > tbody > tr > td.fullWidth
	{
		width:100%;
		margin-left:0;
		margin-right:0;
		margin-top:10px;
		text-align:center;
	}
	#legal
	{
		float:none;
	}
	#legal li {
   		float: none;
    		display: inline-block;
    		margin:10px;
    		margin-left: 5px;
    		margin-right: 5px;
	}
	#copyright
	{
		float:none;
		text-align:center;
	}
}


@media (max-width:775px)
{
	#mobileFooterSearch
	{
		width:240px;
	}
	
	.showMobile
	{
		display:block !important;
	}
	.hideMobile
	{
		display:none !important;
	}
	#footer > .pageContent > table > tbody > tr > td
	{
		display:block;
		width:auto;
		margin-left:auto;
		margin-right:auto;
		text-align:Center;
		margin-bottom:10px;
	}
	#footer > .pageContent > table > tbody > tr > td.fullWidth
	{
		width:100%;
		margin-left:0;
		margin-right:0;
		margin-top:10px;
		text-align:center;
	}
	
	.footerLinks
	{
		overflow:visible;
	}
	
	.footer a, .footer a:visited
	{
		font-size:16px;
	}
	
	.footerLinks > li:first-child > h4 > a, .footerLinks > li:first-child > h4 > a:visited
	{
		font-size:18px;
	}
	
	#legal
	{
		float:none;
	}
	#legal li {
    		float: none;
    		display: inline-block;
    		margin:10px;
    		margin-left: 5px;
    		margin-right: 5px;
	}
	#copyright
	{
		float:none;
		text-align:center;
	}
}


/* --- likes_summary.css --- */

.likesSummary
{
	overflow: hidden; zoom: 1;
	font-size: 11px;
}

	.LikeText
	{
		float: left;
	}
	
	.likeInfo
	{
		float: right;
	}

/* --- login_bar.css --- */

/** Login bar basics **/

#loginBar
{
	color: #000000;
margin-bottom: 20px;
position: relative;
z-index: 1;

	background-color: rgb(67, 67, 67);
	border-bottom: 1px solid rgb(211, 211, 211); 
	font-size: 14px;
}

	#loginBar .ctrlWrapper
	{
		margin: 0 10px;
	}

	#loginBar .pageContent
	{
		padding-top: 5px;
		position: relative;
		_height: 0px;
	}

	#loginBar a
	{
		color: #fff;

		
	}

	#loginBar form
	{
		padding: 5px 0;
margin: 0 auto;
display: none;
line-height: 20px;
position: relative;

	}
	
		#loginBar .xenForm .ctrlUnit,		
		#loginBar .xenForm .ctrlUnit > dt label
		{
			margin: 0;
			border: none;
			color:#d8d8d8;
			font-size:16px;
		}
	
		#loginBar .xenForm .ctrlUnit > dd
		{
			position: relative;
			background:none;
		}
	
	#loginBar .lostPassword,
	#loginBar .lostPasswordLogin
	{
		font-size: 11px;
	}
	
	#loginBar .rememberPassword
	{
		font-size: 11px;
	}

	#loginBar .textCtrl
	{
		color: #000000;
background-color: rgb(239, 239, 239);
border-color: #333;

	}
	
	#loginBar .textCtrl[type=text]
	{
		font-weight: bold;
font-size: 18px;

	}

	#loginBar .textCtrl:-webkit-autofill /* http://code.google.com/p/chromium/issues/detail?id=1334#c35 */
	{
		background: rgb(239, 239, 239) !important;
		color: #000000;
	}

	#loginBar .textCtrl:focus
	{
		background: rgb(255, 255, 255) none;

	}
	
	#loginBar input.textCtrl.disabled
	{
		color: rgb(150,150,150);
background-color: #666;
border-style: dashed;

	}
	
	#loginBar .button
	{
		min-width: 85px;
		*width: 85px;
		border-color:1px solid #333;
	}
	
		#loginBar .button.primary
		{
			font-weight: bold;
		}
		
/** changes when eAuth is present **/

#loginBar form.eAuth
{
	-x-max-width: 700px; /* normal width + 170px */
}

	#loginBar form.eAuth .ctrlWrapper
	{
		border-right: 1px dotted rgb(255, 255, 255);
		margin-right: 200px;
		box-sizing: border-box;
	}

	#loginBar form.eAuth #eAuthUnit
	{
		position: absolute;
		top: 0px;
		right: 10px;
	}

		#eAuthUnit li
		{
			margin-top: 10px;
			line-height: 0;
		}
	
/** handle **/

#loginBar #loginBarHandle, #loginBar #contributeBarHandle
{
	font-size: 11px;
color: #000000;
background-color: rgb(226, 226, 226);
padding: 0 10px;
margin-right: 20px;
border-bottom-right-radius: 10px;
border-bottom-left-radius: 10px;
position: absolute;
right: 0px;
bottom: -20px;
text-align: center;
z-index: 1;
line-height: 20px;
box-shadow: 0px 2px 5px rgb(67, 67, 67);

}

#loginBar #contributeBarHandle
{
	@property "contributeBarHandle";
	right:auto !important;
	left: 0px;
	bottom: -20px;
}

#loginBar > .pageWidth > .pageContent
{
	padding: 2px 0 !important;
	overflow: auto !important;
}

#loginBar h3
	{
		color: rgb(226, 226, 226) !important;
		display: inline-block !important;
		padding: 2px 10px !important;
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
		-khtml-border-radius: 3px;
		border-radius: 3px;
		cursor: pointer !important;
	}
	
#loginBar h3 > label
{
	display:inline-block !important;
	height: 19px !important;
	line-height: 19px !important;
}

#loginBar h3 > label > a
{
	cursor:pointer !important;
	text-decoration:none !important;
}

#loginBar h3:hover
{
	text-decoration: none !important;
	background-color: rgb(94, 94, 94) !important;
	color: rgb(255, 255, 255) !important;
	cursor: pointer !important;
}

#loginRegisterLink
{
	float:right !important;
}

.cTopBar
{
	background: #CCC;
	color: #333 !important;
	padding: 1px 10px !important;
}

.cTopBar:hover
{
	color: rgb(226, 226, 226) !important;
}


@media (max-width:800px)
{
	.Responsive #loginBar form.eAuth .ctrlWrapper
	{
		border-right: none;
		margin-right: 10px;
	}

	.Responsive #loginBar form.eAuth #eAuthUnit
	{
		position: static;
		width: 180px;
		margin: 0 auto 10px;
	}
}


/* --- message.css --- */



.responsiveUser
	{
		display:none;
	}
	
	.nonResponsiveUser
	{
		display:block;
	}

.messageInfo .item.muted {
	font-size:11px;
}

div.xenTooltip.inlineModCheckTip
{
	display:none !Important;
}

#InlineModOverlay
{
	left:auto !important;
	right:10px;
}

.messageList
{
	
}

.messageList .message
{
	font-size: 14px;
background-color: #f8f8f8;
padding: 10px;
margin-top: 5px;
margin-bottom: 10px;
border: 1px solid rgb(216, 216, 216);
border-radius: 5px;
background: -moz-linear-gradient(top, rgba(248, 248, 248, 1) 0, rgba(255, 255, 255, 1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, url(rgba.php?r=248&g=248&b=248&a=255)), color-stop(100%, rgba(255, 255, 255, 1))); background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(248, 248, 248, 1)), color-stop(100%, rgba(255, 255, 255, 1))); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#FFF8F8F8,endColorstr=#FFF8F8F8);
background: -webkit-linear-gradient(top, rgba(248, 248, 248, 1) 0, rgba(255, 255, 255, 1) 100%);
background: -o-linear-gradient(top, rgba(248, 248, 248, 1) 0, rgba(255, 255, 255, 1) 100%);
background: -ms-linear-gradient(top, rgba(248, 248, 248, 1) 0, rgba(255, 255, 255, 1) 100%);
background: linear-gradient(to bottom, rgba(248, 248, 248, 1) 0, rgba(255, 255, 255, 1) 100%);
filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#f8f8f8', endColorstr='#ffffff', GradientType=0);

}

/* clearfix */ .messageList .message { zoom: 1; } .messageList .message:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

/*** Message block ***/

.message .messageInfo, .attachedFiles
{
	padding: 0;
margin-left: 240px;
/* border-bottom: 1px none black; */

	zoom: 1;
	background:none;
}

.message .messageInfo.primaryContent
{
	border-bottom:none;
}
	.topPostInfo
	{
		font-size: 11px;
		color: #000000;
		padding: 1px 5px;
		margin: -5px -5px 5px 5px;
		display: block;
		float: right;
		position: relative;
		margin-right: -5px;
	}

	.message .newIndicator
	{
		font-size: 11px;
color: #000000;
background-color: rgb(245, 222, 71);
padding: 1px 5px;
margin: -5px -5px 5px 5px;
border: 1px solid ;
border-radius: 3px;
border-top-right-radius: 0px;
display: block;
float: right;
position: relative;
box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);

		
		margin-right: -5px;
	}
	
		.message .newIndicator span
		{
			background-color: ;
border-top-right-radius: 3px;
position: absolute;
top: -4px;
right: -1px;
width: 5px;
height: 4px;

		}

	.message .messageContent
	{
		padding-bottom: 2px;
margin-top: 10px;
min-height: 100px;
overflow: hidden;
*zoom: 1;

	}
	
	.message .messageTextEndMarker
	{
		height: 0;
		font-size: 0;
		overflow: hidden;
	}
	
	.message .editDate
	{
		text-align: right;
		margin-top: 5px;
		font-size: 11px;
		color: rgb(150,150,150);
	}

	.message .signature
	{
		font-size: 11px;
color: #000000;
padding: 10px 0 0;
margin-top: 15px;
margin-bottom: 15px;
border-top: 1px solid rgb(216, 216, 216);
/* border-top: 1px solid rgb(216, 216, 216); */

	}

	.message .messageMeta, .message .messageLikes
	{
		font-size: 11px;
padding: 15px 0px 5px;
margin: -5px;
overflow: hidden;
zoom: 1;

		clear:both;
	}
	
	.message .messageLikes
	{
		margin-left:240px;
	}

		.message .privateControls
		{
			float: left;

			line-height:30px;
		}

		.message .publicControls
		{
			float: right;

			line-height:30px;
		}
		
			.message .privateControls .item
			{
				margin-right: 10px;
				/* float: left; */
			}

				.message .privateControls .item:last-child
				{
					margin-right: 0;
				}

			.message .publicControls .item
			{
				margin-left: 10px;
				float: left;
			}
	
				.message .messageMeta .control
				{
					
				}
				
					.message .messageMeta .control:focus
					{
						
					}
				
					.message .messageMeta .control:hover
					{
						
					}
				
					.message .messageMeta .control:active
					{
						
					}
	/*** multiquote +/- ***/
			
	.message .publicControls .MultiQuoteControl
	{
		padding-left: 4px;
		padding-right: 4px;
		border-radius: 2px;
		margin-left: 6px;
		margin-right: -4px;
	}
	
	
	.message .publicControls .MultiQuoteControl.active
	{
		background-color: rgb(255, 255, 255);
	}
	
		.messageNotices li
	{
		font-size: 11px;
background: rgb(245, 222, 71) url('styles/tmx/xenforo/gradients/form-button-white-25px.png') repeat-x top;
padding: 5px;
margin: 10px 0;
line-height: 16px;

	}
	
		.messageNotices .icon
		{
			float: right;
			width: 16px;
			height: 16px;
			background: url('styles/tmx/xenforo/xenforo-ui-sprite.png') no-repeat 1000px 1000px;
		}
	
			.messageNotices .warningNotice .icon { background-position: -48px -32px; }		
			.messageNotices .deletedNotice .icon { background-position: -64px -32px; }		
			.messageNotices .moderatedNotice .icon {background-position: -32px -16px; }
	
	.message .likesSummary
	{
		padding: 5px;
margin-top: 10px;
border: 1px solid rgb(255, 255, 255);
border-radius: 5px;

	}
	
	.message .messageText > *:first-child
	{
		margin-top: 0;
	}

/* inline moderation changes */

.InlineModChecked .messageUserBlock,
.InlineModChecked .messageInfo,
.InlineModChecked .messageNotices,
.InlineModChecked .bbCodeBlock .type,
.InlineModChecked .bbCodeBlock blockquote,
.InlineModChecked .attachedFiles .attachedFilesHeader,
.InlineModChecked .attachedFiles .attachmentList
{
	background: rgb(255, 255, 200) url('styles/tmx/xenforo/gradients/category-23px-light.png') repeat-x top;

}

.InlineModChecked .messageUserBlock div.avatarHolder,
.InlineModChecked .messageUserBlock .extraUserInfo
{
	background: transparent;
}

.InlineModChecked .messageUserBlock .arrow span
{
	border-left-color: rgb(255, 255, 200);
}

/* message list */

.messageList .newMessagesNotice
{
	margin: 10px auto;
	padding: 5px 10px;
	border-radius: 5px;
	border: 1px solid rgb(226, 226, 226);
	background: rgb(255, 255, 255) url(styles/tmx/xenforo/gradients/category-23px-light.png) repeat-x top;
	font-size: 11px;
}

/* deleted / ignored message placeholder */

.messageList .message.placeholder
{
}

.messageList .placeholder .placeholderContent
{	
	overflow: hidden; zoom: 1;
	color: rgb(211, 211, 211);
	font-size: 11px;
}

	.messageList .placeholder a.avatar
	{
		float: left;
		display: block;
	}
	
		.messageList .placeholder a.avatar img
		{
			display: block;
			width: 32px;
			height: 32px;
		}
		
	.messageList .placeholder .privateControls
	{
		margin-top: -5px;
	}
	

/* messages remaining link */

.postsRemaining a,
a.postsRemaining
{
	font-size: 11px;
	color: rgb(150,150,150);
}


@media (max-width:800px)
{
	.Responsive .message .newIndicator
	{
		margin-right: 0;
		border-top-right-radius: 3px;
	}
	
		.Responsive .message .newIndicator span
		{
			display: none;
		}
}

@media (max-width:480px)
{
	.Responsive .message .messageInfo
	{
		margin-left: 0;
		padding: 0 10px;
	}

	.Responsive .message .messageContent
	{
		min-height: 0;
	}	

	.Responsive .message .newIndicator
	{
		margin-right: -5px;
		margin-top: -16px;
	}

	.Responsive .message .postNumber,
	.Responsive .message .authorEnd
	{
		display: none;
	}
	
	.Responsive .message .signature
	{
		display: none;
	}
	
	.Responsive .messageList .placeholder a.avatar
	{
		margin-right: 10px;
	}
	
	.responsiveUser
	{
		display:block;
		clear:both;
	}
	
	.nonResponsiveUser
	{
		display:none;
	}
	
	.messageInfo .item.muted
	{
		padding: 1px 5px;
    		margin: -5px -5px 5px 5px;
    		margin-left: -5px;
    		float:left;
	}
	
	.message .messageLikes
	{
		margin-left:0px;
	}
	
	.message .messageMeta
	{
		display:block !important;
		margin-left:0px !important;
	}
	
	.message .privateControls, .message .publicControls
	{
		float:none;
		text-align:center;
	}
	
	.message .messageMeta .item
	{
		float:none !important;
		display:inline-block;
		margin-left:5px;
		margin-right:5px;
	}
	
	.message .messageMeta .button
	{
		margin-bottom:15px;
	}
	
	.responsiveAdCentered
	{
    		width:350px;
    		margin-bottom:10px;
    	}
}


/* --- message_user_info.css --- */

.messageUserInfo
{
	background-color: #ffffff;
margin-right: 20px;
float: left;
text-align: center;
width: 220px;

}

	.messageUserBlock
	{
		border: 1px solid rgb(216, 216, 216);
border-radius: 5px;
box-shadow: 0px 1px 4px 0px rgb(200,200,210);

		
		position: relative;
	}
		
		.messageUserBlock div.avatarHolder
		{
			padding: 10px;
border-radius: 4px;

			
			position: relative;	
		}
		
			.messageUserBlock div.avatarHolder .avatar
			{
				display: block;
				font-size: 0;
			}
			
			.messageUserBlock div.avatarHolder .onlineMarker
			{
				position: absolute;
				top: 9px;
				left: 9px;
				
				border: 7px solid transparent;
border-top-color: rgb(127, 185, 0);
border-left-color: rgb(127, 185, 0);
border-top-left-radius: 5px;
border-top-right-radius: 3px;
border-bottom-left-radius: 3px;

			}
			
		.messageUserBlock h3.userText
		{
			padding: 6px;

		}
		
		.messageUserBlock .userBanner
		{
			/* display: block;
			margin-bottom: 5px;
			margin-left: -12px;
			margin-right: -12px;
			*/
			display:none;
		}
		
		.messageUserBlock .userBanner:last-child
		{
			margin-bottom: 0;
		}
	
		.messageUserBlock a.username
		{
			font-weight: bold;
font-size: 17px;
display: block;
line-height: 16px;
/* overflow: hidden; */

			
		}
		
		.messageUserBlock .userTitle
		{
			font-size: 11px;
display: block;

		}
		
		.messageUserBlock .extraUserInfo
		{
			font-size: 11px;
padding: 4px 6px;
border-radius: 4px;

		}
		
			.messageUserBlock .extraUserInfo dl
			{
				margin: 2px 0 0;
			}
							
			.messageUserBlock .extraUserInfo img
			{
				max-width: 100%;
			}
		
		.messageUserBlock .arrow
		{
			position: absolute;
			top: 10px;
			right: -10px;
			
			display: block;
			width: 0px;
			height: 0px;
			line-height: 0px;
			
			border: 10px solid transparent;
			border-left-color: rgb(216, 216, 216);
			-moz-border-left-colors: rgb(216, 216, 216);
			border-right: none;
			
			/* Hide from IE6 */
			_display: none;
		}
		
			.messageUserBlock .arrow span
			{
				position: absolute;
				top: -10px;
				left: -11px;
				
				display: block;
				width: 0px;
				height: 0px;
				line-height: 0px;
				
				border: 10px solid transparent;
				border-left-color: ;
				-moz-border-left-colors: ;
				border-right: none;
			}


@media (max-width:480px)
{
	.Responsive .messageUserInfo
	{
		float: none;
		width: auto; 
		margin-right:0;
		/* display:inline-block; */
	}

	.Responsive .messageUserBlock
	{
		overflow: hidden;
		margin-bottom: 5px;
		position: relative;
	}

	.Responsive .messageUserBlock div.avatarHolder
	{
		float: left;
		padding: 5px;
	}

		.Responsive .messageUserBlock div.avatarHolder .avatar img
		{
			width: 48px;
			height: 48px;
		}
		
		.Responsive .messageUserBlock div.avatarHolder .onlineMarker
		{
			top: 4px;
			left: 4px;
			border-width: 6px;
		}

	.Responsive .messageUserBlock h3.userText
	{
		margin-left: 42px;
	}
	
	.Responsive .messageUserBlock .userBanner
	{
		max-width: 150px;
		margin-left: 0;
		margin-right: 0;
		border-top-left-radius: 3px;
		border-top-right-radius: 3px;
		position: static;
		display: inline-block;
	}
	
		.Responsive .messageUserBlock .userBanner span
		{
			display: none;
		}

	.Responsive .messageUserBlock .extraUserInfo
	{
		display: none;
	}

	.Responsive .messageUserBlock .arrow
	{
		display: none;
	}
	
	.messageUserBlock h3.userText
	{
		text-align:left;
	}
}


/* --- share_page.css --- */

.sharePage
{
}

/* clearfix */ .sharePage { zoom: 1; } .sharePage:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

	.sharePage .shareControl
	{
		float: left;
	}
	
	.sharePage .tweet
	{
		margin-right: 30px;
	}

	.sharePage .facebookLike .label
	{
		font-size: 11px;
		line-height: 24px;
		float: left;
		margin-right: 7px;
		display: none;
	}
	
	.sharePage iframe
	{
		height: 20px;
	}
	
	.sharePage .facebookLike iframe
	{
		z-index: 52;
	}
	



@media (max-width:480px)
{
	.Responsive .sharePage
	{
		display: none;
	}
}


/* --- thread_view.css --- */

.thread_view .threadAlerts
{
	border: 1px solid rgb(255, 255, 255);
	border-radius: 5px;
	font-size: 11px;
	margin: 10px 0;
	padding: 5px;
	line-height: 16px;
	background-image: url('styles/tmx/xenforo/gradients/form-button-white-25px.png');
}
	
	.thread_view .threadAlerts dt
	{
		color: ;
		display: inline;
	}
	
	.thread_view .threadAlerts dd
	{
		color: rgb(94, 94, 94);
		font-weight: bold;
		display: inline;
	}
	
		.thread_view .threadAlerts .icon
		{
			float: right;
			width: 16px;
			height: 16px;
			margin-left: 5px;
			background: url('styles/tmx/xenforo/xenforo-ui-sprite.png') no-repeat -1000px -1000px;
		}
		
			.thread_view .threadAlerts .deletedAlert .icon { background-position: -64px -32px; }
			.thread_view .threadAlerts .moderatedAlert .icon { background-position: -32px -16px; }
			.thread_view .threadAlerts .lockedAlert .icon { background-position: -16px -16px; }
	
.thread_view .threadAlerts + * > .messageList
{
	border-top: none;
}

.thread_view .threadNotices
{
	background-color: rgb(255, 255, 255);
	border: 1px solid rgb(226, 226, 226);
	border-radius: 5px;
	padding: 10px;
	margin: 10px auto;
}

.thread_view .InlineMod
{
	overflow: hidden; zoom: 1;
}

#gMCWrapper
{
	background:#fff;
	border-radius:5px;
	border:1px solid #d8d8d8;
}
#googleMatchedContent
{
	margin-top:10px;
	margin-bottom:10px;
	margin-left:1%;
	margin-right:1%;
	width:98%;
}

@media (max-width:480px)
{
	.responsiveAdCentered
	{
		margin-left:auto;
		margin-right:auto;
		width:275px;
	}
}

/* --- xengallery_tab_links.css --- */

.navTabs .navTab.selected .xengalleryTabLinks .xengallery li .Popup a:hover,
.navTabs .navTab.selected .xengalleryTabLinks .xengallery li .Popup a:focus
{
	color: rgb(95, 7, 7);
background-color: rgb(239, 239, 239);
outline: 0;

}

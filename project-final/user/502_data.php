<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from education-html.themerex.net/video-tutorials.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Mar 2017 03:27:37 GMT -->
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../content/bootstrap.css" rel="stylesheet" />
<script src="../scripts/jquery-1.9.1.js"></script>
<script src="../scripts/bootstrap.js"></script>

<link rel="icon" type="image/x-icon" href="images/favicon.ico"/>
<title>ANGULAR 2 Tutorials | knowledge.com</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&amp;subset=latin%2Clatin-ext&amp;ver=4.3.1" type="text/css" media="all"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,700,700italic&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" type="text/css" media="all"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister:400&amp;subset=latin" type="text/css" media="all"/>
<link rel="stylesheet" href="css/fontello/css/fontello.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/rs-plugin/settings.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/woocommerce/woocommerce-layout.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/woocommerce/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)"/>
<link rel="stylesheet" href="css/woocommerce/woocommerce.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/shortcodes.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/core.animation.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/tribe-style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/skins/skin.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/core.portfolio.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/mediaelement/mediaelementplayer.min.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/mediaelement/wp-mediaelement.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/core.customizer/front.customizer.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/core.messages/core.messages.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/swiper/idangerous.swiper.min.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/custom-style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/skins/skin-responsive.css" type="text/css" media="all"/>
</head>
<body class="page body_style_wide body_filled article_style_boxed template_single-standard top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_show sidebar_right">
<a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
 
<div class="body_wrap">
<div class="page_wrap">
<div class="top_panel_fixed_wrap"></div>
 
<?php include 'userheader.php'; ?>  
 
<div class="page_content_wrap">
<div class="content_wrap">
 
<div class="content">


<article class="post_item post_item_single page">
<section class="post_content">
<?php 
	$sid=502;
	$obj=new conclass();
	$res=$obj->getdata("select * from subcat_tbl where pk_s_id='$sid'");
		
		while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
		{
			$sname=$row["s_name"];
			$desc1=$row["s_desc1"];
			$desc2=$row["s_desc2"];
			$desc3=$row["s_desc3"];
		}
?>



<h3 class="widget_title" style="text-align:center"><?php echo $sname;?></h3>
 <strong style="font-size:20px;">
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<h4>Description</h4>
<p>In this chapter let us study how to create a <i>form</i>. We shall use the following classes and directives in our example.
</p>
<ul class="list">
  <li><p>The <i>form-group</i>, <i>form-control</i> and <i>btn</i> classes from <i>Bootstrap</i>.</p></li>
  <li><p>The <i>[(ngModel)]</i> for data binding and <i>NgControl</i> directive to keep track of control state for us.</p></li>
  <li><p>The <i>NgControl</i> is one among in <i>NgForm</i> directive family which is used for validation and tracking the form elements.</p></li>
  <li><p>The <i>ngSubmit</i> directive is used for handling the submission of the form.</p></li>
</ul>
<h4>Example</h4>
<p>The below example describes how to create a form in the Angular 2:</p>
<pre class="prettyprint notranslate tryit">&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Contact Form&lt;/title&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"&gt;
    &lt;script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.33.3/es6-shim.min.js"&gt;&lt;/script&gt;
    &lt;script src="https://cdnjs.cloudflare.com/ajax/libs/systemjs/0.19.20/system-polyfills.js"&gt;&lt;/script&gt;
    &lt;script src="https://code.angularjs.org/2.0.0-beta.6/angular2-polyfills.js"&gt;&lt;/script&gt;
    &lt;script src="https://code.angularjs.org/tools/system.js"&gt;&lt;/script&gt;
    &lt;script src="https://code.angularjs.org/tools/typescript.js"&gt;&lt;/script&gt;
    &lt;script src="https://code.angularjs.org/2.0.0-beta.6/Rx.js"&gt;&lt;/script&gt;
    &lt;script src="https://code.angularjs.org/2.0.0-beta.6/angular2.dev.js"&gt;&lt;/script&gt;
    &lt;script&gt;
      System.config({
        transpiler: 'typescript',
        typescriptOptions: { emitDecoratorMetadata: true },
        packages: {'app': {defaultExtension: 'ts'}},
        map: { 'app': './app' }
      });
      System.import('app/form_main')
            .then(null, console.error.bind(console));
    &lt;/script&gt;

  &lt;/head&gt;
  &lt;body&gt;
    &lt;my-app&gt;Loading...&lt;/my-app&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>
<p>The above code includes the following configuration options:</p>
<ul class="list">
   <li>
      <p>You can configure the <i>index.html</i> file using <i>typescript</i> version. The SystemJS transpile the TypeScript to JavaScript before running the application by using the <i>transpiler</i> option.</p>
   </li>
   <li>
      <p>If you do not transpile to JavaScript before running the application, you could see the compiler warnings and errors which are hidden in the browser.</p>
   </li>
   <li>
      <p>The TypeScript generates metadata for each and every class of the code when the <i>emitDecoratorMetadata</i> option is set. If you don't specify this option, large amount of unused metadata will be generated which affects the file size and impact on the application runtime.</p>
   </li>
   <li>
      <p>Angular 2 includes the packages form the <i>app</i> folder where files will have the <i>.ts</i> extension.</p>
   </li>
   <li>
      <p>Next it will load the main component file from the <i>app</i> folder. If there is no main component file found, then it will display the error in the console.</p>
   </li>
   <li>
      <p>When Angular calls the bootstrap function in main.ts, it reads the Component metadata, finds the 'app' selector, locates an element tag named app, and loads the application between those tags.</p>
   </li>
</ul>
<p>To run the code, you need the following <i>TypeScript(.ts)</i> files which you need to save under the <i>app</i> folder.</p>
<b>form_main.ts</b>
<pre class="prettyprint notranslate">import {bootstrap} from 'angular2/platform/browser';
import {AppComponent} from "./forms_app.component";

bootstrap(AppComponent);
</pre>
<b>contact.ts</b>
<pre class="prettyprint notranslate">export class Contact {
  constructor(
    public firstname: string,
    public lastname: string,
    public country: string,
    public phone: number
  ) {  }
}
</pre>
<p>The <i>Contact</i> class contains <i>firstname</i>, <i>lastname</i>, <i>country</i> and <i>phone</i> which are used in our form.</p>
<b>forms_app.component.ts</b>
<pre class="prettyprint notranslate">import {Component} from 'angular2/core';
import {ContactComponent} from './contact-form.component'
@Component({
  selector: 'my-app',
  template: '<contact-form></contact-form>',
  directives: [ContactComponent]
})
export class AppComponent { }
</pre>
<ul class="list">
   <li><p>The <i>@Component</i> is a decorator which uses configuration object to create the component.</p></li>
   <li><p>The <i>selector</i> creates an instance of the component where it finds &lt;my-app&gt; tag in parent HTML.</p></li>
   <li><p>The <i>template</i> that tells Angular what to render as view.</p></li>
   <li><p>The above <i>app.component.ts</i> will import the <i>ContactComponent</i> component and uses <i>directives</i> to include the component.</p></li>
</ul>
<b>contact-form.component.ts</b>
<pre class="prettyprint notranslate">import {Component} from 'angular2/core';
import {NgForm}    from 'angular2/common';
import { Contact } from './contact';
@Component({
  selector: 'contact-form',
  templateUrl: 'app/contact-form.component.html'
})
export class ContactComponent {
  countries = ['India', 'Australia', 'England', 'South Africa', 'USA', 'Japan', 'Singapore'];
  contact = new Contact('Ravi', 'Shankar', this.countries[0], 6445874544);
  submitted = false;
  onSubmit() { this.submitted = true; }
  active = true;
  newContact() {
    this.contact = new Contact('', '');
    this.active = false;
    setTimeout(()=&gt; this.active=true, 0);
  }
}
</pre>
<ul class="list">
<li><p>The NgForm is imported which provides <i>CSS classes</i> and <i>Model states</i>.</p></li>
<li><p>The <i>templateUrl</i> property provides the path to the <i>contact-form.component.html</i> file which contains our form elements. </p></li>
<li><p>The <i>onSubmit()</i> method will alter the <i>submitted</i> value to <i>true</i> once invoked and the <i>newContact()</i> will create new contact.</p></li>
</ul>
<b>contact-form.component.html</b>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"container"</span><span class="tag">&gt;</span><span class="pln">
  </span><span class="tag">&lt;div</span><span class="pln"> [</span><span class="atn">hidden</span><span class="pln">]</span><span class="pun">=</span><span class="atv">"submitted"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;h4&gt;</span><span class="pln">Contact Form</span><span class="tag">&lt;/h4&gt;</span><span class="pln">
    </span><span class="tag">&lt;form</span><span class="pln"> *</span><span class="atn">ngIf</span><span class="pun">=</span><span class="atv">"active"</span><span class="pln"> (</span><span class="atn">ngSubmit</span><span class="pln">)</span><span class="pun">=</span><span class="atv">"onSubmit()"</span><span class="pln"> #</span><span class="atn">contactForm</span><span class="pun">=</span><span class="atv">"ngForm"</span><span class="pln"> </span><span class="atn">novalidate</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-group"</span><span class="tag">&gt;</span><span class="pln">
        </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"firstname"</span><span class="tag">&gt;</span><span class="pln">First Name</span><span class="tag">&lt;/label&gt;</span><span class="pln">
        </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-control"</span><span class="pln"> </span><span class="atn">placeholder</span><span class="pun">=</span><span class="atv">"Enter Your First Name"</span><span class="pln"> </span><span class="atn">required</span><span class="pln">
          [(</span><span class="atn">ngModel</span><span class="pln">)]</span><span class="pun">=</span><span class="atv">"contact.firstname"</span><span class="pln">
            </span><span class="atn">ngControl</span><span class="pun">=</span><span class="atv">"firstname"</span><span class="pln">  #</span><span class="atn">firstname</span><span class="pun">=</span><span class="atv">"ngForm"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">
        </span><span class="tag">&lt;div</span><span class="pln"> [</span><span class="atn">hidden</span><span class="pln">]</span><span class="pun">=</span><span class="atv">"firstname.valid || firstname.pristine"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"alert alert-danger"</span><span class="tag">&gt;</span><span class="pln">
          firstname is required
        </span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-group"</span><span class="tag">&gt;</span><span class="pln">
        </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"lastname"</span><span class="tag">&gt;</span><span class="pln">Last Name</span><span class="tag">&lt;/label&gt;</span><span class="pln">
        </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-control"</span><span class="pln"> </span><span class="atn">placeholder</span><span class="pun">=</span><span class="atv">"Enter Your Last Name"</span><span class="pln">
          [(</span><span class="atn">ngModel</span><span class="pln">)]</span><span class="pun">=</span><span class="atv">"contact.lastname"</span><span class="pln">
            </span><span class="atn">ngControl</span><span class="pun">=</span><span class="atv">"lastname"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-group"</span><span class="tag">&gt;</span><span class="pln">
        </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"country"</span><span class="tag">&gt;</span><span class="pln">Country</span><span class="tag">&lt;/label&gt;</span><span class="pln">
        </span><span class="tag">&lt;select</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-control"</span><span class="pln"> </span><span class="atn">required</span><span class="pln">
          [(</span><span class="atn">ngModel</span><span class="pln">)]</span><span class="pun">=</span><span class="atv">"contact.country"</span><span class="pln">
            </span><span class="atn">ngControl</span><span class="pun">=</span><span class="atv">"country"</span><span class="pln"> #</span><span class="atn">country</span><span class="pun">=</span><span class="atv">"ngForm"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">
          </span><span class="tag">&lt;option</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">""</span><span class="pln"> </span><span class="atn">selected</span><span class="pln"> </span><span class="atn">disabled</span><span class="tag">&gt;</span><span class="pln">Select Your Country</span><span class="tag">&lt;/option&gt;</span><span class="pln">
          </span><span class="tag">&lt;option</span><span class="pln"> *</span><span class="atn">ngFor</span><span class="pun">=</span><span class="atv">"#coun of countries"</span><span class="pln"> [</span><span class="atn">value</span><span class="pln">]</span><span class="pun">=</span><span class="atv">"coun"</span><span class="tag">&gt;</span><span class="pln">{{coun}}</span><span class="tag">&lt;/option&gt;</span><span class="pln">
        </span><span class="tag">&lt;/select&gt;</span><span class="pln">
        </span><span class="tag">&lt;div</span><span class="pln"> [</span><span class="atn">hidden</span><span class="pln">]</span><span class="pun">=</span><span class="atv">"country.valid || country.pristine"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"alert alert-danger"</span><span class="tag">&gt;</span><span class="pln">
          Country is required
        </span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">

      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-group"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"phone"</span><span class="tag">&gt;</span><span class="pln">Phone Number</span><span class="tag">&lt;/label&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"number"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-control"</span><span class="pln"> </span><span class="atn">placeholder</span><span class="pun">=</span><span class="atv">"Enter Your Phone Number"</span><span class="pln">
            [(</span><span class="atn">ngModel</span><span class="pln">)]</span><span class="pun">=</span><span class="atv">"contact.phone"</span><span class="pln">
            </span><span class="atn">ngControl</span><span class="pun">=</span><span class="atv">"phone"</span><span class="pln">
         </span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">

      </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn btn-primary"</span><span class="pln"> [</span><span class="atn">disabled</span><span class="pln">]</span><span class="pun">=</span><span class="atv">"!contactForm.form.valid"</span><span class="tag">&gt;</span><span class="pln">Submit</span><span class="tag">&lt;/button&gt;</span><span class="pln">
      </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn btn-primary"</span><span class="pln"> (</span><span class="atn">click</span><span class="pln">)</span><span class="pun">=</span><span class="atv">"newContact()"</span><span class="tag">&gt;</span><span class="pln">New Contact</span><span class="tag">&lt;/button&gt;</span><span class="pln">
    </span><span class="tag">&lt;/form&gt;</span><span class="pln">
  </span><span class="tag">&lt;/div&gt;</span><span class="pln">
  </span><span class="tag">&lt;div</span><span class="pln"> [</span><span class="atn">hidden</span><span class="pln">]</span><span class="pun">=</span><span class="atv">"!submitted"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;h4&gt;</span><span class="pln">Your contact details :</span><span class="tag">&lt;/h4&gt;</span><span class="pln">
    </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"well"</span><span class="tag">&gt;</span><span class="pln">
        </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">&gt;</span><span class="pln">
          </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"col-xs-2"</span><span class="tag">&gt;</span><span class="pln">First Name</span><span class="tag">&lt;/div&gt;</span><span class="pln">
          </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"col-xs-10  pull-left"</span><span class="tag">&gt;</span><span class="pln">{{ contact.firstname }}</span><span class="tag">&lt;/div&gt;</span><span class="pln">
        </span><span class="tag">&lt;/div&gt;</span><span class="pln">
        </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">&gt;</span><span class="pln">
          </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"col-xs-2"</span><span class="tag">&gt;</span><span class="pln">Last Name</span><span class="tag">&lt;/div&gt;</span><span class="pln">
          </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"col-xs-10 pull-left"</span><span class="tag">&gt;</span><span class="pln">{{ contact.lastname }}</span><span class="tag">&lt;/div&gt;</span><span class="pln">
        </span><span class="tag">&lt;/div&gt;</span><span class="pln">
        </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">&gt;</span><span class="pln">
          </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"col-xs-2"</span><span class="tag">&gt;</span><span class="pln">Country</span><span class="tag">&lt;/div&gt;</span><span class="pln">
          </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"col-xs-10 pull-left"</span><span class="tag">&gt;</span><span class="pln">{{ contact.country }}</span><span class="tag">&lt;/div&gt;</span><span class="pln">
        </span><span class="tag">&lt;/div&gt;</span><span class="pln">
        </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">&gt;</span><span class="pln">
        </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"col-xs-2"</span><span class="tag">&gt;</span><span class="pln">Phone Number</span><span class="tag">&lt;/div&gt;</span><span class="pln">
        </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"col-xs-10 pull-left"</span><span class="tag">&gt;</span><span class="pln">{{ contact.phone }}</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
        </span><span class="tag">&lt;br&gt;</span><span class="pln">
        </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn btn-primary"</span><span class="pln"> (</span><span class="atn">click</span><span class="pln">)</span><span class="pun">=</span><span class="atv">"submitted=false"</span><span class="tag">&gt;</span><span class="pln">Edit Contact</span><span class="tag">&lt;/button&gt;</span><span class="pln">
    </span><span class="tag">&lt;/div&gt;</span><span class="pln">
  </span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span></pre>
<ul class="list">
<li><p>The above code contains the form, on submitting the form the <i>ngSubmit</i> directive calls <i>onSubmit()</i> method.</p></li>
<li><p>The contact details are displayed when the <i>submitted</i> is set to <i>false</i>.</p></li>
<li><p>It uses <i>pristine</i> and <i>valid</i> for validating an form input element.</p></li>
<li><p>The <i>ngIf</i> directive checks whether the <i>active</i> is set to <i>true</i> for displaying the form.</p></li>
</ul>
<h4>Output</h4>
<p>Let's carry out the following steps to see how above code works:</p>
<ul class="list">
   <li><p>Save above HTML code as <b>index.html</b> file as how we created in <a href="/angular2/angular2_environment.htm">environment</a> chapter and use the above <i>app</i> folder which contains <i>.ts</i> files.</p></li>
   <li><p>Open the terminal window and enter the below command:</p>
   <pre class="prettyprint notranslate prettyprinted"><span class="pln">npm start</span></pre>
   </li>
   <li><p>After few moments, a browser tab should open and displays the output as shown below.</p></li>
</ul>
<p><b>OR</b> you can run this file in another way:</p>
<ul class="list">
<li><p>Save above HTML code as <b>angular2_forms.html</b> file in your server root folder.</p></li>
<li><p>Open this HTML file as http://localhost/angular2_forms.html and output as below gets displayed.</p></li>
</ul>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="501_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="503_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'angular2_header.php'; ?></aside>
 
  
</div>
 
</div>
</div>
 
 

<?php include 'userfooter.php'; ?>  
 
 
</div>
</div>
 
<a href="#" class="scroll_to_top icon-up-2" title="Scroll to top"></a>
<div class="custom_html_section"></div>
<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/core.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/widget.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/tabs.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/accordion.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/effect.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/effect-fade.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery.blockUI.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery.cookie.min.js"></script>
<script type="text/javascript" src="js/global.min.js"></script>
<script type="text/javascript" src="js/core.utils.min.js"></script>
<script type="text/javascript" src="js/core.init.min.js"></script>
<script type="text/javascript" src="js/shortcodes/shortcodes.min.js"></script>
<script type="text/javascript" src="js/superfish.min.js"></script>
<script type="text/javascript" src="js/jquery.slidemenu.min.js"></script>
<script type="text/javascript" src="js/mediaelement/mediaelement-and-player.min.js"></script>
<script type="text/javascript" src="js/mediaelement/wp-mediaelement.min.js"></script>
<script type="text/javascript" src="js/core.messages/core.messages.min.js"></script>
<script type="text/javascript" src="js/swiper/idangerous.swiper-2.7.min.js"></script>
<script type="text/javascript" src="js/swiper/idangerous.swiper.scrollbar-2.4.min.js"></script>
<script type="text/javascript" src="js/prettyPhoto/jquery.prettyPhoto.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/core.googlemap.min.js"></script>
<script type="text/javascript" src="js/diagram/chart.min.js"></script>
<script type="text/javascript" src="js/core.customizer/front.customizer.min.js"></script>
<script type="text/javascript" src="js/skin.customizer.min.js"></script>
</body>

<!-- Mirrored from education-html.themerex.net/shortcodes.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Mar 2017 03:27:37 GMT -->
</html>
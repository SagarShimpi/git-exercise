<div id="validation_div" style="display:none">
&bull; <a href="gen_validatorv4/gen_validatorv4.js" download><strong>click here to 'Download validation JS'</strong></a>
  <!-- #req -->
  <div id="req_title" class="title" onclick="expandDiv('req')">
    <div class="name"><span id="req_expandSpan" class="expand">+</span> Requierd</div>
    <div class="desc">req &rarr; mandetory</div>
  </div>
  <table id="req_tbl" style="display:none;">
    <tr>
      <td>Use</td>
      <td>To Restrict Given Field passed as EMPTY</td>
      <td width="1%" rowspan="4"><button  onclick="CopyToClipboard('req_syn')">Copy Syntax</button></td>
    </tr>
    <tr>
      <td>Syntax</td>
      <td id="req_syn">frmvalidator.addValidation("Field Name","req","Message to display");</td>
    </tr>
    <tr>
      <td >Example</td>
      <td>frmvalidator.addValidation("cname","req","Customer Name should not be EMPTY");</td>
    </tr>
    <tr>
      <td>Try</td>
      <td><!-- create form -->
        <form id="req_form" action="" method="post">
          <!-- create form validator object -->
          <script language="JavaScript" type="text/javascript" xml:space="preserve">
            var frmvalidator = new Validator("req_form");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            </script>
          <!-- create input field -->
          <input type="text" id="cname" name="cname" placeholder = "Customer Name"/>
          <!-- create span to display validation message for respective input -->
          <span id='req_form_cname_errorloc' class="error_strings"></span>
          <!-- set validation rules for respective input -->
          <script>frmvalidator.addValidation("cname","req","Enter Customer Name");</script>
          <input type="submit" />
        </form></td>
    </tr>
    <tr>
      <td>Code</td>
      <td id="req_code">&lt;!-- include validator.js file --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; src=&quot;gen_validatorv4.js&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;&lt;/script&gt;<br />
        &lt;!-- create form --&gt;<br />
        &lt;form id=&quot;req_form&quot; action=&quot;&quot; method=&quot;post&quot;&gt;<br />
        &lt;!-- create form validator object --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;<br />
        var frmvalidator = new Validator(&quot;req_form&quot;);<br />
        frmvalidator.EnableOnPageErrorDisplay();<br />
        frmvalidator.EnableMsgsTogether();<br />
        &lt;/script&gt;<br />
        &lt;!-- create input field --&gt;<br />
        &lt;label&gt;Customer Name: &lt;/label&gt;<br />
        &lt;input type=&quot;text&quot; id=&quot;cname&quot; name=&quot;cname&quot; /&gt;<br />
        &lt;!-- create span to display validation message for respective input --&gt;<br />
        &lt;span id='req_form_cname_errorloc' class=&quot;error_strings&quot;&gt;&lt;/span&gt;<br />
        &lt;!-- set validation rules for respective input --&gt;<br />
        &lt;script&gt;frmvalidator.addValidation(&quot;cname&quot;,&quot;req&quot;,&quot;Enter Customer Name&quot;);&lt;/script&gt;<br />
        &lt;input type=&quot;submit&quot; /&gt;<br />
        &lt;/form&gt;<br /></td>
      <td align="center" style="border-top:hidden;"><button  onclick="CopyToClipboard('req_code')">Copy Code</button></td>
    </tr>
  </table>
  <!-- #alpha -->
  <div id="alpha_title" class="title" onclick="expandDiv('alpha')">
    <div class="name"><span id="alpha_expandSpan" class="expand">+</span> Alpha</div>
    <div class="desc">alpha &rarr; alphabets only (not even space and .)</div>
  </div>
  <table id="alpha_tbl" style="display:none;">
    <tr>
      <td>Use</td>
      <td>To Restrict Given Field passed as EMPTY</td>
      <td width="1%" rowspan="4"><button  onclick="CopyToClipboard('alpha_syn')">Copy Syntax</button></td>
    </tr>
    <tr>
      <td>Syntax</td>
      <td id="alpha_syn">frmvalidator.addValidation("Field Name","alpha","Message to display");</td>
    </tr>
    <tr>
      <td >Example</td>
      <td>frmvalidator.addValidation("cname","alpha","Customer Name should not be EMPTY");</td>
    </tr>
    <tr>
      <td>Try</td>
      <td><!-- create form -->
        <form id="f1" action="" method="post">
          <!-- create form validator object -->
          <script language="JavaScript" type="text/javascript" xml:space="preserve">
            var frmvalidator = new Validator("f1");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            </script>
          <!-- create input field -->
          <input type="text" id="cname" name="cname" placeholder = "Customer Name"/>
          <!-- create span to display validation message for respective input -->
          <span id='f1_cname_errorloc' class="error_strings"></span>
          <!-- set validation rules for respective input -->
          <script>frmvalidator.addValidation("cname","alpha","Enter Customer Name");</script>
          <input type="submit" />
        </form></td>
    </tr>
    <tr>
      <td>Code</td>
      <td id="alpha_code">&lt;!-- include validator.js file --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; src=&quot;gen_validatorv4.js&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;&lt;/script&gt;<br />
        &lt;!-- create form --&gt;<br />
        &lt;form id=&quot;f1&quot; action=&quot;&quot; method=&quot;post&quot;&gt;<br />
        &lt;!-- create form validator object --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;<br />
        var frmvalidator = new Validator(&quot;f1&quot;);<br />
        frmvalidator.EnableOnPageErrorDisplay();<br />
        frmvalidator.EnableMsgsTogether();<br />
        &lt;/script&gt;<br />
        &lt;!-- create input field --&gt;<br />
        &lt;label&gt;Customer Name: &lt;/label&gt;<br />
        &lt;input type=&quot;text&quot; id=&quot;cname&quot; name=&quot;cname&quot; /&gt;<br />
        &lt;!-- create span to display validation message for respective input --&gt;<br />
        &lt;span id='f1_cname_errorloc' class=&quot;error_strings&quot;&gt;&lt;/span&gt;<br />
        &lt;!-- set validation rules for respective input --&gt;<br />
        &lt;script&gt;frmvalidator.addValidation(&quot;cname&quot;,&quot;alpha&quot;,&quot;Enter Customer Name&quot;);&lt;/script&gt;<br />
        &lt;input type=&quot;submit&quot; /&gt;<br />
        &lt;/form&gt;<br /></td>
      <td align="center" style="border-top:hidden;"><button  onclick="CopyToClipboard('alpha_code')">Copy Code</button></td>
    </tr>
  </table>
  <!-- #alpha_s -->
  <div id="alpha_s_title" class="title" onclick="expandDiv('alpha_s')">
    <div class="name"><span id="alpha_s_expandSpan" class="expand">+</span> Alpha Space</div>
    <div class="desc">alpha_s &rarr; allow alphabets and space only</div>
  </div>
  <table id="alpha_s_tbl" style="display:none;">
    <tr>
      <td>Use</td>
      <td>To Restrict Given Field passed as EMPTY</td>
      <td width="1%" rowspan="4"><button  onclick="CopyToClipboard('alpha_s_syn')">Copy Syntax</button></td>
    </tr>
    <tr>
      <td>Syntax</td>
      <td id="alpha_s_syn">frmvalidator.addValidation("Field Name","alpha_s","Message to display");</td>
    </tr>
    <tr>
      <td >Example</td>
      <td>frmvalidator.addValidation("cname","alpha_s","Customer Name should not be EMPTY");</td>
    </tr>
    <tr>
      <td>Try</td>
      <td><!-- create form -->
        <form id="f1" action="" method="post">
          <!-- create form validator object -->
          <script language="JavaScript" type="text/javascript" xml:space="preserve">
            var frmvalidator = new Validator("f1");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            </script>
          <!-- create input field -->
          <input type="text" id="cname" name="cname" placeholder = "Customer Name"/>
          <!-- create span to display validation message for respective input -->
          <span id='f1_cname_errorloc' class="error_strings"></span>
          <!-- set validation rules for respective input -->
          <script>frmvalidator.addValidation("cname","alpha_s","Enter Customer Name");</script>
          <input type="submit" />
        </form></td>
    </tr>
    <tr>
      <td>Code</td>
      <td id="alpha_s_code">&lt;!-- include validator.js file --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; src=&quot;gen_validatorv4.js&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;&lt;/script&gt;<br />
        &lt;!-- create form --&gt;<br />
        &lt;form id=&quot;f1&quot; action=&quot;&quot; method=&quot;post&quot;&gt;<br />
        &lt;!-- create form validator object --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;<br />
        var frmvalidator = new Validator(&quot;f1&quot;);<br />
        frmvalidator.EnableOnPageErrorDisplay();<br />
        frmvalidator.EnableMsgsTogether();<br />
        &lt;/script&gt;<br />
        &lt;!-- create input field --&gt;<br />
        &lt;label&gt;Customer Name: &lt;/label&gt;<br />
        &lt;input type=&quot;text&quot; id=&quot;cname&quot; name=&quot;cname&quot; /&gt;<br />
        &lt;!-- create span to display validation message for respective input --&gt;<br />
        &lt;span id='f1_cname_errorloc' class=&quot;error_strings&quot;&gt;&lt;/span&gt;<br />
        &lt;!-- set validation rules for respective input --&gt;<br />
        &lt;script&gt;frmvalidator.addValidation(&quot;cname&quot;,&quot;alpha_s&quot;,&quot;Enter Customer Name&quot;);&lt;/script&gt;<br />
        &lt;input type=&quot;submit&quot; /&gt;<br />
        &lt;/form&gt;<br /></td>
      <td align="center" style="border-top:hidden;"><button  onclick="CopyToClipboard('alpha_s_code')">Copy Code</button></td>
    </tr>
  </table>
  <!-- #alphanumeric_space -->
  <div id="alphanumeric_space_title" class="title" onclick="expandDiv('alphanumeric_space')">
    <div class="name"><span id="alphanumeric_space_expandSpan" class="expand">+</span> Alpha Numeric Space</div>
    <div class="desc">alphanumeric_space &rarr; allow alphabets, numbers and space only</div>
  </div>
  <table id="alphanumeric_space_tbl" style="display:none;">
    <tr>
      <td>Use</td>
      <td>To Restrict Given Field passed as EMPTY</td>
      <td width="1%" rowspan="4"><button  onclick="CopyToClipboard('alphanumeric_space_syn')">Copy Syntax</button></td>
    </tr>
    <tr>
      <td>Syntax</td>
      <td id="alphanumeric_space_syn">frmvalidator.addValidation("Field Name","alphanumeric_space","Message to display");</td>
    </tr>
    <tr>
      <td >Example</td>
      <td>frmvalidator.addValidation("cname","alphanumeric_space","Customer Name should not be EMPTY");</td>
    </tr>
    <tr>
      <td>Try</td>
      <td><!-- create form -->
        <form id="f1" action="" method="post">
          <!-- create form validator object -->
          <script language="JavaScript" type="text/javascript" xml:space="preserve">
            var frmvalidator = new Validator("f1");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            </script>
          <!-- create input field -->
          <input type="text" id="cname" name="cname" placeholder = "Customer Name"/>
          <!-- create span to display validation message for respective input -->
          <span id='f1_cname_errorloc' class="error_strings"></span>
          <!-- set validation rules for respective input -->
          <script>frmvalidator.addValidation("cname","alphanumeric_space","Enter Customer Name");</script>
          <input type="submit" />
        </form></td>
    </tr>
    <tr>
      <td>Code</td>
      <td id="alphanumeric_space_code">&lt;!-- include validator.js file --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; src=&quot;gen_validatorv4.js&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;&lt;/script&gt;<br />
        &lt;!-- create form --&gt;<br />
        &lt;form id=&quot;f1&quot; action=&quot;&quot; method=&quot;post&quot;&gt;<br />
        &lt;!-- create form validator object --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;<br />
        var frmvalidator = new Validator(&quot;f1&quot;);<br />
        frmvalidator.EnableOnPageErrorDisplay();<br />
        frmvalidator.EnableMsgsTogether();<br />
        &lt;/script&gt;<br />
        &lt;!-- create input field --&gt;<br />
        &lt;label&gt;Customer Name: &lt;/label&gt;<br />
        &lt;input type=&quot;text&quot; id=&quot;cname&quot; name=&quot;cname&quot; /&gt;<br />
        &lt;!-- create span to display validation message for respective input --&gt;<br />
        &lt;span id='f1_cname_errorloc' class=&quot;error_strings&quot;&gt;&lt;/span&gt;<br />
        &lt;!-- set validation rules for respective input --&gt;<br />
        &lt;script&gt;frmvalidator.addValidation(&quot;cname&quot;,&quot;alphanumeric_space&quot;,&quot;Enter Customer Name&quot;);&lt;/script&gt;<br />
        &lt;input type=&quot;submit&quot; /&gt;<br />
        &lt;/form&gt;<br /></td>
      <td align="center" style="border-top:hidden;"><button  onclick="CopyToClipboard('alphanumeric_space_code')">Copy Code</button></td>
    </tr>
  </table>
  <!-- #numeric -->
  <div id="numeric_title" class="title" onclick="expandDiv('numeric')">
    <div class="name"><span id="numeric_expandSpan" class="expand">+</span> Numeric</div>
    <div class="desc">numeric &rarr; allow only numbers</div>
  </div>
  <table id="numeric_tbl" style="display:none;">
    <tr>
      <td>Use</td>
      <td>To Restrict Given Field passed as EMPTY</td>
      <td width="1%" rowspan="4"><button  onclick="CopyToClipboard('numeric_syn')">Copy Syntax</button></td>
    </tr>
    <tr>
      <td>Syntax</td>
      <td id="numeric_syn">frmvalidator.addValidation("Field Name","numeric","Message to display");</td>
    </tr>
    <tr>
      <td >Example</td>
      <td>frmvalidator.addValidation("cname","numeric","Customer Name should not be EMPTY");</td>
    </tr>
    <tr>
      <td>Try</td>
      <td><!-- create form -->
        <form id="f1" action="" method="post">
          <!-- create form validator object -->
          <script language="JavaScript" type="text/javascript" xml:space="preserve">
            var frmvalidator = new Validator("f1");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            </script>
          <!-- create input field -->
          <input type="text" id="cname" name="cname" placeholder = "Customer Name"/>
          <!-- create span to display validation message for respective input -->
          <span id='f1_cname_errorloc' class="error_strings"></span>
          <!-- set validation rules for respective input -->
          <script>frmvalidator.addValidation("cname","numeric","Enter Customer Name");</script>
          <input type="submit" />
        </form></td>
    </tr>
    <tr>
      <td>Code</td>
      <td id="numeric_code">&lt;!-- include validator.js file --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; src=&quot;gen_validatorv4.js&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;&lt;/script&gt;<br />
        &lt;!-- create form --&gt;<br />
        &lt;form id=&quot;f1&quot; action=&quot;&quot; method=&quot;post&quot;&gt;<br />
        &lt;!-- create form validator object --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;<br />
        var frmvalidator = new Validator(&quot;f1&quot;);<br />
        frmvalidator.EnableOnPageErrorDisplay();<br />
        frmvalidator.EnableMsgsTogether();<br />
        &lt;/script&gt;<br />
        &lt;!-- create input field --&gt;<br />
        &lt;label&gt;Customer Name: &lt;/label&gt;<br />
        &lt;input type=&quot;text&quot; id=&quot;cname&quot; name=&quot;cname&quot; /&gt;<br />
        &lt;!-- create span to display validation message for respective input --&gt;<br />
        &lt;span id='f1_cname_errorloc' class=&quot;error_strings&quot;&gt;&lt;/span&gt;<br />
        &lt;!-- set validation rules for respective input --&gt;<br />
        &lt;script&gt;frmvalidator.addValidation(&quot;cname&quot;,&quot;numeric&quot;,&quot;Enter Customer Name&quot;);&lt;/script&gt;<br />
        &lt;input type=&quot;submit&quot; /&gt;<br />
        &lt;/form&gt;<br /></td>
      <td align="center" style="border-top:hidden;"><button  onclick="CopyToClipboard('numeric_code')">Copy Code</button></td>
    </tr>
  </table>
  <!-- #email -->
  <div id="email_title" class="title" onclick="expandDiv('email')">
    <div class="name"><span id="email_expandSpan" class="expand">+</span> Email</div>
    <div class="desc">email &rarr; allow only valid email</div>
  </div>
  <table id="email_tbl" style="display:none;">
    <tr>
      <td>Use</td>
      <td>To Restrict Given Field passed as EMPTY</td>
      <td width="1%" rowspan="4"><button  onclick="CopyToClipboard('email_syn')">Copy Syntax</button></td>
    </tr>
    <tr>
      <td>Syntax</td>
      <td id="email_syn">frmvalidator.addValidation("Field Name","email","Message to display");</td>
    </tr>
    <tr>
      <td >Example</td>
      <td>frmvalidator.addValidation("cname","email","Customer Name should not be EMPTY");</td>
    </tr>
    <tr>
      <td>Try</td>
      <td><!-- create form -->
        <form id="f1" action="" method="post">
          <!-- create form validator object -->
          <script language="JavaScript" type="text/javascript" xml:space="preserve">
            var frmvalidator = new Validator("f1");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            </script>
          <!-- create input field -->
          <input type="text" id="cname" name="cname" placeholder = "Customer Name"/>
          <!-- create span to display validation message for respective input -->
          <span id='f1_cname_errorloc' class="error_strings"></span>
          <!-- set validation rules for respective input -->
          <script>frmvalidator.addValidation("cname","email","Enter Customer Name");</script>
          <input type="submit" />
        </form></td>
    </tr>
    <tr>
      <td>Code</td>
      <td id="email_code">&lt;!-- include validator.js file --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; src=&quot;gen_validatorv4.js&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;&lt;/script&gt;<br />
        &lt;!-- create form --&gt;<br />
        &lt;form id=&quot;f1&quot; action=&quot;&quot; method=&quot;post&quot;&gt;<br />
        &lt;!-- create form validator object --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;<br />
        var frmvalidator = new Validator(&quot;f1&quot;);<br />
        frmvalidator.EnableOnPageErrorDisplay();<br />
        frmvalidator.EnableMsgsTogether();<br />
        &lt;/script&gt;<br />
        &lt;!-- create input field --&gt;<br />
        &lt;label&gt;Customer Name: &lt;/label&gt;<br />
        &lt;input type=&quot;text&quot; id=&quot;cname&quot; name=&quot;cname&quot; /&gt;<br />
        &lt;!-- create span to display validation message for respective input --&gt;<br />
        &lt;span id='f1_cname_errorloc' class=&quot;error_strings&quot;&gt;&lt;/span&gt;<br />
        &lt;!-- set validation rules for respective input --&gt;<br />
        &lt;script&gt;frmvalidator.addValidation(&quot;cname&quot;,&quot;email&quot;,&quot;Enter Customer Name&quot;);&lt;/script&gt;<br />
        &lt;input type=&quot;submit&quot; /&gt;<br />
        &lt;/form&gt;<br /></td>
      <td align="center" style="border-top:hidden;"><button  onclick="CopyToClipboard('email_code')">Copy Code</button></td>
    </tr>
  </table>
  <!-- #dontselect -->
  <div id="dontselect_title" class="title" onclick="expandDiv('dontselect')">
    <div class="name"><span id="dontselect_expandSpan" class="expand">+</span> Dropdown Requierd</div>
    <div class="desc">dontselect &rarr; mandetory dropdown</div>
  </div>
  <table id="dontselect_tbl" style="display:none;">
    <tr>
      <td>Use</td>
      <td>To Restrict Given Field passed as EMPTY</td>
      <td width="1%" rowspan="4"><button  onclick="CopyToClipboard('dontselect_syn')">Copy Syntax</button></td>
    </tr>
    <tr>
      <td>Syntax</td>
      <td id="dontselect_syn">frmvalidator.addValidation("Field Name","dontselect","Message to display");</td>
    </tr>
    <tr>
      <td >Example</td>
      <td>frmvalidator.addValidation("cname","dontselect","Customer Name should not be EMPTY");</td>
    </tr>
    <tr>
      <td>Try</td>
      <td><!-- create form -->
        <form id="f1" action="" method="post">
          <!-- create form validator object -->
          <script language="JavaScript" type="text/javascript" xml:space="preserve">
            var frmvalidator = new Validator("f1");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            </script>
          <!-- create input field -->
          <input type="text" id="cname" name="cname" placeholder = "Customer Name"/>
          <!-- create span to display validation message for respective input -->
          <span id='f1_cname_errorloc' class="error_strings"></span>
          <!-- set validation rules for respective input -->
          <script>frmvalidator.addValidation("cname","dontselect","Enter Customer Name");</script>
          <input type="submit" />
        </form></td>
    </tr>
    <tr>
      <td>Code</td>
      <td id="dontselect_code">&lt;!-- include validator.js file --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; src=&quot;gen_validatorv4.js&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;&lt;/script&gt;<br />
        &lt;!-- create form --&gt;<br />
        &lt;form id=&quot;f1&quot; action=&quot;&quot; method=&quot;post&quot;&gt;<br />
        &lt;!-- create form validator object --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;<br />
        var frmvalidator = new Validator(&quot;f1&quot;);<br />
        frmvalidator.EnableOnPageErrorDisplay();<br />
        frmvalidator.EnableMsgsTogether();<br />
        &lt;/script&gt;<br />
        &lt;!-- create input field --&gt;<br />
        &lt;label&gt;Customer Name: &lt;/label&gt;<br />
        &lt;input type=&quot;text&quot; id=&quot;cname&quot; name=&quot;cname&quot; /&gt;<br />
        &lt;!-- create span to display validation message for respective input --&gt;<br />
        &lt;span id='f1_cname_errorloc' class=&quot;error_strings&quot;&gt;&lt;/span&gt;<br />
        &lt;!-- set validation rules for respective input --&gt;<br />
        &lt;script&gt;frmvalidator.addValidation(&quot;cname&quot;,&quot;dontselect&quot;,&quot;Enter Customer Name&quot;);&lt;/script&gt;<br />
        &lt;input type=&quot;submit&quot; /&gt;<br />
        &lt;/form&gt;<br /></td>
      <td align="center" style="border-top:hidden;"><button  onclick="CopyToClipboard('dontselect_code')">Copy Code</button></td>
    </tr>
  </table>
  <!-- #maxlen -->
  <div id="maxlen_title" class="title" onclick="expandDiv('maxlen')">
    <div class="name"><span id="maxlen_expandSpan" class="expand">+</span> Maxlen</div>
    <div class="desc">maxlen &rarr; set maximum length for input</div>
  </div>
  <table id="maxlen_tbl" style="display:none;">
    <tr>
      <td>Use</td>
      <td>To Restrict Given Field passed as EMPTY</td>
      <td width="1%" rowspan="4"><button  onclick="CopyToClipboard('maxlen_syn')">Copy Syntax</button></td>
    </tr>
    <tr>
      <td>Syntax</td>
      <td id="maxlen_syn">frmvalidator.addValidation("Field Name","maxlen","Message to display");</td>
    </tr>
    <tr>
      <td >Example</td>
      <td>frmvalidator.addValidation("cname","maxlen","Customer Name should not be EMPTY");</td>
    </tr>
    <tr>
      <td>Try</td>
      <td><!-- create form -->
        <form id="f1" action="" method="post">
          <!-- create form validator object -->
          <script language="JavaScript" type="text/javascript" xml:space="preserve">
            var frmvalidator = new Validator("f1");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            </script>
          <!-- create input field -->
          <input type="text" id="cname" name="cname" placeholder = "Customer Name"/>
          <!-- create span to display validation message for respective input -->
          <span id='f1_cname_errorloc' class="error_strings"></span>
          <!-- set validation rules for respective input -->
          <script>frmvalidator.addValidation("cname","maxlen","Enter Customer Name");</script>
          <input type="submit" />
        </form></td>
    </tr>
    <tr>
      <td>Code</td>
      <td id="maxlen_code">&lt;!-- include validator.js file --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; src=&quot;gen_validatorv4.js&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;&lt;/script&gt;<br />
        &lt;!-- create form --&gt;<br />
        &lt;form id=&quot;f1&quot; action=&quot;&quot; method=&quot;post&quot;&gt;<br />
        &lt;!-- create form validator object --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;<br />
        var frmvalidator = new Validator(&quot;f1&quot;);<br />
        frmvalidator.EnableOnPageErrorDisplay();<br />
        frmvalidator.EnableMsgsTogether();<br />
        &lt;/script&gt;<br />
        &lt;!-- create input field --&gt;<br />
        &lt;label&gt;Customer Name: &lt;/label&gt;<br />
        &lt;input type=&quot;text&quot; id=&quot;cname&quot; name=&quot;cname&quot; /&gt;<br />
        &lt;!-- create span to display validation message for respective input --&gt;<br />
        &lt;span id='f1_cname_errorloc' class=&quot;error_strings&quot;&gt;&lt;/span&gt;<br />
        &lt;!-- set validation rules for respective input --&gt;<br />
        &lt;script&gt;frmvalidator.addValidation(&quot;cname&quot;,&quot;maxlen&quot;,&quot;Enter Customer Name&quot;);&lt;/script&gt;<br />
        &lt;input type=&quot;submit&quot; /&gt;<br />
        &lt;/form&gt;<br /></td>
      <td align="center" style="border-top:hidden;"><button  onclick="CopyToClipboard('maxlen_code')">Copy Code</button></td>
    </tr>
  </table>
  <!-- #minlen -->
  <div id="minlen_title" class="title" onclick="expandDiv('minlen')">
    <div class="name"><span id="minlen_expandSpan" class="expand">+</span> Maxlen</div>
    <div class="desc">minlen &rarr; set maximum length for input</div>
  </div>
  <table id="minlen_tbl" style="display:none;">
    <tr>
      <td>Use</td>
      <td>To Restrict Given Field passed as EMPTY</td>
      <td width="1%" rowspan="4"><button  onclick="CopyToClipboard('minlen_syn')">Copy Syntax</button></td>
    </tr>
    <tr>
      <td>Syntax</td>
      <td id="minlen_syn">frmvalidator.addValidation("Field Name","minlen","Message to display");</td>
    </tr>
    <tr>
      <td >Example</td>
      <td>frmvalidator.addValidation("cname","minlen","Customer Name should not be EMPTY");</td>
    </tr>
    <tr>
      <td>Try</td>
      <td><!-- create form -->
        <form id="f1" action="" method="post">
          <!-- create form validator object -->
          <script language="JavaScript" type="text/javascript" xml:space="preserve">
            var frmvalidator = new Validator("f1");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            </script>
          <!-- create input field -->
          <input type="text" id="cname" name="cname" placeholder = "Customer Name"/>
          <!-- create span to display validation message for respective input -->
          <span id='f1_cname_errorloc' class="error_strings"></span>
          <!-- set validation rules for respective input -->
          <script>frmvalidator.addValidation("cname","minlen","Enter Customer Name");</script>
          <input type="submit" />
        </form></td>
    </tr>
    <tr>
      <td>Code</td>
      <td id="minlen_code">&lt;!-- include validator.js file --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; src=&quot;gen_validatorv4.js&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;&lt;/script&gt;<br />
        &lt;!-- create form --&gt;<br />
        &lt;form id=&quot;f1&quot; action=&quot;&quot; method=&quot;post&quot;&gt;<br />
        &lt;!-- create form validator object --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;<br />
        var frmvalidator = new Validator(&quot;f1&quot;);<br />
        frmvalidator.EnableOnPageErrorDisplay();<br />
        frmvalidator.EnableMsgsTogether();<br />
        &lt;/script&gt;<br />
        &lt;!-- create input field --&gt;<br />
        &lt;label&gt;Customer Name: &lt;/label&gt;<br />
        &lt;input type=&quot;text&quot; id=&quot;cname&quot; name=&quot;cname&quot; /&gt;<br />
        &lt;!-- create span to display validation message for respective input --&gt;<br />
        &lt;span id='f1_cname_errorloc' class=&quot;error_strings&quot;&gt;&lt;/span&gt;<br />
        &lt;!-- set validation rules for respective input --&gt;<br />
        &lt;script&gt;frmvalidator.addValidation(&quot;cname&quot;,&quot;minlen&quot;,&quot;Enter Customer Name&quot;);&lt;/script&gt;<br />
        &lt;input type=&quot;submit&quot; /&gt;<br />
        &lt;/form&gt;<br /></td>
      <td align="center" style="border-top:hidden;"><button  onclick="CopyToClipboard('minlen_code')">Copy Code</button></td>
    </tr>
  </table>
  <!-- #selmin -->
  <div id="selmin_title" class="title" onclick="expandDiv('selmin')">
    <div class="name"><span id="selmin_expandSpan" class="expand">+</span> Checkbox select min n</div>
    <div class="desc">selmin &rarr; Select at least n checkbox</div>
  </div>
  <table id="selmin_tbl" style="display:none;">
    <tr>
      <td>Use</td>
      <td>To Restrict Given Field passed as EMPTY</td>
      <td width="1%" rowspan="4"><button  onclick="CopyToClipboard('selmin_syn')">Copy Syntax</button></td>
    </tr>
    <tr>
      <td>Syntax</td>
      <td id="selmin_syn">frmvalidator.addValidation("Field Name","selmin","Message to display");</td>
    </tr>
    <tr>
      <td >Example</td>
      <td>frmvalidator.addValidation("cname","selmin","Customer Name should not be EMPTY");</td>
    </tr>
    <tr>
      <td>Try</td>
      <td><!-- create form -->
        <form id="f1" action="" method="post">
          <!-- create form validator object -->
          <script language="JavaScript" type="text/javascript" xml:space="preserve">
            var frmvalidator = new Validator("f1");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            </script>
          <!-- create input field -->
          <input type="text" id="cname" name="cname" placeholder = "Customer Name"/>
          <!-- create span to display validation message for respective input -->
          <span id='f1_cname_errorloc' class="error_strings"></span>
          <!-- set validation rules for respective input -->
          <script>frmvalidator.addValidation("cname","selmin","Enter Customer Name");</script>
          <input type="submit" />
        </form></td>
    </tr>
    <tr>
      <td>Code</td>
      <td id="selmin_code">&lt;!-- include validator.js file --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; src=&quot;gen_validatorv4.js&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;&lt;/script&gt;<br />
        &lt;!-- create form --&gt;<br />
        &lt;form id=&quot;f1&quot; action=&quot;&quot; method=&quot;post&quot;&gt;<br />
        &lt;!-- create form validator object --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;<br />
        var frmvalidator = new Validator(&quot;f1&quot;);<br />
        frmvalidator.EnableOnPageErrorDisplay();<br />
        frmvalidator.EnableMsgsTogether();<br />
        &lt;/script&gt;<br />
        &lt;!-- create input field --&gt;<br />
        &lt;label&gt;Customer Name: &lt;/label&gt;<br />
        &lt;input type=&quot;text&quot; id=&quot;cname&quot; name=&quot;cname&quot; /&gt;<br />
        &lt;!-- create span to display validation message for respective input --&gt;<br />
        &lt;span id='f1_cname_errorloc' class=&quot;error_strings&quot;&gt;&lt;/span&gt;<br />
        &lt;!-- set validation rules for respective input --&gt;<br />
        &lt;script&gt;frmvalidator.addValidation(&quot;cname&quot;,&quot;selmin&quot;,&quot;Enter Customer Name&quot;);&lt;/script&gt;<br />
        &lt;input type=&quot;submit&quot; /&gt;<br />
        &lt;/form&gt;<br /></td>
      <td align="center" style="border-top:hidden;"><button  onclick="CopyToClipboard('selmin_code')">Copy Code</button></td>
    </tr>
  </table>
  <!-- #selmax -->
  <div id="selmax_title" class="title" onclick="expandDiv('selmax')">
    <div class="name"><span id="selmax_expandSpan" class="expand">+</span> Checkbox select max n</div>
    <div class="desc">selmax &rarr; Maximum  n checkbox allowed</div>
  </div>
  <table id="selmax_tbl" style="display:none;">
    <tr>
      <td>Use</td>
      <td>To Restrict Given Field passed as EMPTY</td>
      <td width="1%" rowspan="4"><button  onclick="CopyToClipboard('selmax_syn')">Copy Syntax</button></td>
    </tr>
    <tr>
      <td>Syntax</td>
      <td id="selmax_syn">frmvalidator.addValidation("Field Name","selmax","Message to display");</td>
    </tr>
    <tr>
      <td >Example</td>
      <td>frmvalidator.addValidation("cname","selmax","Customer Name should not be EMPTY");</td>
    </tr>
    <tr>
      <td>Try</td>
      <td><!-- create form -->
        <form id="f1" action="" method="post">
          <!-- create form validator object -->
          <script language="JavaScript" type="text/javascript" xml:space="preserve">
            var frmvalidator = new Validator("f1");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            </script>
          <!-- create input field -->
          <input type="text" id="cname" name="cname" placeholder = "Customer Name"/>
          <!-- create span to display validation message for respective input -->
          <span id='f1_cname_errorloc' class="error_strings"></span>
          <!-- set validation rules for respective input -->
          <script>frmvalidator.addValidation("cname","selmax","Enter Customer Name");</script>
          <input type="submit" />
        </form></td>
    </tr>
    <tr>
      <td>Code</td>
      <td id="selmax_code">&lt;!-- include validator.js file --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; src=&quot;gen_validatorv4.js&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;&lt;/script&gt;<br />
        &lt;!-- create form --&gt;<br />
        &lt;form id=&quot;f1&quot; action=&quot;&quot; method=&quot;post&quot;&gt;<br />
        &lt;!-- create form validator object --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;<br />
        var frmvalidator = new Validator(&quot;f1&quot;);<br />
        frmvalidator.EnableOnPageErrorDisplay();<br />
        frmvalidator.EnableMsgsTogether();<br />
        &lt;/script&gt;<br />
        &lt;!-- create input field --&gt;<br />
        &lt;label&gt;Customer Name: &lt;/label&gt;<br />
        &lt;input type=&quot;text&quot; id=&quot;cname&quot; name=&quot;cname&quot; /&gt;<br />
        &lt;!-- create span to display validation message for respective input --&gt;<br />
        &lt;span id='f1_cname_errorloc' class=&quot;error_strings&quot;&gt;&lt;/span&gt;<br />
        &lt;!-- set validation rules for respective input --&gt;<br />
        &lt;script&gt;frmvalidator.addValidation(&quot;cname&quot;,&quot;selmax&quot;,&quot;Enter Customer Name&quot;);&lt;/script&gt;<br />
        &lt;input type=&quot;submit&quot; /&gt;<br />
        &lt;/form&gt;<br /></td>
      <td align="center" style="border-top:hidden;"><button  onclick="CopyToClipboard('selmax_code')">Copy Code</button></td>
    </tr>
  </table>
  <!-- #req_file -->
  <div id="req_file_title" class="title" onclick="expandDiv('req_file')">
    <div class="name"><span id="req_file_expandSpan" class="expand">+</span> File Requierd</div>
    <div class="desc">req_file &rarr; mandetory file input</div>
  </div>
  <table id="req_file_tbl" style="display:none;">
    <tr>
      <td>Use</td>
      <td>To Restrict Given Field passed as EMPTY</td>
      <td width="1%" rowspan="4"><button  onclick="CopyToClipboard('req_file_syn')">Copy Syntax</button></td>
    </tr>
    <tr>
      <td>Syntax</td>
      <td id="req_file_syn">frmvalidator.addValidation("Field Name","req_file","Message to display");</td>
    </tr>
    <tr>
      <td >Example</td>
      <td>frmvalidator.addValidation("cname","req_file","Customer Name should not be EMPTY");</td>
    </tr>
    <tr>
      <td>Try</td>
      <td><!-- create form -->
        <form id="f1" action="" method="post">
          <!-- create form validator object -->
          <script language="JavaScript" type="text/javascript" xml:space="preserve">
            var frmvalidator = new Validator("f1");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            </script>
          <!-- create input field -->
          <input type="text" id="cname" name="cname" placeholder = "Customer Name"/>
          <!-- create span to display validation message for respective input -->
          <span id='f1_cname_errorloc' class="error_strings"></span>
          <!-- set validation rules for respective input -->
          <script>frmvalidator.addValidation("cname","req_file","Enter Customer Name");</script>
          <input type="submit" />
        </form></td>
    </tr>
    <tr>
      <td>Code</td>
      <td id="req_file_code">&lt;!-- include validator.js file --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; src=&quot;gen_validatorv4.js&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;&lt;/script&gt;<br />
        &lt;!-- create form --&gt;<br />
        &lt;form id=&quot;f1&quot; action=&quot;&quot; method=&quot;post&quot;&gt;<br />
        &lt;!-- create form validator object --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;<br />
        var frmvalidator = new Validator(&quot;f1&quot;);<br />
        frmvalidator.EnableOnPageErrorDisplay();<br />
        frmvalidator.EnableMsgsTogether();<br />
        &lt;/script&gt;<br />
        &lt;!-- create input field --&gt;<br />
        &lt;label&gt;Customer Name: &lt;/label&gt;<br />
        &lt;input type=&quot;text&quot; id=&quot;cname&quot; name=&quot;cname&quot; /&gt;<br />
        &lt;!-- create span to display validation message for respective input --&gt;<br />
        &lt;span id='f1_cname_errorloc' class=&quot;error_strings&quot;&gt;&lt;/span&gt;<br />
        &lt;!-- set validation rules for respective input --&gt;<br />
        &lt;script&gt;frmvalidator.addValidation(&quot;cname&quot;,&quot;req_file&quot;,&quot;Enter Customer Name&quot;);&lt;/script&gt;<br />
        &lt;input type=&quot;submit&quot; /&gt;<br />
        &lt;/form&gt;<br /></td>
      <td align="center" style="border-top:hidden;"><button  onclick="CopyToClipboard('req_file_code')">Copy Code</button></td>
    </tr>
  </table>
  <!-- #file_extn -->
  <div id="file_extn_title" class="title" onclick="expandDiv('file_extn')">
    <div class="name"><span id="file_extn_expandSpan" class="expand">+</span> File extension restrict</div>
    <div class="desc">file_extn &rarr; allow only files of given extension</div>
  </div>
  <table id="file_extn_tbl" style="display:none;">
    <tr>
      <td>Use</td>
      <td>To Restrict Given Field passed as EMPTY</td>
      <td width="1%" rowspan="4"><button  onclick="CopyToClipboard('file_extn_syn')">Copy Syntax</button></td>
    </tr>
    <tr>
      <td>Syntax</td>
      <td id="file_extn_syn">frmvalidator.addValidation("Field Name","file_extn","Message to display");</td>
    </tr>
    <tr>
      <td >Example</td>
      <td>frmvalidator.addValidation("cname","file_extn","Customer Name should not be EMPTY");</td>
    </tr>
    <tr>
      <td>Try</td>
      <td><!-- create form -->
        <form id="f1" action="" method="post">
          <!-- create form validator object -->
          <script language="JavaScript" type="text/javascript" xml:space="preserve">
            var frmvalidator = new Validator("f1");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            </script>
          <!-- create input field -->
          <input type="text" id="cname" name="cname" placeholder = "Customer Name"/>
          <!-- create span to display validation message for respective input -->
          <span id='f1_cname_errorloc' class="error_strings"></span>
          <!-- set validation rules for respective input -->
          <script>frmvalidator.addValidation("cname","file_extn","Enter Customer Name");</script>
          <input type="submit" />
        </form></td>
    </tr>
    <tr>
      <td>Code</td>
      <td id="file_extn_code">&lt;!-- include validator.js file --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; src=&quot;gen_validatorv4.js&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;&lt;/script&gt;<br />
        &lt;!-- create form --&gt;<br />
        &lt;form id=&quot;f1&quot; action=&quot;&quot; method=&quot;post&quot;&gt;<br />
        &lt;!-- create form validator object --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;<br />
        var frmvalidator = new Validator(&quot;f1&quot;);<br />
        frmvalidator.EnableOnPageErrorDisplay();<br />
        frmvalidator.EnableMsgsTogether();<br />
        &lt;/script&gt;<br />
        &lt;!-- create input field --&gt;<br />
        &lt;label&gt;Customer Name: &lt;/label&gt;<br />
        &lt;input type=&quot;text&quot; id=&quot;cname&quot; name=&quot;cname&quot; /&gt;<br />
        &lt;!-- create span to display validation message for respective input --&gt;<br />
        &lt;span id='f1_cname_errorloc' class=&quot;error_strings&quot;&gt;&lt;/span&gt;<br />
        &lt;!-- set validation rules for respective input --&gt;<br />
        &lt;script&gt;frmvalidator.addValidation(&quot;cname&quot;,&quot;file_extn&quot;,&quot;Enter Customer Name&quot;);&lt;/script&gt;<br />
        &lt;input type=&quot;submit&quot; /&gt;<br />
        &lt;/form&gt;<br /></td>
      <td align="center" style="border-top:hidden;"><button  onclick="CopyToClipboard('file_extn_code')">Copy Code</button></td>
    </tr>
  </table>
  <!-- #eqelmnt -->
  <div id="eqelmnt_title" class="title" onclick="expandDiv('eqelmnt')">
    <div class="name"><span id="eqelmnt_expandSpan" class="expand">+</span> Equals to Element</div>
    <div class="desc">eqelmnt &rarr; check given two input value should be same</div>
  </div>
  <table id="eqelmnt_tbl" style="display:none;">
    <tr>
      <td>Use</td>
      <td>To Restrict Given Field passed as EMPTY</td>
      <td width="1%" rowspan="4"><button  onclick="CopyToClipboard('eqelmnt_syn')">Copy Syntax</button></td>
    </tr>
    <tr>
      <td>Syntax</td>
      <td id="eqelmnt_syn">frmvalidator.addValidation("Field Name","eqelmnt","Message to display");</td>
    </tr>
    <tr>
      <td >Example</td>
      <td>frmvalidator.addValidation("cname","eqelmnt","Customer Name should not be EMPTY");</td>
    </tr>
    <tr>
      <td>Try</td>
      <td><!-- create form -->
        <form id="f1" action="" method="post">
          <!-- create form validator object -->
          <script language="JavaScript" type="text/javascript" xml:space="preserve">
            var frmvalidator = new Validator("f1");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            </script>
          <!-- create input field -->
          <input type="text" id="cname" name="cname" placeholder = "Customer Name"/>
          <!-- create span to display validation message for respective input -->
          <span id='f1_cname_errorloc' class="error_strings"></span>
          <!-- set validation rules for respective input -->
          <script>frmvalidator.addValidation("cname","eqelmnt","Enter Customer Name");</script>
          <input type="submit" />
        </form></td>
    </tr>
    <tr>
      <td>Code</td>
      <td id="eqelmnt_code">&lt;!-- include validator.js file --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; src=&quot;gen_validatorv4.js&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;&lt;/script&gt;<br />
        &lt;!-- create form --&gt;<br />
        &lt;form id=&quot;f1&quot; action=&quot;&quot; method=&quot;post&quot;&gt;<br />
        &lt;!-- create form validator object --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;<br />
        var frmvalidator = new Validator(&quot;f1&quot;);<br />
        frmvalidator.EnableOnPageErrorDisplay();<br />
        frmvalidator.EnableMsgsTogether();<br />
        &lt;/script&gt;<br />
        &lt;!-- create input field --&gt;<br />
        &lt;label&gt;Customer Name: &lt;/label&gt;<br />
        &lt;input type=&quot;text&quot; id=&quot;cname&quot; name=&quot;cname&quot; /&gt;<br />
        &lt;!-- create span to display validation message for respective input --&gt;<br />
        &lt;span id='f1_cname_errorloc' class=&quot;error_strings&quot;&gt;&lt;/span&gt;<br />
        &lt;!-- set validation rules for respective input --&gt;<br />
        &lt;script&gt;frmvalidator.addValidation(&quot;cname&quot;,&quot;eqelmnt&quot;,&quot;Enter Customer Name&quot;);&lt;/script&gt;<br />
        &lt;input type=&quot;submit&quot; /&gt;<br />
        &lt;/form&gt;<br /></td>
      <td align="center" style="border-top:hidden;"><button  onclick="CopyToClipboard('eqelmnt_code')">Copy Code</button></td>
    </tr>
  </table>
  <!-- #neelmnt -->
  <div id="neelmnt_title" class="title" onclick="expandDiv('neelmnt')">
    <div class="name"><span id="neelmnt_expandSpan" class="expand">+</span> Not Equals to Element</div>
    <div class="desc">neelmnt &rarr; check given two input value should not be same</div>
  </div>
  <table id="neelmnt_tbl" style="display:none;">
    <tr>
      <td>Use</td>
      <td>To Restrict Given Field passed as EMPTY</td>
      <td width="1%" rowspan="4"><button  onclick="CopyToClipboard('neelmnt_syn')">Copy Syntax</button></td>
    </tr>
    <tr>
      <td>Syntax</td>
      <td id="neelmnt_syn">frmvalidator.addValidation("Field Name","neelmnt","Message to display");</td>
    </tr>
    <tr>
      <td >Example</td>
      <td>frmvalidator.addValidation("cname","neelmnt","Customer Name should not be EMPTY");</td>
    </tr>
    <tr>
      <td>Try</td>
      <td><!-- create form -->
        <form id="f1" action="" method="post">
          <!-- create form validator object -->
          <script language="JavaScript" type="text/javascript" xml:space="preserve">
            var frmvalidator = new Validator("f1");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            </script>
          <!-- create input field -->
          <input type="text" id="cname" name="cname" placeholder = "Customer Name"/>
          <!-- create span to display validation message for respective input -->
          <span id='f1_cname_errorloc' class="error_strings"></span>
          <!-- set validation rules for respective input -->
          <script>frmvalidator.addValidation("cname","neelmnt","Enter Customer Name");</script>
          <input type="submit" />
        </form></td>
    </tr>
    <tr>
      <td>Code</td>
      <td id="neelmnt_code">&lt;!-- include validator.js file --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; src=&quot;gen_validatorv4.js&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;&lt;/script&gt;<br />
        &lt;!-- create form --&gt;<br />
        &lt;form id=&quot;f1&quot; action=&quot;&quot; method=&quot;post&quot;&gt;<br />
        &lt;!-- create form validator object --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;<br />
        var frmvalidator = new Validator(&quot;f1&quot;);<br />
        frmvalidator.EnableOnPageErrorDisplay();<br />
        frmvalidator.EnableMsgsTogether();<br />
        &lt;/script&gt;<br />
        &lt;!-- create input field --&gt;<br />
        &lt;label&gt;Customer Name: &lt;/label&gt;<br />
        &lt;input type=&quot;text&quot; id=&quot;cname&quot; name=&quot;cname&quot; /&gt;<br />
        &lt;!-- create span to display validation message for respective input --&gt;<br />
        &lt;span id='f1_cname_errorloc' class=&quot;error_strings&quot;&gt;&lt;/span&gt;<br />
        &lt;!-- set validation rules for respective input --&gt;<br />
        &lt;script&gt;frmvalidator.addValidation(&quot;cname&quot;,&quot;neelmnt&quot;,&quot;Enter Customer Name&quot;);&lt;/script&gt;<br />
        &lt;input type=&quot;submit&quot; /&gt;<br />
        &lt;/form&gt;<br /></td>
      <td align="center" style="border-top:hidden;"><button  onclick="CopyToClipboard('neelmnt_code')">Copy Code</button></td>
    </tr>
  </table>
  <!-- #ltelmnt -->
  <div id="ltelmnt_title" class="title" onclick="expandDiv('ltelmnt')">
    <div class="name"><span id="ltelmnt_expandSpan" class="expand">+</span> Less than Element</div>
    <div class="desc">ltelmnt &rarr; input should be less than given input element</div>
  </div>
  <table id="ltelmnt_tbl" style="display:none;">
    <tr>
      <td>Use</td>
      <td>To Restrict Given Field passed as EMPTY</td>
      <td width="1%" rowspan="4"><button  onclick="CopyToClipboard('ltelmnt_syn')">Copy Syntax</button></td>
    </tr>
    <tr>
      <td>Syntax</td>
      <td id="ltelmnt_syn">frmvalidator.addValidation("Field Name","ltelmnt","Message to display");</td>
    </tr>
    <tr>
      <td >Example</td>
      <td>frmvalidator.addValidation("cname","ltelmnt","Customer Name should not be EMPTY");</td>
    </tr>
    <tr>
      <td>Try</td>
      <td><!-- create form -->
        <form id="f1" action="" method="post">
          <!-- create form validator object -->
          <script language="JavaScript" type="text/javascript" xml:space="preserve">
            var frmvalidator = new Validator("f1");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            </script>
          <!-- create input field -->
          <input type="text" id="cname" name="cname" placeholder = "Customer Name"/>
          <!-- create span to display validation message for respective input -->
          <span id='f1_cname_errorloc' class="error_strings"></span>
          <!-- set validation rules for respective input -->
          <script>frmvalidator.addValidation("cname","ltelmnt","Enter Customer Name");</script>
          <input type="submit" />
        </form></td>
    </tr>
    <tr>
      <td>Code</td>
      <td id="ltelmnt_code">&lt;!-- include validator.js file --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; src=&quot;gen_validatorv4.js&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;&lt;/script&gt;<br />
        &lt;!-- create form --&gt;<br />
        &lt;form id=&quot;f1&quot; action=&quot;&quot; method=&quot;post&quot;&gt;<br />
        &lt;!-- create form validator object --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;<br />
        var frmvalidator = new Validator(&quot;f1&quot;);<br />
        frmvalidator.EnableOnPageErrorDisplay();<br />
        frmvalidator.EnableMsgsTogether();<br />
        &lt;/script&gt;<br />
        &lt;!-- create input field --&gt;<br />
        &lt;label&gt;Customer Name: &lt;/label&gt;<br />
        &lt;input type=&quot;text&quot; id=&quot;cname&quot; name=&quot;cname&quot; /&gt;<br />
        &lt;!-- create span to display validation message for respective input --&gt;<br />
        &lt;span id='f1_cname_errorloc' class=&quot;error_strings&quot;&gt;&lt;/span&gt;<br />
        &lt;!-- set validation rules for respective input --&gt;<br />
        &lt;script&gt;frmvalidator.addValidation(&quot;cname&quot;,&quot;ltelmnt&quot;,&quot;Enter Customer Name&quot;);&lt;/script&gt;<br />
        &lt;input type=&quot;submit&quot; /&gt;<br />
        &lt;/form&gt;<br /></td>
      <td align="center" style="border-top:hidden;"><button  onclick="CopyToClipboard('ltelmnt_code')">Copy Code</button></td>
    </tr>
  </table>
  <!-- #gtelmnt -->
  <div id="gtelmnt_title" class="title" onclick="expandDiv('gtelmnt')">
    <div class="name"><span id="gtelmnt_expandSpan" class="expand">+</span> Greater than Element</div>
    <div class="desc">gtelmnt &rarr; input should be greater than given input element</div>
  </div>
  <table id="gtelmnt_tbl" style="display:none;">
    <tr>
      <td>Use</td>
      <td>To Restrict Given Field passed as EMPTY</td>
      <td width="1%" rowspan="4"><button  onclick="CopyToClipboard('gtelmnt_syn')">Copy Syntax</button></td>
    </tr>
    <tr>
      <td>Syntax</td>
      <td id="gtelmnt_syn">frmvalidator.addValidation("Field Name","gtelmnt","Message to display");</td>
    </tr>
    <tr>
      <td >Example</td>
      <td>frmvalidator.addValidation("cname","gtelmnt","Customer Name should not be EMPTY");</td>
    </tr>
    <tr>
      <td>Try</td>
      <td><!-- create form -->
        <form id="f1" action="" method="post">
          <!-- create form validator object -->
          <script language="JavaScript" type="text/javascript" xml:space="preserve">
            var frmvalidator = new Validator("f1");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            </script>
          <!-- create input field -->
          <input type="text" id="cname" name="cname" placeholder = "Customer Name"/>
          <!-- create span to display validation message for respective input -->
          <span id='f1_cname_errorloc' class="error_strings"></span>
          <!-- set validation rules for respective input -->
          <script>frmvalidator.addValidation("cname","gtelmnt","Enter Customer Name");</script>
          <input type="submit" />
        </form></td>
    </tr>
    <tr>
      <td>Code</td>
      <td id="gtelmnt_code">&lt;!-- include validator.js file --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; src=&quot;gen_validatorv4.js&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;&lt;/script&gt;<br />
        &lt;!-- create form --&gt;<br />
        &lt;form id=&quot;f1&quot; action=&quot;&quot; method=&quot;post&quot;&gt;<br />
        &lt;!-- create form validator object --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;<br />
        var frmvalidator = new Validator(&quot;f1&quot;);<br />
        frmvalidator.EnableOnPageErrorDisplay();<br />
        frmvalidator.EnableMsgsTogether();<br />
        &lt;/script&gt;<br />
        &lt;!-- create input field --&gt;<br />
        &lt;label&gt;Customer Name: &lt;/label&gt;<br />
        &lt;input type=&quot;text&quot; id=&quot;cname&quot; name=&quot;cname&quot; /&gt;<br />
        &lt;!-- create span to display validation message for respective input --&gt;<br />
        &lt;span id='f1_cname_errorloc' class=&quot;error_strings&quot;&gt;&lt;/span&gt;<br />
        &lt;!-- set validation rules for respective input --&gt;<br />
        &lt;script&gt;frmvalidator.addValidation(&quot;cname&quot;,&quot;gtelmnt&quot;,&quot;Enter Customer Name&quot;);&lt;/script&gt;<br />
        &lt;input type=&quot;submit&quot; /&gt;<br />
        &lt;/form&gt;<br /></td>
      <td align="center" style="border-top:hidden;"><button  onclick="CopyToClipboard('gtelmnt_code')">Copy Code</button></td>
    </tr>
  </table>
  <!-- #VWZ_IsChecked -->
  <div id="VWZ_IsChecked_title" class="title" onclick="expandDiv('VWZ_IsChecked')">
    <div class="name"><span id="VWZ_IsChecked_expandSpan" class="expand">+</span> Conditional Validation</div>
    <div class="desc">VWZ_IsChecked &rarr; validation depends on some condition</div>
  </div>
  <table id="VWZ_IsChecked_tbl" style="display:none;">
    <tr>
      <td>Use</td>
      <td>To Restrict Given Field passed as EMPTY</td>
      <td width="1%" rowspan="4"><button  onclick="CopyToClipboard('VWZ_IsChecked_syn')">Copy Syntax</button></td>
    </tr>
    <tr>
      <td>Syntax</td>
      <td id="VWZ_IsChecked_syn">frmvalidator.addValidation("Field Name","VWZ_IsChecked","Message to display");</td>
    </tr>
    <tr>
      <td >Example</td>
      <td>frmvalidator.addValidation("cname","VWZ_IsChecked","Customer Name should not be EMPTY");</td>
    </tr>
    <tr>
      <td>Try</td>
      <td><!-- create form -->
        <form id="f1" action="" method="post">
          <!-- create form validator object -->
          <script language="JavaScript" type="text/javascript" xml:space="preserve">
            var frmvalidator = new Validator("f1");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();
            </script>
          <!-- create input field -->
          <input type="text" id="cname" name="cname" placeholder = "Customer Name"/>
          <!-- create span to display validation message for respective input -->
          <span id='f1_cname_errorloc' class="error_strings"></span>
          <!-- set validation rules for respective input -->
          <script>frmvalidator.addValidation("cname","VWZ_IsChecked","Enter Customer Name");</script>
          <input type="submit" />
        </form></td>
    </tr>
    <tr>
      <td>Code</td>
      <td id="VWZ_IsChecked_code">&lt;!-- include validator.js file --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; src=&quot;gen_validatorv4.js&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;&lt;/script&gt;<br />
        &lt;!-- create form --&gt;<br />
        &lt;form id=&quot;f1&quot; action=&quot;&quot; method=&quot;post&quot;&gt;<br />
        &lt;!-- create form validator object --&gt;<br />
        &lt;script language=&quot;JavaScript&quot; type=&quot;text/javascript&quot; xml:space=&quot;preserve&quot;&gt;<br />
        var frmvalidator = new Validator(&quot;f1&quot;);<br />
        frmvalidator.EnableOnPageErrorDisplay();<br />
        frmvalidator.EnableMsgsTogether();<br />
        &lt;/script&gt;<br />
        &lt;!-- create input field --&gt;<br />
        &lt;label&gt;Customer Name: &lt;/label&gt;<br />
        &lt;input type=&quot;text&quot; id=&quot;cname&quot; name=&quot;cname&quot; /&gt;<br />
        &lt;!-- create span to display validation message for respective input --&gt;<br />
        &lt;span id='f1_cname_errorloc' class=&quot;error_strings&quot;&gt;&lt;/span&gt;<br />
        &lt;!-- set validation rules for respective input --&gt;<br />
        &lt;script&gt;frmvalidator.addValidation(&quot;cname&quot;,&quot;VWZ_IsChecked&quot;,&quot;Enter Customer Name&quot;);&lt;/script&gt;<br />
        &lt;input type=&quot;submit&quot; /&gt;<br />
        &lt;/form&gt;<br /></td>
      <td align="center" style="border-top:hidden;"><button  onclick="CopyToClipboard('VWZ_IsChecked_code')">Copy Code</button></td>
    </tr>
  </table>
  <!-- end of rules -->
  <hr />
</div>

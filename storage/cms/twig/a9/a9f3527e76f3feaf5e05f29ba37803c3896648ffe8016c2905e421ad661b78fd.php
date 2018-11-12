<?php

/* C:\wamp64\www\demo/plugins/quanganhdo/contact/components/contactform/default.htm */
class __TwigTemplate_20acce57211f05d29c61586a7da53d7ce940385165ae0bffbe92a992c7e2a27d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form  data-request=\"onSend\" class=\"contact-form-dark form-errors-light\">    

        <div class=\"form-row\">
               <div class=\"form-group col-md-6\">
                   <input type=\"text\" value=\"\" data-msg-required=\"Chưa nhập họ tên\" maxlength=\"100\" class=\"form-control\" name=\"name\"
                    id=\"name\" placeholder=\"Họ tên\"  required>
               </div>
               <div class=\"form-group col-md-6\">
                   <input type=\"email\" value=\"\" data-msg-required=\"Chưa nhập địa chỉ E-mail\" data-msg-email=\"Sai cấu trúc địa chỉ E-mail (mail@example.com)\"
                    maxlength=\"100\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"E-mail\"  required>
               </div>
           </div>
           <div class=\"form-row\">
               <div class=\"form-group col\">
                   <input type=\"text\" value=\"\" data-msg-required=\"Chưa nhập tiêu đề\" maxlength=\"100\" class=\"form-control\" name=\"subject\"
                    id=\"subject\" placeholder=\"Tiêu đề\"  required>
               </div>
           </div>
           <div class=\"form-row\">
               <div class=\"form-group col\">
                   <textarea maxlength=\"5000\" data-msg-required=\"Chưa nhập nội dung tin nhắn\" rows=\"5\" class=\"form-control\" name=\"content\"
                    id=\"message\" placeholder=\"Nội dung\"  required></textarea>
               </div>
           </div>
           <div class=\"form-row mt-2\">
               <div class=\"col\">
                   <button type=\"submit\" class=\"btn btn-primary btn-rounded btn-4 font-weight-semibold text-0\">
                       GỬI
                    </button>
               </div>
           </div>
           
       </form> 

  ";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\demo/plugins/quanganhdo/contact/components/contactform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form  data-request=\"onSend\" class=\"contact-form-dark form-errors-light\">    

        <div class=\"form-row\">
               <div class=\"form-group col-md-6\">
                   <input type=\"text\" value=\"\" data-msg-required=\"Chưa nhập họ tên\" maxlength=\"100\" class=\"form-control\" name=\"name\"
                    id=\"name\" placeholder=\"Họ tên\"  required>
               </div>
               <div class=\"form-group col-md-6\">
                   <input type=\"email\" value=\"\" data-msg-required=\"Chưa nhập địa chỉ E-mail\" data-msg-email=\"Sai cấu trúc địa chỉ E-mail (mail@example.com)\"
                    maxlength=\"100\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"E-mail\"  required>
               </div>
           </div>
           <div class=\"form-row\">
               <div class=\"form-group col\">
                   <input type=\"text\" value=\"\" data-msg-required=\"Chưa nhập tiêu đề\" maxlength=\"100\" class=\"form-control\" name=\"subject\"
                    id=\"subject\" placeholder=\"Tiêu đề\"  required>
               </div>
           </div>
           <div class=\"form-row\">
               <div class=\"form-group col\">
                   <textarea maxlength=\"5000\" data-msg-required=\"Chưa nhập nội dung tin nhắn\" rows=\"5\" class=\"form-control\" name=\"content\"
                    id=\"message\" placeholder=\"Nội dung\"  required></textarea>
               </div>
           </div>
           <div class=\"form-row mt-2\">
               <div class=\"col\">
                   <button type=\"submit\" class=\"btn btn-primary btn-rounded btn-4 font-weight-semibold text-0\">
                       GỬI
                    </button>
               </div>
           </div>
           
       </form> 

  ", "C:\\wamp64\\www\\demo/plugins/quanganhdo/contact/components/contactform/default.htm", "");
    }
}

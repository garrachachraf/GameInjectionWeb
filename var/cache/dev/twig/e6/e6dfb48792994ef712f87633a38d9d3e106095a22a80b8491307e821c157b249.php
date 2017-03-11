<?php

/* EloboostedLoginBundle:Default:loginform.html.twig */
class __TwigTemplate_ab2dd2b8a552815832a5efae36ab5ccbb94e47932f13175c6cd42b6f0f40a865 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1d326578702cf7d4a82a324c03f34b62d39583508df1842ed6f9145ce09a830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1d326578702cf7d4a82a324c03f34b62d39583508df1842ed6f9145ce09a830->enter($__internal_e1d326578702cf7d4a82a324c03f34b62d39583508df1842ed6f9145ce09a830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $__internal_932b625893d8762a8d6a87735c6758393ea8aa206f76bf8a1ad3da8e4709a9a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932b625893d8762a8d6a87735c6758393ea8aa206f76bf8a1ad3da8e4709a9a0->enter($__internal_932b625893d8762a8d6a87735c6758393ea8aa206f76bf8a1ad3da8e4709a9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        // line 1
        echo "<form  method=\"post\">



    <p>
        <label for=\"login_username\">Username:</label>
        <input type=\"text\" name=\"login_username\" id=\"login_username\" value=\"\">
    </p>

    <p>
        <label for=\"login_password\">Password:</label>
        <input type=\"password\" name=\"login_password\" id=\"login_password\" value=\"\">
    </p>

    <p>
        <label for=\"\">&nbsp;</label>
        <input type=\"checkbox\" name=\"login_remember\" id=\"login_remember\" value=\"\">

        <label class=\"iiiii\" for=\"login_remember\">Remember me</label>
    </p>

    <p class=\"form-footer\">
        <input type=\"submit\" name=\"login_submit\" id=\"login_submit\" value=\"Log in\">
    </p>

    <p style=\"margin-top:40px;\">
        <span class=\"info-msg\">If you don't have an account, <a href=\"signup.html\">sign up</a> !<br><br>If lost password <a href=\"signup-password.html\">click here</a> and we will help you to reset !</span>
    </p>

</form>";
        
        $__internal_e1d326578702cf7d4a82a324c03f34b62d39583508df1842ed6f9145ce09a830->leave($__internal_e1d326578702cf7d4a82a324c03f34b62d39583508df1842ed6f9145ce09a830_prof);

        
        $__internal_932b625893d8762a8d6a87735c6758393ea8aa206f76bf8a1ad3da8e4709a9a0->leave($__internal_932b625893d8762a8d6a87735c6758393ea8aa206f76bf8a1ad3da8e4709a9a0_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedLoginBundle:Default:loginform.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form  method=\"post\">



    <p>
        <label for=\"login_username\">Username:</label>
        <input type=\"text\" name=\"login_username\" id=\"login_username\" value=\"\">
    </p>

    <p>
        <label for=\"login_password\">Password:</label>
        <input type=\"password\" name=\"login_password\" id=\"login_password\" value=\"\">
    </p>

    <p>
        <label for=\"\">&nbsp;</label>
        <input type=\"checkbox\" name=\"login_remember\" id=\"login_remember\" value=\"\">

        <label class=\"iiiii\" for=\"login_remember\">Remember me</label>
    </p>

    <p class=\"form-footer\">
        <input type=\"submit\" name=\"login_submit\" id=\"login_submit\" value=\"Log in\">
    </p>

    <p style=\"margin-top:40px;\">
        <span class=\"info-msg\">If you don't have an account, <a href=\"signup.html\">sign up</a> !<br><br>If lost password <a href=\"signup-password.html\">click here</a> and we will help you to reset !</span>
    </p>

</form>", "EloboostedLoginBundle:Default:loginform.html.twig", "/Library/WebServer/Documents/sprintweb/src/Eloboosted/LoginBundle/Resources/views/Default/loginform.html.twig");
    }
}

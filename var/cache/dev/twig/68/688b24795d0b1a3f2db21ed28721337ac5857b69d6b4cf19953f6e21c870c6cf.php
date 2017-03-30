<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_44316cb30c5c07419be73398cb7d424f7a2da037fd1bd3fee538107e5dc4e617 extends Twig_Template
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
        $__internal_faef40171bc9f1492c7dcb46cdb7cd5c8b2dbdd4fa33378732275791777db18b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faef40171bc9f1492c7dcb46cdb7cd5c8b2dbdd4fa33378732275791777db18b->enter($__internal_faef40171bc9f1492c7dcb46cdb7cd5c8b2dbdd4fa33378732275791777db18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ada0227bc94abc45cc0701a7532897955bbdb19f2235339c5014b857bc5ff194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada0227bc94abc45cc0701a7532897955bbdb19f2235339c5014b857bc5ff194->enter($__internal_ada0227bc94abc45cc0701a7532897955bbdb19f2235339c5014b857bc5ff194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_faef40171bc9f1492c7dcb46cdb7cd5c8b2dbdd4fa33378732275791777db18b->leave($__internal_faef40171bc9f1492c7dcb46cdb7cd5c8b2dbdd4fa33378732275791777db18b_prof);

        
        $__internal_ada0227bc94abc45cc0701a7532897955bbdb19f2235339c5014b857bc5ff194->leave($__internal_ada0227bc94abc45cc0701a7532897955bbdb19f2235339c5014b857bc5ff194_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}

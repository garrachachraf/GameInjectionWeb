<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_7b0fe8ee7ef8fd8e378d56ff494214f92369a0aa63173e8984ad310f71c7e4ef extends Twig_Template
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
        $__internal_498a5532ca378ae5e9986d20be84172d14bbc07e3d04e111efc0483e467f2ee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498a5532ca378ae5e9986d20be84172d14bbc07e3d04e111efc0483e467f2ee9->enter($__internal_498a5532ca378ae5e9986d20be84172d14bbc07e3d04e111efc0483e467f2ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_09b0135e8329f64f97a618a1a13efb7578e79a5489c65cb9261b7296d0d9ae7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b0135e8329f64f97a618a1a13efb7578e79a5489c65cb9261b7296d0d9ae7b->enter($__internal_09b0135e8329f64f97a618a1a13efb7578e79a5489c65cb9261b7296d0d9ae7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_498a5532ca378ae5e9986d20be84172d14bbc07e3d04e111efc0483e467f2ee9->leave($__internal_498a5532ca378ae5e9986d20be84172d14bbc07e3d04e111efc0483e467f2ee9_prof);

        
        $__internal_09b0135e8329f64f97a618a1a13efb7578e79a5489c65cb9261b7296d0d9ae7b->leave($__internal_09b0135e8329f64f97a618a1a13efb7578e79a5489c65cb9261b7296d0d9ae7b_prof);

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
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}

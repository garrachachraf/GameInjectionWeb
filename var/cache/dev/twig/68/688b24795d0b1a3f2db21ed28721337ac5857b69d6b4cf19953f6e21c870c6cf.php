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
        $__internal_447468e3eeeece5983e876027875435e045ceb29a9a757d199355a271492b502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447468e3eeeece5983e876027875435e045ceb29a9a757d199355a271492b502->enter($__internal_447468e3eeeece5983e876027875435e045ceb29a9a757d199355a271492b502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c6eef6183fe9758c3dd3e786fee2f56dc1e54fbd53b0fe4ea14bd1c168ebcb7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6eef6183fe9758c3dd3e786fee2f56dc1e54fbd53b0fe4ea14bd1c168ebcb7d->enter($__internal_c6eef6183fe9758c3dd3e786fee2f56dc1e54fbd53b0fe4ea14bd1c168ebcb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_447468e3eeeece5983e876027875435e045ceb29a9a757d199355a271492b502->leave($__internal_447468e3eeeece5983e876027875435e045ceb29a9a757d199355a271492b502_prof);

        
        $__internal_c6eef6183fe9758c3dd3e786fee2f56dc1e54fbd53b0fe4ea14bd1c168ebcb7d->leave($__internal_c6eef6183fe9758c3dd3e786fee2f56dc1e54fbd53b0fe4ea14bd1c168ebcb7d_prof);

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

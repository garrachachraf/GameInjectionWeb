<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0bb7e6b8630edd06e7a98062ff4a9b607c09da7c736d116a38aad018ee9e694e extends Twig_Template
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
        $__internal_7087cad71fcc8d91bd2e4469987527f95f363f0b131e175080ae7dd5a619e9f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7087cad71fcc8d91bd2e4469987527f95f363f0b131e175080ae7dd5a619e9f7->enter($__internal_7087cad71fcc8d91bd2e4469987527f95f363f0b131e175080ae7dd5a619e9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_381f16bc9bba68fe876bdfc91e9dd0c798a962865f526c2857c6637acdd5682f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381f16bc9bba68fe876bdfc91e9dd0c798a962865f526c2857c6637acdd5682f->enter($__internal_381f16bc9bba68fe876bdfc91e9dd0c798a962865f526c2857c6637acdd5682f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7087cad71fcc8d91bd2e4469987527f95f363f0b131e175080ae7dd5a619e9f7->leave($__internal_7087cad71fcc8d91bd2e4469987527f95f363f0b131e175080ae7dd5a619e9f7_prof);

        
        $__internal_381f16bc9bba68fe876bdfc91e9dd0c798a962865f526c2857c6637acdd5682f->leave($__internal_381f16bc9bba68fe876bdfc91e9dd0c798a962865f526c2857c6637acdd5682f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}

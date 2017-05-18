<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9b8b9cff819546b984c7962bcadca9ccf0639ac0bcecd5f17067d2ed047d41ff extends Twig_Template
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
        $__internal_588f286009f3d279a9cda2b3b8447e535a8f1de4df432ebcfb8cee93187b0da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_588f286009f3d279a9cda2b3b8447e535a8f1de4df432ebcfb8cee93187b0da7->enter($__internal_588f286009f3d279a9cda2b3b8447e535a8f1de4df432ebcfb8cee93187b0da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_802752e1ed855429d5bca3f50c6677cb3cbf235057e4b2aeec5fb3310e31a6db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802752e1ed855429d5bca3f50c6677cb3cbf235057e4b2aeec5fb3310e31a6db->enter($__internal_802752e1ed855429d5bca3f50c6677cb3cbf235057e4b2aeec5fb3310e31a6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_588f286009f3d279a9cda2b3b8447e535a8f1de4df432ebcfb8cee93187b0da7->leave($__internal_588f286009f3d279a9cda2b3b8447e535a8f1de4df432ebcfb8cee93187b0da7_prof);

        
        $__internal_802752e1ed855429d5bca3f50c6677cb3cbf235057e4b2aeec5fb3310e31a6db->leave($__internal_802752e1ed855429d5bca3f50c6677cb3cbf235057e4b2aeec5fb3310e31a6db_prof);

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
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}

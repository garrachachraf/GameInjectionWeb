<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b69598cfad517373e52a1f98c49b09292435511797e9c1596c8caaffd7bc673b extends Twig_Template
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
        $__internal_092e1ea509078005e9c63332871852c96b2e3192327d701c73e0e61ec72e1329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_092e1ea509078005e9c63332871852c96b2e3192327d701c73e0e61ec72e1329->enter($__internal_092e1ea509078005e9c63332871852c96b2e3192327d701c73e0e61ec72e1329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c1978e902a08ea3699c92b79507f4af376abd49d12f0bb834a3f3e828933ae5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1978e902a08ea3699c92b79507f4af376abd49d12f0bb834a3f3e828933ae5c->enter($__internal_c1978e902a08ea3699c92b79507f4af376abd49d12f0bb834a3f3e828933ae5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_092e1ea509078005e9c63332871852c96b2e3192327d701c73e0e61ec72e1329->leave($__internal_092e1ea509078005e9c63332871852c96b2e3192327d701c73e0e61ec72e1329_prof);

        
        $__internal_c1978e902a08ea3699c92b79507f4af376abd49d12f0bb834a3f3e828933ae5c->leave($__internal_c1978e902a08ea3699c92b79507f4af376abd49d12f0bb834a3f3e828933ae5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}

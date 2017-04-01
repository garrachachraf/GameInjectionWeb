<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ffcc5bd22b3f2d946c45ce92fd0f2f6bebdbe04e0d4517d8bdaaafb5dfbe2f48 extends Twig_Template
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
        $__internal_f7a96cc80b9086ef8286173414b475fd3bf430e79802debb46daeed2e81c5145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a96cc80b9086ef8286173414b475fd3bf430e79802debb46daeed2e81c5145->enter($__internal_f7a96cc80b9086ef8286173414b475fd3bf430e79802debb46daeed2e81c5145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_015cbb317730873c898ce3e3f65c696457df60b6b3fe1198b71655fe0dd82934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015cbb317730873c898ce3e3f65c696457df60b6b3fe1198b71655fe0dd82934->enter($__internal_015cbb317730873c898ce3e3f65c696457df60b6b3fe1198b71655fe0dd82934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f7a96cc80b9086ef8286173414b475fd3bf430e79802debb46daeed2e81c5145->leave($__internal_f7a96cc80b9086ef8286173414b475fd3bf430e79802debb46daeed2e81c5145_prof);

        
        $__internal_015cbb317730873c898ce3e3f65c696457df60b6b3fe1198b71655fe0dd82934->leave($__internal_015cbb317730873c898ce3e3f65c696457df60b6b3fe1198b71655fe0dd82934_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}

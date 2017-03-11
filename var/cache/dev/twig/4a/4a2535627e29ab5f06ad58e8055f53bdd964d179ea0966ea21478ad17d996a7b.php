<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a6d7250fac0fe09ae9d9dc48481a6fc3c2cdd5b65b08e4cc7595d600b905dcec extends Twig_Template
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
        $__internal_da19ed778a15bc5f34207a7a48f016b0f0b868304186dece9be4ab08f0402d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da19ed778a15bc5f34207a7a48f016b0f0b868304186dece9be4ab08f0402d37->enter($__internal_da19ed778a15bc5f34207a7a48f016b0f0b868304186dece9be4ab08f0402d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_97e103cee75575544db3e2ffd0fc2361275d7686ae74872d632222a1299ad62c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e103cee75575544db3e2ffd0fc2361275d7686ae74872d632222a1299ad62c->enter($__internal_97e103cee75575544db3e2ffd0fc2361275d7686ae74872d632222a1299ad62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_da19ed778a15bc5f34207a7a48f016b0f0b868304186dece9be4ab08f0402d37->leave($__internal_da19ed778a15bc5f34207a7a48f016b0f0b868304186dece9be4ab08f0402d37_prof);

        
        $__internal_97e103cee75575544db3e2ffd0fc2361275d7686ae74872d632222a1299ad62c->leave($__internal_97e103cee75575544db3e2ffd0fc2361275d7686ae74872d632222a1299ad62c_prof);

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
", "@Framework/Form/form_rest.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
